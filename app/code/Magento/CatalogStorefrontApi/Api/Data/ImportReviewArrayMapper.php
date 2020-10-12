<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Autogenerated description for ImportReview class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class ImportReviewArrayMapper
{
    /**
     * @var mixed
     */
    private $data;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
    * Convert the DTO to the array with the data
    *
    * @param ImportReview $dto
    * @return array
    */
    public function convertToArray(ImportReview $dto)
    {
        $result = [];
        $result["review_id"] = $dto->getReviewId();
        $result["product_id"] = $dto->getProductId();
        $result["title"] = $dto->getTitle();
        $result["nickname"] = $dto->getNickname();
        $result["text"] = $dto->getText();
        $result["customer_id"] = $dto->getCustomerId();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getRatings() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\CatalogStorefrontApi\Api\Data\RatingArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["ratings"] = $fieldArray;
        return $result;
    }
}
