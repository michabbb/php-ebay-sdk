<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundLineArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundLineArrayType extends AbstractStructBase
{
    /**
     * The RefundLine
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundLineType[]
     */
    public $RefundLine;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundLineArrayType
     * @uses RefundLineArrayType::setRefundLine()
     * @uses RefundLineArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\RefundLineType[] $refundLine
     * @param \DOMDocument $any
     */
    public function __construct(array $refundLine = array(), \DOMDocument $any = null)
    {
        $this
            ->setRefundLine($refundLine)
            ->setAny($any);
    }
    /**
     * Get RefundLine value
     * @return \macropage\ebaysdk\trading\StructType\RefundLineType[]|null
     */
    public function getRefundLine()
    {
        return $this->RefundLine;
    }
    /**
     * Set RefundLine value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundLineType[] $refundLine
     * @return \macropage\ebaysdk\trading\StructType\RefundLineArrayType
     */
    public function setRefundLine(array $refundLine = array())
    {
        foreach ($refundLine as $refundLineArrayTypeRefundLineItem) {
            // validation for constraint: itemType
            if (!$refundLineArrayTypeRefundLineItem instanceof \macropage\ebaysdk\trading\StructType\RefundLineType) {
                throw new \InvalidArgumentException(sprintf('The RefundLine property can only contain items of \macropage\ebaysdk\trading\StructType\RefundLineType, "%s" given', is_object($refundLineArrayTypeRefundLineItem) ? get_class($refundLineArrayTypeRefundLineItem) : gettype($refundLineArrayTypeRefundLineItem)), __LINE__);
            }
        }
        $this->RefundLine = $refundLine;
        return $this;
    }
    /**
     * Add item to RefundLine value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundLineType $item
     * @return \macropage\ebaysdk\trading\StructType\RefundLineArrayType
     */
    public function addToRefundLine(\macropage\ebaysdk\trading\StructType\RefundLineType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RefundLineType) {
            throw new \InvalidArgumentException(sprintf('The RefundLine property can only contain items of \macropage\ebaysdk\trading\StructType\RefundLineType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RefundLine[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RefundLineArrayType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RefundLineArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\RefundLineArrayType
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
