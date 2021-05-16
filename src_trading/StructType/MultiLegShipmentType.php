<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiLegShipmentType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type provides information about the shipping service, cost, address, and delivery estimates for the domestic leg of a Global Shipping Program shipment. This type is only applicable for international shipments using the GSP
 * program.
 * @subpackage Structs
 */
class MultiLegShipmentType extends AbstractStructBase
{
    /**
     * The ShippingServiceDetails
     * Meta information extracted from the WSDL
     * - documentation: Contains information about the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType $ShippingServiceDetails = null;
    /**
     * The ShipToAddress
     * Meta information extracted from the WSDL
     * - documentation: Contains shipping address information for the domestic leg of a Global Shipping Program shipment. This container includes the ReferenceID field, which can be printed on the package to give the international shipping provider a unique
     * identifier for the order.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $ShipToAddress = null;
    /**
     * The ShippingTimeMin
     * Meta information extracted from the WSDL
     * - documentation: The integer value returned here indicates the minimum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic
     * shipping partner. <br><br> This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping
     * partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingTimeMin = null;
    /**
     * The ShippingTimeMax
     * Meta information extracted from the WSDL
     * - documentation: The integer value returned here indicates the maximum number of business days that the corresponding shipping service (indicated in <b>ShippingServiceDetails.ShippingService</b> field) will take to be delivered to eBay's domestic
     * shipping partner. <br><br> This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier for shipment to eBay's domestic shipping
     * partner. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingTimeMax = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MultiLegShipmentType
     * @uses MultiLegShipmentType::setShippingServiceDetails()
     * @uses MultiLegShipmentType::setShipToAddress()
     * @uses MultiLegShipmentType::setShippingTimeMin()
     * @uses MultiLegShipmentType::setShippingTimeMax()
     * @uses MultiLegShipmentType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType $shippingServiceDetails
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shipToAddress
     * @param int $shippingTimeMin
     * @param int $shippingTimeMax
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType $shippingServiceDetails = null, ?\macropage\ebaysdk\trading\StructType\AddressType $shipToAddress = null, ?int $shippingTimeMin = null, ?int $shippingTimeMax = null, $any = null)
    {
        $this
            ->setShippingServiceDetails($shippingServiceDetails)
            ->setShipToAddress($shipToAddress)
            ->setShippingTimeMin($shippingTimeMin)
            ->setShippingTimeMax($shippingTimeMax)
            ->setAny($any);
    }
    /**
     * Get ShippingServiceDetails value
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType|null
     */
    public function getShippingServiceDetails(): ?\macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType
    {
        return $this->ShippingServiceDetails;
    }
    /**
     * Set ShippingServiceDetails value
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType $shippingServiceDetails
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
     */
    public function setShippingServiceDetails(?\macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType $shippingServiceDetails = null): self
    {
        $this->ShippingServiceDetails = $shippingServiceDetails;
        
        return $this;
    }
    /**
     * Get ShipToAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShipToAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->ShipToAddress;
    }
    /**
     * Set ShipToAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shipToAddress
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
     */
    public function setShipToAddress(?\macropage\ebaysdk\trading\StructType\AddressType $shipToAddress = null): self
    {
        $this->ShipToAddress = $shipToAddress;
        
        return $this;
    }
    /**
     * Get ShippingTimeMin value
     * @return int|null
     */
    public function getShippingTimeMin(): ?int
    {
        return $this->ShippingTimeMin;
    }
    /**
     * Set ShippingTimeMin value
     * @param int $shippingTimeMin
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
     */
    public function setShippingTimeMin(?int $shippingTimeMin = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMin) && !(is_int($shippingTimeMin) || ctype_digit($shippingTimeMin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingTimeMin, true), gettype($shippingTimeMin)), __LINE__);
        }
        $this->ShippingTimeMin = $shippingTimeMin;
        
        return $this;
    }
    /**
     * Get ShippingTimeMax value
     * @return int|null
     */
    public function getShippingTimeMax(): ?int
    {
        return $this->ShippingTimeMax;
    }
    /**
     * Set ShippingTimeMax value
     * @param int $shippingTimeMax
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
     */
    public function setShippingTimeMax(?int $shippingTimeMax = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMax) && !(is_int($shippingTimeMax) || ctype_digit($shippingTimeMax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingTimeMax, true), gettype($shippingTimeMax)), __LINE__);
        }
        $this->ShippingTimeMax = $shippingTimeMax;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
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
