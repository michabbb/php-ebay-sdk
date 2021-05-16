<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingCarrierDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about type of Carrier used to ship an item.
 * @subpackage Structs
 */
class ShippingCarrierDetailsType extends AbstractStructBase
{
    /**
     * The ShippingCarrierID
     * Meta information extracted from the WSDL
     * - documentation: Numeric identifier. Some applications use this ID to look up shipping Carriers more efficiently.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingCarrierID = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Display string that applications can use to present a list of shipping carriers in a more user-friendly format (such as in a drop-down list).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The ShippingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The code for the shipping carrier. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to
     * <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingCarrier = null;
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
     * Constructor method for ShippingCarrierDetailsType
     * @uses ShippingCarrierDetailsType::setShippingCarrierID()
     * @uses ShippingCarrierDetailsType::setDescription()
     * @uses ShippingCarrierDetailsType::setShippingCarrier()
     * @uses ShippingCarrierDetailsType::setDetailVersion()
     * @uses ShippingCarrierDetailsType::setUpdateTime()
     * @uses ShippingCarrierDetailsType::setAny()
     * @param int $shippingCarrierID
     * @param string $description
     * @param string $shippingCarrier
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $shippingCarrierID = null, ?string $description = null, ?string $shippingCarrier = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setShippingCarrierID($shippingCarrierID)
            ->setDescription($description)
            ->setShippingCarrier($shippingCarrier)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get ShippingCarrierID value
     * @return int|null
     */
    public function getShippingCarrierID(): ?int
    {
        return $this->ShippingCarrierID;
    }
    /**
     * Set ShippingCarrierID value
     * @param int $shippingCarrierID
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
     */
    public function setShippingCarrierID(?int $shippingCarrierID = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingCarrierID) && !(is_int($shippingCarrierID) || ctype_digit($shippingCarrierID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingCarrierID, true), gettype($shippingCarrierID)), __LINE__);
        }
        $this->ShippingCarrierID = $shippingCarrierID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
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
     * Get ShippingCarrier value
     * @return string|null
     */
    public function getShippingCarrier(): ?string
    {
        return $this->ShippingCarrier;
    }
    /**
     * Set ShippingCarrier value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippingCarrier
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
     */
    public function setShippingCarrier(?string $shippingCarrier = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::valueIsValid($shippingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType', is_array($shippingCarrier) ? implode(', ', $shippingCarrier) : var_export($shippingCarrier, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingCarrier = $shippingCarrier;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
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
