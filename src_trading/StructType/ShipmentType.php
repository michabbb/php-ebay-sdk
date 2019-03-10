<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>Shipment</b> container, which is used by the seller in <b>CompleteSale</b> to provide shipping information. The <b>Shipment</b> container is also returned in the <b>GetSellingManagerSaleRecord</b> response.
 * @subpackage Structs
 */
class ShipmentType extends AbstractStructBase
{
    /**
     * The EstimatedDeliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryDate;
    /**
     * The InsuredValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $InsuredValue;
    /**
     * The PackageDepth
     * Meta informations extracted from the WSDL
     * - documentation: Depth dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType
     */
    public $PackageDepth;
    /**
     * The PackageLength
     * Meta informations extracted from the WSDL
     * - documentation: Length dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType
     */
    public $PackageLength;
    /**
     * The PackageWidth
     * Meta informations extracted from the WSDL
     * - documentation: Width dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType
     */
    public $PackageWidth;
    /**
     * The PayPalShipmentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PayPalShipmentID;
    /**
     * The ShipmentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ShipmentID;
    /**
     * The PostageTotal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $PostageTotal;
    /**
     * The PrintedTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PrintedTime;
    /**
     * The ShipFromAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address from which the item is being shipped.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $ShipFromAddress;
    /**
     * The ShippingAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address to which the item is to be shipped.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * The ShippingCarrierUsed
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCarrierUsed;
    /**
     * The ShippingFeature
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShippingFeature;
    /**
     * The ShippingPackage
     * Meta informations extracted from the WSDL
     * - documentation: The size of the package used to ship the item(s). See ShippingPackageCodeType for its possible values. Input.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingPackage;
    /**
     * The ShippingServiceUsed
     * Meta informations extracted from the WSDL
     * - documentation: The size of the package used to ship the item(s). See ShippingPackageCodeType for its possible values. Input.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceUsed;
    /**
     * The ShipmentTrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentTrackingNumber;
    /**
     * The WeightMajor
     * Meta informations extracted from the WSDL
     * - documentation: The 'unit' attribute can have a value of lbs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType
     */
    public $WeightMajor;
    /**
     * The WeightMinor
     * Meta informations extracted from the WSDL
     * - documentation: The 'unit' attribute is optional and assumed to be the minor compared to the value of 'unit' in WeightMajor.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType
     */
    public $WeightMinor;
    /**
     * The ItemTransactionID
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[]
     */
    public $ItemTransactionID;
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDate;
    /**
     * The DeliveryStatus
     * Meta informations extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryStatus;
    /**
     * The RefundGrantedTime
     * Meta informations extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string
     */
    public $RefundGrantedTime;
    /**
     * The RefundRequestedTime
     * Meta informations extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string
     */
    public $RefundRequestedTime;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Status, for revise only
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The ShippedTime
     * Meta informations extracted from the WSDL
     * - documentation: The date and time that the seller handed off the package(s) to the shipping carrier. If this field is not included in the request, the timestamp of the call execution is used as the shipped time. Note that sellers have the ability to
     * set this value up to 3 calendar days in the future.
     * - minOccurs: 0
     * @var string
     */
    public $ShippedTime;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is only applicable for Half.com listings, and since API support for Half.com listings is being deprecated, this field is no longer applicable. </span> This string field allows a seller
     * to provide notes to the buyer regarding shipment of a Half.com item. Only alphanumeric characters can be used in this field. This is an optional field that is only applicable to Half.com items.
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The ShipmentTrackingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of the tracking number and shipping carrier associated with the shipment of one item (package). <br><br> Because an order can have multiple line items and/or packages, there can be multiple
     * <b>ShipmentTrackingDetails</b> containers under the <b>Shipment</b> container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[]
     */
    public $ShipmentTrackingDetails;
    /**
     * The ShipmentLineItem
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShipmentLineItemType
     */
    public $ShipmentLineItem;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShipmentType
     * @uses ShipmentType::setEstimatedDeliveryDate()
     * @uses ShipmentType::setInsuredValue()
     * @uses ShipmentType::setPackageDepth()
     * @uses ShipmentType::setPackageLength()
     * @uses ShipmentType::setPackageWidth()
     * @uses ShipmentType::setPayPalShipmentID()
     * @uses ShipmentType::setShipmentID()
     * @uses ShipmentType::setPostageTotal()
     * @uses ShipmentType::setPrintedTime()
     * @uses ShipmentType::setShipFromAddress()
     * @uses ShipmentType::setShippingAddress()
     * @uses ShipmentType::setShippingCarrierUsed()
     * @uses ShipmentType::setShippingFeature()
     * @uses ShipmentType::setShippingPackage()
     * @uses ShipmentType::setShippingServiceUsed()
     * @uses ShipmentType::setShipmentTrackingNumber()
     * @uses ShipmentType::setWeightMajor()
     * @uses ShipmentType::setWeightMinor()
     * @uses ShipmentType::setItemTransactionID()
     * @uses ShipmentType::setDeliveryDate()
     * @uses ShipmentType::setDeliveryStatus()
     * @uses ShipmentType::setRefundGrantedTime()
     * @uses ShipmentType::setRefundRequestedTime()
     * @uses ShipmentType::setStatus()
     * @uses ShipmentType::setShippedTime()
     * @uses ShipmentType::setNotes()
     * @uses ShipmentType::setShipmentTrackingDetails()
     * @uses ShipmentType::setShipmentLineItem()
     * @uses ShipmentType::setAny()
     * @param string $estimatedDeliveryDate
     * @param \macropage\ebaysdk\trading\StructType\AmountType $insuredValue
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageDepth
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageLength
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageWidth
     * @param string $payPalShipmentID
     * @param int $shipmentID
     * @param \macropage\ebaysdk\trading\StructType\AmountType $postageTotal
     * @param string $printedTime
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shipFromAddress
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @param string $shippingCarrierUsed
     * @param string[] $shippingFeature
     * @param string $shippingPackage
     * @param string $shippingServiceUsed
     * @param string $shipmentTrackingNumber
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMajor
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMinor
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[] $itemTransactionID
     * @param string $deliveryDate
     * @param string $deliveryStatus
     * @param string $refundGrantedTime
     * @param string $refundRequestedTime
     * @param string $status
     * @param string $shippedTime
     * @param string $notes
     * @param \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @param \macropage\ebaysdk\trading\StructType\ShipmentLineItemType $shipmentLineItem
     * @param \DOMDocument $any
     */
    public function __construct($estimatedDeliveryDate = null, \macropage\ebaysdk\trading\StructType\AmountType $insuredValue = null, \macropage\ebaysdk\trading\StructType\MeasureType $packageDepth = null, \macropage\ebaysdk\trading\StructType\MeasureType $packageLength = null, \macropage\ebaysdk\trading\StructType\MeasureType $packageWidth = null, $payPalShipmentID = null, $shipmentID = null, \macropage\ebaysdk\trading\StructType\AmountType $postageTotal = null, $printedTime = null, \macropage\ebaysdk\trading\StructType\AddressType $shipFromAddress = null, \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, $shippingCarrierUsed = null, array $shippingFeature = array(), $shippingPackage = null, $shippingServiceUsed = null, $shipmentTrackingNumber = null, \macropage\ebaysdk\trading\StructType\MeasureType $weightMajor = null, \macropage\ebaysdk\trading\StructType\MeasureType $weightMinor = null, array $itemTransactionID = array(), $deliveryDate = null, $deliveryStatus = null, $refundGrantedTime = null, $refundRequestedTime = null, $status = null, $shippedTime = null, $notes = null, array $shipmentTrackingDetails = array(), \macropage\ebaysdk\trading\StructType\ShipmentLineItemType $shipmentLineItem = null, \DOMDocument $any = null)
    {
        $this
            ->setEstimatedDeliveryDate($estimatedDeliveryDate)
            ->setInsuredValue($insuredValue)
            ->setPackageDepth($packageDepth)
            ->setPackageLength($packageLength)
            ->setPackageWidth($packageWidth)
            ->setPayPalShipmentID($payPalShipmentID)
            ->setShipmentID($shipmentID)
            ->setPostageTotal($postageTotal)
            ->setPrintedTime($printedTime)
            ->setShipFromAddress($shipFromAddress)
            ->setShippingAddress($shippingAddress)
            ->setShippingCarrierUsed($shippingCarrierUsed)
            ->setShippingFeature($shippingFeature)
            ->setShippingPackage($shippingPackage)
            ->setShippingServiceUsed($shippingServiceUsed)
            ->setShipmentTrackingNumber($shipmentTrackingNumber)
            ->setWeightMajor($weightMajor)
            ->setWeightMinor($weightMinor)
            ->setItemTransactionID($itemTransactionID)
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryStatus($deliveryStatus)
            ->setRefundGrantedTime($refundGrantedTime)
            ->setRefundRequestedTime($refundRequestedTime)
            ->setStatus($status)
            ->setShippedTime($shippedTime)
            ->setNotes($notes)
            ->setShipmentTrackingDetails($shipmentTrackingDetails)
            ->setShipmentLineItem($shipmentLineItem)
            ->setAny($any);
    }
    /**
     * Get EstimatedDeliveryDate value
     * @return string|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->EstimatedDeliveryDate;
    }
    /**
     * Set EstimatedDeliveryDate value
     * @param string $estimatedDeliveryDate
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setEstimatedDeliveryDate($estimatedDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryDate) && !is_string($estimatedDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimatedDeliveryDate)), __LINE__);
        }
        $this->EstimatedDeliveryDate = $estimatedDeliveryDate;
        return $this;
    }
    /**
     * Get InsuredValue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInsuredValue()
    {
        return $this->InsuredValue;
    }
    /**
     * Set InsuredValue value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $insuredValue
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setInsuredValue(\macropage\ebaysdk\trading\StructType\AmountType $insuredValue = null)
    {
        $this->InsuredValue = $insuredValue;
        return $this;
    }
    /**
     * Get PackageDepth value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageDepth()
    {
        return $this->PackageDepth;
    }
    /**
     * Set PackageDepth value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageDepth
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPackageDepth(\macropage\ebaysdk\trading\StructType\MeasureType $packageDepth = null)
    {
        $this->PackageDepth = $packageDepth;
        return $this;
    }
    /**
     * Get PackageLength value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageLength()
    {
        return $this->PackageLength;
    }
    /**
     * Set PackageLength value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageLength
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPackageLength(\macropage\ebaysdk\trading\StructType\MeasureType $packageLength = null)
    {
        $this->PackageLength = $packageLength;
        return $this;
    }
    /**
     * Get PackageWidth value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageWidth()
    {
        return $this->PackageWidth;
    }
    /**
     * Set PackageWidth value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageWidth
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPackageWidth(\macropage\ebaysdk\trading\StructType\MeasureType $packageWidth = null)
    {
        $this->PackageWidth = $packageWidth;
        return $this;
    }
    /**
     * Get PayPalShipmentID value
     * @return string|null
     */
    public function getPayPalShipmentID()
    {
        return $this->PayPalShipmentID;
    }
    /**
     * Set PayPalShipmentID value
     * @param string $payPalShipmentID
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPayPalShipmentID($payPalShipmentID = null)
    {
        // validation for constraint: string
        if (!is_null($payPalShipmentID) && !is_string($payPalShipmentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payPalShipmentID)), __LINE__);
        }
        $this->PayPalShipmentID = $payPalShipmentID;
        return $this;
    }
    /**
     * Get ShipmentID value
     * @return int|null
     */
    public function getShipmentID()
    {
        return $this->ShipmentID;
    }
    /**
     * Set ShipmentID value
     * @param int $shipmentID
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShipmentID($shipmentID = null)
    {
        // validation for constraint: int
        if (!is_null($shipmentID) && !is_numeric($shipmentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shipmentID)), __LINE__);
        }
        $this->ShipmentID = $shipmentID;
        return $this;
    }
    /**
     * Get PostageTotal value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPostageTotal()
    {
        return $this->PostageTotal;
    }
    /**
     * Set PostageTotal value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $postageTotal
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPostageTotal(\macropage\ebaysdk\trading\StructType\AmountType $postageTotal = null)
    {
        $this->PostageTotal = $postageTotal;
        return $this;
    }
    /**
     * Get PrintedTime value
     * @return string|null
     */
    public function getPrintedTime()
    {
        return $this->PrintedTime;
    }
    /**
     * Set PrintedTime value
     * @param string $printedTime
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPrintedTime($printedTime = null)
    {
        // validation for constraint: string
        if (!is_null($printedTime) && !is_string($printedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($printedTime)), __LINE__);
        }
        $this->PrintedTime = $printedTime;
        return $this;
    }
    /**
     * Get ShipFromAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShipFromAddress()
    {
        return $this->ShipFromAddress;
    }
    /**
     * Set ShipFromAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shipFromAddress
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShipFromAddress(\macropage\ebaysdk\trading\StructType\AddressType $shipFromAddress = null)
    {
        $this->ShipFromAddress = $shipFromAddress;
        return $this;
    }
    /**
     * Get ShippingAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippingAddress(\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
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
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
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
     * Get ShippingFeature value
     * @return string[]|null
     */
    public function getShippingFeature()
    {
        return $this->ShippingFeature;
    }
    /**
     * Set ShippingFeature value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shippingFeature
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippingFeature(array $shippingFeature = array())
    {
        $invalidValues = array();
        foreach ($shippingFeature as $shipmentTypeShippingFeatureItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::valueIsValid($shipmentTypeShippingFeatureItem)) {
                $invalidValues[] = var_export($shipmentTypeShippingFeatureItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingFeature = $shippingFeature;
        return $this;
    }
    /**
     * Add item to ShippingFeature value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function addToShippingFeature($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingFeature[] = $item;
        return $this;
    }
    /**
     * Get ShippingPackage value
     * @return string|null
     */
    public function getShippingPackage()
    {
        return $this->ShippingPackage;
    }
    /**
     * Set ShippingPackage value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingPackage
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippingPackage($shippingPackage = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid($shippingPackage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingPackage, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingPackage = $shippingPackage;
        return $this;
    }
    /**
     * Get ShippingServiceUsed value
     * @return string|null
     */
    public function getShippingServiceUsed()
    {
        return $this->ShippingServiceUsed;
    }
    /**
     * Set ShippingServiceUsed value
     * @param string $shippingServiceUsed
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippingServiceUsed($shippingServiceUsed = null)
    {
        // validation for constraint: string
        if (!is_null($shippingServiceUsed) && !is_string($shippingServiceUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingServiceUsed)), __LINE__);
        }
        $this->ShippingServiceUsed = $shippingServiceUsed;
        return $this;
    }
    /**
     * Get ShipmentTrackingNumber value
     * @return string|null
     */
    public function getShipmentTrackingNumber()
    {
        return $this->ShipmentTrackingNumber;
    }
    /**
     * Set ShipmentTrackingNumber value
     * @param string $shipmentTrackingNumber
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShipmentTrackingNumber($shipmentTrackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentTrackingNumber) && !is_string($shipmentTrackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentTrackingNumber)), __LINE__);
        }
        $this->ShipmentTrackingNumber = $shipmentTrackingNumber;
        return $this;
    }
    /**
     * Get WeightMajor value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getWeightMajor()
    {
        return $this->WeightMajor;
    }
    /**
     * Set WeightMajor value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMajor
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setWeightMajor(\macropage\ebaysdk\trading\StructType\MeasureType $weightMajor = null)
    {
        $this->WeightMajor = $weightMajor;
        return $this;
    }
    /**
     * Get WeightMinor value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getWeightMinor()
    {
        return $this->WeightMinor;
    }
    /**
     * Set WeightMinor value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMinor
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setWeightMinor(\macropage\ebaysdk\trading\StructType\MeasureType $weightMinor = null)
    {
        $this->WeightMinor = $weightMinor;
        return $this;
    }
    /**
     * Get ItemTransactionID value
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[]|null
     */
    public function getItemTransactionID()
    {
        return $this->ItemTransactionID;
    }
    /**
     * Set ItemTransactionID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[] $itemTransactionID
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setItemTransactionID(array $itemTransactionID = array())
    {
        foreach ($itemTransactionID as $shipmentTypeItemTransactionIDItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeItemTransactionIDItem instanceof \macropage\ebaysdk\trading\StructType\ItemTransactionIDType) {
                throw new \InvalidArgumentException(sprintf('The ItemTransactionID property can only contain items of \macropage\ebaysdk\trading\StructType\ItemTransactionIDType, "%s" given', is_object($shipmentTypeItemTransactionIDItem) ? get_class($shipmentTypeItemTransactionIDItem) : gettype($shipmentTypeItemTransactionIDItem)), __LINE__);
            }
        }
        $this->ItemTransactionID = $itemTransactionID;
        return $this;
    }
    /**
     * Add item to ItemTransactionID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType $item
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function addToItemTransactionID(\macropage\ebaysdk\trading\StructType\ItemTransactionIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemTransactionIDType) {
            throw new \InvalidArgumentException(sprintf('The ItemTransactionID property can only contain items of \macropage\ebaysdk\trading\StructType\ItemTransactionIDType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemTransactionID[] = $item;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get DeliveryStatus value
     * @return string|null
     */
    public function getDeliveryStatus()
    {
        return $this->DeliveryStatus;
    }
    /**
     * Set DeliveryStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\ShipmentDeliveryStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShipmentDeliveryStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryStatus
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setDeliveryStatus($deliveryStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShipmentDeliveryStatusCodeType::valueIsValid($deliveryStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\ShipmentDeliveryStatusCodeType::getValidValues())), __LINE__);
        }
        $this->DeliveryStatus = $deliveryStatus;
        return $this;
    }
    /**
     * Get RefundGrantedTime value
     * @return string|null
     */
    public function getRefundGrantedTime()
    {
        return $this->RefundGrantedTime;
    }
    /**
     * Set RefundGrantedTime value
     * @param string $refundGrantedTime
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setRefundGrantedTime($refundGrantedTime = null)
    {
        // validation for constraint: string
        if (!is_null($refundGrantedTime) && !is_string($refundGrantedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundGrantedTime)), __LINE__);
        }
        $this->RefundGrantedTime = $refundGrantedTime;
        return $this;
    }
    /**
     * Get RefundRequestedTime value
     * @return string|null
     */
    public function getRefundRequestedTime()
    {
        return $this->RefundRequestedTime;
    }
    /**
     * Set RefundRequestedTime value
     * @param string $refundRequestedTime
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setRefundRequestedTime($refundRequestedTime = null)
    {
        // validation for constraint: string
        if (!is_null($refundRequestedTime) && !is_string($refundRequestedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundRequestedTime)), __LINE__);
        }
        $this->RefundRequestedTime = $refundRequestedTime;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\ShipmentStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShipmentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShipmentStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\ShipmentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get ShippedTime value
     * @return string|null
     */
    public function getShippedTime()
    {
        return $this->ShippedTime;
    }
    /**
     * Set ShippedTime value
     * @param string $shippedTime
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippedTime($shippedTime = null)
    {
        // validation for constraint: string
        if (!is_null($shippedTime) && !is_string($shippedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippedTime)), __LINE__);
        }
        $this->ShippedTime = $shippedTime;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get ShipmentTrackingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[]|null
     */
    public function getShipmentTrackingDetails()
    {
        return $this->ShipmentTrackingDetails;
    }
    /**
     * Set ShipmentTrackingDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShipmentTrackingDetails(array $shipmentTrackingDetails = array())
    {
        foreach ($shipmentTrackingDetails as $shipmentTypeShipmentTrackingDetailsItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeShipmentTrackingDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ShipmentTrackingDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType, "%s" given', is_object($shipmentTypeShipmentTrackingDetailsItem) ? get_class($shipmentTypeShipmentTrackingDetailsItem) : gettype($shipmentTypeShipmentTrackingDetailsItem)), __LINE__);
            }
        }
        $this->ShipmentTrackingDetails = $shipmentTrackingDetails;
        return $this;
    }
    /**
     * Add item to ShipmentTrackingDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function addToShipmentTrackingDetails(\macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShipmentTrackingDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentTrackingDetails[] = $item;
        return $this;
    }
    /**
     * Get ShipmentLineItem value
     * @return \macropage\ebaysdk\trading\StructType\ShipmentLineItemType|null
     */
    public function getShipmentLineItem()
    {
        return $this->ShipmentLineItem;
    }
    /**
     * Set ShipmentLineItem value
     * @param \macropage\ebaysdk\trading\StructType\ShipmentLineItemType $shipmentLineItem
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShipmentLineItem(\macropage\ebaysdk\trading\StructType\ShipmentLineItemType $shipmentLineItem = null)
    {
        $this->ShipmentLineItem = $shipmentLineItem;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShipmentType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
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
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
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
