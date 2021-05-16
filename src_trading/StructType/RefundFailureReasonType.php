<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundFailureReasonType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundFailureReasonType extends AbstractStructBase
{
    /**
     * The RefundFailureCode
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundFailureCode = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RefundFailureReasonType
     * @uses RefundFailureReasonType::setRefundFailureCode()
     * @uses RefundFailureReasonType::setAny()
     * @param string $refundFailureCode
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $refundFailureCode = null, $any = null)
    {
        $this
            ->setRefundFailureCode($refundFailureCode)
            ->setAny($any);
    }
    /**
     * Get RefundFailureCode value
     * @return string|null
     */
    public function getRefundFailureCode(): ?string
    {
        return $this->RefundFailureCode;
    }
    /**
     * Set RefundFailureCode value
     * @uses \macropage\ebaysdk\trading\EnumType\RefundFailureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RefundFailureCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $refundFailureCode
     * @return \macropage\ebaysdk\trading\StructType\RefundFailureReasonType
     */
    public function setRefundFailureCode(?string $refundFailureCode = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RefundFailureCodeType::valueIsValid($refundFailureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RefundFailureCodeType', is_array($refundFailureCode) ? implode(', ', $refundFailureCode) : var_export($refundFailureCode, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RefundFailureCodeType::getValidValues())), __LINE__);
        }
        $this->RefundFailureCode = $refundFailureCode;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RefundFailureReasonType
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
