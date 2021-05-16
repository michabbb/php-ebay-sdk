<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>DeliveryDetails</b> container that is returned by <b>GetOrders</b> and other order management calls. The <b>DeliveryDetails</b> container is only applicable and returned if the buyer purchased a digital
 * gift card, and is either keeping the gift card or giving that gift card to another person.
 * @subpackage Structs
 */
class DeliveryDetailsType extends AbstractStructBase
{
    /**
     * The Recipient
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the name and email of the person who is receiving the digital gift card. If the buyer has purchased the gift card for themselves, the buyer's name and email will appear in this container. If the buyer is
     * giving the gift card to another individual, that individual's name and email will appear in this container. This container is always returned for a digital gift card line item. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions
     * only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the
     * buyer or seller, and dummy/masked data will be returned to all third parties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $Recipient = null;
    /**
     * The Sender
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the name and email of the person who purchased the digital gift card. This container is only returned if the purchaser of the digital gift card is giving the gift card to someone else, and that individual's
     * name and email will appear in the <strong>Recipient</strong> container. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer
     * or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $Sender = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DeliveryDetailsType
     * @uses DeliveryDetailsType::setRecipient()
     * @uses DeliveryDetailsType::setSender()
     * @uses DeliveryDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $recipient
     * @param \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $sender
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $recipient = null, ?\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $sender = null, $any = null)
    {
        $this
            ->setRecipient($recipient)
            ->setSender($sender)
            ->setAny($any);
    }
    /**
     * Get Recipient value
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType|null
     */
    public function getRecipient(): ?\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $recipient
     * @return \macropage\ebaysdk\trading\StructType\DeliveryDetailsType
     */
    public function setRecipient(?\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $recipient = null): self
    {
        $this->Recipient = $recipient;
        
        return $this;
    }
    /**
     * Get Sender value
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType|null
     */
    public function getSender(): ?\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $sender
     * @return \macropage\ebaysdk\trading\StructType\DeliveryDetailsType
     */
    public function setSender(?\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $sender = null): self
    {
        $this->Sender = $sender;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DeliveryDetailsType
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
