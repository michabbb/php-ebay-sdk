<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddToWatchListRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Adds one or more order line items to the eBay user's Watch List. An auction item or a single-variation, fixed-price listing is identified with an <b>ItemID</b> value. To add a specific item variation to the Watch List from within a
 * multi-variation, fixed-price listing, the user will use the <b>VariationKey</b> container instead.
 * @subpackage Structs
 */
class AddToWatchListRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The <b>ItemID</b> of the item that is to be added to the eBay user's Watch List. The item must be a currently active item, and the total number of items in the user's Watch List (after the items in the request have been added) cannot
     * exceed the maximum allowed number of Watch List items. One or more <b>ItemID</b> fields can be specified. A separate error node will be returned for each item that was not successfully added to the Watch List.<br> <br> The user must use either one or
     * more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call. | Type that represents the unique identifier for an eBay listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemID;
    /**
     * The VariationKey
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to specify one or more item variations in a multi-variation, fixed-price listing that you want to add to the Watch List. The listing is identified through the <b>ItemID</b> value and each item variation
     * existing within that listing is identified through a <b>VariationSpecifics.NameValueList</b> container. <br> <br> The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both
     * of these entities in the same call.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationKeyType[]
     */
    public $VariationKey;
    /**
     * Constructor method for AddToWatchListRequestType
     * @uses AddToWatchListRequestType::setItemID()
     * @uses AddToWatchListRequestType::setVariationKey()
     * @param string[] $itemID
     * @param \macropage\ebaysdk\trading\StructType\VariationKeyType[] $variationKey
     */
    public function __construct(array $itemID = array(), array $variationKey = array())
    {
        $this
            ->setItemID($itemID)
            ->setVariationKey($variationKey);
    }
    /**
     * Get ItemID value
     * @return string[]|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @throws \InvalidArgumentException
     * @param string[] $itemID
     * @return \macropage\ebaysdk\trading\StructType\AddToWatchListRequestType
     */
    public function setItemID(array $itemID = array())
    {
        foreach ($itemID as $addToWatchListRequestTypeItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($addToWatchListRequestTypeItemIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of string, "%s" given', is_object($addToWatchListRequestTypeItemIDItem) ? get_class($addToWatchListRequestTypeItemIDItem) : gettype($addToWatchListRequestTypeItemIDItem)), __LINE__);
            }
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Add item to ItemID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\AddToWatchListRequestType
     */
    public function addToItemID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemID[] = $item;
        return $this;
    }
    /**
     * Get VariationKey value
     * @return \macropage\ebaysdk\trading\StructType\VariationKeyType[]|null
     */
    public function getVariationKey()
    {
        return $this->VariationKey;
    }
    /**
     * Set VariationKey value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VariationKeyType[] $variationKey
     * @return \macropage\ebaysdk\trading\StructType\AddToWatchListRequestType
     */
    public function setVariationKey(array $variationKey = array())
    {
        foreach ($variationKey as $addToWatchListRequestTypeVariationKeyItem) {
            // validation for constraint: itemType
            if (!$addToWatchListRequestTypeVariationKeyItem instanceof \macropage\ebaysdk\trading\StructType\VariationKeyType) {
                throw new \InvalidArgumentException(sprintf('The VariationKey property can only contain items of \macropage\ebaysdk\trading\StructType\VariationKeyType, "%s" given', is_object($addToWatchListRequestTypeVariationKeyItem) ? get_class($addToWatchListRequestTypeVariationKeyItem) : gettype($addToWatchListRequestTypeVariationKeyItem)), __LINE__);
            }
        }
        $this->VariationKey = $variationKey;
        return $this;
    }
    /**
     * Add item to VariationKey value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VariationKeyType $item
     * @return \macropage\ebaysdk\trading\StructType\AddToWatchListRequestType
     */
    public function addToVariationKey(\macropage\ebaysdk\trading\StructType\VariationKeyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VariationKeyType) {
            throw new \InvalidArgumentException(sprintf('The VariationKey property can only contain items of \macropage\ebaysdk\trading\StructType\VariationKeyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VariationKey[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddToWatchListRequestType
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
