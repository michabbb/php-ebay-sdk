<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DigitalDeliverySelectedType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>DigitalDeliverySelected</b> container that is returned by <b>GetOrders</b> and other order management calls. The <b>DigitalDeliverySelected</b> container is only applicable and returned if the buyer
 * purchased a digital gift card for themselves, or is giving the digital gift card to someone else as a gift.
 * @subpackage Structs
 */
class DigitalDeliverySelectedType extends AbstractStructBase
{
    /**
     * The DeliveryMethod
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the method in which the digital gift card will be delivered to the buyer or to the person whom the purchaser is giving the digital gift card to. Currently, the only supported delivery method is by email.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryMethod = null;
    /**
     * The DeliveryStatus
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the current status of whatever delivery method is being used (indicated in the <b>DigitalDeliverySelected.DeliveryMethod</b> field). Currently, the only supported delivery method is by email.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DeliveryStatusType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DeliveryStatusType $DeliveryStatus = null;
    /**
     * The DeliveryDetails
     * Meta information extracted from the WSDL
     * - documentation: This container is returned by <b>GetOrders</b> and other order management calls to provide details on the recipient of a digital gift card that was purchased. The <b>DeliveryDetails</b> container is only returned if the buyer is
     * buying a digital gift card and giving that gift card to another person.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DeliveryDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DeliveryDetailsType $DeliveryDetails = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DigitalDeliverySelectedType
     * @uses DigitalDeliverySelectedType::setDeliveryMethod()
     * @uses DigitalDeliverySelectedType::setDeliveryStatus()
     * @uses DigitalDeliverySelectedType::setDeliveryDetails()
     * @uses DigitalDeliverySelectedType::setAny()
     * @param string $deliveryMethod
     * @param \macropage\ebaysdk\trading\StructType\DeliveryStatusType $deliveryStatus
     * @param \macropage\ebaysdk\trading\StructType\DeliveryDetailsType $deliveryDetails
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $deliveryMethod = null, ?\macropage\ebaysdk\trading\StructType\DeliveryStatusType $deliveryStatus = null, ?\macropage\ebaysdk\trading\StructType\DeliveryDetailsType $deliveryDetails = null, $any = null)
    {
        $this
            ->setDeliveryMethod($deliveryMethod)
            ->setDeliveryStatus($deliveryStatus)
            ->setDeliveryDetails($deliveryDetails)
            ->setAny($any);
    }
    /**
     * Get DeliveryMethod value
     * @return string|null
     */
    public function getDeliveryMethod(): ?string
    {
        return $this->DeliveryMethod;
    }
    /**
     * Set DeliveryMethod value
     * @param string $deliveryMethod
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType
     */
    public function setDeliveryMethod(?string $deliveryMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryMethod) && !is_string($deliveryMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryMethod, true), gettype($deliveryMethod)), __LINE__);
        }
        $this->DeliveryMethod = $deliveryMethod;
        
        return $this;
    }
    /**
     * Get DeliveryStatus value
     * @return \macropage\ebaysdk\trading\StructType\DeliveryStatusType|null
     */
    public function getDeliveryStatus(): ?\macropage\ebaysdk\trading\StructType\DeliveryStatusType
    {
        return $this->DeliveryStatus;
    }
    /**
     * Set DeliveryStatus value
     * @param \macropage\ebaysdk\trading\StructType\DeliveryStatusType $deliveryStatus
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType
     */
    public function setDeliveryStatus(?\macropage\ebaysdk\trading\StructType\DeliveryStatusType $deliveryStatus = null): self
    {
        $this->DeliveryStatus = $deliveryStatus;
        
        return $this;
    }
    /**
     * Get DeliveryDetails value
     * @return \macropage\ebaysdk\trading\StructType\DeliveryDetailsType|null
     */
    public function getDeliveryDetails(): ?\macropage\ebaysdk\trading\StructType\DeliveryDetailsType
    {
        return $this->DeliveryDetails;
    }
    /**
     * Set DeliveryDetails value
     * @param \macropage\ebaysdk\trading\StructType\DeliveryDetailsType $deliveryDetails
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType
     */
    public function setDeliveryDetails(?\macropage\ebaysdk\trading\StructType\DeliveryDetailsType $deliveryDetails = null): self
    {
        $this->DeliveryDetails = $deliveryDetails;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliverySelectedType
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
