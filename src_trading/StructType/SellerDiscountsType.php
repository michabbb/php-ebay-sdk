<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDiscountsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerDiscounts</b> container, which consists of one or more <b>SellerDiscount</b> nodes, as well as the original purchase price and shipping cost of the order line item.
 * @subpackage Structs
 */
class SellerDiscountsType extends AbstractStructBase
{
    /**
     * The OriginalItemPrice
     * Meta information extracted from the WSDL
     * - documentation: The original purchase price of the order line item (before any seller discounts are applied).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $OriginalItemPrice = null;
    /**
     * The OriginalItemShippingCost
     * Meta information extracted from the WSDL
     * - documentation: The original shipping cost for the order line item (before any seller discounts are applied).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $OriginalItemShippingCost = null;
    /**
     * The OriginalShippingService
     * Meta information extracted from the WSDL
     * - documentation: The original shipping service offered by the seller to ship an item to a buyer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OriginalShippingService = null;
    /**
     * The SellerDiscount
     * Meta information extracted from the WSDL
     * - documentation: A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerDiscountType[]
     */
    protected array $SellerDiscount = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellerDiscountsType
     * @uses SellerDiscountsType::setOriginalItemPrice()
     * @uses SellerDiscountsType::setOriginalItemShippingCost()
     * @uses SellerDiscountsType::setOriginalShippingService()
     * @uses SellerDiscountsType::setSellerDiscount()
     * @uses SellerDiscountsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalItemPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalItemShippingCost
     * @param string $originalShippingService
     * @param \macropage\ebaysdk\trading\StructType\SellerDiscountType[] $sellerDiscount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $originalItemPrice = null, ?\macropage\ebaysdk\trading\StructType\AmountType $originalItemShippingCost = null, ?string $originalShippingService = null, array $sellerDiscount = [], $any = null)
    {
        $this
            ->setOriginalItemPrice($originalItemPrice)
            ->setOriginalItemShippingCost($originalItemShippingCost)
            ->setOriginalShippingService($originalShippingService)
            ->setSellerDiscount($sellerDiscount)
            ->setAny($any);
    }
    /**
     * Get OriginalItemPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getOriginalItemPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->OriginalItemPrice;
    }
    /**
     * Set OriginalItemPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalItemPrice
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public function setOriginalItemPrice(?\macropage\ebaysdk\trading\StructType\AmountType $originalItemPrice = null): self
    {
        $this->OriginalItemPrice = $originalItemPrice;
        
        return $this;
    }
    /**
     * Get OriginalItemShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getOriginalItemShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->OriginalItemShippingCost;
    }
    /**
     * Set OriginalItemShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalItemShippingCost
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public function setOriginalItemShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $originalItemShippingCost = null): self
    {
        $this->OriginalItemShippingCost = $originalItemShippingCost;
        
        return $this;
    }
    /**
     * Get OriginalShippingService value
     * @return string|null
     */
    public function getOriginalShippingService(): ?string
    {
        return $this->OriginalShippingService;
    }
    /**
     * Set OriginalShippingService value
     * @param string $originalShippingService
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public function setOriginalShippingService(?string $originalShippingService = null): self
    {
        // validation for constraint: string
        if (!is_null($originalShippingService) && !is_string($originalShippingService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalShippingService, true), gettype($originalShippingService)), __LINE__);
        }
        $this->OriginalShippingService = $originalShippingService;
        
        return $this;
    }
    /**
     * Get SellerDiscount value
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountType[]
     */
    public function getSellerDiscount(): array
    {
        return $this->SellerDiscount;
    }
    /**
     * This method is responsible for validating the values passed to the setSellerDiscount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellerDiscount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellerDiscountForArrayConstraintsFromSetSellerDiscount(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellerDiscountsTypeSellerDiscountItem) {
            // validation for constraint: itemType
            if (!$sellerDiscountsTypeSellerDiscountItem instanceof \macropage\ebaysdk\trading\StructType\SellerDiscountType) {
                $invalidValues[] = is_object($sellerDiscountsTypeSellerDiscountItem) ? get_class($sellerDiscountsTypeSellerDiscountItem) : sprintf('%s(%s)', gettype($sellerDiscountsTypeSellerDiscountItem), var_export($sellerDiscountsTypeSellerDiscountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellerDiscount property can only contain items of type \macropage\ebaysdk\trading\StructType\SellerDiscountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellerDiscount value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellerDiscountType[] $sellerDiscount
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public function setSellerDiscount(array $sellerDiscount = []): self
    {
        // validation for constraint: array
        if ('' !== ($sellerDiscountArrayErrorMessage = self::validateSellerDiscountForArrayConstraintsFromSetSellerDiscount($sellerDiscount))) {
            throw new InvalidArgumentException($sellerDiscountArrayErrorMessage, __LINE__);
        }
        $this->SellerDiscount = $sellerDiscount;
        
        return $this;
    }
    /**
     * Add item to SellerDiscount value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellerDiscountType $item
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public function addToSellerDiscount(\macropage\ebaysdk\trading\StructType\SellerDiscountType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellerDiscountType) {
            throw new InvalidArgumentException(sprintf('The SellerDiscount property can only contain items of type \macropage\ebaysdk\trading\StructType\SellerDiscountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellerDiscount[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
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
