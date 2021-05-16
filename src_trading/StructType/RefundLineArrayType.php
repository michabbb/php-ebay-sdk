<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundLineArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundLineArrayType extends AbstractStructBase
{
    /**
     * The RefundLine
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundLineType[]
     */
    protected array $RefundLine = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RefundLineArrayType
     * @uses RefundLineArrayType::setRefundLine()
     * @uses RefundLineArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\RefundLineType[] $refundLine
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $refundLine = [], $any = null)
    {
        $this
            ->setRefundLine($refundLine)
            ->setAny($any);
    }
    /**
     * Get RefundLine value
     * @return \macropage\ebaysdk\trading\StructType\RefundLineType[]
     */
    public function getRefundLine(): array
    {
        return $this->RefundLine;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundLineForArrayConstraintsFromSetRefundLine(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundLineArrayTypeRefundLineItem) {
            // validation for constraint: itemType
            if (!$refundLineArrayTypeRefundLineItem instanceof \macropage\ebaysdk\trading\StructType\RefundLineType) {
                $invalidValues[] = is_object($refundLineArrayTypeRefundLineItem) ? get_class($refundLineArrayTypeRefundLineItem) : sprintf('%s(%s)', gettype($refundLineArrayTypeRefundLineItem), var_export($refundLineArrayTypeRefundLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundLine property can only contain items of type \macropage\ebaysdk\trading\StructType\RefundLineType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RefundLine value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundLineType[] $refundLine
     * @return \macropage\ebaysdk\trading\StructType\RefundLineArrayType
     */
    public function setRefundLine(array $refundLine = []): self
    {
        // validation for constraint: array
        if ('' !== ($refundLineArrayErrorMessage = self::validateRefundLineForArrayConstraintsFromSetRefundLine($refundLine))) {
            throw new InvalidArgumentException($refundLineArrayErrorMessage, __LINE__);
        }
        $this->RefundLine = $refundLine;
        
        return $this;
    }
    /**
     * Add item to RefundLine value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundLineType $item
     * @return \macropage\ebaysdk\trading\StructType\RefundLineArrayType
     */
    public function addToRefundLine(\macropage\ebaysdk\trading\StructType\RefundLineType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RefundLineType) {
            throw new InvalidArgumentException(sprintf('The RefundLine property can only contain items of type \macropage\ebaysdk\trading\StructType\RefundLineType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RefundLine[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RefundLineArrayType
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
