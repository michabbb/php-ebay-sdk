<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WarrantyOfferedCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * @subpackage Enumerations
 */
class WarrantyOfferedCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'WarrantyOffered'
     * Meta information extracted from the WSDL
     * - documentation: If this value is returned in the <b>ReturnPolicyDetails.WarrantyOffered</b> container of the <b>GeteBayDetails</b> response, the seller may offer a warranty to the buyer. This value that should be passed into the
     * <b>ReturnPolicy.WarrantyOfferedOption</b> field of an add/revise/relist API call if the seller wishes to offer a warranty to the buyer.
     * @return string 'WarrantyOffered'
     */
    const VALUE_WARRANTY_OFFERED = 'WarrantyOffered';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_WARRANTY_OFFERED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WARRANTY_OFFERED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
