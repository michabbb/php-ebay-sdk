<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingPackageDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details about type of package used to ship an item.
 * @subpackage Structs
 */
class ShippingPackageDetailsType extends AbstractStructBase
{
    /**
     * The PackageID
     * Meta informations extracted from the WSDL
     * - documentation: Numeric identifier. Some applications use this ID to look up shipping packages more efficiently.
     * - minOccurs: 0
     * @var int
     */
    public $PackageID;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Display string that applications can use to present a list of shipping package options in a more user-friendly format (such as in a drop-down list).
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ShippingPackage
     * Meta informations extracted from the WSDL
     * - documentation: A supported value for the site that can be used in the <b>Item.ShippingPackageDetails.ShippingPackage</b> or <b>Item.ShippingDetails.CalculatedShippingRate.ShippingPackage</b> fields of an Add/Revise/Relist API call.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingPackage;
    /**
     * The DefaultValue
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if the package type is the default for the specified site.
     * - minOccurs: 0
     * @var bool
     */
    public $DefaultValue;
    /**
     * The DimensionsSupported
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as 'true' if the shipping package supports the use of package dimensions.
     * - minOccurs: 0
     * @var bool
     */
    public $DimensionsSupported;
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
     * Constructor method for ShippingPackageDetailsType
     * @uses ShippingPackageDetailsType::setPackageID()
     * @uses ShippingPackageDetailsType::setDescription()
     * @uses ShippingPackageDetailsType::setShippingPackage()
     * @uses ShippingPackageDetailsType::setDefaultValue()
     * @uses ShippingPackageDetailsType::setDimensionsSupported()
     * @uses ShippingPackageDetailsType::setDetailVersion()
     * @uses ShippingPackageDetailsType::setUpdateTime()
     * @uses ShippingPackageDetailsType::setAny()
     * @param int $packageID
     * @param string $description
     * @param string $shippingPackage
     * @param bool $defaultValue
     * @param bool $dimensionsSupported
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($packageID = null, $description = null, $shippingPackage = null, $defaultValue = null, $dimensionsSupported = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setPackageID($packageID)
            ->setDescription($description)
            ->setShippingPackage($shippingPackage)
            ->setDefaultValue($defaultValue)
            ->setDimensionsSupported($dimensionsSupported)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get PackageID value
     * @return int|null
     */
    public function getPackageID()
    {
        return $this->PackageID;
    }
    /**
     * Set PackageID value
     * @param int $packageID
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
     */
    public function setPackageID($packageID = null)
    {
        // validation for constraint: int
        if (!is_null($packageID) && !is_numeric($packageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageID)), __LINE__);
        }
        $this->PackageID = $packageID;
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
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
     * Get ShippingPackage value
     * @return string|null
     */
    public function getShippingPackage()
    {
        return $this->ShippingPackage;
    }
    /**
     * Set ShippingPackage value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingPackage
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
     */
    public function setShippingPackage($shippingPackage = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid($shippingPackage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingPackage, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingPackage = $shippingPackage;
        return $this;
    }
    /**
     * Get DefaultValue value
     * @return bool|null
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }
    /**
     * Set DefaultValue value
     * @param bool $defaultValue
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
     */
    public function setDefaultValue($defaultValue = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaultValue) && !is_bool($defaultValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($defaultValue)), __LINE__);
        }
        $this->DefaultValue = $defaultValue;
        return $this;
    }
    /**
     * Get DimensionsSupported value
     * @return bool|null
     */
    public function getDimensionsSupported()
    {
        return $this->DimensionsSupported;
    }
    /**
     * Set DimensionsSupported value
     * @param bool $dimensionsSupported
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
     */
    public function setDimensionsSupported($dimensionsSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($dimensionsSupported) && !is_bool($dimensionsSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dimensionsSupported)), __LINE__);
        }
        $this->DimensionsSupported = $dimensionsSupported;
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
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
     * @uses \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
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
