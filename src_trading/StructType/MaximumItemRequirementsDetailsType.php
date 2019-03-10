<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumItemRequirementsDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A means of limiting unpaying or low feedback bidders.
 * @subpackage Structs
 */
class MaximumItemRequirementsDetailsType extends AbstractStructBase
{
    /**
     * The MaximumItemCount
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of items allowed for this buyer.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $MaximumItemCount;
    /**
     * The MinimumFeedbackScore
     * Meta informations extracted from the WSDL
     * - documentation: The Minimum Feedback Score required for a buyer who wants to purchase this item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $MinimumFeedbackScore;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaximumItemRequirementsDetailsType
     * @uses MaximumItemRequirementsDetailsType::setMaximumItemCount()
     * @uses MaximumItemRequirementsDetailsType::setMinimumFeedbackScore()
     * @uses MaximumItemRequirementsDetailsType::setAny()
     * @param int[] $maximumItemCount
     * @param int[] $minimumFeedbackScore
     * @param \DOMDocument $any
     */
    public function __construct(array $maximumItemCount = array(), array $minimumFeedbackScore = array(), \DOMDocument $any = null)
    {
        $this
            ->setMaximumItemCount($maximumItemCount)
            ->setMinimumFeedbackScore($minimumFeedbackScore)
            ->setAny($any);
    }
    /**
     * Get MaximumItemCount value
     * @return int[]|null
     */
    public function getMaximumItemCount()
    {
        return $this->MaximumItemCount;
    }
    /**
     * Set MaximumItemCount value
     * @throws \InvalidArgumentException
     * @param int[] $maximumItemCount
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
     */
    public function setMaximumItemCount(array $maximumItemCount = array())
    {
        foreach ($maximumItemCount as $maximumItemRequirementsDetailsTypeMaximumItemCountItem) {
            // validation for constraint: itemType
            if (!is_numeric($maximumItemRequirementsDetailsTypeMaximumItemCountItem)) {
                throw new \InvalidArgumentException(sprintf('The MaximumItemCount property can only contain items of int, "%s" given', is_object($maximumItemRequirementsDetailsTypeMaximumItemCountItem) ? get_class($maximumItemRequirementsDetailsTypeMaximumItemCountItem) : gettype($maximumItemRequirementsDetailsTypeMaximumItemCountItem)), __LINE__);
            }
        }
        $this->MaximumItemCount = $maximumItemCount;
        return $this;
    }
    /**
     * Add item to MaximumItemCount value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
     */
    public function addToMaximumItemCount($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The MaximumItemCount property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MaximumItemCount[] = $item;
        return $this;
    }
    /**
     * Get MinimumFeedbackScore value
     * @return int[]|null
     */
    public function getMinimumFeedbackScore()
    {
        return $this->MinimumFeedbackScore;
    }
    /**
     * Set MinimumFeedbackScore value
     * @throws \InvalidArgumentException
     * @param int[] $minimumFeedbackScore
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
     */
    public function setMinimumFeedbackScore(array $minimumFeedbackScore = array())
    {
        foreach ($minimumFeedbackScore as $maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem) {
            // validation for constraint: itemType
            if (!is_numeric($maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem)) {
                throw new \InvalidArgumentException(sprintf('The MinimumFeedbackScore property can only contain items of int, "%s" given', is_object($maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem) ? get_class($maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem) : gettype($maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem)), __LINE__);
            }
        }
        $this->MinimumFeedbackScore = $minimumFeedbackScore;
        return $this;
    }
    /**
     * Add item to MinimumFeedbackScore value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
     */
    public function addToMinimumFeedbackScore($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The MinimumFeedbackScore property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MinimumFeedbackScore[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
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
