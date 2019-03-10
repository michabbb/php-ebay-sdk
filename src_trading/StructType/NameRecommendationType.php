<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameRecommendationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type provides details about recommended names and values for custom Item Specifics and/or Product Identifier types.
 * @subpackage Structs
 */
class NameRecommendationType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: A recommended Item Specific name or Product Identifier type. This field is always returned when the <b>NameRecommendation</b> container is returned.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ValidationRules
     * Meta informations extracted from the WSDL
     * - documentation: Constraints that eBay places on this Item Specific. Always returned when the <b>NameRecommendation</b> container is returned. As a general rule, <b>AddItem</b> and related calls will not be blocked if you don't use eBay's
     * recommendations, except where specified in this documentation.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType
     */
    public $ValidationRules;
    /**
     * The ValueRecommendation
     * Meta informations extracted from the WSDL
     * - documentation: A recommended value (if any) for the Item Specific name. This field is not applicable to Product Identifier types. Only returned when a recommended value is available in the system.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ValueRecommendationType[]
     */
    public $ValueRecommendation;
    /**
     * The HelpURL
     * Meta informations extracted from the WSDL
     * - documentation: A page on the eBay Web site with context-specific help tips that provide useful information about this Item Specific or Product Identifier type. Only returned when an applicable page is available in the system.
     * - minOccurs: 0
     * @var string
     */
    public $HelpURL;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The HelpText
     * Meta informations extracted from the WSDL
     * - documentation: Help-text defines the purpose of the tag. The help text will be shown only when it is available for the particular tag
     * - minOccurs: 0
     * @var string
     */
    public $HelpText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NameRecommendationType
     * @uses NameRecommendationType::setName()
     * @uses NameRecommendationType::setValidationRules()
     * @uses NameRecommendationType::setValueRecommendation()
     * @uses NameRecommendationType::setHelpURL()
     * @uses NameRecommendationType::setSource()
     * @uses NameRecommendationType::setHelpText()
     * @uses NameRecommendationType::setAny()
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules
     * @param \macropage\ebaysdk\trading\StructType\ValueRecommendationType[] $valueRecommendation
     * @param string $helpURL
     * @param string $source
     * @param string $helpText
     * @param \DOMDocument $any
     */
    public function __construct($name = null, \macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules = null, array $valueRecommendation = array(), $helpURL = null, $source = null, $helpText = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
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
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
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
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setValidationRules(\macropage\ebaysdk\trading\StructType\RecommendationValidationRulesType $validationRules = null)
    {
        $this->ValidationRules = $validationRules;
        return $this;
    }
    /**
     * Get ValueRecommendation value
     * @return \macropage\ebaysdk\trading\StructType\ValueRecommendationType[]|null
     */
    public function getValueRecommendation()
    {
        return $this->ValueRecommendation;
    }
    /**
     * Set ValueRecommendation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValueRecommendationType[] $valueRecommendation
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setValueRecommendation(array $valueRecommendation = array())
    {
        foreach ($valueRecommendation as $nameRecommendationTypeValueRecommendationItem) {
            // validation for constraint: itemType
            if (!$nameRecommendationTypeValueRecommendationItem instanceof \macropage\ebaysdk\trading\StructType\ValueRecommendationType) {
                throw new \InvalidArgumentException(sprintf('The ValueRecommendation property can only contain items of \macropage\ebaysdk\trading\StructType\ValueRecommendationType, "%s" given', is_object($nameRecommendationTypeValueRecommendationItem) ? get_class($nameRecommendationTypeValueRecommendationItem) : gettype($nameRecommendationTypeValueRecommendationItem)), __LINE__);
            }
        }
        $this->ValueRecommendation = $valueRecommendation;
        return $this;
    }
    /**
     * Add item to ValueRecommendation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ValueRecommendationType $item
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function addToValueRecommendation(\macropage\ebaysdk\trading\StructType\ValueRecommendationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ValueRecommendationType) {
            throw new \InvalidArgumentException(sprintf('The ValueRecommendation property can only contain items of \macropage\ebaysdk\trading\StructType\ValueRecommendationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ValueRecommendation[] = $item;
        return $this;
    }
    /**
     * Get HelpURL value
     * @return string|null
     */
    public function getHelpURL()
    {
        return $this->HelpURL;
    }
    /**
     * Set HelpURL value
     * @param string $helpURL
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setHelpURL($helpURL = null)
    {
        // validation for constraint: string
        if (!is_null($helpURL) && !is_string($helpURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($helpURL)), __LINE__);
        }
        $this->HelpURL = $helpURL;
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $source, implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get HelpText value
     * @return string|null
     */
    public function getHelpText()
    {
        return $this->HelpText;
    }
    /**
     * Set HelpText value
     * @param string $helpText
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
     */
    public function setHelpText($helpText = null)
    {
        // validation for constraint: string
        if (!is_null($helpText) && !is_string($helpText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($helpText)), __LINE__);
        }
        $this->HelpText = $helpText;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\NameRecommendationType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
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
     * @return \macropage\ebaysdk\trading\StructType\NameRecommendationType
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
