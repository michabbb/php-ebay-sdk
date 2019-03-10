<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddTransactionConfirmationItemRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base request of the <b>AddTransactionConfirmationItem</b> call, which is used to end an eBay Motors listing and creates a new Transaction Confirmation Request (TCR) for the motor vehichle, thus enabling the TCR recipient to purchase
 * the item. You can also use this call to see if a new TCR can be created for the specified item.
 * @subpackage Structs
 */
class AddTransactionConfirmationItemRequestType extends AbstractRequestType
{
    /**
     * The RecipientUserID
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to specify the recipient of the Transaction Confirmation Request (TCR). | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay
     * user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders
     * on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * @var string
     */
    public $RecipientUserID;
    /**
     * The VerifyEligibilityOnly
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the seller wants to verify whether or not a new Transaction Confirmation Request (TCR) can be created for the item. If this field is included and its value set to
     * <code>true</code>, no TCR is actually created. If this field is included and its value set to <code>false</code>, or if it is omitted, a Transaction Confirmation Request is actually created.
     * @var string
     */
    public $VerifyEligibilityOnly;
    /**
     * The RecipientPostalCode
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to specify the postal code of the user to whom the seller is offering the Transaction Confirmation Request. This field is only required if the user does not meet the other options listed in
     * <b>RecipientRelationCodeType</b>.
     * @var string
     */
    public $RecipientPostalCode;
    /**
     * The RecipientRelationType
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value supplied in this field specifies the current relationship between the seller and the potential buyer. A Transaction Confirmation Request (TCR) for an item can be sent to a potential buyer who has at least one of
     * the following criteria: is an active bidder on the auction listing; has made a Best Offer on the fixed-price listing, is an eBay user who has used the Ask Seller a Question feature, or is an eBay user whose postal code is known.
     * @var string
     */
    public $RecipientRelationType;
    /**
     * The NegotiatedPrice
     * Meta informations extracted from the WSDL
     * - documentation: The amount in this field is the price that the seller is asking for to purchase the motor vehicle.
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $NegotiatedPrice;
    /**
     * The ListingDuration
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value specified in this field will control how many days that the recipient of the offer has to purchase the motor vehicle at the price listed in the <b>NegotiatedPrice</b> field.
     * @var string
     */
    public $ListingDuration;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: This field is used to identify the eBay Motors listing using the unique identifier of the listing (<b>ItemID</b>). | Type that represents the unique identifier for an eBay listing.
     * @var string
     */
    public $ItemID;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - documentation: This is optional free-form string field that can be used by the seller to provide any comments or additional information about the Transaction Confirmation Item.
     * @var string
     */
    public $Comments;
    /**
     * Constructor method for AddTransactionConfirmationItemRequestType
     * @uses AddTransactionConfirmationItemRequestType::setRecipientUserID()
     * @uses AddTransactionConfirmationItemRequestType::setVerifyEligibilityOnly()
     * @uses AddTransactionConfirmationItemRequestType::setRecipientPostalCode()
     * @uses AddTransactionConfirmationItemRequestType::setRecipientRelationType()
     * @uses AddTransactionConfirmationItemRequestType::setNegotiatedPrice()
     * @uses AddTransactionConfirmationItemRequestType::setListingDuration()
     * @uses AddTransactionConfirmationItemRequestType::setItemID()
     * @uses AddTransactionConfirmationItemRequestType::setComments()
     * @param string $recipientUserID
     * @param string $verifyEligibilityOnly
     * @param string $recipientPostalCode
     * @param string $recipientRelationType
     * @param \macropage\ebaysdk\trading\StructType\AmountType $negotiatedPrice
     * @param string $listingDuration
     * @param string $itemID
     * @param string $comments
     */
    public function __construct($recipientUserID = null, $verifyEligibilityOnly = null, $recipientPostalCode = null, $recipientRelationType = null, \macropage\ebaysdk\trading\StructType\AmountType $negotiatedPrice = null, $listingDuration = null, $itemID = null, $comments = null)
    {
        $this
            ->setRecipientUserID($recipientUserID)
            ->setVerifyEligibilityOnly($verifyEligibilityOnly)
            ->setRecipientPostalCode($recipientPostalCode)
            ->setRecipientRelationType($recipientRelationType)
            ->setNegotiatedPrice($negotiatedPrice)
            ->setListingDuration($listingDuration)
            ->setItemID($itemID)
            ->setComments($comments);
    }
    /**
     * Get RecipientUserID value
     * @return string|null
     */
    public function getRecipientUserID()
    {
        return $this->RecipientUserID;
    }
    /**
     * Set RecipientUserID value
     * @param string $recipientUserID
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType
     */
    public function setRecipientUserID($recipientUserID = null)
    {
        // validation for constraint: string
        if (!is_null($recipientUserID) && !is_string($recipientUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientUserID)), __LINE__);
        }
        $this->RecipientUserID = $recipientUserID;
        return $this;
    }
    /**
     * Get VerifyEligibilityOnly value
     * @return string|null
     */
    public function getVerifyEligibilityOnly()
    {
        return $this->VerifyEligibilityOnly;
    }
    /**
     * Set VerifyEligibilityOnly value
     * @param string $verifyEligibilityOnly
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType
     */
    public function setVerifyEligibilityOnly($verifyEligibilityOnly = null)
    {
        // validation for constraint: string
        if (!is_null($verifyEligibilityOnly) && !is_string($verifyEligibilityOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verifyEligibilityOnly)), __LINE__);
        }
        $this->VerifyEligibilityOnly = $verifyEligibilityOnly;
        return $this;
    }
    /**
     * Get RecipientPostalCode value
     * @return string|null
     */
    public function getRecipientPostalCode()
    {
        return $this->RecipientPostalCode;
    }
    /**
     * Set RecipientPostalCode value
     * @param string $recipientPostalCode
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType
     */
    public function setRecipientPostalCode($recipientPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($recipientPostalCode) && !is_string($recipientPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientPostalCode)), __LINE__);
        }
        $this->RecipientPostalCode = $recipientPostalCode;
        return $this;
    }
    /**
     * Get RecipientRelationType value
     * @return string|null
     */
    public function getRecipientRelationType()
    {
        return $this->RecipientRelationType;
    }
    /**
     * Set RecipientRelationType value
     * @uses \macropage\ebaysdk\trading\EnumType\RecipientRelationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RecipientRelationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $recipientRelationType
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType
     */
    public function setRecipientRelationType($recipientRelationType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RecipientRelationCodeType::valueIsValid($recipientRelationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $recipientRelationType, implode(', ', \macropage\ebaysdk\trading\EnumType\RecipientRelationCodeType::getValidValues())), __LINE__);
        }
        $this->RecipientRelationType = $recipientRelationType;
        return $this;
    }
    /**
     * Get NegotiatedPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getNegotiatedPrice()
    {
        return $this->NegotiatedPrice;
    }
    /**
     * Set NegotiatedPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $negotiatedPrice
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType
     */
    public function setNegotiatedPrice(\macropage\ebaysdk\trading\StructType\AmountType $negotiatedPrice = null)
    {
        $this->NegotiatedPrice = $negotiatedPrice;
        return $this;
    }
    /**
     * Get ListingDuration value
     * @return string|null
     */
    public function getListingDuration()
    {
        return $this->ListingDuration;
    }
    /**
     * Set ListingDuration value
     * @uses \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingDuration
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType
     */
    public function setListingDuration($listingDuration = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::valueIsValid($listingDuration)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingDuration, implode(', ', \macropage\ebaysdk\trading\EnumType\SecondChanceOfferDurationCodeType::getValidValues())), __LINE__);
        }
        $this->ListingDuration = $listingDuration;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType
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
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $comments
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemRequestType
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
