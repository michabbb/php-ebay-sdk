<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for StoreSubscriptionArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Set of eBay Store subscription levels.
 * @subpackage Arrays
 */
class StoreSubscriptionArrayType extends AbstractStructArrayBase
{
    /**
     * The Subscription
     * Meta information extracted from the WSDL
     * - documentation: A Store subscription level.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreSubscriptionType[]
     */
    protected ?array $Subscription = null;
    /**
     * Constructor method for StoreSubscriptionArrayType
     * @uses StoreSubscriptionArrayType::setSubscription()
     * @param \macropage\ebaysdk\trading\StructType\StoreSubscriptionType[] $subscription
     */
    public function __construct(?array $subscription = null)
    {
        $this
            ->setSubscription($subscription);
    }
    /**
     * Get Subscription value
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType[]
     */
    public function getSubscription(): ?array
    {
        return $this->Subscription;
    }
    /**
     * This method is responsible for validating the values passed to the setSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubscription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubscriptionForArrayConstraintsFromSetSubscription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeSubscriptionArrayTypeSubscriptionItem) {
            // validation for constraint: itemType
            if (!$storeSubscriptionArrayTypeSubscriptionItem instanceof \macropage\ebaysdk\trading\StructType\StoreSubscriptionType) {
                $invalidValues[] = is_object($storeSubscriptionArrayTypeSubscriptionItem) ? get_class($storeSubscriptionArrayTypeSubscriptionItem) : sprintf('%s(%s)', gettype($storeSubscriptionArrayTypeSubscriptionItem), var_export($storeSubscriptionArrayTypeSubscriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Subscription property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreSubscriptionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Subscription value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreSubscriptionType[] $subscription
     * @return \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType
     */
    public function setSubscription(?array $subscription = null): self
    {
        // validation for constraint: array
        if ('' !== ($subscriptionArrayErrorMessage = self::validateSubscriptionForArrayConstraintsFromSetSubscription($subscription))) {
            throw new InvalidArgumentException($subscriptionArrayErrorMessage, __LINE__);
        }
        $this->Subscription = $subscription;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\StoreSubscriptionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\StoreSubscriptionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\StoreSubscriptionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\StoreSubscriptionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\StoreSubscriptionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreSubscriptionType $item
     * @return \macropage\ebaysdk\trading\ArrayType\StoreSubscriptionArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreSubscriptionType) {
            throw new InvalidArgumentException(sprintf('The Subscription property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreSubscriptionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Subscription
     */
    public function getAttributeName(): string
    {
        return 'Subscription';
    }
}
