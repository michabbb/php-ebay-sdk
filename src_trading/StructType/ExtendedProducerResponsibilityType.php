<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedProducerResponsibilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ExtendedProducerResponsibility</b> container, which provides IDs for the producer or importer related to the new item, packaging, added documentation, or an eco-participation fee. In some markets, such as
 * in France, this may be the importer of the item. For more information, see the <b>Extended Producer Responsibility for business sellers</b> page for your site (for example, <a
 * href="https://www.ebay.com/help/selling/all-about-selling/selling-internationally/extended-producer-responsibility-for-business-sellers?id=5314"
 * target="_blank">https://www.ebay.com/help/selling/all-about-selling/selling-internationally/extended-producer-responsibility-for-business-sellers?id=5314</a>). <br/><br/>For <b>GetItem</b> calls, this container is only returned to the listing owner,
 * if the container is available.
 * @subpackage Structs
 */
class ExtendedProducerResponsibilityType extends AbstractStructBase
{
    /**
     * The EcoParticipationFee
     * Meta information extracted from the WSDL
     * - documentation: This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France). It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, the
     * <b>EcoParticipationFee</b> in the <b>VariationExtendedProducerResponsibility</b> container is used for each variation in the listing, and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
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
     * Constructor method for ExtendedProducerResponsibilityType
     * @uses ExtendedProducerResponsibilityType::setEcoParticipationFee()
     * @uses ExtendedProducerResponsibilityType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProducerResponsibilityType
     */
    public function setEcoParticipationFee(?\macropage\ebaysdk\trading\StructType\AmountType $ecoParticipationFee = null): self
    {
        $this->EcoParticipationFee = $ecoParticipationFee;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProducerResponsibilityType
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
