<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundFundingSourceArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundFundingSourceArrayType extends AbstractStructBase
{
    /**
     * The RefundFundingSource
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundFundingSourceType[]
     */
    protected array $RefundFundingSource = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RefundFundingSourceArrayType
     * @uses RefundFundingSourceArrayType::setRefundFundingSource()
     * @uses RefundFundingSourceArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\RefundFundingSourceType[] $refundFundingSource
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $refundFundingSource = [], $any = null)
    {
        $this
            ->setRefundFundingSource($refundFundingSource)
            ->setAny($any);
    }
    /**
     * Get RefundFundingSource value
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType[]
     */
    public function getRefundFundingSource(): array
    {
        return $this->RefundFundingSource;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundFundingSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundFundingSource method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundFundingSourceForArrayConstraintsFromSetRefundFundingSource(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundFundingSourceArrayTypeRefundFundingSourceItem) {
            // validation for constraint: itemType
            if (!$refundFundingSourceArrayTypeRefundFundingSourceItem instanceof \macropage\ebaysdk\trading\StructType\RefundFundingSourceType) {
                $invalidValues[] = is_object($refundFundingSourceArrayTypeRefundFundingSourceItem) ? get_class($refundFundingSourceArrayTypeRefundFundingSourceItem) : sprintf('%s(%s)', gettype($refundFundingSourceArrayTypeRefundFundingSourceItem), var_export($refundFundingSourceArrayTypeRefundFundingSourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundFundingSource property can only contain items of type \macropage\ebaysdk\trading\StructType\RefundFundingSourceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RefundFundingSource value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundFundingSourceType[] $refundFundingSource
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType
     */
    public function setRefundFundingSource(array $refundFundingSource = []): self
    {
        // validation for constraint: array
        if ('' !== ($refundFundingSourceArrayErrorMessage = self::validateRefundFundingSourceForArrayConstraintsFromSetRefundFundingSource($refundFundingSource))) {
            throw new InvalidArgumentException($refundFundingSourceArrayErrorMessage, __LINE__);
        }
        $this->RefundFundingSource = $refundFundingSource;
        
        return $this;
    }
    /**
     * Add item to RefundFundingSource value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundFundingSourceType $item
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType
     */
    public function addToRefundFundingSource(\macropage\ebaysdk\trading\StructType\RefundFundingSourceType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RefundFundingSourceType) {
            throw new InvalidArgumentException(sprintf('The RefundFundingSource property can only contain items of type \macropage\ebaysdk\trading\StructType\RefundFundingSourceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RefundFundingSource[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType
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
