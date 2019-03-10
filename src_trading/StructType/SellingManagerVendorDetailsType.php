<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerVendorDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes vendor information.
 * @subpackage Structs
 */
class SellingManagerVendorDetailsType extends AbstractStructBase
{
    /**
     * The VendorName
     * Meta informations extracted from the WSDL
     * - documentation: Primary vendor name. Vendor information is returned only if it has been set.
     * - minOccurs: 0
     * @var string
     */
    public $VendorName;
    /**
     * The VendorContactInfo
     * Meta informations extracted from the WSDL
     * - documentation: Contact information of vendor. Vendor information is returned only if it has been set.
     * - minOccurs: 0
     * @var string
     */
    public $VendorContactInfo;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerVendorDetailsType
     * @uses SellingManagerVendorDetailsType::setVendorName()
     * @uses SellingManagerVendorDetailsType::setVendorContactInfo()
     * @uses SellingManagerVendorDetailsType::setAny()
     * @param string $vendorName
     * @param string $vendorContactInfo
     * @param \DOMDocument $any
     */
    public function __construct($vendorName = null, $vendorContactInfo = null, \DOMDocument $any = null)
    {
        $this
            ->setVendorName($vendorName)
            ->setVendorContactInfo($vendorContactInfo)
            ->setAny($any);
    }
    /**
     * Get VendorName value
     * @return string|null
     */
    public function getVendorName()
    {
        return $this->VendorName;
    }
    /**
     * Set VendorName value
     * @param string $vendorName
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType
     */
    public function setVendorName($vendorName = null)
    {
        // validation for constraint: string
        if (!is_null($vendorName) && !is_string($vendorName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorName)), __LINE__);
        }
        $this->VendorName = $vendorName;
        return $this;
    }
    /**
     * Get VendorContactInfo value
     * @return string|null
     */
    public function getVendorContactInfo()
    {
        return $this->VendorContactInfo;
    }
    /**
     * Set VendorContactInfo value
     * @param string $vendorContactInfo
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType
     */
    public function setVendorContactInfo($vendorContactInfo = null)
    {
        // validation for constraint: string
        if (!is_null($vendorContactInfo) && !is_string($vendorContactInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorContactInfo)), __LINE__);
        }
        $this->VendorContactInfo = $vendorContactInfo;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType
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
