<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreColorType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Store color set.
 * @subpackage Structs
 */
class StoreColorType extends AbstractStructBase
{
    /**
     * The Primary
     * Meta informations extracted from the WSDL
     * - documentation: Primary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $Primary;
    /**
     * The Secondary
     * Meta informations extracted from the WSDL
     * - documentation: Secondary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $Secondary;
    /**
     * The Accent
     * Meta informations extracted from the WSDL
     * - documentation: Accent color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $Accent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreColorType
     * @uses StoreColorType::setPrimary()
     * @uses StoreColorType::setSecondary()
     * @uses StoreColorType::setAccent()
     * @uses StoreColorType::setAny()
     * @param string $primary
     * @param string $secondary
     * @param string $accent
     * @param \DOMDocument $any
     */
    public function __construct($primary = null, $secondary = null, $accent = null, \DOMDocument $any = null)
    {
        $this
            ->setPrimary($primary)
            ->setSecondary($secondary)
            ->setAccent($accent)
            ->setAny($any);
    }
    /**
     * Get Primary value
     * @return string|null
     */
    public function getPrimary()
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param string $primary
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType
     */
    public function setPrimary($primary = null)
    {
        // validation for constraint: string
        if (!is_null($primary) && !is_string($primary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primary)), __LINE__);
        }
        $this->Primary = $primary;
        return $this;
    }
    /**
     * Get Secondary value
     * @return string|null
     */
    public function getSecondary()
    {
        return $this->Secondary;
    }
    /**
     * Set Secondary value
     * @param string $secondary
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType
     */
    public function setSecondary($secondary = null)
    {
        // validation for constraint: string
        if (!is_null($secondary) && !is_string($secondary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondary)), __LINE__);
        }
        $this->Secondary = $secondary;
        return $this;
    }
    /**
     * Get Accent value
     * @return string|null
     */
    public function getAccent()
    {
        return $this->Accent;
    }
    /**
     * Set Accent value
     * @param string $accent
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType
     */
    public function setAccent($accent = null)
    {
        // validation for constraint: string
        if (!is_null($accent) && !is_string($accent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accent)), __LINE__);
        }
        $this->Accent = $accent;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreColorType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType
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
