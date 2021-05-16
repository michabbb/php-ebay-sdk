<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>ProductDetails</b> container that is returned in the <b>GeteBayDetails</b> response if the <code>ProductDetails</code> value is used in a <b>DetailName</b> field (or no <b>DetailName</b> fields are used).
 * <br><br> The <b>ProductDetails</b> container shows the substitute text that can be used in place of an actual product identifier (e.g. EAN, ISBNs, UPC, or MPN) in case the product does not have a product identifier and/or the product identifier is
 * not known by the seller.
 * @subpackage Structs
 */
class ProductDetailsType extends AbstractStructBase
{
    /**
     * The ProductIdentifierUnavailableText
     * Meta information extracted from the WSDL
     * - documentation: This field contains the actual text that should be passed into the relevant product identifier fields (e.g. <b>ProductListingDetails.UPC</b> in an <b>AddItem<.b> call) when creating a listing. Some eBay categories require one or more
     * Global Trade Item Numbers (GTINs), so either the actual GTIN or this substitute text must be passed into the relevant fields.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductIdentifierUnavailableText = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ProductDetailsType
     * @uses ProductDetailsType::setProductIdentifierUnavailableText()
     * @uses ProductDetailsType::setAny()
     * @param string $productIdentifierUnavailableText
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $productIdentifierUnavailableText = null, $any = null)
    {
        $this
            ->setProductIdentifierUnavailableText($productIdentifierUnavailableText)
            ->setAny($any);
    }
    /**
     * Get ProductIdentifierUnavailableText value
     * @return string|null
     */
    public function getProductIdentifierUnavailableText(): ?string
    {
        return $this->ProductIdentifierUnavailableText;
    }
    /**
     * Set ProductIdentifierUnavailableText value
     * @param string $productIdentifierUnavailableText
     * @return \macropage\ebaysdk\trading\StructType\ProductDetailsType
     */
    public function setProductIdentifierUnavailableText(?string $productIdentifierUnavailableText = null): self
    {
        // validation for constraint: string
        if (!is_null($productIdentifierUnavailableText) && !is_string($productIdentifierUnavailableText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productIdentifierUnavailableText, true), gettype($productIdentifierUnavailableText)), __LINE__);
        }
        $this->ProductIdentifierUnavailableText = $productIdentifierUnavailableText;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ProductDetailsType
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
