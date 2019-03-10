<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundFundingSourceArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundFundingSourceArrayType extends AbstractStructBase
{
    /**
     * The RefundFundingSource
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundFundingSourceType[]
     */
    public $RefundFundingSource;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundFundingSourceArrayType
     * @uses RefundFundingSourceArrayType::setRefundFundingSource()
     * @uses RefundFundingSourceArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\RefundFundingSourceType[] $refundFundingSource
     * @param \DOMDocument $any
     */
    public function __construct(array $refundFundingSource = array(), \DOMDocument $any = null)
    {
        $this
            ->setRefundFundingSource($refundFundingSource)
            ->setAny($any);
    }
    /**
     * Get RefundFundingSource value
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceType[]|null
     */
    public function getRefundFundingSource()
    {
        return $this->RefundFundingSource;
    }
    /**
     * Set RefundFundingSource value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundFundingSourceType[] $refundFundingSource
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType
     */
    public function setRefundFundingSource(array $refundFundingSource = array())
    {
        foreach ($refundFundingSource as $refundFundingSourceArrayTypeRefundFundingSourceItem) {
            // validation for constraint: itemType
            if (!$refundFundingSourceArrayTypeRefundFundingSourceItem instanceof \macropage\ebaysdk\trading\StructType\RefundFundingSourceType) {
                throw new \InvalidArgumentException(sprintf('The RefundFundingSource property can only contain items of \macropage\ebaysdk\trading\StructType\RefundFundingSourceType, "%s" given', is_object($refundFundingSourceArrayTypeRefundFundingSourceItem) ? get_class($refundFundingSourceArrayTypeRefundFundingSourceItem) : gettype($refundFundingSourceArrayTypeRefundFundingSourceItem)), __LINE__);
            }
        }
        $this->RefundFundingSource = $refundFundingSource;
        return $this;
    }
    /**
     * Add item to RefundFundingSource value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundFundingSourceType $item
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType
     */
    public function addToRefundFundingSource(\macropage\ebaysdk\trading\StructType\RefundFundingSourceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RefundFundingSourceType) {
            throw new \InvalidArgumentException(sprintf('The RefundFundingSource property can only contain items of \macropage\ebaysdk\trading\StructType\RefundFundingSourceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RefundFundingSource[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\RefundFundingSourceArrayType
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
