<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for FeedbackPeriodArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Container for a set of feedback statistics. Contains zero one or multiple FeedbackPeriod objects. Output only, for the summary feedback data returned by GetFeedback.
 * @subpackage Arrays
 */
class FeedbackPeriodArrayType extends AbstractStructArrayBase
{
    /**
     * The FeedbackPeriod
     * Meta informations extracted from the WSDL
     * - documentation: Contains one feedback statistic giving length of the period being reported (e.g. last 7 days prior to the call), and total number of feedback entries (of the type given by the container, e.g. positive feedback) submitted during the
     * indicated period. Returned if no detail level is specified.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeedbackPeriodType[]
     */
    public $FeedbackPeriod;
    /**
     * Constructor method for FeedbackPeriodArrayType
     * @uses FeedbackPeriodArrayType::setFeedbackPeriod()
     * @param \macropage\ebaysdk\trading\StructType\FeedbackPeriodType[] $feedbackPeriod
     */
    public function __construct(array $feedbackPeriod = array())
    {
        $this
            ->setFeedbackPeriod($feedbackPeriod);
    }
    /**
     * Get FeedbackPeriod value
     * @return \macropage\ebaysdk\trading\StructType\FeedbackPeriodType[]|null
     */
    public function getFeedbackPeriod()
    {
        return $this->FeedbackPeriod;
    }
    /**
     * Set FeedbackPeriod value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeedbackPeriodType[] $feedbackPeriod
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
     */
    public function setFeedbackPeriod(array $feedbackPeriod = array())
    {
        foreach ($feedbackPeriod as $feedbackPeriodArrayTypeFeedbackPeriodItem) {
            // validation for constraint: itemType
            if (!$feedbackPeriodArrayTypeFeedbackPeriodItem instanceof \macropage\ebaysdk\trading\StructType\FeedbackPeriodType) {
                throw new \InvalidArgumentException(sprintf('The FeedbackPeriod property can only contain items of \macropage\ebaysdk\trading\StructType\FeedbackPeriodType, "%s" given', is_object($feedbackPeriodArrayTypeFeedbackPeriodItem) ? get_class($feedbackPeriodArrayTypeFeedbackPeriodItem) : gettype($feedbackPeriodArrayTypeFeedbackPeriodItem)), __LINE__);
            }
        }
        $this->FeedbackPeriod = $feedbackPeriod;
        return $this;
    }
    /**
     * Add item to FeedbackPeriod value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeedbackPeriodType $item
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
     */
    public function addToFeedbackPeriod(\macropage\ebaysdk\trading\StructType\FeedbackPeriodType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\FeedbackPeriodType) {
            throw new \InvalidArgumentException(sprintf('The FeedbackPeriod property can only contain items of \macropage\ebaysdk\trading\StructType\FeedbackPeriodType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FeedbackPeriod[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\FeedbackPeriodType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\FeedbackPeriodType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\FeedbackPeriodType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\FeedbackPeriodType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\FeedbackPeriodType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FeedbackPeriod
     */
    public function getAttributeName()
    {
        return 'FeedbackPeriod';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackPeriodArrayType
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
