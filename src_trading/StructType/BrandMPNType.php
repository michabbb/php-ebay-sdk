<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandMPNType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BrandMPN</b> container which is used to identify a product (through a unique product brand and Manufacturer Part Number combination). <br> <br> <span class="tablenote"><b>Note:</b> If a brand and/or MPN value is
 * required for a category, it is highly recommended that the brand and MPN name/value pair is also passed in through an <b>ItemSpecifics.NameValueList</b> container, since brand and MPN values may be dropped from the listing if eBay is not able to find
 * a eBay catalog product match based on the provided Brand/MPN pair. </span>
 * @subpackage Structs
 */
class BrandMPNType extends AbstractStructBase
{
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - documentation: The brand of the product. Both <b>Brand</b> and <b>MPN</b> should be specified if the <b>BrandMPN</b> container is used, or an error may occur. If Brand is a required or recommended item specific for a category, but an MPN is not
     * applicable to the category/product, the Brand value should be specified in an <b>Item.ItemSpecifics.NameValueList</b> container instead. <br> <br> <span class="tablenote"><b>Note:</b> The <b>BrandMPN</b> container is not applicable for
     * multiple-variation listings. For multiple-variation listings that use MPNs, the <b>Brand</b> value should be specified through an <b>ItemSpecifics.NameValueList</b> container, and the Manufacturer Part Numbers (MPNs) for each product variation should
     * be specified through a <b>VariationSpecifics.NameValueList</b> container. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Brand = null;
    /**
     * The MPN
     * Meta information extracted from the WSDL
     * - documentation: The manufacturer part number of the product. Use the value specified by the manufacturer. Both <b>Brand</b> and <b>MPN</b> must be specified if the <b>BrandMPN</b> container is used or an error may occur. <br/><br/> If the listing is
     * being posted to a category that expects an MPN value, but one doesn't exist for the product, the seller must pass in the text that can be found in the <b>ProductDetails.ProductIdentifierUnavailableText</b> field of the <b>GeteBayDetails</b> response.
     * To get the <b>ProductDetails</b> container to return in the <b>GeteBayDetails</b> response, <code>ProductDetails</code> should be included as a <b>DetailName</b> value in the call request. <br><br> <span class="tablenote"><b>Note:</b> The
     * <b>BrandMPN</b> container is not applicable for multiple-variation listings. For multiple-variation listings that use MPNs, the <b>Brand</b> value should be specified through an <b>ItemSpecifics.NameValueList</b> container, and the Manufacturer Part
     * Numbers (MPNs) for each product variation should be specified through a <b>VariationSpecifics.NameValueList</b> container. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MPN = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BrandMPNType
     * @uses BrandMPNType::setBrand()
     * @uses BrandMPNType::setMPN()
     * @uses BrandMPNType::setAny()
     * @param string $brand
     * @param string $mPN
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $brand = null, ?string $mPN = null, $any = null)
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
    public function getBrand(): ?string
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param string $brand
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNType
     */
    public function setBrand(?string $brand = null): self
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brand, true), gettype($brand)), __LINE__);
        }
        $this->Brand = $brand;
        
        return $this;
    }
    /**
     * Get MPN value
     * @return string|null
     */
    public function getMPN(): ?string
    {
        return $this->MPN;
    }
    /**
     * Set MPN value
     * @param string $mPN
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNType
     */
    public function setMPN(?string $mPN = null): self
    {
        // validation for constraint: string
        if (!is_null($mPN) && !is_string($mPN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mPN, true), gettype($mPN)), __LINE__);
        }
        $this->MPN = $mPN;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\BrandMPNType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
