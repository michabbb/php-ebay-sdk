<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemBestOffersType StructType
 * Meta information extracted from the WSDL
 * - documentation: All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. For the notification client usage, this response includes a single Best Offer.
 * @subpackage Structs
 */
class ItemBestOffersType extends AbstractStructBase
{
    /**
     * The Role
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the eBay user is in the Buyer or Seller role for the corresponding Best Offer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Role = null;
    /**
     * The BestOfferArray
     * Meta information extracted from the WSDL
     * - documentation: All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if detail
     * level <code>ReturnAll</code> is used. Only returned if a Best Offer has been made.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $BestOfferArray = null;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: The item for which Best Offers are being returned. Only returned if a Best Offer has been made.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemType $Item = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ItemBestOffersType
     * @uses ItemBestOffersType::setRole()
     * @uses ItemBestOffersType::setBestOfferArray()
     * @uses ItemBestOffersType::setItem()
     * @uses ItemBestOffersType::setAny()
     * @param string $role
     * @param \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $role = null, ?\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray = null, ?\macropage\ebaysdk\trading\StructType\ItemType $item = null, $any = null)
    {
        $this
            ->setRole($role)
            ->setBestOfferArray($bestOfferArray)
            ->setItem($item)
            ->setAny($any);
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $role
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType
     */
    public function setRole(?string $role = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid($role)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType', is_array($role) ? implode(', ', $role) : var_export($role, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        
        return $this;
    }
    /**
     * Get BestOfferArray value
     * @return \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType|null
     */
    public function getBestOfferArray(): ?\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType
    {
        return $this->BestOfferArray;
    }
    /**
     * Set BestOfferArray value
     * @param \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType
     */
    public function setBestOfferArray(?\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray = null): self
    {
        $this->BestOfferArray = $bestOfferArray;
        
        return $this;
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType
     */
    public function setItem(?\macropage\ebaysdk\trading\StructType\ItemType $item = null): self
    {
        $this->Item = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType
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
