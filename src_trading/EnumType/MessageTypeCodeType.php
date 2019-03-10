<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for MessageTypeCodeType EnumType
 * @subpackage Enumerations
 */
class MessageTypeCodeType
{
    /**
     * Constant for value 'AskSellerQuestion'
     * @return string 'AskSellerQuestion'
     */
    const VALUE_ASK_SELLER_QUESTION = 'AskSellerQuestion';
    /**
     * Constant for value 'ResponseToASQQuestion'
     * @return string 'ResponseToASQQuestion'
     */
    const VALUE_RESPONSE_TO_ASQQUESTION = 'ResponseToASQQuestion';
    /**
     * Constant for value 'ContactEbayMember'
     * @return string 'ContactEbayMember'
     */
    const VALUE_CONTACT_EBAY_MEMBER = 'ContactEbayMember';
    /**
     * Constant for value 'ContactTransactionPartner'
     * @return string 'ContactTransactionPartner'
     */
    const VALUE_CONTACT_TRANSACTION_PARTNER = 'ContactTransactionPartner';
    /**
     * Constant for value 'ResponseToContacteBayMember'
     * @return string 'ResponseToContacteBayMember'
     */
    const VALUE_RESPONSE_TO_CONTACTE_BAY_MEMBER = 'ResponseToContacteBayMember';
    /**
     * Constant for value 'ContacteBayMemberViaCommunityLink'
     * @return string 'ContacteBayMemberViaCommunityLink'
     */
    const VALUE_CONTACTE_BAY_MEMBER_VIA_COMMUNITY_LINK = 'ContacteBayMemberViaCommunityLink';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'ContactMyBidder'
     * @return string 'ContactMyBidder'
     */
    const VALUE_CONTACT_MY_BIDDER = 'ContactMyBidder';
    /**
     * Constant for value 'ContacteBayMemberViaAnonymousEmail'
     * @return string 'ContacteBayMemberViaAnonymousEmail'
     */
    const VALUE_CONTACTE_BAY_MEMBER_VIA_ANONYMOUS_EMAIL = 'ContacteBayMemberViaAnonymousEmail';
    /**
     * Constant for value 'ClassifiedsContactSeller'
     * @return string 'ClassifiedsContactSeller'
     */
    const VALUE_CLASSIFIEDS_CONTACT_SELLER = 'ClassifiedsContactSeller';
    /**
     * Constant for value 'ClassifiedsBestOffer'
     * @return string 'ClassifiedsBestOffer'
     */
    const VALUE_CLASSIFIEDS_BEST_OFFER = 'ClassifiedsBestOffer';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ASK_SELLER_QUESTION
     * @uses self::VALUE_RESPONSE_TO_ASQQUESTION
     * @uses self::VALUE_CONTACT_EBAY_MEMBER
     * @uses self::VALUE_CONTACT_TRANSACTION_PARTNER
     * @uses self::VALUE_RESPONSE_TO_CONTACTE_BAY_MEMBER
     * @uses self::VALUE_CONTACTE_BAY_MEMBER_VIA_COMMUNITY_LINK
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_ALL
     * @uses self::VALUE_CONTACT_MY_BIDDER
     * @uses self::VALUE_CONTACTE_BAY_MEMBER_VIA_ANONYMOUS_EMAIL
     * @uses self::VALUE_CLASSIFIEDS_CONTACT_SELLER
     * @uses self::VALUE_CLASSIFIEDS_BEST_OFFER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ASK_SELLER_QUESTION,
            self::VALUE_RESPONSE_TO_ASQQUESTION,
            self::VALUE_CONTACT_EBAY_MEMBER,
            self::VALUE_CONTACT_TRANSACTION_PARTNER,
            self::VALUE_RESPONSE_TO_CONTACTE_BAY_MEMBER,
            self::VALUE_CONTACTE_BAY_MEMBER_VIA_COMMUNITY_LINK,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_ALL,
            self::VALUE_CONTACT_MY_BIDDER,
            self::VALUE_CONTACTE_BAY_MEMBER_VIA_ANONYMOUS_EMAIL,
            self::VALUE_CLASSIFIEDS_CONTACT_SELLER,
            self::VALUE_CLASSIFIEDS_BEST_OFFER,
        );
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
