<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecommendationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide details about recommended Item Specifics and Product Identifier types.
 * @subpackage Structs
 */
class RecommendationsType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the leaf category for which the recommended Item Specifics and Product Identifier types apply to. This is always a category ID that you specified in the request.<br> <br> This field is always returned with
     * each <b>Recommendations</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The ProductIdentifiers
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> This container was originally introduced into the Trading schema with the intention of separating Global Trade Item Numbers (GTINs) and other descriptive item specifics, but this
     * container was never wired on/returned in <b>GetCategorySpecifics</b>. Instead, users will still find one or more relevant GTIN types under a <b>Recommendations.NameRecommendation.Name</b> field. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductIdentifiersType[]
     */
    protected array $ProductIdentifiers = [];
    /**
     * The NameRecommendation
     * Meta information extracted from the WSDL
     * - documentation: This container consists of Item Specific name/value pairs that are mandatory, recommended, or optional for the specified category. The value returned in the corresponding <b>UsageConstraint</b> field, just introduced in Version 1111,
     * will indicate if the Item Specific is required, recommended, or optional when listing in that category. <br/><br/> If no relevant Item Specific name/value pairs are found for the category, this container will not be returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NameRecommendationType[]
     */
    protected array $NameRecommendation = [];
    /**
     * The Updated
     * Meta information extracted from the WSDL
     * - documentation: This field is only returned if the user includes a timestamp in the <b>LastUpdateTime</b> field in the call request payload. If this field is returned as <code>true</code>, the Item Specific metadata for the specified category has
     * changed since the date/time specified in the <b>LastUpdateTime</b> field. In this case, we suggest you retrieve the latest metadata for the category. If this field is returned as <code>false</code>, the Item Specific metadata for this category has
     * not changed since the date/time specified in the <b>LastUpdateTime</b> field.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Updated = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $categoryID = null, array $productIdentifiers = [], array $nameRecommendation = [], ?bool $updated = null, $any = null)
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
    public function getCategoryID(): ?string
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
     */
    public function setCategoryID(?string $categoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get ProductIdentifiers value
     * @return \macropage\ebaysdk\trading\StructType\ProductIdentifiersType[]
     */
    public function getProductIdentifiers(): array
    {
        return $this->ProductIdentifiers;
    }
    /**
     * This method is responsible for validating the values passed to the setProductIdentifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductIdentifiers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductIdentifiersForArrayConstraintsFromSetProductIdentifiers(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recommendationsTypeProductIdentifiersItem) {
            // validation for constraint: itemType
            if (!$recommendationsTypeProductIdentifiersItem instanceof \macropage\ebaysdk\trading\StructType\ProductIdentifiersType) {
                $invalidValues[] = is_object($recommendationsTypeProductIdentifiersItem) ? get_class($recommendationsTypeProductIdentifiersItem) : sprintf('%s(%s)', gettype($recommendationsTypeProductIdentifiersItem), var_export($recommendationsTypeProductIdentifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductIdentifiers property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductIdentifiersType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductIdentifiers value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductIdentifiersType[] $productIdentifiers
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
     */
    public function setProductIdentifiers(array $productIdentifiers = []): self
    {
        // validation for constraint: array
        if ('' !== ($productIdentifiersArrayErrorMessage = self::validateProductIdentifiersForArrayConstraintsFromSetProductIdentifiers($productIdentifiers))) {
            throw new InvalidArgumentException($productIdentifiersArrayErrorMessage, __LINE__);
        }
        $this->ProductIdentifiers = $productIdentifiers;
        
        return $this;
    }
    /**
     * Add item to ProductIdentifiers value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ProductIdentifiersType $item
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
     */
    public function addToProductIdentifiers(\macropage\ebaysdk\trading\StructType\ProductIdentifiersType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ProductIdentifiersType) {
            throw new InvalidArgumentException(sprintf('The ProductIdentifiers property can only contain items of type \macropage\ebaysdk\trading\StructType\ProductIdentifiersType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ProductIdentifiers[] = $item;
        
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
        foreach ($values as $recommendationsTypeNameRecommendationItem) {
            // validation for constraint: itemType
            if (!$recommendationsTypeNameRecommendationItem instanceof \macropage\ebaysdk\trading\StructType\NameRecommendationType) {
                $invalidValues[] = is_object($recommendationsTypeNameRecommendationItem) ? get_class($recommendationsTypeNameRecommendationItem) : sprintf('%s(%s)', gettype($recommendationsTypeNameRecommendationItem), var_export($recommendationsTypeNameRecommendationItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
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
    /**
     * Get Updated value
     * @return bool|null
     */
    public function getUpdated(): ?bool
    {
        return $this->Updated;
    }
    /**
     * Set Updated value
     * @param bool $updated
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
     */
    public function setUpdated(?bool $updated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($updated) && !is_bool($updated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updated, true), gettype($updated)), __LINE__);
        }
        $this->Updated = $updated;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationsType
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
