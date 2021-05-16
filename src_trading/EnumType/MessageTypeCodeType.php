<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MessageTypeCodeType EnumType
 * @subpackage Enumerations
 */
class MessageTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AskSellerQuestion'
     * Meta information extracted from the WSDL
     * - documentation: Member to Member message initiated by bidder/potential bidder to a seller of a particular item.
     * @return string 'AskSellerQuestion'
     */
    const VALUE_ASK_SELLER_QUESTION = 'AskSellerQuestion';
    /**
     * Constant for value 'ResponseToASQQuestion'
     * Meta information extracted from the WSDL
     * - documentation: Member to Member message initiated as a response to an Ask A Question message.
     * @return string 'ResponseToASQQuestion'
     */
    const VALUE_RESPONSE_TO_ASQQUESTION = 'ResponseToASQQuestion';
    /**
     * Constant for value 'ContactEbayMember'
     * Meta information extracted from the WSDL
     * - documentation: Member to Member message initiated by any eBay member to another eBay member.
     * @return string 'ContactEbayMember'
     */
    const VALUE_CONTACT_EBAY_MEMBER = 'ContactEbayMember';
    /**
     * Constant for value 'ContactTransactionPartner'
     * Meta information extracted from the WSDL
     * - documentation: Member message between order partners within 90 days after creation of the order.
     * @return string 'ContactTransactionPartner'
     */
    const VALUE_CONTACT_TRANSACTION_PARTNER = 'ContactTransactionPartner';
    /**
     * Constant for value 'ResponseToContacteBayMember'
     * Meta information extracted from the WSDL
     * - documentation: Member to Member message initiated as a response to a Contact eBay Member message.
     * @return string 'ResponseToContacteBayMember'
     */
    const VALUE_RESPONSE_TO_CONTACTE_BAY_MEMBER = 'ResponseToContacteBayMember';
    /**
     * Constant for value 'ContacteBayMemberViaCommunityLink'
     * Meta information extracted from the WSDL
     * - documentation: Member to Member message initiated by any eBay member to another eBay member who has posted on a community forum within the past 7 days.
     * @return string 'ContacteBayMemberViaCommunityLink'
     */
    const VALUE_CONTACTE_BAY_MEMBER_VIA_COMMUNITY_LINK = 'ContacteBayMemberViaCommunityLink';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'All'
     * Meta information extracted from the WSDL
     * - documentation: All message types.
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'ContactMyBidder'
     * Meta information extracted from the WSDL
     * - documentation: Member to Member message initiated by sellers to their bidders during an active listing.
     * @return string 'ContactMyBidder'
     */
    const VALUE_CONTACT_MY_BIDDER = 'ContactMyBidder';
    /**
     * Constant for value 'ContacteBayMemberViaAnonymousEmail'
     * Meta information extracted from the WSDL
     * - documentation: Member message initiated after eBay receives an email sent by an eBay member's email client to another eBay member.
     * @return string 'ContacteBayMemberViaAnonymousEmail'
     */
    const VALUE_CONTACTE_BAY_MEMBER_VIA_ANONYMOUS_EMAIL = 'ContacteBayMemberViaAnonymousEmail';
    /**
     * Constant for value 'ClassifiedsContactSeller'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that an inquiry has been sent to the seller regarding the corresponding classified ad listing.
     * @return string 'ClassifiedsContactSeller'
     */
    const VALUE_CLASSIFIEDS_CONTACT_SELLER = 'ClassifiedsContactSeller';
    /**
     * Constant for value 'ClassifiedsBestOffer'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that a Best Offer has been made on the seller's corresponding classified ad listing. This message type is only applicable to Classified categories that allow the Best Offer feature, such as motor vehicles.
     * @return string 'ClassifiedsBestOffer'
     */
    const VALUE_CLASSIFIEDS_BEST_OFFER = 'ClassifiedsBestOffer';
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
    public static function getValidValues(): array
    {
        return [
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
        ];
    }
}
