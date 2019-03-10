<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProStoresCheckoutPreferenceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProStoresCheckoutPreferenceType extends AbstractStructBase
{
    /**
     * The CheckoutRedirectProStores
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $CheckoutRedirectProStores;
    /**
     * The ProStoresDetails
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 0
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProStoresDetailsType
     */
    public $ProStoresDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProStoresCheckoutPreferenceType
     * @uses ProStoresCheckoutPreferenceType::setCheckoutRedirectProStores()
     * @uses ProStoresCheckoutPreferenceType::setProStoresDetails()
     * @uses ProStoresCheckoutPreferenceType::setAny()
     * @param bool $checkoutRedirectProStores
     * @param \macropage\ebaysdk\trading\StructType\ProStoresDetailsType $proStoresDetails
     * @param \DOMDocument $any
     */
    public function __construct($checkoutRedirectProStores = null, \macropage\ebaysdk\trading\StructType\ProStoresDetailsType $proStoresDetails = null, \DOMDocument $any = null)
    {
        $this
            ->setCheckoutRedirectProStores($checkoutRedirectProStores)
            ->setProStoresDetails($proStoresDetails)
            ->setAny($any);
    }
    /**
     * Get CheckoutRedirectProStores value
     * @return bool|null
     */
    public function getCheckoutRedirectProStores()
    {
        return $this->CheckoutRedirectProStores;
    }
    /**
     * Set CheckoutRedirectProStores value
     * @param bool $checkoutRedirectProStores
     * @return \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType
     */
    public function setCheckoutRedirectProStores($checkoutRedirectProStores = null)
    {
        // validation for constraint: boolean
        if (!is_null($checkoutRedirectProStores) && !is_bool($checkoutRedirectProStores)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($checkoutRedirectProStores)), __LINE__);
        }
        $this->CheckoutRedirectProStores = $checkoutRedirectProStores;
        return $this;
    }
    /**
     * Get ProStoresDetails value
     * @return \macropage\ebaysdk\trading\StructType\ProStoresDetailsType|null
     */
    public function getProStoresDetails()
    {
        return $this->ProStoresDetails;
    }
    /**
     * Set ProStoresDetails value
     * @param \macropage\ebaysdk\trading\StructType\ProStoresDetailsType $proStoresDetails
     * @return \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType
     */
    public function setProStoresDetails(\macropage\ebaysdk\trading\StructType\ProStoresDetailsType $proStoresDetails = null)
    {
        $this->ProStoresDetails = $proStoresDetails;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType
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
     * @return \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType
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
