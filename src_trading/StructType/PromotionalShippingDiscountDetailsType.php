<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionalShippingDiscountDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of a promotional shipping discount.
 * @subpackage Structs
 */
class PromotionalShippingDiscountDetailsType extends AbstractStructBase
{
    /**
     * The DiscountName
     * Meta information extracted from the WSDL
     * - documentation: The type of promotional shipping discount that is detailed in the profile. If the discount type is <code>MaximumShippingCostPerOrder</code>, see <b>ShippingCost</b>. If the discount type is <code>ShippingCostXForAmountY</code>, see
     * <b>ShippingCost</b> and <b>OrderAmount</b>. If the discount type is <code>ShippingCostXForItemCountN</code>, see <b>ShippingCost</b> and <b>ItemCount</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DiscountName = null;
    /**
     * The ShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This is shipping cost X when <b>DiscountName</b> is either <code>ShippingCostXForAmountY</code> or <code>ShippingCostXForItemCountN</code>, and is the maximum cost when <b>DiscountName</b> is <code>MaximumShippingCostPerOrder</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ShippingCost = null;
    /**
     * The OrderAmount
     * Meta information extracted from the WSDL
     * - documentation: This is the cost Y of the order (not including shipping cost) when <b>DiscountName</b> is set to <code>ShippingCostXForAmountY</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $OrderAmount = null;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - documentation: This is the number of items when <b>DiscountName</b> is set to <code>ShippingCostXForItemsY</code>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemCount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PromotionalShippingDiscountDetailsType
     * @uses PromotionalShippingDiscountDetailsType::setDiscountName()
     * @uses PromotionalShippingDiscountDetailsType::setShippingCost()
     * @uses PromotionalShippingDiscountDetailsType::setOrderAmount()
     * @uses PromotionalShippingDiscountDetailsType::setItemCount()
     * @uses PromotionalShippingDiscountDetailsType::setAny()
     * @param string $discountName
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $orderAmount
     * @param int $itemCount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $discountName = null, ?\macropage\ebaysdk\trading\StructType\AmountType $shippingCost = null, ?\macropage\ebaysdk\trading\StructType\AmountType $orderAmount = null, ?int $itemCount = null, $any = null)
    {
        $this
            ->setDiscountName($discountName)
            ->setShippingCost($shippingCost)
            ->setOrderAmount($orderAmount)
            ->setItemCount($itemCount)
            ->setAny($any);
    }
    /**
     * Get DiscountName value
     * @return string|null
     */
    public function getDiscountName(): ?string
    {
        return $this->DiscountName;
    }
    /**
     * Set DiscountName value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $discountName
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
     */
    public function setDiscountName(?string $discountName = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::valueIsValid($discountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType', is_array($discountName) ? implode(', ', $discountName) : var_export($discountName, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountName = $discountName;
        
        return $this;
    }
    /**
     * Get ShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ShippingCost;
    }
    /**
     * Set ShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingCost
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
     */
    public function setShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $shippingCost = null): self
    {
        $this->ShippingCost = $shippingCost;
        
        return $this;
    }
    /**
     * Get OrderAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getOrderAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->OrderAmount;
    }
    /**
     * Set OrderAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $orderAmount
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
     */
    public function setOrderAmount(?\macropage\ebaysdk\trading\StructType\AmountType $orderAmount = null): self
    {
        $this->OrderAmount = $orderAmount;
        
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int|null
     */
    public function getItemCount(): ?int
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
     */
    public function setItemCount(?int $itemCount = null): self
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !(is_int($itemCount) || ctype_digit($itemCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemCount, true), gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
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
