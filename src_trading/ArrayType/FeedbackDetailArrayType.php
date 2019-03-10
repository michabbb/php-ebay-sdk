<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for FeedbackDetailArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>FeedbackDetailArray</b> container that is returned in the <b>GetFeedback</b> call. The <b>FeedbackDetailArray</b> container consists of an array of one or more Feedback entries. The Feedback entries that
 * are returned will depend on the fields/values included in the call request.
 * @subpackage Arrays
 */
class FeedbackDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The FeedbackDetail
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of detailed information for a Feedback entry on a specific order line item. For Feedback entries that were left for the buyer by the seller, some of the fields in this container will not be returned to users
     * who were not involved in the transaction as either the buyer or seller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeedbackDetailType[]
     */
    public $FeedbackDetail;
    /**
     * Constructor method for FeedbackDetailArrayType
     * @uses FeedbackDetailArrayType::setFeedbackDetail()
     * @param \macropage\ebaysdk\trading\StructType\FeedbackDetailType[] $feedbackDetail
     */
    public function __construct(array $feedbackDetail = array())
    {
        $this
            ->setFeedbackDetail($feedbackDetail);
    }
    /**
     * Get FeedbackDetail value
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType[]|null
     */
    public function getFeedbackDetail()
    {
        return $this->FeedbackDetail;
    }
    /**
     * Set FeedbackDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeedbackDetailType[] $feedbackDetail
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType
     */
    public function setFeedbackDetail(array $feedbackDetail = array())
    {
        foreach ($feedbackDetail as $feedbackDetailArrayTypeFeedbackDetailItem) {
            // validation for constraint: itemType
            if (!$feedbackDetailArrayTypeFeedbackDetailItem instanceof \macropage\ebaysdk\trading\StructType\FeedbackDetailType) {
                throw new \InvalidArgumentException(sprintf('The FeedbackDetail property can only contain items of \macropage\ebaysdk\trading\StructType\FeedbackDetailType, "%s" given', is_object($feedbackDetailArrayTypeFeedbackDetailItem) ? get_class($feedbackDetailArrayTypeFeedbackDetailItem) : gettype($feedbackDetailArrayTypeFeedbackDetailItem)), __LINE__);
            }
        }
        $this->FeedbackDetail = $feedbackDetail;
        return $this;
    }
    /**
     * Add item to FeedbackDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeedbackDetailType $item
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType
     */
    public function addToFeedbackDetail(\macropage\ebaysdk\trading\StructType\FeedbackDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\FeedbackDetailType) {
            throw new \InvalidArgumentException(sprintf('The FeedbackDetail property can only contain items of \macropage\ebaysdk\trading\StructType\FeedbackDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FeedbackDetail[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FeedbackDetail
     */
    public function getAttributeName()
    {
        return 'FeedbackDetail';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType
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
