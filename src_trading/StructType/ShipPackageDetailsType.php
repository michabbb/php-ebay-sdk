<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipPackageDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details pertinent to one or more items for which calculated shipping (or flat rate shipping using shipping rate tables with weight surcharges) has been offered by the seller, such as package dimension and weight and
 * packaging/handling costs. <br/><br/> Also returned with the data for an item's transaction. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <strong>ShippingPackageDetails</strong> container should now be used instead of the
 * <strong>CalculatedShippingRate</strong> container to specify values for the <strong>MeasurementUnit</strong>, <strong>PackageDepth</strong>, <strong>PackageWidth</strong>, <strong>PackageLength</strong>, <strong>ShippingIrregular</strong>,
 * <strong>ShippingPackage</strong>, <strong>WeightMajor</strong>, and/or <strong>WeightMinor</strong> fields. The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the
 * <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields. </span>
 * @subpackage Structs
 */
class ShipPackageDetailsType extends AbstractStructBase
{
    /**
     * The MeasurementUnit
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the unit type of the weight and dimensions of a shipping package. If <b>MeasurementUnit</b> is used, it overrides the system specified by measurementSystem. If <b>MeasurementUnit</b> and measurementSystem are not specified,
     * the following defaults will be used: <br><br> English: US<br> Metric: CA, CAFR, AU <br><br> CA and CAFR supports both English and Metric, while other sites only support the site's default. <br><br> Use <b>MeasurementUnit</b> with weight and package
     * dimensions. For example, to represent a 5 lbs 2 oz package: <br><br> <code> &lt;MeasurementUnit&gt;English&lt;/MeasurementUnit&gt; <br> &lt;WeightMajor&gt;5&lt;/WeightMajor&gt; <br> &lt;WeightMinor&gt;2&lt;/WeightMinor&gt; </code>
     * - minOccurs: 0
     * @var string
     */
    public $MeasurementUnit;
    /**
     * The PackageDepth
     * Meta informations extracted from the WSDL
     * - documentation: Depth of the package, in whole number of inches, needed to ship the item. This is validated against the selected shipping service. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for
     * service XXXXX," where XXXXX is the name of the shipping service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.) <br><br> <b>Developer
     * impact:</b> UPS requires dimensions for any Ground packages that are 3 cubic feet or larger and for all air packages, if they are to provide correct shipping cost. If package dimensions are not included for an item listed with calculated shipping,
     * the shipping cost returned will be an estimate based on standard dimensions for the defined package type. eBay enforces a dimensions requirement on listings so that buyers receive accurate calculated shipping costs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType
     */
    public $PackageDepth;
    /**
     * The PackageLength
     * Meta informations extracted from the WSDL
     * - documentation: Length of the package, in whole number of inches, needed to ship the item. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for service XXXXX," where XXXXX is the name of the shipping
     * service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType
     */
    public $PackageLength;
    /**
     * The PackageWidth
     * Meta informations extracted from the WSDL
     * - documentation: Width of the package, in whole number of inches, needed to ship the item. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for service XXXXX," where XXXXX is the name of the shipping
     * service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType
     */
    public $PackageWidth;
    /**
     * The ShippingIrregular
     * Meta informations extracted from the WSDL
     * - documentation: Whether a package is irregular and therefore cannot go through the stamping machine at the shipping service office and thus requires special or fragile handling. For calculated shipping only.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIrregular;
    /**
     * The ShippingPackage
     * Meta informations extracted from the WSDL
     * - documentation: The nature of the package used to ship the item(s). Required for calculated shipping only.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingPackage;
    /**
     * The WeightMajor
     * Meta informations extracted from the WSDL
     * - documentation: WeightMajor and WeightMinor are used to specify the weight of a shipping package. Here is how you would represent a package weight of 5 lbs 2 oz: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     * &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt; </code> <br/><br/> The example above this maximum, the shipping type becomes Freight, an option that can only be selected via the eBay Web site and not via API. The weight details are validated
     * against the selected shipping service. See <a href="http://www.ups.com">UPS</a> for the maximum weight allowed by UPS. <br><br> For calculated shipping or for flat rate shipping if shipping rate tables are specified and the shipping rate table uses
     * weight surcharges. Required on input when calculated shipping is used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType
     */
    public $WeightMajor;
    /**
     * The WeightMinor
     * Meta informations extracted from the WSDL
     * - documentation: See the definition of <b>WeightMajor</b>. For calculated shipping or for flat rate shipping if shipping rate tables are specified and the shipping rate table uses weight surcharges. (When used with the shipping rate tables with
     * weight surcharge, any <b>WeightMinor</b> value greater than zero results in <b>WeightMajor</b> getting rounded up in the shipping cost calculation for example, 1 lb, 2 oz is rounded up to 2 lbs.) <br><br> Required on input when calculated shipping is
     * used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType
     */
    public $WeightMinor;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShipPackageDetailsType
     * @uses ShipPackageDetailsType::setMeasurementUnit()
     * @uses ShipPackageDetailsType::setPackageDepth()
     * @uses ShipPackageDetailsType::setPackageLength()
     * @uses ShipPackageDetailsType::setPackageWidth()
     * @uses ShipPackageDetailsType::setShippingIrregular()
     * @uses ShipPackageDetailsType::setShippingPackage()
     * @uses ShipPackageDetailsType::setWeightMajor()
     * @uses ShipPackageDetailsType::setWeightMinor()
     * @uses ShipPackageDetailsType::setAny()
     * @param string $measurementUnit
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageDepth
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageLength
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageWidth
     * @param bool $shippingIrregular
     * @param string $shippingPackage
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMajor
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMinor
     * @param \DOMDocument $any
     */
    public function __construct($measurementUnit = null, \macropage\ebaysdk\trading\StructType\MeasureType $packageDepth = null, \macropage\ebaysdk\trading\StructType\MeasureType $packageLength = null, \macropage\ebaysdk\trading\StructType\MeasureType $packageWidth = null, $shippingIrregular = null, $shippingPackage = null, \macropage\ebaysdk\trading\StructType\MeasureType $weightMajor = null, \macropage\ebaysdk\trading\StructType\MeasureType $weightMinor = null, \DOMDocument $any = null)
    {
        $this
            ->setMeasurementUnit($measurementUnit)
            ->setPackageDepth($packageDepth)
            ->setPackageLength($packageLength)
            ->setPackageWidth($packageWidth)
            ->setShippingIrregular($shippingIrregular)
            ->setShippingPackage($shippingPackage)
            ->setWeightMajor($weightMajor)
            ->setWeightMinor($weightMinor)
            ->setAny($any);
    }
    /**
     * Get MeasurementUnit value
     * @return string|null
     */
    public function getMeasurementUnit()
    {
        return $this->MeasurementUnit;
    }
    /**
     * Set MeasurementUnit value
     * @uses \macropage\ebaysdk\trading\EnumType\MeasurementSystemCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MeasurementSystemCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $measurementUnit
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setMeasurementUnit($measurementUnit = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MeasurementSystemCodeType::valueIsValid($measurementUnit)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $measurementUnit, implode(', ', \macropage\ebaysdk\trading\EnumType\MeasurementSystemCodeType::getValidValues())), __LINE__);
        }
        $this->MeasurementUnit = $measurementUnit;
        return $this;
    }
    /**
     * Get PackageDepth value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageDepth()
    {
        return $this->PackageDepth;
    }
    /**
     * Set PackageDepth value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageDepth
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setPackageDepth(\macropage\ebaysdk\trading\StructType\MeasureType $packageDepth = null)
    {
        $this->PackageDepth = $packageDepth;
        return $this;
    }
    /**
     * Get PackageLength value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageLength()
    {
        return $this->PackageLength;
    }
    /**
     * Set PackageLength value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageLength
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setPackageLength(\macropage\ebaysdk\trading\StructType\MeasureType $packageLength = null)
    {
        $this->PackageLength = $packageLength;
        return $this;
    }
    /**
     * Get PackageWidth value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageWidth()
    {
        return $this->PackageWidth;
    }
    /**
     * Set PackageWidth value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageWidth
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setPackageWidth(\macropage\ebaysdk\trading\StructType\MeasureType $packageWidth = null)
    {
        $this->PackageWidth = $packageWidth;
        return $this;
    }
    /**
     * Get ShippingIrregular value
     * @return bool|null
     */
    public function getShippingIrregular()
    {
        return $this->ShippingIrregular;
    }
    /**
     * Set ShippingIrregular value
     * @param bool $shippingIrregular
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setShippingIrregular($shippingIrregular = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingIrregular) && !is_bool($shippingIrregular)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shippingIrregular)), __LINE__);
        }
        $this->ShippingIrregular = $shippingIrregular;
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
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
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
     * Get WeightMajor value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getWeightMajor()
    {
        return $this->WeightMajor;
    }
    /**
     * Set WeightMajor value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMajor
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setWeightMajor(\macropage\ebaysdk\trading\StructType\MeasureType $weightMajor = null)
    {
        $this->WeightMajor = $weightMajor;
        return $this;
    }
    /**
     * Get WeightMinor value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getWeightMinor()
    {
        return $this->WeightMinor;
    }
    /**
     * Set WeightMinor value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMinor
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setWeightMinor(\macropage\ebaysdk\trading\StructType\MeasureType $weightMinor = null)
    {
        $this->WeightMinor = $weightMinor;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
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
