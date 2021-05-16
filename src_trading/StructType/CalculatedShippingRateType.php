<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedShippingRateType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details pertinent to one or more items for which calculated shipping (or flat rate shipping using shipping rate tables with weight surcharges) has been offered by the seller, such as package dimension and weight and
 * packaging/handling costs. Also returned with the data for an item's transaction. <br><br> <span class="tablenote"><strong>Note:</strong> The <strong>CalculatedShippingRate</strong> container should only be used to specify values for the
 * <strong>InternationalPackagingHandlingCosts</strong>, <strong>OriginatingPostalCode</strong>, and/or <strong>PackagingHandlingCosts</strong> fields. The rest of the fields in the <strong>CalculatedShippingRate</strong> container should now be
 * specified in the <strong>ShippingPackageDetails</strong> container instead. </span>
 * @subpackage Structs
 */
class CalculatedShippingRateType extends AbstractStructBase
{
    /**
     * The OriginatingPostalCode
     * Meta information extracted from the WSDL
     * - documentation: The postal code for the location from which the package will be shipped. A postal code is required for calculated shipping. This field is not necessary if a postal code is already specified through the
     * <strong>Item.PostalCode</strong> field. If a postal code is included in both fields, the value in <strong>Item.PostalCode</strong> field is used, and the value in <strong>OriginatingPostalCode</strong> is ignored.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OriginatingPostalCode = null;
    /**
     * The MeasurementUnit
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> The value for <strong>MeasurementUnit</strong> should now be specified in the <strong>ShippingPackageDetails</strong> container instead. If the <strong>MeasurementUnit</strong> field is
     * passed in the <strong>CalculatedShippingRate</strong> container and in the <strong>ShippingPackageDetails</strong> container, the value in the <strong>ShippingPackageDetails</strong> container will take precedence. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MeasurementUnit = null;
    /**
     * The PackagingHandlingCosts
     * Meta information extracted from the WSDL
     * - documentation: Fees a seller might assess for the shipping of the item (in addition to whatever the shipping service might charge). Any packaging/handling cost specified on input is added to each shipping service on output. <br/><br/> If domestic
     * and international calculated shipping is offered for an item and if packaging/handling cost is specified only for domestic shipping, that cost will be applied by eBay as the international packaging/handling cost. (To specify a international
     * packaging/handling cost, you must always specify a domestic packaging/handling cost, even if it is 0.) When UPS is one of the shipping services offered by the seller, package dimensions are required on list/relist/revise. For calculated shipping
     * only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $PackagingHandlingCosts = null;
    /**
     * The ShippingIrregular
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> The value for <strong>ShippingIrregular</strong> should now be specified in the <strong>ShippingPackageDetails</strong> container instead. If the <strong>ShippingIrregular</strong> field
     * is passed in the <strong>CalculatedShippingRate</strong> container and in the <strong>ShippingPackageDetails</strong> container, the value in the <strong>ShippingPackageDetails</strong> container will take precedence. This field may be deprecated in
     * the future. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShippingIrregular = null;
    /**
     * The InternationalPackagingHandlingCosts
     * Meta information extracted from the WSDL
     * - documentation: Fees a seller might assess for the shipping of the item (in addition to whatever the shipping service might charge). Any packaging/handling cost specified on input is added to each shipping service on output. <br/><br/> If domestic
     * and international calculated shipping is offered for an item and if packaging/handling cost is specified only for domestic shipping, that cost will be applied by eBay as the international packaging/handling cost. (To specify a international
     * packaging/handling cost, you must always specify a domestic packaging/handling cost, even if it is 0.) For international calculated shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $InternationalPackagingHandlingCosts = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $originatingPostalCode = null, ?string $measurementUnit = null, ?\macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts = null, ?bool $shippingIrregular = null, ?\macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts = null, $any = null)
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
    public function getOriginatingPostalCode(): ?string
    {
        return $this->OriginatingPostalCode;
    }
    /**
     * Set OriginatingPostalCode value
     * @param string $originatingPostalCode
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
     */
    public function setOriginatingPostalCode(?string $originatingPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($originatingPostalCode) && !is_string($originatingPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originatingPostalCode, true), gettype($originatingPostalCode)), __LINE__);
        }
        $this->OriginatingPostalCode = $originatingPostalCode;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
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
     * Get PackagingHandlingCosts value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPackagingHandlingCosts(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->PackagingHandlingCosts;
    }
    /**
     * Set PackagingHandlingCosts value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
     */
    public function setPackagingHandlingCosts(?\macropage\ebaysdk\trading\StructType\AmountType $packagingHandlingCosts = null): self
    {
        $this->PackagingHandlingCosts = $packagingHandlingCosts;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
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
     * Get InternationalPackagingHandlingCosts value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInternationalPackagingHandlingCosts(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->InternationalPackagingHandlingCosts;
    }
    /**
     * Set InternationalPackagingHandlingCosts value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
     */
    public function setInternationalPackagingHandlingCosts(?\macropage\ebaysdk\trading\StructType\AmountType $internationalPackagingHandlingCosts = null): self
    {
        $this->InternationalPackagingHandlingCosts = $internationalPackagingHandlingCosts;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingRateType
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
