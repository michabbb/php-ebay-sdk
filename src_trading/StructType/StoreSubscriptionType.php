<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreSubscriptionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the Subscription container that is returned in GetStoreOptions to indicate the subscription level and monthly fee associated with the eBay Store.
 * @subpackage Structs
 */
class StoreSubscriptionType extends AbstractStructBase
{
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - documentation: Store subscription level.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Level = null;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: Monthly fee for the Store subscription level.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Fee = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreSubscriptionType
     * @uses StoreSubscriptionType::setLevel()
     * @uses StoreSubscriptionType::setFee()
     * @uses StoreSubscriptionType::setAny()
     * @param string $level
     * @param \macropage\ebaysdk\trading\StructType\AmountType $fee
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $level = null, ?\macropage\ebaysdk\trading\StructType\AmountType $fee = null, $any = null)
    {
        $this
            ->setLevel($level)
            ->setFee($fee)
            ->setAny($any);
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel(): ?string
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $level
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType
     */
    public function setLevel(?string $level = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::valueIsValid($level)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType', is_array($level) ? implode(', ', $level) : var_export($level, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->Level = $level;
        
        return $this;
    }
    /**
     * Get Fee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getFee(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $fee
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType
     */
    public function setFee(?\macropage\ebaysdk\trading\StructType\AmountType $fee = null): self
    {
        $this->Fee = $fee;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType
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
