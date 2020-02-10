<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CatalogStorefront\DataProvider;

use Magento\CatalogStorefront\Model\Storage\Client\Config\Category;
use Magento\CatalogStorefront\Model\Storage\Client\QueryInterface;
use Magento\CatalogStorefront\Model\Storage\State;
use Magento\Framework\Exception\NotFoundException;
use Psr\Log\LoggerInterface;

/**
 * Category storage reader.
 */
class CategoryDataProvider
{
    /**
     * @var QueryInterface
     */
    private $query;

    /**
     * @var State
     */
    private $storageState;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var LinkedEntityHydrator
     */
    private $linkedEntityHydrator;

    /**
     * @param QueryInterface $query
     * @param State $storageState
     * @param LoggerInterface $logger
     * @param LinkedEntityHydrator $linkedEntityHydrator
     */
    public function __construct(
        QueryInterface $query,
        State $storageState,
        LoggerInterface $logger,
        LinkedEntityHydrator $linkedEntityHydrator
    ) {
        $this->query = $query;
        $this->storageState = $storageState;
        $this->logger = $logger;
        $this->linkedEntityHydrator = $linkedEntityHydrator;
    }

    /**
     * Fetch category data from storage
     *
     * @param int[] $categoryIds
     * @param array $attributes
     * @param array $scopes
     * @return array
     * @throws \Magento\Framework\Exception\FileSystemException
     * @throws \Magento\Framework\Exception\RuntimeException
     */
    public function fetch(array $categoryIds, array $attributes, array $scopes): array
    {
        $items = [];
        if (!$categoryIds) {
            return $items;
        }
        $categories = [];
        $storageName = $this->storageState->getCurrentDataSourceName([$scopes['store'], Category::ENTITY_NAME]);
        try {
            $entities = $this->query->getEntries(
                $storageName,
                Category::ENTITY_NAME,
                $categoryIds,
                $this->getFirstLevelAttributes($attributes)
            );
        } catch (NotFoundException $notFoundException) {
            $this->logger->error(
                \sprintf(
                    'Cannot find categories for ids "%s" in the scope "%s"',
                    \implode(', ', $categoryIds),
                    \implode(', ', $scopes)
                ),
                ['exception' => $notFoundException]
            );
            return [];
        } catch (\Throwable $e) {
            $this->logger->error($e);
        }

        foreach ($entities as $entry) {
            $data = $entry->getData();
            if (!$data) {
                continue;
            }
            $categories[$entry->getId()] = $data;
        }
        $categories = $this->linkedEntityHydrator->hydrate($categories, $attributes, $scopes);

        return $this->prepareItemsOutput($categories, $categoryIds);
    }

    /**
     * Get attributes of first level
     *
     * @param array $attributes
     * @return array
     */
    private function getFirstLevelAttributes($attributes): array
    {
        $firstLevel = ['id', 'level', 'path'];
        foreach ($attributes as $name => $value) {
            $firstLevel[] = \is_array($value) ? $name : $value;
        }

        return $firstLevel;
    }

    /**
     * Process fetched data and prepare it for output format.
     *
     * @param array $items
     * @param int[] $categoryIds
     * @return array
     */
    private function prepareItemsOutput(array $items, array $categoryIds): array
    {
        // return items in the same order as category ids
        $sortedItems = [];
        foreach ($categoryIds as $id) {
            if (isset($items[$id])) {
                $sortedItems[$id] = $items[$id];
            }
        }
        return $sortedItems;
    }
}
