<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecommendationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to provide details about recommended Item Specifics and Product Identifier types.
 * @subpackage Structs
 */
class RecommendationsType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the leaf category for which the recommended Item Specifics and Product Identifier types apply to. This is always a category ID that you specified in the request.<br> <br> This field is always returned with
     * each <b>Recommendations</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The ProductIdentifiers
     * Meta informations extracted from the WSDL
     * - documentation: This container will consist of one or more Product Identifier types that are supported, or possibly required to be used when listing a product. These Product Identifier types will be common Global Trade Item Number (GTIN) types such
     * as UPC, ISBN, and EAN. Each Product Identifier type that is applicable to the category will be returned in a separate <b>NameRecommendation</b> container. To see if one or more of the Product Identifier types are actually required at listing time,
     * the seller will need to look at the <b>ValidationRules</b> container and the <b>MinRequired</b> value. If two Product Identifier types are returned, and the <b>MinRequired</b> value is the <code>2</code>, the seller will be required to use both
     * Product Identifier types at listing time. If the <b>MinRequired</b> value was <code>0</code>, one or both of those Product Identifier types could be used, but they would not be required. <br> <br> <span class="tablenote"><b>Note:</b> This container
     * is for future use, and is not currently returned in the <b>GetCategorySpecifics</b> call. Until the <b>ProductIdentifiers</b> container is wired on and returned, an alternative way to see if a Product Identifier type is required for a category is to
     * identify the Product Identifier type through the <b>Recommendations.NameRecommendation.Name</b> field in the <b>GetCategorySpecifics</b> response, and then look at the corresponding <b>Recommendations.NameRecommendation.ValidationRules.MinValues</b>
     * field. The <b>GetCategoryFeatures</b> call can also be used, and the seller will look for the values returned for that category under the <b>EANEnabled</b>, <b>ISBNEnabled</b>, <b>UPCEnabled</b>, and <b>BrandMPNIdentifierEnabled</b> fields that
     * indicate the Product Identifier types that are supported/required for the category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductIdentifiersType[]
     */
    public $ProductIdentifiers;
    /**
     * The NameRecommendation
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of Item Specific name/value pairs that eBay recommends as popular within the specified category. If no recommended Item Specific name/value pairs are found for the category, this container will not be
     * returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NameRecommendationType[]
     */
    public $NameRecommendation;
    /**
     * The Updated
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the recommended Item Specifics and/or Product Identifiers for this category have changed since the time you specified in the <b>LastUpdateTime</b> field. In this case, we suggest you
     * retrieve the latest data for the category. If this field is returned as <code>false</code>, the recommended Item Specifics and/or Product Identifiers for this category have not changed since the time you specified.<br> <br> This field is only
     * returned when the <b>LastUpdateTime</b> field is passed in the request.
     * - minOccurs: 0
     * @var bool
     */
    public $Updated;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RecommendationsType
     * @uses RecommendationsType::setCategoryID()
     * @uses RecommendationsType::setProductIdentifiers()
     * @uses RecommendationsType::setNameRecommendation()
     * @uses RecommendationsType::setUpdated()
     * @uses RecommendationsType::setAny()
     * @param string $categoryID
     * @param \macropage\ebaysdk\trading\StructType\ProductIdentifiersType[] $productIdentifiers
     * @param \macropage\ebaysdk\trading\StructType\NameRecommendationType[] $nameRecommendation
     * @param bool $updated
     * @param \DOMDocument $any
     */
    public function __construct($categoryID = null, array $productIdentifiers = array(), array $nameRecommendation = array(), $updated = null, \DOMDocument $any = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setProductIdentifiers($productIdentifiers)
            ->setNameRecommendation($nameRecommendation)
            ->setUpdated($updated)
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
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
     * Get ProductIdentifiers value
     * @return \macropage\ebaysdk\trading\StructType\ProductIdentifiersType[]|null
     */
    public function getProductIdentifiers()
    {
        return $this->ProductIdentifiers;
    }
    /**
     * Set ProductIdentifiers value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductIdentifiersType[] $productIdentifiers
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
     */
    public function setProductIdentifiers(array $productIdentifiers = array())
    {
        foreach ($productIdentifiers as $recommendationsTypeProductIdentifiersItem) {
            // validation for constraint: itemType
            if (!$recommendationsTypeProductIdentifiersItem instanceof \macropage\ebaysdk\trading\StructType\ProductIdentifiersType) {
                throw new \InvalidArgumentException(sprintf('The ProductIdentifiers property can only contain items of \macropage\ebaysdk\trading\StructType\ProductIdentifiersType, "%s" given', is_object($recommendationsTypeProductIdentifiersItem) ? get_class($recommendationsTypeProductIdentifiersItem) : gettype($recommendationsTypeProductIdentifiersItem)), __LINE__);
            }
        }
        $this->ProductIdentifiers = $productIdentifiers;
        return $this;
    }
    /**
     * Add item to ProductIdentifiers value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductIdentifiersType $item
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
     */
    public function addToProductIdentifiers(\macropage\ebaysdk\trading\StructType\ProductIdentifiersType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductIdentifiersType) {
            throw new \InvalidArgumentException(sprintf('The ProductIdentifiers property can only contain items of \macropage\ebaysdk\trading\StructType\ProductIdentifiersType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProductIdentifiers[] = $item;
        return $this;
    }
    /**
     * Get NameRecommendation value
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType[]|null
     */
    public function getNameRecommendation()
    {
        return $this->NameRecommendation;
    }
    /**
     * Set NameRecommendation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameRecommendationType[] $nameRecommendation
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
     */
    public function setNameRecommendation(array $nameRecommendation = array())
    {
        foreach ($nameRecommendation as $recommendationsTypeNameRecommendationItem) {
            // validation for constraint: itemType
            if (!$recommendationsTypeNameRecommendationItem instanceof \macropage\ebaysdk\trading\StructType\NameRecommendationType) {
                throw new \InvalidArgumentException(sprintf('The NameRecommendation property can only contain items of \macropage\ebaysdk\trading\StructType\NameRecommendationType, "%s" given', is_object($recommendationsTypeNameRecommendationItem) ? get_class($recommendationsTypeNameRecommendationItem) : gettype($recommendationsTypeNameRecommendationItem)), __LINE__);
            }
        }
        $this->NameRecommendation = $nameRecommendation;
        return $this;
    }
    /**
     * Add item to NameRecommendation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameRecommendationType $item
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
     */
    public function addToNameRecommendation(\macropage\ebaysdk\trading\StructType\NameRecommendationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NameRecommendationType) {
            throw new \InvalidArgumentException(sprintf('The NameRecommendation property can only contain items of \macropage\ebaysdk\trading\StructType\NameRecommendationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameRecommendation[] = $item;
        return $this;
    }
    /**
     * Get Updated value
     * @return bool|null
     */
    public function getUpdated()
    {
        return $this->Updated;
    }
    /**
     * Set Updated value
     * @param bool $updated
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
     */
    public function setUpdated($updated = null)
    {
        // validation for constraint: boolean
        if (!is_null($updated) && !is_bool($updated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($updated)), __LINE__);
        }
        $this->Updated = $updated;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RecommendationsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
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
