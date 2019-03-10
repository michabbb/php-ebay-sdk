<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayRemindersRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base request type of the <b>GetMyeBayReminders</b> call. This call returns the total counts for My eBay Buying and/or My eBay Selling Reminders for a user.
 * @subpackage Structs
 */
class GetMyeBayRemindersRequestType extends AbstractRequestType
{
    /**
     * The BuyingReminders
     * Meta informations extracted from the WSDL
     * - documentation: This container should be included if the user wishes to retrieve the counts of My eBay Buying Reminders. Counts will only be retrieved for My eBay Buying Reminders that the user received.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReminderCustomizationType
     */
    public $BuyingReminders;
    /**
     * The SellingReminders
     * Meta informations extracted from the WSDL
     * - documentation: This container should be included if the user wishes to retrieve the counts of My eBay Selling Reminders. Counts will only be retrieved for My eBay Selling Reminders that the user received.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReminderCustomizationType
     */
    public $SellingReminders;
    /**
     * Constructor method for GetMyeBayRemindersRequestType
     * @uses GetMyeBayRemindersRequestType::setBuyingReminders()
     * @uses GetMyeBayRemindersRequestType::setSellingReminders()
     * @param \macropage\ebaysdk\trading\StructType\ReminderCustomizationType $buyingReminders
     * @param \macropage\ebaysdk\trading\StructType\ReminderCustomizationType $sellingReminders
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ReminderCustomizationType $buyingReminders = null, \macropage\ebaysdk\trading\StructType\ReminderCustomizationType $sellingReminders = null)
    {
        $this
            ->setBuyingReminders($buyingReminders)
            ->setSellingReminders($sellingReminders);
    }
    /**
     * Get BuyingReminders value
     * @return \macropage\ebaysdk\trading\StructType\ReminderCustomizationType|null
     */
    public function getBuyingReminders()
    {
        return $this->BuyingReminders;
    }
    /**
     * Set BuyingReminders value
     * @param \macropage\ebaysdk\trading\StructType\ReminderCustomizationType $buyingReminders
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersRequestType
     */
    public function setBuyingReminders(\macropage\ebaysdk\trading\StructType\ReminderCustomizationType $buyingReminders = null)
    {
        $this->BuyingReminders = $buyingReminders;
        return $this;
    }
    /**
     * Get SellingReminders value
     * @return \macropage\ebaysdk\trading\StructType\ReminderCustomizationType|null
     */
    public function getSellingReminders()
    {
        return $this->SellingReminders;
    }
    /**
     * Set SellingReminders value
     * @param \macropage\ebaysdk\trading\StructType\ReminderCustomizationType $sellingReminders
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersRequestType
     */
    public function setSellingReminders(\macropage\ebaysdk\trading\StructType\ReminderCustomizationType $sellingReminders = null)
    {
        $this->SellingReminders = $sellingReminders;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersRequestType
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
