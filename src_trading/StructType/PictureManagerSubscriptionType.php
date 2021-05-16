<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerSubscriptionType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerSubscriptionType extends AbstractStructBase
{
    /**
     * The SubscriptionLevel
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SubscriptionLevel = null;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Fee = null;
    /**
     * The StorageSize
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StorageSize = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PictureManagerSubscriptionType
     * @uses PictureManagerSubscriptionType::setSubscriptionLevel()
     * @uses PictureManagerSubscriptionType::setFee()
     * @uses PictureManagerSubscriptionType::setStorageSize()
     * @uses PictureManagerSubscriptionType::setAny()
     * @param string $subscriptionLevel
     * @param \macropage\ebaysdk\trading\StructType\AmountType $fee
     * @param int $storageSize
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $subscriptionLevel = null, ?\macropage\ebaysdk\trading\StructType\AmountType $fee = null, ?int $storageSize = null, $any = null)
    {
        $this
            ->setSubscriptionLevel($subscriptionLevel)
            ->setFee($fee)
            ->setStorageSize($storageSize)
            ->setAny($any);
    }
    /**
     * Get SubscriptionLevel value
     * @return string|null
     */
    public function getSubscriptionLevel(): ?string
    {
        return $this->SubscriptionLevel;
    }
    /**
     * Set SubscriptionLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $subscriptionLevel
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerSubscriptionType
     */
    public function setSubscriptionLevel(?string $subscriptionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid($subscriptionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType', is_array($subscriptionLevel) ? implode(', ', $subscriptionLevel) : var_export($subscriptionLevel, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SubscriptionLevel = $subscriptionLevel;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerSubscriptionType
     */
    public function setFee(?\macropage\ebaysdk\trading\StructType\AmountType $fee = null): self
    {
        $this->Fee = $fee;
        
        return $this;
    }
    /**
     * Get StorageSize value
     * @return int|null
     */
    public function getStorageSize(): ?int
    {
        return $this->StorageSize;
    }
    /**
     * Set StorageSize value
     * @param int $storageSize
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerSubscriptionType
     */
    public function setStorageSize(?int $storageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($storageSize) && !(is_int($storageSize) || ctype_digit($storageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storageSize, true), gettype($storageSize)), __LINE__);
        }
        $this->StorageSize = $storageSize;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerSubscriptionType
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
