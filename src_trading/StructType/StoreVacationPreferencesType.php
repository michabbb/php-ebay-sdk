<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreVacationPreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>VacationPreferences</b> container that is set in a <b>SetStorePreferences</b> call and returned in a <b>GetStorePreferences</b> call.
 * @subpackage Structs
 */
class StoreVacationPreferencesType extends AbstractStructBase
{
    /**
     * The OnVacation
     * Meta informations extracted from the WSDL
     * - documentation: In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner is going on vacation and wants to temporarily turn off all active listings. Conversely, if the
     * eBay store owner is back from vacation, this field can be included and set to <code>false</code> to turn off the vacation setting. <br/><br/> If the 'On Vacation' setting is turned on for an eBay store owner, all of the store owner's listings will be
     * hidden from search, and shoppers can not buy any items from that store. <br/><br/> In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if the 'On Vacation' setting is turned on, or returned as <code>false</code> if the
     * 'On Vacation' setting is turned off.
     * - minOccurs: 0
     * @var bool
     */
    public $OnVacation;
    /**
     * The ReturnDate
     * Meta informations extracted from the WSDL
     * - documentation: In a <b>SetStorePreferences</b> call, this field should be included in the request if the eBay store owner wants to inform shoppers when he/she will return from vacation. The seller should make sure they use the proper date-time
     * format, as specified in the <b>dateTime</b> simple type. If a date is specified in this field, the following behavior can be expected:<br/> <ul> <li>The 'On Vacation' setting (if it was turned on) will automatically be turned off when this date is
     * reached</li> <li>This return date will be displayed in the listing if the <b>VacationPreferences.MessageItem</b> field is set to <code>true</code></li> <li>This return date will be displayed on the seller's store page if the
     * <b>VacationPreferences.MessageStore</b> field is set to <code>true</code></li> </ul> In a <b>GetStorePreferences</b> call, this field is returned if it was set.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnDate;
    /**
     * The HideFixedPriceStoreItems
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated, as it was used for Store Inventory listings, which are no longer supported on any eBay site.
     * - minOccurs: 0
     * @var bool
     */
    public $HideFixedPriceStoreItems;
    /**
     * The MessageItem
     * Meta informations extracted from the WSDL
     * - documentation: In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants information regarding the vacation to be posted on all of the seller's active listings. The
     * following information will be displayed if this field is set to <code>true</code>:<br/> <ul> <li>A note about the seller being on vacation (and items being unavailable for purchase) if the <b>OnVacation</b> field is set to <code>true</code></li>
     * <li>The date when the seller will return from vacation if the <b>ReturnDate</b> was set</li> </ul> If this field is included in the <b>SetStorePreferences</b> request and set to <code>false</code>, no information regarding the seller's vacation will
     * appear on active listings. <br/><br/> In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if information regarding the vacation is being displayed on active listings, or returned as <code>false</code> if no information
     * regarding the vacation is being displayed on active listings.
     * - minOccurs: 0
     * @var bool
     */
    public $MessageItem;
    /**
     * The MessageStore
     * Meta informations extracted from the WSDL
     * - documentation: In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants information regarding the vacation to be posted on store pages. The following information
     * will be displayed if this field is set to <code>true</code>:<br/> <ul> <li>A note about the seller being on vacation (and items being unavailable for purchase) if the <b>OnVacation</b> field is set to <code>true</code></li> <li>The date when the
     * seller will return from vacation if the <b>ReturnDate</b> was set</li> <li>A customized message from the seller regarding this vacation if the seller included a customized message through the <b>MessageStoreCustomText</b> field and the
     * <b>DisplayMessageStoreCustomText</b> was set to </code>true</code>. If the <b>DisplayMessageStoreCustomText</b> is set to </code>false</code>, the generic 'On Vacation' and return date (if available) will be displayed instead.</li> </ul> In a
     * <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if information regarding the vacation is being displayed on the store page, or returned as <code>false</code> if no information regarding the vacation is being displayed on
     * the store page.
     * - minOccurs: 0
     * @var bool
     */
    public $MessageStore;
    /**
     * The DisplayMessageStoreCustomText
     * Meta informations extracted from the WSDL
     * - documentation: In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants a custom message regarding a vacation to display on store pages. For this field to have an
     * affect, the seller will create their custom message regarding the vacation through the <b>MessageStoreCustomText</b> field. If this field is turned off (or <code>false</code>), instead of a custom message, a generic 'On Vacation' message and the
     * return date (if available) will be posted to the Store pages. <br/><br/> In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if the seller wants a customized vacation message to be displayed on the store page, or
     * returned as <code>false</code> if the seller wants the generic 'On Vacation' message and the return date (if available) to be posted to the Store pages.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayMessageStoreCustomText;
    /**
     * The MessageStoreCustomText
     * Meta informations extracted from the WSDL
     * - documentation: In a <b>SetStorePreferences</b> call, this field should be included in the request, and the seller will create the customized vacation message in this field. HTML markup can be used in this field. This vacation message will appear on
     * store pages as long as the <b>DisplayMessageStoreCustomText</b> field is set to <code>true</code>. If the <b>DisplayMessageStoreCustomText</b> field is set to <code>false</code>, any text provided through the <b>MessageStoreCustomText</b> will not be
     * displayed on store pages. <br/><br/> In a <b>GetStorePreferences</b> call, this field is returned if it is set.
     * - minOccurs: 0
     * @var string
     */
    public $MessageStoreCustomText;
    /**
     * Constructor method for StoreVacationPreferencesType
     * @uses StoreVacationPreferencesType::setOnVacation()
     * @uses StoreVacationPreferencesType::setReturnDate()
     * @uses StoreVacationPreferencesType::setHideFixedPriceStoreItems()
     * @uses StoreVacationPreferencesType::setMessageItem()
     * @uses StoreVacationPreferencesType::setMessageStore()
     * @uses StoreVacationPreferencesType::setDisplayMessageStoreCustomText()
     * @uses StoreVacationPreferencesType::setMessageStoreCustomText()
     * @param bool $onVacation
     * @param string $returnDate
     * @param bool $hideFixedPriceStoreItems
     * @param bool $messageItem
     * @param bool $messageStore
     * @param bool $displayMessageStoreCustomText
     * @param string $messageStoreCustomText
     */
    public function __construct($onVacation = null, $returnDate = null, $hideFixedPriceStoreItems = null, $messageItem = null, $messageStore = null, $displayMessageStoreCustomText = null, $messageStoreCustomText = null)
    {
        $this
            ->setOnVacation($onVacation)
            ->setReturnDate($returnDate)
            ->setHideFixedPriceStoreItems($hideFixedPriceStoreItems)
            ->setMessageItem($messageItem)
            ->setMessageStore($messageStore)
            ->setDisplayMessageStoreCustomText($displayMessageStoreCustomText)
            ->setMessageStoreCustomText($messageStoreCustomText);
    }
    /**
     * Get OnVacation value
     * @return bool|null
     */
    public function getOnVacation()
    {
        return $this->OnVacation;
    }
    /**
     * Set OnVacation value
     * @param bool $onVacation
     * @return \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType
     */
    public function setOnVacation($onVacation = null)
    {
        // validation for constraint: boolean
        if (!is_null($onVacation) && !is_bool($onVacation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($onVacation)), __LINE__);
        }
        $this->OnVacation = $onVacation;
        return $this;
    }
    /**
     * Get ReturnDate value
     * @return string|null
     */
    public function getReturnDate()
    {
        return $this->ReturnDate;
    }
    /**
     * Set ReturnDate value
     * @param string $returnDate
     * @return \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType
     */
    public function setReturnDate($returnDate = null)
    {
        // validation for constraint: string
        if (!is_null($returnDate) && !is_string($returnDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDate)), __LINE__);
        }
        $this->ReturnDate = $returnDate;
        return $this;
    }
    /**
     * Get HideFixedPriceStoreItems value
     * @return bool|null
     */
    public function getHideFixedPriceStoreItems()
    {
        return $this->HideFixedPriceStoreItems;
    }
    /**
     * Set HideFixedPriceStoreItems value
     * @param bool $hideFixedPriceStoreItems
     * @return \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType
     */
    public function setHideFixedPriceStoreItems($hideFixedPriceStoreItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($hideFixedPriceStoreItems) && !is_bool($hideFixedPriceStoreItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hideFixedPriceStoreItems)), __LINE__);
        }
        $this->HideFixedPriceStoreItems = $hideFixedPriceStoreItems;
        return $this;
    }
    /**
     * Get MessageItem value
     * @return bool|null
     */
    public function getMessageItem()
    {
        return $this->MessageItem;
    }
    /**
     * Set MessageItem value
     * @param bool $messageItem
     * @return \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType
     */
    public function setMessageItem($messageItem = null)
    {
        // validation for constraint: boolean
        if (!is_null($messageItem) && !is_bool($messageItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($messageItem)), __LINE__);
        }
        $this->MessageItem = $messageItem;
        return $this;
    }
    /**
     * Get MessageStore value
     * @return bool|null
     */
    public function getMessageStore()
    {
        return $this->MessageStore;
    }
    /**
     * Set MessageStore value
     * @param bool $messageStore
     * @return \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType
     */
    public function setMessageStore($messageStore = null)
    {
        // validation for constraint: boolean
        if (!is_null($messageStore) && !is_bool($messageStore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($messageStore)), __LINE__);
        }
        $this->MessageStore = $messageStore;
        return $this;
    }
    /**
     * Get DisplayMessageStoreCustomText value
     * @return bool|null
     */
    public function getDisplayMessageStoreCustomText()
    {
        return $this->DisplayMessageStoreCustomText;
    }
    /**
     * Set DisplayMessageStoreCustomText value
     * @param bool $displayMessageStoreCustomText
     * @return \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType
     */
    public function setDisplayMessageStoreCustomText($displayMessageStoreCustomText = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayMessageStoreCustomText) && !is_bool($displayMessageStoreCustomText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($displayMessageStoreCustomText)), __LINE__);
        }
        $this->DisplayMessageStoreCustomText = $displayMessageStoreCustomText;
        return $this;
    }
    /**
     * Get MessageStoreCustomText value
     * @return string|null
     */
    public function getMessageStoreCustomText()
    {
        return $this->MessageStoreCustomText;
    }
    /**
     * Set MessageStoreCustomText value
     * @param string $messageStoreCustomText
     * @return \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType
     */
    public function setMessageStoreCustomText($messageStoreCustomText = null)
    {
        // validation for constraint: string
        if (!is_null($messageStoreCustomText) && !is_string($messageStoreCustomText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageStoreCustomText)), __LINE__);
        }
        $this->MessageStoreCustomText = $messageStoreCustomText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType
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
