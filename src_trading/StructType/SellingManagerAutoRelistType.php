<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoRelistType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information about an automated relisting rule. Automated relisting rules cannot be combined with automated listing rules. A template can have one set of information per automated relisting rule specified.
 * @subpackage Structs
 */
class SellingManagerAutoRelistType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The type of auto-relist rule for the item.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The RelistCondition
     * Meta informations extracted from the WSDL
     * - documentation: The condition under which relist occurs.
     * - minOccurs: 0
     * @var string
     */
    public $RelistCondition;
    /**
     * The RelistAfterDays
     * Meta informations extracted from the WSDL
     * - documentation: Used when RelistCondition equals RelistAfterDaysHours; specifies the number days after the item ends that it should be relisted.
     * - minOccurs: 0
     * @var int
     */
    public $RelistAfterDays;
    /**
     * The RelistAfterHours
     * Meta informations extracted from the WSDL
     * - documentation: Used when RelistCondition equals RelistAfterDaysHours; specifies the number hours after the item ends that it should be relisted.
     * - minOccurs: 0
     * @var int
     */
    public $RelistAfterHours;
    /**
     * The RelistAtSpecificTimeOfDay
     * Meta informations extracted from the WSDL
     * - documentation: Used when RelistCondition equals RelistAtSpecificTimeOfDay; specifies the time of day the item should be relisted.
     * - minOccurs: 0
     * @var string
     */
    public $RelistAtSpecificTimeOfDay;
    /**
     * The BestOfferDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether Best Offer should be enabled on the auto-relisted item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public $BestOfferDetails;
    /**
     * The ListingHoldInventoryLevel
     * Meta informations extracted from the WSDL
     * - documentation: Specifies that item is not listed if inventory levels on the associated product are at or below the specified level.
     * - minOccurs: 0
     * @var int
     */
    public $ListingHoldInventoryLevel;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerAutoRelistType
     * @uses SellingManagerAutoRelistType::setType()
     * @uses SellingManagerAutoRelistType::setRelistCondition()
     * @uses SellingManagerAutoRelistType::setRelistAfterDays()
     * @uses SellingManagerAutoRelistType::setRelistAfterHours()
     * @uses SellingManagerAutoRelistType::setRelistAtSpecificTimeOfDay()
     * @uses SellingManagerAutoRelistType::setBestOfferDetails()
     * @uses SellingManagerAutoRelistType::setListingHoldInventoryLevel()
     * @uses SellingManagerAutoRelistType::setAny()
     * @param string $type
     * @param string $relistCondition
     * @param int $relistAfterDays
     * @param int $relistAfterHours
     * @param string $relistAtSpecificTimeOfDay
     * @param \macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails
     * @param int $listingHoldInventoryLevel
     * @param \DOMDocument $any
     */
    public function __construct($type = null, $relistCondition = null, $relistAfterDays = null, $relistAfterHours = null, $relistAtSpecificTimeOfDay = null, \macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails = null, $listingHoldInventoryLevel = null, \DOMDocument $any = null)
    {
        $this
            ->setType($type)
            ->setRelistCondition($relistCondition)
            ->setRelistAfterDays($relistAfterDays)
            ->setRelistAfterHours($relistAfterHours)
            ->setRelistAtSpecificTimeOfDay($relistAtSpecificTimeOfDay)
            ->setBestOfferDetails($bestOfferDetails)
            ->setListingHoldInventoryLevel($listingHoldInventoryLevel)
            ->setAny($any);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get RelistCondition value
     * @return string|null
     */
    public function getRelistCondition()
    {
        return $this->RelistCondition;
    }
    /**
     * Set RelistCondition value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $relistCondition
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setRelistCondition($relistCondition = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistOptionCodeType::valueIsValid($relistCondition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $relistCondition, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistOptionCodeType::getValidValues())), __LINE__);
        }
        $this->RelistCondition = $relistCondition;
        return $this;
    }
    /**
     * Get RelistAfterDays value
     * @return int|null
     */
    public function getRelistAfterDays()
    {
        return $this->RelistAfterDays;
    }
    /**
     * Set RelistAfterDays value
     * @param int $relistAfterDays
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setRelistAfterDays($relistAfterDays = null)
    {
        // validation for constraint: int
        if (!is_null($relistAfterDays) && !is_numeric($relistAfterDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($relistAfterDays)), __LINE__);
        }
        $this->RelistAfterDays = $relistAfterDays;
        return $this;
    }
    /**
     * Get RelistAfterHours value
     * @return int|null
     */
    public function getRelistAfterHours()
    {
        return $this->RelistAfterHours;
    }
    /**
     * Set RelistAfterHours value
     * @param int $relistAfterHours
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setRelistAfterHours($relistAfterHours = null)
    {
        // validation for constraint: int
        if (!is_null($relistAfterHours) && !is_numeric($relistAfterHours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($relistAfterHours)), __LINE__);
        }
        $this->RelistAfterHours = $relistAfterHours;
        return $this;
    }
    /**
     * Get RelistAtSpecificTimeOfDay value
     * @return string|null
     */
    public function getRelistAtSpecificTimeOfDay()
    {
        return $this->RelistAtSpecificTimeOfDay;
    }
    /**
     * Set RelistAtSpecificTimeOfDay value
     * @param string $relistAtSpecificTimeOfDay
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setRelistAtSpecificTimeOfDay($relistAtSpecificTimeOfDay = null)
    {
        // validation for constraint: string
        if (!is_null($relistAtSpecificTimeOfDay) && !is_string($relistAtSpecificTimeOfDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relistAtSpecificTimeOfDay)), __LINE__);
        }
        $this->RelistAtSpecificTimeOfDay = $relistAtSpecificTimeOfDay;
        return $this;
    }
    /**
     * Get BestOfferDetails value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType|null
     */
    public function getBestOfferDetails()
    {
        return $this->BestOfferDetails;
    }
    /**
     * Set BestOfferDetails value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setBestOfferDetails(\macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails = null)
    {
        $this->BestOfferDetails = $bestOfferDetails;
        return $this;
    }
    /**
     * Get ListingHoldInventoryLevel value
     * @return int|null
     */
    public function getListingHoldInventoryLevel()
    {
        return $this->ListingHoldInventoryLevel;
    }
    /**
     * Set ListingHoldInventoryLevel value
     * @param int $listingHoldInventoryLevel
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setListingHoldInventoryLevel($listingHoldInventoryLevel = null)
    {
        // validation for constraint: int
        if (!is_null($listingHoldInventoryLevel) && !is_numeric($listingHoldInventoryLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listingHoldInventoryLevel)), __LINE__);
        }
        $this->ListingHoldInventoryLevel = $listingHoldInventoryLevel;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
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
