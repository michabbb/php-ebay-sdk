<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoSecondChanceOfferType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the options available for an automated Second Chance Offer rule.
 * @subpackage Structs
 */
class SellingManagerAutoSecondChanceOfferType extends AbstractStructBase
{
    /**
     * The SecondChanceOfferCondition
     * Meta informations extracted from the WSDL
     * - documentation: The condition under which a Second Chance Offer should be sent.
     * - minOccurs: 0
     * @var string
     */
    public $SecondChanceOfferCondition;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Used when SecondChanceOfferCondition is equal to BidsGreaterThanAmount or BidsGreaterThanCostPlusAmount. Specifies the amount associated with the SecondChanceOfferCondition.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Amount;
    /**
     * The ProfitPercent
     * Meta informations extracted from the WSDL
     * - documentation: Used when SecondChanceOfferCondition is equal to BidsGreaterThanCostPlusPercentage to specify the amount of profit associated with the SecondChanceOfferCondition.
     * - minOccurs: 0
     * @var float
     */
    public $ProfitPercent;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the length of time the Second Chance Offer listing will be active. The recipient bidder has that much time to purchase the item or the offer expires.
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * The ListingHoldInventoryLevel
     * Meta informations extracted from the WSDL
     * - documentation: Do not list if inventory levels on the associated product are at or below the specified amount.
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
     * Constructor method for SellingManagerAutoSecondChanceOfferType
     * @uses SellingManagerAutoSecondChanceOfferType::setSecondChanceOfferCondition()
     * @uses SellingManagerAutoSecondChanceOfferType::setAmount()
     * @uses SellingManagerAutoSecondChanceOfferType::setProfitPercent()
     * @uses SellingManagerAutoSecondChanceOfferType::setDuration()
     * @uses SellingManagerAutoSecondChanceOfferType::setListingHoldInventoryLevel()
     * @uses SellingManagerAutoSecondChanceOfferType::setAny()
     * @param string $secondChanceOfferCondition
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amount
     * @param float $profitPercent
     * @param string $duration
     * @param int $listingHoldInventoryLevel
     * @param \DOMDocument $any
     */
    public function __construct($secondChanceOfferCondition = null, \macropage\ebaysdk\trading\StructType\AmountType $amount = null, $profitPercent = null, $duration = null, $listingHoldInventoryLevel = null, \DOMDocument $any = null)
    {
        $this
            ->setSecondChanceOfferCondition($secondChanceOfferCondition)
            ->setAmount($amount)
            ->setProfitPercent($profitPercent)
            ->setDuration($duration)
            ->setListingHoldInventoryLevel($listingHoldInventoryLevel)
            ->setAny($any);
    }
    /**
     * Get SecondChanceOfferCondition value
     * @return string|null
     */
    public function getSecondChanceOfferCondition()
    {
        return $this->SecondChanceOfferCondition;
    }
    /**
     * Set SecondChanceOfferCondition value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $secondChanceOfferCondition
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setSecondChanceOfferCondition($secondChanceOfferCondition = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::valueIsValid($secondChanceOfferCondition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $secondChanceOfferCondition, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SecondChanceOfferCondition = $secondChanceOfferCondition;
        return $this;
    }
    /**
     * Get Amount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setAmount(\macropage\ebaysdk\trading\StructType\AmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get ProfitPercent value
     * @return float|null
     */
    public function getProfitPercent()
    {
        return $this->ProfitPercent;
    }
    /**
     * Set ProfitPercent value
     * @param float $profitPercent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setProfitPercent($profitPercent = null)
    {
        $this->ProfitPercent = $profitPercent;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @uses \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $duration
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::valueIsValid($duration)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $duration, implode(', ', \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::getValidValues())), __LINE__);
        }
        $this->Duration = $duration;
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
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
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
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
