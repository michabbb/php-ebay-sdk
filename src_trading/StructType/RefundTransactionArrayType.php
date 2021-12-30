<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundTransactionArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundTransactionArrayType extends AbstractStructBase
{
    /**
     * The RefundTransaction
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundTransactionType[]
     */
    protected ?array $RefundTransaction = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RefundTransactionArrayType
     * @uses RefundTransactionArrayType::setRefundTransaction()
     * @uses RefundTransactionArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\RefundTransactionType[] $refundTransaction
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $refundTransaction = null, $any = null)
    {
        $this
            ->setRefundTransaction($refundTransaction)
            ->setAny($any);
    }
    /**
     * Get RefundTransaction value
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionType[]
     */
    public function getRefundTransaction(): ?array
    {
        return $this->RefundTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundTransactionForArrayConstraintsFromSetRefundTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundTransactionArrayTypeRefundTransactionItem) {
            // validation for constraint: itemType
            if (!$refundTransactionArrayTypeRefundTransactionItem instanceof \macropage\ebaysdk\trading\StructType\RefundTransactionType) {
                $invalidValues[] = is_object($refundTransactionArrayTypeRefundTransactionItem) ? get_class($refundTransactionArrayTypeRefundTransactionItem) : sprintf('%s(%s)', gettype($refundTransactionArrayTypeRefundTransactionItem), var_export($refundTransactionArrayTypeRefundTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundTransaction property can only contain items of type \macropage\ebaysdk\trading\StructType\RefundTransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RefundTransaction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundTransactionType[] $refundTransaction
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType
     */
    public function setRefundTransaction(?array $refundTransaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($refundTransactionArrayErrorMessage = self::validateRefundTransactionForArrayConstraintsFromSetRefundTransaction($refundTransaction))) {
            throw new InvalidArgumentException($refundTransactionArrayErrorMessage, __LINE__);
        }
        $this->RefundTransaction = $refundTransaction;
        
        return $this;
    }
    /**
     * Add item to RefundTransaction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundTransactionType $item
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType
     */
    public function addToRefundTransaction(\macropage\ebaysdk\trading\StructType\RefundTransactionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RefundTransactionType) {
            throw new InvalidArgumentException(sprintf('The RefundTransaction property can only contain items of type \macropage\ebaysdk\trading\StructType\RefundTransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RefundTransaction[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionArrayType
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
