<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecommendationValidationRulesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ValidationRules</b> containers that are returned for each Item Specific in the <b>GetCategorySpecifics</b> response. The <b>ValidationRules</b> container consists of some rules and limits for the
 * recommended Item Specific name and the corresponding values for that Item Specific. These rules and limits will apply when the Item Specific is subsequently used in an Add/Revise/Relist call.
 * @subpackage Structs
 */
class RecommendationValidationRulesType extends AbstractStructBase
{
    /**
     * The ValueType
     * Meta information extracted from the WSDL
     * - documentation: The data type (e.g., date) that eBay expects the value to adhere to in listing requests. Only returned if the data type is not Text. In some cases, more details about the data type are returned in the <b>ValueFormat</b> field.<br>
     * <br> As buyers may search on the value you specify in <b>AddItem</b>, the ISBN, UPC, or EAN should match the value that was specified by the publisher or manufacturer. <br><br> <span class="tablenote"><b>Note:</b> The <code>Numeric</code> enumeration
     * value is returned for whole integers (no decimal point), and the <code>Decimal</code> enumeration value is returned for numbers with decimals. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ValueType = null;
    /**
     * The MinValues
     * Meta information extracted from the WSDL
     * - documentation: Minimum number of values that you can specify for this Item Specific in listing requests. Not returned if zero (0).<br> <br> If this field is returned, it indicates that the Item Specific is required in listing requests in the
     * corresponding category. If the <b>Relationship</b> field is also present, it means this Item Specific is required when you specify its parent value in listing requests.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MinValues = null;
    /**
     * The MaxValues
     * Meta information extracted from the WSDL
     * - documentation: Maximum number of values that you can specify for this Item Specific in listing requests (like AddItem) in the specified category.<br> <br> Most Item Specifics can only have one value. When this is greater than 1, your application
     * can present the value recommendations (if any) as a multi-select list to the seller. (See <b>SelectionMode</b> to determine whether the seller needs to choose from eBay's recommendations or not.)
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxValues = null;
    /**
     * The SelectionMode
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field indicates whether a seller can specify their own custom values for an Item Specific, or if they need to use a value (or values) that eBay has defined.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SelectionMode = null;
    /**
     * The AspectUsage
     * Meta information extracted from the WSDL
     * - documentation: The value returned in this field will indicate if the item specific value is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular
     * instance of the product. <br/><br/> <span class="tablenote"><b>Note: </b> Currently, the <b>AspectUsage</b> field will only be returned for some item/instance aspects (and not product aspects). Examples of common instance aspects that are shared by
     * many eBay categories include 'Custom Bundle', 'Bundle Description', 'Modified Item', 'Modification Description', and 'California Prop 65 Warning'. Many instance aspect values are allowed more characters than the standard 65 max character threshold,
     * and sellers can look at the corresponding <b>MaxValueLength</b> field to get the maximum number of characters allowed for that particular instance aspect value. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AspectUsage = null;
    /**
     * The MaxValueLength
     * Meta information extracted from the WSDL
     * - documentation: This integer value will state the maximum length of the instance aspect's value. The seller must make sure not to exceed this value when setting instance aspects on a listing. This field is only returned for instance aspects
     * (<b>AspectUsage</b>=<code>Instance</code>). The standard maximum length for an item specific value is 65 characters.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxValueLength = null;
    /**
     * The ProductRequired
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned in this field will indicate whether or not the corresponding product brand requires listings within that category to be associated with an eBay catalog product. To create a listing that is associated
     * with an eBay catalog product, the seller uses the <b>ProductListingDetails</b> container of the <b>AddItem</b> call. To find a matching product in the eBay catalog, the seller can use the new <b>eBay Catalog API</b> or <b>FindProducts</b> call of the
     * <b>eBay Shopping API</b>. <br> <br> This field is only returned for the 'Brand' <b>NameRecommendation</b> container, and only if that particular product brand within that Product-Based Shopping Experience-enabled category requires a catalog product.
     * <br> <br> <span class="tablenote"><b>Note:</b> Due to the rollback of the Product-Based Shopping Experience mandate for all eBay categories (and brands within those categories), the <b>ValidationRules.ProductRequired</b> field will not get returned
     * for any brands within any eBay category. Due to this fact, the <b>ProductRequired</b> field is currently not applicable. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductRequired = null;
    /**
     * The UsageConstraint
     * Meta information extracted from the WSDL
     * - documentation: This field is returned for each item specific that is returned in the response. The enumeration value returned will indicate whether the item specific is required, recommended, or optional. <br><br> <span
     * class="tablenote"><b>Note:</b> Previously, returned item specifics were only 'marked' as required or optional. With the introduction of this new field, eBay is able to specify to sellers which item specifics are highly recommended, although not
     * required. The item specifics that are recommended can possibly improve search results and/or sales conversion if the seller includes them in the listing. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UsageConstraint = null;
    /**
     * The Confidence
     * Meta information extracted from the WSDL
     * - documentation: Indicates eBay's confidence that this is the right name or value, given the data you specified your request. The confidence is based on historical items in the same category, with similar titles (if specified).<br> <br> This field is
     * only returned when <b>IncludeConfidence</b> is included in the request and set to <code>true</code>. This field is not returned when <b>SelectionMode</b> is set to <code>Prefilled</code>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Confidence = null;
    /**
     * The Relationship
     * Meta information extracted from the WSDL
     * - documentation: Indicates the Item Specific's logical dependency on another Item Specific, if any. <br> <br> For example, in a clothing category, Size Type could be recommended as a parent of Size, because Size=XL would mean something different to
     * buyers when Size Type=Juniors or Size Type=Regular. <br> <br> Or in the US (in the future), a list of cities can vary depending on the state, so State could be recommended as a parent of City.<br> <br> Currently, categories only recommend a maximum
     * of one parent for an Item Specific. For example, Size=XL could have a Size Type=Juniors parent in a Juniors clothing category. In the future, some categories may recommend multiple parents. For example, City=Mountain View could have parents like
     * State=California, State=New York, and State=North Carolina.<br> <br> If an Item Specific has value dependencies (i.e., if it has value recommendations that contain <b>Relationship</b>), then all of its value recommendations are returned (regardless
     * of the number you specified in <b>MaxValuesPerName</b>).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NameValueRelationshipType[]
     */
    protected array $Relationship = [];
    /**
     * The VariationPicture
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the name (e.g., Color) can (or must) be used to classify the variation pictures.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VariationPicture = null;
    /**
     * The VariationSpecifics
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the recommended name/value pair can be used in an <b>Item.Variations</b> container in a fixed-price listing call. For example, a given category could disable a name like Brand in variation specifics (if Brand is
     * only allowed in the item specifics at the Item level). The same category could enable a name like Size for variation specifics (in addition to recommending it for item specifics). If not returned, then the name/value can be used for both variation
     * specifics and item specifics.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VariationSpecifics = null;
    /**
     * The ValueFormat
     * Meta information extracted from the WSDL
     * - documentation: The format of the data type (e.g., date format) that eBay expects the item specific's value to adhere to in listing requests. A data type identified by the <b>ValueType</b> field may have different representations, and
     * <b>ValueFormat</b> specifies the precise format that is required.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ValueFormat = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RecommendationValidationRulesType
     * @uses RecommendationValidationRulesType::setValueType()
     * @uses RecommendationValidationRulesType::setMinValues()
     * @uses RecommendationValidationRulesType::setMaxValues()
     * @uses RecommendationValidationRulesType::setSelectionMode()
     * @uses RecommendationValidationRulesType::setAspectUsage()
     * @uses RecommendationValidationRulesType::setMaxValueLength()
     * @uses RecommendationValidationRulesType::setProductRequired()
     * @uses RecommendationValidationRulesType::setUsageConstraint()
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
     * @param string $usageConstraint
     * @param int $confidence
     * @param \macropage\ebaysdk\trading\StructType\NameValueRelationshipType[] $relationship
     * @param string $variationPicture
     * @param string $variationSpecifics
     * @param string $valueFormat
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $valueType = null, ?int $minValues = null, ?int $maxValues = null, ?string $selectionMode = null, ?string $aspectUsage = null, ?int $maxValueLength = null, ?string $productRequired = null, ?string $usageConstraint = null, ?int $confidence = null, array $relationship = [], ?string $variationPicture = null, ?string $variationSpecifics = null, ?string $valueFormat = null, $any = null)
    {
        $this
            ->setValueType($valueType)
            ->setMinValues($minValues)
            ->setMaxValues($maxValues)
            ->setSelectionMode($selectionMode)
            ->setAspectUsage($aspectUsage)
            ->setMaxValueLength($maxValueLength)
            ->setProductRequired($productRequired)
            ->setUsageConstraint($usageConstraint)
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
    public function getValueType(): ?string
    {
        return $this->ValueType;
    }
    /**
     * Set ValueType value
     * @uses \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $valueType
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setValueType(?string $valueType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::valueIsValid($valueType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType', is_array($valueType) ? implode(', ', $valueType) : var_export($valueType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ValueType = $valueType;
        
        return $this;
    }
    /**
     * Get MinValues value
     * @return int|null
     */
    public function getMinValues(): ?int
    {
        return $this->MinValues;
    }
    /**
     * Set MinValues value
     * @param int $minValues
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setMinValues(?int $minValues = null): self
    {
        // validation for constraint: int
        if (!is_null($minValues) && !(is_int($minValues) || ctype_digit($minValues))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minValues, true), gettype($minValues)), __LINE__);
        }
        $this->MinValues = $minValues;
        
        return $this;
    }
    /**
     * Get MaxValues value
     * @return int|null
     */
    public function getMaxValues(): ?int
    {
        return $this->MaxValues;
    }
    /**
     * Set MaxValues value
     * @param int $maxValues
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setMaxValues(?int $maxValues = null): self
    {
        // validation for constraint: int
        if (!is_null($maxValues) && !(is_int($maxValues) || ctype_digit($maxValues))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxValues, true), gettype($maxValues)), __LINE__);
        }
        $this->MaxValues = $maxValues;
        
        return $this;
    }
    /**
     * Get SelectionMode value
     * @return string|null
     */
    public function getSelectionMode(): ?string
    {
        return $this->SelectionMode;
    }
    /**
     * Set SelectionMode value
     * @uses \macropage\ebaysdk\trading\EnumType\SelectionModeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SelectionModeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $selectionMode
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setSelectionMode(?string $selectionMode = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SelectionModeCodeType::valueIsValid($selectionMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SelectionModeCodeType', is_array($selectionMode) ? implode(', ', $selectionMode) : var_export($selectionMode, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SelectionModeCodeType::getValidValues())), __LINE__);
        }
        $this->SelectionMode = $selectionMode;
        
        return $this;
    }
    /**
     * Get AspectUsage value
     * @return string|null
     */
    public function getAspectUsage(): ?string
    {
        return $this->AspectUsage;
    }
    /**
     * Set AspectUsage value
     * @uses \macropage\ebaysdk\trading\EnumType\AspectUsageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AspectUsageCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $aspectUsage
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setAspectUsage(?string $aspectUsage = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AspectUsageCodeType::valueIsValid($aspectUsage)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AspectUsageCodeType', is_array($aspectUsage) ? implode(', ', $aspectUsage) : var_export($aspectUsage, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AspectUsageCodeType::getValidValues())), __LINE__);
        }
        $this->AspectUsage = $aspectUsage;
        
        return $this;
    }
    /**
     * Get MaxValueLength value
     * @return int|null
     */
    public function getMaxValueLength(): ?int
    {
        return $this->MaxValueLength;
    }
    /**
     * Set MaxValueLength value
     * @param int $maxValueLength
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setMaxValueLength(?int $maxValueLength = null): self
    {
        // validation for constraint: int
        if (!is_null($maxValueLength) && !(is_int($maxValueLength) || ctype_digit($maxValueLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxValueLength, true), gettype($maxValueLength)), __LINE__);
        }
        $this->MaxValueLength = $maxValueLength;
        
        return $this;
    }
    /**
     * Get ProductRequired value
     * @return string|null
     */
    public function getProductRequired(): ?string
    {
        return $this->ProductRequired;
    }
    /**
     * Set ProductRequired value
     * @uses \macropage\ebaysdk\trading\EnumType\ProductRequiredCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ProductRequiredCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $productRequired
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setProductRequired(?string $productRequired = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ProductRequiredCodeType::valueIsValid($productRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ProductRequiredCodeType', is_array($productRequired) ? implode(', ', $productRequired) : var_export($productRequired, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ProductRequiredCodeType::getValidValues())), __LINE__);
        }
        $this->ProductRequired = $productRequired;
        
        return $this;
    }
    /**
     * Get UsageConstraint value
     * @return string|null
     */
    public function getUsageConstraint(): ?string
    {
        return $this->UsageConstraint;
    }
    /**
     * Set UsageConstraint value
     * @uses \macropage\ebaysdk\trading\EnumType\UsageConstraintCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UsageConstraintCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $usageConstraint
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setUsageConstraint(?string $usageConstraint = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UsageConstraintCodeType::valueIsValid($usageConstraint)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\UsageConstraintCodeType', is_array($usageConstraint) ? implode(', ', $usageConstraint) : var_export($usageConstraint, true), implode(', ', \macropage\ebaysdk\trading\EnumType\UsageConstraintCodeType::getValidValues())), __LINE__);
        }
        $this->UsageConstraint = $usageConstraint;
        
        return $this;
    }
    /**
     * Get Confidence value
     * @return int|null
     */
    public function getConfidence(): ?int
    {
        return $this->Confidence;
    }
    /**
     * Set Confidence value
     * @param int $confidence
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setConfidence(?int $confidence = null): self
    {
        // validation for constraint: int
        if (!is_null($confidence) && !(is_int($confidence) || ctype_digit($confidence))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($confidence, true), gettype($confidence)), __LINE__);
        }
        $this->Confidence = $confidence;
        
        return $this;
    }
    /**
     * Get Relationship value
     * @return \macropage\ebaysdk\trading\StructType\NameValueRelationshipType[]
     */
    public function getRelationship(): array
    {
        return $this->Relationship;
    }
    /**
     * This method is responsible for validating the values passed to the setRelationship method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelationship method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelationshipForArrayConstraintsFromSetRelationship(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recommendationValidationRulesTypeRelationshipItem) {
            // validation for constraint: itemType
            if (!$recommendationValidationRulesTypeRelationshipItem instanceof \macropage\ebaysdk\trading\StructType\NameValueRelationshipType) {
                $invalidValues[] = is_object($recommendationValidationRulesTypeRelationshipItem) ? get_class($recommendationValidationRulesTypeRelationshipItem) : sprintf('%s(%s)', gettype($recommendationValidationRulesTypeRelationshipItem), var_export($recommendationValidationRulesTypeRelationshipItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Relationship property can only contain items of type \macropage\ebaysdk\trading\StructType\NameValueRelationshipType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Relationship value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueRelationshipType[] $relationship
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setRelationship(array $relationship = []): self
    {
        // validation for constraint: array
        if ('' !== ($relationshipArrayErrorMessage = self::validateRelationshipForArrayConstraintsFromSetRelationship($relationship))) {
            throw new InvalidArgumentException($relationshipArrayErrorMessage, __LINE__);
        }
        $this->Relationship = $relationship;
        
        return $this;
    }
    /**
     * Add item to Relationship value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameValueRelationshipType $item
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function addToRelationship(\macropage\ebaysdk\trading\StructType\NameValueRelationshipType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NameValueRelationshipType) {
            throw new InvalidArgumentException(sprintf('The Relationship property can only contain items of type \macropage\ebaysdk\trading\StructType\NameValueRelationshipType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Relationship[] = $item;
        
        return $this;
    }
    /**
     * Get VariationPicture value
     * @return string|null
     */
    public function getVariationPicture(): ?string
    {
        return $this->VariationPicture;
    }
    /**
     * Set VariationPicture value
     * @uses \macropage\ebaysdk\trading\EnumType\VariationPictureRuleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VariationPictureRuleCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $variationPicture
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setVariationPicture(?string $variationPicture = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VariationPictureRuleCodeType::valueIsValid($variationPicture)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\VariationPictureRuleCodeType', is_array($variationPicture) ? implode(', ', $variationPicture) : var_export($variationPicture, true), implode(', ', \macropage\ebaysdk\trading\EnumType\VariationPictureRuleCodeType::getValidValues())), __LINE__);
        }
        $this->VariationPicture = $variationPicture;
        
        return $this;
    }
    /**
     * Get VariationSpecifics value
     * @return string|null
     */
    public function getVariationSpecifics(): ?string
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @uses \macropage\ebaysdk\trading\EnumType\VariationSpecificsRuleCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VariationSpecificsRuleCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $variationSpecifics
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setVariationSpecifics(?string $variationSpecifics = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VariationSpecificsRuleCodeType::valueIsValid($variationSpecifics)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\VariationSpecificsRuleCodeType', is_array($variationSpecifics) ? implode(', ', $variationSpecifics) : var_export($variationSpecifics, true), implode(', ', \macropage\ebaysdk\trading\EnumType\VariationSpecificsRuleCodeType::getValidValues())), __LINE__);
        }
        $this->VariationSpecifics = $variationSpecifics;
        
        return $this;
    }
    /**
     * Get ValueFormat value
     * @return string|null
     */
    public function getValueFormat(): ?string
    {
        return $this->ValueFormat;
    }
    /**
     * Set ValueFormat value
     * @uses \macropage\ebaysdk\trading\EnumType\ValueFormatCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ValueFormatCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $valueFormat
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public function setValueFormat(?string $valueFormat = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ValueFormatCodeType::valueIsValid($valueFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ValueFormatCodeType', is_array($valueFormat) ? implode(', ', $valueFormat) : var_export($valueFormat, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ValueFormatCodeType::getValidValues())), __LINE__);
        }
        $this->ValueFormat = $valueFormat;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
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
