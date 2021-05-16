<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PricingTreatmentCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines the type of treatment applied to a discounted item, either Strikethrough Pricing or Minimum Advertised Price.
 * @subpackage Enumerations
 */
class PricingTreatmentCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'STP'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that Strikethrough Pricing is enabled for the order line item. If this value is returned, the price in the <b>OriginalRetailPrice</b> field will be crossed out in the View Item page.
     * @return string 'STP'
     */
    const VALUE_STP = 'STP';
    /**
     * Constant for value 'MAP'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that Minimum Advertised Pricing is enabled for the order line item. If this value is returned, the minimum advertised price is found in the <b>MinimumAdvertisedPrice</b> field.
     * @return string 'MAP'
     */
    const VALUE_MAP = 'MAP';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that neither Strikethrough Pricing or Minimum Advertised Pricing is enabled for the order line item.
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
     * @uses self::VALUE_STP
     * @uses self::VALUE_MAP
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STP,
            self::VALUE_MAP,
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
