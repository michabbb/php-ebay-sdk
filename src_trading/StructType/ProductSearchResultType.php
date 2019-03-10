<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSearchResultType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductSearchResultType extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The NumProducts
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $NumProducts;
    /**
     * The AttributeSet
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType[]
     */
    public $AttributeSet;
    /**
     * The DisplayStockPhotos
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayStockPhotos;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductSearchResultType
     * @uses ProductSearchResultType::setID()
     * @uses ProductSearchResultType::setNumProducts()
     * @uses ProductSearchResultType::setAttributeSet()
     * @uses ProductSearchResultType::setDisplayStockPhotos()
     * @uses ProductSearchResultType::setAny()
     * @param string $iD
     * @param string $numProducts
     * @param \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType[] $attributeSet
     * @param bool $displayStockPhotos
     * @param \DOMDocument $any
     */
    public function __construct($iD = null, $numProducts = null, array $attributeSet = array(), $displayStockPhotos = null, \DOMDocument $any = null)
    {
        $this
            ->setID($iD)
            ->setNumProducts($numProducts)
            ->setAttributeSet($attributeSet)
            ->setDisplayStockPhotos($displayStockPhotos)
            ->setAny($any);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get NumProducts value
     * @return string|null
     */
    public function getNumProducts()
    {
        return $this->NumProducts;
    }
    /**
     * Set NumProducts value
     * @param string $numProducts
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
     */
    public function setNumProducts($numProducts = null)
    {
        // validation for constraint: string
        if (!is_null($numProducts) && !is_string($numProducts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numProducts)), __LINE__);
        }
        $this->NumProducts = $numProducts;
        return $this;
    }
    /**
     * Get AttributeSet value
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType[]|null
     */
    public function getAttributeSet()
    {
        return $this->AttributeSet;
    }
    /**
     * Set AttributeSet value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType[] $attributeSet
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
     */
    public function setAttributeSet(array $attributeSet = array())
    {
        foreach ($attributeSet as $productSearchResultTypeAttributeSetItem) {
            // validation for constraint: itemType
            if (!$productSearchResultTypeAttributeSetItem instanceof \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType) {
                throw new \InvalidArgumentException(sprintf('The AttributeSet property can only contain items of \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType, "%s" given', is_object($productSearchResultTypeAttributeSetItem) ? get_class($productSearchResultTypeAttributeSetItem) : gettype($productSearchResultTypeAttributeSetItem)), __LINE__);
            }
        }
        $this->AttributeSet = $attributeSet;
        return $this;
    }
    /**
     * Add item to AttributeSet value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
     */
    public function addToAttributeSet(\macropage\ebaysdk\trading\StructType\ResponseAttributeSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType) {
            throw new \InvalidArgumentException(sprintf('The AttributeSet property can only contain items of \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AttributeSet[] = $item;
        return $this;
    }
    /**
     * Get DisplayStockPhotos value
     * @return bool|null
     */
    public function getDisplayStockPhotos()
    {
        return $this->DisplayStockPhotos;
    }
    /**
     * Set DisplayStockPhotos value
     * @param bool $displayStockPhotos
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
     */
    public function setDisplayStockPhotos($displayStockPhotos = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayStockPhotos) && !is_bool($displayStockPhotos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($displayStockPhotos)), __LINE__);
        }
        $this->DisplayStockPhotos = $displayStockPhotos;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProductSearchResultType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
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
