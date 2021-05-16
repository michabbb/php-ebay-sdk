<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessageAAQToPartnerRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a buyer and seller in an order relationship to send messages to each other's My Messages Inboxes.
 * @subpackage Structs
 */
class AddMemberMessageAAQToPartnerRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the listing that is being discussed between the two order partners. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The MemberMessage
     * Meta information extracted from the WSDL
     * - documentation: This container holds the message, and includes the subject, message body, and other details related to the message.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MemberMessageType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MemberMessageType $MemberMessage = null;
    /**
     * Constructor method for AddMemberMessageAAQToPartnerRequestType
     * @uses AddMemberMessageAAQToPartnerRequestType::setItemID()
     * @uses AddMemberMessageAAQToPartnerRequestType::setMemberMessage()
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage
     */
    public function __construct(?string $itemID = null, ?\macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage = null)
    {
        $this
            ->setItemID($itemID)
            ->setMemberMessage($memberMessage);
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
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessageAAQToPartnerRequestType
     */
    public function setMemberMessage(?\macropage\ebaysdk\trading\StructType\MemberMessageType $memberMessage = null): self
    {
        $this->MemberMessage = $memberMessage;
        
        return $this;
    }
}
