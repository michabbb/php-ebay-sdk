<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteLocationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data that defines a site-based filter (used when searching for items and filtering the search result set).
 * @subpackage Structs
 */
class SiteLocationType extends AbstractStructBase
{
    /**
     * The SiteID
     * Meta information extracted from the WSDL
     * - documentation: Specifies the criteria for filtering search results by site, where site is determined by the site ID in the SOAP URL or, for Unified Schema XML requests, X-EBAY-API-SITEID HTTP Header.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SiteID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SiteLocationType
     * @uses SiteLocationType::setSiteID()
     * @uses SiteLocationType::setAny()
     * @param string $siteID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $siteID = null, $any = null)
    {
        $this
            ->setSiteID($siteID)
            ->setAny($any);
    }
    /**
     * Get SiteID value
     * @return string|null
     */
    public function getSiteID(): ?string
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteIDFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteIDFilterCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $siteID
     * @return \macropage\ebaysdk\trading\StructType\SiteLocationType
     */
    public function setSiteID(?string $siteID = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteIDFilterCodeType::valueIsValid($siteID)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SiteIDFilterCodeType', is_array($siteID) ? implode(', ', $siteID) : var_export($siteID, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteIDFilterCodeType::getValidValues())), __LINE__);
        }
        $this->SiteID = $siteID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SiteLocationType
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
