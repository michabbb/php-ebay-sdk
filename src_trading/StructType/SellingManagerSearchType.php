<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerSearchType StructType
 * Meta informations extracted from the WSDL
 * - documentation: For searches of Selling Manager listings, specifies search type, such as <b>ProductID</b> or <b>BuyerUserID</b>, and search value.
 * @subpackage Structs
 */
class SellingManagerSearchType extends AbstractStructBase
{
    /**
     * The SearchType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of value, such as <b>ProductID</b> or <b>BuyerUserID</b>, for the search.
     * - minOccurs: 0
     * @var string
     */
    public $SearchType;
    /**
     * The SearchValue
     * Meta informations extracted from the WSDL
     * - documentation: String identifying the value, matching the <b>SearchType</b>, that the search should return listings for. For example, when <b>ProductID</b> is specified as the <b>SearchType</b>, <b>SearchValue</b> must be a valid <b>ProductID</b>.
     * - minOccurs: 0
     * @var string
     */
    public $SearchValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerSearchType
     * @uses SellingManagerSearchType::setSearchType()
     * @uses SellingManagerSearchType::setSearchValue()
     * @uses SellingManagerSearchType::setAny()
     * @param string $searchType
     * @param string $searchValue
     * @param \DOMDocument $any
     */
    public function __construct($searchType = null, $searchValue = null, \DOMDocument $any = null)
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
    public function getSearchType()
    {
        return $this->SearchType;
    }
    /**
     * Set SearchType value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSearchTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSearchTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $searchType
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSearchType
     */
    public function setSearchType($searchType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerSearchTypeCodeType::valueIsValid($searchType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $searchType, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerSearchTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SearchType = $searchType;
        return $this;
    }
    /**
     * Get SearchValue value
     * @return string|null
     */
    public function getSearchValue()
    {
        return $this->SearchValue;
    }
    /**
     * Set SearchValue value
     * @param string $searchValue
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSearchType
     */
    public function setSearchValue($searchValue = null)
    {
        // validation for constraint: string
        if (!is_null($searchValue) && !is_string($searchValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchValue)), __LINE__);
        }
        $this->SearchValue = $searchValue;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerSearchType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSearchType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSearchType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
