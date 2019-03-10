<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSearchKeywordsRecommendationRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Checks specified keywords for spelling errors and returns corrected keywords that will provide better search results. If you make a keyword query search that returns no results, use this call to check the keywords for misspellings.
 * The call checks the words in context of the entire query. For example, if you submit "arry potter" in the request, the response will recommend "harry potter." However, if you submit "potter arry" in the request, the response will recommend "potter
 * army." <br><br> The response will not return recommended keywords in the following conditions: <ul> <li> Keywords value returns results (even a single item) in either findItemsByKeywords or findItemsAdvanced. </li> <li> Keywords value contains no
 * misspelled words (even if the keywords query returns no items). </li> </ul>
 * @subpackage Structs
 */
class GetSearchKeywordsRecommendationRequest extends BaseServiceRequest
{
    /**
     * The keywords
     * Meta informations extracted from the WSDL
     * - documentation: Specify one or more words to use in a search query for finding items on eBay. It is best to include the complete keywords value, as words are checked in context with each other. If you are using a URL request and your keyword query
     * consists of multiple words, use <code>%20</code> to separate the words (for example, <code>arry%20Potter</code>). Submitted keywords are not case sensitive. <br> <br> Keyword recommendations will not be returned if the submitted keywords are accepted
     * standard spellings for item listings. For example, no recommended keywords are returned for "nrfb" (Never Removed From Box) even if the keywords query does not return any search results, because this is an accepted listing term. If no correct
     * spelling can be identified for submitted keywords (such as <code>aabbccdd</code>), no recommended keywords are returned, even though the keyword is obviously not a word and will not return search results.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $keywords;
    /**
     * Constructor method for GetSearchKeywordsRecommendationRequest
     * @uses GetSearchKeywordsRecommendationRequest::setKeywords()
     * @param string $keywords
     */
    public function __construct($keywords = null)
    {
        $this
            ->setKeywords($keywords);
    }
    /**
     * Get keywords value
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }
    /**
     * Set keywords value
     * @param string $keywords
     * @return \macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationRequest
     */
    public function setKeywords($keywords = null)
    {
        // validation for constraint: string
        if (!is_null($keywords) && !is_string($keywords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keywords)), __LINE__);
        }
        $this->keywords = $keywords;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\GetSearchKeywordsRecommendationRequest
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
