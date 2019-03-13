<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingStatusType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type indicates the quantity sold for each variation within a multiple-variation listing. This type is only applicable for multiple-variation listings, and is not returned at the listing level. To return data on individual
 * variations within the listing, you must include the <b>IncludeSelector</b> field and set its value to <code>Variations</code>.
 * @subpackage Structs
 */
class SellingStatusType extends AbstractStructBase
{
    /**
     * The ConvertedCurrentPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $ConvertedCurrentPrice;
    /**
     * The CurrentPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer returned. See <b>Variation.StartPrice</b> instead.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $CurrentPrice;
    /**
     * The QuantitySold
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the quantity sold for the corresponding variation. You can subtract this integer value from the value in the <b>Variation.Quantity</b> field to determine the quantity of the variation that is still
     * available for purchase.
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySold;
    /**
     * The QuantitySoldByPickupInStore
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the total quantity of the corresponding variation sold and picked up by buyers using the In-Store Pickup option. This value is the total quantity of this variation purchased by one or more buyers using the
     * In-Store Pickup option, and is not the total number of In-Store Pickup orders for that ivariation. So, if two buyers selected the In-Store Pickup option, but each of these buyers bought a quantity of five of these variations (in same purchase), the
     * <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value would be <code>10</code> and not <code>2</code>. <br> <br> This field will only be returned if the listing is eligible for In-Store Pickup. <br/><br/> <span
     * class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants in US, and can only be applied to multiple-quantity, fixed-price listings. </span>
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySoldByPickupInStore;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingStatusType
     * @uses SellingStatusType::setConvertedCurrentPrice()
     * @uses SellingStatusType::setCurrentPrice()
     * @uses SellingStatusType::setQuantitySold()
     * @uses SellingStatusType::setQuantitySoldByPickupInStore()
     * @uses SellingStatusType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $currentPrice
     * @param int $quantitySold
     * @param int $quantitySoldByPickupInStore
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice = null, \macropage\ebaysdk\shopping\StructType\AmountType $currentPrice = null, $quantitySold = null, $quantitySoldByPickupInStore = null, \DOMDocument $any = null)
    {
        $this
            ->setConvertedCurrentPrice($convertedCurrentPrice)
            ->setCurrentPrice($currentPrice)
            ->setQuantitySold($quantitySold)
            ->setQuantitySoldByPickupInStore($quantitySoldByPickupInStore)
            ->setAny($any);
    }
    /**
     * Get ConvertedCurrentPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getConvertedCurrentPrice()
    {
        return $this->ConvertedCurrentPrice;
    }
    /**
     * Set ConvertedCurrentPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
     */
    public function setConvertedCurrentPrice(\macropage\ebaysdk\shopping\StructType\AmountType $convertedCurrentPrice = null)
    {
        $this->ConvertedCurrentPrice = $convertedCurrentPrice;
        return $this;
    }
    /**
     * Get CurrentPrice value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getCurrentPrice()
    {
        return $this->CurrentPrice;
    }
    /**
     * Set CurrentPrice value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $currentPrice
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
     */
    public function setCurrentPrice(\macropage\ebaysdk\shopping\StructType\AmountType $currentPrice = null)
    {
        $this->CurrentPrice = $currentPrice;
        return $this;
    }
    /**
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold()
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
     */
    public function setQuantitySold($quantitySold = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !is_numeric($quantitySold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        return $this;
    }
    /**
     * Get QuantitySoldByPickupInStore value
     * @return int|null
     */
    public function getQuantitySoldByPickupInStore()
    {
        return $this->QuantitySoldByPickupInStore;
    }
    /**
     * Set QuantitySoldByPickupInStore value
     * @param int $quantitySoldByPickupInStore
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
     */
    public function setQuantitySoldByPickupInStore($quantitySoldByPickupInStore = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySoldByPickupInStore) && !is_numeric($quantitySoldByPickupInStore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantitySoldByPickupInStore)), __LINE__);
        }
        $this->QuantitySoldByPickupInStore = $quantitySoldByPickupInStore;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\SellingStatusType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
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
     * @return \macropage\ebaysdk\shopping\StructType\SellingStatusType
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
