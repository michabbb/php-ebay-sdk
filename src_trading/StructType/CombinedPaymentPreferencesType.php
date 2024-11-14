<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CombinedPaymentPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used to indicate if the seller supports <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/manage-fulfill-combine-invoices.html">Combined Invoice</a> orders, and if so, defines whether the seller
 * specifies any shipping discount before or after purchase.
 * @subpackage Structs
 */
class CombinedPaymentPreferencesType extends AbstractStructBase
{
    /**
     * The CombinedPaymentOption
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not a seller wants to allow buyers to combine single order line items into a Combined Invoice order. A Combined Invoice order can be created by the buyer or seller if multiple unpaid order line items exist
     * between the same buyer and seller. Often, a Combined Invoice order can reduce shipping and handling expenses for the buyer and seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CombinedPaymentOption = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CombinedPaymentPreferencesType
     * @uses CombinedPaymentPreferencesType::setCombinedPaymentOption()
     * @uses CombinedPaymentPreferencesType::setAny()
     * @param string $combinedPaymentOption
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $combinedPaymentOption = null, $any = null)
    {
        $this
            ->setCombinedPaymentOption($combinedPaymentOption)
            ->setAny($any);
    }
    /**
     * Get CombinedPaymentOption value
     * @return string|null
     */
    public function getCombinedPaymentOption(): ?string
    {
        return $this->CombinedPaymentOption;
    }
    /**
     * Set CombinedPaymentOption value
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $combinedPaymentOption
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
     */
    public function setCombinedPaymentOption(?string $combinedPaymentOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::valueIsValid($combinedPaymentOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType', is_array($combinedPaymentOption) ? implode(', ', $combinedPaymentOption) : var_export($combinedPaymentOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CombinedPaymentOptionCodeType::getValidValues())), __LINE__);
        }
        $this->CombinedPaymentOption = $combinedPaymentOption;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\CombinedPaymentPreferencesType
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
