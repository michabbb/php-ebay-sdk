<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseAttributeSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ResponseAttributeSetType extends AbstractStructBase
{
    /**
     * The ApproximatePages
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $ApproximatePages;
    /**
     * The AttributeSetID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $AttributeSetID;
    /**
     * The HasMore
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool
     */
    public $HasMore;
    /**
     * The ProductFamilies
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductFamilyType[]
     */
    public $ProductFamilies;
    /**
     * The ProductFinderConstraints
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType[]
     */
    public $ProductFinderConstraints;
    /**
     * The TooManyMatchesFound
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var bool
     */
    public $TooManyMatchesFound;
    /**
     * The TotalProducts
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int
     */
    public $TotalProducts;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ResponseAttributeSetType
     * @uses ResponseAttributeSetType::setApproximatePages()
     * @uses ResponseAttributeSetType::setAttributeSetID()
     * @uses ResponseAttributeSetType::setHasMore()
     * @uses ResponseAttributeSetType::setProductFamilies()
     * @uses ResponseAttributeSetType::setProductFinderConstraints()
     * @uses ResponseAttributeSetType::setTooManyMatchesFound()
     * @uses ResponseAttributeSetType::setTotalProducts()
     * @uses ResponseAttributeSetType::setAny()
     * @param int $approximatePages
     * @param int $attributeSetID
     * @param bool $hasMore
     * @param \macropage\ebaysdk\trading\StructType\ProductFamilyType[] $productFamilies
     * @param \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType[] $productFinderConstraints
     * @param bool $tooManyMatchesFound
     * @param int $totalProducts
     * @param \DOMDocument $any
     */
    public function __construct($approximatePages = null, $attributeSetID = null, $hasMore = null, array $productFamilies = array(), array $productFinderConstraints = array(), $tooManyMatchesFound = null, $totalProducts = null, \DOMDocument $any = null)
    {
        $this
            ->setApproximatePages($approximatePages)
            ->setAttributeSetID($attributeSetID)
            ->setHasMore($hasMore)
            ->setProductFamilies($productFamilies)
            ->setProductFinderConstraints($productFinderConstraints)
            ->setTooManyMatchesFound($tooManyMatchesFound)
            ->setTotalProducts($totalProducts)
            ->setAny($any);
    }
    /**
     * Get ApproximatePages value
     * @return int|null
     */
    public function getApproximatePages()
    {
        return $this->ApproximatePages;
    }
    /**
     * Set ApproximatePages value
     * @param int $approximatePages
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setApproximatePages($approximatePages = null)
    {
        // validation for constraint: int
        if (!is_null($approximatePages) && !is_numeric($approximatePages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($approximatePages)), __LINE__);
        }
        $this->ApproximatePages = $approximatePages;
        return $this;
    }
    /**
     * Get AttributeSetID value
     * @return int|null
     */
    public function getAttributeSetID()
    {
        return $this->AttributeSetID;
    }
    /**
     * Set AttributeSetID value
     * @param int $attributeSetID
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !is_numeric($attributeSetID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attributeSetID)), __LINE__);
        }
        $this->AttributeSetID = $attributeSetID;
        return $this;
    }
    /**
     * Get HasMore value
     * @return bool|null
     */
    public function getHasMore()
    {
        return $this->HasMore;
    }
    /**
     * Set HasMore value
     * @param bool $hasMore
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setHasMore($hasMore = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMore) && !is_bool($hasMore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasMore)), __LINE__);
        }
        $this->HasMore = $hasMore;
        return $this;
    }
    /**
     * Get ProductFamilies value
     * @return \macropage\ebaysdk\trading\StructType\ProductFamilyType[]|null
     */
    public function getProductFamilies()
    {
        return $this->ProductFamilies;
    }
    /**
     * Set ProductFamilies value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductFamilyType[] $productFamilies
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setProductFamilies(array $productFamilies = array())
    {
        foreach ($productFamilies as $responseAttributeSetTypeProductFamiliesItem) {
            // validation for constraint: itemType
            if (!$responseAttributeSetTypeProductFamiliesItem instanceof \macropage\ebaysdk\trading\StructType\ProductFamilyType) {
                throw new \InvalidArgumentException(sprintf('The ProductFamilies property can only contain items of \macropage\ebaysdk\trading\StructType\ProductFamilyType, "%s" given', is_object($responseAttributeSetTypeProductFamiliesItem) ? get_class($responseAttributeSetTypeProductFamiliesItem) : gettype($responseAttributeSetTypeProductFamiliesItem)), __LINE__);
            }
        }
        $this->ProductFamilies = $productFamilies;
        return $this;
    }
    /**
     * Add item to ProductFamilies value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductFamilyType $item
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function addToProductFamilies(\macropage\ebaysdk\trading\StructType\ProductFamilyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductFamilyType) {
            throw new \InvalidArgumentException(sprintf('The ProductFamilies property can only contain items of \macropage\ebaysdk\trading\StructType\ProductFamilyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProductFamilies[] = $item;
        return $this;
    }
    /**
     * Get ProductFinderConstraints value
     * @return \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType[]|null
     */
    public function getProductFinderConstraints()
    {
        return $this->ProductFinderConstraints;
    }
    /**
     * Set ProductFinderConstraints value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType[] $productFinderConstraints
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setProductFinderConstraints(array $productFinderConstraints = array())
    {
        foreach ($productFinderConstraints as $responseAttributeSetTypeProductFinderConstraintsItem) {
            // validation for constraint: itemType
            if (!$responseAttributeSetTypeProductFinderConstraintsItem instanceof \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType) {
                throw new \InvalidArgumentException(sprintf('The ProductFinderConstraints property can only contain items of \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType, "%s" given', is_object($responseAttributeSetTypeProductFinderConstraintsItem) ? get_class($responseAttributeSetTypeProductFinderConstraintsItem) : gettype($responseAttributeSetTypeProductFinderConstraintsItem)), __LINE__);
            }
        }
        $this->ProductFinderConstraints = $productFinderConstraints;
        return $this;
    }
    /**
     * Add item to ProductFinderConstraints value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType $item
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function addToProductFinderConstraints(\macropage\ebaysdk\trading\StructType\ProductFinderConstraintType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType) {
            throw new \InvalidArgumentException(sprintf('The ProductFinderConstraints property can only contain items of \macropage\ebaysdk\trading\StructType\ProductFinderConstraintType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProductFinderConstraints[] = $item;
        return $this;
    }
    /**
     * Get TooManyMatchesFound value
     * @return bool|null
     */
    public function getTooManyMatchesFound()
    {
        return $this->TooManyMatchesFound;
    }
    /**
     * Set TooManyMatchesFound value
     * @param bool $tooManyMatchesFound
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setTooManyMatchesFound($tooManyMatchesFound = null)
    {
        // validation for constraint: boolean
        if (!is_null($tooManyMatchesFound) && !is_bool($tooManyMatchesFound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($tooManyMatchesFound)), __LINE__);
        }
        $this->TooManyMatchesFound = $tooManyMatchesFound;
        return $this;
    }
    /**
     * Get TotalProducts value
     * @return int|null
     */
    public function getTotalProducts()
    {
        return $this->TotalProducts;
    }
    /**
     * Set TotalProducts value
     * @param int $totalProducts
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
     */
    public function setTotalProducts($totalProducts = null)
    {
        // validation for constraint: int
        if (!is_null($totalProducts) && !is_numeric($totalProducts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalProducts)), __LINE__);
        }
        $this->TotalProducts = $totalProducts;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
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
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType
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
