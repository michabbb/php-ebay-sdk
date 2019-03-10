<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReturnPreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SellerReturnPreferences</b> container, which consists of the <b>OptedIn</b> flag that indicates whether or not the seller has opted in to eBay Managed Returns.
 * @subpackage Structs
 */
class SellerReturnPreferencesType extends AbstractStructBase
{
    /**
     * The OptedIn
     * Meta informations extracted from the WSDL
     * - documentation: This flag indicates whether or not an eligible seller has opted in to eBay Managed Returns through the Return Preferences of My eBay.
     * - minOccurs: 0
     * @var bool
     */
    public $OptedIn;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerReturnPreferencesType
     * @uses SellerReturnPreferencesType::setOptedIn()
     * @uses SellerReturnPreferencesType::setAny()
     * @param bool $optedIn
     * @param \DOMDocument $any
     */
    public function __construct($optedIn = null, \DOMDocument $any = null)
    {
        $this
            ->setOptedIn($optedIn)
            ->setAny($any);
    }
    /**
     * Get OptedIn value
     * @return bool|null
     */
    public function getOptedIn()
    {
        return $this->OptedIn;
    }
    /**
     * Set OptedIn value
     * @param bool $optedIn
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType
     */
    public function setOptedIn($optedIn = null)
    {
        // validation for constraint: boolean
        if (!is_null($optedIn) && !is_bool($optedIn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($optedIn)), __LINE__);
        }
        $this->OptedIn = $optedIn;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType
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
