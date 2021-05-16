<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SellingManagerAlertTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the types of alerts that may me returned in the <b>GetSellingManagerAlerts</b> response
 * @subpackage Enumerations
 */
class SellingManagerAlertTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Sold'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the alert is related to a sales transaction. See the corresponding <b>Alert.SoldAlert</b> value for more information on the alert.
     * @return string 'Sold'
     */
    const VALUE_SOLD = 'Sold';
    /**
     * Constant for value 'Inventory'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the alert is related to the seller's inventory. See the corresponding <b>Alert.InventoryAlert</b> value for more information on the alert.
     * @return string 'Inventory'
     */
    const VALUE_INVENTORY = 'Inventory';
    /**
     * Constant for value 'Automation'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the alert is related to an Selling Manager automation alert. See the corresponding <b>Alert.AutomationAlert</b> value for more information on the alert.
     * @return string 'Automation'
     */
    const VALUE_AUTOMATION = 'Automation';
    /**
     * Constant for value 'PaisaPay'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable, so should not get returned.
     * @return string 'PaisaPay'
     */
    const VALUE_PAISA_PAY = 'PaisaPay';
    /**
     * Constant for value 'General'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the alert is related to either one of the following: negative feedback received; a bad email template, or an unpaid item dispute requires attention. See the corresponding
     * <b>Alert.GeneralAlert</b> value for more information on the alert.
     * @return string 'General'
     */
    const VALUE_GENERAL = 'General';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SOLD
     * @uses self::VALUE_INVENTORY
     * @uses self::VALUE_AUTOMATION
     * @uses self::VALUE_PAISA_PAY
     * @uses self::VALUE_GENERAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SOLD,
            self::VALUE_INVENTORY,
            self::VALUE_AUTOMATION,
            self::VALUE_PAISA_PAY,
            self::VALUE_GENERAL,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
