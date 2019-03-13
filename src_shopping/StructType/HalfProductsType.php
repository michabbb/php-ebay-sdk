<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HalfProductsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfProductsType</b> and the <b>Product</b> element are deprecated along with the <b>FindHalfProducts</b> call. </span>
 * @subpackage Structs
 */
class HalfProductsType extends AbstractStructBase
{
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>HalfProductsType</b> and the <b>Product</b> element are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType[]
     */
    public $Product;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for HalfProductsType
     * @uses HalfProductsType::setProduct()
     * @uses HalfProductsType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType[] $product
     * @param \DOMDocument $any
     */
    public function __construct(array $product = array(), \DOMDocument $any = null)
    {
        $this
            ->setProduct($product)
            ->setAny($any);
    }
    /**
     * Get Product value
     * @return \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType[]|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType[] $product
     * @return \macropage\ebaysdk\shopping\StructType\HalfProductsType
     */
    public function setProduct(array $product = array())
    {
        foreach ($product as $halfProductsTypeProductItem) {
            // validation for constraint: itemType
            if (!$halfProductsTypeProductItem instanceof \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType) {
                throw new \InvalidArgumentException(sprintf('The Product property can only contain items of \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType, "%s" given', is_object($halfProductsTypeProductItem) ? get_class($halfProductsTypeProductItem) : gettype($halfProductsTypeProductItem)), __LINE__);
            }
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Add item to Product value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType $item
     * @return \macropage\ebaysdk\shopping\StructType\HalfProductsType
     */
    public function addToProduct(\macropage\ebaysdk\shopping\StructType\HalfCatalogProductType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType) {
            throw new \InvalidArgumentException(sprintf('The Product property can only contain items of \macropage\ebaysdk\shopping\StructType\HalfCatalogProductType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Product[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\HalfProductsType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\HalfProductsType
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
     * @return \macropage\ebaysdk\shopping\StructType\HalfProductsType
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
