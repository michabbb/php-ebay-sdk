<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PictureManagerDetailLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class PictureManagerDetailLevelCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ReturnAll'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ReturnAll'
     */
    const VALUE_RETURN_ALL = 'ReturnAll';
    /**
     * Constant for value 'ReturnSubscription'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ReturnSubscription'
     */
    const VALUE_RETURN_SUBSCRIPTION = 'ReturnSubscription';
    /**
     * Constant for value 'ReturnPicture'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'ReturnPicture'
     */
    const VALUE_RETURN_PICTURE = 'ReturnPicture';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is not used.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_RETURN_ALL
     * @uses self::VALUE_RETURN_SUBSCRIPTION
     * @uses self::VALUE_RETURN_PICTURE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RETURN_ALL,
            self::VALUE_RETURN_SUBSCRIPTION,
            self::VALUE_RETURN_PICTURE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
