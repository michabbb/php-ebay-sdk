<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemBestOffersType StructType
 * Meta informations extracted from the WSDL
 * - documentation: All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. For the notification client usage, this response includes a single Best Offer.
 * @subpackage Structs
 */
class ItemBestOffersType extends AbstractStructBase
{
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the eBay user is in the Buyer or Seller role for the corresponding Best Offer.
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The BestOfferArray
     * Meta informations extracted from the WSDL
     * - documentation: All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if detail
     * level <code>ReturnAll</code> is used. Only returned if a Best Offer has been made.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType
     */
    public $BestOfferArray;
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: The item for which Best Offers are being returned. Only returned if a Best Offer has been made.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemBestOffersType
     * @uses ItemBestOffersType::setRole()
     * @uses ItemBestOffersType::setBestOfferArray()
     * @uses ItemBestOffersType::setItem()
     * @uses ItemBestOffersType::setAny()
     * @param string $role
     * @param \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param \DOMDocument $any
     */
    public function __construct($role = null, \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray = null, \macropage\ebaysdk\trading\StructType\ItemType $item = null, \DOMDocument $any = null)
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
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \macropage\ebaysdk\trading\EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get BestOfferArray value
     * @return \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType|null
     */
    public function getBestOfferArray()
    {
        return $this->BestOfferArray;
    }
    /**
     * Set BestOfferArray value
     * @param \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType
     */
    public function setBestOfferArray(\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray = null)
    {
        $this->BestOfferArray = $bestOfferArray;
        return $this;
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType
     */
    public function setItem(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ItemBestOffersType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
