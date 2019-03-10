<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreSubscriptionArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Set of eBay Store subscription levels.
 * @subpackage Arrays
 */
class StoreSubscriptionArrayType extends AbstractStructArrayBase
{
    /**
     * The Subscription
     * Meta informations extracted from the WSDL
     * - documentation: A Store subscription level.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreSubscriptionType[]
     */
    public $Subscription;
    /**
     * Constructor method for StoreSubscriptionArrayType
     * @uses StoreSubscriptionArrayType::setSubscription()
     * @param \macropage\ebaysdk\trading\StructType\StoreSubscriptionType[] $subscription
     */
    public function __construct(array $subscription = array())
    {
        $this
            ->setSubscription($subscription);
    }
    /**
     * Get Subscription value
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType[]|null
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }
    /**
     * Set Subscription value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreSubscriptionType[] $subscription
     * @return \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType
     */
    public function setSubscription(array $subscription = array())
    {
        foreach ($subscription as $storeSubscriptionArrayTypeSubscriptionItem) {
            // validation for constraint: itemType
            if (!$storeSubscriptionArrayTypeSubscriptionItem instanceof \macropage\ebaysdk\trading\StructType\StoreSubscriptionType) {
                throw new \InvalidArgumentException(sprintf('The Subscription property can only contain items of \macropage\ebaysdk\trading\StructType\StoreSubscriptionType, "%s" given', is_object($storeSubscriptionArrayTypeSubscriptionItem) ? get_class($storeSubscriptionArrayTypeSubscriptionItem) : gettype($storeSubscriptionArrayTypeSubscriptionItem)), __LINE__);
            }
        }
        $this->Subscription = $subscription;
        return $this;
    }
    /**
     * Add item to Subscription value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreSubscriptionType $item
     * @return \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType
     */
    public function addToSubscription(\macropage\ebaysdk\trading\StructType\StoreSubscriptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreSubscriptionType) {
            throw new \InvalidArgumentException(sprintf('The Subscription property can only contain items of \macropage\ebaysdk\trading\StructType\StoreSubscriptionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Subscription[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Subscription
     */
    public function getAttributeName()
    {
        return 'Subscription';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType
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
