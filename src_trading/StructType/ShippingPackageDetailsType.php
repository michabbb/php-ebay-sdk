<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingPackageDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about type of package used to ship an item.
 * @subpackage Structs
 */
class ShippingPackageDetailsType extends AbstractStructBase
{
    /**
     * The PackageID
     * Meta information extracted from the WSDL
     * - documentation: Numeric identifier. Some applications use this ID to look up shipping packages more efficiently.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PackageID = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Display string that applications can use to present a list of shipping package options in a more user-friendly format (such as in a drop-down list).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The ShippingPackage
     * Meta information extracted from the WSDL
     * - documentation: A supported value for the site that can be used in the <b>Item.ShippingPackageDetails.ShippingPackage</b> or <b>Item.ShippingDetails.CalculatedShippingRate.ShippingPackage</b> fields of an Add/Revise/Relist API call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingPackage = null;
    /**
     * The DefaultValue
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the package type is the default for the specified site.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DefaultValue = null;
    /**
     * The DimensionsSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as 'true' if the shipping package supports the use of package dimensions.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DimensionsSupported = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $packageID = null, ?string $description = null, ?string $shippingPackage = null, ?bool $defaultValue = null, ?bool $dimensionsSupported = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
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
    public function getPackageID(): ?int
    {
        return $this->PackageID;
    }
    /**
     * Set PackageID value
     * @param int $packageID
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
     */
    public function setPackageID(?int $packageID = null): self
    {
        // validation for constraint: int
        if (!is_null($packageID) && !(is_int($packageID) || ctype_digit($packageID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packageID, true), gettype($packageID)), __LINE__);
        }
        $this->PackageID = $packageID;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
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
     * Get DefaultValue value
     * @return bool|null
     */
    public function getDefaultValue(): ?bool
    {
        return $this->DefaultValue;
    }
    /**
     * Set DefaultValue value
     * @param bool $defaultValue
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
     */
    public function setDefaultValue(?bool $defaultValue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($defaultValue) && !is_bool($defaultValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->DefaultValue = $defaultValue;
        
        return $this;
    }
    /**
     * Get DimensionsSupported value
     * @return bool|null
     */
    public function getDimensionsSupported(): ?bool
    {
        return $this->DimensionsSupported;
    }
    /**
     * Set DimensionsSupported value
     * @param bool $dimensionsSupported
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
     */
    public function setDimensionsSupported(?bool $dimensionsSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dimensionsSupported) && !is_bool($dimensionsSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dimensionsSupported, true), gettype($dimensionsSupported)), __LINE__);
        }
        $this->DimensionsSupported = $dimensionsSupported;
        
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion(): ?string
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
     */
    public function setDetailVersion(?string $detailVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingPackageDetailsType
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
