<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionValuesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Fields in this type provide condition values and display names.
 * @subpackage Structs
 */
class ConditionValuesType extends AbstractStructBase
{
    /**
     * The Condition
     * Meta informations extracted from the WSDL
     * - documentation: Defines an item condition that a category supports.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ConditionType[]
     */
    public $Condition;
    /**
     * The ConditionHelpURL
     * Meta informations extracted from the WSDL
     * - documentation: URL to the eBay Web site's item condition help for the category. This may include policies about how to assess the condition of an item in the category. To reduce item-not-as-described disputes, we recommend that you refer sellers
     * (and buyers) to these help pages. These help pages may vary for some categories.<br> <br> The Sandbox might not return valid help URLs.
     * - minOccurs: 0
     * @var string
     */
    public $ConditionHelpURL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ConditionValuesType
     * @uses ConditionValuesType::setCondition()
     * @uses ConditionValuesType::setConditionHelpURL()
     * @uses ConditionValuesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ConditionType[] $condition
     * @param string $conditionHelpURL
     * @param \DOMDocument $any
     */
    public function __construct(array $condition = array(), $conditionHelpURL = null, \DOMDocument $any = null)
    {
        $this
            ->setCondition($condition)
            ->setConditionHelpURL($conditionHelpURL)
            ->setAny($any);
    }
    /**
     * Get Condition value
     * @return \macropage\ebaysdk\trading\StructType\ConditionType[]|null
     */
    public function getCondition()
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ConditionType[] $condition
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType
     */
    public function setCondition(array $condition = array())
    {
        foreach ($condition as $conditionValuesTypeConditionItem) {
            // validation for constraint: itemType
            if (!$conditionValuesTypeConditionItem instanceof \macropage\ebaysdk\trading\StructType\ConditionType) {
                throw new \InvalidArgumentException(sprintf('The Condition property can only contain items of \macropage\ebaysdk\trading\StructType\ConditionType, "%s" given', is_object($conditionValuesTypeConditionItem) ? get_class($conditionValuesTypeConditionItem) : gettype($conditionValuesTypeConditionItem)), __LINE__);
            }
        }
        $this->Condition = $condition;
        return $this;
    }
    /**
     * Add item to Condition value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ConditionType $item
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType
     */
    public function addToCondition(\macropage\ebaysdk\trading\StructType\ConditionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ConditionType) {
            throw new \InvalidArgumentException(sprintf('The Condition property can only contain items of \macropage\ebaysdk\trading\StructType\ConditionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Condition[] = $item;
        return $this;
    }
    /**
     * Get ConditionHelpURL value
     * @return string|null
     */
    public function getConditionHelpURL()
    {
        return $this->ConditionHelpURL;
    }
    /**
     * Set ConditionHelpURL value
     * @param string $conditionHelpURL
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType
     */
    public function setConditionHelpURL($conditionHelpURL = null)
    {
        // validation for constraint: string
        if (!is_null($conditionHelpURL) && !is_string($conditionHelpURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conditionHelpURL)), __LINE__);
        }
        $this->ConditionHelpURL = $conditionHelpURL;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ConditionValuesType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType
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
