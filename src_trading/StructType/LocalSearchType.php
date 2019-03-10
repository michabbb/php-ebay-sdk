<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocalSearchType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class LocalSearchType extends AbstractStructBase
{
    /**
     * The MaxDistance
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $MaxDistance;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string
     */
    public $PostalCode;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for LocalSearchType
     * @uses LocalSearchType::setMaxDistance()
     * @uses LocalSearchType::setPostalCode()
     * @uses LocalSearchType::setAny()
     * @param int $maxDistance
     * @param string $postalCode
     * @param \DOMDocument $any
     */
    public function __construct($maxDistance = null, $postalCode = null, \DOMDocument $any = null)
    {
        $this
            ->setMaxDistance($maxDistance)
            ->setPostalCode($postalCode)
            ->setAny($any);
    }
    /**
     * Get MaxDistance value
     * @return int|null
     */
    public function getMaxDistance()
    {
        return $this->MaxDistance;
    }
    /**
     * Set MaxDistance value
     * @param int $maxDistance
     * @return \macropage\ebaysdk\trading\StructType\LocalSearchType
     */
    public function setMaxDistance($maxDistance = null)
    {
        // validation for constraint: int
        if (!is_null($maxDistance) && !is_numeric($maxDistance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxDistance)), __LINE__);
        }
        $this->MaxDistance = $maxDistance;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \macropage\ebaysdk\trading\StructType\LocalSearchType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\LocalSearchType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\LocalSearchType
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
     * @return \macropage\ebaysdk\trading\StructType\LocalSearchType
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
