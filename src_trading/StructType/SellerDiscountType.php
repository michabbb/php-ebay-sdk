<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDiscountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type that defines the <b>SellerDiscount</b> container, which contains the ID, name, and amount of the seller discount.
 * @subpackage Structs
 */
class SellerDiscountType extends AbstractStructBase
{
    /**
     * The CampaignID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a seller discount campaign. This ID is automatically created when the seller creates the discount campaign. This field is always returned with the <b>SellerDiscount</b> container.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CampaignID = null;
    /**
     * The CampaignDisplayName
     * Meta information extracted from the WSDL
     * - documentation: The name of the seller discount campaign. This field will only be returned with the <b>SellerDiscount</b> container if defined for the seller discount campaign.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CampaignDisplayName = null;
    /**
     * The ItemDiscountAmount
     * Meta information extracted from the WSDL
     * - documentation: The dollar amount of the order line item discount. The original purchase price (denoted in <b>OriginalItemPrice</b>) will be reduced by this value. The amount of the item discount will depend on the rules defined in the the seller
     * discount campaign. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Prior to Version 895, this field worked a little differently. Instead of this field showing the amount of the discount, it was actually showing the final item price after
     * the discount was applied. So, if an item price is 10.0 dollars and the discount is 2.0 dollars, someone using Version 895 (and going forward) will see a value of '2.0' (amount of the discount) in this field, but anyone using Version 893 or lower will
     * see a value of '8.0' (item price after discount) in this field. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ItemDiscountAmount = null;
    /**
     * The ShippingDiscountAmount
     * Meta information extracted from the WSDL
     * - documentation: The dollar amount of the shipping discount applied to the order line item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingDiscountAmount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellerDiscountType
     * @uses SellerDiscountType::setCampaignID()
     * @uses SellerDiscountType::setCampaignDisplayName()
     * @uses SellerDiscountType::setItemDiscountAmount()
     * @uses SellerDiscountType::setShippingDiscountAmount()
     * @uses SellerDiscountType::setAny()
     * @param int $campaignID
     * @param string $campaignDisplayName
     * @param \macropage\ebaysdk\trading\StructType\AmountType $itemDiscountAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingDiscountAmount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $campaignID = null, ?string $campaignDisplayName = null, ?\macropage\ebaysdk\trading\StructType\AmountType $itemDiscountAmount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $shippingDiscountAmount = null, $any = null)
    {
        $this
            ->setCampaignID($campaignID)
            ->setCampaignDisplayName($campaignDisplayName)
            ->setItemDiscountAmount($itemDiscountAmount)
            ->setShippingDiscountAmount($shippingDiscountAmount)
            ->setAny($any);
    }
    /**
     * Get CampaignID value
     * @return int|null
     */
    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }
    /**
     * Set CampaignID value
     * @param int $campaignID
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountType
     */
    public function setCampaignID(?int $campaignID = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignID) && !(is_int($campaignID) || ctype_digit($campaignID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignID, true), gettype($campaignID)), __LINE__);
        }
        $this->CampaignID = $campaignID;
        
        return $this;
    }
    /**
     * Get CampaignDisplayName value
     * @return string|null
     */
    public function getCampaignDisplayName(): ?string
    {
        return $this->CampaignDisplayName;
    }
    /**
     * Set CampaignDisplayName value
     * @param string $campaignDisplayName
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountType
     */
    public function setCampaignDisplayName(?string $campaignDisplayName = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignDisplayName) && !is_string($campaignDisplayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignDisplayName, true), gettype($campaignDisplayName)), __LINE__);
        }
        $this->CampaignDisplayName = $campaignDisplayName;
        
        return $this;
    }
    /**
     * Get ItemDiscountAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getItemDiscountAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ItemDiscountAmount;
    }
    /**
     * Set ItemDiscountAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $itemDiscountAmount
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountType
     */
    public function setItemDiscountAmount(?\macropage\ebaysdk\trading\StructType\AmountType $itemDiscountAmount = null): self
    {
        $this->ItemDiscountAmount = $itemDiscountAmount;
        
        return $this;
    }
    /**
     * Get ShippingDiscountAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingDiscountAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingDiscountAmount;
    }
    /**
     * Set ShippingDiscountAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingDiscountAmount
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountType
     */
    public function setShippingDiscountAmount(?\macropage\ebaysdk\trading\StructType\AmountType $shippingDiscountAmount = null): self
    {
        $this->ShippingDiscountAmount = $shippingDiscountAmount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountType
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
