<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NotificationEnableArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>UserDeliveryPreferenceArray</b> container of the <b>SetNotificationPreferences</b> and <b>GetNotificationPreferences</b> calls. The <b>UserDeliveryPreferenceArray</b> container consists of one or more
 * notifications and whether or not each notification is enabled or disabled.
 * @subpackage Arrays
 */
class NotificationEnableArrayType extends AbstractStructArrayBase
{
    /**
     * The NotificationEnable
     * Meta informations extracted from the WSDL
     * - documentation: In a <b>SetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is used for each notification that the user either wants to subsribe to or disable. <br><br> If a <b>UserDeliveryPreferenceArray</b> container is
     * used, at least one <b>NotificationEnable</b> container must be specified. <br><br> In a <b>GetNotificationPreferences</b> call, one <b>NotificationEnable</b> container is returned for each notification that the user has set a preference on - enabled
     * or disabled.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationEnableType[]
     */
    public $NotificationEnable;
    /**
     * Constructor method for NotificationEnableArrayType
     * @uses NotificationEnableArrayType::setNotificationEnable()
     * @param \macropage\ebaysdk\trading\StructType\NotificationEnableType[] $notificationEnable
     */
    public function __construct(array $notificationEnable = array())
    {
        $this
            ->setNotificationEnable($notificationEnable);
    }
    /**
     * Get NotificationEnable value
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType[]|null
     */
    public function getNotificationEnable()
    {
        return $this->NotificationEnable;
    }
    /**
     * Set NotificationEnable value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationEnableType[] $notificationEnable
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType
     */
    public function setNotificationEnable(array $notificationEnable = array())
    {
        foreach ($notificationEnable as $notificationEnableArrayTypeNotificationEnableItem) {
            // validation for constraint: itemType
            if (!$notificationEnableArrayTypeNotificationEnableItem instanceof \macropage\ebaysdk\trading\StructType\NotificationEnableType) {
                throw new \InvalidArgumentException(sprintf('The NotificationEnable property can only contain items of \macropage\ebaysdk\trading\StructType\NotificationEnableType, "%s" given', is_object($notificationEnableArrayTypeNotificationEnableItem) ? get_class($notificationEnableArrayTypeNotificationEnableItem) : gettype($notificationEnableArrayTypeNotificationEnableItem)), __LINE__);
            }
        }
        $this->NotificationEnable = $notificationEnable;
        return $this;
    }
    /**
     * Add item to NotificationEnable value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationEnableType $item
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType
     */
    public function addToNotificationEnable(\macropage\ebaysdk\trading\StructType\NotificationEnableType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NotificationEnableType) {
            throw new \InvalidArgumentException(sprintf('The NotificationEnable property can only contain items of \macropage\ebaysdk\trading\StructType\NotificationEnableType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NotificationEnable[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\NotificationEnableType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NotificationEnable
     */
    public function getAttributeName()
    {
        return 'NotificationEnable';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationEnableArrayType
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
