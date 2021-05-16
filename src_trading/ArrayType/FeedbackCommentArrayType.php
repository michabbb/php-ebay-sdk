<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for FeedbackCommentArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Contains one or more stored comments for use as feedback to buyers.
 * @subpackage Arrays
 */
class FeedbackCommentArrayType extends AbstractStructArrayBase
{
    /**
     * The StoredCommentText
     * Meta information extracted from the WSDL
     * - documentation: This comment is for use as feedback for buyers. No more than ten (10) comments can be stored.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $StoredCommentText = [];
    /**
     * Constructor method for FeedbackCommentArrayType
     * @uses FeedbackCommentArrayType::setStoredCommentText()
     * @param string[] $storedCommentText
     */
    public function __construct(array $storedCommentText = [])
    {
        $this
            ->setStoredCommentText($storedCommentText);
    }
    /**
     * Get StoredCommentText value
     * @return string[]
     */
    public function getStoredCommentText(): array
    {
        return $this->StoredCommentText;
    }
    /**
     * This method is responsible for validating the values passed to the setStoredCommentText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStoredCommentText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStoredCommentTextForArrayConstraintsFromSetStoredCommentText(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedbackCommentArrayTypeStoredCommentTextItem) {
            // validation for constraint: itemType
            if (!is_string($feedbackCommentArrayTypeStoredCommentTextItem)) {
                $invalidValues[] = is_object($feedbackCommentArrayTypeStoredCommentTextItem) ? get_class($feedbackCommentArrayTypeStoredCommentTextItem) : sprintf('%s(%s)', gettype($feedbackCommentArrayTypeStoredCommentTextItem), var_export($feedbackCommentArrayTypeStoredCommentTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StoredCommentText property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set StoredCommentText value
     * @throws InvalidArgumentException
     * @param string[] $storedCommentText
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackCommentArrayType
     */
    public function setStoredCommentText(array $storedCommentText = []): self
    {
        // validation for constraint: array
        if ('' !== ($storedCommentTextArrayErrorMessage = self::validateStoredCommentTextForArrayConstraintsFromSetStoredCommentText($storedCommentText))) {
            throw new InvalidArgumentException($storedCommentTextArrayErrorMessage, __LINE__);
        }
        $this->StoredCommentText = $storedCommentText;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StoredCommentText
     */
    public function getAttributeName(): string
    {
        return 'StoredCommentText';
    }
}
