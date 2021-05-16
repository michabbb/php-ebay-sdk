<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoriesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the category data for the eBay site specified as input. The category data is contained in a CategoryArrayType object, within which are zero, one, or multiple CategoryType objects. Each CategoryType object contains the detail
 * data for one category. Other fields tell how many categories are returned in a call, when the category hierarchy was last updated, and the version of the category hierarchy (all three of which can differ from one eBay site to the next).
 * @subpackage Structs
 */
class GetCategoriesResponseType extends AbstractResponseType
{
    /**
     * The CategoryArray
     * Meta information extracted from the WSDL
     * - documentation: List of the returned categories. The category array contains one CategoryType object for each returned category. Returns empty if no detail level is specified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\CategoryArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\CategoryArrayType $CategoryArray = null;
    /**
     * The CategoryCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates the number of categories returned (i.e., the number of CategoryType objects in CategoryArray).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CategoryCount = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the last date and time that eBay modified the category hierarchy for the specified eBay site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The CategoryVersion
     * Meta information extracted from the WSDL
     * - documentation: Indicates the version of the category hierarchy on the specified eBay site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryVersion = null;
    /**
     * The ReservePriceAllowed
     * Meta information extracted from the WSDL
     * - documentation: If true, <b>ReservePriceAllowed</b> indicates that all categories on the site allow the seller to specify a reserve price for an item. If false, this field is not returned in the response and all categories on the site do not
     * normally allow sellers to specify reserve prices. The Category.ORPA (override reserve price allowed) field can override (or toggle) the reserve price allowed setting for a given category. For example, if <b>ReservePriceAllowed</b> is false and
     * Category.ORPA is true, the category overrides the site setting and supports reserve prices. If <b>ReservePriceAllowed</b> is true and Category.ORPA is true, the category overrides the site setting and does does not support reserve prices.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReservePriceAllowed = null;
    /**
     * The MinimumReservePrice
     * Meta information extracted from the WSDL
     * - documentation: Indicates the lowest possible reserve price allowed for any item listed in any category on the site. You can use the fields returned by <b>GetCategoryFeatures</b> to determine if a different Minimum Reserve Price is defined for the
     * category you want to use.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $MinimumReservePrice = null;
    /**
     * The ReduceReserveAllowed
     * Meta information extracted from the WSDL
     * - documentation: If true, <b>ReduceReserveAllowed</b> indicates that all categories on the site allow the seller to reduce an item's reserve price. If false, this field is not returned in the response and all categories on the site do not normally
     * allow sellers to reduce an item's reserve price. The Category.ORRA (override reduce reserve price) field can override (or toggle) the reserve price reduction setting for a given category. For example, if <b>ReduceReserveAllowed</b> is false and
     * Category.ORRA is true, the category overrides the site setting and supports reducing reserve prices. If <b>ReduceReserveAllowed</b> is true and Category.ORRA is true, the category overrides the site setting and does does not support reducing reserve
     * prices.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReduceReserveAllowed = null;
    /**
     * Constructor method for GetCategoriesResponseType
     * @uses GetCategoriesResponseType::setCategoryArray()
     * @uses GetCategoriesResponseType::setCategoryCount()
     * @uses GetCategoriesResponseType::setUpdateTime()
     * @uses GetCategoriesResponseType::setCategoryVersion()
     * @uses GetCategoriesResponseType::setReservePriceAllowed()
     * @uses GetCategoriesResponseType::setMinimumReservePrice()
     * @uses GetCategoriesResponseType::setReduceReserveAllowed()
     * @param \macropage\ebaysdk\trading\ArrayType\CategoryArrayType $categoryArray
     * @param int $categoryCount
     * @param string $updateTime
     * @param string $categoryVersion
     * @param bool $reservePriceAllowed
     * @param float $minimumReservePrice
     * @param bool $reduceReserveAllowed
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\CategoryArrayType $categoryArray = null, ?int $categoryCount = null, ?string $updateTime = null, ?string $categoryVersion = null, ?bool $reservePriceAllowed = null, ?float $minimumReservePrice = null, ?bool $reduceReserveAllowed = null)
    {
        $this
            ->setCategoryArray($categoryArray)
            ->setCategoryCount($categoryCount)
            ->setUpdateTime($updateTime)
            ->setCategoryVersion($categoryVersion)
            ->setReservePriceAllowed($reservePriceAllowed)
            ->setMinimumReservePrice($minimumReservePrice)
            ->setReduceReserveAllowed($reduceReserveAllowed);
    }
    /**
     * Get CategoryArray value
     * @return \macropage\ebaysdk\trading\ArrayType\CategoryArrayType|null
     */
    public function getCategoryArray(): ?\macropage\ebaysdk\trading\ArrayType\CategoryArrayType
    {
        return $this->CategoryArray;
    }
    /**
     * Set CategoryArray value
     * @param \macropage\ebaysdk\trading\ArrayType\CategoryArrayType $categoryArray
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesResponseType
     */
    public function setCategoryArray(?\macropage\ebaysdk\trading\ArrayType\CategoryArrayType $categoryArray = null): self
    {
        $this->CategoryArray = $categoryArray;
        
        return $this;
    }
    /**
     * Get CategoryCount value
     * @return int|null
     */
    public function getCategoryCount(): ?int
    {
        return $this->CategoryCount;
    }
    /**
     * Set CategoryCount value
     * @param int $categoryCount
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesResponseType
     */
    public function setCategoryCount(?int $categoryCount = null): self
    {
        // validation for constraint: int
        if (!is_null($categoryCount) && !(is_int($categoryCount) || ctype_digit($categoryCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryCount, true), gettype($categoryCount)), __LINE__);
        }
        $this->CategoryCount = $categoryCount;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesResponseType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
        return $this;
    }
    /**
     * Get CategoryVersion value
     * @return string|null
     */
    public function getCategoryVersion(): ?string
    {
        return $this->CategoryVersion;
    }
    /**
     * Set CategoryVersion value
     * @param string $categoryVersion
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesResponseType
     */
    public function setCategoryVersion(?string $categoryVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryVersion) && !is_string($categoryVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryVersion, true), gettype($categoryVersion)), __LINE__);
        }
        $this->CategoryVersion = $categoryVersion;
        
        return $this;
    }
    /**
     * Get ReservePriceAllowed value
     * @return bool|null
     */
    public function getReservePriceAllowed(): ?bool
    {
        return $this->ReservePriceAllowed;
    }
    /**
     * Set ReservePriceAllowed value
     * @param bool $reservePriceAllowed
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesResponseType
     */
    public function setReservePriceAllowed(?bool $reservePriceAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reservePriceAllowed) && !is_bool($reservePriceAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reservePriceAllowed, true), gettype($reservePriceAllowed)), __LINE__);
        }
        $this->ReservePriceAllowed = $reservePriceAllowed;
        
        return $this;
    }
    /**
     * Get MinimumReservePrice value
     * @return float|null
     */
    public function getMinimumReservePrice(): ?float
    {
        return $this->MinimumReservePrice;
    }
    /**
     * Set MinimumReservePrice value
     * @param float $minimumReservePrice
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesResponseType
     */
    public function setMinimumReservePrice(?float $minimumReservePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($minimumReservePrice) && !(is_float($minimumReservePrice) || is_numeric($minimumReservePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimumReservePrice, true), gettype($minimumReservePrice)), __LINE__);
        }
        $this->MinimumReservePrice = $minimumReservePrice;
        
        return $this;
    }
    /**
     * Get ReduceReserveAllowed value
     * @return bool|null
     */
    public function getReduceReserveAllowed(): ?bool
    {
        return $this->ReduceReserveAllowed;
    }
    /**
     * Set ReduceReserveAllowed value
     * @param bool $reduceReserveAllowed
     * @return \macropage\ebaysdk\trading\StructType\GetCategoriesResponseType
     */
    public function setReduceReserveAllowed(?bool $reduceReserveAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reduceReserveAllowed) && !is_bool($reduceReserveAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reduceReserveAllowed, true), gettype($reduceReserveAllowed)), __LINE__);
        }
        $this->ReduceReserveAllowed = $reduceReserveAllowed;
        
        return $this;
    }
}
