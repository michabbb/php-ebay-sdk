<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SearchDetailsType extends AbstractStructBase
{
    /**
     * The BuyItNowEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BuyItNowEnabled = null;
    /**
     * The Picture
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Picture = null;
    /**
     * The RecentListing
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $RecentListing = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SearchDetailsType
     * @uses SearchDetailsType::setBuyItNowEnabled()
     * @uses SearchDetailsType::setPicture()
     * @uses SearchDetailsType::setRecentListing()
     * @uses SearchDetailsType::setAny()
     * @param bool $buyItNowEnabled
     * @param bool $picture
     * @param bool $recentListing
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $buyItNowEnabled = null, ?bool $picture = null, ?bool $recentListing = null, $any = null)
    {
        $this
            ->setBuyItNowEnabled($buyItNowEnabled)
            ->setPicture($picture)
            ->setRecentListing($recentListing)
            ->setAny($any);
    }
    /**
     * Get BuyItNowEnabled value
     * @return bool|null
     */
    public function getBuyItNowEnabled(): ?bool
    {
        return $this->BuyItNowEnabled;
    }
    /**
     * Set BuyItNowEnabled value
     * @param bool $buyItNowEnabled
     * @return \macropage\ebaysdk\trading\StructType\SearchDetailsType
     */
    public function setBuyItNowEnabled(?bool $buyItNowEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowEnabled) && !is_bool($buyItNowEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyItNowEnabled, true), gettype($buyItNowEnabled)), __LINE__);
        }
        $this->BuyItNowEnabled = $buyItNowEnabled;
        
        return $this;
    }
    /**
     * Get Picture value
     * @return bool|null
     */
    public function getPicture(): ?bool
    {
        return $this->Picture;
    }
    /**
     * Set Picture value
     * @param bool $picture
     * @return \macropage\ebaysdk\trading\StructType\SearchDetailsType
     */
    public function setPicture(?bool $picture = null): self
    {
        // validation for constraint: boolean
        if (!is_null($picture) && !is_bool($picture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($picture, true), gettype($picture)), __LINE__);
        }
        $this->Picture = $picture;
        
        return $this;
    }
    /**
     * Get RecentListing value
     * @return bool|null
     */
    public function getRecentListing(): ?bool
    {
        return $this->RecentListing;
    }
    /**
     * Set RecentListing value
     * @param bool $recentListing
     * @return \macropage\ebaysdk\trading\StructType\SearchDetailsType
     */
    public function setRecentListing(?bool $recentListing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($recentListing) && !is_bool($recentListing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recentListing, true), gettype($recentListing)), __LINE__);
        }
        $this->RecentListing = $recentListing;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SearchDetailsType
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
