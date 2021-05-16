<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eBayPaymentMismatchDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class EBayPaymentMismatchDetailsType extends AbstractStructBase
{
    /**
     * The MismatchType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MismatchType = null;
    /**
     * The ActionRequiredBy
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ActionRequiredBy = null;
    /**
     * The MismatchAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MismatchAmount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for eBayPaymentMismatchDetailsType
     * @uses EBayPaymentMismatchDetailsType::setMismatchType()
     * @uses EBayPaymentMismatchDetailsType::setActionRequiredBy()
     * @uses EBayPaymentMismatchDetailsType::setMismatchAmount()
     * @uses EBayPaymentMismatchDetailsType::setAny()
     * @param string $mismatchType
     * @param string $actionRequiredBy
     * @param \macropage\ebaysdk\trading\StructType\AmountType $mismatchAmount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $mismatchType = null, ?string $actionRequiredBy = null, ?\macropage\ebaysdk\trading\StructType\AmountType $mismatchAmount = null, $any = null)
    {
        $this
            ->setMismatchType($mismatchType)
            ->setActionRequiredBy($actionRequiredBy)
            ->setMismatchAmount($mismatchAmount)
            ->setAny($any);
    }
    /**
     * Get MismatchType value
     * @return string|null
     */
    public function getMismatchType(): ?string
    {
        return $this->MismatchType;
    }
    /**
     * Set MismatchType value
     * @uses \macropage\ebaysdk\trading\EnumType\MismatchTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MismatchTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mismatchType
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
     */
    public function setMismatchType(?string $mismatchType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MismatchTypeCodeType::valueIsValid($mismatchType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MismatchTypeCodeType', is_array($mismatchType) ? implode(', ', $mismatchType) : var_export($mismatchType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MismatchTypeCodeType::getValidValues())), __LINE__);
        }
        $this->MismatchType = $mismatchType;
        
        return $this;
    }
    /**
     * Get ActionRequiredBy value
     * @return string|null
     */
    public function getActionRequiredBy(): ?string
    {
        return $this->ActionRequiredBy;
    }
    /**
     * Set ActionRequiredBy value
     * @param string $actionRequiredBy
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
     */
    public function setActionRequiredBy(?string $actionRequiredBy = null): self
    {
        // validation for constraint: string
        if (!is_null($actionRequiredBy) && !is_string($actionRequiredBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionRequiredBy, true), gettype($actionRequiredBy)), __LINE__);
        }
        $this->ActionRequiredBy = $actionRequiredBy;
        
        return $this;
    }
    /**
     * Get MismatchAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMismatchAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MismatchAmount;
    }
    /**
     * Set MismatchAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $mismatchAmount
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
     */
    public function setMismatchAmount(?\macropage\ebaysdk\trading\StructType\AmountType $mismatchAmount = null): self
    {
        $this->MismatchAmount = $mismatchAmount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
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
