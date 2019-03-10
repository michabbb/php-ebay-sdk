<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifiedUserRequirementsDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Verified User Buyer Requirement has been deprecated, so this type is no longer applicable.
 * @subpackage Structs
 */
class VerifiedUserRequirementsDetailsType extends AbstractStructBase
{
    /**
     * The VerifiedUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $VerifiedUser;
    /**
     * The FeedbackScore
     * Meta informations extracted from the WSDL
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
     * Constructor method for VerifiedUserRequirementsDetailsType
     * @uses VerifiedUserRequirementsDetailsType::setVerifiedUser()
     * @uses VerifiedUserRequirementsDetailsType::setFeedbackScore()
     * @uses VerifiedUserRequirementsDetailsType::setAny()
     * @param bool $verifiedUser
     * @param int[] $feedbackScore
     * @param \DOMDocument $any
     */
    public function __construct($verifiedUser = null, array $feedbackScore = array(), \DOMDocument $any = null)
    {
        $this
            ->setVerifiedUser($verifiedUser)
            ->setFeedbackScore($feedbackScore)
            ->setAny($any);
    }
    /**
     * Get VerifiedUser value
     * @return bool|null
     */
    public function getVerifiedUser()
    {
        return $this->VerifiedUser;
    }
    /**
     * Set VerifiedUser value
     * @param bool $verifiedUser
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
     */
    public function setVerifiedUser($verifiedUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($verifiedUser) && !is_bool($verifiedUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($verifiedUser)), __LINE__);
        }
        $this->VerifiedUser = $verifiedUser;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
     */
    public function setFeedbackScore(array $feedbackScore = array())
    {
        foreach ($feedbackScore as $verifiedUserRequirementsDetailsTypeFeedbackScoreItem) {
            // validation for constraint: itemType
            if (!is_numeric($verifiedUserRequirementsDetailsTypeFeedbackScoreItem)) {
                throw new \InvalidArgumentException(sprintf('The FeedbackScore property can only contain items of int, "%s" given', is_object($verifiedUserRequirementsDetailsTypeFeedbackScoreItem) ? get_class($verifiedUserRequirementsDetailsTypeFeedbackScoreItem) : gettype($verifiedUserRequirementsDetailsTypeFeedbackScoreItem)), __LINE__);
            }
        }
        $this->FeedbackScore = $feedbackScore;
        return $this;
    }
    /**
     * Add item to FeedbackScore value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
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
     * @uses \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
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
