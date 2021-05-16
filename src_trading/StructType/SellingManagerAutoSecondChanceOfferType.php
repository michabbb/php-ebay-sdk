<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoSecondChanceOfferType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines the options available for an automated Second Chance Offer rule.
 * @subpackage Structs
 */
class SellingManagerAutoSecondChanceOfferType extends AbstractStructBase
{
    /**
     * The SecondChanceOfferCondition
     * Meta information extracted from the WSDL
     * - documentation: The condition under which a Second Chance Offer should be sent.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SecondChanceOfferCondition = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Used when SecondChanceOfferCondition is equal to BidsGreaterThanAmount or BidsGreaterThanCostPlusAmount. Specifies the amount associated with the SecondChanceOfferCondition.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Amount = null;
    /**
     * The ProfitPercent
     * Meta information extracted from the WSDL
     * - documentation: Used when SecondChanceOfferCondition is equal to BidsGreaterThanCostPlusPercentage to specify the amount of profit associated with the SecondChanceOfferCondition.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ProfitPercent = null;
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: Specifies the length of time the Second Chance Offer listing will be active. The recipient bidder has that much time to purchase the item or the offer expires.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Duration = null;
    /**
     * The ListingHoldInventoryLevel
     * Meta information extracted from the WSDL
     * - documentation: Do not list if inventory levels on the associated product are at or below the specified amount.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ListingHoldInventoryLevel = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $secondChanceOfferCondition = null, ?\macropage\ebaysdk\trading\StructType\AmountType $amount = null, ?float $profitPercent = null, ?string $duration = null, ?int $listingHoldInventoryLevel = null, $any = null)
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
    public function getSecondChanceOfferCondition(): ?string
    {
        return $this->SecondChanceOfferCondition;
    }
    /**
     * Set SecondChanceOfferCondition value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $secondChanceOfferCondition
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setSecondChanceOfferCondition(?string $secondChanceOfferCondition = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::valueIsValid($secondChanceOfferCondition)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType', is_array($secondChanceOfferCondition) ? implode(', ', $secondChanceOfferCondition) : var_export($secondChanceOfferCondition, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerAutoSecondChanceOfferTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SecondChanceOfferCondition = $secondChanceOfferCondition;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setAmount(?\macropage\ebaysdk\trading\StructType\AmountType $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get ProfitPercent value
     * @return float|null
     */
    public function getProfitPercent(): ?float
    {
        return $this->ProfitPercent;
    }
    /**
     * Set ProfitPercent value
     * @param float $profitPercent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setProfitPercent(?float $profitPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($profitPercent) && !(is_float($profitPercent) || is_numeric($profitPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($profitPercent, true), gettype($profitPercent)), __LINE__);
        }
        $this->ProfitPercent = $profitPercent;
        
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @uses \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $duration
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setDuration(?string $duration = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::valueIsValid($duration)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType', is_array($duration) ? implode(', ', $duration) : var_export($duration, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::getValidValues())), __LINE__);
        }
        $this->Duration = $duration;
        
        return $this;
    }
    /**
     * Get ListingHoldInventoryLevel value
     * @return int|null
     */
    public function getListingHoldInventoryLevel(): ?int
    {
        return $this->ListingHoldInventoryLevel;
    }
    /**
     * Set ListingHoldInventoryLevel value
     * @param int $listingHoldInventoryLevel
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public function setListingHoldInventoryLevel(?int $listingHoldInventoryLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($listingHoldInventoryLevel) && !(is_int($listingHoldInventoryLevel) || ctype_digit($listingHoldInventoryLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listingHoldInventoryLevel, true), gettype($listingHoldInventoryLevel)), __LINE__);
        }
        $this->ListingHoldInventoryLevel = $listingHoldInventoryLevel;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
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
