<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Shipment</b> container, which is used by the seller in <b>CompleteSale</b> to provide shipping information.
 * @subpackage Structs
 */
class ShipmentType extends AbstractStructBase
{
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
     * The ShipmentTrackingDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the tracking number and shipping carrier associated with the shipment of one item (package). <br><br> Because an order can have multiple line items and/or packages, there can be multiple
     * <b>ShipmentTrackingDetails</b> containers under the <b>Shipment</b> container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[]
     */
    protected ?array $ShipmentTrackingDetails = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ShipmentType
     * @uses ShipmentType::setShippedTime()
     * @uses ShipmentType::setShipmentTrackingDetails()
     * @uses ShipmentType::setAny()
     * @param string $shippedTime
     * @param \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[] $shipmentTrackingDetails
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $shippedTime = null, ?array $shipmentTrackingDetails = null, $any = null)
    {
        $this
            ->setShippedTime($shippedTime)
            ->setShipmentTrackingDetails($shipmentTrackingDetails)
            ->setAny($any);
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
     * Get ShipmentTrackingDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType[]
     */
    public function getShipmentTrackingDetails(): ?array
    {
        return $this->ShipmentTrackingDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setShipmentTrackingDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipmentTrackingDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentTrackingDetailsForArrayConstraintsFromSetShipmentTrackingDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
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
    public function setShipmentTrackingDetails(?array $shipmentTrackingDetails = null): self
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
