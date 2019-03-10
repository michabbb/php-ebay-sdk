<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandMPNType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>BrandMPN</b> container which is used to identify a product (through unique product brand and Manufacturer Part Number combination). <br> <br> <span class="tablenote"><b>Note:</b> If a Brand/MPN pair is required
 * for the category/brand, these values must still be input through the <b>BrandMPN</b> container, but a catalog product match is only possible with an ePID or one of the GTINs. </span>
 * @subpackage Structs
 */
class BrandMPNType extends AbstractStructBase
{
    /**
     * The Brand
     * Meta informations extracted from the WSDL
     * - documentation: The brand of the product. Both <b>Brand</b> and <b>MPN</b> must be specified if the <b>BrandMPN</b> container is used or an error will occur. If Brand is a required or recommended item specific for a category, but an MPN is not
     * applicable to the category/product, the Brand value should be specified in an <b>Item.ItemSpecifics.NameValueList</b> container instead. <br> <br> <span class="tablenote"><b>Note:</b> The <b>BrandMPN</b> container is not applicable for
     * multiple-variation listings. For multiple-variation listings that use MPNs, the <b>Brand</b> value should be specified through an <b>ItemSpecifics.NameValueList</b> container, and the Manufacturer Part Numbers (MPNs) for each product variation should
     * be specified through a <b>VariationSpecifics.NameValueList</b> container. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Brand;
    /**
     * The MPN
     * Meta informations extracted from the WSDL
     * - documentation: The manufacturer part number of the product. Use the value specified by the manufacturer. Both <b>Brand</b> and <b>MPN</b> must be specified if the <b>BrandMPN</b> container is used or an error will occur. <br/><br/> <span
     * class="tablenote"><b>Note: </b> If the listing is being posted to a category that expects an MPN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the
     * <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response. To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a
     * <b>DetailName</b> value in the call request. </span> <br> <span class="tablenote"><b>Note:</b> The <b>BrandMPN</b> container is not applicable for multiple-variation listings. For multiple-variation listings that use MPNs, the <b>Brand</b> value
     * should be specified through an <b>ItemSpecifics.NameValueList</b> container, and the Manufacturer Part Numbers (MPNs) for each product variation should be specified through a <b>VariationSpecifics.NameValueList</b> container. </span>
     * - minOccurs: 0
     * @var string
     */
    public $MPN;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BrandMPNType
     * @uses BrandMPNType::setBrand()
     * @uses BrandMPNType::setMPN()
     * @uses BrandMPNType::setAny()
     * @param string $brand
     * @param string $mPN
     * @param \DOMDocument $any
     */
    public function __construct($brand = null, $mPN = null, \DOMDocument $any = null)
    {
        $this
            ->setBrand($brand)
            ->setMPN($mPN)
            ->setAny($any);
    }
    /**
     * Get Brand value
     * @return string|null
     */
    public function getBrand()
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param string $brand
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNType
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand)), __LINE__);
        }
        $this->Brand = $brand;
        return $this;
    }
    /**
     * Get MPN value
     * @return string|null
     */
    public function getMPN()
    {
        return $this->MPN;
    }
    /**
     * Set MPN value
     * @param string $mPN
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNType
     */
    public function setMPN($mPN = null)
    {
        // validation for constraint: string
        if (!is_null($mPN) && !is_string($mPN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mPN)), __LINE__);
        }
        $this->MPN = $mPN;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BrandMPNType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNType
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
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNType
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
