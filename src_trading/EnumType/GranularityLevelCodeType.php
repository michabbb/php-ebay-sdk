<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GranularityLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies a predefined subset of fields to return. The predefined set of fields can vary for different calls. Only applicable to certain calls (see request types that include a GranularityLevel property). For calls that support this
 * filter, see the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay Features Guide</a> for a list of the output fields that are returned for each level. Only one level can be specified
 * at a time. For GetSellerList, use DetailLevel or GranularityLevel in a given request, but not both. For GetSellerList, if GranularityLevel is specified, DetailLevel is ignored.
 * @subpackage Enumerations
 */
class GranularityLevelCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Coarse'
     * Meta information extracted from the WSDL
     * - documentation: (in) For each record in the response, retrieves less data than Medium. See the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay Features Guide</a> for a list of the
     * output fields that are returned when this level is specified.
     * @return string 'Coarse'
     */
    const VALUE_COARSE = 'Coarse';
    /**
     * Constant for value 'Fine'
     * Meta information extracted from the WSDL
     * - documentation: For each record in the response, retrieves more data than Medium. See the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay Features Guide</a> for a list of the
     * output fields that are returned when this level is specified.
     * @return string 'Fine'
     */
    const VALUE_FINE = 'Fine';
    /**
     * Constant for value 'Medium'
     * Meta information extracted from the WSDL
     * - documentation: For each record in the response, retrieves more data than Coarse and less data than Fine. See the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay Features
     * Guide</a> for a list of the output fields that are returned when this level is specified.
     * @return string 'Medium'
     */
    const VALUE_MEDIUM = 'Medium';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_COARSE
     * @uses self::VALUE_FINE
     * @uses self::VALUE_MEDIUM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COARSE,
            self::VALUE_FINE,
            self::VALUE_MEDIUM,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
