<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionHistogram StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for histogram fields.
 * @subpackage Structs
 */
class ConditionHistogram extends AbstractStructBase
{
    /**
     * The condition
     * Meta informations extracted from the WSDL
     * - documentation: The ID and name of a condition that was found in the item results.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \macropage\ebaysdk\finding\StructType\Condition
     */
    public $condition;
    /**
     * The count
     * Meta informations extracted from the WSDL
     * - documentation: The number of items found that match the condition. Only counts items where the seller specified the condition by using item.conditionId.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $count;
    /**
     * The delimiter
     * @var string
     */
    public $delimiter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ConditionHistogram
     * @uses ConditionHistogram::setCondition()
     * @uses ConditionHistogram::setCount()
     * @uses ConditionHistogram::setDelimiter()
     * @uses ConditionHistogram::setAny()
     * @param \macropage\ebaysdk\finding\StructType\Condition $condition
     * @param int $count
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\Condition $condition = null, $count = null, $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setCondition($condition)
            ->setCount($count)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get condition value
     * @return \macropage\ebaysdk\finding\StructType\Condition
     */
    public function getCondition()
    {
        return $this->condition;
    }
    /**
     * Set condition value
     * @param \macropage\ebaysdk\finding\StructType\Condition $condition
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogram
     */
    public function setCondition(\macropage\ebaysdk\finding\StructType\Condition $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }
    /**
     * Get count value
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogram
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->count = $count;
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogram
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\ConditionHistogram::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogram
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
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogram
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
