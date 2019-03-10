<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumBuyerPolicyViolationsDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The maximum number of policy violations and the durations that can be designated by sellers at this site. This is applicable only to sellers.
 * @subpackage Structs
 */
class MaximumBuyerPolicyViolationsDetailsType extends AbstractStructBase
{
    /**
     * The NumberOfPolicyViolations
     * Meta informations extracted from the WSDL
     * - documentation: The number of policy violation that can be used to limit buyers at the site. This is applicable only to sellers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType
     */
    public $NumberOfPolicyViolations;
    /**
     * The PolicyViolationDuration
     * Meta informations extracted from the WSDL
     * - documentation: The policy violation duration(s) supported by the site. This is applicable only to sellers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType[]
     */
    public $PolicyViolationDuration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaximumBuyerPolicyViolationsDetailsType
     * @uses MaximumBuyerPolicyViolationsDetailsType::setNumberOfPolicyViolations()
     * @uses MaximumBuyerPolicyViolationsDetailsType::setPolicyViolationDuration()
     * @uses MaximumBuyerPolicyViolationsDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations
     * @param \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType[] $policyViolationDuration
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations = null, array $policyViolationDuration = array(), \DOMDocument $any = null)
    {
        $this
            ->setNumberOfPolicyViolations($numberOfPolicyViolations)
            ->setPolicyViolationDuration($policyViolationDuration)
            ->setAny($any);
    }
    /**
     * Get NumberOfPolicyViolations value
     * @return \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType|null
     */
    public function getNumberOfPolicyViolations()
    {
        return $this->NumberOfPolicyViolations;
    }
    /**
     * Set NumberOfPolicyViolations value
     * @param \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public function setNumberOfPolicyViolations(\macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations = null)
    {
        $this->NumberOfPolicyViolations = $numberOfPolicyViolations;
        return $this;
    }
    /**
     * Get PolicyViolationDuration value
     * @return \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType[]|null
     */
    public function getPolicyViolationDuration()
    {
        return $this->PolicyViolationDuration;
    }
    /**
     * Set PolicyViolationDuration value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType[] $policyViolationDuration
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public function setPolicyViolationDuration(array $policyViolationDuration = array())
    {
        foreach ($policyViolationDuration as $maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem) {
            // validation for constraint: itemType
            if (!$maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem instanceof \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType) {
                throw new \InvalidArgumentException(sprintf('The PolicyViolationDuration property can only contain items of \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType, "%s" given', is_object($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem) ? get_class($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem) : gettype($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem)), __LINE__);
            }
        }
        $this->PolicyViolationDuration = $policyViolationDuration;
        return $this;
    }
    /**
     * Add item to PolicyViolationDuration value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public function addToPolicyViolationDuration(\macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The PolicyViolationDuration property can only contain items of \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PolicyViolationDuration[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
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
