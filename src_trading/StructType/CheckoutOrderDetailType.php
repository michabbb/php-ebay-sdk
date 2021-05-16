<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckoutOrderDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CheckoutOrderDetailType extends AbstractStructBase
{
    /**
     * The TotalCartMerchandiseCost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalCartMerchandiseCost = null;
    /**
     * The TotalCartShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalCartShippingCost = null;
    /**
     * The TotalTaxAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalTaxAmount = null;
    /**
     * The TotalAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalAmount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CheckoutOrderDetailType
     * @uses CheckoutOrderDetailType::setTotalCartMerchandiseCost()
     * @uses CheckoutOrderDetailType::setTotalCartShippingCost()
     * @uses CheckoutOrderDetailType::setTotalTaxAmount()
     * @uses CheckoutOrderDetailType::setTotalAmount()
     * @uses CheckoutOrderDetailType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalCartMerchandiseCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalCartShippingCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAmount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $totalCartMerchandiseCost = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalCartShippingCost = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalAmount = null, $any = null)
    {
        $this
            ->setTotalCartMerchandiseCost($totalCartMerchandiseCost)
            ->setTotalCartShippingCost($totalCartShippingCost)
            ->setTotalTaxAmount($totalTaxAmount)
            ->setTotalAmount($totalAmount)
            ->setAny($any);
    }
    /**
     * Get TotalCartMerchandiseCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalCartMerchandiseCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalCartMerchandiseCost;
    }
    /**
     * Set TotalCartMerchandiseCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalCartMerchandiseCost
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
     */
    public function setTotalCartMerchandiseCost(?\macropage\ebaysdk\trading\StructType\AmountType $totalCartMerchandiseCost = null): self
    {
        $this->TotalCartMerchandiseCost = $totalCartMerchandiseCost;
        
        return $this;
    }
    /**
     * Get TotalCartShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalCartShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalCartShippingCost;
    }
    /**
     * Set TotalCartShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalCartShippingCost
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
     */
    public function setTotalCartShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $totalCartShippingCost = null): self
    {
        $this->TotalCartShippingCost = $totalCartShippingCost;
        
        return $this;
    }
    /**
     * Get TotalTaxAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalTaxAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalTaxAmount;
    }
    /**
     * Set TotalTaxAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
     */
    public function setTotalTaxAmount(?\macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount = null): self
    {
        $this->TotalTaxAmount = $totalTaxAmount;
        
        return $this;
    }
    /**
     * Get TotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalAmount;
    }
    /**
     * Set TotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAmount
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
     */
    public function setTotalAmount(?\macropage\ebaysdk\trading\StructType\AmountType $totalAmount = null): self
    {
        $this->TotalAmount = $totalAmount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
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
