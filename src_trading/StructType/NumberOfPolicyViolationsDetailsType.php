<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberOfPolicyViolationsDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as the maximum number of policy violations for a buyer is no longer a valid Buyer Requirement at the account or listing level.
 * @subpackage Structs
 */
class NumberOfPolicyViolationsDetailsType extends AbstractStructBase
{
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $Count;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NumberOfPolicyViolationsDetailsType
     * @uses NumberOfPolicyViolationsDetailsType::setCount()
     * @uses NumberOfPolicyViolationsDetailsType::setAny()
     * @param int[] $count
     * @param \DOMDocument $any
     */
    public function __construct(array $count = array(), \DOMDocument $any = null)
    {
        $this
            ->setCount($count)
            ->setAny($any);
    }
    /**
     * Get Count value
     * @return int[]|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @throws \InvalidArgumentException
     * @param int[] $count
     * @return \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType
     */
    public function setCount(array $count = array())
    {
        foreach ($count as $numberOfPolicyViolationsDetailsTypeCountItem) {
            // validation for constraint: itemType
            if (!is_numeric($numberOfPolicyViolationsDetailsTypeCountItem)) {
                throw new \InvalidArgumentException(sprintf('The Count property can only contain items of int, "%s" given', is_object($numberOfPolicyViolationsDetailsTypeCountItem) ? get_class($numberOfPolicyViolationsDetailsTypeCountItem) : gettype($numberOfPolicyViolationsDetailsTypeCountItem)), __LINE__);
            }
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Add item to Count value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType
     */
    public function addToCount($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The Count property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Count[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType
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
