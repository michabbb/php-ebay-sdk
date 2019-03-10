<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductIdentifiersType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to provide details about recommended Product Identifier types. The <b>ProductIdentifiers</b> container will consist of one or more Product Identifier types that can be, or possibly required to be used when listing a
 * product. <br> <br> <span class="tablenote"><b>Note:</b> The <b>ProductIdentifiers</b> container will only be returned in the Sandbox environment for the time being. This container has not been wired on in production. An alternative way to see if a
 * Product Identifier type is required for a category is to use the <b>GetCategoryFeatures</b> call and look for the values returned under the <b>EANEnabled</b>, <b>ISBNEnabled</b>, <b>UPCEnabled</b>, and other fields that indicate the Product
 * Identifier types that are supported/required for the category.<br> <br>
 * @subpackage Structs
 */
class ProductIdentifiersType extends AbstractStructBase
{
    /**
     * The ValidationRules
     * Meta informations extracted from the WSDL
     * - documentation: This container holds the <b>MinRequired</b> field, whose value will indicate whether or not one or more Product Identifier types (returned in a corresponding <b>NameRecommendation</b> container) are required when listing a product.
     * If two Product Identifier types are returned, and the <b>MinRequired</b> value is the <code>2</code>, the seller will be required to use both Product Identifier types at listing time. If the <b>MinRequired</b> value was <code>0</code>, one or both of
     * those Product Identifier types could be used, but they would not be required.
     * @var \macropage\ebaysdk\trading\StructType\GroupValidationRulesType
     */
    public $ValidationRules;
    /**
     * The NameRecommendation
     * Meta informations extracted from the WSDL
     * - documentation: A separate <b>NameRecommendation</b> container will be returned for each Product Identifier type that is supported/required by the category. These Product Identifier types will be common Global Trade Item Number (GTIN) types such as
     * UPC, ISBN, and EAN. To see if one or more of the Product Identifier types are actually required at listing time, the seller will need to look at the <b>ValidationRules</b> container and the <b>MinRequired</b> value. If two Product Identifier types
     * are returned, and the <b>MinRequired</b> value is the <code>2</code>, the seller will be required to use both Product Identifier types at listing time. If the <b>MinRequired</b> value was <code>0</code>, one or both of those Product Identifier types
     * could be used, but they would not be required.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NameRecommendationType[]
     */
    public $NameRecommendation;
    /**
     * Constructor method for ProductIdentifiersType
     * @uses ProductIdentifiersType::setValidationRules()
     * @uses ProductIdentifiersType::setNameRecommendation()
     * @param \macropage\ebaysdk\trading\StructType\GroupValidationRulesType $validationRules
     * @param \macropage\ebaysdk\trading\StructType\NameRecommendationType[] $nameRecommendation
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\GroupValidationRulesType $validationRules = null, array $nameRecommendation = array())
    {
        $this
            ->setValidationRules($validationRules)
            ->setNameRecommendation($nameRecommendation);
    }
    /**
     * Get ValidationRules value
     * @return \macropage\ebaysdk\trading\StructType\GroupValidationRulesType|null
     */
    public function getValidationRules()
    {
        return $this->ValidationRules;
    }
    /**
     * Set ValidationRules value
     * @param \macropage\ebaysdk\trading\StructType\GroupValidationRulesType $validationRules
     * @return \macropage\ebaysdk\trading\StructType\ProductIdentifiersType
     */
    public function setValidationRules(\macropage\ebaysdk\trading\StructType\GroupValidationRulesType $validationRules = null)
    {
        $this->ValidationRules = $validationRules;
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
     * @return \macropage\ebaysdk\trading\StructType\ProductIdentifiersType
     */
    public function setNameRecommendation(array $nameRecommendation = array())
    {
        foreach ($nameRecommendation as $productIdentifiersTypeNameRecommendationItem) {
            // validation for constraint: itemType
            if (!$productIdentifiersTypeNameRecommendationItem instanceof \macropage\ebaysdk\trading\StructType\NameRecommendationType) {
                throw new \InvalidArgumentException(sprintf('The NameRecommendation property can only contain items of \macropage\ebaysdk\trading\StructType\NameRecommendationType, "%s" given', is_object($productIdentifiersTypeNameRecommendationItem) ? get_class($productIdentifiersTypeNameRecommendationItem) : gettype($productIdentifiersTypeNameRecommendationItem)), __LINE__);
            }
        }
        $this->NameRecommendation = $nameRecommendation;
        return $this;
    }
    /**
     * Add item to NameRecommendation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameRecommendationType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductIdentifiersType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ProductIdentifiersType
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
