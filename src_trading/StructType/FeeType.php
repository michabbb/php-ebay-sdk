<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the name and cost of a listing feature that a member pays to eBay. These listing feature names, fees, and possible discounts are intended only as an aid to help estimate the fees for a listing.
 * @subpackage Structs
 */
class FeeType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This is the name of the listing feature, such as <code>ListingFee</code>, <code>SubtitleFee</code>, or <code>BoldFee</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: Amount of the fee that eBay will charge the member for the associated listing feature.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Fee = null;
    /**
     * The PromotionalDiscount
     * Meta information extracted from the WSDL
     * - documentation: This field exists in the response when the user has selected a feature that participates in a promotional discount. <br/><br/> <span class="tablenote"><b>Note: </b> Verify calls might not return the PromotionalDiscount fee in the
     * response. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $PromotionalDiscount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for FeeType
     * @uses FeeType::setName()
     * @uses FeeType::setFee()
     * @uses FeeType::setPromotionalDiscount()
     * @uses FeeType::setAny()
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\AmountType $fee
     * @param \macropage\ebaysdk\trading\StructType\AmountType $promotionalDiscount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?\macropage\ebaysdk\trading\StructType\AmountType $fee = null, ?\macropage\ebaysdk\trading\StructType\AmountType $promotionalDiscount = null, $any = null)
    {
        $this
            ->setName($name)
            ->setFee($fee)
            ->setPromotionalDiscount($promotionalDiscount)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\FeeType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Fee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getFee(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $fee
     * @return \macropage\ebaysdk\trading\StructType\FeeType
     */
    public function setFee(?\macropage\ebaysdk\trading\StructType\AmountType $fee = null): self
    {
        $this->Fee = $fee;
        
        return $this;
    }
    /**
     * Get PromotionalDiscount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPromotionalDiscount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->PromotionalDiscount;
    }
    /**
     * Set PromotionalDiscount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $promotionalDiscount
     * @return \macropage\ebaysdk\trading\StructType\FeeType
     */
    public function setPromotionalDiscount(?\macropage\ebaysdk\trading\StructType\AmountType $promotionalDiscount = null): self
    {
        $this->PromotionalDiscount = $promotionalDiscount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FeeType
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
