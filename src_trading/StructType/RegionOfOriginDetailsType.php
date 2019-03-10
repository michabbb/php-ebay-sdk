<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegionOfOriginDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is no longer used; replaced by <b>ShippingLocationDetails</b>.
 * @subpackage Structs
 */
class RegionOfOriginDetailsType extends AbstractStructBase
{
    /**
     * The RegionOfOrigin
     * Meta informations extracted from the WSDL
     * - documentation: String identifier for a continent, a geographic region, or a country.
     * - minOccurs: 0
     * @var string
     */
    public $RegionOfOrigin;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Full name of the continent, geographic region, or country; useful for display purposes.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the status of the Region of Origin value. Only Region of Origin values in the 'Active' state can be used.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RegionOfOriginDetailsType
     * @uses RegionOfOriginDetailsType::setRegionOfOrigin()
     * @uses RegionOfOriginDetailsType::setDescription()
     * @uses RegionOfOriginDetailsType::setStatus()
     * @uses RegionOfOriginDetailsType::setDetailVersion()
     * @uses RegionOfOriginDetailsType::setUpdateTime()
     * @uses RegionOfOriginDetailsType::setAny()
     * @param string $regionOfOrigin
     * @param string $description
     * @param string $status
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($regionOfOrigin = null, $description = null, $status = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setRegionOfOrigin($regionOfOrigin)
            ->setDescription($description)
            ->setStatus($status)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get RegionOfOrigin value
     * @return string|null
     */
    public function getRegionOfOrigin()
    {
        return $this->RegionOfOrigin;
    }
    /**
     * Set RegionOfOrigin value
     * @param string $regionOfOrigin
     * @return \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType
     */
    public function setRegionOfOrigin($regionOfOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($regionOfOrigin) && !is_string($regionOfOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($regionOfOrigin)), __LINE__);
        }
        $this->RegionOfOrigin = $regionOfOrigin;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @uses \macropage\ebaysdk\trading\EnumType\StatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\StatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\RegionOfOriginDetailsType
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
