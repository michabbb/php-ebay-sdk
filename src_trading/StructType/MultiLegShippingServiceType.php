<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiLegShippingServiceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type specifies the shipping service and cost of the domestic leg of a Global Shipping Program shipment.
 * @subpackage Structs
 */
class MultiLegShippingServiceType extends AbstractStructBase
{
    /**
     * The ShippingService
     * Meta information extracted from the WSDL
     * - documentation: The shipping service specified for the domestic leg of a Global Shipping Program shipment. For the domestic leg, the value of this field can be any available shipping service that ships to the domestic address of the international
     * shipping provider.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingService = null;
    /**
     * The TotalShippingCost
     * Meta information extracted from the WSDL
     * - documentation: The total shipping cost of the domestic leg of a Global Shipping Program shipment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalShippingCost = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MultiLegShippingServiceType
     * @uses MultiLegShippingServiceType::setShippingService()
     * @uses MultiLegShippingServiceType::setTotalShippingCost()
     * @uses MultiLegShippingServiceType::setAny()
     * @param string $shippingService
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalShippingCost
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $shippingService = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalShippingCost = null, $any = null)
    {
        $this
            ->setShippingService($shippingService)
            ->setTotalShippingCost($totalShippingCost)
            ->setAny($any);
    }
    /**
     * Get ShippingService value
     * @return string|null
     */
    public function getShippingService(): ?string
    {
        return $this->ShippingService;
    }
    /**
     * Set ShippingService value
     * @param string $shippingService
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType
     */
    public function setShippingService(?string $shippingService = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingService) && !is_string($shippingService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingService, true), gettype($shippingService)), __LINE__);
        }
        $this->ShippingService = $shippingService;
        
        return $this;
    }
    /**
     * Get TotalShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalShippingCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalShippingCost;
    }
    /**
     * Set TotalShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalShippingCost
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType
     */
    public function setTotalShippingCost(?\macropage\ebaysdk\trading\StructType\AmountType $totalShippingCost = null): self
    {
        $this->TotalShippingCost = $totalShippingCost;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MultiLegShippingServiceType
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
