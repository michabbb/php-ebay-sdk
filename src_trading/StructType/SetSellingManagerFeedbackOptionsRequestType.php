<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSellingManagerFeedbackOptionsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables Selling Manager Pro subscribers to store standard feedback comments that can be left for their buyers. Selling Manager Pro subscribers can also specify what events, if any, will trigger an automated feedback response to
 * buyers.
 * @subpackage Structs
 */
class SetSellingManagerFeedbackOptionsRequestType extends AbstractRequestType
{
    /**
     * The AutomatedLeaveFeedbackEvent
     * Meta information extracted from the WSDL
     * - documentation: Specifies the event that will trigger automated feedback to the buyer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AutomatedLeaveFeedbackEvent = null;
    /**
     * The StoredComments
     * Meta information extracted from the WSDL
     * - documentation: Contains a set of comments from which one can be selected to leave feedback for a buyer. If automated feedback is used, a comment is selected from the set randomly. Stored comments cannot be replaced or edited individually.
     * Submitting a stored comments array replaces all existing stored comments. <br>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\FeedbackCommentArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\FeedbackCommentArrayType $StoredComments = null;
    /**
     * Constructor method for SetSellingManagerFeedbackOptionsRequestType
     * @uses SetSellingManagerFeedbackOptionsRequestType::setAutomatedLeaveFeedbackEvent()
     * @uses SetSellingManagerFeedbackOptionsRequestType::setStoredComments()
     * @param string $automatedLeaveFeedbackEvent
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackCommentArrayType $storedComments
     */
    public function __construct(?string $automatedLeaveFeedbackEvent = null, ?\macropage\ebaysdk\trading\ArrayType\FeedbackCommentArrayType $storedComments = null)
    {
        $this
            ->setAutomatedLeaveFeedbackEvent($automatedLeaveFeedbackEvent)
            ->setStoredComments($storedComments);
    }
    /**
     * Get AutomatedLeaveFeedbackEvent value
     * @return string|null
     */
    public function getAutomatedLeaveFeedbackEvent(): ?string
    {
        return $this->AutomatedLeaveFeedbackEvent;
    }
    /**
     * Set AutomatedLeaveFeedbackEvent value
     * @uses \macropage\ebaysdk\trading\EnumType\AutomatedLeaveFeedbackEventCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AutomatedLeaveFeedbackEventCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $automatedLeaveFeedbackEvent
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerFeedbackOptionsRequestType
     */
    public function setAutomatedLeaveFeedbackEvent(?string $automatedLeaveFeedbackEvent = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AutomatedLeaveFeedbackEventCodeType::valueIsValid($automatedLeaveFeedbackEvent)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AutomatedLeaveFeedbackEventCodeType', is_array($automatedLeaveFeedbackEvent) ? implode(', ', $automatedLeaveFeedbackEvent) : var_export($automatedLeaveFeedbackEvent, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AutomatedLeaveFeedbackEventCodeType::getValidValues())), __LINE__);
        }
        $this->AutomatedLeaveFeedbackEvent = $automatedLeaveFeedbackEvent;
        
        return $this;
    }
    /**
     * Get StoredComments value
     * @return \macropage\ebaysdk\trading\ArrayType\FeedbackCommentArrayType|null
     */
    public function getStoredComments(): ?\macropage\ebaysdk\trading\ArrayType\FeedbackCommentArrayType
    {
        return $this->StoredComments;
    }
    /**
     * Set StoredComments value
     * @param \macropage\ebaysdk\trading\ArrayType\FeedbackCommentArrayType $storedComments
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerFeedbackOptionsRequestType
     */
    public function setStoredComments(?\macropage\ebaysdk\trading\ArrayType\FeedbackCommentArrayType $storedComments = null): self
    {
        $this->StoredComments = $storedComments;
        
        return $this;
    }
}
