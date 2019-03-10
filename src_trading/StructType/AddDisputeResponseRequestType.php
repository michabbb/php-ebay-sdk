<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDisputeResponseRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call enables the seller to respond to an Item Not Received (INR) dispute opened by a buyer through PayPal's Purchase Protection program, or to update an Unpaid Item case. To respond to a case opened by the buyer through eBay's
 * Resolution Center, the seller should use the <a href="http://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b>, the <a
 * href="http://developer.ebay.com/Devzone/resolution-case-management/CallRef/index.html" target="_blank">Resolution Case Management API</a>, or manage the case manually through the eBay Resolution Center.
 * @subpackage Structs
 */
class AddDisputeResponseRequestType extends AbstractRequestType
{
    /**
     * The DisputeID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the eBay Unpaid Item case or PayPal INR dispute. This identifier is created by eBay or PayPal upon case/dispute creation. | An identifier of a dispute. <br/><br/> <span
     * class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * The MessageText
     * Meta informations extracted from the WSDL
     * - documentation: The text of a comment or response being posted to the case/dispute. Required when <b>DisputeActivity</b> is <b>SellerAddInformation</b>, <b>SellerComment</b>, or <b>SellerPaymentNotReceived</b>. Otherwise, this field is optional.
     * - minOccurs: 0
     * @var string
     */
    public $MessageText;
    /**
     * The DisputeActivity
     * Meta informations extracted from the WSDL
     * - documentation: The type of activity the seller plans to take on the case/dispute. The allowed value is determined by the current state of the case/dispute and whether the seller is updating an Unpaid Item case or responding to a PayPal INR dispute.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeActivity;
    /**
     * The ShippingCarrierUsed
     * Meta informations extracted from the WSDL
     * - documentation: The shipping carrier used to ship the item in dispute. This field is not case sensitive in the <strong>AddDisputeResponse</strong> request. Non-alphanumeric characters are not allowed. This field (along with
     * <b>ShipmentTrackNumber</b>) is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCarrierUsed;
    /**
     * The ShipmentTrackNumber
     * Meta informations extracted from the WSDL
     * - documentation: The tracking number associated with one package of a shipment. The seller is responsible for the accuracy of the shipment tracking number, as eBay only verifies that the tracking number is consistent with the numbering scheme used by
     * the specified shipping carrier, but cannot verify the accuracy of the tracking number. This field (along with <b>ShippingCarrierUsed</b>) is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentTrackNumber;
    /**
     * The ShippingTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the item under dispute was shipped. This field is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingTime;
    /**
     * Constructor method for AddDisputeResponseRequestType
     * @uses AddDisputeResponseRequestType::setDisputeID()
     * @uses AddDisputeResponseRequestType::setMessageText()
     * @uses AddDisputeResponseRequestType::setDisputeActivity()
     * @uses AddDisputeResponseRequestType::setShippingCarrierUsed()
     * @uses AddDisputeResponseRequestType::setShipmentTrackNumber()
     * @uses AddDisputeResponseRequestType::setShippingTime()
     * @param string $disputeID
     * @param string $messageText
     * @param string $disputeActivity
     * @param string $shippingCarrierUsed
     * @param string $shipmentTrackNumber
     * @param string $shippingTime
     */
    public function __construct($disputeID = null, $messageText = null, $disputeActivity = null, $shippingCarrierUsed = null, $shipmentTrackNumber = null, $shippingTime = null)
    {
        $this
            ->setDisputeID($disputeID)
            ->setMessageText($messageText)
            ->setDisputeActivity($disputeActivity)
            ->setShippingCarrierUsed($shippingCarrierUsed)
            ->setShipmentTrackNumber($shipmentTrackNumber)
            ->setShippingTime($shippingTime);
    }
    /**
     * Get DisputeID value
     * @return string|null
     */
    public function getDisputeID()
    {
        return $this->DisputeID;
    }
    /**
     * Set DisputeID value
     * @param string $disputeID
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType
     */
    public function setDisputeID($disputeID = null)
    {
        // validation for constraint: string
        if (!is_null($disputeID) && !is_string($disputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($disputeID)), __LINE__);
        }
        $this->DisputeID = $disputeID;
        return $this;
    }
    /**
     * Get MessageText value
     * @return string|null
     */
    public function getMessageText()
    {
        return $this->MessageText;
    }
    /**
     * Set MessageText value
     * @param string $messageText
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType
     */
    public function setMessageText($messageText = null)
    {
        // validation for constraint: string
        if (!is_null($messageText) && !is_string($messageText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageText)), __LINE__);
        }
        $this->MessageText = $messageText;
        return $this;
    }
    /**
     * Get DisputeActivity value
     * @return string|null
     */
    public function getDisputeActivity()
    {
        return $this->DisputeActivity;
    }
    /**
     * Set DisputeActivity value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeActivityCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeActivityCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeActivity
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType
     */
    public function setDisputeActivity($disputeActivity = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeActivityCodeType::valueIsValid($disputeActivity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeActivity, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeActivityCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeActivity = $disputeActivity;
        return $this;
    }
    /**
     * Get ShippingCarrierUsed value
     * @return string|null
     */
    public function getShippingCarrierUsed()
    {
        return $this->ShippingCarrierUsed;
    }
    /**
     * Set ShippingCarrierUsed value
     * @param string $shippingCarrierUsed
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType
     */
    public function setShippingCarrierUsed($shippingCarrierUsed = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCarrierUsed) && !is_string($shippingCarrierUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingCarrierUsed)), __LINE__);
        }
        $this->ShippingCarrierUsed = $shippingCarrierUsed;
        return $this;
    }
    /**
     * Get ShipmentTrackNumber value
     * @return string|null
     */
    public function getShipmentTrackNumber()
    {
        return $this->ShipmentTrackNumber;
    }
    /**
     * Set ShipmentTrackNumber value
     * @param string $shipmentTrackNumber
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType
     */
    public function setShipmentTrackNumber($shipmentTrackNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentTrackNumber) && !is_string($shipmentTrackNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentTrackNumber)), __LINE__);
        }
        $this->ShipmentTrackNumber = $shipmentTrackNumber;
        return $this;
    }
    /**
     * Get ShippingTime value
     * @return string|null
     */
    public function getShippingTime()
    {
        return $this->ShippingTime;
    }
    /**
     * Set ShippingTime value
     * @param string $shippingTime
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType
     */
    public function setShippingTime($shippingTime = null)
    {
        // validation for constraint: string
        if (!is_null($shippingTime) && !is_string($shippingTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingTime)), __LINE__);
        }
        $this->ShippingTime = $shippingTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddDisputeResponseRequestType
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
