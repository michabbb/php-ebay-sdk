<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UsageConstraintCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is used by the <b>NameRecommendation.ValidationRules.UsageConstraint</b> field that is returned in <b>GetCategorySpecifics</b> for each item specific that is returned in the response. The enumeration value
 * returned in the <b>UsageConstraint</b> will indicate whether the item specific is required, recommended, or optional.
 * @subpackage Enumerations
 */
class UsageConstraintCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Optional'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the corresponding item specific is completely optional for a listing in the category, but the seller should still include it if the item specific is relevant to the product and its value is
     * known.
     * @return string 'Optional'
     */
    const VALUE_OPTIONAL = 'Optional';
    /**
     * Constant for value 'Recommended'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the corresponding item specific is typical and recommended for a listing in the category, but not fully required. The seller should include this item specific if its value is known because
     * including it may improve search results and sale conversion.
     * @return string 'Recommended'
     */
    const VALUE_RECOMMENDED = 'Recommended';
    /**
     * Constant for value 'Required'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the corresponding item specific is required for a listing in the category. The seller must include this item specific or the listing may be blocked.
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OPTIONAL
     * @uses self::VALUE_RECOMMENDED
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OPTIONAL,
            self::VALUE_RECOMMENDED,
            self::VALUE_REQUIRED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
