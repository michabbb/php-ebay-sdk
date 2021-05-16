<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DetailLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies standard subsets of data to return for each result within the set of results in the response payload. If no detail level is specified, a base set of data is returned. The base set of data varies per call.
 * @subpackage Enumerations
 */
class DetailLevelCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ReturnAll'
     * Meta information extracted from the WSDL
     * - documentation: Returns all available data. With <b>GetSellerList</b> and other calls that retrieve large data sets, please avoid using <b>ReturnAll</b> when possible. For example, if you use <b>GetSellerList</b>, use a <b>GranularityLevel</b> or
     * use the <b>GetSellerEvents</b> call instead. If you use <b>ReturnAll</b> with <b>GetSellerList</b>, use a small <b>EntriesPerPage</b> value and a short <b>EndTimeFrom</b>/<b>EndTimeTo</b> range for better performance.
     * @return string 'ReturnAll'
     */
    const VALUE_RETURN_ALL = 'ReturnAll';
    /**
     * Constant for value 'ItemReturnDescription'
     * Meta information extracted from the WSDL
     * - documentation: Returns the description, plus the <b>ListingDesigner</b> node and some additional information if applicable
     * @return string 'ItemReturnDescription'
     */
    const VALUE_ITEM_RETURN_DESCRIPTION = 'ItemReturnDescription';
    /**
     * Constant for value 'ItemReturnAttributes'
     * Meta information extracted from the WSDL
     * - documentation: For <b>GetItem</b>, returns Item Specifics and Pre-filled Item Information, if any. Also see the description of <b>Item.ProductListingDetails</b> for <b>GetItem</b>.
     * @return string 'ItemReturnAttributes'
     */
    const VALUE_ITEM_RETURN_ATTRIBUTES = 'ItemReturnAttributes';
    /**
     * Constant for value 'ItemReturnCategories'
     * Meta information extracted from the WSDL
     * - documentation: If this value is used, the primary category and, if applicable, the secondary category is returned.
     * @return string 'ItemReturnCategories'
     */
    const VALUE_ITEM_RETURN_CATEGORIES = 'ItemReturnCategories';
    /**
     * Constant for value 'ReturnSummary'
     * Meta information extracted from the WSDL
     * - documentation: Returns the summary data. For <b>GetMyMessages</b>, this detail level returns the same data whether or not you include <b>MessageIDs</b> or <b>AlertIDs</b> in the request. Returns up to 10 <b>FolderID</b> and <b>FolderName</b>
     * values. Currently, this detail level is the only way to retrieve <b>FolderID</b> and <b>FolderName</b> values. See <b>GetMyMessages</b> for a code sample that demonstrates this.
     * @return string 'ReturnSummary'
     */
    const VALUE_RETURN_SUMMARY = 'ReturnSummary';
    /**
     * Constant for value 'ReturnHeaders'
     * Meta information extracted from the WSDL
     * - documentation: Returns message headers. For <b>GetMyMessages</b>, if you include <b>MessageIDs</b> or <b>AlertIDs</b> in the request, this detail level returns header information, without body text, for the specified message ID or alert ID values.
     * If you include a <b>FolderID</b>, header information is returned only for the messages and alerts in the specified folder.<br/><br/> If you do not include <b>MessageIDs</b> or <b>AlertIDs</b>, this detail level returns header information for Alerts
     * and Messages as follows: <ul> <li>If all the Alerts have been read, they are sorted in date order, with the most recent first.</li> <li>If one of the Alerts has not been read, the Read Alerts come first, sorted most recent first, followed by the
     * Unread Alert(s).</li> <li>All messages in ascending order by date received with the oldest messages first.</li> </ul> <br/> <span class="tablenote"><b>Note:</b> Even when restricted by this detail level to return only header information,
     * <b>GetMyMessages</b> may return a high volume of data. </span>
     * @return string 'ReturnHeaders'
     */
    const VALUE_RETURN_HEADERS = 'ReturnHeaders';
    /**
     * Constant for value 'ReturnMessages'
     * Meta information extracted from the WSDL
     * - documentation: Returns full message information. For <b>GetMyMessages</b>, if you include <b>MessageIDs</b> or <b>AlertIDs</b> in the request, this detail level returns message information for the specified message ID or alert ID values. If you
     * include a <b>FolderID</b>, message information is returned only for the messages and alerts in the specified folder.
     * @return string 'ReturnMessages'
     */
    const VALUE_RETURN_MESSAGES = 'ReturnMessages';
    /**
     * Return allowed values
     * @uses self::VALUE_RETURN_ALL
     * @uses self::VALUE_ITEM_RETURN_DESCRIPTION
     * @uses self::VALUE_ITEM_RETURN_ATTRIBUTES
     * @uses self::VALUE_ITEM_RETURN_CATEGORIES
     * @uses self::VALUE_RETURN_SUMMARY
     * @uses self::VALUE_RETURN_HEADERS
     * @uses self::VALUE_RETURN_MESSAGES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RETURN_ALL,
            self::VALUE_ITEM_RETURN_DESCRIPTION,
            self::VALUE_ITEM_RETURN_ATTRIBUTES,
            self::VALUE_ITEM_RETURN_CATEGORIES,
            self::VALUE_RETURN_SUMMARY,
            self::VALUE_RETURN_HEADERS,
            self::VALUE_RETURN_MESSAGES,
        ];
    }
}
