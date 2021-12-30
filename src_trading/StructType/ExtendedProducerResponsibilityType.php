<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedProducerResponsibilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note:</b> Support for extended producer responsibility regulations and custom policies will become active mid-December 2021. Additional resources such as the custom policies resource (for the <b>Account
 * API</b>), the <b>getExtendedProducerResponsibilityPolicies</b> method (for the <b>Sell Metadata API</b>), and the <a href="https://www.ebay.com/help/selling/custom-policies/custom-policies?id=5311" target="_blank">Custom Policies</a> help page will
 * also become active.</span> This type is used by the <b>ExtendedProducerResponsibility</b> container, which provides IDs for the producer or importer related to the new item, packaging, added documentation, or an eco-participation fee. In some
 * markets, such as in France, this may be the importer of the item.
 * @subpackage Structs
 */
class ExtendedProducerResponsibilityType extends AbstractStructBase
{
    /**
     * The ProducerProductID
     * Meta information extracted from the WSDL
     * - documentation: This ID is the Unique Identifier of the producer related to the item. For instance, if the seller is selling a cell phone, it is the ID related to the cell phone.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProducerProductID = null;
    /**
     * The ProductPackageID
     * Meta information extracted from the WSDL
     * - documentation: This ID is the Unique Identifier of the producer of any packaging related to the product added by the seller. This does not include packaging in which the product is shipped (see <b>ShipmentPackageID</b>). For instance, if the seller
     * adds bubble wrap, it is the ID related to the bubble wrap.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductPackageID = null;
    /**
     * The ShipmentPackageID
     * Meta information extracted from the WSDL
     * - documentation: This ID is the Unique Identifier of the producer of any packaging used by the seller to ship the item. This does not include non-shipping packaging added to the product (see <b>ProductPackageID</b>). This ID is required when the
     * seller uses packaging to ship the item. For instance, if the seller uses a different box to ship the item, it is the ID related to the box.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShipmentPackageID = null;
    /**
     * The ProductDocumentationID
     * Meta information extracted from the WSDL
     * - documentation: This ID is the Unique Identifier of the producer of any paper added to the parcel of the item by the seller. For example, this ID concerns any notice, leaflet, or paper that the seller adds to a cell phone parcel.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductDocumentationID = null;
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
     * @uses ExtendedProducerResponsibilityType::setProducerProductID()
     * @uses ExtendedProducerResponsibilityType::setProductPackageID()
     * @uses ExtendedProducerResponsibilityType::setShipmentPackageID()
     * @uses ExtendedProducerResponsibilityType::setProductDocumentationID()
     * @uses ExtendedProducerResponsibilityType::setEcoParticipationFee()
     * @uses ExtendedProducerResponsibilityType::setAny()
     * @param string $producerProductID
     * @param string $productPackageID
     * @param string $shipmentPackageID
     * @param string $productDocumentationID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $ecoParticipationFee
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $producerProductID = null, ?string $productPackageID = null, ?string $shipmentPackageID = null, ?string $productDocumentationID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $ecoParticipationFee = null, $any = null)
    {
        $this
            ->setProducerProductID($producerProductID)
            ->setProductPackageID($productPackageID)
            ->setShipmentPackageID($shipmentPackageID)
            ->setProductDocumentationID($productDocumentationID)
            ->setEcoParticipationFee($ecoParticipationFee)
            ->setAny($any);
    }
    /**
     * Get ProducerProductID value
     * @return string|null
     */
    public function getProducerProductID(): ?string
    {
        return $this->ProducerProductID;
    }
    /**
     * Set ProducerProductID value
     * @param string $producerProductID
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProducerResponsibilityType
     */
    public function setProducerProductID(?string $producerProductID = null): self
    {
        // validation for constraint: string
        if (!is_null($producerProductID) && !is_string($producerProductID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($producerProductID, true), gettype($producerProductID)), __LINE__);
        }
        $this->ProducerProductID = $producerProductID;
        
        return $this;
    }
    /**
     * Get ProductPackageID value
     * @return string|null
     */
    public function getProductPackageID(): ?string
    {
        return $this->ProductPackageID;
    }
    /**
     * Set ProductPackageID value
     * @param string $productPackageID
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProducerResponsibilityType
     */
    public function setProductPackageID(?string $productPackageID = null): self
    {
        // validation for constraint: string
        if (!is_null($productPackageID) && !is_string($productPackageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productPackageID, true), gettype($productPackageID)), __LINE__);
        }
        $this->ProductPackageID = $productPackageID;
        
        return $this;
    }
    /**
     * Get ShipmentPackageID value
     * @return string|null
     */
    public function getShipmentPackageID(): ?string
    {
        return $this->ShipmentPackageID;
    }
    /**
     * Set ShipmentPackageID value
     * @param string $shipmentPackageID
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProducerResponsibilityType
     */
    public function setShipmentPackageID(?string $shipmentPackageID = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentPackageID) && !is_string($shipmentPackageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentPackageID, true), gettype($shipmentPackageID)), __LINE__);
        }
        $this->ShipmentPackageID = $shipmentPackageID;
        
        return $this;
    }
    /**
     * Get ProductDocumentationID value
     * @return string|null
     */
    public function getProductDocumentationID(): ?string
    {
        return $this->ProductDocumentationID;
    }
    /**
     * Set ProductDocumentationID value
     * @param string $productDocumentationID
     * @return \macropage\ebaysdk\trading\StructType\ExtendedProducerResponsibilityType
     */
    public function setProductDocumentationID(?string $productDocumentationID = null): self
    {
        // validation for constraint: string
        if (!is_null($productDocumentationID) && !is_string($productDocumentationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productDocumentationID, true), gettype($productDocumentationID)), __LINE__);
        }
        $this->ProductDocumentationID = $productDocumentationID;
        
        return $this;
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
