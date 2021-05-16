<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyeBayRemindersResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type of the <b>GetMyeBayReminders</b> call. This call returns the total counts for My eBay Buying and/or My eBay Selling Reminders for a user.
 * @subpackage Structs
 */
class GetMyeBayRemindersResponseType extends AbstractResponseType
{
    /**
     * The BuyingReminders
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if the user included the <b>BuyingReminders</b> container in the call request and set the <b>BuyingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Buying
     * Reminders that the user received during the number of days specified in the <b>BuyingReminders.DurationInDays</b> field in the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RemindersType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RemindersType $BuyingReminders = null;
    /**
     * The SellingReminders
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if the user included the <b>SellingReminders</b> container in the call request and set the <b>SellingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Selling
     * Reminders that the user received during the number of days specified in the <b>SellingReminders.DurationInDays</b> field in the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RemindersType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RemindersType $SellingReminders = null;
    /**
     * Constructor method for GetMyeBayRemindersResponseType
     * @uses GetMyeBayRemindersResponseType::setBuyingReminders()
     * @uses GetMyeBayRemindersResponseType::setSellingReminders()
     * @param \macropage\ebaysdk\trading\StructType\RemindersType $buyingReminders
     * @param \macropage\ebaysdk\trading\StructType\RemindersType $sellingReminders
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\RemindersType $buyingReminders = null, ?\macropage\ebaysdk\trading\StructType\RemindersType $sellingReminders = null)
    {
        $this
            ->setBuyingReminders($buyingReminders)
            ->setSellingReminders($sellingReminders);
    }
    /**
     * Get BuyingReminders value
     * @return \macropage\ebaysdk\trading\StructType\RemindersType|null
     */
    public function getBuyingReminders(): ?\macropage\ebaysdk\trading\StructType\RemindersType
    {
        return $this->BuyingReminders;
    }
    /**
     * Set BuyingReminders value
     * @param \macropage\ebaysdk\trading\StructType\RemindersType $buyingReminders
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersResponseType
     */
    public function setBuyingReminders(?\macropage\ebaysdk\trading\StructType\RemindersType $buyingReminders = null): self
    {
        $this->BuyingReminders = $buyingReminders;
        
        return $this;
    }
    /**
     * Get SellingReminders value
     * @return \macropage\ebaysdk\trading\StructType\RemindersType|null
     */
    public function getSellingReminders(): ?\macropage\ebaysdk\trading\StructType\RemindersType
    {
        return $this->SellingReminders;
    }
    /**
     * Set SellingReminders value
     * @param \macropage\ebaysdk\trading\StructType\RemindersType $sellingReminders
     * @return \macropage\ebaysdk\trading\StructType\GetMyeBayRemindersResponseType
     */
    public function setSellingReminders(?\macropage\ebaysdk\trading\StructType\RemindersType $sellingReminders = null): self
    {
        $this->SellingReminders = $sellingReminders;
        
        return $this;
    }
}
