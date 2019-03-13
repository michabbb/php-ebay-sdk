<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by each eBay category that is returned in the response of the <b>GetCategoryInfo</b> call. This type is used by the <b>Category</b> container, and consists of high-level details of a category, including its category
 * ID value and information on its parent category, child categories, and its level in the eBay site's category hierarchy.
 * @subpackage Structs
 */
class CategoryType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: The numeric identifier of a category on an eBay marketplace. For the root category of an eBay marketplace, the value will be <code>-1</code>. <br> <br> This field is always returned with each <b>Category</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The CategoryLevel
     * Meta informations extracted from the WSDL
     * - documentation: The level where the category fits in the eBay marketplace's category hierarchy. For example, if this field has a value of <code>2</code>, then the category is two levels below the root category. For the root category of an eBay
     * marketplace, the value will be <code>0</code>. <br> <br> This field is always returned with each <b>Category</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $CategoryLevel;
    /**
     * The CategoryName
     * Meta informations extracted from the WSDL
     * - documentation: The display name of the category as it would appear on the eBay marketplace. For the root category of an eBay marketplace, the value will be <code>Root</code>. <br> <br> This field is always returned with each <b>Category</b>
     * container.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryName;
    /**
     * The CategoryParentID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the category's parent category. Note that <code>-1</code> is returned for Level 1 categories, and <code>0</code> is returned for the root category of an eBay marketplace. <br> <br> This field is always
     * returned with each <b>Category</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryParentID;
    /**
     * The CategoryParentName
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated. Instead, the name of the category's parent category can be derived from the <b>CategoryNamePath</b> field
     * - minOccurs: 0
     * @var string
     */
    public $CategoryParentName;
    /**
     * The ItemCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ItemCount;
    /**
     * The CategoryNamePath
     * Meta informations extracted from the WSDL
     * - documentation: The fully-qualified category name path for the eBay category, including the display name for the category and the display name for all ancestor categories, all the way to the top-level (category Level 1) eBay category. Each eBay
     * category name is separated with a colon (:). An example is shown below: <br> <br> <code> &lt;CategoryNamePath&gt;Clothing, Shoes & Accessories:Men's Clothing:Shirts:T-Shirts&lt;/CategoryNamePath&gt; </code> <br> <br> This field is always returned for
     * any eBay category, but is not returned for the root (Level 0) of an eBay marketplace.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryNamePath;
    /**
     * The CategoryIDPath
     * Meta informations extracted from the WSDL
     * - documentation: The eBay category ID path for the eBay category, including the category ID for the corresponding category and the category IDs for all ancestor categories, all the way to the top-level (category Level 1) eBay category. Each eBay
     * category ID is separated with a colon (:). An example is shown below: <br> <br> <code> &lt;CategoryIDPath&gt;11450:1059:185100:15687&lt;/CategoryIDPath&gt; </code> <br> <br> This field is always returned for any eBay category, but is not returned for
     * the root (Level 0) of an eBay marketplace.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryIDPath;
    /**
     * The LeafCategory
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field indicates if the corresponding category is a leaf category. eBay listings can only be created in leaf categories. If the value is <code>true</code>, the eBay category is a leaf category. <br> <br> This field is
     * always returned with each <b>Category</b> container.
     * - minOccurs: 0
     * @var bool
     */
    public $LeafCategory;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CategoryType
     * @uses CategoryType::setCategoryID()
     * @uses CategoryType::setCategoryLevel()
     * @uses CategoryType::setCategoryName()
     * @uses CategoryType::setCategoryParentID()
     * @uses CategoryType::setCategoryParentName()
     * @uses CategoryType::setItemCount()
     * @uses CategoryType::setCategoryNamePath()
     * @uses CategoryType::setCategoryIDPath()
     * @uses CategoryType::setLeafCategory()
     * @uses CategoryType::setAny()
     * @param string $categoryID
     * @param int $categoryLevel
     * @param string $categoryName
     * @param string $categoryParentID
     * @param string $categoryParentName
     * @param int $itemCount
     * @param string $categoryNamePath
     * @param string $categoryIDPath
     * @param bool $leafCategory
     * @param \DOMDocument $any
     */
    public function __construct($categoryID = null, $categoryLevel = null, $categoryName = null, $categoryParentID = null, $categoryParentName = null, $itemCount = null, $categoryNamePath = null, $categoryIDPath = null, $leafCategory = null, \DOMDocument $any = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setCategoryLevel($categoryLevel)
            ->setCategoryName($categoryName)
            ->setCategoryParentID($categoryParentID)
            ->setCategoryParentName($categoryParentName)
            ->setItemCount($itemCount)
            ->setCategoryNamePath($categoryNamePath)
            ->setCategoryIDPath($categoryIDPath)
            ->setLeafCategory($leafCategory)
            ->setAny($any);
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get CategoryLevel value
     * @return int|null
     */
    public function getCategoryLevel()
    {
        return $this->CategoryLevel;
    }
    /**
     * Set CategoryLevel value
     * @param int $categoryLevel
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryLevel($categoryLevel = null)
    {
        // validation for constraint: int
        if (!is_null($categoryLevel) && !is_numeric($categoryLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($categoryLevel)), __LINE__);
        }
        $this->CategoryLevel = $categoryLevel;
        return $this;
    }
    /**
     * Get CategoryName value
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->CategoryName;
    }
    /**
     * Set CategoryName value
     * @param string $categoryName
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryName($categoryName = null)
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryName)), __LINE__);
        }
        $this->CategoryName = $categoryName;
        return $this;
    }
    /**
     * Get CategoryParentID value
     * @return string|null
     */
    public function getCategoryParentID()
    {
        return $this->CategoryParentID;
    }
    /**
     * Set CategoryParentID value
     * @param string $categoryParentID
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryParentID($categoryParentID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryParentID) && !is_string($categoryParentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryParentID)), __LINE__);
        }
        $this->CategoryParentID = $categoryParentID;
        return $this;
    }
    /**
     * Get CategoryParentName value
     * @return string|null
     */
    public function getCategoryParentName()
    {
        return $this->CategoryParentName;
    }
    /**
     * Set CategoryParentName value
     * @param string $categoryParentName
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryParentName($categoryParentName = null)
    {
        // validation for constraint: string
        if (!is_null($categoryParentName) && !is_string($categoryParentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryParentName)), __LINE__);
        }
        $this->CategoryParentName = $categoryParentName;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int|null
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setItemCount($itemCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !is_numeric($itemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        return $this;
    }
    /**
     * Get CategoryNamePath value
     * @return string|null
     */
    public function getCategoryNamePath()
    {
        return $this->CategoryNamePath;
    }
    /**
     * Set CategoryNamePath value
     * @param string $categoryNamePath
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryNamePath($categoryNamePath = null)
    {
        // validation for constraint: string
        if (!is_null($categoryNamePath) && !is_string($categoryNamePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryNamePath)), __LINE__);
        }
        $this->CategoryNamePath = $categoryNamePath;
        return $this;
    }
    /**
     * Get CategoryIDPath value
     * @return string|null
     */
    public function getCategoryIDPath()
    {
        return $this->CategoryIDPath;
    }
    /**
     * Set CategoryIDPath value
     * @param string $categoryIDPath
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryIDPath($categoryIDPath = null)
    {
        // validation for constraint: string
        if (!is_null($categoryIDPath) && !is_string($categoryIDPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryIDPath)), __LINE__);
        }
        $this->CategoryIDPath = $categoryIDPath;
        return $this;
    }
    /**
     * Get LeafCategory value
     * @return bool|null
     */
    public function getLeafCategory()
    {
        return $this->LeafCategory;
    }
    /**
     * Set LeafCategory value
     * @param bool $leafCategory
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setLeafCategory($leafCategory = null)
    {
        // validation for constraint: boolean
        if (!is_null($leafCategory) && !is_bool($leafCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($leafCategory)), __LINE__);
        }
        $this->LeafCategory = $leafCategory;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\CategoryType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
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
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
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
