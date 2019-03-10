<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteLocationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the data that defines a site-based filter (used when searching for items and filtering the search result set).
 * @subpackage Structs
 */
class SiteLocationType extends AbstractStructBase
{
    /**
     * The SiteID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the criteria for filtering search results by site, where site is determined by the site ID in the SOAP URL or, for Unified Schema XML requests, X-EBAY-API-SITEID HTTP Header.
     * - minOccurs: 0
     * @var string
     */
    public $SiteID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SiteLocationType
     * @uses SiteLocationType::setSiteID()
     * @uses SiteLocationType::setAny()
     * @param string $siteID
     * @param \DOMDocument $any
     */
    public function __construct($siteID = null, \DOMDocument $any = null)
    {
        $this
            ->setSiteID($siteID)
            ->setAny($any);
    }
    /**
     * Get SiteID value
     * @return string|null
     */
    public function getSiteID()
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteIDFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteIDFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $siteID
     * @return \macropage\ebaysdk\trading\StructType\SiteLocationType
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteIDFilterCodeType::valueIsValid($siteID)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $siteID, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteIDFilterCodeType::getValidValues())), __LINE__);
        }
        $this->SiteID = $siteID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SiteLocationType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SiteLocationType
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
     * @return \macropage\ebaysdk\trading\StructType\SiteLocationType
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
