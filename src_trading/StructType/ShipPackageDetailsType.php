<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipPackageDetailsType StructType
 * Meta information extracted from the WSDL
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
     * Meta information extracted from the WSDL
     * - documentation: Specifies the unit type of the weight and dimensions of a shipping package. If <b>MeasurementUnit</b> is used, it overrides the system specified by measurementSystem. If <b>MeasurementUnit</b> and measurementSystem are not specified,
     * the following defaults will be used: <br><br> English: US<br> Metric: CA, CAFR, AU <br><br> CA and CAFR supports both English and Metric, while other sites only support the site's default. <br><br> Use <b>MeasurementUnit</b> with weight and package
     * dimensions. For example, to represent a 5 lbs 2 oz package: <br><br> <code> &lt;MeasurementUnit&gt;English&lt;/MeasurementUnit&gt; <br> &lt;WeightMajor&gt;5&lt;/WeightMajor&gt; <br> &lt;WeightMinor&gt;2&lt;/WeightMinor&gt; </code>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MeasurementUnit = null;
    /**
     * The PackageDepth
     * Meta information extracted from the WSDL
     * - documentation: Depth of the package, in whole number of inches, needed to ship the item. This is validated against the selected shipping service. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for
     * service XXXXX," where XXXXX is the name of the shipping service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.) <br><br> <b>Developer
     * impact:</b> UPS requires dimensions for any Ground packages that are 3 cubic feet or larger and for all air packages, if they are to provide correct shipping cost. If package dimensions are not included for an item listed with calculated shipping,
     * the shipping cost returned will be an estimate based on standard dimensions for the defined package type. eBay enforces a dimensions requirement on listings so that buyers receive accurate calculated shipping costs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $PackageDepth = null;
    /**
     * The PackageLength
     * Meta information extracted from the WSDL
     * - documentation: Length of the package, in whole number of inches, needed to ship the item. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for service XXXXX," where XXXXX is the name of the shipping
     * service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $PackageLength = null;
    /**
     * The PackageWidth
     * Meta information extracted from the WSDL
     * - documentation: Width of the package, in whole number of inches, needed to ship the item. Upon mismatch, a message is returned, such as, "Package dimensions exceeds maximum allowable limit for service XXXXX," where XXXXX is the name of the shipping
     * service. For calculated shipping only. Only returned if the seller specified the value for the item. (In many cases, the seller only specifies the weight fields.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $PackageWidth = null;
    /**
     * The ShippingIrregular
     * Meta information extracted from the WSDL
     * - documentation: Whether a package is irregular and therefore cannot go through the stamping machine at the shipping service office and thus requires special or fragile handling. For calculated shipping only.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShippingIrregular = null;
    /**
     * The ShippingPackage
     * Meta information extracted from the WSDL
     * - documentation: The nature of the package used to ship the item(s). Required for calculated shipping only.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingPackage = null;
    /**
     * The WeightMajor
     * Meta information extracted from the WSDL
     * - documentation: <b>WeightMajor</b> and <b>WeightMinor</b> are used to specify the weight of a shipping package. <b>WeightMajor</b> is used to specify the weight of the package in pounds (in US) or kilograms (all countries that use metric system).
     * Although <b>MeasureType</b> is of decimal type, decimal values should not be used in <b>WeightMajor</b> and <b>WeightMinor</b>. If a shipping package was 5 pounds and 1.8 ounces, the 1.8 ounces should be rounded up to an even 2 ounces. The same is
     * for kilograms. If the package is 2.267 kilgram, you would round up the grams. Below shows you how to represent a package weight of 5 lbs 2 oz and and 2 kg 3 gr: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     * &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;2&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="gr"&gt;3&lt;/WeightMinor&gt; </code> <br/><br/> If a package weighed 14 oz or 324 gr, below is how you would
     * represent this weight: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;0&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="oz"&gt;14&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;0&lt;/WeightMajor&gt;<br/> &lt;WeightMinor
     * unit="gr"&gt;324&lt;/WeightMinor&gt; </code> <br/><br/> If a package weighed exactly 2 lbs or 105 kg, below is how you would represent this weight: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;2&lt;/WeightMajor&gt;<br/> &lt;WeightMinor
     * unit="oz"&gt;0&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;105&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="gr"&gt;0&lt;/WeightMinor&gt; </code> <br/><br/> In all cases, both the <b>WeightMajor</b> and <b>WeightMinor</b> should be
     * specified in an Add/Revise/Relist/Verify call, even if either's value is '0'. <br><br> The <b>WeightMajor</b> and <b>WeightMinor</b> are applicable for calculated shipping or for flat-rate shipping if shipping rate tables are specified and the
     * shipping rate table uses weight surcharges.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $WeightMajor = null;
    /**
     * The WeightMinor
     * Meta information extracted from the WSDL
     * - documentation: <b>WeightMajor</b> and <b>WeightMinor</b> are used to specify the weight of a shipping package. <b>WeightMinor</b> is used to specify the weight of the package in ounces (in US) or grams (all countries that use metric system).
     * Although <b>MeasureType</b> is of decimal type, decimal values should not be used in <b>WeightMajor</b> and <b>WeightMinor</b>. If a shipping package was 5 pounds and 1.8 ounces, the 1.8 ounces should be rounded up to an even 2 ounces. The same is
     * for kilograms. If the package is 2.267 kilgram, you would round up the grams. Below shows you how to represent a package weight of 5 lbs 2 oz and and 2 kg 3 gr: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;5&lt;/WeightMajor&gt;<br/>
     * &lt;WeightMinor unit="oz"&gt;2&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;2&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="gr"&gt;3&lt;/WeightMinor&gt; </code> <br/><br/> If a package weighed 14 oz or 324 gr, below is how you would
     * represent this weight: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;0&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="oz"&gt;14&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;0&lt;/WeightMajor&gt;<br/> &lt;WeightMinor
     * unit="gr"&gt;324&lt;/WeightMinor&gt; </code> <br/><br/> If a package weighed exactly 2 lbs or 105 kg, below is how you would represent this weight: <br/><br/> <code> &lt;WeightMajor unit="lbs"&gt;2&lt;/WeightMajor&gt;<br/> &lt;WeightMinor
     * unit="oz"&gt;0&lt;/WeightMinor&gt;<br/> &lt;WeightMajor unit="kg"&gt;105&lt;/WeightMajor&gt;<br/> &lt;WeightMinor unit="gr"&gt;0&lt;/WeightMinor&gt; </code> <br/><br/> In all cases, both the <b>WeightMajor</b> and <b>WeightMinor</b> should be
     * specified in an Add/Revise/Relist/Verify call, even if either's value is '0'. <br><br> The <b>WeightMajor</b> and <b>WeightMinor</b> are applicable for calculated shipping or for flat-rate shipping if shipping rate tables are specified and the
     * shipping rate table uses weight surcharges. <br/><br/>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $WeightMinor = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $measurementUnit = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $packageDepth = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $packageLength = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $packageWidth = null, ?bool $shippingIrregular = null, ?string $shippingPackage = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $weightMajor = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $weightMinor = null, $any = null)
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
    public function getMeasurementUnit(): ?string
    {
        return $this->MeasurementUnit;
    }
    /**
     * Set MeasurementUnit value
     * @uses \macropage\ebaysdk\trading\EnumType\MeasurementSystemCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MeasurementSystemCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $measurementUnit
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setMeasurementUnit(?string $measurementUnit = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MeasurementSystemCodeType::valueIsValid($measurementUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MeasurementSystemCodeType', is_array($measurementUnit) ? implode(', ', $measurementUnit) : var_export($measurementUnit, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MeasurementSystemCodeType::getValidValues())), __LINE__);
        }
        $this->MeasurementUnit = $measurementUnit;
        
        return $this;
    }
    /**
     * Get PackageDepth value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageDepth(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->PackageDepth;
    }
    /**
     * Set PackageDepth value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageDepth
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setPackageDepth(?\macropage\ebaysdk\trading\StructType\MeasureType $packageDepth = null): self
    {
        $this->PackageDepth = $packageDepth;
        
        return $this;
    }
    /**
     * Get PackageLength value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageLength(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->PackageLength;
    }
    /**
     * Set PackageLength value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageLength
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setPackageLength(?\macropage\ebaysdk\trading\StructType\MeasureType $packageLength = null): self
    {
        $this->PackageLength = $packageLength;
        
        return $this;
    }
    /**
     * Get PackageWidth value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageWidth(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->PackageWidth;
    }
    /**
     * Set PackageWidth value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageWidth
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setPackageWidth(?\macropage\ebaysdk\trading\StructType\MeasureType $packageWidth = null): self
    {
        $this->PackageWidth = $packageWidth;
        
        return $this;
    }
    /**
     * Get ShippingIrregular value
     * @return bool|null
     */
    public function getShippingIrregular(): ?bool
    {
        return $this->ShippingIrregular;
    }
    /**
     * Set ShippingIrregular value
     * @param bool $shippingIrregular
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setShippingIrregular(?bool $shippingIrregular = null): self
    {
        // validation for constraint: boolean
        if (!is_null($shippingIrregular) && !is_bool($shippingIrregular)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingIrregular, true), gettype($shippingIrregular)), __LINE__);
        }
        $this->ShippingIrregular = $shippingIrregular;
        
        return $this;
    }
    /**
     * Get ShippingPackage value
     * @return string|null
     */
    public function getShippingPackage(): ?string
    {
        return $this->ShippingPackage;
    }
    /**
     * Set ShippingPackage value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippingPackage
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setShippingPackage(?string $shippingPackage = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid($shippingPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType', is_array($shippingPackage) ? implode(', ', $shippingPackage) : var_export($shippingPackage, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingPackage = $shippingPackage;
        
        return $this;
    }
    /**
     * Get WeightMajor value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getWeightMajor(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->WeightMajor;
    }
    /**
     * Set WeightMajor value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMajor
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setWeightMajor(?\macropage\ebaysdk\trading\StructType\MeasureType $weightMajor = null): self
    {
        $this->WeightMajor = $weightMajor;
        
        return $this;
    }
    /**
     * Get WeightMinor value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getWeightMinor(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->WeightMinor;
    }
    /**
     * Set WeightMinor value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMinor
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
     */
    public function setWeightMinor(?\macropage\ebaysdk\trading\StructType\MeasureType $weightMinor = null): self
    {
        $this->WeightMinor = $weightMinor;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShipPackageDetailsType
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
