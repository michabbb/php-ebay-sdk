<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessagesAAQToBidderResponseContainerType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>AddMemberMessagesAAQToBidderResponseContainer</b> container. A <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is returned for each message that was sent from the seller to the
 * bidders/potential buyers through a separate <b>AddMemberMessagesAAQToBidderRequestContainer</b>. The <b>Ack</b> value in each <b>AddMemberMessagesAAQToBidderResponseContainer</b> container indicates whether or not each message sent through the call
 * was successful or not, and an <b>AddMemberMessagesAAQToBidderResponseContainer</b> is matched up to the corresponding <b>AddMemberMessagesAAQToBidderRequestContainer</b> through the <b>CorrelationID</b> value.
 * @subpackage Structs
 */
class AddMemberMessagesAAQToBidderResponseContainerType extends AbstractStructBase
{
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: This is a unique identifier for a message that was sent through the <b>AddMemberMessagesAAQToBidder</b> call. The seller must provide a <b>CorrelationID</b> value for each message that is sent through an
     * <b>AddMemberMessagesAAQToBidderRequestContainer</b> container in the request. The <b>CorrelationID</b> value returned under each <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is used to correlate each member message container in the
     * request with its corresponding member message container in the response.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CorrelationID = null;
    /**
     * The Ack
     * Meta information extracted from the WSDL
     * - documentation: This enumerated value indicates whether or not the corresponding message was successfully sent to the bidder(s)/potential buyer(s). If the value returned in this field is not <code>Success</code>, the message may have to be resent
     * with another <b>AddMemberMessagesAAQToBidder</b> call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Ack = null;
    /**
     * Constructor method for AddMemberMessagesAAQToBidderResponseContainerType
     * @uses AddMemberMessagesAAQToBidderResponseContainerType::setCorrelationID()
     * @uses AddMemberMessagesAAQToBidderResponseContainerType::setAck()
     * @param string $correlationID
     * @param string $ack
     */
    public function __construct(?string $correlationID = null, ?string $ack = null)
    {
        $this
            ->setCorrelationID($correlationID)
            ->setAck($ack);
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID(): ?string
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType
     */
    public function setCorrelationID(?string $correlationID = null): self
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlationID, true), gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        
        return $this;
    }
    /**
     * Get Ack value
     * @return string|null
     */
    public function getAck(): ?string
    {
        return $this->Ack;
    }
    /**
     * Set Ack value
     * @uses \macropage\ebaysdk\trading\EnumType\AckCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AckCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ack
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType
     */
    public function setAck(?string $ack = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AckCodeType::valueIsValid($ack)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AckCodeType', is_array($ack) ? implode(', ', $ack) : var_export($ack, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AckCodeType::getValidValues())), __LINE__);
        }
        $this->Ack = $ack;
        
        return $this;
    }
}
