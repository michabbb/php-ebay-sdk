<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationExtendedProducerResponsibilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note:</b> Support for extended producer responsibility regulations and custom policies will become active mid-December 2021. Additional resources such as the custom policies resource (for the <b>Account
 * API</b>), the <b>getExtendedProducerResponsibilityPolicies</b> method (for the <b>Sell Metadata API</b>), and the <a href="https://www.ebay.com/help/selling/custom-policies/custom-policies?id=5311" target="_blank">Custom Policies</a> help page will
 * also become active.</span> This type specifies variation-specific Extended Producer Responsibility information, specifically the <strong>EcoParticipationFee</strong>. For multiple-variation listings, the <b>EcoParticipationFee</b> in this container
 * is used and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
 * @subpackage Structs
 */
class VariationExtendedProducerResponsibilityType extends AbstractStructBase
{
    /**
     * The EcoParticipationFee
     * Meta information extracted from the WSDL
     * - documentation: This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France) fee for each variation in a multiple-variation listing. It is a contribution to the financing of the elimination of the item
     * responsibly. For multiple-variation listings, this <b>EcoParticipationFee</b> (in the <b>VariationExtendedProducerResponsibility</b> container) is used and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $EcoParticipationFee = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for VariationExtendedProducerResponsibilityType
     * @uses VariationExtendedProducerResponsibilityType::setEcoParticipationFee()
     * @uses VariationExtendedProducerResponsibilityType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $ecoParticipationFee
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $ecoParticipationFee = null, $any = null)
    {
        $this
            ->setEcoParticipationFee($ecoParticipationFee)
            ->setAny($any);
    }
    /**
     * Get EcoParticipationFee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getEcoParticipationFee(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->EcoParticipationFee;
    }
    /**
     * Set EcoParticipationFee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $ecoParticipationFee
     * @return \macropage\ebaysdk\trading\StructType\VariationExtendedProducerResponsibilityType
     */
    public function setEcoParticipationFee(?\macropage\ebaysdk\trading\StructType\AmountType $ecoParticipationFee = null): self
    {
        $this->EcoParticipationFee = $ecoParticipationFee;
        
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
     * @return \macropage\ebaysdk\trading\StructType\VariationExtendedProducerResponsibilityType
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
