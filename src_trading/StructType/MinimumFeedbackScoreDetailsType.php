<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinimumFeedbackScoreDetailsType StructType
 * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - documentation: Each value that is returned in this field can be used as an account-level Minimum Feedback Score. Sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
     * The Feedback Score for a potential buyer must be greater than or equal to the specified value in the seller's account settings, or that buyer is blocked from buying the item. <br/><br/> One or more <b>FeedbackScore</b> fields are always returned with
     * the <b>MinimumFeedbackScore</b> container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $FeedbackScore;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MinimumFeedbackScoreDetailsType
     * @uses MinimumFeedbackScoreDetailsType::setFeedbackScore()
     * @uses MinimumFeedbackScoreDetailsType::setAny()
     * @param int[] $feedbackScore
     * @param \DOMDocument $any
     */
    public function __construct(array $feedbackScore = array(), \DOMDocument $any = null)
    {
        $this
            ->setFeedbackScore($feedbackScore)
            ->setAny($any);
    }
    /**
     * Get FeedbackScore value
     * @return int[]|null
     */
    public function getFeedbackScore()
    {
        return $this->FeedbackScore;
    }
    /**
     * Set FeedbackScore value
     * @throws \InvalidArgumentException
     * @param int[] $feedbackScore
     * @return \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType
     */
    public function setFeedbackScore(array $feedbackScore = array())
    {
        foreach ($feedbackScore as $minimumFeedbackScoreDetailsTypeFeedbackScoreItem) {
            // validation for constraint: itemType
            if (!is_numeric($minimumFeedbackScoreDetailsTypeFeedbackScoreItem)) {
                throw new \InvalidArgumentException(sprintf('The FeedbackScore property can only contain items of int, "%s" given', is_object($minimumFeedbackScoreDetailsTypeFeedbackScoreItem) ? get_class($minimumFeedbackScoreDetailsTypeFeedbackScoreItem) : gettype($minimumFeedbackScoreDetailsTypeFeedbackScoreItem)), __LINE__);
            }
        }
        $this->FeedbackScore = $feedbackScore;
        return $this;
    }
    /**
     * Add item to FeedbackScore value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType
     */
    public function addToFeedbackScore($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The FeedbackScore property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FeedbackScore[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType
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
