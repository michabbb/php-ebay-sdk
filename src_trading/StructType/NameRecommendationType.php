<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameRecommendationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>NameRecommendation</b> container that is returned in <b>GetCategorySpecifics</b>. A <b>NameRecommendation</b> container is returned for every mandatory and recommended Item Specific for a category, and
 * provides the recommended/most popular values for the Item Specific, as well as details, instructions, and constraint information for each Item Specific name-value pairs.
 * @subpackage Structs
 */
class NameRecommendationType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This string field is the name of the mandatory or recommended Item Specific or Product Identifier type (e.g. Brand/MPN). The seller should use the actual string in this field when creating, revising, or relisting an item with this
     * Item Specific. The number of Item Specifics that are returned can be controlled with the <b>MaxNames</b> field in the call request. <br/><br/> This field is always returned with each <b>NameRecommendation</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The RelevanceIndicator
     * Meta information extracted from the WSDL
     * - documentation: This container is returned for an item specific if eBay has data on how many searches have been performed for listings in the category using that item specific. <br> <br> <span class="tablenote"><b>Note:</b> This container is
     * restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check" target="_blank">App Check ticket</a> to request this access. In the App
     * Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to 'Buyer Demand Data' in <b>GetCategorySpecifics</b>. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RelevanceIndicatorType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RelevanceIndicatorType $RelevanceIndicator = null;
    /**
     * The ValidationRules
     * Meta information extracted from the WSDL
     * - documentation: This container provides details, instructions, and constraint information for each Item Specific name-value pairs. The fields that are returned under the <b>ValidationRules</b> container will vary per Item Specific. <br/><br/> Three
     * key fields to look for are <b>MinValues</b>, <b>MaxValues</b>, and <b>VariationSpecifics</b>. If the <b>MinValues</b> appears for an Item Specific (usually with a value of '1'), it indicates that the Item Specific is required for the category. For
     * many Item Specifics, the <b>MaxValues</b> field is returned with a value of '1', but the value will be higher for Item Specifics that support more than one value. The <b>VariationSpecifics</b> field is only returned (with a value of 'Disabled') when
     * a seller is not allowed to pass in that Item Specific at the variation level in a multiple-variation listing. <br/><br/> This field is always returned with each <b>NameRecommendation</b> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $ValidationRules = null;
    /**
     * The ValueRecommendation
     * Meta information extracted from the WSDL
     * - documentation: Each <b>ValueRecommendation</b> container shows a common/recommended/popular value for the corresponding Item Specific. Values are not returned for every Item Specific, including some instance aspects (such as 'Bundle Description')
     * where the text that is passed in for the Item Specific value may vary widely per seller, or if eBay does not have recommended values available for the Item Specific. The number of values that are returned for each Item Specific can be controlled with
     * the <b>MaxValuesPerName</b> field in the call request. <br/><br/> <span class="tablenote"><b>Note: </b> For unique product identifying aspects, such as MPN, UPC, ISBN, or EAN, instead of an actual value being returned, boilerplate text is used, such
     * as 'Does Not Apply'. If an MPN or GTIN is required, but the seller does not have the identifier, he/she can pass in the boilerplate text as an alternative to the actual identifier. </span> <br/> In addition to the recommended value(s) for an Item
     * Specific, a <b>ValueRecommendation.ValidationRules</b> container will be returned if the <b>IncludeConfidence</b> filter is included in the call request and set to <code>true</code>. The return 'Confidence' value is a percentage value that indicates
     * how confident eBay is that the recommended value is a valid value for the corresponding Item Specific. The <b>ValueRecommendation.ValidationRules</b> container may also get returned for the 'Brand' Item Specific if the particular product brand in
     * that listing category requires an association with an eBay catalog product.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ValueRecommendationType[]
     */
    protected array $ValueRecommendation = [];
    /**
     * The HelpURL
     * Meta information extracted from the WSDL
     * - documentation: This field contains a URL to a relevant eBay help page that may provide more information about a particular Item Specific. This field is only returned if a relevant eBay help page is available. If this field is returned, the
     * <b>HelpText</b> field may also be returned and provide some context on the content of the help page.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HelpURL = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - documentation: This field is not currently returned in <b>GetCategorySpecifics</b> for any Item Specific.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Source = null;
    /**
     * The HelpText
     * Meta information extracted from the WSDL
     * - documentation: The text in this field may provide some context on the content of the help page linked to in the <b>HelpURL</b> field. This field is only returned if the <b>HelpURL</b> field is returned, and is available.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HelpText = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for NameRecommendationType
     * @uses NameRecommendationType::setName()
     * @uses NameRecommendationType::setRelevanceIndicator()
     * @uses NameRecommendationType::setValidationRules()
     * @uses NameRecommendationType::setValueRecommendation()
     * @uses NameRecommendationType::setHelpURL()
     * @uses NameRecommendationType::setSource()
     * @uses NameRecommendationType::setHelpText()
     * @uses NameRecommendationType::setAny()
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\RelevanceIndicatorType $relevanceIndicator
     * @param \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules
     * @param \macropage\ebaysdk\trading\StructType\ValueRecommendationType[] $valueRecommendation
     * @param string $helpURL
     * @param string $source
     * @param string $helpText
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?\macropage\ebaysdk\trading\StructType\RelevanceIndicatorType $relevanceIndicator = null, ?\macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules = null, array $valueRecommendation = [], ?string $helpURL = null, ?string $source = null, ?string $helpText = null, $any = null)
    {
        $this
            ->setName($name)
            ->setRelevanceIndicator($relevanceIndicator)
            ->setValidationRules($validationRules)
            ->setValueRecommendation($valueRecommendation)
            ->setHelpURL($helpURL)
            ->setSource($source)
            ->setHelpText($helpText)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get RelevanceIndicator value
     * @return \macropage\ebaysdk\trading\StructType\RelevanceIndicatorType|null
     */
    public function getRelevanceIndicator(): ?\macropage\ebaysdk\trading\StructType\RelevanceIndicatorType
    {
        return $this->RelevanceIndicator;
    }
    /**
     * Set RelevanceIndicator value
     * @param \macropage\ebaysdk\trading\StructType\RelevanceIndicatorType $relevanceIndicator
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setRelevanceIndicator(?\macropage\ebaysdk\trading\StructType\RelevanceIndicatorType $relevanceIndicator = null): self
    {
        $this->RelevanceIndicator = $relevanceIndicator;
        
        return $this;
    }
    /**
     * Get ValidationRules value
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType|null
     */
    public function getValidationRules(): ?\macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
    {
        return $this->ValidationRules;
    }
    /**
     * Set ValidationRules value
     * @param \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setValidationRules(?\macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules = null): self
    {
        $this->ValidationRules = $validationRules;
        
        return $this;
    }
    /**
     * Get ValueRecommendation value
     * @return \macropage\ebaysdk\trading\StructType\ValueRecommendationType[]
     */
    public function getValueRecommendation(): array
    {
        return $this->ValueRecommendation;
    }
    /**
     * This method is responsible for validating the values passed to the setValueRecommendation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValueRecommendation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueRecommendationForArrayConstraintsFromSetValueRecommendation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nameRecommendationTypeValueRecommendationItem) {
            // validation for constraint: itemType
            if (!$nameRecommendationTypeValueRecommendationItem instanceof \macropage\ebaysdk\trading\StructType\ValueRecommendationType) {
                $invalidValues[] = is_object($nameRecommendationTypeValueRecommendationItem) ? get_class($nameRecommendationTypeValueRecommendationItem) : sprintf('%s(%s)', gettype($nameRecommendationTypeValueRecommendationItem), var_export($nameRecommendationTypeValueRecommendationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ValueRecommendation property can only contain items of type \macropage\ebaysdk\trading\StructType\ValueRecommendationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ValueRecommendation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValueRecommendationType[] $valueRecommendation
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setValueRecommendation(array $valueRecommendation = []): self
    {
        // validation for constraint: array
        if ('' !== ($valueRecommendationArrayErrorMessage = self::validateValueRecommendationForArrayConstraintsFromSetValueRecommendation($valueRecommendation))) {
            throw new InvalidArgumentException($valueRecommendationArrayErrorMessage, __LINE__);
        }
        $this->ValueRecommendation = $valueRecommendation;
        
        return $this;
    }
    /**
     * Add item to ValueRecommendation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValueRecommendationType $item
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function addToValueRecommendation(\macropage\ebaysdk\trading\StructType\ValueRecommendationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ValueRecommendationType) {
            throw new InvalidArgumentException(sprintf('The ValueRecommendation property can only contain items of type \macropage\ebaysdk\trading\StructType\ValueRecommendationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ValueRecommendation[] = $item;
        
        return $this;
    }
    /**
     * Get HelpURL value
     * @return string|null
     */
    public function getHelpURL(): ?string
    {
        return $this->HelpURL;
    }
    /**
     * Set HelpURL value
     * @param string $helpURL
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setHelpURL(?string $helpURL = null): self
    {
        // validation for constraint: string
        if (!is_null($helpURL) && !is_string($helpURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($helpURL, true), gettype($helpURL)), __LINE__);
        }
        $this->HelpURL = $helpURL;
        
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $source
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::valueIsValid($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType', is_array($source) ? implode(', ', $source) : var_export($source, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        
        return $this;
    }
    /**
     * Get HelpText value
     * @return string|null
     */
    public function getHelpText(): ?string
    {
        return $this->HelpText;
    }
    /**
     * Set HelpText value
     * @param string $helpText
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setHelpText(?string $helpText = null): self
    {
        // validation for constraint: string
        if (!is_null($helpText) && !is_string($helpText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($helpText, true), gettype($helpText)), __LINE__);
        }
        $this->HelpText = $helpText;
        
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
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
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
