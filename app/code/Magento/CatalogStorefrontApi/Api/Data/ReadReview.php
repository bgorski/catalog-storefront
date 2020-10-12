<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for ReadReview class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class ReadReview implements ReadReviewInterface
{

    /**
     * @var string
     */
    private $reviewId;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $nickname;

    /**
     * @var string
     */
    private $text;

    /**
     * @var array
     */
    private $ratings;
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getReviewId(): string
    {
        return (string) $this->reviewId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setReviewId(string $value): void
    {
        $this->reviewId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getProductId(): string
    {
        return (string) $this->productId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setProductId(string $value): void
    {
        $this->productId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getTitle(): string
    {
        return (string) $this->title;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setTitle(string $value): void
    {
        $this->title = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getNickname(): string
    {
        return (string) $this->nickname;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setNickname(string $value): void
    {
        $this->nickname = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getText(): string
    {
        return (string) $this->text;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setText(string $value): void
    {
        $this->text = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\RatingInterface[]
     */
    public function getRatings(): array
    {
        return (array) $this->ratings;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\RatingInterface[] $value
     * @return void
     */
    public function setRatings(array $value): void
    {
        $this->ratings = $value;
    }
}
