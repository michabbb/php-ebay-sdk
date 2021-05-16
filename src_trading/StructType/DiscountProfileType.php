<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountProfileType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of a flat or calculated shipping discount rule. Shipping Discount Rules can be set up through the <b>SetShippingDiscountProfiles</b> call or through My eBay.
 * @subpackage Structs
 */
class DiscountProfileType extends AbstractStructBase
{
    /**
     * The DiscountProfileID
     * Meta information extracted from the WSDL
     * - documentation: The unique eBay-created unique identifier for the shipping discount, assigned when the shipping discount rule is created. <br/> In a <b>SetShippingDiscountProfiles</b> call, <ul> <li>If the value of <b>ModifyActionCode</b> is set to
     * <code>Add</code>, this field is not applicable and is ignored <li>If provided.</li> <li>If the value of <b>Mod <li>IfyActionCode</b> is set to <code>Update</code>, all fields of the modified rule must be provided, even if the values are not
     * changing.</li> <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, either the <b>DiscountProfileID</b> value or is <b>DiscountProfileName</b> value is required, the <b>MappingDiscountProfileID</b> is optional, and all other
     * fields of the <b>DiscountProfile</b> container are ignored.</li> </ul>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DiscountProfileID = null;
    /**
     * The DiscountProfileName
     * Meta information extracted from the WSDL
     * - documentation: The seller-provided title for the shipping discount rule. <br/> In a <b>SetShippingDiscountProfiles</b> call, <ul> <li>If the value of <b>ModifyActionCode</b> is set to <code>Add</code>, this field is ignored (if provided) if this is
     * the first shipping discount rule being created, but this field is required if there is more than one existing shipping discount rule of that type (flat rate or calculated)</li> <li>If the value of <b>ModifyActionCode</b> is set to
     * <code>Update</code>, all fields of the modified rule must be provided, even if the values are not changing</li> <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required, the
     * <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored</li> <li>If the value of <b>ModifyActionCode</b> is set to <code>Delete</code>, either the <b>DiscountProfileID</b> value or is
     * <b>DiscountProfileName</b> value is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the <b>DiscountProfile</b> container are ignored</li> </ul>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DiscountProfileName = null;
    /**
     * The EachAdditionalAmount
     * Meta information extracted from the WSDL
     * - documentation: The cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8, and the seller set the
     * <b>EachAdditionalAmount</b> to $6. The cost to ship three items would normally be $24, but since the seller specified $6, the total shipping cost would be $8 + $6 + $6, or $20. This field is only applicable for flat-rate shipping.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $EachAdditionalAmount = null;
    /**
     * The EachAdditionalAmountOff
     * Meta information extracted from the WSDL
     * - documentation: The amount by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for $8,
     * and the seller set <b>EachAdditionalAmountOff</b> to $2. The cost to ship three items would normally be $24, but since the seller specified $2, the total shipping cost would be <i>$24 - (two additional items x $2)</i>, or $20. This field is only
     * applicable for flat-rate shipping.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $EachAdditionalAmountOff = null;
    /**
     * The EachAdditionalPercentOff
     * Meta information extracted from the WSDL
     * - documentation: The percentage by which to reduce the cost to ship each item beyond the first item (where the item with the highest shipping cost is selected by eBay as the first item). Let's say the buyer purchases three items, each set to ship for
     * $8, and the seller set <b>EachAdditionalPercentOff</b> to 0.25. The cost to ship three items would normally be $24, but since the seller specified 0.25 ($2 out of $8), the total shipping cost would be <i>$24 - (two additional items x $2)</i>, or $20.
     * This field is only applicable for flat-rate shipping.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $EachAdditionalPercentOff = null;
    /**
     * The WeightOff
     * Meta information extracted from the WSDL
     * - documentation: The amount of weight to subtract for each item beyond the first item before shipping costs are calculated. For example, there may be less packing material when the items are combined in one box than if they were shipped individually.
     * Let's say the buyer purchases three items, each 10 oz. in weight, and the seller set <b>WeightOff</b> to 2 oz. The combined weight would be 30 oz., but since the seller specified 2 oz. off, the total weight for shipping cost calculation would be
     * <i>30 oz. - (two additional items x 2 oz.)</i>, or 26 oz. This field is only applicable for calculated shipping.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $WeightOff = null;
    /**
     * The MappedDiscountProfileID
     * Meta information extracted from the WSDL
     * - documentation: For <b>SetShippingDiscountProfiles</b>, if <b>MappedDiscountProfileID</b> is omitted when <b>ModifyActionCode</b> is set to <code>Delete</code>, any listings currently using the profile identified by <b>DiscountProfileID</b> will
     * have that profile removed.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MappedDiscountProfileID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DiscountProfileType
     * @uses DiscountProfileType::setDiscountProfileID()
     * @uses DiscountProfileType::setDiscountProfileName()
     * @uses DiscountProfileType::setEachAdditionalAmount()
     * @uses DiscountProfileType::setEachAdditionalAmountOff()
     * @uses DiscountProfileType::setEachAdditionalPercentOff()
     * @uses DiscountProfileType::setWeightOff()
     * @uses DiscountProfileType::setMappedDiscountProfileID()
     * @uses DiscountProfileType::setAny()
     * @param string $discountProfileID
     * @param string $discountProfileName
     * @param \macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmountOff
     * @param float $eachAdditionalPercentOff
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightOff
     * @param string $mappedDiscountProfileID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $discountProfileID = null, ?string $discountProfileName = null, ?\macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmountOff = null, ?float $eachAdditionalPercentOff = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $weightOff = null, ?string $mappedDiscountProfileID = null, $any = null)
    {
        $this
            ->setDiscountProfileID($discountProfileID)
            ->setDiscountProfileName($discountProfileName)
            ->setEachAdditionalAmount($eachAdditionalAmount)
            ->setEachAdditionalAmountOff($eachAdditionalAmountOff)
            ->setEachAdditionalPercentOff($eachAdditionalPercentOff)
            ->setWeightOff($weightOff)
            ->setMappedDiscountProfileID($mappedDiscountProfileID)
            ->setAny($any);
    }
    /**
     * Get DiscountProfileID value
     * @return string|null
     */
    public function getDiscountProfileID(): ?string
    {
        return $this->DiscountProfileID;
    }
    /**
     * Set DiscountProfileID value
     * @param string $discountProfileID
     * @return \macropage\ebaysdk\trading\StructType\DiscountProfileType
     */
    public function setDiscountProfileID(?string $discountProfileID = null): self
    {
        // validation for constraint: string
        if (!is_null($discountProfileID) && !is_string($discountProfileID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountProfileID, true), gettype($discountProfileID)), __LINE__);
        }
        $this->DiscountProfileID = $discountProfileID;
        
        return $this;
    }
    /**
     * Get DiscountProfileName value
     * @return string|null
     */
    public function getDiscountProfileName(): ?string
    {
        return $this->DiscountProfileName;
    }
    /**
     * Set DiscountProfileName value
     * @param string $discountProfileName
     * @return \macropage\ebaysdk\trading\StructType\DiscountProfileType
     */
    public function setDiscountProfileName(?string $discountProfileName = null): self
    {
        // validation for constraint: string
        if (!is_null($discountProfileName) && !is_string($discountProfileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountProfileName, true), gettype($discountProfileName)), __LINE__);
        }
        $this->DiscountProfileName = $discountProfileName;
        
        return $this;
    }
    /**
     * Get EachAdditionalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getEachAdditionalAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->EachAdditionalAmount;
    }
    /**
     * Set EachAdditionalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmount
     * @return \macropage\ebaysdk\trading\StructType\DiscountProfileType
     */
    public function setEachAdditionalAmount(?\macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmount = null): self
    {
        $this->EachAdditionalAmount = $eachAdditionalAmount;
        
        return $this;
    }
    /**
     * Get EachAdditionalAmountOff value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getEachAdditionalAmountOff(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->EachAdditionalAmountOff;
    }
    /**
     * Set EachAdditionalAmountOff value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmountOff
     * @return \macropage\ebaysdk\trading\StructType\DiscountProfileType
     */
    public function setEachAdditionalAmountOff(?\macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmountOff = null): self
    {
        $this->EachAdditionalAmountOff = $eachAdditionalAmountOff;
        
        return $this;
    }
    /**
     * Get EachAdditionalPercentOff value
     * @return float|null
     */
    public function getEachAdditionalPercentOff(): ?float
    {
        return $this->EachAdditionalPercentOff;
    }
    /**
     * Set EachAdditionalPercentOff value
     * @param float $eachAdditionalPercentOff
     * @return \macropage\ebaysdk\trading\StructType\DiscountProfileType
     */
    public function setEachAdditionalPercentOff(?float $eachAdditionalPercentOff = null): self
    {
        // validation for constraint: float
        if (!is_null($eachAdditionalPercentOff) && !(is_float($eachAdditionalPercentOff) || is_numeric($eachAdditionalPercentOff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($eachAdditionalPercentOff, true), gettype($eachAdditionalPercentOff)), __LINE__);
        }
        $this->EachAdditionalPercentOff = $eachAdditionalPercentOff;
        
        return $this;
    }
    /**
     * Get WeightOff value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getWeightOff(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->WeightOff;
    }
    /**
     * Set WeightOff value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightOff
     * @return \macropage\ebaysdk\trading\StructType\DiscountProfileType
     */
    public function setWeightOff(?\macropage\ebaysdk\trading\StructType\MeasureType $weightOff = null): self
    {
        $this->WeightOff = $weightOff;
        
        return $this;
    }
    /**
     * Get MappedDiscountProfileID value
     * @return string|null
     */
    public function getMappedDiscountProfileID(): ?string
    {
        return $this->MappedDiscountProfileID;
    }
    /**
     * Set MappedDiscountProfileID value
     * @param string $mappedDiscountProfileID
     * @return \macropage\ebaysdk\trading\StructType\DiscountProfileType
     */
    public function setMappedDiscountProfileID(?string $mappedDiscountProfileID = null): self
    {
        // validation for constraint: string
        if (!is_null($mappedDiscountProfileID) && !is_string($mappedDiscountProfileID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mappedDiscountProfileID, true), gettype($mappedDiscountProfileID)), __LINE__);
        }
        $this->MappedDiscountProfileID = $mappedDiscountProfileID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DiscountProfileType
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
