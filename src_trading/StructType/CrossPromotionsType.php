<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrossPromotionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CrossPromotionsType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The PrimaryScheme
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PrimaryScheme = null;
    /**
     * The PromotionMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PromotionMethod = null;
    /**
     * The SellerID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerID = null;
    /**
     * The ShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool|null
     */
    protected ?bool $ShippingDiscount = null;
    /**
     * The StoreName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StoreName = null;
    /**
     * The PromotedItem
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotedItemType[]
     */
    protected array $PromotedItem = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CrossPromotionsType
     * @uses CrossPromotionsType::setItemID()
     * @uses CrossPromotionsType::setPrimaryScheme()
     * @uses CrossPromotionsType::setPromotionMethod()
     * @uses CrossPromotionsType::setSellerID()
     * @uses CrossPromotionsType::setShippingDiscount()
     * @uses CrossPromotionsType::setStoreName()
     * @uses CrossPromotionsType::setPromotedItem()
     * @uses CrossPromotionsType::setAny()
     * @param string $itemID
     * @param string $primaryScheme
     * @param string $promotionMethod
     * @param string $sellerID
     * @param bool $shippingDiscount
     * @param string $storeName
     * @param \macropage\ebaysdk\trading\StructType\PromotedItemType[] $promotedItem
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $itemID = null, ?string $primaryScheme = null, ?string $promotionMethod = null, ?string $sellerID = null, ?bool $shippingDiscount = null, ?string $storeName = null, array $promotedItem = [], $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setPrimaryScheme($primaryScheme)
            ->setPromotionMethod($promotionMethod)
            ->setSellerID($sellerID)
            ->setShippingDiscount($shippingDiscount)
            ->setStoreName($storeName)
            ->setPromotedItem($promotedItem)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get PrimaryScheme value
     * @return string|null
     */
    public function getPrimaryScheme(): ?string
    {
        return $this->PrimaryScheme;
    }
    /**
     * Set PrimaryScheme value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $primaryScheme
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setPrimaryScheme(?string $primaryScheme = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::valueIsValid($primaryScheme)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType', is_array($primaryScheme) ? implode(', ', $primaryScheme) : var_export($primaryScheme, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::getValidValues())), __LINE__);
        }
        $this->PrimaryScheme = $primaryScheme;
        
        return $this;
    }
    /**
     * Get PromotionMethod value
     * @return string|null
     */
    public function getPromotionMethod(): ?string
    {
        return $this->PromotionMethod;
    }
    /**
     * Set PromotionMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $promotionMethod
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setPromotionMethod(?string $promotionMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::valueIsValid($promotionMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType', is_array($promotionMethod) ? implode(', ', $promotionMethod) : var_export($promotionMethod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionMethod = $promotionMethod;
        
        return $this;
    }
    /**
     * Get SellerID value
     * @return string|null
     */
    public function getSellerID(): ?string
    {
        return $this->SellerID;
    }
    /**
     * Set SellerID value
     * @param string $sellerID
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setSellerID(?string $sellerID = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerID) && !is_string($sellerID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerID, true), gettype($sellerID)), __LINE__);
        }
        $this->SellerID = $sellerID;
        
        return $this;
    }
    /**
     * Get ShippingDiscount value
     * @return bool|null
     */
    public function getShippingDiscount(): ?bool
    {
        return $this->ShippingDiscount;
    }
    /**
     * Set ShippingDiscount value
     * @param bool $shippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setShippingDiscount(?bool $shippingDiscount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($shippingDiscount) && !is_bool($shippingDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingDiscount, true), gettype($shippingDiscount)), __LINE__);
        }
        $this->ShippingDiscount = $shippingDiscount;
        
        return $this;
    }
    /**
     * Get StoreName value
     * @return string|null
     */
    public function getStoreName(): ?string
    {
        return $this->StoreName;
    }
    /**
     * Set StoreName value
     * @param string $storeName
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setStoreName(?string $storeName = null): self
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeName, true), gettype($storeName)), __LINE__);
        }
        $this->StoreName = $storeName;
        
        return $this;
    }
    /**
     * Get PromotedItem value
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType[]
     */
    public function getPromotedItem(): array
    {
        return $this->PromotedItem;
    }
    /**
     * This method is responsible for validating the values passed to the setPromotedItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotedItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotedItemForArrayConstraintsFromSetPromotedItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $crossPromotionsTypePromotedItemItem) {
            // validation for constraint: itemType
            if (!$crossPromotionsTypePromotedItemItem instanceof \macropage\ebaysdk\trading\StructType\PromotedItemType) {
                $invalidValues[] = is_object($crossPromotionsTypePromotedItemItem) ? get_class($crossPromotionsTypePromotedItemItem) : sprintf('%s(%s)', gettype($crossPromotionsTypePromotedItemItem), var_export($crossPromotionsTypePromotedItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromotedItem property can only contain items of type \macropage\ebaysdk\trading\StructType\PromotedItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PromotedItem value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotedItemType[] $promotedItem
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function setPromotedItem(array $promotedItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($promotedItemArrayErrorMessage = self::validatePromotedItemForArrayConstraintsFromSetPromotedItem($promotedItem))) {
            throw new InvalidArgumentException($promotedItemArrayErrorMessage, __LINE__);
        }
        $this->PromotedItem = $promotedItem;
        
        return $this;
    }
    /**
     * Add item to PromotedItem value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotedItemType $item
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
     */
    public function addToPromotedItem(\macropage\ebaysdk\trading\StructType\PromotedItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PromotedItemType) {
            throw new InvalidArgumentException(sprintf('The PromotedItem property can only contain items of type \macropage\ebaysdk\trading\StructType\PromotedItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PromotedItem[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CrossPromotionsType
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
