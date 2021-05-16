<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumItemRequirementsDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>MaximumItemRequirements</b> container that is returned under the <b>BuyerRequirementDetails</b> in the <b>GeteBayDetails</b>. The Maximum Item Requirement settings of Buyer Requirements allow a seller to
 * restrict the quantity of a line item that may be purchased during a consecutive 10-day period.
 * @subpackage Structs
 */
class MaximumItemRequirementsDetailsType extends AbstractStructBase
{
    /**
     * The MaximumItemCount
     * Meta information extracted from the WSDL
     * - documentation: Values returned in this field indicate the maximum quantity of an order line item that one buyer can purchase during a consecutive 10-day period.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $MaximumItemCount = [];
    /**
     * The MinimumFeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: A Minimum Feedback Score threshold can be added to the Maximum Item Requirement rule if the seller only wishes to restrict possible buyers with low Feedback scores. The values returned in this field indicate the minimum Feedback
     * Score thresholds that can be used.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $MinimumFeedbackScore = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MaximumItemRequirementsDetailsType
     * @uses MaximumItemRequirementsDetailsType::setMaximumItemCount()
     * @uses MaximumItemRequirementsDetailsType::setMinimumFeedbackScore()
     * @uses MaximumItemRequirementsDetailsType::setAny()
     * @param int[] $maximumItemCount
     * @param int[] $minimumFeedbackScore
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $maximumItemCount = [], array $minimumFeedbackScore = [], $any = null)
    {
        $this
            ->setMaximumItemCount($maximumItemCount)
            ->setMinimumFeedbackScore($minimumFeedbackScore)
            ->setAny($any);
    }
    /**
     * Get MaximumItemCount value
     * @return int[]
     */
    public function getMaximumItemCount(): array
    {
        return $this->MaximumItemCount;
    }
    /**
     * This method is responsible for validating the values passed to the setMaximumItemCount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMaximumItemCount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMaximumItemCountForArrayConstraintsFromSetMaximumItemCount(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $maximumItemRequirementsDetailsTypeMaximumItemCountItem) {
            // validation for constraint: itemType
            if (!(is_int($maximumItemRequirementsDetailsTypeMaximumItemCountItem) || ctype_digit($maximumItemRequirementsDetailsTypeMaximumItemCountItem))) {
                $invalidValues[] = is_object($maximumItemRequirementsDetailsTypeMaximumItemCountItem) ? get_class($maximumItemRequirementsDetailsTypeMaximumItemCountItem) : sprintf('%s(%s)', gettype($maximumItemRequirementsDetailsTypeMaximumItemCountItem), var_export($maximumItemRequirementsDetailsTypeMaximumItemCountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MaximumItemCount property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MaximumItemCount value
     * @throws InvalidArgumentException
     * @param int[] $maximumItemCount
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
     */
    public function setMaximumItemCount(array $maximumItemCount = []): self
    {
        // validation for constraint: array
        if ('' !== ($maximumItemCountArrayErrorMessage = self::validateMaximumItemCountForArrayConstraintsFromSetMaximumItemCount($maximumItemCount))) {
            throw new InvalidArgumentException($maximumItemCountArrayErrorMessage, __LINE__);
        }
        $this->MaximumItemCount = $maximumItemCount;
        
        return $this;
    }
    /**
     * Add item to MaximumItemCount value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
     */
    public function addToMaximumItemCount(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The MaximumItemCount property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MaximumItemCount[] = $item;
        
        return $this;
    }
    /**
     * Get MinimumFeedbackScore value
     * @return int[]
     */
    public function getMinimumFeedbackScore(): array
    {
        return $this->MinimumFeedbackScore;
    }
    /**
     * This method is responsible for validating the values passed to the setMinimumFeedbackScore method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMinimumFeedbackScore method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMinimumFeedbackScoreForArrayConstraintsFromSetMinimumFeedbackScore(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem) {
            // validation for constraint: itemType
            if (!(is_int($maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem) || ctype_digit($maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem))) {
                $invalidValues[] = is_object($maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem) ? get_class($maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem) : sprintf('%s(%s)', gettype($maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem), var_export($maximumItemRequirementsDetailsTypeMinimumFeedbackScoreItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MinimumFeedbackScore property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MinimumFeedbackScore value
     * @throws InvalidArgumentException
     * @param int[] $minimumFeedbackScore
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
     */
    public function setMinimumFeedbackScore(array $minimumFeedbackScore = []): self
    {
        // validation for constraint: array
        if ('' !== ($minimumFeedbackScoreArrayErrorMessage = self::validateMinimumFeedbackScoreForArrayConstraintsFromSetMinimumFeedbackScore($minimumFeedbackScore))) {
            throw new InvalidArgumentException($minimumFeedbackScoreArrayErrorMessage, __LINE__);
        }
        $this->MinimumFeedbackScore = $minimumFeedbackScore;
        
        return $this;
    }
    /**
     * Add item to MinimumFeedbackScore value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
     */
    public function addToMinimumFeedbackScore(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The MinimumFeedbackScore property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MinimumFeedbackScore[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
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
