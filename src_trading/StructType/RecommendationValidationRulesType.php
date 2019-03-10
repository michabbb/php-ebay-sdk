<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecommendationValidationRulesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>ValidationRules</b> containers returned in the <b>GetCategorySpecifics</b> response, which contains some rules and limits for the recommended Item Specific name (specified in the
 * <b>NameRecommendation.Name</b> field) and corresponding value(s) (specified in the <b>ValueRecommendation.Value</b> field). These rules and limits will apply when the recommended Item Specific is subsequently used in Add/Revise/Relist call.
 * @subpackage Structs
 */
class RecommendationValidationRulesType extends AbstractStructBase
{
    /**
     * The ValueType
     * Meta informations extracted from the WSDL
     * - documentation: The data type (e.g., date) that eBay expects the value to adhere to in listing requests. Only returned if the data type is not Text. In some cases, more details about the data type are returned in the <b>ValueFormat</b> field.<br>
     * <br> As buyers may search on the value you specify in AddItem, the ISBN, UPC, or EAN should match the value that was specified by the publisher or manufacturer. <br><br> <span class="tablenote"><b>Note:</b> Starting with Version 945 and going
     * forward, the <code>Numeric</code> enumeration value will be returned for whole integers (no decimal point), and the <code>Decimal</code> enumeration value will be returned for numbers with decimals. For the Version 943 WSDL and older,
     * <Code>Decimal</Code> will continue being returned for all numeric values. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ValueType;
    /**
     * The MinValues
     * Meta informations extracted from the WSDL
     * - documentation: Minimum number of values that you can specify for this Item Specific in listing requests. Not returned if zero (0).<br> <br> If 1 or more, it means this Item Specfic is required in listing requests (in the specified category). (Your
     * listing request will return errors if the Item Specific is not present.) If <b>Relationship</b> is also present, it means this Item Specific is required when you specify its parent value in listing requests.
     * - minOccurs: 0
     * @var int
     */
    public $MinValues;
    /**
     * The MaxValues
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of values that you can specify for this Item Specific in listing requests (like AddItem) in the specified category.<br> <br> Most Item Specifics can only have one value. When this is greater than 1, your application
     * can present the value recommendations (if any) as a multi-select list to the seller. (See <b>SelectionMode</b> to determine whether the seller needs to choose from eBay's recommendations or not.)
     * - minOccurs: 0
     * @var int
     */
    public $MaxValues;
    /**
     * The SelectionMode
     * Meta informations extracted from the WSDL
     * - documentation: Controls whether you can specify your own name and value in listing requests, or if you need to use a name and/or value that eBay has defined.
     * - minOccurs: 0
     * @var string
     */
    public $SelectionMode;
    /**
     * The AspectUsage
     * Meta informations extracted from the WSDL
     * - documentation: The value returned in this field will indicate if the item specific value is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular
     * instance of the product. <br/><br/> <span class="tablenote"><b>Note: </b> Currently, the <b>AspectUsage</b> field will only be returned in the Sandbox environment, and only for category/brands that are a part of the Product-Based Shopping Experience
     * mandate. See the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse_product_vs_item_aspects.html" target="_blank">Product aspects vs. item specifics</a> page for more information about product aspects and instance aspects.
     * </span>
     * - minOccurs: 0
     * @var string
     */
    public $AspectUsage;
    /**
     * The MaxValueLength
     * Meta informations extracted from the WSDL
     * - documentation: This integer value will state the maximum length of the aspect's value. The seller must make sure not to exceed this value when setting instance aspects on a listing. <br/><br/> <span class="tablenote"><b>Note: </b> Currently, the
     * <b>MaxValueLength</b> field will only be returned in the Sandbox environment, and only for category/brands that are a part of the Product-Based Shopping Experience mandate. See the <a
     * href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse_product_vs_item_aspects.html" target="_blank">Product aspects vs. item specifics</a> page for more information about product aspects and instance aspects. </span>
     * - minOccurs: 0
     * @var int
     */
    public $MaxValueLength;
    /**
     * The ProductRequired
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value returned in this field will indicate whether or not the corresponding product brand requires that a seller associate an eBay Catalog product with listings in the category. To create a listing that is associated
     * with an eBay Catalog product, the seller uses the <b>ProductListingDetails</b> container of the <b>AddItem</b> call. To find a matching product in the eBay catalog, the seller can use the new <b>eBay Catalog API</b> or <b>FindProducts</b> call of the
     * <b>eBay Shopping API</b>. <br> <br> This field is only returned for the 'Brand' <b>NameRecommendation</b> container, and is only returned if the particular eBay category is a Product-Based Shopping Experience enforced category. See this <a
     * href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse-phase1-categories.html" target="_blank">table</a> for current eBay categories/brands that require listings to be associated with an eBay Catalog product. <br/><br/> <span
     * class="tablenote"><b>Note: </b> Through Phase 1 of the Product-Based Shopping Experience, scheduled to start being enforced in May 2018, this field will only be returned if <code>Enabled</code> for the product brand. However, with Phase 2 of the
     * Product-Based Shopping Experience, scheduled to start being enforced in August 2018, entire leaf categories will start requiring association with eBay Catalog products, and sellers will want to use the <b>GetCategoryFeatures</b> call instead to see
     * if the eBay category requires listings to be associated with eBay Catalog products. For more information about the Product-Based Shopping Experience, see the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse_playbook_intro.html"
     * target="_blank">Product-Based Shopping Experience Playbook</a>. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ProductRequired;
    /**
     * The Confidence
     * Meta informations extracted from the WSDL
     * - documentation: Indicates eBay's confidence that this is the right name or value, given the data you specified your request. The confidence is based on historical items in the same category, with similar titles (if specified).<br> <br> This field is
     * only returned when <b>IncludeConfidence</b> is included in the request and set to <code>true</code>. This field is not returned when <b>SelectionMode</b> is set to <code>Prefilled</code>.
     * - minOccurs: 0
     * @var int
     */
    public $Confidence;
    /**
     * The Relationship
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the Item Specific's logical dependency on another Item Specific, if any. <br> <br> For example, in a clothing category, Size Type could be recommended as a parent of Size, because Size=XL would mean something different to
     * buyers when Size Type=Juniors or Size Type=Regular. <br> <br> Or in the US (in the future), a list of cities can vary depending on the state, so State could be recommended as a parent of City.<br> <br> Currently, categories only recommend a maximum
     * of one parent for an Item Specific. For example, Size=XL could have a Size Type=Juniors parent in a Juniors clothing category. In the future, some categories may recommend multiple parents. For example, City=Mountain View could have parents like
     * State=California, State=New York, and State=North Carolina.<br> <br> If an Item Specific has value dependencies (i.e., if it has value recommendations that contain <b>Relationship</b>), then all of its value recommendations are returned (regardless
     * of the number you specified in <b>MaxValuesPerName</b>).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NameValueRelationshipType[]
     */
    public $Relationship;
    /**
     * The VariationPicture
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the name (e.g., Color) can (or must) be used to classify the variation pictures.
     * - minOccurs: 0
     * @var string
     */
    public $VariationPicture;
    /**
     * The VariationSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the recommended name/value pair can be used in an <b>Item.Variations</b> container in a fixed-price listing call. For example, a given category could disable a name like Brand in variation specifics (if Brand is
     * only allowed in the item specifics at the Item level). The same category could enable a name like Size for variation specifics (in addition to recommending it for item specifics). If not returned, then the name/value can be used for both variation
     * specifics and item specifics.
     * - minOccurs: 0
     * @var string
     */
    public $VariationSpecifics;
    /**
     * The ValueFormat
     * Meta informations extracted from the WSDL
     * - documentation: The format of the data type (e.g., date format) that eBay expects the item specific's value to adhere to in listing requests. A data type identified by the <b>ValueType</b> field may have different representations, and
     * <b>ValueFormat</b> specifies the precise format that is required.
     * - minOccurs: 0
     * @var string
     */
    public $ValueFormat;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RecommendationValidationRulesType
     * @uses RecommendationValidationRulesType::setValueType()
     * @uses RecommendationValidationRulesType::setMinValues()
     * @uses RecommendationValidationRulesType::setMaxValues()
     * @uses RecommendationValidationRulesType::setSelectionMode()
     * @uses RecommendationValidationRulesType::setAspectUsage()
     * @uses RecommendationValidationRulesType::setMaxValueLength()
     * @uses RecommendationValidationRulesType::setProductRequired()
     * @uses RecommendationValidationRulesType::setConfidence()
     * @uses RecommendationValidationRulesType::setRelationship()
     * @uses RecommendationValidationRulesType::setVariationPicture()
     * @uses RecommendationValidationRulesType::setVariationSpecifics()
     * @uses RecommendationValidationRulesType::setValueFormat()
     * @uses RecommendationValidationRulesType::setAny()
     * @param string $valueType
     * @param int $minValues
     * @param int $maxValues
     * @param string $selectionMode
     * @param string $aspectUsage
     * @param int $maxValueLength
     * @param string $productRequired
     * @param int $confidence
     * @param \macropage\ebaysdk\trading\StructType\NameValueRelationshipType[] $relationship
     * @param string $variationPicture
     * @param string $variationSpecifics
     * @param string $valueFormat
     * @param \DOMDocument $any
     */
    public function __construct($valueType = null, $minValues = null, $maxValues = null, $selectionMode = null, $aspectUsage = null, $maxValueLength = null, $productRequired = null, $confidence = null, array $relationship = array(), $variationPicture = null, $variationSpecifics = null, $valueFormat = null, \DOMDocument $any = null)
    {
        $this
            ->setValueType($valueType)
            ->setMinValues($minValues)
            ->setMaxValues($maxValues)
            ->setSelectionMode($selectionMode)
            ->setAspectUsage($aspectUsage)
            ->setMaxValueLength($maxValueLength)
            ->setProductRequired($productRequired)
            ->setConfidence($confidence)
            ->setRelationship($relationship)
            ->setVariationPicture($variationPicture)
            ->setVariationSpecifics($variationSpecifics)
            ->setValueFormat($valueFormat)
            ->setAny($any);
    }
    /**
     * Get ValueType value
     * @return string|null
     */
    public function getValueType()
    {
        return $this->ValueType;
    }
    /**
     * Set ValueType value
     * @uses \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $valueType
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setValueType($valueType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::valueIsValid($valueType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $valueType, implode(', ', \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ValueType = $valueType;
        return $this;
    }
    /**
     * Get MinValues value
     * @return int|null
     */
    public function getMinValues()
    {
        return $this->MinValues;
    }
    /**
     * Set MinValues value
     * @param int $minValues
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setMinValues($minValues = null)
    {
        // validation for constraint: int
        if (!is_null($minValues) && !is_numeric($minValues)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minValues)), __LINE__);
        }
        $this->MinValues = $minValues;
        return $this;
    }
    /**
     * Get MaxValues value
     * @return int|null
     */
    public function getMaxValues()
    {
        return $this->MaxValues;
    }
    /**
     * Set MaxValues value
     * @param int $maxValues
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setMaxValues($maxValues = null)
    {
        // validation for constraint: int
        if (!is_null($maxValues) && !is_numeric($maxValues)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxValues)), __LINE__);
        }
        $this->MaxValues = $maxValues;
        return $this;
    }
    /**
     * Get SelectionMode value
     * @return string|null
     */
    public function getSelectionMode()
    {
        return $this->SelectionMode;
    }
    /**
     * Set SelectionMode value
     * @uses \macropage\ebaysdk\trading\EnumType\SelectionModeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SelectionModeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $selectionMode
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setSelectionMode($selectionMode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SelectionModeCodeType::valueIsValid($selectionMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $selectionMode, implode(', ', \macropage\ebaysdk\trading\EnumType\SelectionModeCodeType::getValidValues())), __LINE__);
        }
        $this->SelectionMode = $selectionMode;
        return $this;
    }
    /**
     * Get AspectUsage value
     * @return string|null
     */
    public function getAspectUsage()
    {
        return $this->AspectUsage;
    }
    /**
     * Set AspectUsage value
     * @uses \macropage\ebaysdk\trading\EnumType\AspectUsageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AspectUsageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aspectUsage
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setAspectUsage($aspectUsage = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AspectUsageCodeType::valueIsValid($aspectUsage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aspectUsage, implode(', ', \macropage\ebaysdk\trading\EnumType\AspectUsageCodeType::getValidValues())), __LINE__);
        }
        $this->AspectUsage = $aspectUsage;
        return $this;
    }
    /**
     * Get MaxValueLength value
     * @return int|null
     */
    public function getMaxValueLength()
    {
        return $this->MaxValueLength;
    }
    /**
     * Set MaxValueLength value
     * @param int $maxValueLength
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setMaxValueLength($maxValueLength = null)
    {
        // validation for constraint: int
        if (!is_null($maxValueLength) && !is_numeric($maxValueLength)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxValueLength)), __LINE__);
        }
        $this->MaxValueLength = $maxValueLength;
        return $this;
    }
    /**
     * Get ProductRequired value
     * @return string|null
     */
    public function getProductRequired()
    {
        return $this->ProductRequired;
    }
    /**
     * Set ProductRequired value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductRequiredCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductRequiredCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productRequired
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setProductRequired($productRequired = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductRequiredCodeType::valueIsValid($productRequired)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $productRequired, implode(', ', \macropage\ebaysdk\trading\EnumType\ProductRequiredCodeType::getValidValues())), __LINE__);
        }
        $this->ProductRequired = $productRequired;
        return $this;
    }
    /**
     * Get Confidence value
     * @return int|null
     */
    public function getConfidence()
    {
        return $this->Confidence;
    }
    /**
     * Set Confidence value
     * @param int $confidence
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setConfidence($confidence = null)
    {
        // validation for constraint: int
        if (!is_null($confidence) && !is_numeric($confidence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($confidence)), __LINE__);
        }
        $this->Confidence = $confidence;
        return $this;
    }
    /**
     * Get Relationship value
     * @return \macropage\ebaysdk\trading\StructType\NameValueRelationshipType[]|null
     */
    public function getRelationship()
    {
        return $this->Relationship;
    }
    /**
     * Set Relationship value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueRelationshipType[] $relationship
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setRelationship(array $relationship = array())
    {
        foreach ($relationship as $recommendationValidationRulesTypeRelationshipItem) {
            // validation for constraint: itemType
            if (!$recommendationValidationRulesTypeRelationshipItem instanceof \macropage\ebaysdk\trading\StructType\NameValueRelationshipType) {
                throw new \InvalidArgumentException(sprintf('The Relationship property can only contain items of \macropage\ebaysdk\trading\StructType\NameValueRelationshipType, "%s" given', is_object($recommendationValidationRulesTypeRelationshipItem) ? get_class($recommendationValidationRulesTypeRelationshipItem) : gettype($recommendationValidationRulesTypeRelationshipItem)), __LINE__);
            }
        }
        $this->Relationship = $relationship;
        return $this;
    }
    /**
     * Add item to Relationship value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueRelationshipType $item
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function addToRelationship(\macropage\ebaysdk\trading\StructType\NameValueRelationshipType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NameValueRelationshipType) {
            throw new \InvalidArgumentException(sprintf('The Relationship property can only contain items of \macropage\ebaysdk\trading\StructType\NameValueRelationshipType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Relationship[] = $item;
        return $this;
    }
    /**
     * Get VariationPicture value
     * @return string|null
     */
    public function getVariationPicture()
    {
        return $this->VariationPicture;
    }
    /**
     * Set VariationPicture value
     * @uses \macropage\ebaysdk\trading\EnumType\VariationPictureRuleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VariationPictureRuleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $variationPicture
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setVariationPicture($variationPicture = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VariationPictureRuleCodeType::valueIsValid($variationPicture)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $variationPicture, implode(', ', \macropage\ebaysdk\trading\EnumType\VariationPictureRuleCodeType::getValidValues())), __LINE__);
        }
        $this->VariationPicture = $variationPicture;
        return $this;
    }
    /**
     * Get VariationSpecifics value
     * @return string|null
     */
    public function getVariationSpecifics()
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @uses \macropage\ebaysdk\trading\EnumType\VariationSpecificsRuleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VariationSpecificsRuleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $variationSpecifics
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setVariationSpecifics($variationSpecifics = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VariationSpecificsRuleCodeType::valueIsValid($variationSpecifics)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $variationSpecifics, implode(', ', \macropage\ebaysdk\trading\EnumType\VariationSpecificsRuleCodeType::getValidValues())), __LINE__);
        }
        $this->VariationSpecifics = $variationSpecifics;
        return $this;
    }
    /**
     * Get ValueFormat value
     * @return string|null
     */
    public function getValueFormat()
    {
        return $this->ValueFormat;
    }
    /**
     * Set ValueFormat value
     * @uses \macropage\ebaysdk\trading\EnumType\ValueFormatCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ValueFormatCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $valueFormat
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setValueFormat($valueFormat = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ValueFormatCodeType::valueIsValid($valueFormat)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $valueFormat, implode(', ', \macropage\ebaysdk\trading\EnumType\ValueFormatCodeType::getValidValues())), __LINE__);
        }
        $this->ValueFormat = $valueFormat;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
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
