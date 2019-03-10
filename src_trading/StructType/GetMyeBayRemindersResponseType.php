<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayRemindersResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base response type of the <b>GetMyeBayReminders</b> call. This call returns the total counts for My eBay Buying and/or My eBay Selling Reminders for a user.
 * @subpackage Structs
 */
class GetMyeBayRemindersResponseType extends AbstractResponseType
{
    /**
     * The BuyingReminders
     * Meta informations extracted from the WSDL
     * - documentation: This container is returned if the user included the <b>BuyingReminders</b> container in the call request and set the <b>BuyingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Buying
     * Reminders that the user received during the number of days specified in the <b>BuyingReminders.DurationInDays</b> field in the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public $BuyingReminders;
    /**
     * The SellingReminders
     * Meta informations extracted from the WSDL
     * - documentation: This container is returned if the user included the <b>SellingReminders</b> container in the call request and set the <b>SellingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Selling
     * Reminders that the user received during the number of days specified in the <b>SellingReminders.DurationInDays</b> field in the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public $SellingReminders;
    /**
     * Constructor method for GetMyeBayRemindersResponseType
     * @uses GetMyeBayRemindersResponseType::setBuyingReminders()
     * @uses GetMyeBayRemindersResponseType::setSellingReminders()
     * @param \macropage\ebaysdk\trading\StructType\RemindersType $buyingReminders
     * @param \macropage\ebaysdk\trading\StructType\RemindersType $sellingReminders
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\RemindersType $buyingReminders = null, \macropage\ebaysdk\trading\StructType\RemindersType $sellingReminders = null)
    {
        $this
            ->setBuyingReminders($buyingReminders)
            ->setSellingReminders($sellingReminders);
    }
    /**
     * Get BuyingReminders value
     * @return \macropage\ebaysdk\trading\StructType\RemindersType|null
     */
    public function getBuyingReminders()
    {
        return $this->BuyingReminders;
    }
    /**
     * Set BuyingReminders value
     * @param \macropage\ebaysdk\trading\StructType\RemindersType $buyingReminders
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersResponseType
     */
    public function setBuyingReminders(\macropage\ebaysdk\trading\StructType\RemindersType $buyingReminders = null)
    {
        $this->BuyingReminders = $buyingReminders;
        return $this;
    }
    /**
     * Get SellingReminders value
     * @return \macropage\ebaysdk\trading\StructType\RemindersType|null
     */
    public function getSellingReminders()
    {
        return $this->SellingReminders;
    }
    /**
     * Set SellingReminders value
     * @param \macropage\ebaysdk\trading\StructType\RemindersType $sellingReminders
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersResponseType
     */
    public function setSellingReminders(\macropage\ebaysdk\trading\StructType\RemindersType $sellingReminders = null)
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
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersResponseType
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
