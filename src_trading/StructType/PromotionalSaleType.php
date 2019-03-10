<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionalSaleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details for a single promotional sale.
 * @subpackage Structs
 */
class PromotionalSaleType extends AbstractStructBase
{
    /**
     * The PromotionalSaleID
     * Meta informations extracted from the WSDL
     * - documentation: Unique ID of a promotional sale (discount and/or free shipping) for items. This field is an input field only for the SetPromotionalSale call and only if you are not adding a new promotional sale.
     * - minOccurs: 0
     * @var int
     */
    public $PromotionalSaleID;
    /**
     * The PromotionalSaleName
     * Meta informations extracted from the WSDL
     * - documentation: Name of a promotional sale for items.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionalSaleName;
    /**
     * The PromotionalSaleItemIDArray
     * Meta informations extracted from the WSDL
     * - documentation: Items covered by a promotional sale.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemIDArrayType
     */
    public $PromotionalSaleItemIDArray;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Status of a promotional sale for items.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The DiscountType
     * Meta informations extracted from the WSDL
     * - documentation: Type of a promotional sale discount for items (for example, percentage). Applies to price discount sales only.
     * - minOccurs: 0
     * @var string
     */
    public $DiscountType;
    /**
     * The DiscountValue
     * Meta informations extracted from the WSDL
     * - documentation: Value of a promotional sale discount for items, a percentage discount or a fixed amount reduction. Percentage discounts must be at least 5% and cannot exceed 75% of the original listing price. Fixed amount discounts will be in the
     * currency of the original listing. Applies to price discount sales only.
     * - minOccurs: 0
     * @var float
     */
    public $DiscountValue;
    /**
     * The PromotionalSaleStartTime
     * Meta informations extracted from the WSDL
     * - documentation: Start date of a promotional sale for items. Promotional sales can start immediately or be scheduled to start at a later date. Some sites require items to have been listed for a specific duration before they can be added to a
     * promotional sale (for example, on the US site, items must have been listed for a day before they can be added to a promotional sale).
     * - minOccurs: 0
     * @var string
     */
    public $PromotionalSaleStartTime;
    /**
     * The PromotionalSaleEndTime
     * Meta informations extracted from the WSDL
     * - documentation: End date of a promotional sale discount for items. Maximum listing durations vary by site from 14 days to 45 days. The minimum promotional sale duration is 1 day for most sites, but 3 days on some sites.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionalSaleEndTime;
    /**
     * The PromotionalSaleType
     * Meta informations extracted from the WSDL
     * - documentation: Type of promotional sale: price discount, free shipping, or both.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionalSaleType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($promotionalSaleID = null, $promotionalSaleName = null, \macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray = null, $status = null, $discountType = null, $discountValue = null, $promotionalSaleStartTime = null, $promotionalSaleEndTime = null, $promotionalSaleType = null, \DOMDocument $any = null)
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
    public function getPromotionalSaleID()
    {
        return $this->PromotionalSaleID;
    }
    /**
     * Set PromotionalSaleID value
     * @param int $promotionalSaleID
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleID($promotionalSaleID = null)
    {
        // validation for constraint: int
        if (!is_null($promotionalSaleID) && !is_numeric($promotionalSaleID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($promotionalSaleID)), __LINE__);
        }
        $this->PromotionalSaleID = $promotionalSaleID;
        return $this;
    }
    /**
     * Get PromotionalSaleName value
     * @return string|null
     */
    public function getPromotionalSaleName()
    {
        return $this->PromotionalSaleName;
    }
    /**
     * Set PromotionalSaleName value
     * @param string $promotionalSaleName
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleName($promotionalSaleName = null)
    {
        // validation for constraint: string
        if (!is_null($promotionalSaleName) && !is_string($promotionalSaleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionalSaleName)), __LINE__);
        }
        $this->PromotionalSaleName = $promotionalSaleName;
        return $this;
    }
    /**
     * Get PromotionalSaleItemIDArray value
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType|null
     */
    public function getPromotionalSaleItemIDArray()
    {
        return $this->PromotionalSaleItemIDArray;
    }
    /**
     * Set PromotionalSaleItemIDArray value
     * @param \macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleItemIDArray(\macropage\ebaysdk\trading\StructType\ItemIDArrayType $promotionalSaleItemIDArray = null)
    {
        $this->PromotionalSaleItemIDArray = $promotionalSaleItemIDArray;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get DiscountType value
     * @return string|null
     */
    public function getDiscountType()
    {
        return $this->DiscountType;
    }
    /**
     * Set DiscountType value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountType
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setDiscountType($discountType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DiscountCodeType::valueIsValid($discountType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $discountType, implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountType = $discountType;
        return $this;
    }
    /**
     * Get DiscountValue value
     * @return float|null
     */
    public function getDiscountValue()
    {
        return $this->DiscountValue;
    }
    /**
     * Set DiscountValue value
     * @param float $discountValue
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setDiscountValue($discountValue = null)
    {
        $this->DiscountValue = $discountValue;
        return $this;
    }
    /**
     * Get PromotionalSaleStartTime value
     * @return string|null
     */
    public function getPromotionalSaleStartTime()
    {
        return $this->PromotionalSaleStartTime;
    }
    /**
     * Set PromotionalSaleStartTime value
     * @param string $promotionalSaleStartTime
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleStartTime($promotionalSaleStartTime = null)
    {
        // validation for constraint: string
        if (!is_null($promotionalSaleStartTime) && !is_string($promotionalSaleStartTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionalSaleStartTime)), __LINE__);
        }
        $this->PromotionalSaleStartTime = $promotionalSaleStartTime;
        return $this;
    }
    /**
     * Get PromotionalSaleEndTime value
     * @return string|null
     */
    public function getPromotionalSaleEndTime()
    {
        return $this->PromotionalSaleEndTime;
    }
    /**
     * Set PromotionalSaleEndTime value
     * @param string $promotionalSaleEndTime
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleEndTime($promotionalSaleEndTime = null)
    {
        // validation for constraint: string
        if (!is_null($promotionalSaleEndTime) && !is_string($promotionalSaleEndTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionalSaleEndTime)), __LINE__);
        }
        $this->PromotionalSaleEndTime = $promotionalSaleEndTime;
        return $this;
    }
    /**
     * Get PromotionalSaleType value
     * @return string|null
     */
    public function getPromotionalSaleType()
    {
        return $this->PromotionalSaleType;
    }
    /**
     * Set PromotionalSaleType value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionalSaleType
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setPromotionalSaleType($promotionalSaleType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionalSaleTypeCodeType::valueIsValid($promotionalSaleType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $promotionalSaleType, implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionalSaleTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionalSaleType = $promotionalSaleType;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PromotionalSaleType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\PromotionalSaleType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
