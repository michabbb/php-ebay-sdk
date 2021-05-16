<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GetAllBiddersModeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the values that can be used in the <b>CallMode</b> field of the <b>GetAllBidders</b> call request to control which type of auction bidders are returned in the response.
 * @subpackage Enumerations
 */
class GetAllBiddersModeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ViewAll'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used if the user wants to retrieve all bidders on an active or recently-ended auction listing. This value can be used by any user, and it is the default value if the <b>CallMode</b> field is not included in
     * the call request.
     * @return string 'ViewAll'
     */
    const VALUE_VIEW_ALL = 'ViewAll';
    /**
     * Constant for value 'EndedListing'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used if the user wants to retrieve all non-winning bidders for a recently-ended auction listing. This value can be only be used by the seller of the item.
     * @return string 'EndedListing'
     */
    const VALUE_ENDED_LISTING = 'EndedListing';
    /**
     * Constant for value 'SecondChanceEligibleEndedListing'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used if the user wants to retrieve all non-winning bidders, for a recently-ended auction listing, who are eligible for, and who accept Second Chance Offers. This value can be only be used by the seller of
     * the item. See <"http://pages.ebay.com/help/sell/second_chance_offer.html#when" target="_blank">When to use a Second Chance Offer</a> for more information on Second Chance Offers.
     * @return string 'SecondChanceEligibleEndedListing'
     */
    const VALUE_SECOND_CHANCE_ELIGIBLE_ENDED_LISTING = 'SecondChanceEligibleEndedListing';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_VIEW_ALL
     * @uses self::VALUE_ENDED_LISTING
     * @uses self::VALUE_SECOND_CHANCE_ELIGIBLE_ENDED_LISTING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VIEW_ALL,
            self::VALUE_ENDED_LISTING,
            self::VALUE_SECOND_CHANCE_ELIGIBLE_ENDED_LISTING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
