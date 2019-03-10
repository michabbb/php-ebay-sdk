<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiLegShippingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type provides information about the domestic leg of a Global Shipping Program shipment. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The <strong>LogisticsProviderShipmentToBuyer</strong> field is reserved for the
 * exclusive use of the international shipping provider. </span>
 * @subpackage Structs
 */
class MultiLegShippingDetailsType extends AbstractStructBase
{
    /**
     * The SellerShipmentToLogisticsProvider
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about the domestic leg of a Global Shipping Programn shipment, including the seller-selected shipping service, the domestic shipping cost, the domestic address of the international shipping provider, and the
     * estimated shipping time range.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
     */
    public $SellerShipmentToLogisticsProvider;
    /**
     * The LogisticsProviderShipmentToBuyer
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for use by the international shipping provider.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MultiLegShipmentType
     */
    public $LogisticsProviderShipmentToBuyer;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MultiLegShippingDetailsType
     * @uses MultiLegShippingDetailsType::setSellerShipmentToLogisticsProvider()
     * @uses MultiLegShippingDetailsType::setLogisticsProviderShipmentToBuyer()
     * @uses MultiLegShippingDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider = null, \macropage\ebaysdk\trading\StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer = null, \DOMDocument $any = null)
    {
        $this
            ->setSellerShipmentToLogisticsProvider($sellerShipmentToLogisticsProvider)
            ->setLogisticsProviderShipmentToBuyer($logisticsProviderShipmentToBuyer)
            ->setAny($any);
    }
    /**
     * Get SellerShipmentToLogisticsProvider value
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType|null
     */
    public function getSellerShipmentToLogisticsProvider()
    {
        return $this->SellerShipmentToLogisticsProvider;
    }
    /**
     * Set SellerShipmentToLogisticsProvider value
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType
     */
    public function setSellerShipmentToLogisticsProvider(\macropage\ebaysdk\trading\StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider = null)
    {
        $this->SellerShipmentToLogisticsProvider = $sellerShipmentToLogisticsProvider;
        return $this;
    }
    /**
     * Get LogisticsProviderShipmentToBuyer value
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType|null
     */
    public function getLogisticsProviderShipmentToBuyer()
    {
        return $this->LogisticsProviderShipmentToBuyer;
    }
    /**
     * Set LogisticsProviderShipmentToBuyer value
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType
     */
    public function setLogisticsProviderShipmentToBuyer(\macropage\ebaysdk\trading\StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer = null)
    {
        $this->LogisticsProviderShipmentToBuyer = $logisticsProviderShipmentToBuyer;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType
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
