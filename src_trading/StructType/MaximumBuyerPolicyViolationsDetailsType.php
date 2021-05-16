<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumBuyerPolicyViolationsDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Although the <b>MaximumBuyerPolicyViolations</b> container is still returned in <b>GeteBayDetails</b>, a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, so this type is no longer
 * applicable.
 * @subpackage Structs
 */
class MaximumBuyerPolicyViolationsDetailsType extends AbstractStructBase
{
    /**
     * The NumberOfPolicyViolations
     * Meta information extracted from the WSDL
     * - documentation: As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType $NumberOfPolicyViolations = null;
    /**
     * The PolicyViolationDuration
     * Meta information extracted from the WSDL
     * - documentation: As a Maximum Buyer Policy Violations threshold value can no longer be set at the account or listing level, this field is no longer applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType[]
     */
    protected array $PolicyViolationDuration = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MaximumBuyerPolicyViolationsDetailsType
     * @uses MaximumBuyerPolicyViolationsDetailsType::setNumberOfPolicyViolations()
     * @uses MaximumBuyerPolicyViolationsDetailsType::setPolicyViolationDuration()
     * @uses MaximumBuyerPolicyViolationsDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations
     * @param \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType[] $policyViolationDuration
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations = null, array $policyViolationDuration = [], $any = null)
    {
        $this
            ->setNumberOfPolicyViolations($numberOfPolicyViolations)
            ->setPolicyViolationDuration($policyViolationDuration)
            ->setAny($any);
    }
    /**
     * Get NumberOfPolicyViolations value
     * @return \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType|null
     */
    public function getNumberOfPolicyViolations(): ?\macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType
    {
        return $this->NumberOfPolicyViolations;
    }
    /**
     * Set NumberOfPolicyViolations value
     * @param \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public function setNumberOfPolicyViolations(?\macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType $numberOfPolicyViolations = null): self
    {
        $this->NumberOfPolicyViolations = $numberOfPolicyViolations;
        
        return $this;
    }
    /**
     * Get PolicyViolationDuration value
     * @return \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType[]
     */
    public function getPolicyViolationDuration(): array
    {
        return $this->PolicyViolationDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setPolicyViolationDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolicyViolationDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolicyViolationDurationForArrayConstraintsFromSetPolicyViolationDuration(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem) {
            // validation for constraint: itemType
            if (!$maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem instanceof \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType) {
                $invalidValues[] = is_object($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem) ? get_class($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem) : sprintf('%s(%s)', gettype($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem), var_export($maximumBuyerPolicyViolationsDetailsTypePolicyViolationDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PolicyViolationDuration property can only contain items of type \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PolicyViolationDuration value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType[] $policyViolationDuration
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public function setPolicyViolationDuration(array $policyViolationDuration = []): self
    {
        // validation for constraint: array
        if ('' !== ($policyViolationDurationArrayErrorMessage = self::validatePolicyViolationDurationForArrayConstraintsFromSetPolicyViolationDuration($policyViolationDuration))) {
            throw new InvalidArgumentException($policyViolationDurationArrayErrorMessage, __LINE__);
        }
        $this->PolicyViolationDuration = $policyViolationDuration;
        
        return $this;
    }
    /**
     * Add item to PolicyViolationDuration value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public function addToPolicyViolationDuration(\macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType) {
            throw new InvalidArgumentException(sprintf('The PolicyViolationDuration property can only contain items of type \macropage\ebaysdk\trading\StructType\PolicyViolationDurationDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PolicyViolationDuration[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
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
