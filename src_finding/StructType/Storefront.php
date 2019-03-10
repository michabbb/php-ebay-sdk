<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Storefront StructType
 * Meta informations extracted from the WSDL
 * - documentation: Denotes whether the item is a storefront listing.
 * @subpackage Structs
 */
class Storefront extends AbstractStructBase
{
    /**
     * The storeName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the seller's eBay Store.
     * - minOccurs: 0
     * @var string
     */
    public $storeName;
    /**
     * The storeURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of the seller's eBay Store page.
     * - minOccurs: 0
     * @var string
     */
    public $storeURL;
    /**
     * The delimiter
     * @var string
     */
    public $delimiter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for Storefront
     * @uses Storefront::setStoreName()
     * @uses Storefront::setStoreURL()
     * @uses Storefront::setDelimiter()
     * @uses Storefront::setAny()
     * @param string $storeName
     * @param string $storeURL
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($storeName = null, $storeURL = null, $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setStoreName($storeName)
            ->setStoreURL($storeURL)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get storeName value
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }
    /**
     * Set storeName value
     * @param string $storeName
     * @return \macropage\ebaysdk\finding\StructType\Storefront
     */
    public function setStoreName($storeName = null)
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeName)), __LINE__);
        }
        $this->storeName = $storeName;
        return $this;
    }
    /**
     * Get storeURL value
     * @return string|null
     */
    public function getStoreURL()
    {
        return $this->storeURL;
    }
    /**
     * Set storeURL value
     * @param string $storeURL
     * @return \macropage\ebaysdk\finding\StructType\Storefront
     */
    public function setStoreURL($storeURL = null)
    {
        // validation for constraint: string
        if (!is_null($storeURL) && !is_string($storeURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeURL)), __LINE__);
        }
        $this->storeURL = $storeURL;
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \macropage\ebaysdk\finding\StructType\Storefront
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\Storefront::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\Storefront
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
     * @return \macropage\ebaysdk\finding\StructType\Storefront
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
