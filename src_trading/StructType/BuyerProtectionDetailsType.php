<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerProtectionDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <strong>ApplyBuyerProtection</strong> container, which consists of details related to whether or not the item is eligible for buyer protection and which of the buyer protection programs will cover the item.
 * @subpackage Structs
 */
class BuyerProtectionDetailsType extends AbstractStructBase
{
    /**
     * The BuyerProtectionSource
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the type of buyer protection program applicable for the item. This field is always returned with the <strong>ApplyBuyerProtection</strong> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BuyerProtectionSource = null;
    /**
     * The BuyerProtectionStatus
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the item's eligibility for the buyer protection program listed in the <strong>ApplyBuyerProtection.BuyerProtectionSource</strong> field. This field is always returned with the
     * <strong>ApplyBuyerProtection</strong> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BuyerProtectionStatus = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BuyerProtectionDetailsType
     * @uses BuyerProtectionDetailsType::setBuyerProtectionSource()
     * @uses BuyerProtectionDetailsType::setBuyerProtectionStatus()
     * @uses BuyerProtectionDetailsType::setAny()
     * @param string $buyerProtectionSource
     * @param string $buyerProtectionStatus
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $buyerProtectionSource = null, ?string $buyerProtectionStatus = null, $any = null)
    {
        $this
            ->setBuyerProtectionSource($buyerProtectionSource)
            ->setBuyerProtectionStatus($buyerProtectionStatus)
            ->setAny($any);
    }
    /**
     * Get BuyerProtectionSource value
     * @return string|null
     */
    public function getBuyerProtectionSource(): ?string
    {
        return $this->BuyerProtectionSource;
    }
    /**
     * Set BuyerProtectionSource value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerProtectionSourceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerProtectionSourceCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $buyerProtectionSource
     * @return \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType
     */
    public function setBuyerProtectionSource(?string $buyerProtectionSource = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerProtectionSourceCodeType::valueIsValid($buyerProtectionSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerProtectionSourceCodeType', is_array($buyerProtectionSource) ? implode(', ', $buyerProtectionSource) : var_export($buyerProtectionSource, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerProtectionSourceCodeType::getValidValues())), __LINE__);
        }
        $this->BuyerProtectionSource = $buyerProtectionSource;
        
        return $this;
    }
    /**
     * Get BuyerProtectionStatus value
     * @return string|null
     */
    public function getBuyerProtectionStatus(): ?string
    {
        return $this->BuyerProtectionStatus;
    }
    /**
     * Set BuyerProtectionStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $buyerProtectionStatus
     * @return \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType
     */
    public function setBuyerProtectionStatus(?string $buyerProtectionStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::valueIsValid($buyerProtectionStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType', is_array($buyerProtectionStatus) ? implode(', ', $buyerProtectionStatus) : var_export($buyerProtectionStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::getValidValues())), __LINE__);
        }
        $this->BuyerProtectionStatus = $buyerProtectionStatus;
        
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType
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
