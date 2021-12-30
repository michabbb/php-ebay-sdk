<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceCostType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ServiceCost</b> container to display any service cost to the buyer for an item that will go through the Authenticity Guarantee process.
 * @subpackage Structs
 */
class ServiceCostType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is given in the currency of the listing site.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Amount = null;
    /**
     * The ConvertedFromAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount (in the buyer's currency) charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is only applicable if the buyer resides in another country that uses a
     * different currency than the currency of the listing site.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ConvertedFromAmount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ServiceCostType
     * @uses ServiceCostType::setAmount()
     * @uses ServiceCostType::setConvertedFromAmount()
     * @uses ServiceCostType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedFromAmount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $amount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $convertedFromAmount = null, $any = null)
    {
        $this
            ->setAmount($amount)
            ->setConvertedFromAmount($convertedFromAmount)
            ->setAny($any);
    }
    /**
     * Get Amount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $amount
     * @return \macropage\ebaysdk\trading\StructType\ServiceCostType
     */
    public function setAmount(?\macropage\ebaysdk\trading\StructType\AmountType $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get ConvertedFromAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedFromAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ConvertedFromAmount;
    }
    /**
     * Set ConvertedFromAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedFromAmount
     * @return \macropage\ebaysdk\trading\StructType\ServiceCostType
     */
    public function setConvertedFromAmount(?\macropage\ebaysdk\trading\StructType\AmountType $convertedFromAmount = null): self
    {
        $this->ConvertedFromAmount = $convertedFromAmount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ServiceCostType
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
