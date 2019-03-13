<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindHalfProductsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> The <b>FindHalfProducts</b> call is deprecated. </span>
 * @subpackage Structs
 */
class FindHalfProductsResponseType extends AbstractResponseType
{
    /**
     * The DomainHistogram
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\DomainHistogramType
     */
    public $DomainHistogram;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The ApproximatePages
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $ApproximatePages;
    /**
     * The MoreResults
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $MoreResults;
    /**
     * The TotalProducts
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var int
     */
    public $TotalProducts;
    /**
     * The Products
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\HalfProductsType
     */
    public $Products;
    /**
     * The ProductSearchURL
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>FindHalfProductsResponseType</b> and all of its elements are deprecated along with the <b>FindHalfProducts</b> call. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ProductSearchURL;
    /**
     * Constructor method for FindHalfProductsResponseType
     * @uses FindHalfProductsResponseType::setDomainHistogram()
     * @uses FindHalfProductsResponseType::setPageNumber()
     * @uses FindHalfProductsResponseType::setApproximatePages()
     * @uses FindHalfProductsResponseType::setMoreResults()
     * @uses FindHalfProductsResponseType::setTotalProducts()
     * @uses FindHalfProductsResponseType::setProducts()
     * @uses FindHalfProductsResponseType::setProductSearchURL()
     * @param \macropage\ebaysdk\shopping\StructType\DomainHistogramType $domainHistogram
     * @param int $pageNumber
     * @param int $approximatePages
     * @param bool $moreResults
     * @param int $totalProducts
     * @param \macropage\ebaysdk\shopping\StructType\HalfProductsType $products
     * @param string $productSearchURL
     */
    public function __construct(\macropage\ebaysdk\shopping\StructType\DomainHistogramType $domainHistogram = null, $pageNumber = null, $approximatePages = null, $moreResults = null, $totalProducts = null, \macropage\ebaysdk\shopping\StructType\HalfProductsType $products = null, $productSearchURL = null)
    {
        $this
            ->setDomainHistogram($domainHistogram)
            ->setPageNumber($pageNumber)
            ->setApproximatePages($approximatePages)
            ->setMoreResults($moreResults)
            ->setTotalProducts($totalProducts)
            ->setProducts($products)
            ->setProductSearchURL($productSearchURL);
    }
    /**
     * Get DomainHistogram value
     * @return \macropage\ebaysdk\shopping\StructType\DomainHistogramType|null
     */
    public function getDomainHistogram()
    {
        return $this->DomainHistogram;
    }
    /**
     * Set DomainHistogram value
     * @param \macropage\ebaysdk\shopping\StructType\DomainHistogramType $domainHistogram
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsResponseType
     */
    public function setDomainHistogram(\macropage\ebaysdk\shopping\StructType\DomainHistogramType $domainHistogram = null)
    {
        $this->DomainHistogram = $domainHistogram;
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsResponseType
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !is_numeric($pageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        return $this;
    }
    /**
     * Get ApproximatePages value
     * @return int|null
     */
    public function getApproximatePages()
    {
        return $this->ApproximatePages;
    }
    /**
     * Set ApproximatePages value
     * @param int $approximatePages
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsResponseType
     */
    public function setApproximatePages($approximatePages = null)
    {
        // validation for constraint: int
        if (!is_null($approximatePages) && !is_numeric($approximatePages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($approximatePages)), __LINE__);
        }
        $this->ApproximatePages = $approximatePages;
        return $this;
    }
    /**
     * Get MoreResults value
     * @return bool|null
     */
    public function getMoreResults()
    {
        return $this->MoreResults;
    }
    /**
     * Set MoreResults value
     * @param bool $moreResults
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsResponseType
     */
    public function setMoreResults($moreResults = null)
    {
        // validation for constraint: boolean
        if (!is_null($moreResults) && !is_bool($moreResults)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($moreResults)), __LINE__);
        }
        $this->MoreResults = $moreResults;
        return $this;
    }
    /**
     * Get TotalProducts value
     * @return int|null
     */
    public function getTotalProducts()
    {
        return $this->TotalProducts;
    }
    /**
     * Set TotalProducts value
     * @param int $totalProducts
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsResponseType
     */
    public function setTotalProducts($totalProducts = null)
    {
        // validation for constraint: int
        if (!is_null($totalProducts) && !is_numeric($totalProducts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalProducts)), __LINE__);
        }
        $this->TotalProducts = $totalProducts;
        return $this;
    }
    /**
     * Get Products value
     * @return \macropage\ebaysdk\shopping\StructType\HalfProductsType|null
     */
    public function getProducts()
    {
        return $this->Products;
    }
    /**
     * Set Products value
     * @param \macropage\ebaysdk\shopping\StructType\HalfProductsType $products
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsResponseType
     */
    public function setProducts(\macropage\ebaysdk\shopping\StructType\HalfProductsType $products = null)
    {
        $this->Products = $products;
        return $this;
    }
    /**
     * Get ProductSearchURL value
     * @return string|null
     */
    public function getProductSearchURL()
    {
        return $this->ProductSearchURL;
    }
    /**
     * Set ProductSearchURL value
     * @param string $productSearchURL
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsResponseType
     */
    public function setProductSearchURL($productSearchURL = null)
    {
        // validation for constraint: string
        if (!is_null($productSearchURL) && !is_string($productSearchURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productSearchURL)), __LINE__);
        }
        $this->ProductSearchURL = $productSearchURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\FindHalfProductsResponseType
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
