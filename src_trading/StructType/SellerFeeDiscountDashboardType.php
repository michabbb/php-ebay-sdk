<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerFeeDiscountDashboardType StructType
 * Meta informations extracted from the WSDL
 * - documentation: PowerSeller discount information (e.g., to show in a Seller Dashboard). As a PowerSeller, you can earn discounts on your monthly invoice Final Value Fees based on how well you're doing as a seller.
 * @subpackage Structs
 */
class SellerFeeDiscountDashboardType extends AbstractStructBase
{
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - documentation: PowerSeller discount as a percentage. For example, a 5% discount is returned as 0.05.
     * - minOccurs: 0
     * @var float
     */
    public $Percent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerFeeDiscountDashboardType
     * @uses SellerFeeDiscountDashboardType::setPercent()
     * @uses SellerFeeDiscountDashboardType::setAny()
     * @param float $percent
     * @param \DOMDocument $any
     */
    public function __construct($percent = null, \DOMDocument $any = null)
    {
        $this
            ->setPercent($percent)
            ->setAny($any);
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \macropage\ebaysdk\trading\StructType\SellerFeeDiscountDashboardType
     */
    public function setPercent($percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerFeeDiscountDashboardType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerFeeDiscountDashboardType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerFeeDiscountDashboardType
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
