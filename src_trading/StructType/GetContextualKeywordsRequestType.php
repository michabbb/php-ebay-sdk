<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContextualKeywordsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves top-ranked contextual eBay keywords and categories for a specified web page.
 * @subpackage Structs
 */
class GetContextualKeywordsRequestType extends AbstractRequestType
{
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of the web page from which eBay is to extract keywords.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The Encoding
     * Meta informations extracted from the WSDL
     * - documentation: Web page encoding by which the URL is to be handled, such as ISO-8859-1.
     * - minOccurs: 0
     * @var string
     */
    public $Encoding;
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: The ID of the category to which keywords are to be limited. Zero or more category IDs can be specified.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CategoryID;
    /**
     * Constructor method for GetContextualKeywordsRequestType
     * @uses GetContextualKeywordsRequestType::setURL()
     * @uses GetContextualKeywordsRequestType::setEncoding()
     * @uses GetContextualKeywordsRequestType::setCategoryID()
     * @param string $uRL
     * @param string $encoding
     * @param string[] $categoryID
     */
    public function __construct($uRL = null, $encoding = null, array $categoryID = array())
    {
        $this
            ->setURL($uRL)
            ->setEncoding($encoding)
            ->setCategoryID($categoryID);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get Encoding value
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->Encoding;
    }
    /**
     * Set Encoding value
     * @param string $encoding
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType
     */
    public function setEncoding($encoding = null)
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encoding)), __LINE__);
        }
        $this->Encoding = $encoding;
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string[]|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @throws \InvalidArgumentException
     * @param string[] $categoryID
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType
     */
    public function setCategoryID(array $categoryID = array())
    {
        foreach ($categoryID as $getContextualKeywordsRequestTypeCategoryIDItem) {
            // validation for constraint: itemType
            if (!is_string($getContextualKeywordsRequestTypeCategoryIDItem)) {
                throw new \InvalidArgumentException(sprintf('The CategoryID property can only contain items of string, "%s" given', is_object($getContextualKeywordsRequestTypeCategoryIDItem) ? get_class($getContextualKeywordsRequestTypeCategoryIDItem) : gettype($getContextualKeywordsRequestTypeCategoryIDItem)), __LINE__);
            }
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Add item to CategoryID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType
     */
    public function addToCategoryID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CategoryID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CategoryID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType
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
