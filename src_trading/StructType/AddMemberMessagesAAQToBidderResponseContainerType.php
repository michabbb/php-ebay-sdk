<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessagesAAQToBidderResponseContainerType
 * StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>AddMemberMessagesAAQToBidderResponseContainer</b> container. A <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is returned for each message that was sent from the seller to the
 * bidders/potential buyers through a separate <b>AddMemberMessagesAAQToBidderRequestContainer</b>. The <b>Ack</b> value in each <b>AddMemberMessagesAAQToBidderResponseContainer</b> container indicates whether or not each message sent through the call
 * was successful or not, and an <b>AddMemberMessagesAAQToBidderResponseContainer</b> is matched up to the corresponding <b>AddMemberMessagesAAQToBidderRequestContainer</b> through the <b>CorrelationID</b> value.
 * @subpackage Structs
 */
class AddMemberMessagesAAQToBidderResponseContainerType extends AbstractStructBase
{
    /**
     * The CorrelationID
     * Meta informations extracted from the WSDL
     * - documentation: This is a unique identifier for a message that was sent through the <b>AddMemberMessagesAAQToBidder</b> call. The seller must provide a <b>CorrelationID</b> value for each message that is sent through an
     * <b>AddMemberMessagesAAQToBidderRequestContainer</b> container in the request. The <b>CorrelationID</b> value returned under each <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is used to correlate each member message container in the
     * request with its corresponding member message container in the response.
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationID;
    /**
     * The Ack
     * Meta informations extracted from the WSDL
     * - documentation: This enumerated value indicates whether or not the corresponding message was successfully sent to the bidder(s)/potential buyer(s). If the value returned in this field is not <code>Success</code>, the message may have to be resent
     * with another <b>AddMemberMessagesAAQToBidder</b> call.
     * - minOccurs: 0
     * @var string
     */
    public $Ack;
    /**
     * Constructor method for AddMemberMessagesAAQToBidderResponseContainerType
     * @uses AddMemberMessagesAAQToBidderResponseContainerType::setCorrelationID()
     * @uses AddMemberMessagesAAQToBidderResponseContainerType::setAck()
     * @param string $correlationID
     * @param string $ack
     */
    public function __construct($correlationID = null, $ack = null)
    {
        $this
            ->setCorrelationID($correlationID)
            ->setAck($ack);
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get Ack value
     * @return string|null
     */
    public function getAck()
    {
        return $this->Ack;
    }
    /**
     * Set Ack value
     * @uses \macropage\ebaysdk\trading\EnumType\AckCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AckCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ack
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType
     */
    public function setAck($ack = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AckCodeType::valueIsValid($ack)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ack, implode(', ', \macropage\ebaysdk\trading\EnumType\AckCodeType::getValidValues())), __LINE__);
        }
        $this->Ack = $ack;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType
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
