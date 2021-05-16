<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserContactDetailsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is used to retrieve contact information for a specified eBay user, given that a bidding relationship (as either a buyer or seller) exists between the caller and the user.
 * @subpackage Structs
 */
class GetUserContactDetailsRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the eBay listing that the caller and order partner have in common.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The ContactID
     * Meta information extracted from the WSDL
     * - documentation: An eBay user ID that uniquely identifies a given user for whom the caller is seeking information. Either a seller's or bidder's/buyer's user ID can be specified here, as long as an bidding/order relationship exists between the
     * requester and the user specified by this field. That is, a bidder must be bidding on the seller's active auction item, or a prospective buyer has proposed a Best Offer on a listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContactID = null;
    /**
     * The RequesterID
     * Meta information extracted from the WSDL
     * - documentation: An eBay user ID that uniquely identifies the person who is making the call. Either a seller's or bidder's/buyer's user ID can be specified here, as long as a bidding/order relationship exists between the requester and the user for
     * whom information is being requested.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RequesterID = null;
    /**
     * Constructor method for GetUserContactDetailsRequestType
     * @uses GetUserContactDetailsRequestType::setItemID()
     * @uses GetUserContactDetailsRequestType::setContactID()
     * @uses GetUserContactDetailsRequestType::setRequesterID()
     * @param string $itemID
     * @param string $contactID
     * @param string $requesterID
     */
    public function __construct(?string $itemID = null, ?string $contactID = null, ?string $requesterID = null)
    {
        $this
            ->setItemID($itemID)
            ->setContactID($contactID)
            ->setRequesterID($requesterID);
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
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType
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
     * Get ContactID value
     * @return string|null
     */
    public function getContactID(): ?string
    {
        return $this->ContactID;
    }
    /**
     * Set ContactID value
     * @param string $contactID
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType
     */
    public function setContactID(?string $contactID = null): self
    {
        // validation for constraint: string
        if (!is_null($contactID) && !is_string($contactID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactID, true), gettype($contactID)), __LINE__);
        }
        $this->ContactID = $contactID;
        
        return $this;
    }
    /**
     * Get RequesterID value
     * @return string|null
     */
    public function getRequesterID(): ?string
    {
        return $this->RequesterID;
    }
    /**
     * Set RequesterID value
     * @param string $requesterID
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType
     */
    public function setRequesterID(?string $requesterID = null): self
    {
        // validation for constraint: string
        if (!is_null($requesterID) && !is_string($requesterID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requesterID, true), gettype($requesterID)), __LINE__);
        }
        $this->RequesterID = $requesterID;
        
        return $this;
    }
}
