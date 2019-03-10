<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseFindingServiceResponse StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response container for all Finding Service operations.
 * @subpackage Structs
 */
abstract class BaseFindingServiceResponse extends BaseServiceResponse
{
    /**
     * The searchResult
     * Meta informations extracted from the WSDL
     * - documentation: Container for the item listings that matched the search criteria. The data for each item is returned in individual containers, if any matches were found.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\SearchResult
     */
    public $searchResult;
    /**
     * The paginationOutput
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the pagination of the result set. Child elements indicate the page number that is returned, the maximum number of item listings to return per page, total number of pages that can be returned, and the total number of
     * listings that match the search criteria.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\PaginationOutput
     */
    public $paginationOutput;
    /**
     * The itemSearchURL
     * Meta informations extracted from the WSDL
     * - documentation: A URL to view the search results on the eBay web site. The search results on the web site will use the same pagination as the API search results. <br><br> <span class="tablenote"><strong>Note:</strong> eBay URLs returned in fields,
     * such as <b class="con">viewItemURL</b>, are subject to syntax and other changes without notice. To avoid problems in your application when eBay alters the URL format, we advise you to avoid parsing eBay URLs programmatically. We strive to ensure that
     * other fields in the response contain all the information that is encoded in the URL, and more. </span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $itemSearchURL;
    /**
     * The extension
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ExtensionType[]
     */
    public $extension;
    /**
     * Constructor method for BaseFindingServiceResponse
     * @uses BaseFindingServiceResponse::setSearchResult()
     * @uses BaseFindingServiceResponse::setPaginationOutput()
     * @uses BaseFindingServiceResponse::setItemSearchURL()
     * @uses BaseFindingServiceResponse::setExtension()
     * @param \macropage\ebaysdk\finding\StructType\SearchResult $searchResult
     * @param \macropage\ebaysdk\finding\StructType\PaginationOutput $paginationOutput
     * @param string $itemSearchURL
     * @param \macropage\ebaysdk\finding\StructType\ExtensionType[] $extension
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\SearchResult $searchResult = null, \macropage\ebaysdk\finding\StructType\PaginationOutput $paginationOutput = null, $itemSearchURL = null, array $extension = array())
    {
        $this
            ->setSearchResult($searchResult)
            ->setPaginationOutput($paginationOutput)
            ->setItemSearchURL($itemSearchURL)
            ->setExtension($extension);
    }
    /**
     * Get searchResult value
     * @return \macropage\ebaysdk\finding\StructType\SearchResult|null
     */
    public function getSearchResult()
    {
        return $this->searchResult;
    }
    /**
     * Set searchResult value
     * @param \macropage\ebaysdk\finding\StructType\SearchResult $searchResult
     * @return \macropage\ebaysdk\finding\StructType\BaseFindingServiceResponse
     */
    public function setSearchResult(\macropage\ebaysdk\finding\StructType\SearchResult $searchResult = null)
    {
        $this->searchResult = $searchResult;
        return $this;
    }
    /**
     * Get paginationOutput value
     * @return \macropage\ebaysdk\finding\StructType\PaginationOutput|null
     */
    public function getPaginationOutput()
    {
        return $this->paginationOutput;
    }
    /**
     * Set paginationOutput value
     * @param \macropage\ebaysdk\finding\StructType\PaginationOutput $paginationOutput
     * @return \macropage\ebaysdk\finding\StructType\BaseFindingServiceResponse
     */
    public function setPaginationOutput(\macropage\ebaysdk\finding\StructType\PaginationOutput $paginationOutput = null)
    {
        $this->paginationOutput = $paginationOutput;
        return $this;
    }
    /**
     * Get itemSearchURL value
     * @return string|null
     */
    public function getItemSearchURL()
    {
        return $this->itemSearchURL;
    }
    /**
     * Set itemSearchURL value
     * @param string $itemSearchURL
     * @return \macropage\ebaysdk\finding\StructType\BaseFindingServiceResponse
     */
    public function setItemSearchURL($itemSearchURL = null)
    {
        // validation for constraint: string
        if (!is_null($itemSearchURL) && !is_string($itemSearchURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemSearchURL)), __LINE__);
        }
        $this->itemSearchURL = $itemSearchURL;
        return $this;
    }
    /**
     * Get extension value
     * @return \macropage\ebaysdk\finding\StructType\ExtensionType[]|null
     */
    public function getExtension()
    {
        return $this->extension;
    }
    /**
     * Set extension value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ExtensionType[] $extension
     * @return \macropage\ebaysdk\finding\StructType\BaseFindingServiceResponse
     */
    public function setExtension(array $extension = array())
    {
        foreach ($extension as $baseFindingServiceResponseExtensionItem) {
            // validation for constraint: itemType
            if (!$baseFindingServiceResponseExtensionItem instanceof \macropage\ebaysdk\finding\StructType\ExtensionType) {
                throw new \InvalidArgumentException(sprintf('The extension property can only contain items of \macropage\ebaysdk\finding\StructType\ExtensionType, "%s" given', is_object($baseFindingServiceResponseExtensionItem) ? get_class($baseFindingServiceResponseExtensionItem) : gettype($baseFindingServiceResponseExtensionItem)), __LINE__);
            }
        }
        $this->extension = $extension;
        return $this;
    }
    /**
     * Add item to extension value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ExtensionType $item
     * @return \macropage\ebaysdk\finding\StructType\BaseFindingServiceResponse
     */
    public function addToExtension(\macropage\ebaysdk\finding\StructType\ExtensionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\ExtensionType) {
            throw new \InvalidArgumentException(sprintf('The extension property can only contain items of \macropage\ebaysdk\finding\StructType\ExtensionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->extension[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\BaseFindingServiceResponse
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
