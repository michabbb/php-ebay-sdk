<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreLogoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Store logo.
 * @subpackage Structs
 */
class StoreLogoType extends AbstractStructBase
{
    /**
     * The LogoID
     * Meta informations extracted from the WSDL
     * - documentation: Store logo ID (use GetStoreOptions to get the list of valid logo IDs).
     * - minOccurs: 0
     * @var int
     */
    public $LogoID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Store logo name. Provides a user-friendly name for the logo.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: URL of the logo. Must have a .gif or .jpg extention. Specified when you are using a customized logo.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreLogoType
     * @uses StoreLogoType::setLogoID()
     * @uses StoreLogoType::setName()
     * @uses StoreLogoType::setURL()
     * @uses StoreLogoType::setAny()
     * @param int $logoID
     * @param string $name
     * @param string $uRL
     * @param \DOMDocument $any
     */
    public function __construct($logoID = null, $name = null, $uRL = null, \DOMDocument $any = null)
    {
        $this
            ->setLogoID($logoID)
            ->setName($name)
            ->setURL($uRL)
            ->setAny($any);
    }
    /**
     * Get LogoID value
     * @return int|null
     */
    public function getLogoID()
    {
        return $this->LogoID;
    }
    /**
     * Set LogoID value
     * @param int $logoID
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType
     */
    public function setLogoID($logoID = null)
    {
        // validation for constraint: int
        if (!is_null($logoID) && !is_numeric($logoID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($logoID)), __LINE__);
        }
        $this->LogoID = $logoID;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreLogoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType
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
