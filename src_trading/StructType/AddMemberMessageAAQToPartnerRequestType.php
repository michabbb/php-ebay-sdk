<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessageAAQToPartnerRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables a buyer and seller in an order relationship to send messages to each other's My Messages Inboxes.
 * @subpackage Structs
 */
class AddMemberMessageAAQToPartnerRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the listing that is being discussed between the two order partners. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The MemberMessage
     * Meta informations extracted from the WSDL
     * - documentation: This container holds the message, and includes the subject, message body, and other details related to the message.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MemberMessageType
     */
    public $MemberMessage;
    /**
     * Constructor method for AddMemberMessageAAQToPartnerRequestType
     * @uses AddMemberMessageAAQToPartnerRequestType::setItemID()
     * @uses AddMemberMessageAAQToPartnerRequestType::setMemberMessage()
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
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType
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
