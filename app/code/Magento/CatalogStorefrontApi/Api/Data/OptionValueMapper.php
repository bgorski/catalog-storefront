<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

final class OptionValueMapper
{
    /**
     * @var string
     */
    private static $dtoClassName = OptionValueInterface::class;

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
    * Set the data to populate the DTO
    *
    * @param mixed $data
    * @return $this
    */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
    * Build new DTO populated with the data
    *
    * @return OptionValue
    */
    public function build()
    {
        $dto = $this->objectManager->create(self::$dtoClassName);
        foreach ($this->data as $key => $valueData) {
            $this->setByKey($dto, $key, $valueData);
        }
        return $dto;
    }

    /**
    * Set the value of the key using setters.
    *
    * In case if the field is object, the corresponding Mapper would be create and DTO representing the field data
    * would be built
    *
    * @param OptionValue $dto
    * @param string $key
    * @param mixed $value
    */
    private function setByKey(OptionValue $dto, string $key, $value): void
    {
        switch ($key) {
            case "option_id":
                $dto->setOptionId((string) $value);
                break;
            case "product_id":
                $dto->setProductId((string) $value);
                break;
            case "type":
                $dto->setType((string) $value);
                break;
            case "is_require":
                $dto->setIsRequire((string) $value);
                break;
            case "sku":
                $dto->setSku((string) $value);
                break;
            case "max_characters":
                $dto->setMaxCharacters((string) $value);
                break;
            case "file_extension":
                $dto->setFileExtension((string) $value);
                break;
            case "image_size_x":
                $dto->setImageSizeX((string) $value);
                break;
            case "image_size_y":
                $dto->setImageSizeY((string) $value);
                break;
            case "sort_order":
                $dto->setSortOrder((string) $value);
                break;
            case "default_title":
                $dto->setDefaultTitle((string) $value);
                break;
            case "store_title":
                $dto->setStoreTitle((string) $value);
                break;
            case "title":
                $dto->setTitle((string) $value);
                break;
            case "default_price":
                $dto->setDefaultPrice((string) $value);
                break;
            case "default_price_type":
                $dto->setDefaultPriceType((string) $value);
                break;
            case "store_price":
                $dto->setStorePrice((string) $value);
                break;
            case "store_price_type":
                $dto->setStorePriceType((string) $value);
                break;
            case "price":
                $dto->setPrice((string) $value);
                break;
            case "price_type":
                $dto->setPriceType((string) $value);
                break;
            case "option_type_id":
                $dto->setOptionTypeId((string) $value);
                break;
        }
    }
}
