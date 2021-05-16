<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionalSaleType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by
 * eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the <a
 * href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features
 * become available to sellers. </span> Details for a single promotional sale.
 * @subpackage Structs
 */
class PromotionalSaleType extends AbstractStructBase
{
    /**
     * The PromotionalSaleID
     * Meta information extracted from the WSDL
     * - documentation: Unique ID of a promotional sale (discount and/or free shipping) for items. This field is an input field only for the SetPromotionalSale call and only if you are not adding a new promotional sale.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PromotionalSaleID = null;
    /**
     * The PromotionalSaleName
     * Meta information extracted from the WSDL
     * - documentation: Name of a promotional sale for items.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PromotionalSaleName = null;
    /**
     * The PromotionalSaleItemIDArray
     * Meta information extracted from the WSDL
     * - documentation: Items covered by a promotional sale.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemIDArrayType $PromotionalSaleItemIDArray = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of a promotional sale for items.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The DiscountType
     * Meta information extracted from the WSDL
     * - documentation: Type of a promotional sale discount for items (for example, percentage). Applies to price discount sales only.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DiscountType = null;
    /**
     * The DiscountValue
     * Meta information extracted from the WSDL
     * - documentation: Value of a promotional sale discount for items, a percentage discount or a fixed amount reduction. Percentage discounts must be at least 5% and cannot exceed 75% of the original listing price. Fixed amount discounts will be in the
     * currency of the original listing. Applies to price discount sales only.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $DiscountValue = null;
    /**
     * The PromotionalSaleStartTime
     * Meta information extracted from the WSDL
     * - documentation: Start date of a promotional sale for items. Promotional sales can start immediately or be scheduled to start at a later date. Some sites require items to have been listed for a specific duration before they can be added to a
     * promotional sale (for example, on the US site, items must have been listed for a day before they can be added to a promotional sale).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PromotionalSaleStartTime = null;
    /**
     * The PromotionalSaleEndTime
     * Meta information extracted from the WSDL
     * - documentation: End date of a promotional sale discount for items. Maximum listing durations vary by site from 14 days to 45 days. The minimum promotional sale duration is 1 day for most sites, but 3 days on some sites.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PromotionalSaleEndTime = null;
    /**
     * The PromotionalSaleType
     * Meta information extracted from the WSDL
     * - documentation: Type of promotional sale: price discount, free shipping, or both.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PromotionalSaleType = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PromotionalSaleType
     * @uses PromotionalSaleType::setPromotionalSaleID()
     * @uses PromotionalSaleType::setPromotionalSaleName()
     * @uses PromotionalSaleType::setPromotionalSaleItemIDArray()
     * @uses PromotionalSaleType::setStatus()
     * @uses PromotionalSaleType::setDiscountType()
     * @uses PromotionalSaleType::setDiscountValue()
     * @uses PromotionalSaleType::setPromotionalSaleStartTime()
     * @uses PromotionalSaleType::setPromotionalSaleEndTime()
     * @uses PromotionalSaleType::setPromotionalSaleType()
     * @uses PromotionalSaleType::setAny()
     * @param int $promotionalSaleID
     * @param string $promotionalSaleName
     * @param \macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray
     * @param string $status
     * @param string $discountType
     * @param float $discountValue
     * @param string $promotionalSaleStartTime
     * @param string $promotionalSaleEndTime
     * @param string $promotionalSaleType
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $promotionalSaleID = null, ?string $promotionalSaleName = null, ?\macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray = null, ?string $status = null, ?string $discountType = null, ?float $discountValue = null, ?string $promotionalSaleStartTime = null, ?string $promotionalSaleEndTime = null, ?string $promotionalSaleType = null, $any = null)
    {
        $this
            ->setPromotionalSaleID($promotionalSaleID)
            ->setPromotionalSaleName($promotionalSaleName)
            ->setPromotionalSaleItemIDArray($promotionalSaleItemIDArray)
            ->setStatus($status)
            ->setDiscountType($discountType)
            ->setDiscountValue($discountValue)
            ->setPromotionalSaleStartTime($promotionalSaleStartTime)
            ->setPromotionalSaleEndTime($promotionalSaleEndTime)
            ->setPromotionalSaleType($promotionalSaleType)
            ->setAny($any);
    }
    /**
     * Get PromotionalSaleID value
     * @return int|null
     */
    public function getPromotionalSaleID(): ?int
    {
        return $this->PromotionalSaleID;
    }
    /**
     * Set PromotionalSaleID value
     * @param int $promotionalSaleID
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleID(?int $promotionalSaleID = null): self
    {
        // validation for constraint: int
        if (!is_null($promotionalSaleID) && !(is_int($promotionalSaleID) || ctype_digit($promotionalSaleID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($promotionalSaleID, true), gettype($promotionalSaleID)), __LINE__);
        }
        $this->PromotionalSaleID = $promotionalSaleID;
        
        return $this;
    }
    /**
     * Get PromotionalSaleName value
     * @return string|null
     */
    public function getPromotionalSaleName(): ?string
    {
        return $this->PromotionalSaleName;
    }
    /**
     * Set PromotionalSaleName value
     * @param string $promotionalSaleName
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleName(?string $promotionalSaleName = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionalSaleName) && !is_string($promotionalSaleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionalSaleName, true), gettype($promotionalSaleName)), __LINE__);
        }
        $this->PromotionalSaleName = $promotionalSaleName;
        
        return $this;
    }
    /**
     * Get PromotionalSaleItemIDArray value
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType|null
     */
    public function getPromotionalSaleItemIDArray(): ?\macropage\ebaysdk\trading\StructType\ItemIDArrayType
    {
        return $this->PromotionalSaleItemIDArray;
    }
    /**
     * Set PromotionalSaleItemIDArray value
     * @param \macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleItemIDArray(?\macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray = null): self
    {
        $this->PromotionalSaleItemIDArray = $promotionalSaleItemIDArray;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get DiscountType value
     * @return string|null
     */
    public function getDiscountType(): ?string
    {
        return $this->DiscountType;
    }
    /**
     * Set DiscountType value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $discountType
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setDiscountType(?string $discountType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DiscountCodeType::valueIsValid($discountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DiscountCodeType', is_array($discountType) ? implode(', ', $discountType) : var_export($discountType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountType = $discountType;
        
        return $this;
    }
    /**
     * Get DiscountValue value
     * @return float|null
     */
    public function getDiscountValue(): ?float
    {
        return $this->DiscountValue;
    }
    /**
     * Set DiscountValue value
     * @param float $discountValue
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setDiscountValue(?float $discountValue = null): self
    {
        // validation for constraint: float
        if (!is_null($discountValue) && !(is_float($discountValue) || is_numeric($discountValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discountValue, true), gettype($discountValue)), __LINE__);
        }
        $this->DiscountValue = $discountValue;
        
        return $this;
    }
    /**
     * Get PromotionalSaleStartTime value
     * @return string|null
     */
    public function getPromotionalSaleStartTime(): ?string
    {
        return $this->PromotionalSaleStartTime;
    }
    /**
     * Set PromotionalSaleStartTime value
     * @param string $promotionalSaleStartTime
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleStartTime(?string $promotionalSaleStartTime = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionalSaleStartTime) && !is_string($promotionalSaleStartTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionalSaleStartTime, true), gettype($promotionalSaleStartTime)), __LINE__);
        }
        $this->PromotionalSaleStartTime = $promotionalSaleStartTime;
        
        return $this;
    }
    /**
     * Get PromotionalSaleEndTime value
     * @return string|null
     */
    public function getPromotionalSaleEndTime(): ?string
    {
        return $this->PromotionalSaleEndTime;
    }
    /**
     * Set PromotionalSaleEndTime value
     * @param string $promotionalSaleEndTime
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleEndTime(?string $promotionalSaleEndTime = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionalSaleEndTime) && !is_string($promotionalSaleEndTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionalSaleEndTime, true), gettype($promotionalSaleEndTime)), __LINE__);
        }
        $this->PromotionalSaleEndTime = $promotionalSaleEndTime;
        
        return $this;
    }
    /**
     * Get PromotionalSaleType value
     * @return string|null
     */
    public function getPromotionalSaleType(): ?string
    {
        return $this->PromotionalSaleType;
    }
    /**
     * Set PromotionalSaleType value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $promotionalSaleType
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleType(?string $promotionalSaleType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionalSaleTypeCodeType::valueIsValid($promotionalSaleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PromotionalSaleTypeCodeType', is_array($promotionalSaleType) ? implode(', ', $promotionalSaleType) : var_export($promotionalSaleType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionalSaleTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionalSaleType = $promotionalSaleType;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
