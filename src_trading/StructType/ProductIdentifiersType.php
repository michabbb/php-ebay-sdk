<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductIdentifiersType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><strong>Note:</strong> This type and the <b>ProductIdentifiers</b> container were originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other
 * descriptive item specifics, but the <b>ProductIdentifiers</b> container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b>
 * field in the <b>GetCategorySpecifics</b> response. </span>
 * @subpackage Structs
 */
class ProductIdentifiersType extends AbstractStructBase
{
    /**
     * The ValidationRules
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item
     * specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field. </span>
     * @var \macropage\ebaysdk\trading\StructType\GroupValidationRulesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\GroupValidationRulesType $ValidationRules = null;
    /**
     * The NameRecommendation
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> The <b>ProductIdentifiers</b> container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item
     * specifics, but this container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NameRecommendationType[]
     */
    protected array $NameRecommendation = [];
    /**
     * Constructor method for ProductIdentifiersType
     * @uses ProductIdentifiersType::setValidationRules()
     * @uses ProductIdentifiersType::setNameRecommendation()
     * @param \macropage\ebaysdk\trading\StructType\GroupValidationRulesType $validationRules
     * @param \macropage\ebaysdk\trading\StructType\NameRecommendationType[] $nameRecommendation
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\GroupValidationRulesType $validationRules = null, array $nameRecommendation = [])
    {
        $this
            ->setValidationRules($validationRules)
            ->setNameRecommendation($nameRecommendation);
    }
    /**
     * Get ValidationRules value
     * @return \macropage\ebaysdk\trading\StructType\GroupValidationRulesType|null
     */
    public function getValidationRules(): ?\macropage\ebaysdk\trading\StructType\GroupValidationRulesType
    {
        return $this->ValidationRules;
    }
    /**
     * Set ValidationRules value
     * @param \macropage\ebaysdk\trading\StructType\GroupValidationRulesType $validationRules
     * @return \macropage\ebaysdk\trading\StructType\ProductIdentifiersType
     */
    public function setValidationRules(?\macropage\ebaysdk\trading\StructType\GroupValidationRulesType $validationRules = null): self
    {
        $this->ValidationRules = $validationRules;
        
        return $this;
    }
    /**
     * Get NameRecommendation value
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType[]
     */
    public function getNameRecommendation(): array
    {
        return $this->NameRecommendation;
    }
    /**
     * This method is responsible for validating the values passed to the setNameRecommendation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameRecommendation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameRecommendationForArrayConstraintsFromSetNameRecommendation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productIdentifiersTypeNameRecommendationItem) {
            // validation for constraint: itemType
            if (!$productIdentifiersTypeNameRecommendationItem instanceof \macropage\ebaysdk\trading\StructType\NameRecommendationType) {
                $invalidValues[] = is_object($productIdentifiersTypeNameRecommendationItem) ? get_class($productIdentifiersTypeNameRecommendationItem) : sprintf('%s(%s)', gettype($productIdentifiersTypeNameRecommendationItem), var_export($productIdentifiersTypeNameRecommendationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NameRecommendation property can only contain items of type \macropage\ebaysdk\trading\StructType\NameRecommendationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NameRecommendation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameRecommendationType[] $nameRecommendation
     * @return \macropage\ebaysdk\trading\StructType\ProductIdentifiersType
     */
    public function setNameRecommendation(array $nameRecommendation = []): self
    {
        // validation for constraint: array
        if ('' !== ($nameRecommendationArrayErrorMessage = self::validateNameRecommendationForArrayConstraintsFromSetNameRecommendation($nameRecommendation))) {
            throw new InvalidArgumentException($nameRecommendationArrayErrorMessage, __LINE__);
        }
        $this->NameRecommendation = $nameRecommendation;
        
        return $this;
    }
    /**
     * Add item to NameRecommendation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NameRecommendationType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductIdentifiersType
     */
    public function addToNameRecommendation(\macropage\ebaysdk\trading\StructType\NameRecommendationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NameRecommendationType) {
            throw new InvalidArgumentException(sprintf('The NameRecommendation property can only contain items of type \macropage\ebaysdk\trading\StructType\NameRecommendationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NameRecommendation[] = $item;
        
        return $this;
    }
}
