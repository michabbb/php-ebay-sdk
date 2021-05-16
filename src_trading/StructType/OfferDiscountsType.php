<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferDiscountsType StructType
 * Meta information extracted from the WSDL
 * - documentation: <b>DO NOT USE THIS TYPE</b>. This type is only for internal or future use.
 * @subpackage Structs
 */
class OfferDiscountsType extends AbstractStructBase
{
    /**
     * The SellerMarketing
     * Meta information extracted from the WSDL
     * - documentation: <b>DO NOT USE THIS FIELD</b>. This field is only for internal or future use.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $SellerMarketing = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for OfferDiscountsType
     * @uses OfferDiscountsType::setSellerMarketing()
     * @uses OfferDiscountsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $sellerMarketing
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $sellerMarketing = null, $any = null)
    {
        $this
            ->setSellerMarketing($sellerMarketing)
            ->setAny($any);
    }
    /**
     * Get SellerMarketing value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSellerMarketing(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->SellerMarketing;
    }
    /**
     * Set SellerMarketing value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $sellerMarketing
     * @return \macropage\ebaysdk\trading\StructType\OfferDiscountsType
     */
    public function setSellerMarketing(?\macropage\ebaysdk\trading\StructType\AmountType $sellerMarketing = null): self
    {
        $this->SellerMarketing = $sellerMarketing;
        
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
     * @return \macropage\ebaysdk\trading\StructType\OfferDiscountsType
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
