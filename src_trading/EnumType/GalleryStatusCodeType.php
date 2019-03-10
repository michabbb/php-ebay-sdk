<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for GalleryStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumeration type that returns the status of the gallery image generation. That status returns either a value of 'Success' or a value that indicates why the gallery image has not been generated.
 * @subpackage Enumerations
 */
class GalleryStatusCodeType
{
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'InvalidUrl'
     * @return string 'InvalidUrl'
     */
    const VALUE_INVALID_URL = 'InvalidUrl';
    /**
     * Constant for value 'InvalidProtocol'
     * @return string 'InvalidProtocol'
     */
    const VALUE_INVALID_PROTOCOL = 'InvalidProtocol';
    /**
     * Constant for value 'InvalidFile'
     * @return string 'InvalidFile'
     */
    const VALUE_INVALID_FILE = 'InvalidFile';
    /**
     * Constant for value 'ServerDown'
     * @return string 'ServerDown'
     */
    const VALUE_SERVER_DOWN = 'ServerDown';
    /**
     * Constant for value 'ImageNonExistent'
     * @return string 'ImageNonExistent'
     */
    const VALUE_IMAGE_NON_EXISTENT = 'ImageNonExistent';
    /**
     * Constant for value 'ImageReadTimeOut'
     * @return string 'ImageReadTimeOut'
     */
    const VALUE_IMAGE_READ_TIME_OUT = 'ImageReadTimeOut';
    /**
     * Constant for value 'InvalidFileFormat'
     * @return string 'InvalidFileFormat'
     */
    const VALUE_INVALID_FILE_FORMAT = 'InvalidFileFormat';
    /**
     * Constant for value 'ImageProcessingError'
     * @return string 'ImageProcessingError'
     */
    const VALUE_IMAGE_PROCESSING_ERROR = 'ImageProcessingError';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
    public static function getValidValues()
    {
        return array(
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
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
