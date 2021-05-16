<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServicePackageDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Packages supported by the enclosing shipping service.
 * @subpackage Structs
 */
class ShippingServicePackageDetailsType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the package type.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The DimensionsRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned if package dimensions are required for the corresponding package type (<b>ShippingServicePackageDetails.Name</b> value) supported by the corresponding shipping service option
     * (<b>ShippingServiceDetails.ShippingService</b> value).
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DimensionsRequired = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ShippingServicePackageDetailsType
     * @uses ShippingServicePackageDetailsType::setName()
     * @uses ShippingServicePackageDetailsType::setDimensionsRequired()
     * @uses ShippingServicePackageDetailsType::setAny()
     * @param string $name
     * @param bool $dimensionsRequired
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?bool $dimensionsRequired = null, $any = null)
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
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get DimensionsRequired value
     * @return bool|null
     */
    public function getDimensionsRequired(): ?bool
    {
        return $this->DimensionsRequired;
    }
    /**
     * Set DimensionsRequired value
     * @param bool $dimensionsRequired
     * @return \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType
     */
    public function setDimensionsRequired(?bool $dimensionsRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dimensionsRequired) && !is_bool($dimensionsRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dimensionsRequired, true), gettype($dimensionsRequired)), __LINE__);
        }
        $this->DimensionsRequired = $dimensionsRequired;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType
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
