<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinimumFeedbackScoreDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>MinimumFeedbackScore</b> container that is returned in <b>GeteBayDetails</b>. The <b>MinimumFeedbackScore</b> container consists of the values that can be used as the threshold value for a buyer's Minimum
 * Feedback Score in Buyer Requirements. The Feedback Score for a potential buyer must be greater than or equal to the specified value, or that buyer is blocked from buying the item. <br/><br/> For the <b>MinimumFeedbackScore</b> container to appear in
 * the <b>GeteBayDetails</b> response, <b>BuyerRequirementDetails</b> must be one of the values passed into the <b>DetailName</b> field in the <b>GeteBayDetails</b> request (or, no <b>DetailName</b> filters should be used). <br><br> <span
 * class="tablenote"><b>Note:</b> Although the <b>MinimumFeedbackScore</b> container is still returned in <b>GeteBayDetails</b>, sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in
 * Add/Revise/Relist calls. </span>
 * @subpackage Structs
 */
class MinimumFeedbackScoreDetailsType extends AbstractStructBase
{
    /**
     * The FeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: Each value that is returned in this field can be used as an account-level Minimum Feedback Score. Sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
     * The Feedback Score for a potential buyer must be greater than or equal to the specified value in the seller's account settings, or that buyer is blocked from buying the item. <br/><br/> One or more <b>FeedbackScore</b> fields are always returned with
     * the <b>MinimumFeedbackScore</b> container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $FeedbackScore = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MinimumFeedbackScoreDetailsType
     * @uses MinimumFeedbackScoreDetailsType::setFeedbackScore()
     * @uses MinimumFeedbackScoreDetailsType::setAny()
     * @param int[] $feedbackScore
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $feedbackScore = [], $any = null)
    {
        $this
            ->setFeedbackScore($feedbackScore)
            ->setAny($any);
    }
    /**
     * Get FeedbackScore value
     * @return int[]
     */
    public function getFeedbackScore(): array
    {
        return $this->FeedbackScore;
    }
    /**
     * This method is responsible for validating the values passed to the setFeedbackScore method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedbackScore method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedbackScoreForArrayConstraintsFromSetFeedbackScore(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $minimumFeedbackScoreDetailsTypeFeedbackScoreItem) {
            // validation for constraint: itemType
            if (!(is_int($minimumFeedbackScoreDetailsTypeFeedbackScoreItem) || ctype_digit($minimumFeedbackScoreDetailsTypeFeedbackScoreItem))) {
                $invalidValues[] = is_object($minimumFeedbackScoreDetailsTypeFeedbackScoreItem) ? get_class($minimumFeedbackScoreDetailsTypeFeedbackScoreItem) : sprintf('%s(%s)', gettype($minimumFeedbackScoreDetailsTypeFeedbackScoreItem), var_export($minimumFeedbackScoreDetailsTypeFeedbackScoreItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeedbackScore property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeedbackScore value
     * @throws InvalidArgumentException
     * @param int[] $feedbackScore
     * @return \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType
     */
    public function setFeedbackScore(array $feedbackScore = []): self
    {
        // validation for constraint: array
        if ('' !== ($feedbackScoreArrayErrorMessage = self::validateFeedbackScoreForArrayConstraintsFromSetFeedbackScore($feedbackScore))) {
            throw new InvalidArgumentException($feedbackScoreArrayErrorMessage, __LINE__);
        }
        $this->FeedbackScore = $feedbackScore;
        
        return $this;
    }
    /**
     * Add item to FeedbackScore value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType
     */
    public function addToFeedbackScore(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The FeedbackScore property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FeedbackScore[] = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
