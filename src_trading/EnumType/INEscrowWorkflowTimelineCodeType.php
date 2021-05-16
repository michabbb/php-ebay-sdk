<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for INEscrowWorkflowTimelineCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note:</b> This enumerated type is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span>
 * @subpackage Enumerations
 */
class INEscrowWorkflowTimelineCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     * Meta information extracted from the WSDL
     * - documentation: Default Escrow timelines apply.
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'WorkflowA'
     * Meta information extracted from the WSDL
     * - documentation: Special Escrow timelines for Workflow A applies.
     * @return string 'WorkflowA'
     */
    const VALUE_WORKFLOW_A = 'WorkflowA';
    /**
     * Constant for value 'WorkflowB'
     * Meta information extracted from the WSDL
     * - documentation: Special Escrow timelines for Workflow B applies.
     * @return string 'WorkflowB'
     */
    const VALUE_WORKFLOW_B = 'WorkflowB';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: (out) Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_WORKFLOW_A
     * @uses self::VALUE_WORKFLOW_B
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEFAULT,
            self::VALUE_WORKFLOW_A,
            self::VALUE_WORKFLOW_B,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
