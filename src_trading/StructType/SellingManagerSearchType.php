<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerSearchType StructType
 * Meta information extracted from the WSDL
 * - documentation: For searches of Selling Manager listings, specifies search type, such as <b>ProductID</b> or <b>BuyerUserID</b>, and search value.
 * @subpackage Structs
 */
class SellingManagerSearchType extends AbstractStructBase
{
    /**
     * The SearchType
     * Meta information extracted from the WSDL
     * - documentation: Specifies the type of value, such as <b>ProductID</b> or <b>BuyerUserID</b>, for the search.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SearchType = null;
    /**
     * The SearchValue
     * Meta information extracted from the WSDL
     * - documentation: String identifying the value, matching the <b>SearchType</b>, that the search should return listings for. For example, when <b>ProductID</b> is specified as the <b>SearchType</b>, <b>SearchValue</b> must be a valid <b>ProductID</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SearchValue = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingManagerSearchType
     * @uses SellingManagerSearchType::setSearchType()
     * @uses SellingManagerSearchType::setSearchValue()
     * @uses SellingManagerSearchType::setAny()
     * @param string $searchType
     * @param string $searchValue
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $searchType = null, ?string $searchValue = null, $any = null)
    {
        $this
            ->setSearchType($searchType)
            ->setSearchValue($searchValue)
            ->setAny($any);
    }
    /**
     * Get SearchType value
     * @return string|null
     */
    public function getSearchType(): ?string
    {
        return $this->SearchType;
    }
    /**
     * Set SearchType value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSearchTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSearchTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $searchType
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSearchType
     */
    public function setSearchType(?string $searchType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerSearchTypeCodeType::valueIsValid($searchType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerSearchTypeCodeType', is_array($searchType) ? implode(', ', $searchType) : var_export($searchType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerSearchTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SearchType = $searchType;
        
        return $this;
    }
    /**
     * Get SearchValue value
     * @return string|null
     */
    public function getSearchValue(): ?string
    {
        return $this->SearchValue;
    }
    /**
     * Set SearchValue value
     * @param string $searchValue
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSearchType
     */
    public function setSearchValue(?string $searchValue = null): self
    {
        // validation for constraint: string
        if (!is_null($searchValue) && !is_string($searchValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchValue, true), gettype($searchValue)), __LINE__);
        }
        $this->SearchValue = $searchValue;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSearchType
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
