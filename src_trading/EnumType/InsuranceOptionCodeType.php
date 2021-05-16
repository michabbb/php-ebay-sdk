<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for InsuranceOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as shipping insurance is no longer applicable or supported in eBay APIs.
 * @subpackage Enumerations
 */
class InsuranceOptionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Optional'
     * Meta information extracted from the WSDL
     * - documentation: The seller offers the buyer the choice of paying for shipping insurance or not.
     * @return string 'Optional'
     */
    const VALUE_OPTIONAL = 'Optional';
    /**
     * Constant for value 'Required'
     * Meta information extracted from the WSDL
     * - documentation: The seller requires that the buyer pay for shipping insurance.
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'NotOffered'
     * Meta information extracted from the WSDL
     * - documentation: The seller does not offer shipping insurance to the buyer.
     * @return string 'NotOffered'
     */
    const VALUE_NOT_OFFERED = 'NotOffered';
    /**
     * Constant for value 'IncludedInShippingHandling'
     * Meta information extracted from the WSDL
     * - documentation: The seller is not charging separately for shipping insurance costs; any insurance is already included in the base shipping cost.
     * @return string 'IncludedInShippingHandling'
     */
    const VALUE_INCLUDED_IN_SHIPPING_HANDLING = 'IncludedInShippingHandling';
    /**
     * Constant for value 'NotOfferedOnSite'
     * Meta information extracted from the WSDL
     * - documentation: Shipping insurance is not offered as a separate option on the site where the item is listed. (Some shipping services, such as DE_InsuredExpressOrCourier, include insurance as part of the service.) If another insurance option is
     * specified in the listing request and the site does not support shipping insurance as a separate option, eBay will reset the insurance option to this value. At the time of this writing, this option is only meaningful for the eBay Germany, Austria, and
     * Switzerland sites.
     * @return string 'NotOfferedOnSite'
     */
    const VALUE_NOT_OFFERED_ON_SITE = 'NotOfferedOnSite';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OPTIONAL
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_NOT_OFFERED
     * @uses self::VALUE_INCLUDED_IN_SHIPPING_HANDLING
     * @uses self::VALUE_NOT_OFFERED_ON_SITE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OPTIONAL,
            self::VALUE_REQUIRED,
            self::VALUE_NOT_OFFERED,
            self::VALUE_INCLUDED_IN_SHIPPING_HANDLING,
            self::VALUE_NOT_OFFERED_ON_SITE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
