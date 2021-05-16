<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductInventoryStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes the inventory status of a specific Selling Manager Product
 * @subpackage Structs
 */
class SellingManagerProductInventoryStatusType extends AbstractStructBase
{
    /**
     * The QuantityScheduled
     * Meta information extracted from the WSDL
     * - documentation: Quantity of products scheduled to be listed.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantityScheduled = null;
    /**
     * The QuantityActive
     * Meta information extracted from the WSDL
     * - documentation: Quantity of products actively listed.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantityActive = null;
    /**
     * The QuantitySold
     * Meta information extracted from the WSDL
     * - documentation: Quantity of products sold.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantitySold = null;
    /**
     * The QuantityUnsold
     * Meta information extracted from the WSDL
     * - documentation: Quantity of product unsold.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantityUnsold = null;
    /**
     * The SuccessPercent
     * Meta information extracted from the WSDL
     * - documentation: Percentage of ended listings that sold.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $SuccessPercent = null;
    /**
     * The AverageSellingPrice
     * Meta information extracted from the WSDL
     * - documentation: Average selling price for the product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $AverageSellingPrice = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $quantityScheduled = null, ?int $quantityActive = null, ?int $quantitySold = null, ?int $quantityUnsold = null, ?float $successPercent = null, ?\macropage\ebaysdk\trading\StructType\AmountType $averageSellingPrice = null, $any = null)
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
    public function getQuantityScheduled(): ?int
    {
        return $this->QuantityScheduled;
    }
    /**
     * Set QuantityScheduled value
     * @param int $quantityScheduled
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantityScheduled(?int $quantityScheduled = null): self
    {
        // validation for constraint: int
        if (!is_null($quantityScheduled) && !(is_int($quantityScheduled) || ctype_digit($quantityScheduled))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityScheduled, true), gettype($quantityScheduled)), __LINE__);
        }
        $this->QuantityScheduled = $quantityScheduled;
        
        return $this;
    }
    /**
     * Get QuantityActive value
     * @return int|null
     */
    public function getQuantityActive(): ?int
    {
        return $this->QuantityActive;
    }
    /**
     * Set QuantityActive value
     * @param int $quantityActive
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantityActive(?int $quantityActive = null): self
    {
        // validation for constraint: int
        if (!is_null($quantityActive) && !(is_int($quantityActive) || ctype_digit($quantityActive))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityActive, true), gettype($quantityActive)), __LINE__);
        }
        $this->QuantityActive = $quantityActive;
        
        return $this;
    }
    /**
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold(): ?int
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantitySold(?int $quantitySold = null): self
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !(is_int($quantitySold) || ctype_digit($quantitySold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantitySold, true), gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        
        return $this;
    }
    /**
     * Get QuantityUnsold value
     * @return int|null
     */
    public function getQuantityUnsold(): ?int
    {
        return $this->QuantityUnsold;
    }
    /**
     * Set QuantityUnsold value
     * @param int $quantityUnsold
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setQuantityUnsold(?int $quantityUnsold = null): self
    {
        // validation for constraint: int
        if (!is_null($quantityUnsold) && !(is_int($quantityUnsold) || ctype_digit($quantityUnsold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityUnsold, true), gettype($quantityUnsold)), __LINE__);
        }
        $this->QuantityUnsold = $quantityUnsold;
        
        return $this;
    }
    /**
     * Get SuccessPercent value
     * @return float|null
     */
    public function getSuccessPercent(): ?float
    {
        return $this->SuccessPercent;
    }
    /**
     * Set SuccessPercent value
     * @param float $successPercent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setSuccessPercent(?float $successPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($successPercent) && !(is_float($successPercent) || is_numeric($successPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($successPercent, true), gettype($successPercent)), __LINE__);
        }
        $this->SuccessPercent = $successPercent;
        
        return $this;
    }
    /**
     * Get AverageSellingPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAverageSellingPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->AverageSellingPrice;
    }
    /**
     * Set AverageSellingPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $averageSellingPrice
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
     */
    public function setAverageSellingPrice(?\macropage\ebaysdk\trading\StructType\AmountType $averageSellingPrice = null): self
    {
        $this->AverageSellingPrice = $averageSellingPrice;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
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
