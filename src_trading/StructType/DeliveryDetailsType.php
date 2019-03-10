<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>DeliveryDetails</b> container that is returned by <b>GetOrders</b> and other order management calls. The <b>DeliveryDetails</b> container is only applicable and returned if the buyer purchased a digital
 * gift card, and is either keeping the gift card or giving that gift card to another person.
 * @subpackage Structs
 */
class DeliveryDetailsType extends AbstractStructBase
{
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the name and email of the person who is receiving the digital gift card. If the buyer has purchased the gift card for themselves, the buyer's name and email will appear in this container. If the buyer is
     * giving the gift card to another individual, that individual's name and email will appear in this container. This container is always returned for a digital gift card line item. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions
     * only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the
     * buyer or seller, and dummy/masked data will be returned to all third parties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
     */
    public $Recipient;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the name and email of the person who purchased the digital gift card. This container is only returned if the purchaser of the digital gift card is giving the gift card to someone else, and that individual's
     * name and email will appear in the <strong>Recipient</strong> container. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer
     * or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
     */
    public $Sender;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DeliveryDetailsType
     * @uses DeliveryDetailsType::setRecipient()
     * @uses DeliveryDetailsType::setSender()
     * @uses DeliveryDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $recipient
     * @param \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $sender
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $recipient = null, \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $sender = null, \DOMDocument $any = null)
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
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $recipient
     * @return \macropage\ebaysdk\trading\StructType\DeliveryDetailsType
     */
    public function setRecipient(\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get Sender value
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $sender
     * @return \macropage\ebaysdk\trading\StructType\DeliveryDetailsType
     */
    public function setSender(\macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType $sender = null)
    {
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DeliveryDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DeliveryDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\DeliveryDetailsType
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
