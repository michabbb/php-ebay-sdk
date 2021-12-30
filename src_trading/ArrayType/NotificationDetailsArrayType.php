<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NotificationDetailsArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>NotificationDetailsArray</b> container that is returned by the <b>GetNotificationsUsage</b> call. The <b>NotificationDetailsArray</b> container consists of one or more notifications that match the input criteria
 * in the call request. <br><br> This container is only returned if an <b>ItemID</b> value was specified in the request, and there were notifications related to this listing during the specified time range.
 * @subpackage Arrays
 */
class NotificationDetailsArrayType extends AbstractStructArrayBase
{
    /**
     * The NotificationDetails
     * Meta information extracted from the WSDL
     * - documentation: Each <b>NotificationDetails</b> container consists of detailed information about one notification. <b>NotificationDetails</b> container(s) are only returned if an <b>ItemID</b> value was specified in the request, and there were one
     * or more notifications related to this listing during the specified time range.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NotificationDetailsType[]
     */
    protected ?array $NotificationDetails = null;
    /**
     * Constructor method for NotificationDetailsArrayType
     * @uses NotificationDetailsArrayType::setNotificationDetails()
     * @param \macropage\ebaysdk\trading\StructType\NotificationDetailsType[] $notificationDetails
     */
    public function __construct(?array $notificationDetails = null)
    {
        $this
            ->setNotificationDetails($notificationDetails);
    }
    /**
     * Get NotificationDetails value
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType[]
     */
    public function getNotificationDetails(): ?array
    {
        return $this->NotificationDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setNotificationDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotificationDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationDetailsForArrayConstraintsFromSetNotificationDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $notificationDetailsArrayTypeNotificationDetailsItem) {
            // validation for constraint: itemType
            if (!$notificationDetailsArrayTypeNotificationDetailsItem instanceof \macropage\ebaysdk\trading\StructType\NotificationDetailsType) {
                $invalidValues[] = is_object($notificationDetailsArrayTypeNotificationDetailsItem) ? get_class($notificationDetailsArrayTypeNotificationDetailsItem) : sprintf('%s(%s)', gettype($notificationDetailsArrayTypeNotificationDetailsItem), var_export($notificationDetailsArrayTypeNotificationDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NotificationDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\NotificationDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NotificationDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationDetailsType[] $notificationDetails
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType
     */
    public function setNotificationDetails(?array $notificationDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($notificationDetailsArrayErrorMessage = self::validateNotificationDetailsForArrayConstraintsFromSetNotificationDetails($notificationDetails))) {
            throw new InvalidArgumentException($notificationDetailsArrayErrorMessage, __LINE__);
        }
        $this->NotificationDetails = $notificationDetails;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\NotificationDetailsType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\NotificationDetailsType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\NotificationDetailsType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\NotificationDetailsType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\NotificationDetailsType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\NotificationDetailsType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NotificationDetailsType $item
     * @return \macropage\ebaysdk\trading\ArrayType\NotificationDetailsArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NotificationDetailsType) {
            throw new InvalidArgumentException(sprintf('The NotificationDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\NotificationDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NotificationDetails
     */
    public function getAttributeName(): string
    {
        return 'NotificationDetails';
    }
}
