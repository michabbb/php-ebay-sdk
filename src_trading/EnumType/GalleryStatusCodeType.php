<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GalleryStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration type that returns the status of the gallery image generation. That status returns either a value of 'Success' or a value that indicates why the gallery image has not been generated.
 * @subpackage Enumerations
 */
class GalleryStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Success'
     * Meta information extracted from the WSDL
     * - documentation: The Gallery image was successfully generated.
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'Pending'
     * Meta information extracted from the WSDL
     * - documentation: The Gallery image has not yet been generated.
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'InvalidUrl'
     * Meta information extracted from the WSDL
     * - documentation: The URL for the image file is not valid.
     * @return string 'InvalidUrl'
     */
    const VALUE_INVALID_URL = 'InvalidUrl';
    /**
     * Constant for value 'InvalidProtocol'
     * Meta information extracted from the WSDL
     * - documentation: The URL does not start with <code>http:// </code> or <code>https:// </code>.
     * @return string 'InvalidProtocol'
     */
    const VALUE_INVALID_PROTOCOL = 'InvalidProtocol';
    /**
     * Constant for value 'InvalidFile'
     * Meta information extracted from the WSDL
     * - documentation: There is a problem with the image file.
     * @return string 'InvalidFile'
     */
    const VALUE_INVALID_FILE = 'InvalidFile';
    /**
     * Constant for value 'ServerDown'
     * Meta information extracted from the WSDL
     * - documentation: The server containing the image file was unavailable.
     * @return string 'ServerDown'
     */
    const VALUE_SERVER_DOWN = 'ServerDown';
    /**
     * Constant for value 'ImageNonExistent'
     * Meta information extracted from the WSDL
     * - documentation: The image file could not be found.
     * @return string 'ImageNonExistent'
     */
    const VALUE_IMAGE_NON_EXISTENT = 'ImageNonExistent';
    /**
     * Constant for value 'ImageReadTimeOut'
     * Meta information extracted from the WSDL
     * - documentation: The image file failed to transfer.
     * @return string 'ImageReadTimeOut'
     */
    const VALUE_IMAGE_READ_TIME_OUT = 'ImageReadTimeOut';
    /**
     * Constant for value 'InvalidFileFormat'
     * Meta information extracted from the WSDL
     * - documentation: The image file is not in JPG, BMP, GIF, TIF, or PNG format.
     * @return string 'InvalidFileFormat'
     */
    const VALUE_INVALID_FILE_FORMAT = 'InvalidFileFormat';
    /**
     * Constant for value 'ImageProcessingError'
     * Meta information extracted from the WSDL
     * - documentation: We were not able to process the image file.
     * @return string 'ImageProcessingError'
     */
    const VALUE_IMAGE_PROCESSING_ERROR = 'ImageProcessingError';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal <b>only</b>.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_INVALID_URL
     * @uses self::VALUE_INVALID_PROTOCOL
     * @uses self::VALUE_INVALID_FILE
     * @uses self::VALUE_SERVER_DOWN
     * @uses self::VALUE_IMAGE_NON_EXISTENT
     * @uses self::VALUE_IMAGE_READ_TIME_OUT
     * @uses self::VALUE_INVALID_FILE_FORMAT
     * @uses self::VALUE_IMAGE_PROCESSING_ERROR
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SUCCESS,
            self::VALUE_PENDING,
            self::VALUE_INVALID_URL,
            self::VALUE_INVALID_PROTOCOL,
            self::VALUE_INVALID_FILE,
            self::VALUE_SERVER_DOWN,
            self::VALUE_IMAGE_NON_EXISTENT,
            self::VALUE_IMAGE_READ_TIME_OUT,
            self::VALUE_INVALID_FILE_FORMAT,
            self::VALUE_IMAGE_PROCESSING_ERROR,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
