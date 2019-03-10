<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingCheckoutRedirectPreferenceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type has been deprecated, as Pro Stores and other third-party checkouts have been deprecated.
 * @subpackage Structs
 */
class ListingCheckoutRedirectPreferenceType extends AbstractStructBase
{
    /**
     * The ProStoresStoreName
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ProStoresStoreName;
    /**
     * The SellerThirdPartyUsername
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerThirdPartyUsername;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingCheckoutRedirectPreferenceType
     * @uses ListingCheckoutRedirectPreferenceType::setProStoresStoreName()
     * @uses ListingCheckoutRedirectPreferenceType::setSellerThirdPartyUsername()
     * @uses ListingCheckoutRedirectPreferenceType::setAny()
     * @param string $proStoresStoreName
     * @param string $sellerThirdPartyUsername
     * @param \DOMDocument $any
     */
    public function __construct($proStoresStoreName = null, $sellerThirdPartyUsername = null, \DOMDocument $any = null)
    {
        $this
            ->setProStoresStoreName($proStoresStoreName)
            ->setSellerThirdPartyUsername($sellerThirdPartyUsername)
            ->setAny($any);
    }
    /**
     * Get ProStoresStoreName value
     * @return string|null
     */
    public function getProStoresStoreName()
    {
        return $this->ProStoresStoreName;
    }
    /**
     * Set ProStoresStoreName value
     * @param string $proStoresStoreName
     * @return \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType
     */
    public function setProStoresStoreName($proStoresStoreName = null)
    {
        // validation for constraint: string
        if (!is_null($proStoresStoreName) && !is_string($proStoresStoreName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proStoresStoreName)), __LINE__);
        }
        $this->ProStoresStoreName = $proStoresStoreName;
        return $this;
    }
    /**
     * Get SellerThirdPartyUsername value
     * @return string|null
     */
    public function getSellerThirdPartyUsername()
    {
        return $this->SellerThirdPartyUsername;
    }
    /**
     * Set SellerThirdPartyUsername value
     * @param string $sellerThirdPartyUsername
     * @return \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType
     */
    public function setSellerThirdPartyUsername($sellerThirdPartyUsername = null)
    {
        // validation for constraint: string
        if (!is_null($sellerThirdPartyUsername) && !is_string($sellerThirdPartyUsername)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerThirdPartyUsername)), __LINE__);
        }
        $this->SellerThirdPartyUsername = $sellerThirdPartyUsername;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType
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
