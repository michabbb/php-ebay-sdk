<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessagesAAQToBidderRequestContainerType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>AddMemberMessagesAAQToBidderRequestContainer</b> container. An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each bidder the seller is sending a message to. The seller can
 * communicate with up to 10 bidders with one <b>AddMemberMessagesAAQToBidder</b> call.
 * @subpackage Structs
 */
class AddMemberMessagesAAQToBidderRequestContainerType extends AbstractStructBase
{
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: A <b>CorrelationID</b> value is required for each <b>AddMemberMessagesAAQToBidderRequestContainer</b> container that is used in the request. The <b>CorrelationID</b> value returned under each
     * <b>AddMemberMessagesAAQToBidderResponseContainer</b> container is used to correlate each member message container in the request with its corresponding member message container in the response. The same <b>CorrelationID</b> value that you pass into a
     * request will be returned in the <b>CorrelationID</b> field in the response.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CorrelationID = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay listing. This field is required and identifies the active listing that is being discussed between the seller and the bidder.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The MemberMessage
     * Meta information extracted from the WSDL
     * - documentation: This container consists of message body, the recipient(s) of the message, and a boolean flag to control whether or not a copy of the message is sent to the sender's My eBay Inbox.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MemberMessageType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MemberMessageType $MemberMessage = null;
    /**
     * Constructor method for AddMemberMessagesAAQToBidderRequestContainerType
     * @uses AddMemberMessagesAAQToBidderRequestContainerType::setCorrelationID()
     * @uses AddMemberMessagesAAQToBidderRequestContainerType::setItemID()
     * @uses AddMemberMessagesAAQToBidderRequestContainerType::setMemberMessage()
     * @param string $correlationID
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage
     */
    public function __construct(?string $correlationID = null, ?string $itemID = null, ?\macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage = null)
    {
        $this
            ->setCorrelationID($correlationID)
            ->setItemID($itemID)
            ->setMemberMessage($memberMessage);
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
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType
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
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get MemberMessage value
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageType|null
     */
    public function getMemberMessage(): ?\macropage\ebaysdk\trading\StructType\MemberMessageType
    {
        return $this->MemberMessage;
    }
    /**
     * Set MemberMessage value
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType
     */
    public function setMemberMessage(?\macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage = null): self
    {
        $this->MemberMessage = $memberMessage;
        
        return $this;
    }
}
