<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelOfferType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CancelOfferType extends AbstractStructBase
{
    /**
     * The Offer
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\OfferType $Offer = null;
    /**
     * The Explanation
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Explanation = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CancelOfferType
     * @uses CancelOfferType::setOffer()
     * @uses CancelOfferType::setExplanation()
     * @uses CancelOfferType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\OfferType $offer
     * @param string $explanation
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\OfferType $offer = null, ?string $explanation = null, $any = null)
    {
        $this
            ->setOffer($offer)
            ->setExplanation($explanation)
            ->setAny($any);
    }
    /**
     * Get Offer value
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function getOffer(): ?\macropage\ebaysdk\trading\StructType\OfferType
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \macropage\ebaysdk\trading\StructType\OfferType $offer
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferType
     */
    public function setOffer(?\macropage\ebaysdk\trading\StructType\OfferType $offer = null): self
    {
        $this->Offer = $offer;
        
        return $this;
    }
    /**
     * Get Explanation value
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->Explanation;
    }
    /**
     * Set Explanation value
     * @param string $explanation
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferType
     */
    public function setExplanation(?string $explanation = null): self
    {
        // validation for constraint: string
        if (!is_null($explanation) && !is_string($explanation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanation, true), gettype($explanation)), __LINE__);
        }
        $this->Explanation = $explanation;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferType
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
