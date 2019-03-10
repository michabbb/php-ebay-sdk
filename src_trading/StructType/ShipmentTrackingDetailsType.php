<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentTrackingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type details the shipping carrier and shipment tracking number associated with a package shipment. It also contains information about the line items shipped through the Global Shipping program.
 * @subpackage Structs
 */
class ShipmentTrackingDetailsType extends AbstractStructBase
{
    /**
     * The ShippingCarrierUsed
     * Meta informations extracted from the WSDL
     * - documentation: The name of the shipping carrier used to ship the item. This field and the <strong>ShipmentTrackingNumber</strong> field are mutually dependent. When you submit <strong>ShippingCarrierUsed</strong>, you must also supply a value for
     * <strong>ShipmentTrackingNumber</strong>. When you submit <strong>ShipmentTrackingNumber</strong>, you must also supply a value for <strong>ShippingCarrierUsed</strong>. <br/><br/> When the site ID is Austria, Poland, or UK,
     * <strong>ShippingCarrierUsed</strong> can be any value, because it is not checked by eBay. For all other sites, only the following characters are allowed: letters (<code>a-z</code>, <code>A-Z</code>), numbers (<code>0-9</code>), space, and dash
     * (<code>-</code>). The site ID is specified in the <b>CompleteSale</b> request header. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Commonly used shipping carriers can be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set
     * to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field. However, as of release 961, <a
     * href="http://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/ShippingCarrierCodeType.html">ShippingCarrierCodeType</a> contains the most current list of shipping carriers and the countries served by each carrier. The <b>GeteBayDetails</b>
     * call is being updated to provide the same information more conveniently in an upcoming release. </span> <strong>For the CompleteSale call</strong>: <ul> <li>This field is not case sensitive in the <strong>CompleteSale</strong> request.</li> <li>When
     * using UPS Mail Innovations, supply the value <code>UPS-MI</code>. Buyers will subsequently be sent to the UPS Mail Innovations website for tracking status. </li> <li>When using FedEx SmartPost, supply the value <code>FedEx</code>. Buyers will
     * subsequently be sent to the FedEx web site for tracking status. </li> </ul> <strong>For the Get calls</strong>: When using the Global Shipping Program, this field returns a value of <code>PBI</code>. <br><br> Returned only if set.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCarrierUsed;
    /**
     * The ShipmentTrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: The tracking number assigned by the shipping carrier to the item shipment. This field and the <b>ShippingCarrierUsed</b> field are mutually dependent. When you submit <strong>ShipmentTrackingNumber</strong>, you must also supply a
     * value for <strong>ShippingCarrierUsed</strong>. When you submit <strong>ShippingCarrierUsed</strong>, you must also supply a value for <strong>ShipmentTrackingNumber</strong>. <br/><br/> The format of the tracking number must be consistent with the
     * format used by the specified shipping carrier (<strong>ShippingCarrierUsed</strong>). Typically, you should avoid spaces and hyphens. Returned only if set. <br><br> <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using
     * Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the real tracking number is only returned to the buyer or
     * seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentTrackingNumber;
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
     * Constructor method for ShipmentTrackingDetailsType
     * @uses ShipmentTrackingDetailsType::setShippingCarrierUsed()
     * @uses ShipmentTrackingDetailsType::setShipmentTrackingNumber()
     * @uses ShipmentTrackingDetailsType::setShipmentLineItem()
     * @uses ShipmentTrackingDetailsType::setAny()
     * @param string $shippingCarrierUsed
     * @param string $shipmentTrackingNumber
     * @param \macropage\ebaysdk\trading\StructType\ShipmentLineItemType $shipmentLineItem
     * @param \DOMDocument $any
     */
    public function __construct($shippingCarrierUsed = null, $shipmentTrackingNumber = null, \macropage\ebaysdk\trading\StructType\ShipmentLineItemType $shipmentLineItem = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingCarrierUsed($shippingCarrierUsed)
            ->setShipmentTrackingNumber($shipmentTrackingNumber)
            ->setShipmentLineItem($shipmentLineItem)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType
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
     * @uses \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShipmentTrackingDetailsType
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
