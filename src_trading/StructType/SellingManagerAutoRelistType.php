<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoRelistType StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides information about an automated relisting rule. Automated relisting rules cannot be combined with automated listing rules. A template can have one set of information per automated relisting rule specified.
 * @subpackage Structs
 */
class SellingManagerAutoRelistType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type of auto-relist rule for the item.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The RelistCondition
     * Meta information extracted from the WSDL
     * - documentation: The condition under which relist occurs.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RelistCondition = null;
    /**
     * The RelistAfterDays
     * Meta information extracted from the WSDL
     * - documentation: Used when RelistCondition equals RelistAfterDaysHours; specifies the number days after the item ends that it should be relisted.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RelistAfterDays = null;
    /**
     * The RelistAfterHours
     * Meta information extracted from the WSDL
     * - documentation: Used when RelistCondition equals RelistAfterDaysHours; specifies the number hours after the item ends that it should be relisted.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RelistAfterHours = null;
    /**
     * The RelistAtSpecificTimeOfDay
     * Meta information extracted from the WSDL
     * - documentation: Used when RelistCondition equals RelistAtSpecificTimeOfDay; specifies the time of day the item should be relisted.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RelistAtSpecificTimeOfDay = null;
    /**
     * The BestOfferDetails
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether Best Offer should be enabled on the auto-relisted item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BestOfferDetailsType $BestOfferDetails = null;
    /**
     * The ListingHoldInventoryLevel
     * Meta information extracted from the WSDL
     * - documentation: Specifies that item is not listed if inventory levels on the associated product are at or below the specified level.
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $type = null, ?string $relistCondition = null, ?int $relistAfterDays = null, ?int $relistAfterHours = null, ?string $relistAtSpecificTimeOfDay = null, ?\macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails = null, ?int $listingHoldInventoryLevel = null, $any = null)
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
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistTypeCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get RelistCondition value
     * @return string|null
     */
    public function getRelistCondition(): ?string
    {
        return $this->RelistCondition;
    }
    /**
     * Set RelistCondition value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $relistCondition
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setRelistCondition(?string $relistCondition = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistOptionCodeType::valueIsValid($relistCondition)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistOptionCodeType', is_array($relistCondition) ? implode(', ', $relistCondition) : var_export($relistCondition, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerAutoRelistOptionCodeType::getValidValues())), __LINE__);
        }
        $this->RelistCondition = $relistCondition;
        
        return $this;
    }
    /**
     * Get RelistAfterDays value
     * @return int|null
     */
    public function getRelistAfterDays(): ?int
    {
        return $this->RelistAfterDays;
    }
    /**
     * Set RelistAfterDays value
     * @param int $relistAfterDays
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setRelistAfterDays(?int $relistAfterDays = null): self
    {
        // validation for constraint: int
        if (!is_null($relistAfterDays) && !(is_int($relistAfterDays) || ctype_digit($relistAfterDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($relistAfterDays, true), gettype($relistAfterDays)), __LINE__);
        }
        $this->RelistAfterDays = $relistAfterDays;
        
        return $this;
    }
    /**
     * Get RelistAfterHours value
     * @return int|null
     */
    public function getRelistAfterHours(): ?int
    {
        return $this->RelistAfterHours;
    }
    /**
     * Set RelistAfterHours value
     * @param int $relistAfterHours
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setRelistAfterHours(?int $relistAfterHours = null): self
    {
        // validation for constraint: int
        if (!is_null($relistAfterHours) && !(is_int($relistAfterHours) || ctype_digit($relistAfterHours))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($relistAfterHours, true), gettype($relistAfterHours)), __LINE__);
        }
        $this->RelistAfterHours = $relistAfterHours;
        
        return $this;
    }
    /**
     * Get RelistAtSpecificTimeOfDay value
     * @return string|null
     */
    public function getRelistAtSpecificTimeOfDay(): ?string
    {
        return $this->RelistAtSpecificTimeOfDay;
    }
    /**
     * Set RelistAtSpecificTimeOfDay value
     * @param string $relistAtSpecificTimeOfDay
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setRelistAtSpecificTimeOfDay(?string $relistAtSpecificTimeOfDay = null): self
    {
        // validation for constraint: string
        if (!is_null($relistAtSpecificTimeOfDay) && !is_string($relistAtSpecificTimeOfDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relistAtSpecificTimeOfDay, true), gettype($relistAtSpecificTimeOfDay)), __LINE__);
        }
        $this->RelistAtSpecificTimeOfDay = $relistAtSpecificTimeOfDay;
        
        return $this;
    }
    /**
     * Get BestOfferDetails value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType|null
     */
    public function getBestOfferDetails(): ?\macropage\ebaysdk\trading\StructType\BestOfferDetailsType
    {
        return $this->BestOfferDetails;
    }
    /**
     * Set BestOfferDetails value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public function setBestOfferDetails(?\macropage\ebaysdk\trading\StructType\BestOfferDetailsType $bestOfferDetails = null): self
    {
        $this->BestOfferDetails = $bestOfferDetails;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
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
