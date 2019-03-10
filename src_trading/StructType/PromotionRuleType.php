<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionRuleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PromotionRuleType extends AbstractStructBase
{
    /**
     * The PromotedStoreCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $PromotedStoreCategoryID;
    /**
     * The PromotedeBayCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotedeBayCategoryID;
    /**
     * The PromotedKeywords
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotedKeywords;
    /**
     * The ReferringItemID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ReferringItemID;
    /**
     * The ReferringStoreCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $ReferringStoreCategoryID;
    /**
     * The ReferringeBayCategoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ReferringeBayCategoryID;
    /**
     * The ReferringKeywords
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ReferringKeywords;
    /**
     * The PromotionScheme
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionScheme;
    /**
     * The PromotionMethod
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionMethod;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PromotionRuleType
     * @uses PromotionRuleType::setPromotedStoreCategoryID()
     * @uses PromotionRuleType::setPromotedeBayCategoryID()
     * @uses PromotionRuleType::setPromotedKeywords()
     * @uses PromotionRuleType::setReferringItemID()
     * @uses PromotionRuleType::setReferringStoreCategoryID()
     * @uses PromotionRuleType::setReferringeBayCategoryID()
     * @uses PromotionRuleType::setReferringKeywords()
     * @uses PromotionRuleType::setPromotionScheme()
     * @uses PromotionRuleType::setPromotionMethod()
     * @uses PromotionRuleType::setAny()
     * @param int $promotedStoreCategoryID
     * @param string $promotedeBayCategoryID
     * @param string $promotedKeywords
     * @param string $referringItemID
     * @param int $referringStoreCategoryID
     * @param string $referringeBayCategoryID
     * @param string $referringKeywords
     * @param string $promotionScheme
     * @param string $promotionMethod
     * @param \DOMDocument $any
     */
    public function __construct($promotedStoreCategoryID = null, $promotedeBayCategoryID = null, $promotedKeywords = null, $referringItemID = null, $referringStoreCategoryID = null, $referringeBayCategoryID = null, $referringKeywords = null, $promotionScheme = null, $promotionMethod = null, \DOMDocument $any = null)
    {
        $this
            ->setPromotedStoreCategoryID($promotedStoreCategoryID)
            ->setPromotedeBayCategoryID($promotedeBayCategoryID)
            ->setPromotedKeywords($promotedKeywords)
            ->setReferringItemID($referringItemID)
            ->setReferringStoreCategoryID($referringStoreCategoryID)
            ->setReferringeBayCategoryID($referringeBayCategoryID)
            ->setReferringKeywords($referringKeywords)
            ->setPromotionScheme($promotionScheme)
            ->setPromotionMethod($promotionMethod)
            ->setAny($any);
    }
    /**
     * Get PromotedStoreCategoryID value
     * @return int|null
     */
    public function getPromotedStoreCategoryID()
    {
        return $this->PromotedStoreCategoryID;
    }
    /**
     * Set PromotedStoreCategoryID value
     * @param int $promotedStoreCategoryID
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setPromotedStoreCategoryID($promotedStoreCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($promotedStoreCategoryID) && !is_numeric($promotedStoreCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($promotedStoreCategoryID)), __LINE__);
        }
        $this->PromotedStoreCategoryID = $promotedStoreCategoryID;
        return $this;
    }
    /**
     * Get PromotedeBayCategoryID value
     * @return string|null
     */
    public function getPromotedeBayCategoryID()
    {
        return $this->PromotedeBayCategoryID;
    }
    /**
     * Set PromotedeBayCategoryID value
     * @param string $promotedeBayCategoryID
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setPromotedeBayCategoryID($promotedeBayCategoryID = null)
    {
        // validation for constraint: string
        if (!is_null($promotedeBayCategoryID) && !is_string($promotedeBayCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotedeBayCategoryID)), __LINE__);
        }
        $this->PromotedeBayCategoryID = $promotedeBayCategoryID;
        return $this;
    }
    /**
     * Get PromotedKeywords value
     * @return string|null
     */
    public function getPromotedKeywords()
    {
        return $this->PromotedKeywords;
    }
    /**
     * Set PromotedKeywords value
     * @param string $promotedKeywords
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setPromotedKeywords($promotedKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($promotedKeywords) && !is_string($promotedKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotedKeywords)), __LINE__);
        }
        $this->PromotedKeywords = $promotedKeywords;
        return $this;
    }
    /**
     * Get ReferringItemID value
     * @return string|null
     */
    public function getReferringItemID()
    {
        return $this->ReferringItemID;
    }
    /**
     * Set ReferringItemID value
     * @param string $referringItemID
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setReferringItemID($referringItemID = null)
    {
        // validation for constraint: string
        if (!is_null($referringItemID) && !is_string($referringItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referringItemID)), __LINE__);
        }
        $this->ReferringItemID = $referringItemID;
        return $this;
    }
    /**
     * Get ReferringStoreCategoryID value
     * @return int|null
     */
    public function getReferringStoreCategoryID()
    {
        return $this->ReferringStoreCategoryID;
    }
    /**
     * Set ReferringStoreCategoryID value
     * @param int $referringStoreCategoryID
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setReferringStoreCategoryID($referringStoreCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($referringStoreCategoryID) && !is_numeric($referringStoreCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($referringStoreCategoryID)), __LINE__);
        }
        $this->ReferringStoreCategoryID = $referringStoreCategoryID;
        return $this;
    }
    /**
     * Get ReferringeBayCategoryID value
     * @return string|null
     */
    public function getReferringeBayCategoryID()
    {
        return $this->ReferringeBayCategoryID;
    }
    /**
     * Set ReferringeBayCategoryID value
     * @param string $referringeBayCategoryID
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setReferringeBayCategoryID($referringeBayCategoryID = null)
    {
        // validation for constraint: string
        if (!is_null($referringeBayCategoryID) && !is_string($referringeBayCategoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referringeBayCategoryID)), __LINE__);
        }
        $this->ReferringeBayCategoryID = $referringeBayCategoryID;
        return $this;
    }
    /**
     * Get ReferringKeywords value
     * @return string|null
     */
    public function getReferringKeywords()
    {
        return $this->ReferringKeywords;
    }
    /**
     * Set ReferringKeywords value
     * @param string $referringKeywords
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setReferringKeywords($referringKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($referringKeywords) && !is_string($referringKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referringKeywords)), __LINE__);
        }
        $this->ReferringKeywords = $referringKeywords;
        return $this;
    }
    /**
     * Get PromotionScheme value
     * @return string|null
     */
    public function getPromotionScheme()
    {
        return $this->PromotionScheme;
    }
    /**
     * Set PromotionScheme value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionScheme
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setPromotionScheme($promotionScheme = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::valueIsValid($promotionScheme)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $promotionScheme, implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionScheme = $promotionScheme;
        return $this;
    }
    /**
     * Get PromotionMethod value
     * @return string|null
     */
    public function getPromotionMethod()
    {
        return $this->PromotionMethod;
    }
    /**
     * Set PromotionMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionMethod
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setPromotionMethod($promotionMethod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::valueIsValid($promotionMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $promotionMethod, implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionMethod = $promotionMethod;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PromotionRuleType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
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
