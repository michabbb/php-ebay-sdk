<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DigitalGoodInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>DigitalGoodInfo</b> container, which is used in <b>Add</b>/<b>Relist</b>/<b>Revise</b>/<b>Verify</b> listing calls to designate the listing as a digital gift card listing.
 * @subpackage Structs
 */
class DigitalGoodInfoType extends AbstractStructBase
{
    /**
     * The DigitalDelivery
     * Meta informations extracted from the WSDL
     * - documentation: This field must be included in the request and set to <code>true</code> if the seller plans to list a digital gift card in a category that supports digital gift cards. <br><br> To verify if a specific category on a specific eBay site
     * supports digital gift card listings, use the <a href="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in a <b>CategoryID</b> value and a <b>DigitalGoodDeliveryEnabled</b> value
     * in the <b>FeatureID</b> field. Look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the
     * request).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $DigitalDelivery;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DigitalGoodInfoType
     * @uses DigitalGoodInfoType::setDigitalDelivery()
     * @uses DigitalGoodInfoType::setAny()
     * @param bool $digitalDelivery
     * @param \DOMDocument $any
     */
    public function __construct($digitalDelivery = null, \DOMDocument $any = null)
    {
        $this
            ->setDigitalDelivery($digitalDelivery)
            ->setAny($any);
    }
    /**
     * Get DigitalDelivery value
     * @return bool|null
     */
    public function getDigitalDelivery()
    {
        return $this->DigitalDelivery;
    }
    /**
     * Set DigitalDelivery value
     * @param bool $digitalDelivery
     * @return \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType
     */
    public function setDigitalDelivery($digitalDelivery = null)
    {
        // validation for constraint: boolean
        if (!is_null($digitalDelivery) && !is_bool($digitalDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($digitalDelivery)), __LINE__);
        }
        $this->DigitalDelivery = $digitalDelivery;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType
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
