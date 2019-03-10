<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the Feedback details for an order line item, including the eBay User ID of the user the feedback is intended for, the Feedback rating, and the Feedback comment.
 * @subpackage Structs
 */
class FeedbackInfoType extends AbstractStructBase
{
    /**
     * The CommentText
     * Meta informations extracted from the WSDL
     * - documentation: Textual comment that explains, clarifies, or justifies the Feedback rating specified in <b>CommentType</b>. This field is required in <b>CompleteSale</b> if the <b>FeedbackInfo</b> container is used. <br><br> This comment will still
     * be displayed even if submitted Feedback is withdrawn.
     * - minOccurs: 0
     * @var string
     */
    public $CommentText;
    /**
     * The CommentType
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the Feedback rating for the user specified in the <b>TargetUser</b> field. This field is required in <b>CompleteSale</b> if the <b>FeedbackInfo</b> container is used. <br><br> A Positive rating increases the
     * user's Feedback score, a Negative rating decreases the user's Feedback score, and a Neutral rating does not affect the user's Feedback score. eBay users also have the right to withdraw feedback for whatever reason. <br><br> Sellers cannot leave
     * Neutral or Negative ratings for buyers.
     * - minOccurs: 0
     * @var string
     */
    public $CommentType;
    /**
     * The TargetUser
     * Meta informations extracted from the WSDL
     * - documentation: This eBay User ID identifies the recipient user for whom the feedback is being left. This field is required in <b>CompleteSale</b> if the <b>FeedbackInfo</b> container is used. | This is a string wrapper for the eBay ID that uniquely
     * identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect
     * bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside
     * watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $TargetUser;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FeedbackInfoType
     * @uses FeedbackInfoType::setCommentText()
     * @uses FeedbackInfoType::setCommentType()
     * @uses FeedbackInfoType::setTargetUser()
     * @uses FeedbackInfoType::setAny()
     * @param string $commentText
     * @param string $commentType
     * @param string $targetUser
     * @param \DOMDocument $any
     */
    public function __construct($commentText = null, $commentType = null, $targetUser = null, \DOMDocument $any = null)
    {
        $this
            ->setCommentText($commentText)
            ->setCommentType($commentType)
            ->setTargetUser($targetUser)
            ->setAny($any);
    }
    /**
     * Get CommentText value
     * @return string|null
     */
    public function getCommentText()
    {
        return $this->CommentText;
    }
    /**
     * Set CommentText value
     * @param string $commentText
     * @return \macropage\ebaysdk\trading\StructType\FeedbackInfoType
     */
    public function setCommentText($commentText = null)
    {
        // validation for constraint: string
        if (!is_null($commentText) && !is_string($commentText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commentText)), __LINE__);
        }
        $this->CommentText = $commentText;
        return $this;
    }
    /**
     * Get CommentType value
     * @return string|null
     */
    public function getCommentType()
    {
        return $this->CommentType;
    }
    /**
     * Set CommentType value
     * @uses \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $commentType
     * @return \macropage\ebaysdk\trading\StructType\FeedbackInfoType
     */
    public function setCommentType($commentType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::valueIsValid($commentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $commentType, implode(', ', \macropage\ebaysdk\trading\EnumType\CommentTypeCodeType::getValidValues())), __LINE__);
        }
        $this->CommentType = $commentType;
        return $this;
    }
    /**
     * Get TargetUser value
     * @return string|null
     */
    public function getTargetUser()
    {
        return $this->TargetUser;
    }
    /**
     * Set TargetUser value
     * @param string $targetUser
     * @return \macropage\ebaysdk\trading\StructType\FeedbackInfoType
     */
    public function setTargetUser($targetUser = null)
    {
        // validation for constraint: string
        if (!is_null($targetUser) && !is_string($targetUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($targetUser)), __LINE__);
        }
        $this->TargetUser = $targetUser;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\FeedbackInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\FeedbackInfoType
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
