<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NotificationDetailsArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>NotificationDetailsArray</b> container that is returned by the <b>GetNotificationsUsage</b> call. The <b>NotificationDetailsArray</b> container consists of one or more notifications that match the input criteria
 * in the call request. <br><br> This container is only returned if an <b>ItemID</b> value was specified in the request, and there were notifications related to this listing during the specified time range.
 * @subpackage Arrays
 */
class NotificationDetailsArrayType extends AbstractStructArrayBase
{
    /**
     * The NotificationDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if an <b>ItemID</b> value was specified in the request, and there were one
     * or more notifications related to this listing during the specified time range.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationDetailsType[]
     */
    public $NotificationDetails;
    /**
     * Constructor method for NotificationDetailsArrayType
     * @uses NotificationDetailsArrayType::setNotificationDetails()
     * @param \macropage\ebaysdk\trading\StructType\NotificationDetailsType[] $notificationDetails
     */
    public function __construct(array $notificationDetails = array())
    {
        $this
            ->setNotificationDetails($notificationDetails);
    }
    /**
     * Get NotificationDetails value
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType[]|null
     */
    public function getNotificationDetails()
    {
        return $this->NotificationDetails;
    }
    /**
     * Set NotificationDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationDetailsType[] $notificationDetails
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType
     */
    public function setNotificationDetails(array $notificationDetails = array())
    {
        foreach ($notificationDetails as $notificationDetailsArrayTypeNotificationDetailsItem) {
            // validation for constraint: itemType
            if (!$notificationDetailsArrayTypeNotificationDetailsItem instanceof \macropage\ebaysdk\trading\StructType\NotificationDetailsType) {
                throw new \InvalidArgumentException(sprintf('The NotificationDetails property can only contain items of \macropage\ebaysdk\trading\StructType\NotificationDetailsType, "%s" given', is_object($notificationDetailsArrayTypeNotificationDetailsItem) ? get_class($notificationDetailsArrayTypeNotificationDetailsItem) : gettype($notificationDetailsArrayTypeNotificationDetailsItem)), __LINE__);
            }
        }
        $this->NotificationDetails = $notificationDetails;
        return $this;
    }
    /**
     * Add item to NotificationDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationDetailsType $item
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType
     */
    public function addToNotificationDetails(\macropage\ebaysdk\trading\StructType\NotificationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NotificationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The NotificationDetails property can only contain items of \macropage\ebaysdk\trading\StructType\NotificationDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NotificationDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NotificationDetails
     */
    public function getAttributeName()
    {
        return 'NotificationDetails';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType
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
