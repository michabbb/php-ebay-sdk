<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CharityAffiliationTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type defines the possible values that can be returned for the <b>CharityAffiliationDetail.AffiliationType</b> field in the <b>GetUser</b> response.
 * @subpackage Enumerations
 */
class CharityAffiliationTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Community'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the eBay user is just selling on the behalf of the nonprofit organization, and is not directly affiliated with the organization.
     * @return string 'Community'
     */
    const VALUE_COMMUNITY = 'Community';
    /**
     * Constant for value 'Direct'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the eBay user is directly affiliated with or represents the nonprofit organization, or the eBay user has been added as a Direct Seller by the same nonprofit organization.
     * @return string 'Direct'
     */
    const VALUE_DIRECT = 'Direct';
    /**
     * Constant for value 'Remove'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value may be returned if the nonprofit organization has recently unregistered as an eBay for Charity organization, or it may be returned if the eBay user has recently removed the charity feature from a listing.
     * @return string 'Remove'
     */
    const VALUE_REMOVE = 'Remove';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_COMMUNITY
     * @uses self::VALUE_DIRECT
     * @uses self::VALUE_REMOVE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COMMUNITY,
            self::VALUE_DIRECT,
            self::VALUE_REMOVE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
