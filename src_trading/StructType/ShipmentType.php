<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Shipment</b> container, which is used by the seller in <b>CompleteSale</b> to provide shipping information. The <b>Shipment</b> container is also returned in the <b>GetSellingManagerSaleRecord</b> response.
 * @subpackage Structs
 */
class ShipmentType extends AbstractStructBase
{
    /**
     * The EstimatedDeliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EstimatedDeliveryDate = null;
    /**
     * The InsuredValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $InsuredValue = null;
    /**
     * The PackageDepth
     * Meta information extracted from the WSDL
     * - documentation: Depth dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $PackageDepth = null;
    /**
     * The PackageLength
     * Meta information extracted from the WSDL
     * - documentation: Length dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $PackageLength = null;
    /**
     * The PackageWidth
     * Meta information extracted from the WSDL
     * - documentation: Width dimension of the package needed to ship the item after it is sold. <br> For calculated shipping only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $PackageWidth = null;
    /**
     * The PayPalShipmentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PayPalShipmentID = null;
    /**
     * The ShipmentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShipmentID = null;
    /**
     * The PostageTotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $PostageTotal = null;
    /**
     * The PrintedTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PrintedTime = null;
    /**
     * The ShipFromAddress
     * Meta information extracted from the WSDL
     * - documentation: The address from which the item is being shipped.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $ShipFromAddress = null;
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: The address to which the item is to be shipped.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $ShippingAddress = null;
    /**
     * The ShippingCarrierUsed
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingCarrierUsed = null;
    /**
     * The ShippingFeature
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $ShippingFeature = [];
    /**
     * The ShippingPackage
     * Meta information extracted from the WSDL
     * - documentation: The size of the package used to ship the item(s). See ShippingPackageCodeType for its possible values. Input.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingPackage = null;
    /**
     * The ShippingServiceUsed
     * Meta information extracted from the WSDL
     * - documentation: The size of the package used to ship the item(s). See ShippingPackageCodeType for its possible values. Input.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingServiceUsed = null;
    /**
     * The ShipmentTrackingNumber
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShipmentTrackingNumber = null;
    /**
     * The WeightMajor
     * Meta information extracted from the WSDL
     * - documentation: The 'unit' attribute can have a value of lbs.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $WeightMajor = null;
    /**
     * The WeightMinor
     * Meta information extracted from the WSDL
     * - documentation: The 'unit' attribute is optional and assumed to be the minor compared to the value of 'unit' in WeightMajor.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MeasureType $WeightMinor = null;
    /**
     * The ItemTransactionID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[]
     */
    protected array $ItemTransactionID = [];
    /**
     * The DeliveryDate
     * Meta information extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryDate = null;
    /**
     * The DeliveryStatus
     * Meta information extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeliveryStatus = null;
    /**
     * The RefundGrantedTime
     * Meta information extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundGrantedTime = null;
    /**
     * The RefundRequestedTime
     * Meta information extracted from the WSDL
     * - documentation: Revise only
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RefundRequestedTime = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status, for revise only
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The ShippedTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time that the seller handed off the package(s) to the shipping carrier. If this field is not included in the request, the timestamp of the call execution is used as the shipped time. Note that sellers have the ability to
     * set this value up to 3 calendar days in the future.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippedTime = null;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is only applicable for Half.com listings, and since API support for Half.com listings is being deprecated, this field is no longer applicable. </span> This string field allows a seller
     * to provide notes to the buyer regarding shipment of a Half.com item. Only alphanumeric characters can be used in this field. This is an optional field that is only applicable to Half.com items.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Notes = null;
    /**
     * The ShipmentTrackingDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the tracking number and shipping carrier associated with the shipment of one item (package). <br><br> Because an order can have multiple line items and/or packages, there can be multiple
     * <b>ShipmentTrackingDetails</b> containers under the <b>Shipment</b> container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[]
     */
    protected array $ShipmentTrackingDetails = [];
    /**
     * The ShipmentLineItem
     * Meta information extracted from the WSDL
     * - documentation: Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShipmentLineItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ShipmentLineItemType $ShipmentLineItem = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $estimatedDeliveryDate = null, ?\macropage\ebaysdk\trading\StructType\AmountType $insuredValue = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $packageDepth = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $packageLength = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $packageWidth = null, ?string $payPalShipmentID = null, ?int $shipmentID = null, ?\macropage\ebaysdk\trading\StructType\AmountType $postageTotal = null, ?string $printedTime = null, ?\macropage\ebaysdk\trading\StructType\AddressType $shipFromAddress = null, ?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, ?string $shippingCarrierUsed = null, array $shippingFeature = [], ?string $shippingPackage = null, ?string $shippingServiceUsed = null, ?string $shipmentTrackingNumber = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $weightMajor = null, ?\macropage\ebaysdk\trading\StructType\MeasureType $weightMinor = null, array $itemTransactionID = [], ?string $deliveryDate = null, ?string $deliveryStatus = null, ?string $refundGrantedTime = null, ?string $refundRequestedTime = null, ?string $status = null, ?string $shippedTime = null, ?string $notes = null, array $shipmentTrackingDetails = [], ?\macropage\ebaysdk\trading\StructType\ShipmentLineItemType $shipmentLineItem = null, $any = null)
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
    public function getEstimatedDeliveryDate(): ?string
    {
        return $this->EstimatedDeliveryDate;
    }
    /**
     * Set EstimatedDeliveryDate value
     * @param string $estimatedDeliveryDate
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setEstimatedDeliveryDate(?string $estimatedDeliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryDate) && !is_string($estimatedDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryDate, true), gettype($estimatedDeliveryDate)), __LINE__);
        }
        $this->EstimatedDeliveryDate = $estimatedDeliveryDate;
        
        return $this;
    }
    /**
     * Get InsuredValue value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getInsuredValue(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->InsuredValue;
    }
    /**
     * Set InsuredValue value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $insuredValue
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setInsuredValue(?\macropage\ebaysdk\trading\StructType\AmountType $insuredValue = null): self
    {
        $this->InsuredValue = $insuredValue;
        
        return $this;
    }
    /**
     * Get PackageDepth value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageDepth(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->PackageDepth;
    }
    /**
     * Set PackageDepth value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageDepth
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPackageDepth(?\macropage\ebaysdk\trading\StructType\MeasureType $packageDepth = null): self
    {
        $this->PackageDepth = $packageDepth;
        
        return $this;
    }
    /**
     * Get PackageLength value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageLength(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->PackageLength;
    }
    /**
     * Set PackageLength value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageLength
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPackageLength(?\macropage\ebaysdk\trading\StructType\MeasureType $packageLength = null): self
    {
        $this->PackageLength = $packageLength;
        
        return $this;
    }
    /**
     * Get PackageWidth value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getPackageWidth(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->PackageWidth;
    }
    /**
     * Set PackageWidth value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $packageWidth
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPackageWidth(?\macropage\ebaysdk\trading\StructType\MeasureType $packageWidth = null): self
    {
        $this->PackageWidth = $packageWidth;
        
        return $this;
    }
    /**
     * Get PayPalShipmentID value
     * @return string|null
     */
    public function getPayPalShipmentID(): ?string
    {
        return $this->PayPalShipmentID;
    }
    /**
     * Set PayPalShipmentID value
     * @param string $payPalShipmentID
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPayPalShipmentID(?string $payPalShipmentID = null): self
    {
        // validation for constraint: string
        if (!is_null($payPalShipmentID) && !is_string($payPalShipmentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payPalShipmentID, true), gettype($payPalShipmentID)), __LINE__);
        }
        $this->PayPalShipmentID = $payPalShipmentID;
        
        return $this;
    }
    /**
     * Get ShipmentID value
     * @return int|null
     */
    public function getShipmentID(): ?int
    {
        return $this->ShipmentID;
    }
    /**
     * Set ShipmentID value
     * @param int $shipmentID
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShipmentID(?int $shipmentID = null): self
    {
        // validation for constraint: int
        if (!is_null($shipmentID) && !(is_int($shipmentID) || ctype_digit($shipmentID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipmentID, true), gettype($shipmentID)), __LINE__);
        }
        $this->ShipmentID = $shipmentID;
        
        return $this;
    }
    /**
     * Get PostageTotal value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPostageTotal(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->PostageTotal;
    }
    /**
     * Set PostageTotal value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $postageTotal
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPostageTotal(?\macropage\ebaysdk\trading\StructType\AmountType $postageTotal = null): self
    {
        $this->PostageTotal = $postageTotal;
        
        return $this;
    }
    /**
     * Get PrintedTime value
     * @return string|null
     */
    public function getPrintedTime(): ?string
    {
        return $this->PrintedTime;
    }
    /**
     * Set PrintedTime value
     * @param string $printedTime
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setPrintedTime(?string $printedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($printedTime) && !is_string($printedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printedTime, true), gettype($printedTime)), __LINE__);
        }
        $this->PrintedTime = $printedTime;
        
        return $this;
    }
    /**
     * Get ShipFromAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShipFromAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->ShipFromAddress;
    }
    /**
     * Set ShipFromAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shipFromAddress
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShipFromAddress(?\macropage\ebaysdk\trading\StructType\AddressType $shipFromAddress = null): self
    {
        $this->ShipFromAddress = $shipFromAddress;
        
        return $this;
    }
    /**
     * Get ShippingAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShippingAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippingAddress(?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null): self
    {
        $this->ShippingAddress = $shippingAddress;
        
        return $this;
    }
    /**
     * Get ShippingCarrierUsed value
     * @return string|null
     */
    public function getShippingCarrierUsed(): ?string
    {
        return $this->ShippingCarrierUsed;
    }
    /**
     * Set ShippingCarrierUsed value
     * @param string $shippingCarrierUsed
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippingCarrierUsed(?string $shippingCarrierUsed = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingCarrierUsed) && !is_string($shippingCarrierUsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCarrierUsed, true), gettype($shippingCarrierUsed)), __LINE__);
        }
        $this->ShippingCarrierUsed = $shippingCarrierUsed;
        
        return $this;
    }
    /**
     * Get ShippingFeature value
     * @return string[]
     */
    public function getShippingFeature(): array
    {
        return $this->ShippingFeature;
    }
    /**
     * This method is responsible for validating the values passed to the setShippingFeature method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShippingFeature method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingFeatureForArrayConstraintsFromSetShippingFeature(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentTypeShippingFeatureItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::valueIsValid($shipmentTypeShippingFeatureItem)) {
                $invalidValues[] = is_object($shipmentTypeShippingFeatureItem) ? get_class($shipmentTypeShippingFeatureItem) : sprintf('%s(%s)', gettype($shipmentTypeShippingFeatureItem), var_export($shipmentTypeShippingFeatureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShippingFeature value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $shippingFeature
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippingFeature(array $shippingFeature = []): self
    {
        // validation for constraint: array
        if ('' !== ($shippingFeatureArrayErrorMessage = self::validateShippingFeatureForArrayConstraintsFromSetShippingFeature($shippingFeature))) {
            throw new InvalidArgumentException($shippingFeatureArrayErrorMessage, __LINE__);
        }
        $this->ShippingFeature = $shippingFeature;
        
        return $this;
    }
    /**
     * Add item to ShippingFeature value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function addToShippingFeature(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingFeatureCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingFeature[] = $item;
        
        return $this;
    }
    /**
     * Get ShippingPackage value
     * @return string|null
     */
    public function getShippingPackage(): ?string
    {
        return $this->ShippingPackage;
    }
    /**
     * Set ShippingPackage value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $shippingPackage
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippingPackage(?string $shippingPackage = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid($shippingPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType', is_array($shippingPackage) ? implode(', ', $shippingPackage) : var_export($shippingPackage, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingPackage = $shippingPackage;
        
        return $this;
    }
    /**
     * Get ShippingServiceUsed value
     * @return string|null
     */
    public function getShippingServiceUsed(): ?string
    {
        return $this->ShippingServiceUsed;
    }
    /**
     * Set ShippingServiceUsed value
     * @param string $shippingServiceUsed
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippingServiceUsed(?string $shippingServiceUsed = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingServiceUsed) && !is_string($shippingServiceUsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingServiceUsed, true), gettype($shippingServiceUsed)), __LINE__);
        }
        $this->ShippingServiceUsed = $shippingServiceUsed;
        
        return $this;
    }
    /**
     * Get ShipmentTrackingNumber value
     * @return string|null
     */
    public function getShipmentTrackingNumber(): ?string
    {
        return $this->ShipmentTrackingNumber;
    }
    /**
     * Set ShipmentTrackingNumber value
     * @param string $shipmentTrackingNumber
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShipmentTrackingNumber(?string $shipmentTrackingNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentTrackingNumber) && !is_string($shipmentTrackingNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentTrackingNumber, true), gettype($shipmentTrackingNumber)), __LINE__);
        }
        $this->ShipmentTrackingNumber = $shipmentTrackingNumber;
        
        return $this;
    }
    /**
     * Get WeightMajor value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getWeightMajor(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->WeightMajor;
    }
    /**
     * Set WeightMajor value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMajor
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setWeightMajor(?\macropage\ebaysdk\trading\StructType\MeasureType $weightMajor = null): self
    {
        $this->WeightMajor = $weightMajor;
        
        return $this;
    }
    /**
     * Get WeightMinor value
     * @return \macropage\ebaysdk\trading\StructType\MeasureType|null
     */
    public function getWeightMinor(): ?\macropage\ebaysdk\trading\StructType\MeasureType
    {
        return $this->WeightMinor;
    }
    /**
     * Set WeightMinor value
     * @param \macropage\ebaysdk\trading\StructType\MeasureType $weightMinor
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setWeightMinor(?\macropage\ebaysdk\trading\StructType\MeasureType $weightMinor = null): self
    {
        $this->WeightMinor = $weightMinor;
        
        return $this;
    }
    /**
     * Get ItemTransactionID value
     * @return \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[]
     */
    public function getItemTransactionID(): array
    {
        return $this->ItemTransactionID;
    }
    /**
     * This method is responsible for validating the values passed to the setItemTransactionID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemTransactionID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemTransactionIDForArrayConstraintsFromSetItemTransactionID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentTypeItemTransactionIDItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeItemTransactionIDItem instanceof \macropage\ebaysdk\trading\StructType\ItemTransactionIDType) {
                $invalidValues[] = is_object($shipmentTypeItemTransactionIDItem) ? get_class($shipmentTypeItemTransactionIDItem) : sprintf('%s(%s)', gettype($shipmentTypeItemTransactionIDItem), var_export($shipmentTypeItemTransactionIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemTransactionID property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemTransactionIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemTransactionID value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType[] $itemTransactionID
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setItemTransactionID(array $itemTransactionID = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemTransactionIDArrayErrorMessage = self::validateItemTransactionIDForArrayConstraintsFromSetItemTransactionID($itemTransactionID))) {
            throw new InvalidArgumentException($itemTransactionIDArrayErrorMessage, __LINE__);
        }
        $this->ItemTransactionID = $itemTransactionID;
        
        return $this;
    }
    /**
     * Add item to ItemTransactionID value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemTransactionIDType $item
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function addToItemTransactionID(\macropage\ebaysdk\trading\StructType\ItemTransactionIDType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemTransactionIDType) {
            throw new InvalidArgumentException(sprintf('The ItemTransactionID property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemTransactionIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemTransactionID[] = $item;
        
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return string|null
     */
    public function getDeliveryDate(): ?string
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setDeliveryDate(?string $deliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        
        return $this;
    }
    /**
     * Get DeliveryStatus value
     * @return string|null
     */
    public function getDeliveryStatus(): ?string
    {
        return $this->DeliveryStatus;
    }
    /**
     * Set DeliveryStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\ShipmentDeliveryStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShipmentDeliveryStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $deliveryStatus
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setDeliveryStatus(?string $deliveryStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShipmentDeliveryStatusCodeType::valueIsValid($deliveryStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShipmentDeliveryStatusCodeType', is_array($deliveryStatus) ? implode(', ', $deliveryStatus) : var_export($deliveryStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShipmentDeliveryStatusCodeType::getValidValues())), __LINE__);
        }
        $this->DeliveryStatus = $deliveryStatus;
        
        return $this;
    }
    /**
     * Get RefundGrantedTime value
     * @return string|null
     */
    public function getRefundGrantedTime(): ?string
    {
        return $this->RefundGrantedTime;
    }
    /**
     * Set RefundGrantedTime value
     * @param string $refundGrantedTime
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setRefundGrantedTime(?string $refundGrantedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($refundGrantedTime) && !is_string($refundGrantedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundGrantedTime, true), gettype($refundGrantedTime)), __LINE__);
        }
        $this->RefundGrantedTime = $refundGrantedTime;
        
        return $this;
    }
    /**
     * Get RefundRequestedTime value
     * @return string|null
     */
    public function getRefundRequestedTime(): ?string
    {
        return $this->RefundRequestedTime;
    }
    /**
     * Set RefundRequestedTime value
     * @param string $refundRequestedTime
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setRefundRequestedTime(?string $refundRequestedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($refundRequestedTime) && !is_string($refundRequestedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundRequestedTime, true), gettype($refundRequestedTime)), __LINE__);
        }
        $this->RefundRequestedTime = $refundRequestedTime;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\ShipmentStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShipmentStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShipmentStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ShipmentStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ShipmentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get ShippedTime value
     * @return string|null
     */
    public function getShippedTime(): ?string
    {
        return $this->ShippedTime;
    }
    /**
     * Set ShippedTime value
     * @param string $shippedTime
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShippedTime(?string $shippedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($shippedTime) && !is_string($shippedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippedTime, true), gettype($shippedTime)), __LINE__);
        }
        $this->ShippedTime = $shippedTime;
        
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setNotes(?string $notes = null): self
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        
        return $this;
    }
    /**
     * Get ShipmentTrackingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[]
     */
    public function getShipmentTrackingDetails(): array
    {
        return $this->ShipmentTrackingDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShipmentTrackingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipmentTrackingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentTrackingDetailsForArrayConstraintsFromSetShipmentTrackingDetails(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shipmentTypeShipmentTrackingDetailsItem) {
            // validation for constraint: itemType
            if (!$shipmentTypeShipmentTrackingDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType) {
                $invalidValues[] = is_object($shipmentTypeShipmentTrackingDetailsItem) ? get_class($shipmentTypeShipmentTrackingDetailsItem) : sprintf('%s(%s)', gettype($shipmentTypeShipmentTrackingDetailsItem), var_export($shipmentTypeShipmentTrackingDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShipmentTrackingDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ShipmentTrackingDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShipmentTrackingDetails(array $shipmentTrackingDetails = []): self
    {
        // validation for constraint: array
        if ('' !== ($shipmentTrackingDetailsArrayErrorMessage = self::validateShipmentTrackingDetailsForArrayConstraintsFromSetShipmentTrackingDetails($shipmentTrackingDetails))) {
            throw new InvalidArgumentException($shipmentTrackingDetailsArrayErrorMessage, __LINE__);
        }
        $this->ShipmentTrackingDetails = $shipmentTrackingDetails;
        
        return $this;
    }
    /**
     * Add item to ShipmentTrackingDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function addToShipmentTrackingDetails(\macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType) {
            throw new InvalidArgumentException(sprintf('The ShipmentTrackingDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShipmentTrackingDetails[] = $item;
        
        return $this;
    }
    /**
     * Get ShipmentLineItem value
     * @return \macropage\ebaysdk\trading\StructType\ShipmentLineItemType|null
     */
    public function getShipmentLineItem(): ?\macropage\ebaysdk\trading\StructType\ShipmentLineItemType
    {
        return $this->ShipmentLineItem;
    }
    /**
     * Set ShipmentLineItem value
     * @param \macropage\ebaysdk\trading\StructType\ShipmentLineItemType $shipmentLineItem
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setShipmentLineItem(?\macropage\ebaysdk\trading\StructType\ShipmentLineItemType $shipmentLineItem = null): self
    {
        $this->ShipmentLineItem = $shipmentLineItem;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\ShipmentType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
