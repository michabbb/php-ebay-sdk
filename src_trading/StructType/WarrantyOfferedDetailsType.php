<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WarrantyOfferedDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as product warranties are no longer applicable or supported in eBay APIs.
 * @subpackage Structs
 */
class WarrantyOfferedDetailsType extends AbstractStructBase
{
    /**
     * The WarrantyOfferedOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyOfferedOption;
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
     * Constructor method for WarrantyOfferedDetailsType
     * @uses WarrantyOfferedDetailsType::setWarrantyOfferedOption()
     * @uses WarrantyOfferedDetailsType::setDescription()
     * @uses WarrantyOfferedDetailsType::setAny()
     * @param string $warrantyOfferedOption
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($warrantyOfferedOption = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setWarrantyOfferedOption($warrantyOfferedOption)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get WarrantyOfferedOption value
     * @return string|null
     */
    public function getWarrantyOfferedOption()
    {
        return $this->WarrantyOfferedOption;
    }
    /**
     * Set WarrantyOfferedOption value
     * @param string $warrantyOfferedOption
     * @return \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType
     */
    public function setWarrantyOfferedOption($warrantyOfferedOption = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyOfferedOption) && !is_string($warrantyOfferedOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warrantyOfferedOption)), __LINE__);
        }
        $this->WarrantyOfferedOption = $warrantyOfferedOption;
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
     * @return \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType
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
     * @uses \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\WarrantyOfferedDetailsType
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
