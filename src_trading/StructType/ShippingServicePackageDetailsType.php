<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServicePackageDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Packages supported by the enclosing shipping service.
 * @subpackage Structs
 */
class ShippingServicePackageDetailsType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: The name of the package type.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The DimensionsRequired
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if package dimensions are required for the corresponding package type (<b>ShippingServicePackageDetails.Name</b> value) supported by the corresponding shipping service option
     * (<b>ShippingServiceDetails.ShippingService</b> value).
     * - minOccurs: 0
     * @var bool
     */
    public $DimensionsRequired;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingServicePackageDetailsType
     * @uses ShippingServicePackageDetailsType::setName()
     * @uses ShippingServicePackageDetailsType::setDimensionsRequired()
     * @uses ShippingServicePackageDetailsType::setAny()
     * @param string $name
     * @param bool $dimensionsRequired
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $dimensionsRequired = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setDimensionsRequired($dimensionsRequired)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $name, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get DimensionsRequired value
     * @return bool|null
     */
    public function getDimensionsRequired()
    {
        return $this->DimensionsRequired;
    }
    /**
     * Set DimensionsRequired value
     * @param bool $dimensionsRequired
     * @return \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType
     */
    public function setDimensionsRequired($dimensionsRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($dimensionsRequired) && !is_bool($dimensionsRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dimensionsRequired)), __LINE__);
        }
        $this->DimensionsRequired = $dimensionsRequired;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType
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
