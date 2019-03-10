<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedShippingRateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details pertinent to one or more items for which calculated shipping (or flat rate shipping using shipping rate tables with weight surcharges) has been offered by the seller, such as package dimension and weight and
 * packaging/handling costs. Also returned with the data for an item's transaction. <br><br> <span class="tablenote"><strong>Note:</strong> The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the
 * <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the <strong>CalculatedShippingRate</strong> container should now be
 * specified in the <strong>ShipPackageDetails</strong> container instead. </span>
 * @subpackage Structs
 */
class CalculatedShippingRateType extends AbstractStructBase
{
    /**
     * The OriginatingPostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Postal code for the location from which the package will be shipped. Required for calculated shipping. Use <b>Item.PostalCode</b> to specify the location of the item used for searches by location.
     * - minOccurs: 0
     * @var string
     */
    public $OriginatingPostalCode;
    /**
     * The MeasurementUnit
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> The value for <strong>MeasurementUnit</strong> should now be specified in the <strong>ShippingPackageDetails</strong> container instead. If the <strong>MeasurementUnit</strong> field is
     * passed in the <strong>CalculatedShippingRate</strong> container and in the <strong>ShippingPackageDetails</strong> container, the value in the <strong>ShippingPackageDetails</strong> container will take precedence. </span> <br> Specifies the unit
     * type of the weight and dimensions of a shipping package. If <strong>MeasurementUnit</strong> is used, its value will override the system specified through a <strong>measurementSystem</strong> attribute in dimension and/or weight-related fields. If
     * neither a <strong>MeasurementUnit</strong> value nor a <strong>measurementSystem</strong> attribute are specified, the following defaults will be used: <br><br> English: US<br> Metric: CA, CA-FR, AU <br><br> CA and CA-FR support both English and
     * Metric, while other sites only support the site's default. <br><br> Use <strong>MeasurementUnit</strong> with weight and package dimensions. For example, to represent a 5 lbs 2 oz package: <br><br>
     * <code>&lt;MeasurementUnit&gt;English&lt;/MeasurementUnit&gt; <br> &lt;WeightMajor&gt;5&lt;/WeightMajor&gt; <br> &lt;WeightMinor&gt;2&lt;/WeightMinor&gt;</code>
     * - minOccurs: 0
     * @var string
     */
    public $MeasurementUnit;
    /**
     * The PackagingHandlingCosts
     * Meta informations extracted from the WSDL
     * - documentation: Fees a seller might assess for the shipping of the item (in addition to whatever the shipping service might charge). Any packaging/handling cost specified on input is added to each shipping service on output. <br/><br/> If domestic
     * and international calculated shipping is offered for an item and if packaging/handling cost is specified only for domestic shipping, that cost will be applied by eBay as the international packaging/handling cost. (To specify a international
     * packaging/handling cost, you must always specify a domestic packaging/handling cost, even if it is 0.) When UPS is one of the shipping services offered by the seller, package dimensions are required on list/relist/revise. For calculated shipping
     * only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $PackagingHandlingCosts;
    /**
     * The ShippingIrregular
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> The value for <strong>ShippingIrregular</strong> should now be specified in the <strong>ShippingPackageDetails</strong> container instead. If the <strong>ShippingIrregular</strong> field
     * is passed in the <strong>CalculatedShippingRate</strong> container and in the <strong>ShippingPackageDetails</strong> container, the value in the <strong>ShippingPackageDetails</strong> container will take precedence. This field may be deprecated in
     * the future. </span> <br> This boolean field indicates that the shipping package is considered an irregular shape and/or size by the shipping carrier, and thus requires special handling. For calculated shipping only.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIrregular;
    /**
     * The InternationalPackagingHandlingCosts
     * Meta informations extracted from the WSDL
     * - documentation: Fees a seller might assess for the shipping of the item (in addition to whatever the shipping service might charge). Any packaging/handling cost specified on input is added to each shipping service on output. <br/><br/> If domestic
     * and international calculated shipping is offered for an item and if packaging/handling cost is specified only for domestic shipping, that cost will be applied by eBay as the international packaging/handling cost. (To specify a international
     * packaging/handling cost, you must always specify a domestic packaging/handling cost, even if it is 0.) For international calculated shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $InternationalPackagingHandlingCosts;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CalculatedShippingRateType
     * @uses CalculatedShippingRateType::setOriginatingPostalCode()
     * @uses CalculatedShippingRateType::setMeasurementUnit()
     * @uses CalculatedShippingRateType::setPackagingHandlingCosts()
     * @uses CalculatedShippingRateType::setShippingIrregular()
     * @uses CalculatedShippingRateType::setInternationalPackagingHandlingCosts()
     * @uses CalculatedShippingRateType::setAny()
     * @param string $originatingPostalCode
     * @param string $measurementUnit
     * @param \macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts
     * @param bool $shippingIrregular
     * @param \macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts
     * @param \DOMDocument $any
     */
    public function __construct($originatingPostalCode = null, $measurementUnit = null, \macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts = null, $shippingIrregular = null, \macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts = null, \DOMDocument $any = null)
    {
        $this
            ->setOriginatingPostalCode($originatingPostalCode)
            ->setMeasurementUnit($measurementUnit)
            ->setPackagingHandlingCosts($packagingHandlingCosts)
            ->setShippingIrregular($shippingIrregular)
            ->setInternationalPackagingHandlingCosts($internationalPackagingHandlingCosts)
            ->setAny($any);
    }
    /**
     * Get OriginatingPostalCode value
     * @return string|null
     */
    public function getOriginatingPostalCode()
    {
        return $this->OriginatingPostalCode;
    }
    /**
     * Set OriginatingPostalCode value
     * @param string $originatingPostalCode
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
     */
    public function setOriginatingPostalCode($originatingPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($originatingPostalCode) && !is_string($originatingPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originatingPostalCode)), __LINE__);
        }
        $this->OriginatingPostalCode = $originatingPostalCode;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
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
     * Get PackagingHandlingCosts value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPackagingHandlingCosts()
    {
        return $this->PackagingHandlingCosts;
    }
    /**
     * Set PackagingHandlingCosts value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
     */
    public function setPackagingHandlingCosts(\macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts = null)
    {
        $this->PackagingHandlingCosts = $packagingHandlingCosts;
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
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
     * Get InternationalPackagingHandlingCosts value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInternationalPackagingHandlingCosts()
    {
        return $this->InternationalPackagingHandlingCosts;
    }
    /**
     * Set InternationalPackagingHandlingCosts value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
     */
    public function setInternationalPackagingHandlingCosts(\macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts = null)
    {
        $this->InternationalPackagingHandlingCosts = $internationalPackagingHandlingCosts;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
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
