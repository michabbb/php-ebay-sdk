<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for INEscrowWorkflowTimelineCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Used to indicate whether Default, WorkFlow A or WorkFlow B is applicable for a category.
 * @subpackage Enumerations
 */
class INEscrowWorkflowTimelineCodeType
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'WorkflowA'
     * @return string 'WorkflowA'
     */
    const VALUE_WORKFLOW_A = 'WorkflowA';
    /**
     * Constant for value 'WorkflowB'
     * @return string 'WorkflowB'
     */
    const VALUE_WORKFLOW_B = 'WorkflowB';
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
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_WORKFLOW_A
     * @uses self::VALUE_WORKFLOW_B
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_WORKFLOW_A,
            self::VALUE_WORKFLOW_B,
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
