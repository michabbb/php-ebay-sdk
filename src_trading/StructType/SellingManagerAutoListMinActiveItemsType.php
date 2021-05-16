<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoListMinActiveItemsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines the options available for an automated listing rule that keeps a minimum number of items on the site.
 * @subpackage Structs
 */
class SellingManagerAutoListMinActiveItemsType extends AbstractStructBase
{
    /**
     * The MinActiveItemCount
     * Meta information extracted from the WSDL
     * - documentation: The minimum number of listings that should be active on the site.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MinActiveItemCount = null;
    /**
     * The ListTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: The start time of the time interval during which new listings should start.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListTimeFrom = null;
    /**
     * The ListTimeTo
     * Meta information extracted from the WSDL
     * - documentation: The end time of the time interval during which new listings should start.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListTimeTo = null;
    /**
     * The SpacingIntervalInMinutes
     * Meta information extracted from the WSDL
     * - documentation: Provides a number of minutes for spacing start times of listings. Used when you list multiple items at the same time. Delays subsequent listings by the specified number of minutes.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SpacingIntervalInMinutes = null;
    /**
     * The ListingHoldInventoryLevel
     * Meta information extracted from the WSDL
     * - documentation: Sets a minimum inventory level for listings of associated products to occur.
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
     * Constructor method for SellingManagerAutoListMinActiveItemsType
     * @uses SellingManagerAutoListMinActiveItemsType::setMinActiveItemCount()
     * @uses SellingManagerAutoListMinActiveItemsType::setListTimeFrom()
     * @uses SellingManagerAutoListMinActiveItemsType::setListTimeTo()
     * @uses SellingManagerAutoListMinActiveItemsType::setSpacingIntervalInMinutes()
     * @uses SellingManagerAutoListMinActiveItemsType::setListingHoldInventoryLevel()
     * @uses SellingManagerAutoListMinActiveItemsType::setAny()
     * @param int $minActiveItemCount
     * @param string $listTimeFrom
     * @param string $listTimeTo
     * @param int $spacingIntervalInMinutes
     * @param int $listingHoldInventoryLevel
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $minActiveItemCount = null, ?string $listTimeFrom = null, ?string $listTimeTo = null, ?int $spacingIntervalInMinutes = null, ?int $listingHoldInventoryLevel = null, $any = null)
    {
        $this
            ->setMinActiveItemCount($minActiveItemCount)
            ->setListTimeFrom($listTimeFrom)
            ->setListTimeTo($listTimeTo)
            ->setSpacingIntervalInMinutes($spacingIntervalInMinutes)
            ->setListingHoldInventoryLevel($listingHoldInventoryLevel)
            ->setAny($any);
    }
    /**
     * Get MinActiveItemCount value
     * @return int|null
     */
    public function getMinActiveItemCount(): ?int
    {
        return $this->MinActiveItemCount;
    }
    /**
     * Set MinActiveItemCount value
     * @param int $minActiveItemCount
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType
     */
    public function setMinActiveItemCount(?int $minActiveItemCount = null): self
    {
        // validation for constraint: int
        if (!is_null($minActiveItemCount) && !(is_int($minActiveItemCount) || ctype_digit($minActiveItemCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minActiveItemCount, true), gettype($minActiveItemCount)), __LINE__);
        }
        $this->MinActiveItemCount = $minActiveItemCount;
        
        return $this;
    }
    /**
     * Get ListTimeFrom value
     * @return string|null
     */
    public function getListTimeFrom(): ?string
    {
        return $this->ListTimeFrom;
    }
    /**
     * Set ListTimeFrom value
     * @param string $listTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType
     */
    public function setListTimeFrom(?string $listTimeFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($listTimeFrom) && !is_string($listTimeFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listTimeFrom, true), gettype($listTimeFrom)), __LINE__);
        }
        $this->ListTimeFrom = $listTimeFrom;
        
        return $this;
    }
    /**
     * Get ListTimeTo value
     * @return string|null
     */
    public function getListTimeTo(): ?string
    {
        return $this->ListTimeTo;
    }
    /**
     * Set ListTimeTo value
     * @param string $listTimeTo
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType
     */
    public function setListTimeTo(?string $listTimeTo = null): self
    {
        // validation for constraint: string
        if (!is_null($listTimeTo) && !is_string($listTimeTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listTimeTo, true), gettype($listTimeTo)), __LINE__);
        }
        $this->ListTimeTo = $listTimeTo;
        
        return $this;
    }
    /**
     * Get SpacingIntervalInMinutes value
     * @return int|null
     */
    public function getSpacingIntervalInMinutes(): ?int
    {
        return $this->SpacingIntervalInMinutes;
    }
    /**
     * Set SpacingIntervalInMinutes value
     * @param int $spacingIntervalInMinutes
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType
     */
    public function setSpacingIntervalInMinutes(?int $spacingIntervalInMinutes = null): self
    {
        // validation for constraint: int
        if (!is_null($spacingIntervalInMinutes) && !(is_int($spacingIntervalInMinutes) || ctype_digit($spacingIntervalInMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($spacingIntervalInMinutes, true), gettype($spacingIntervalInMinutes)), __LINE__);
        }
        $this->SpacingIntervalInMinutes = $spacingIntervalInMinutes;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType
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
