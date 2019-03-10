<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnpaidItemAssistancePreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the <b>UnpaidItemAssistancePreferences</b> container. This container is used in <b>SetUserPreferences</b> to set the preferences related to the <b>Unpaid Item Assistant</b> feature. The
 * <b>UnpaidItemAssistancePreferences</b> container is also returned in <b>GetUserPreferences</b> (if the <b>ShowUnpaidItemAssistancePreference</b> flag is included and set to true in the request). <br/><br/> See the <a
 * href="http://pages.ebay.com/help/sell/unpaid-item-assistant.html">Using Unpaid Item Assistant</a> Help topic for more information about setting up and using the Unpaid Item Assistant feature.
 * @subpackage Structs
 */
class UnpaidItemAssistancePreferencesType extends AbstractStructBase
{
    /**
     * The DelayBeforeOpeningDispute
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the number of days that should elapse before the Unpaid Item Assistant mechanism opens an Unpaid Item case on behalf of the seller. <b>Valid values are</b>: 4, 8, 16, 24, and 32 (days). <br/><br/> This field is
     * ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay. <br/>
     * - minOccurs: 0
     * @var int
     */
    public $DelayBeforeOpeningDispute;
    /**
     * The OptInStatus
     * Meta informations extracted from the WSDL
     * - documentation: Flag to indicate whether or not the Unpaid Item Assistant mechanism is turned on for the seller. Through the Unpaid Item Assistant mechanism, eBay can automatically file Unpaid Item cases on behalf of the seller. <br/><br/> The
     * Unpaid Item Assistant feature also has options to automatically relist disputed items, to automatically request a PayPal Giving Fund donation refund (for eBay for Charity listings only), or to create an 'Exclusion list' of buyers who are not subject
     * to the automatic filing of an Unpaid Item case.
     * - minOccurs: 0
     * @var bool
     */
    public $OptInStatus;
    /**
     * The AutoRelist
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Flag to indicate whether or not the seller wants eBay to automatically relist items after corresponding Unpaid Item cases are opened and closed through the Unpaid Item Assistant mechanism without payment. For a multiple-quantity
     * listing, the quantity is adjusted if <b>AutoRelist</b> is set to <code>true</code>. <br/><br/> This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into
     * the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
     * - minOccurs: 0
     * @var bool
     */
    public $AutoRelist;
    /**
     * The RemoveAllExcludedUsers
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: This field should be included and set to <code>true</code> if the seller wants to clear all users from the Unpaid Item Assistant Exclusion list. The Exclusion list can be viewed from the Unpaid Item Assistant Preferences in My eBay.
     * Excluded users are not subject to the automatic filing of Unpaid Item cases. The seller can still open Unpaid Item cases against excluded users, but these cases must be opened manually. <br/><br/> Users can be added to Exclusion list through the
     * <b>ExcludedUser</b> field. The <b>RemoveAllExcludedUsers</b> field is ignored if the <b>OptInStatus</b> flag is included and set to false in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item
     * Assistant Preferences on My eBay.
     * - minOccurs: 0
     * @var bool
     */
    public $RemoveAllExcludedUsers;
    /**
     * The ExcludedUser
     * Meta informations extracted from the WSDL
     * - documentation: An eBay User ID for which the Unpaid Item Assistant mechanism is disabled. This field is typically used by a seller who would prefer to file an Unpaid Item dispute manually for the specified user. <br/><br/> One or more
     * <b>ExcludedUser</b> fields are used in <b>SetUserPreferences</b> to add users to Unpaid Item Assistant Exclusion list. Any and all <b>ExcludedUser</b> fields are ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the
     * request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay. <br/><br/> In <b>GetUserPreferences</b>, one or more <b>ExcludedUser</b> fields represent the current Excluded
     * user list.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExcludedUser;
    /**
     * The AutoOptDonationRefund
     * Meta informations extracted from the WSDL
     * - documentation: Flag to indicate whether or not the seller wants eBay to automatically request PayPal Giving Fund donation refunds after Unpaid Item cases are opened and closed through the Unpaid Item Assistant mechanism without payment. This
     * setting is only applicable to eBay for Charity listings. <br/><br/> This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item Assistant
     * feature in Unpaid Item Assistant Preferences on My eBay.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $AutoOptDonationRefund;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UnpaidItemAssistancePreferencesType
     * @uses UnpaidItemAssistancePreferencesType::setDelayBeforeOpeningDispute()
     * @uses UnpaidItemAssistancePreferencesType::setOptInStatus()
     * @uses UnpaidItemAssistancePreferencesType::setAutoRelist()
     * @uses UnpaidItemAssistancePreferencesType::setRemoveAllExcludedUsers()
     * @uses UnpaidItemAssistancePreferencesType::setExcludedUser()
     * @uses UnpaidItemAssistancePreferencesType::setAutoOptDonationRefund()
     * @uses UnpaidItemAssistancePreferencesType::setAny()
     * @param int $delayBeforeOpeningDispute
     * @param bool $optInStatus
     * @param bool $autoRelist
     * @param bool $removeAllExcludedUsers
     * @param string[] $excludedUser
     * @param bool $autoOptDonationRefund
     * @param \DOMDocument $any
     */
    public function __construct($delayBeforeOpeningDispute = null, $optInStatus = null, $autoRelist = false, $removeAllExcludedUsers = false, array $excludedUser = array(), $autoOptDonationRefund = null, \DOMDocument $any = null)
    {
        $this
            ->setDelayBeforeOpeningDispute($delayBeforeOpeningDispute)
            ->setOptInStatus($optInStatus)
            ->setAutoRelist($autoRelist)
            ->setRemoveAllExcludedUsers($removeAllExcludedUsers)
            ->setExcludedUser($excludedUser)
            ->setAutoOptDonationRefund($autoOptDonationRefund)
            ->setAny($any);
    }
    /**
     * Get DelayBeforeOpeningDispute value
     * @return int|null
     */
    public function getDelayBeforeOpeningDispute()
    {
        return $this->DelayBeforeOpeningDispute;
    }
    /**
     * Set DelayBeforeOpeningDispute value
     * @param int $delayBeforeOpeningDispute
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
     */
    public function setDelayBeforeOpeningDispute($delayBeforeOpeningDispute = null)
    {
        // validation for constraint: int
        if (!is_null($delayBeforeOpeningDispute) && !is_numeric($delayBeforeOpeningDispute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($delayBeforeOpeningDispute)), __LINE__);
        }
        $this->DelayBeforeOpeningDispute = $delayBeforeOpeningDispute;
        return $this;
    }
    /**
     * Get OptInStatus value
     * @return bool|null
     */
    public function getOptInStatus()
    {
        return $this->OptInStatus;
    }
    /**
     * Set OptInStatus value
     * @param bool $optInStatus
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
     */
    public function setOptInStatus($optInStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($optInStatus) && !is_bool($optInStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($optInStatus)), __LINE__);
        }
        $this->OptInStatus = $optInStatus;
        return $this;
    }
    /**
     * Get AutoRelist value
     * @return bool|null
     */
    public function getAutoRelist()
    {
        return $this->AutoRelist;
    }
    /**
     * Set AutoRelist value
     * @param bool $autoRelist
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
     */
    public function setAutoRelist($autoRelist = false)
    {
        // validation for constraint: boolean
        if (!is_null($autoRelist) && !is_bool($autoRelist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoRelist)), __LINE__);
        }
        $this->AutoRelist = $autoRelist;
        return $this;
    }
    /**
     * Get RemoveAllExcludedUsers value
     * @return bool|null
     */
    public function getRemoveAllExcludedUsers()
    {
        return $this->RemoveAllExcludedUsers;
    }
    /**
     * Set RemoveAllExcludedUsers value
     * @param bool $removeAllExcludedUsers
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
     */
    public function setRemoveAllExcludedUsers($removeAllExcludedUsers = false)
    {
        // validation for constraint: boolean
        if (!is_null($removeAllExcludedUsers) && !is_bool($removeAllExcludedUsers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($removeAllExcludedUsers)), __LINE__);
        }
        $this->RemoveAllExcludedUsers = $removeAllExcludedUsers;
        return $this;
    }
    /**
     * Get ExcludedUser value
     * @return string[]|null
     */
    public function getExcludedUser()
    {
        return $this->ExcludedUser;
    }
    /**
     * Set ExcludedUser value
     * @throws \InvalidArgumentException
     * @param string[] $excludedUser
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
     */
    public function setExcludedUser(array $excludedUser = array())
    {
        foreach ($excludedUser as $unpaidItemAssistancePreferencesTypeExcludedUserItem) {
            // validation for constraint: itemType
            if (!is_string($unpaidItemAssistancePreferencesTypeExcludedUserItem)) {
                throw new \InvalidArgumentException(sprintf('The ExcludedUser property can only contain items of string, "%s" given', is_object($unpaidItemAssistancePreferencesTypeExcludedUserItem) ? get_class($unpaidItemAssistancePreferencesTypeExcludedUserItem) : gettype($unpaidItemAssistancePreferencesTypeExcludedUserItem)), __LINE__);
            }
        }
        $this->ExcludedUser = $excludedUser;
        return $this;
    }
    /**
     * Add item to ExcludedUser value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
     */
    public function addToExcludedUser($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExcludedUser property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExcludedUser[] = $item;
        return $this;
    }
    /**
     * Get AutoOptDonationRefund value
     * @return bool|null
     */
    public function getAutoOptDonationRefund()
    {
        return $this->AutoOptDonationRefund;
    }
    /**
     * Set AutoOptDonationRefund value
     * @param bool $autoOptDonationRefund
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
     */
    public function setAutoOptDonationRefund($autoOptDonationRefund = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoOptDonationRefund) && !is_bool($autoOptDonationRefund)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($autoOptDonationRefund)), __LINE__);
        }
        $this->AutoOptDonationRefund = $autoOptDonationRefund;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemAssistancePreferencesType
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
