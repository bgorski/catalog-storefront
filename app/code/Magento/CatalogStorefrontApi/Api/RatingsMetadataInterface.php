<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api;

use \Magento\CatalogStorefrontApi\Api\Data\ImportRatingsMetadataRequestInterface;
use \Magento\CatalogStorefrontApi\Api\Data\ImportRatingsMetadataResponseInterface;
use \Magento\CatalogStorefrontApi\Api\Data\DeleteRatingsMetadataRequestInterface;
use \Magento\CatalogStorefrontApi\Api\Data\DeleteRatingsMetadataResponseInterface;
use \Magento\CatalogStorefrontApi\Api\Data\RatingsMetadataRequestInterface;
use \Magento\CatalogStorefrontApi\Api\Data\RatingsMetadataResponseInterface;

/**
 * Autogenerated description for RatingsMetadataInterface interface
 */
interface RatingsMetadataInterface
{
    /**
     * Autogenerated description for ImportRatingsMetadata interface method
     *
     * @param ImportRatingsMetadataRequestInterface $request
     * @return ImportRatingsMetadataResponseInterface
     * @throws \Throwable
     */
    public function ImportRatingsMetadata(ImportRatingsMetadataRequestInterface $request): ImportRatingsMetadataResponseInterface;

    /**
     * Autogenerated description for DeleteRatingsMetadata interface method
     *
     * @param DeleteRatingsMetadataRequestInterface $request
     * @return DeleteRatingsMetadataResponseInterface
     * @throws \Throwable
     */
    public function DeleteRatingsMetadata(DeleteRatingsMetadataRequestInterface $request): DeleteRatingsMetadataResponseInterface;

    /**
     * Autogenerated description for GetRatingsMetadata interface method
     *
     * @param RatingsMetadataRequestInterface $request
     * @return RatingsMetadataResponseInterface
     * @throws \Throwable
     */
    public function GetRatingsMetadata(RatingsMetadataRequestInterface $request): RatingsMetadataResponseInterface;
}
