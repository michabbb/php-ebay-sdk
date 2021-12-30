<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for FeedbackDetailArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>FeedbackDetailArray</b> container that is returned in the <b>GetFeedback</b> call. The <b>FeedbackDetailArray</b> container consists of an array of one or more Feedback entries. The Feedback entries that
 * are returned will depend on the fields/values included in the call request.
 * @subpackage Arrays
 */
class FeedbackDetailArrayType extends AbstractStructArrayBase
{
    /**
     * The FeedbackDetail
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information for a Feedback entry on a specific order line item. For Feedback entries that were left for the buyer by the seller, some of the fields in this container will not be returned to users
     * who were not involved in the transaction as either the buyer or seller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeedbackDetailType[]
     */
    protected ?array $FeedbackDetail = null;
    /**
     * Constructor method for FeedbackDetailArrayType
     * @uses FeedbackDetailArrayType::setFeedbackDetail()
     * @param \macropage\ebaysdk\trading\StructType\FeedbackDetailType[] $feedbackDetail
     */
    public function __construct(?array $feedbackDetail = null)
    {
        $this
            ->setFeedbackDetail($feedbackDetail);
    }
    /**
     * Get FeedbackDetail value
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType[]
     */
    public function getFeedbackDetail(): ?array
    {
        return $this->FeedbackDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setFeedbackDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedbackDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedbackDetailForArrayConstraintsFromSetFeedbackDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedbackDetailArrayTypeFeedbackDetailItem) {
            // validation for constraint: itemType
            if (!$feedbackDetailArrayTypeFeedbackDetailItem instanceof \macropage\ebaysdk\trading\StructType\FeedbackDetailType) {
                $invalidValues[] = is_object($feedbackDetailArrayTypeFeedbackDetailItem) ? get_class($feedbackDetailArrayTypeFeedbackDetailItem) : sprintf('%s(%s)', gettype($feedbackDetailArrayTypeFeedbackDetailItem), var_export($feedbackDetailArrayTypeFeedbackDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeedbackDetail property can only contain items of type \macropage\ebaysdk\trading\StructType\FeedbackDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeedbackDetail value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeedbackDetailType[] $feedbackDetail
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType
     */
    public function setFeedbackDetail(?array $feedbackDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($feedbackDetailArrayErrorMessage = self::validateFeedbackDetailForArrayConstraintsFromSetFeedbackDetail($feedbackDetail))) {
            throw new InvalidArgumentException($feedbackDetailArrayErrorMessage, __LINE__);
        }
        $this->FeedbackDetail = $feedbackDetail;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\FeedbackDetailType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\FeedbackDetailType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\FeedbackDetailType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\FeedbackDetailType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\FeedbackDetailType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\FeedbackDetailType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeedbackDetailType $item
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackDetailArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\FeedbackDetailType) {
            throw new InvalidArgumentException(sprintf('The FeedbackDetail property can only contain items of type \macropage\ebaysdk\trading\StructType\FeedbackDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FeedbackDetail
     */
    public function getAttributeName(): string
    {
        return 'FeedbackDetail';
    }
}
