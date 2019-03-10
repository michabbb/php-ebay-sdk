<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eBayPaymentMismatchDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class EBayPaymentMismatchDetailsType extends AbstractStructBase
{
    /**
     * The MismatchType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MismatchType;
    /**
     * The ActionRequiredBy
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ActionRequiredBy;
    /**
     * The MismatchAmount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MismatchAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for eBayPaymentMismatchDetailsType
     * @uses EBayPaymentMismatchDetailsType::setMismatchType()
     * @uses EBayPaymentMismatchDetailsType::setActionRequiredBy()
     * @uses EBayPaymentMismatchDetailsType::setMismatchAmount()
     * @uses EBayPaymentMismatchDetailsType::setAny()
     * @param string $mismatchType
     * @param string $actionRequiredBy
     * @param \macropage\ebaysdk\trading\StructType\AmountType $mismatchAmount
     * @param \DOMDocument $any
     */
    public function __construct($mismatchType = null, $actionRequiredBy = null, \macropage\ebaysdk\trading\StructType\AmountType $mismatchAmount = null, \DOMDocument $any = null)
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
    public function getMismatchType()
    {
        return $this->MismatchType;
    }
    /**
     * Set MismatchType value
     * @uses \macropage\ebaysdk\trading\EnumType\MismatchTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MismatchTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mismatchType
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
     */
    public function setMismatchType($mismatchType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MismatchTypeCodeType::valueIsValid($mismatchType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mismatchType, implode(', ', \macropage\ebaysdk\trading\EnumType\MismatchTypeCodeType::getValidValues())), __LINE__);
        }
        $this->MismatchType = $mismatchType;
        return $this;
    }
    /**
     * Get ActionRequiredBy value
     * @return string|null
     */
    public function getActionRequiredBy()
    {
        return $this->ActionRequiredBy;
    }
    /**
     * Set ActionRequiredBy value
     * @param string $actionRequiredBy
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
     */
    public function setActionRequiredBy($actionRequiredBy = null)
    {
        // validation for constraint: string
        if (!is_null($actionRequiredBy) && !is_string($actionRequiredBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionRequiredBy)), __LINE__);
        }
        $this->ActionRequiredBy = $actionRequiredBy;
        return $this;
    }
    /**
     * Get MismatchAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMismatchAmount()
    {
        return $this->MismatchAmount;
    }
    /**
     * Set MismatchAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $mismatchAmount
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
     */
    public function setMismatchAmount(\macropage\ebaysdk\trading\StructType\AmountType $mismatchAmount = null)
    {
        $this->MismatchAmount = $mismatchAmount;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\EBayPaymentMismatchDetailsType
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
