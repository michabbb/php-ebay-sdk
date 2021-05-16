<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiLegShippingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type provides information about the domestic leg of a Global Shipping Program shipment. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The <strong>LogisticsProviderShipmentToBuyer</strong> field is reserved for the
 * exclusive use of the international shipping provider. </span>
 * @subpackage Structs
 */
class MultiLegShippingDetailsType extends AbstractStructBase
{
    /**
     * The SellerShipmentToLogisticsProvider
     * Meta information extracted from the WSDL
     * - documentation: Contains information about the domestic leg of a Global Shipping Programn shipment, including the seller-selected shipping service, the domestic shipping cost, the domestic address of the international shipping provider, and the
     * estimated shipping time range.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MultiLegShipmentType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MultiLegShipmentType $SellerShipmentToLogisticsProvider = null;
    /**
     * The LogisticsProviderShipmentToBuyer
     * Meta information extracted from the WSDL
     * - documentation: Reserved for use by the international shipping provider.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MultiLegShipmentType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MultiLegShipmentType $LogisticsProviderShipmentToBuyer = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MultiLegShippingDetailsType
     * @uses MultiLegShippingDetailsType::setSellerShipmentToLogisticsProvider()
     * @uses MultiLegShippingDetailsType::setLogisticsProviderShipmentToBuyer()
     * @uses MultiLegShippingDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider = null, ?\macropage\ebaysdk\trading\StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer = null, $any = null)
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
    public function getSellerShipmentToLogisticsProvider(): ?\macropage\ebaysdk\trading\StructType\MultiLegShipmentType
    {
        return $this->SellerShipmentToLogisticsProvider;
    }
    /**
     * Set SellerShipmentToLogisticsProvider value
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType
     */
    public function setSellerShipmentToLogisticsProvider(?\macropage\ebaysdk\trading\StructType\MultiLegShipmentType $sellerShipmentToLogisticsProvider = null): self
    {
        $this->SellerShipmentToLogisticsProvider = $sellerShipmentToLogisticsProvider;
        
        return $this;
    }
    /**
     * Get LogisticsProviderShipmentToBuyer value
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShipmentType|null
     */
    public function getLogisticsProviderShipmentToBuyer(): ?\macropage\ebaysdk\trading\StructType\MultiLegShipmentType
    {
        return $this->LogisticsProviderShipmentToBuyer;
    }
    /**
     * Set LogisticsProviderShipmentToBuyer value
     * @param \macropage\ebaysdk\trading\StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType
     */
    public function setLogisticsProviderShipmentToBuyer(?\macropage\ebaysdk\trading\StructType\MultiLegShipmentType $logisticsProviderShipmentToBuyer = null): self
    {
        $this->LogisticsProviderShipmentToBuyer = $logisticsProviderShipmentToBuyer;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingDetailsType
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
