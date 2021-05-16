<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ErrorHandlingCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Preferences that specify how eBay should handle certain requests that contain invalid data or that could partially fail. These preferences give you some control over whether eBay returns warnings or errors in response to invalid data
 * and how eBay handles listing requests when such data is passed in. For example, these preferences are applicable to <b>AddItem</b> and related calls when Item Specifics are specified, and to <b>CompleteSale</b>. See <a
 * href="http://developer.ebay.com/devzone/guides/features-guide/default.html#Basics/Call-ErrorHandling.html">Error Handling</a> for details about these preferences and their effects.
 * @subpackage Enumerations
 */
class ErrorHandlingCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Legacy'
     * Meta information extracted from the WSDL
     * - documentation: Apply validation rules that were in effect prior to the time the call started supporting <b>ErrorHandling</b>.
     * @return string 'Legacy'
     */
    const VALUE_LEGACY = 'Legacy';
    /**
     * Constant for value 'BestEffort'
     * Meta information extracted from the WSDL
     * - documentation: Drop the invalid data, continue processing the request with the valid data. If dropping the invalid data leaves the request in a state where required data is missing, reject the request.<br> <br> If <b>BestEffort</b> is specified for
     * <b>CompleteSale</b>, the Ack field in the response could return PartialFailure if one change fails but another succeeds. For example, if the seller attempts to leave feedback twice for the same order line item, the feedback changes would fail but any
     * paid or shipped status changes would succeed.
     * @return string 'BestEffort'
     */
    const VALUE_BEST_EFFORT = 'BestEffort';
    /**
     * Constant for value 'AllOrNothing'
     * Meta information extracted from the WSDL
     * - documentation: If any of the item specifics data is invalid, drop all the data and proceed with listing the item. If the category has required item specifics and the data was dropped, reject the listing.
     * @return string 'AllOrNothing'
     */
    const VALUE_ALL_OR_NOTHING = 'AllOrNothing';
    /**
     * Constant for value 'FailOnError'
     * Meta information extracted from the WSDL
     * - documentation: If any data is invalid, reject the request.
     * @return string 'FailOnError'
     */
    const VALUE_FAIL_ON_ERROR = 'FailOnError';
    /**
     * Return allowed values
     * @uses self::VALUE_LEGACY
     * @uses self::VALUE_BEST_EFFORT
     * @uses self::VALUE_ALL_OR_NOTHING
     * @uses self::VALUE_FAIL_ON_ERROR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LEGACY,
            self::VALUE_BEST_EFFORT,
            self::VALUE_ALL_OR_NOTHING,
            self::VALUE_FAIL_ON_ERROR,
        ];
    }
}
