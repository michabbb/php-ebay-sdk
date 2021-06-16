<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returned if the user is a Selling Manager user. Defines product information for Selling Manager users.
 * @subpackage Structs
 */
class SellingManagerProductDetailsType extends AbstractStructBase
{
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - documentation: The name of a Selling Manager product.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingManagerProductDetailsType
     * @uses SellingManagerProductDetailsType::setProductName()
     * @uses SellingManagerProductDetailsType::setAny()
     * @param string $productName
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $productName = null, $any = null)
    {
        $this
            ->setProductName($productName)
            ->setAny($any);
    }
    /**
     * Get ProductName value
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->ProductName;
    }
    /**
     * Set ProductName value
     * @param string $productName
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setProductName(?string $productName = null): self
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
        }
        $this->ProductName = $productName;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
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
