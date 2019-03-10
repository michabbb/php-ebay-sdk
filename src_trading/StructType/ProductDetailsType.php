<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the <b>ProductDetails</b> container that is returned in the <b>GeteBayDetails</b> response if product identifiers (EANs, ISBNs, UPCs, MPN/Brand) are not supported for a category.
 * @subpackage Structs
 */
class ProductDetailsType extends AbstractStructBase
{
    /**
     * The ProductIdentifierUnavailableText
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the actual text that should be passed into the relevant product identification fields when creating a listing.
     * - minOccurs: 0
     * @var string
     */
    public $ProductIdentifierUnavailableText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductDetailsType
     * @uses ProductDetailsType::setProductIdentifierUnavailableText()
     * @uses ProductDetailsType::setAny()
     * @param string $productIdentifierUnavailableText
     * @param \DOMDocument $any
     */
    public function __construct($productIdentifierUnavailableText = null, \DOMDocument $any = null)
    {
        $this
            ->setProductIdentifierUnavailableText($productIdentifierUnavailableText)
            ->setAny($any);
    }
    /**
     * Get ProductIdentifierUnavailableText value
     * @return string|null
     */
    public function getProductIdentifierUnavailableText()
    {
        return $this->ProductIdentifierUnavailableText;
    }
    /**
     * Set ProductIdentifierUnavailableText value
     * @param string $productIdentifierUnavailableText
     * @return \macropage\ebaysdk\trading\StructType\ProductDetailsType
     */
    public function setProductIdentifierUnavailableText($productIdentifierUnavailableText = null)
    {
        // validation for constraint: string
        if (!is_null($productIdentifierUnavailableText) && !is_string($productIdentifierUnavailableText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productIdentifierUnavailableText)), __LINE__);
        }
        $this->ProductIdentifierUnavailableText = $productIdentifierUnavailableText;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProductDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ProductDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ProductDetailsType
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
