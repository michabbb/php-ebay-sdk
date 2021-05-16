<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValueRecommendationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ValueRecommendation</b> container to provide recommended names for recommended item specifics.
 * @subpackage Structs
 */
class ValueRecommendationType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: A recommended value for the corresponding, recommended Item Specific. Only returned when a recommended value is available.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * The ValidationRules
     * Meta information extracted from the WSDL
     * - documentation: Constraints that eBay places on this Item Specific value.<br> <br> Only returned when you configure your request to include relationships and/or confidence, and a recommended value is available. (Not returned when
     * <b>ExcludeRelationships</b> is <code>true</code> and <b>IncludeConfidence</b> is <code>false</code>.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $ValidationRules = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ValueRecommendationType
     * @uses ValueRecommendationType::setValue()
     * @uses ValueRecommendationType::setValidationRules()
     * @uses ValueRecommendationType::setAny()
     * @param string $value
     * @param \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $value = null, ?\macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules = null, $any = null)
    {
        $this
            ->setValue($value)
            ->setValidationRules($validationRules)
            ->setAny($any);
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \macropage\ebaysdk\trading\StructType\ValueRecommendationType
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ValueRecommendationType
     */
    public function setValidationRules(?\macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules = null): self
    {
        $this->ValidationRules = $validationRules;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ValueRecommendationType
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
