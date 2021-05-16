<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProStoresCheckoutPreferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProStoresCheckoutPreferenceType extends AbstractStructBase
{
    /**
     * The CheckoutRedirectProStores
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CheckoutRedirectProStores = null;
    /**
     * The ProStoresDetails
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: 0
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProStoresDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProStoresDetailsType $ProStoresDetails = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ProStoresCheckoutPreferenceType
     * @uses ProStoresCheckoutPreferenceType::setCheckoutRedirectProStores()
     * @uses ProStoresCheckoutPreferenceType::setProStoresDetails()
     * @uses ProStoresCheckoutPreferenceType::setAny()
     * @param bool $checkoutRedirectProStores
     * @param \macropage\ebaysdk\trading\StructType\ProStoresDetailsType $proStoresDetails
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $checkoutRedirectProStores = null, ?\macropage\ebaysdk\trading\StructType\ProStoresDetailsType $proStoresDetails = null, $any = null)
    {
        $this
            ->setCheckoutRedirectProStores($checkoutRedirectProStores)
            ->setProStoresDetails($proStoresDetails)
            ->setAny($any);
    }
    /**
     * Get CheckoutRedirectProStores value
     * @return bool|null
     */
    public function getCheckoutRedirectProStores(): ?bool
    {
        return $this->CheckoutRedirectProStores;
    }
    /**
     * Set CheckoutRedirectProStores value
     * @param bool $checkoutRedirectProStores
     * @return \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType
     */
    public function setCheckoutRedirectProStores(?bool $checkoutRedirectProStores = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkoutRedirectProStores) && !is_bool($checkoutRedirectProStores)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkoutRedirectProStores, true), gettype($checkoutRedirectProStores)), __LINE__);
        }
        $this->CheckoutRedirectProStores = $checkoutRedirectProStores;
        
        return $this;
    }
    /**
     * Get ProStoresDetails value
     * @return \macropage\ebaysdk\trading\StructType\ProStoresDetailsType|null
     */
    public function getProStoresDetails(): ?\macropage\ebaysdk\trading\StructType\ProStoresDetailsType
    {
        return $this->ProStoresDetails;
    }
    /**
     * Set ProStoresDetails value
     * @param \macropage\ebaysdk\trading\StructType\ProStoresDetailsType $proStoresDetails
     * @return \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType
     */
    public function setProStoresDetails(?\macropage\ebaysdk\trading\StructType\ProStoresDetailsType $proStoresDetails = null): self
    {
        $this->ProStoresDetails = $proStoresDetails;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType
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
