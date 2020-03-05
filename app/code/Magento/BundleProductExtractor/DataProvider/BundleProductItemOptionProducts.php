<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\BundleProductExtractor\DataProvider;

use Magento\CatalogExtractor\DataProvider\DataProviderInterface as GeneralDataProvider;
use Magento\CatalogExtractor\DataProvider\NestedDataProviderInterface;

/**
 * Prepare products for bundle item options.
 */
class BundleProductItemOptionProducts implements NestedDataProviderInterface
{
    /**
     * @var GeneralDataProvider
     */
    private $generalDataProvider;

    /**
     * @param GeneralDataProvider $generalDataProvider
     */
    public function __construct(
        GeneralDataProvider $generalDataProvider
    ) {
        $this->generalDataProvider = $generalDataProvider;
    }

    /**
     * Get products for bundle item options
     *
     * @param string[] $attributes
     * @param string[] $scopes
     * @param array[][] $parentData
     * @return array
     */
    public function fetch(array $attributes, array $scopes, array $parentData): array
    {
        // TODO: handle ad-hoc solution MC-29791
        if (empty($attributes)) {
            foreach ($parentData as &$child) {
                if (!isset($child['items'])) {
                    continue;
                }
                foreach ($child['items'] as &$item) {
                    if (!isset($item['options'])) {
                        continue;
                    }
                    foreach ($item['options'] as &$option) {
                       $option['product'] = $option['entity_id'];
                    }
                }
            }
            return $parentData;
        }

        $productIds = $this->getProductIds($parentData);
        $attributesData = $this->generalDataProvider->fetch($productIds, $attributes, $scopes);

        foreach ($parentData as $entityId => $child) {
            foreach ($child['items'] as $itemKey => $item) {
                if (!isset($item['options'])) {
                    continue;
                }
                foreach ($item['options'] as $optionKey => $option) {
                    $optionProductId = $option['entity_id'];
                    $product = $attributesData[$optionProductId] ?? $optionProductId;
                    $parentData[$entityId]['items'][$itemKey]['options'][$optionKey]['product'] = $product;
                }
            }
        }

        return $parentData;
    }

    /**
     * Find products ids in parent data.
     *
     * @param array $parentData
     * @return array
     */
    private function getProductIds(array $parentData): array
    {
        $productIds = [];

        foreach ($parentData as $child) {
            if (!isset($child['items'])) {
                continue;
            }
            foreach ($child['items'] as $item) {
                if (!isset($item['options'])) {
                    continue;
                }
                foreach ($item['options'] as $option) {
                    $productIds[] = $option['entity_id'];
                }
            }
        }

        return $productIds;
    }
}
