<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PopularSearchesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated, as it was only used by the deprecated <b>FindPopularSearches</b> call.
 * @subpackage Structs
 */
class PopularSearchesType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The CategoryParentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CategoryParentID;
    /**
     * The QueryKeywords
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $QueryKeywords;
    /**
     * The AlternativeSearches
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AlternativeSearches;
    /**
     * The RelatedSearches
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RelatedSearches;
    /**
     * The CategoryName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CategoryName;
    /**
     * The CategoryParentName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CategoryParentName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PopularSearchesType
     * @uses PopularSearchesType::setCategoryID()
     * @uses PopularSearchesType::setCategoryParentID()
     * @uses PopularSearchesType::setQueryKeywords()
     * @uses PopularSearchesType::setAlternativeSearches()
     * @uses PopularSearchesType::setRelatedSearches()
     * @uses PopularSearchesType::setCategoryName()
     * @uses PopularSearchesType::setCategoryParentName()
     * @uses PopularSearchesType::setAny()
     * @param string $categoryID
     * @param string $categoryParentID
     * @param string $queryKeywords
     * @param string $alternativeSearches
     * @param string $relatedSearches
     * @param string $categoryName
     * @param string $categoryParentName
     * @param \DOMDocument $any
     */
    public function __construct($categoryID = null, $categoryParentID = null, $queryKeywords = null, $alternativeSearches = null, $relatedSearches = null, $categoryName = null, $categoryParentName = null, \DOMDocument $any = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setCategoryParentID($categoryParentID)
            ->setQueryKeywords($queryKeywords)
            ->setAlternativeSearches($alternativeSearches)
            ->setRelatedSearches($relatedSearches)
            ->setCategoryName($categoryName)
            ->setCategoryParentName($categoryParentName)
            ->setAny($any);
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\shopping\StructType\PopularSearchesType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get CategoryParentID value
     * @return string|null
     */
    public function getCategoryParentID()
    {
        return $this->CategoryParentID;
    }
    /**
     * Set CategoryParentID value
     * @param string $categoryParentID
     * @return \macropage\ebaysdk\shopping\StructType\PopularSearchesType
     */
    public function setCategoryParentID($categoryParentID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryParentID) && !is_string($categoryParentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryParentID)), __LINE__);
        }
        $this->CategoryParentID = $categoryParentID;
        return $this;
    }
    /**
     * Get QueryKeywords value
     * @return string|null
     */
    public function getQueryKeywords()
    {
        return $this->QueryKeywords;
    }
    /**
     * Set QueryKeywords value
     * @param string $queryKeywords
     * @return \macropage\ebaysdk\shopping\StructType\PopularSearchesType
     */
    public function setQueryKeywords($queryKeywords = null)
    {
        // validation for constraint: string
        if (!is_null($queryKeywords) && !is_string($queryKeywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queryKeywords)), __LINE__);
        }
        $this->QueryKeywords = $queryKeywords;
        return $this;
    }
    /**
     * Get AlternativeSearches value
     * @return string|null
     */
    public function getAlternativeSearches()
    {
        return $this->AlternativeSearches;
    }
    /**
     * Set AlternativeSearches value
     * @param string $alternativeSearches
     * @return \macropage\ebaysdk\shopping\StructType\PopularSearchesType
     */
    public function setAlternativeSearches($alternativeSearches = null)
    {
        // validation for constraint: string
        if (!is_null($alternativeSearches) && !is_string($alternativeSearches)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alternativeSearches)), __LINE__);
        }
        $this->AlternativeSearches = $alternativeSearches;
        return $this;
    }
    /**
     * Get RelatedSearches value
     * @return string|null
     */
    public function getRelatedSearches()
    {
        return $this->RelatedSearches;
    }
    /**
     * Set RelatedSearches value
     * @param string $relatedSearches
     * @return \macropage\ebaysdk\shopping\StructType\PopularSearchesType
     */
    public function setRelatedSearches($relatedSearches = null)
    {
        // validation for constraint: string
        if (!is_null($relatedSearches) && !is_string($relatedSearches)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relatedSearches)), __LINE__);
        }
        $this->RelatedSearches = $relatedSearches;
        return $this;
    }
    /**
     * Get CategoryName value
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->CategoryName;
    }
    /**
     * Set CategoryName value
     * @param string $categoryName
     * @return \macropage\ebaysdk\shopping\StructType\PopularSearchesType
     */
    public function setCategoryName($categoryName = null)
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryName)), __LINE__);
        }
        $this->CategoryName = $categoryName;
        return $this;
    }
    /**
     * Get CategoryParentName value
     * @return string|null
     */
    public function getCategoryParentName()
    {
        return $this->CategoryParentName;
    }
    /**
     * Set CategoryParentName value
     * @param string $categoryParentName
     * @return \macropage\ebaysdk\shopping\StructType\PopularSearchesType
     */
    public function setCategoryParentName($categoryParentName = null)
    {
        // validation for constraint: string
        if (!is_null($categoryParentName) && !is_string($categoryParentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryParentName)), __LINE__);
        }
        $this->CategoryParentName = $categoryParentName;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\PopularSearchesType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\PopularSearchesType
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
     * @return \macropage\ebaysdk\shopping\StructType\PopularSearchesType
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
