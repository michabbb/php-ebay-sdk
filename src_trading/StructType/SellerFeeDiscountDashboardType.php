<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerFeeDiscountDashboardType StructType
 * Meta information extracted from the WSDL
 * - documentation: PowerSeller discount information (e.g., to show in a Seller Dashboard). As a PowerSeller, you can earn discounts on your monthly invoice Final Value Fees based on how well you're doing as a seller.
 * @subpackage Structs
 */
class SellerFeeDiscountDashboardType extends AbstractStructBase
{
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: PowerSeller discount as a percentage. For example, a 5% discount is returned as 0.05.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Percent = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellerFeeDiscountDashboardType
     * @uses SellerFeeDiscountDashboardType::setPercent()
     * @uses SellerFeeDiscountDashboardType::setAny()
     * @param float $percent
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?float $percent = null, $any = null)
    {
        $this
            ->setPercent($percent)
            ->setAny($any);
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \macropage\ebaysdk\trading\StructType\SellerFeeDiscountDashboardType
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->Percent = $percent;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerFeeDiscountDashboardType
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
