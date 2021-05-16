<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberOfPolicyViolationsDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated, as the maximum number of policy violations for a buyer is no longer a valid Buyer Requirement at the account or listing level.
 * @subpackage Structs
 */
class NumberOfPolicyViolationsDetailsType extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $Count = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for NumberOfPolicyViolationsDetailsType
     * @uses NumberOfPolicyViolationsDetailsType::setCount()
     * @uses NumberOfPolicyViolationsDetailsType::setAny()
     * @param int[] $count
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $count = [], $any = null)
    {
        $this
            ->setCount($count)
            ->setAny($any);
    }
    /**
     * Get Count value
     * @return int[]
     */
    public function getCount(): array
    {
        return $this->Count;
    }
    /**
     * This method is responsible for validating the values passed to the setCount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountForArrayConstraintsFromSetCount(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $numberOfPolicyViolationsDetailsTypeCountItem) {
            // validation for constraint: itemType
            if (!(is_int($numberOfPolicyViolationsDetailsTypeCountItem) || ctype_digit($numberOfPolicyViolationsDetailsTypeCountItem))) {
                $invalidValues[] = is_object($numberOfPolicyViolationsDetailsTypeCountItem) ? get_class($numberOfPolicyViolationsDetailsTypeCountItem) : sprintf('%s(%s)', gettype($numberOfPolicyViolationsDetailsTypeCountItem), var_export($numberOfPolicyViolationsDetailsTypeCountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Count property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Count value
     * @throws InvalidArgumentException
     * @param int[] $count
     * @return \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType
     */
    public function setCount(array $count = []): self
    {
        // validation for constraint: array
        if ('' !== ($countArrayErrorMessage = self::validateCountForArrayConstraintsFromSetCount($count))) {
            throw new InvalidArgumentException($countArrayErrorMessage, __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Add item to Count value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType
     */
    public function addToCount(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The Count property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Count[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\NumberOfPolicyViolationsDetailsType
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
