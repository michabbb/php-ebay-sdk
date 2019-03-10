<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetApiAccessRulesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Responds to a call to GetApiAccessRules.
 * @subpackage Structs
 */
class GetApiAccessRulesResponseType extends AbstractResponseType
{
    /**
     * The ApiAccessRule
     * Meta informations extracted from the WSDL
     * - documentation: Each returned <b>ApiAccessRule</b> container includes the application's current daily, hourly, and periodic usage of a call, and the maximum amount of times that the application can make that call during the given period.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ApiAccessRuleType[]
     */
    public $ApiAccessRule;
    /**
     * Constructor method for GetApiAccessRulesResponseType
     * @uses GetApiAccessRulesResponseType::setApiAccessRule()
     * @param \macropage\ebaysdk\trading\StructType\ApiAccessRuleType[] $apiAccessRule
     */
    public function __construct(array $apiAccessRule = array())
    {
        $this
            ->setApiAccessRule($apiAccessRule);
    }
    /**
     * Get ApiAccessRule value
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType[]|null
     */
    public function getApiAccessRule()
    {
        return $this->ApiAccessRule;
    }
    /**
     * Set ApiAccessRule value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ApiAccessRuleType[] $apiAccessRule
     * @return \macropage\ebaysdk\trading\StructType\GetApiAccessRulesResponseType
     */
    public function setApiAccessRule(array $apiAccessRule = array())
    {
        foreach ($apiAccessRule as $getApiAccessRulesResponseTypeApiAccessRuleItem) {
            // validation for constraint: itemType
            if (!$getApiAccessRulesResponseTypeApiAccessRuleItem instanceof \macropage\ebaysdk\trading\StructType\ApiAccessRuleType) {
                throw new \InvalidArgumentException(sprintf('The ApiAccessRule property can only contain items of \macropage\ebaysdk\trading\StructType\ApiAccessRuleType, "%s" given', is_object($getApiAccessRulesResponseTypeApiAccessRuleItem) ? get_class($getApiAccessRulesResponseTypeApiAccessRuleItem) : gettype($getApiAccessRulesResponseTypeApiAccessRuleItem)), __LINE__);
            }
        }
        $this->ApiAccessRule = $apiAccessRule;
        return $this;
    }
    /**
     * Add item to ApiAccessRule value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ApiAccessRuleType $item
     * @return \macropage\ebaysdk\trading\StructType\GetApiAccessRulesResponseType
     */
    public function addToApiAccessRule(\macropage\ebaysdk\trading\StructType\ApiAccessRuleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ApiAccessRuleType) {
            throw new \InvalidArgumentException(sprintf('The ApiAccessRule property can only contain items of \macropage\ebaysdk\trading\StructType\ApiAccessRuleType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ApiAccessRule[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetApiAccessRulesResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
