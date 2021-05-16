<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingEstimatedDeliveryInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is not currently in use.
 * @subpackage Structs
 */
class ShippingEstimatedDeliveryInfoType extends AbstractStructBase
{
    /**
     * The OriginalDeliveryEstimatedTimeMin
     * Meta information extracted from the WSDL
     * - documentation: This field is not currently in use.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OriginalDeliveryEstimatedTimeMin = null;
    /**
     * The OriginalDeliveryEstimatedTimeMax
     * Meta information extracted from the WSDL
     * - documentation: This field is not currently in use.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OriginalDeliveryEstimatedTimeMax = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ShippingEstimatedDeliveryInfoType
     * @uses ShippingEstimatedDeliveryInfoType::setOriginalDeliveryEstimatedTimeMin()
     * @uses ShippingEstimatedDeliveryInfoType::setOriginalDeliveryEstimatedTimeMax()
     * @uses ShippingEstimatedDeliveryInfoType::setAny()
     * @param string $originalDeliveryEstimatedTimeMin
     * @param string $originalDeliveryEstimatedTimeMax
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $originalDeliveryEstimatedTimeMin = null, ?string $originalDeliveryEstimatedTimeMax = null, $any = null)
    {
        $this
            ->setOriginalDeliveryEstimatedTimeMin($originalDeliveryEstimatedTimeMin)
            ->setOriginalDeliveryEstimatedTimeMax($originalDeliveryEstimatedTimeMax)
            ->setAny($any);
    }
    /**
     * Get OriginalDeliveryEstimatedTimeMin value
     * @return string|null
     */
    public function getOriginalDeliveryEstimatedTimeMin(): ?string
    {
        return $this->OriginalDeliveryEstimatedTimeMin;
    }
    /**
     * Set OriginalDeliveryEstimatedTimeMin value
     * @param string $originalDeliveryEstimatedTimeMin
     * @return \macropage\ebaysdk\trading\StructType\ShippingEstimatedDeliveryInfoType
     */
    public function setOriginalDeliveryEstimatedTimeMin(?string $originalDeliveryEstimatedTimeMin = null): self
    {
        // validation for constraint: string
        if (!is_null($originalDeliveryEstimatedTimeMin) && !is_string($originalDeliveryEstimatedTimeMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalDeliveryEstimatedTimeMin, true), gettype($originalDeliveryEstimatedTimeMin)), __LINE__);
        }
        $this->OriginalDeliveryEstimatedTimeMin = $originalDeliveryEstimatedTimeMin;
        
        return $this;
    }
    /**
     * Get OriginalDeliveryEstimatedTimeMax value
     * @return string|null
     */
    public function getOriginalDeliveryEstimatedTimeMax(): ?string
    {
        return $this->OriginalDeliveryEstimatedTimeMax;
    }
    /**
     * Set OriginalDeliveryEstimatedTimeMax value
     * @param string $originalDeliveryEstimatedTimeMax
     * @return \macropage\ebaysdk\trading\StructType\ShippingEstimatedDeliveryInfoType
     */
    public function setOriginalDeliveryEstimatedTimeMax(?string $originalDeliveryEstimatedTimeMax = null): self
    {
        // validation for constraint: string
        if (!is_null($originalDeliveryEstimatedTimeMax) && !is_string($originalDeliveryEstimatedTimeMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalDeliveryEstimatedTimeMax, true), gettype($originalDeliveryEstimatedTimeMax)), __LINE__);
        }
        $this->OriginalDeliveryEstimatedTimeMax = $originalDeliveryEstimatedTimeMax;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingEstimatedDeliveryInfoType
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
