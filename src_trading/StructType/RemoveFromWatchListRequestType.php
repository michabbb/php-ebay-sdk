<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveFromWatchListRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The call enables a user to remove one or more items from their Watch List. A user can view the items that they are currently watching by calling <b>GetMyeBayBuying</b>. <br/><br/> The user has the option of removing one or more
 * single-variation listings, one or more product variations within a multiple-variation listing, or removing all items from the Watch List.
 * @subpackage Structs
 */
class RemoveFromWatchListRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the item to be removed from the user's Watch List. Multiple <b>ItemID</b> fields can be specified in the same request, but note that the <b>RemoveAllItems</b> field or <b>VariationKey</b> container cannot be
     * specified if one or more <b>ItemID</b> fields are used. <br/><br/> | Type that represents the unique identifier for an eBay listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemID;
    /**
     * The RemoveAllItems
     * Meta informations extracted from the WSDL
     * - documentation: If this field is included and set to <code>true</code>, then all the items in the user's Watch List are removed. Note that if the <b>RemoveAllItems</b> field is specified, one or more <b>ItemID</b> fields or the <b>VariationKey</b>
     * cannot be used.
     * - minOccurs: 0
     * @var bool
     */
    public $RemoveAllItems;
    /**
     * The VariationKey
     * Meta informations extracted from the WSDL
     * - documentation: This container is used if the user want to remove one or more product variations within a multiple-variation listing. Note that if the <b>VariationKey</b> container is used, one or more <b>ItemID</b> fields or the
     * <b>RemoveAllItems</b> field cannot be used.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationKeyType[]
     */
    public $VariationKey;
    /**
     * Constructor method for RemoveFromWatchListRequestType
     * @uses RemoveFromWatchListRequestType::setItemID()
     * @uses RemoveFromWatchListRequestType::setRemoveAllItems()
     * @uses RemoveFromWatchListRequestType::setVariationKey()
     * @param string[] $itemID
     * @param bool $removeAllItems
     * @param \macropage\ebaysdk\trading\StructType\VariationKeyType[] $variationKey
     */
    public function __construct(array $itemID = array(), $removeAllItems = null, array $variationKey = array())
    {
        $this
            ->setItemID($itemID)
            ->setRemoveAllItems($removeAllItems)
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
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType
     */
    public function setItemID(array $itemID = array())
    {
        foreach ($itemID as $removeFromWatchListRequestTypeItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($removeFromWatchListRequestTypeItemIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of string, "%s" given', is_object($removeFromWatchListRequestTypeItemIDItem) ? get_class($removeFromWatchListRequestTypeItemIDItem) : gettype($removeFromWatchListRequestTypeItemIDItem)), __LINE__);
            }
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Add item to ItemID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType
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
     * Get RemoveAllItems value
     * @return bool|null
     */
    public function getRemoveAllItems()
    {
        return $this->RemoveAllItems;
    }
    /**
     * Set RemoveAllItems value
     * @param bool $removeAllItems
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType
     */
    public function setRemoveAllItems($removeAllItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($removeAllItems) && !is_bool($removeAllItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($removeAllItems)), __LINE__);
        }
        $this->RemoveAllItems = $removeAllItems;
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
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType
     */
    public function setVariationKey(array $variationKey = array())
    {
        foreach ($variationKey as $removeFromWatchListRequestTypeVariationKeyItem) {
            // validation for constraint: itemType
            if (!$removeFromWatchListRequestTypeVariationKeyItem instanceof \macropage\ebaysdk\trading\StructType\VariationKeyType) {
                throw new \InvalidArgumentException(sprintf('The VariationKey property can only contain items of \macropage\ebaysdk\trading\StructType\VariationKeyType, "%s" given', is_object($removeFromWatchListRequestTypeVariationKeyItem) ? get_class($removeFromWatchListRequestTypeVariationKeyItem) : gettype($removeFromWatchListRequestTypeVariationKeyItem)), __LINE__);
            }
        }
        $this->VariationKey = $variationKey;
        return $this;
    }
    /**
     * Add item to VariationKey value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VariationKeyType $item
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListRequestType
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
