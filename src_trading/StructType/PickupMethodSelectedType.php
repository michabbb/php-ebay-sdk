<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupMethodSelectedType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <strong>PickupMethodSelected</strong> container, which consists of details related to the selected local pickup method (In-Store Pickup or "Click and Collect"), including the pickup method, the merchant's store ID,
 * the status of the pickup, and the pickup reference code (if provided by merchant). <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and
 * can only be applied to multi-quantity, fixed-price listings. The "Click and Collect" feature is only available to large merchants on the eBay UK (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites. sites. </span>
 * @subpackage Structs
 */
class PickupMethodSelectedType extends AbstractStructBase
{
    /**
     * The PickupMethod
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the local pickup method that was selected by the buyer at checkout. This field is always returned with the <strong>PickupMethodSelected</strong> container. <br/><br/> <span class="tablenote">
     * <strong>Note:</strong> Merchants must be eligible for the In-Store Pickup or "Click and Collect" feature to list items that are eligible for these local pickup methods. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PickupMethod;
    /**
     * The PickupStoreID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the merchant's store where the item will be picked up. The <strong>PickupStoreID</strong> is picked up by eBay based on the <strong>LocationID</strong> value that is set by the merchant in the
     * <strong>Inventory Management API</strong>. This field is always returned with the <strong>PickupMethodSelected</strong> container. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to
     * list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test
     * In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of
     * In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PickupStoreID;
    /**
     * The PickupStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the current status of the local pickup order. The value of the <strong>PickupStatus</strong> field can change during the lifecycle of the order based on the notifications that a merchant sends to eBay through the
     * <strong>Inbound Notifications API</strong>. This field is always returned with the <strong>PickupMethodSelected</strong> container. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup or Click
     * and Collect features to list an item that is eligible for these features. At this time, these features are generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers
     * can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay
     * of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PickupStatus;
    /**
     * The MerchantPickupCode
     * Meta informations extracted from the WSDL
     * - documentation: The unique reference number defined by the merchant to track In-Store Pickup orders. The <strong>MerchantPickupCode</strong> is picked up by eBay if it is set by the merchant through the payload of a notification sent to eBay through
     * the <strong>Inbound Notifications API</strong>. This field is only returned with the <strong>PickupMethodSelected</strong> container if it set by the merchant. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If
     * using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real reference number is only returned to the
     * buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties. <br/><br/> <span class="tablenote"> <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is
     * eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multi-quantity, fixed-price listings. Merchants/developers can test In-Store Pickup
     * functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status
     * changes using the Inbound Notifications API. </span>
     * - minOccurs: 0
     * @var string
     */
    public $MerchantPickupCode;
    /**
     * The PickupFulfillmentTime
     * Meta informations extracted from the WSDL
     * - documentation: Timestamp indicating the date/time when the order is expected to be fulfilled by the merchant and available for pick up by the buyer.
     * - minOccurs: 0
     * @var string
     */
    public $PickupFulfillmentTime;
    /**
     * The PickupLocationUUID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the merchant's store where the "Click and Collect" item will be picked up. This field will only be returned if supplied by the merchant.
     * - minOccurs: 0
     * @var string
     */
    public $PickupLocationUUID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PickupMethodSelectedType
     * @uses PickupMethodSelectedType::setPickupMethod()
     * @uses PickupMethodSelectedType::setPickupStoreID()
     * @uses PickupMethodSelectedType::setPickupStatus()
     * @uses PickupMethodSelectedType::setMerchantPickupCode()
     * @uses PickupMethodSelectedType::setPickupFulfillmentTime()
     * @uses PickupMethodSelectedType::setPickupLocationUUID()
     * @uses PickupMethodSelectedType::setAny()
     * @param string $pickupMethod
     * @param string $pickupStoreID
     * @param string $pickupStatus
     * @param string $merchantPickupCode
     * @param string $pickupFulfillmentTime
     * @param string $pickupLocationUUID
     * @param \DOMDocument $any
     */
    public function __construct($pickupMethod = null, $pickupStoreID = null, $pickupStatus = null, $merchantPickupCode = null, $pickupFulfillmentTime = null, $pickupLocationUUID = null, \DOMDocument $any = null)
    {
        $this
            ->setPickupMethod($pickupMethod)
            ->setPickupStoreID($pickupStoreID)
            ->setPickupStatus($pickupStatus)
            ->setMerchantPickupCode($merchantPickupCode)
            ->setPickupFulfillmentTime($pickupFulfillmentTime)
            ->setPickupLocationUUID($pickupLocationUUID)
            ->setAny($any);
    }
    /**
     * Get PickupMethod value
     * @return string|null
     */
    public function getPickupMethod()
    {
        return $this->PickupMethod;
    }
    /**
     * Set PickupMethod value
     * @param string $pickupMethod
     * @return \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
     */
    public function setPickupMethod($pickupMethod = null)
    {
        // validation for constraint: string
        if (!is_null($pickupMethod) && !is_string($pickupMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupMethod)), __LINE__);
        }
        $this->PickupMethod = $pickupMethod;
        return $this;
    }
    /**
     * Get PickupStoreID value
     * @return string|null
     */
    public function getPickupStoreID()
    {
        return $this->PickupStoreID;
    }
    /**
     * Set PickupStoreID value
     * @param string $pickupStoreID
     * @return \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
     */
    public function setPickupStoreID($pickupStoreID = null)
    {
        // validation for constraint: string
        if (!is_null($pickupStoreID) && !is_string($pickupStoreID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupStoreID)), __LINE__);
        }
        $this->PickupStoreID = $pickupStoreID;
        return $this;
    }
    /**
     * Get PickupStatus value
     * @return string|null
     */
    public function getPickupStatus()
    {
        return $this->PickupStatus;
    }
    /**
     * Set PickupStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PickupStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PickupStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pickupStatus
     * @return \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
     */
    public function setPickupStatus($pickupStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PickupStatusCodeType::valueIsValid($pickupStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pickupStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\PickupStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PickupStatus = $pickupStatus;
        return $this;
    }
    /**
     * Get MerchantPickupCode value
     * @return string|null
     */
    public function getMerchantPickupCode()
    {
        return $this->MerchantPickupCode;
    }
    /**
     * Set MerchantPickupCode value
     * @param string $merchantPickupCode
     * @return \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
     */
    public function setMerchantPickupCode($merchantPickupCode = null)
    {
        // validation for constraint: string
        if (!is_null($merchantPickupCode) && !is_string($merchantPickupCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchantPickupCode)), __LINE__);
        }
        $this->MerchantPickupCode = $merchantPickupCode;
        return $this;
    }
    /**
     * Get PickupFulfillmentTime value
     * @return string|null
     */
    public function getPickupFulfillmentTime()
    {
        return $this->PickupFulfillmentTime;
    }
    /**
     * Set PickupFulfillmentTime value
     * @param string $pickupFulfillmentTime
     * @return \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
     */
    public function setPickupFulfillmentTime($pickupFulfillmentTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickupFulfillmentTime) && !is_string($pickupFulfillmentTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupFulfillmentTime)), __LINE__);
        }
        $this->PickupFulfillmentTime = $pickupFulfillmentTime;
        return $this;
    }
    /**
     * Get PickupLocationUUID value
     * @return string|null
     */
    public function getPickupLocationUUID()
    {
        return $this->PickupLocationUUID;
    }
    /**
     * Set PickupLocationUUID value
     * @param string $pickupLocationUUID
     * @return \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
     */
    public function setPickupLocationUUID($pickupLocationUUID = null)
    {
        // validation for constraint: string
        if (!is_null($pickupLocationUUID) && !is_string($pickupLocationUUID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupLocationUUID)), __LINE__);
        }
        $this->PickupLocationUUID = $pickupLocationUUID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
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
     * @return \macropage\ebaysdk\trading\StructType\PickupMethodSelectedType
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
