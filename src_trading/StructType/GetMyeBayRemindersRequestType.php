<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayRemindersRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type of the <b>GetMyeBayReminders</b> call. This call returns the total counts for My eBay Buying and/or My eBay Selling Reminders for a user.
 * @subpackage Structs
 */
class GetMyeBayRemindersRequestType extends AbstractRequestType
{
    /**
     * The BuyingReminders
     * Meta information extracted from the WSDL
     * - documentation: This container should be included if the user wishes to retrieve the counts of My eBay Buying Reminders. Counts will only be retrieved for My eBay Buying Reminders that the user received.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReminderCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ReminderCustomizationType $BuyingReminders = null;
    /**
     * The SellingReminders
     * Meta information extracted from the WSDL
     * - documentation: This container should be included if the user wishes to retrieve the counts of My eBay Selling Reminders. Counts will only be retrieved for My eBay Selling Reminders that the user received.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReminderCustomizationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ReminderCustomizationType $SellingReminders = null;
    /**
     * Constructor method for GetMyeBayRemindersRequestType
     * @uses GetMyeBayRemindersRequestType::setBuyingReminders()
     * @uses GetMyeBayRemindersRequestType::setSellingReminders()
     * @param \macropage\ebaysdk\trading\StructType\ReminderCustomizationType $buyingReminders
     * @param \macropage\ebaysdk\trading\StructType\ReminderCustomizationType $sellingReminders
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ReminderCustomizationType $buyingReminders = null, ?\macropage\ebaysdk\trading\StructType\ReminderCustomizationType $sellingReminders = null)
    {
        $this
            ->setBuyingReminders($buyingReminders)
            ->setSellingReminders($sellingReminders);
    }
    /**
     * Get BuyingReminders value
     * @return \macropage\ebaysdk\trading\StructType\ReminderCustomizationType|null
     */
    public function getBuyingReminders(): ?\macropage\ebaysdk\trading\StructType\ReminderCustomizationType
    {
        return $this->BuyingReminders;
    }
    /**
     * Set BuyingReminders value
     * @param \macropage\ebaysdk\trading\StructType\ReminderCustomizationType $buyingReminders
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersRequestType
     */
    public function setBuyingReminders(?\macropage\ebaysdk\trading\StructType\ReminderCustomizationType $buyingReminders = null): self
    {
        $this->BuyingReminders = $buyingReminders;
        
        return $this;
    }
    /**
     * Get SellingReminders value
     * @return \macropage\ebaysdk\trading\StructType\ReminderCustomizationType|null
     */
    public function getSellingReminders(): ?\macropage\ebaysdk\trading\StructType\ReminderCustomizationType
    {
        return $this->SellingReminders;
    }
    /**
     * Set SellingReminders value
     * @param \macropage\ebaysdk\trading\StructType\ReminderCustomizationType $sellingReminders
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersRequestType
     */
    public function setSellingReminders(?\macropage\ebaysdk\trading\StructType\ReminderCustomizationType $sellingReminders = null): self
    {
        $this->SellingReminders = $sellingReminders;
        
        return $this;
    }
}
