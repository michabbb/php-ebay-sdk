<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifiedUserRequirementsDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Verified User Buyer Requirement has been deprecated, so this type is no longer applicable.
 * @subpackage Structs
 */
class VerifiedUserRequirementsDetailsType extends AbstractStructBase
{
    /**
     * The VerifiedUser
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $VerifiedUser = null;
    /**
     * The FeedbackScore
     * Meta information extracted from the WSDL
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
     * Constructor method for VerifiedUserRequirementsDetailsType
     * @uses VerifiedUserRequirementsDetailsType::setVerifiedUser()
     * @uses VerifiedUserRequirementsDetailsType::setFeedbackScore()
     * @uses VerifiedUserRequirementsDetailsType::setAny()
     * @param bool $verifiedUser
     * @param int[] $feedbackScore
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $verifiedUser = null, array $feedbackScore = [], $any = null)
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
    public function getVerifiedUser(): ?bool
    {
        return $this->VerifiedUser;
    }
    /**
     * Set VerifiedUser value
     * @param bool $verifiedUser
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
     */
    public function setVerifiedUser(?bool $verifiedUser = null): self
    {
        // validation for constraint: boolean
        if (!is_null($verifiedUser) && !is_bool($verifiedUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($verifiedUser, true), gettype($verifiedUser)), __LINE__);
        }
        $this->VerifiedUser = $verifiedUser;
        
        return $this;
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
        foreach ($values as $verifiedUserRequirementsDetailsTypeFeedbackScoreItem) {
            // validation for constraint: itemType
            if (!(is_int($verifiedUserRequirementsDetailsTypeFeedbackScoreItem) || ctype_digit($verifiedUserRequirementsDetailsTypeFeedbackScoreItem))) {
                $invalidValues[] = is_object($verifiedUserRequirementsDetailsTypeFeedbackScoreItem) ? get_class($verifiedUserRequirementsDetailsTypeFeedbackScoreItem) : sprintf('%s(%s)', gettype($verifiedUserRequirementsDetailsTypeFeedbackScoreItem), var_export($verifiedUserRequirementsDetailsTypeFeedbackScoreItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
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
