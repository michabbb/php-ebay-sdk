<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnpaidItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <strong>UnpaidItem</strong> container, which consists of details related to the type and status of an Unpaid Item case.
 * @subpackage Structs
 */
class UnpaidItemType extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the status of the Unpaid Item case. This field is always returned with the <strong>UnpaidItem</strong> container.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates if the Unpaid Item case was opened manually by the customer or opened automatically by eBay's Unpaid Item Assistant feature. This field is always returned with the <strong>UnpaidItem</strong> container.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UnpaidItemType
     * @uses UnpaidItemType::setStatus()
     * @uses UnpaidItemType::setType()
     * @uses UnpaidItemType::setAny()
     * @param string $status
     * @param string $type
     * @param \DOMDocument $any
     */
    public function __construct($status = null, $type = null, \DOMDocument $any = null)
    {
        $this
            ->setStatus($status)
            ->setType($type)
            ->setAny($any);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseStatusTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseStatusTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UnpaidItemCaseStatusTypeCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseOpenTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseOpenTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UnpaidItemCaseOpenTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseOpenTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\UnpaidItemType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemType
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
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemType
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
