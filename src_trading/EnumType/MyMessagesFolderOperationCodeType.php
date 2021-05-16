<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MyMessagesFolderOperationCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the operations that can be used in a <b>ReviseMyMessagesFolders</b> call.
 * @subpackage Enumerations
 */
class MyMessagesFolderOperationCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Display'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to create one or more custom folders in <b>My eBay Messages</b>. For a 'Display' operation, the new folder name(s) are specified in one or more <b>FolderName</b> fields. The maximum length of a folder
     * name is 15 characters. Up to 10 new folders can be created with one <b>ReviseMyMessagesFolders</b> call, but this is also limited by how many custom folders exist at the time of the call, as only a maximum of 10 custom folders are supported in <b>My
     * eBay Messages</b>.
     * @return string 'Display'
     */
    const VALUE_DISPLAY = 'Display';
    /**
     * Constant for value 'Rename'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to rename one or more existing folders in <b>My eBay Messages</b>. For a 'Rename' operation, the unique identifier(s) of the message folder(s) to rename are specified in one or more <b>FolderID</b>
     * fields, and the new name for the folder(s) are specified in one or more <b>FolderName</b> fields. <br/><br/> The <b>FolderID</b> and <b>FolderName</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to
     * <code>ReturnSummary</code>, or these folder names and identifiers can be found by navigating to <b>My eBay Messages</b> (Folder ID values are displayed at the end of the browser's URL when that folder is opened). <br/><br/> The maximum length of a
     * folder name is 15 characters. The Inbox and Sent folders cannot be renamed. <br/><br/> <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and
     * <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload
     * will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on. </span>
     * @return string 'Rename'
     */
    const VALUE_RENAME = 'Rename';
    /**
     * Constant for value 'Remove'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is used to remove one or more custom folders in <b>My eBay Messages</b>. For a 'Remove' operation, the folder(s) to remove are specified in one or more <b>FolderID</b> fields. The <b>FolderID</b> values for a
     * <b>My eBay Messages</b> folders can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or these folder IDs can be found by navigating to a specific folder in <b>My eBay Messages</b>, and
     * the ID value for the opened folder is displayed at the end of the browser's URL. <br/><br/> A <b>My eBay Messages</b> folder must be empty before being removed, and an error is returned if a user tries to remove a non-empty folder. <br/><br/> The
     * Inbox and Sent folders cannot be removed under any circumstance.
     * @return string 'Remove'
     */
    const VALUE_REMOVE = 'Remove';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DISPLAY
     * @uses self::VALUE_RENAME
     * @uses self::VALUE_REMOVE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DISPLAY,
            self::VALUE_RENAME,
            self::VALUE_REMOVE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
