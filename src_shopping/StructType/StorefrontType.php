<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StorefrontType StructType
 * Meta information extracted from the WSDL
 * - documentation: Complex type used by the <b>Storefront</b> container used by the <b>GetSingleItem</b> and <b>GetMultipleItems</b> if the seller of the item has an eBay Store subscription.
 * @subpackage Structs
 */
class StorefrontType extends AbstractStructBase
{
    /**
     * The StoreURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the seller's eBay Store. This field is always returned with the <b>Storefront</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StoreURL = null;
    /**
     * The StoreName
     * Meta information extracted from the WSDL
     * - documentation: The name of the seller's eBay Store. This field is always returned with the <b>Storefront</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StoreName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StorefrontType
     * @uses StorefrontType::setStoreURL()
     * @uses StorefrontType::setStoreName()
     * @uses StorefrontType::setAny()
     * @param string $storeURL
     * @param string $storeName
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $storeURL = null, ?string $storeName = null, $any = null)
    {
        $this
            ->setStoreURL($storeURL)
            ->setStoreName($storeName)
            ->setAny($any);
    }
    /**
     * Get StoreURL value
     * @return string|null
     */
    public function getStoreURL(): ?string
    {
        return $this->StoreURL;
    }
    /**
     * Set StoreURL value
     * @param string $storeURL
     * @return \macropage\ebaysdk\shopping\StructType\StorefrontType
     */
    public function setStoreURL(?string $storeURL = null): self
    {
        // validation for constraint: string
        if (!is_null($storeURL) && !is_string($storeURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeURL, true), gettype($storeURL)), __LINE__);
        }
        $this->StoreURL = $storeURL;
        
        return $this;
    }
    /**
     * Get StoreName value
     * @return string|null
     */
    public function getStoreName(): ?string
    {
        return $this->StoreName;
    }
    /**
     * Set StoreName value
     * @param string $storeName
     * @return \macropage\ebaysdk\shopping\StructType\StorefrontType
     */
    public function setStoreName(?string $storeName = null): self
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeName, true), gettype($storeName)), __LINE__);
        }
        $this->StoreName = $storeName;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\StorefrontType
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
