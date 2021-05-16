<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryURLDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines settings for a notification URL (including the URL name in DeliveryURLName).
 * @subpackage Structs
 */
class DeliveryURLDetailType extends AbstractStructBase
{
    /**
     * The DeliveryURLName
     * Meta information extracted from the WSDL
     * - documentation: The name of a notification delivery URL. You can list up to 25 instances of DeliveryURLName, and then subscribe these URLs to notifications by listing them in comma- separated format in the DeliveryURLName element outside of
     * ApplicationDeliveryPreferences.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryURLName = null;
    /**
     * The DeliveryURL
     * Meta information extracted from the WSDL
     * - documentation: The address of a notification delivery URL. This address applies to the DeliveryURLName within the same ApplicationDeliveryPreferences.DeliveryURLDetails container. For delivery to a server, the URL must begin with
     * "<code>https://</code>" and must be well formed. Use a URL that is functional at the time of the call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryURL = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The status of a notification delivery URL. This status applies to the DeliveryURLName and delivery URL within the same ApplicationDeliveryPreferences.DeliveryURLDetails container. If the status is disabled, then notifications will
     * not be sent to the delivery URL.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DeliveryURLDetailType
     * @uses DeliveryURLDetailType::setDeliveryURLName()
     * @uses DeliveryURLDetailType::setDeliveryURL()
     * @uses DeliveryURLDetailType::setStatus()
     * @uses DeliveryURLDetailType::setAny()
     * @param string $deliveryURLName
     * @param string $deliveryURL
     * @param string $status
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $deliveryURLName = null, ?string $deliveryURL = null, ?string $status = null, $any = null)
    {
        $this
            ->setDeliveryURLName($deliveryURLName)
            ->setDeliveryURL($deliveryURL)
            ->setStatus($status)
            ->setAny($any);
    }
    /**
     * Get DeliveryURLName value
     * @return string|null
     */
    public function getDeliveryURLName(): ?string
    {
        return $this->DeliveryURLName;
    }
    /**
     * Set DeliveryURLName value
     * @param string $deliveryURLName
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType
     */
    public function setDeliveryURLName(?string $deliveryURLName = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryURLName) && !is_string($deliveryURLName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryURLName, true), gettype($deliveryURLName)), __LINE__);
        }
        $this->DeliveryURLName = $deliveryURLName;
        
        return $this;
    }
    /**
     * Get DeliveryURL value
     * @return string|null
     */
    public function getDeliveryURL(): ?string
    {
        return $this->DeliveryURL;
    }
    /**
     * Set DeliveryURL value
     * @param string $deliveryURL
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType
     */
    public function setDeliveryURL(?string $deliveryURL = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryURL) && !is_string($deliveryURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryURL, true), gettype($deliveryURL)), __LINE__);
        }
        $this->DeliveryURL = $deliveryURL;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\EnableCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DeliveryURLDetailType
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
