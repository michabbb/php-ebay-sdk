<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecommendationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type was replaced by <b>ListingRecommendationType</b>
 * @subpackage Structs
 */
class RecommendationType extends AbstractStructBase
{
    /**
     * The FieldGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FieldGroup;
    /**
     * The FieldName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FieldName;
    /**
     * The RecommendationCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecommendationCode;
    /**
     * The RecommendedValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RecommendedValue;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RecommendationType
     * @uses RecommendationType::setFieldGroup()
     * @uses RecommendationType::setFieldName()
     * @uses RecommendationType::setRecommendationCode()
     * @uses RecommendationType::setRecommendedValue()
     * @uses RecommendationType::setMessage()
     * @uses RecommendationType::setAny()
     * @param string $fieldGroup
     * @param string $fieldName
     * @param string $recommendationCode
     * @param string[] $recommendedValue
     * @param string $message
     * @param \DOMDocument $any
     */
    public function __construct($fieldGroup = null, $fieldName = null, $recommendationCode = null, array $recommendedValue = array(), $message = null, \DOMDocument $any = null)
    {
        $this
            ->setFieldGroup($fieldGroup)
            ->setFieldName($fieldName)
            ->setRecommendationCode($recommendationCode)
            ->setRecommendedValue($recommendedValue)
            ->setMessage($message)
            ->setAny($any);
    }
    /**
     * Get FieldGroup value
     * @return string|null
     */
    public function getFieldGroup()
    {
        return $this->FieldGroup;
    }
    /**
     * Set FieldGroup value
     * @param string $fieldGroup
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function setFieldGroup($fieldGroup = null)
    {
        // validation for constraint: string
        if (!is_null($fieldGroup) && !is_string($fieldGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldGroup)), __LINE__);
        }
        $this->FieldGroup = $fieldGroup;
        return $this;
    }
    /**
     * Get FieldName value
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->FieldName;
    }
    /**
     * Set FieldName value
     * @param string $fieldName
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function setFieldName($fieldName = null)
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldName)), __LINE__);
        }
        $this->FieldName = $fieldName;
        return $this;
    }
    /**
     * Get RecommendationCode value
     * @return string|null
     */
    public function getRecommendationCode()
    {
        return $this->RecommendationCode;
    }
    /**
     * Set RecommendationCode value
     * @param string $recommendationCode
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function setRecommendationCode($recommendationCode = null)
    {
        // validation for constraint: string
        if (!is_null($recommendationCode) && !is_string($recommendationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recommendationCode)), __LINE__);
        }
        $this->RecommendationCode = $recommendationCode;
        return $this;
    }
    /**
     * Get RecommendedValue value
     * @return string[]|null
     */
    public function getRecommendedValue()
    {
        return $this->RecommendedValue;
    }
    /**
     * Set RecommendedValue value
     * @throws \InvalidArgumentException
     * @param string[] $recommendedValue
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function setRecommendedValue(array $recommendedValue = array())
    {
        foreach ($recommendedValue as $recommendationTypeRecommendedValueItem) {
            // validation for constraint: itemType
            if (!is_string($recommendationTypeRecommendedValueItem)) {
                throw new \InvalidArgumentException(sprintf('The RecommendedValue property can only contain items of string, "%s" given', is_object($recommendationTypeRecommendedValueItem) ? get_class($recommendationTypeRecommendedValueItem) : gettype($recommendationTypeRecommendedValueItem)), __LINE__);
            }
        }
        $this->RecommendedValue = $recommendedValue;
        return $this;
    }
    /**
     * Add item to RecommendedValue value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function addToRecommendedValue($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The RecommendedValue property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RecommendedValue[] = $item;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RecommendationType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
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
     * @return \macropage\ebaysdk\trading\StructType\RecommendationType
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
