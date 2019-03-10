<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserContactDetailsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call is used to retrieve contact information for a specified eBay user, given that a bidding relationship (as either a buyer or seller) exists between the caller and the user.
 * @subpackage Structs
 */
class GetUserContactDetailsRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for the eBay listing that the caller and order partner have in common.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The ContactID
     * Meta informations extracted from the WSDL
     * - documentation: An eBay user ID that uniquely identifies a given user for whom the caller is seeking information. Either a seller's or bidder's/buyer's user ID can be specified here, as long as an bidding/order relationship exists between the
     * requester and the user specified by this field. That is, a bidder must be bidding on the seller's active auction item, or a prospective buyer has proposed a Best Offer on a listing.
     * - minOccurs: 0
     * @var string
     */
    public $ContactID;
    /**
     * The RequesterID
     * Meta informations extracted from the WSDL
     * - documentation: An eBay user ID that uniquely identifies the person who is making the call. Either a seller's or bidder's/buyer's user ID can be specified here, as long as a bidding/order relationship exists between the requester and the user for
     * whom information is being requested.
     * - minOccurs: 0
     * @var string
     */
    public $RequesterID;
    /**
     * Constructor method for GetUserContactDetailsRequestType
     * @uses GetUserContactDetailsRequestType::setItemID()
     * @uses GetUserContactDetailsRequestType::setContactID()
     * @uses GetUserContactDetailsRequestType::setRequesterID()
     * @param string $itemID
     * @param string $contactID
     * @param string $requesterID
     */
    public function __construct($itemID = null, $contactID = null, $requesterID = null)
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
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType
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
     * Get ContactID value
     * @return string|null
     */
    public function getContactID()
    {
        return $this->ContactID;
    }
    /**
     * Set ContactID value
     * @param string $contactID
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType
     */
    public function setContactID($contactID = null)
    {
        // validation for constraint: string
        if (!is_null($contactID) && !is_string($contactID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactID)), __LINE__);
        }
        $this->ContactID = $contactID;
        return $this;
    }
    /**
     * Get RequesterID value
     * @return string|null
     */
    public function getRequesterID()
    {
        return $this->RequesterID;
    }
    /**
     * Set RequesterID value
     * @param string $requesterID
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType
     */
    public function setRequesterID($requesterID = null)
    {
        // validation for constraint: string
        if (!is_null($requesterID) && !is_string($requesterID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requesterID)), __LINE__);
        }
        $this->RequesterID = $requesterID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsRequestType
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
