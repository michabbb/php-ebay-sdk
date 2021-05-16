<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MinimumAdvertisedPriceExposureCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the special price treatments that can be set up for listings enabled with the Minimum Advertised Price feature. The Minimum Advertised Price (MAP) feature is only supported on the eBay US site.
 * @subpackage Enumerations
 */
class MinimumAdvertisedPriceExposureCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PreCheckout'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer must add the item to his/her cart before the discounted price can be displayed.
     * @return string 'PreCheckout'
     */
    const VALUE_PRE_CHECKOUT = 'PreCheckout';
    /**
     * Constant for value 'DuringCheckout'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the discounted price will only be shown to the buyer once the buyer reaches the eBay Checkout page.
     * @return string 'DuringCheckout'
     */
    const VALUE_DURING_CHECKOUT = 'DuringCheckout';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the discounted price is shown on the View Item page, and the buyer is not required to add the item to his/her cart or click Buy button to view the discounted price.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_PRE_CHECKOUT
     * @uses self::VALUE_DURING_CHECKOUT
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PRE_CHECKOUT,
            self::VALUE_DURING_CHECKOUT,
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
