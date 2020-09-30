<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for Video interface
 *
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 */
interface VideoInterface
{
    /**
     * Autogenerated description for getPreview() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\MediaResourceInterface|null
     */
    public function getPreview(): ?\Magento\CatalogStorefrontApi\Api\Data\MediaResourceInterface;

    /**
     * Autogenerated description for setPreview() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\MediaResourceInterface $value
     * @return void
     */
    public function setPreview(\Magento\CatalogStorefrontApi\Api\Data\MediaResourceInterface $value): void;

    /**
     * Autogenerated description for getVideo() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\VideoItemInterface|null
     */
    public function getVideo(): ?\Magento\CatalogStorefrontApi\Api\Data\VideoItemInterface;

    /**
     * Autogenerated description for setVideo() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\VideoItemInterface $value
     * @return void
     */
    public function setVideo(\Magento\CatalogStorefrontApi\Api\Data\VideoItemInterface $value): void;

    /**
     * Autogenerated description for getSortOrder() interface method
     *
     * @return string
     */
    public function getSortOrder(): string;

    /**
     * Autogenerated description for setSortOrder() interface method
     *
     * @param string $value
     * @return void
     */
    public function setSortOrder(string $value): void;
}
