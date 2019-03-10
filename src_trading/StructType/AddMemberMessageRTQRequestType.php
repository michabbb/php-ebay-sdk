<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessageRTQRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base request of the <b>AddMemberMessageRTQ</b> call that enables a seller to reply to a question about an active item listing.
 * @subpackage Structs
 */
class AddMemberMessageRTQRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the listing about which the question was asked. This field is not required if the request includes a <b>RecipientID</b> value in the <b>MemberMessage</b> container, and the bidder/potential buyer and seller
     * do not have more than one listing in common between one another. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The MemberMessage
     * Meta informations extracted from the WSDL
     * - documentation: This container is used by the seller to answer the question from the bidder/potential buyer. This container includes the recipient ID of the bidder/potential buyer, the message subject, the message body (where the question is
     * answered), and other values related to the message.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public $MemberMessage;
    /**
     * Constructor method for AddMemberMessageRTQRequestType
     * @uses AddMemberMessageRTQRequestType::setItemID()
     * @uses AddMemberMessageRTQRequestType::setMemberMessage()
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage
     */
    public function __construct($itemID = null, \macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage = null)
    {
        $this
            ->setItemID($itemID)
            ->setMemberMessage($memberMessage);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageRTQRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get MemberMessage value
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType|null
     */
    public function getMemberMessage()
    {
        return $this->MemberMessage;
    }
    /**
     * Set MemberMessage value
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageRTQRequestType
     */
    public function setMemberMessage(\macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage = null)
    {
        $this->MemberMessage = $memberMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageRTQRequestType
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
