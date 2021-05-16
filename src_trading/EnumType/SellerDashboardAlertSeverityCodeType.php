<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellerDashboardAlertSeverityCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Alerts can be either informational or a warning that identifies a problem.
 * @subpackage Enumerations
 */
class SellerDashboardAlertSeverityCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Informational'
     * Meta information extracted from the WSDL
     * - documentation: The alert message is informational in nature. <br><br> Some examples: you might get a PowerSeller status message if your PowerSeller level has been increased, a policy-compliance message if you have no recent policy violations, a
     * buyer-satisfaction message if you are providing excellent customer service, or a seller-account message if there is a new notice available about your payment status.
     * @return string 'Informational'
     */
    const VALUE_INFORMATIONAL = 'Informational';
    /**
     * Constant for value 'Warning'
     * Meta information extracted from the WSDL
     * - documentation: The alert message is a warning that identifies a problem. <br><br> For example, you might get a PowerSeller status warning if you missed the PowerSeller sales requirements in the past month. Or you might get a policy-compliance
     * warning if you recently listed an item with excessive shipping costs, or a seller-account warning if a collections message asks you to pay now to make sure no restrictions are placed on your account.
     * @return string 'Warning'
     */
    const VALUE_WARNING = 'Warning';
    /**
     * Constant for value 'StrongWarning'
     * Meta information extracted from the WSDL
     * - documentation: The alert message is a strong warning that indicates a serious problem. <br><br> For example, you might get a PowerSeller status strong warning if you have lost your PowerSeller status because of policy violations, or you might get a
     * policy-compliance strong warning if your account has been restricted.
     * @return string 'StrongWarning'
     */
    const VALUE_STRONG_WARNING = 'StrongWarning';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal (or future) use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_INFORMATIONAL
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_STRONG_WARNING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INFORMATIONAL,
            self::VALUE_WARNING,
            self::VALUE_STRONG_WARNING,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
