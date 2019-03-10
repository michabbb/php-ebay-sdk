<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductInventoryStatusType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the inventory status of a specific Selling Manager Product
 * @subpackage Structs
 */
class SellingManagerProductInventoryStatusType extends AbstractStructBase
{
    /**
     * The QuantityScheduled
     * Meta informations extracted from the WSDL
     * - documentation: Quantity of products scheduled to be listed.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityScheduled;
    /**
     * The QuantityActive
     * Meta informations extracted from the WSDL
     * - documentation: Quantity of products actively listed.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityActive;
    /**
     * The QuantitySold
     * Meta informations extracted from the WSDL
     * - documentation: Quantity of products sold.
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySold;
    /**
     * The QuantityUnsold
     * Meta informations extracted from the WSDL
     * - documentation: Quantity of product unsold.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityUnsold;
    /**
     * The SuccessPercent
     * Meta informations extracted from the WSDL
     * - documentation: Percentage of ended listings that sold.
     * - minOccurs: 0
     * @var float
     */
    public $SuccessPercent;
    /**
     * The AverageSellingPrice
     * Meta informations extracted from the WSDL
     * - documentation: Average selling price for the product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $AverageSellingPrice;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerProductInventoryStatusType
     * @uses SellingManagerProductInventoryStatusType::setQuantityScheduled()
     * @uses SellingManagerProductInventoryStatusType::setQuantityActive()
     * @uses SellingManagerProductInventoryStatusType::setQuantitySold()
     * @uses SellingManagerProductInventoryStatusType::setQuantityUnsold()
     * @uses SellingManagerProductInventoryStatusType::setSuccessPercent()
     * @uses SellingManagerProductInventoryStatusType::setAverageSellingPrice()
     * @uses SellingManagerProductInventoryStatusType::setAny()
     * @param int $quantityScheduled
     * @param int $quantityActive
     * @param int $quantitySold
     * @param int $quantityUnsold
     * @param float $successPercent
     * @param \macropage\ebaysdk\trading\StructType\AmountType $averageSellingPrice
     * @param \DOMDocument $any
     */
    public function __construct($quantityScheduled = null, $quantityActive = null, $quantitySold = null, $quantityUnsold = null, $successPercent = null, \macropage\ebaysdk\trading\StructType\AmountType $averageSellingPrice = null, \DOMDocument $any = null)
    {
        $this
            ->setQuantityScheduled($quantityScheduled)
            ->setQuantityActive($quantityActive)
            ->setQuantitySold($quantitySold)
            ->setQuantityUnsold($quantityUnsold)
            ->setSuccessPercent($successPercent)
            ->setAverageSellingPrice($averageSellingPrice)
            ->setAny($any);
    }
    /**
     * Get QuantityScheduled value
     * @return int|null
     */
    public function getQuantityScheduled()
    {
        return $this->QuantityScheduled;
    }
    /**
     * Set QuantityScheduled value
     * @param int $quantityScheduled
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantityScheduled($quantityScheduled = null)
    {
        // validation for constraint: int
        if (!is_null($quantityScheduled) && !is_numeric($quantityScheduled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantityScheduled)), __LINE__);
        }
        $this->QuantityScheduled = $quantityScheduled;
        return $this;
    }
    /**
     * Get QuantityActive value
     * @return int|null
     */
    public function getQuantityActive()
    {
        return $this->QuantityActive;
    }
    /**
     * Set QuantityActive value
     * @param int $quantityActive
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantityActive($quantityActive = null)
    {
        // validation for constraint: int
        if (!is_null($quantityActive) && !is_numeric($quantityActive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantityActive)), __LINE__);
        }
        $this->QuantityActive = $quantityActive;
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
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
     * Get QuantityUnsold value
     * @return int|null
     */
    public function getQuantityUnsold()
    {
        return $this->QuantityUnsold;
    }
    /**
     * Set QuantityUnsold value
     * @param int $quantityUnsold
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantityUnsold($quantityUnsold = null)
    {
        // validation for constraint: int
        if (!is_null($quantityUnsold) && !is_numeric($quantityUnsold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantityUnsold)), __LINE__);
        }
        $this->QuantityUnsold = $quantityUnsold;
        return $this;
    }
    /**
     * Get SuccessPercent value
     * @return float|null
     */
    public function getSuccessPercent()
    {
        return $this->SuccessPercent;
    }
    /**
     * Set SuccessPercent value
     * @param float $successPercent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setSuccessPercent($successPercent = null)
    {
        $this->SuccessPercent = $successPercent;
        return $this;
    }
    /**
     * Get AverageSellingPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAverageSellingPrice()
    {
        return $this->AverageSellingPrice;
    }
    /**
     * Set AverageSellingPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $averageSellingPrice
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setAverageSellingPrice(\macropage\ebaysdk\trading\StructType\AmountType $averageSellingPrice = null)
    {
        $this->AverageSellingPrice = $averageSellingPrice;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
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
