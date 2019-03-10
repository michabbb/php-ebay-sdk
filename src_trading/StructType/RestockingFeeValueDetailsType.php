<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestockingFeeValueDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
 * @subpackage Structs
 */
class RestockingFeeValueDetailsType extends AbstractStructBase
{
    /**
     * The RestockingFeeValueOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RestockingFeeValueOption;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RestockingFeeValueDetailsType
     * @uses RestockingFeeValueDetailsType::setRestockingFeeValueOption()
     * @uses RestockingFeeValueDetailsType::setDescription()
     * @uses RestockingFeeValueDetailsType::setAny()
     * @param string $restockingFeeValueOption
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($restockingFeeValueOption = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setRestockingFeeValueOption($restockingFeeValueOption)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get RestockingFeeValueOption value
     * @return string|null
     */
    public function getRestockingFeeValueOption()
    {
        return $this->RestockingFeeValueOption;
    }
    /**
     * Set RestockingFeeValueOption value
     * @param string $restockingFeeValueOption
     * @return \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType
     */
    public function setRestockingFeeValueOption($restockingFeeValueOption = null)
    {
        // validation for constraint: string
        if (!is_null($restockingFeeValueOption) && !is_string($restockingFeeValueOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restockingFeeValueOption)), __LINE__);
        }
        $this->RestockingFeeValueOption = $restockingFeeValueOption;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\RestockingFeeValueDetailsType
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
