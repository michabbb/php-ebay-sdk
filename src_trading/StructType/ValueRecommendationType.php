<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValueRecommendationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>ValueRecommendation</b> container to provide recommended names for recommended item specifics.
 * @subpackage Structs
 */
class ValueRecommendationType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: A recommended value for the corresponding, recommended Item Specific. Only returned when a recommended value is available.
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The ValidationRules
     * Meta informations extracted from the WSDL
     * - documentation: Constraints that eBay places on this Item Specific value.<br> <br> Only returned when you configure your request to include relationships and/or confidence, and a recommended value is available. (Not returned when
     * <b>ExcludeRelationships</b> is <code>true</code> and <b>IncludeConfidence</b> is <code>false</code>.)
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public $ValidationRules;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ValueRecommendationType
     * @uses ValueRecommendationType::setValue()
     * @uses ValueRecommendationType::setValidationRules()
     * @uses ValueRecommendationType::setAny()
     * @param string $value
     * @param \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules
     * @param \DOMDocument $any
     */
    public function __construct($value = null, \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules = null, \DOMDocument $any = null)
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
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \macropage\ebaysdk\trading\StructType\ValueRecommendationType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get ValidationRules value
     * @return \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType|null
     */
    public function getValidationRules()
    {
        return $this->ValidationRules;
    }
    /**
     * Set ValidationRules value
     * @param \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules
     * @return \macropage\ebaysdk\trading\StructType\ValueRecommendationType
     */
    public function setValidationRules(\macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules = null)
    {
        $this->ValidationRules = $validationRules;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ValueRecommendationType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ValueRecommendationType
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
     * @return \macropage\ebaysdk\trading\StructType\ValueRecommendationType
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
