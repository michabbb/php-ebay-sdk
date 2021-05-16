<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindProductsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>FindProducts </b> call. Based on the search criteria, an array of one or more eBay catalog products are returned in the response, along with pagination data.
 * @subpackage Structs
 */
class FindProductsResponseType extends AbstractResponseType
{
    /**
     * The ApproximatePages
     * Meta information extracted from the WSDL
     * - documentation: The total number of pages in the results set based on the current search criteria. The number of pages in the results set will be determined by how many catalog products are found based on the search criteria (<b>QueryKeywords</b>
     * string, <b>DomainName</b> filter(s), and <b>CategoryID</b> restriction), and the number of catalog products to return on each page of results (set in the <b>MaxEntries</b> field). If 200 catalog products were found (as shown in the
     * <b>TotalProducts</b> field), and the <b>MaxEntries</b> value is <code>25</code> (25 catalog products per page), the <b>ApproximatePages</b> value will be <code>8</code> (200 (records)/25 (records per page) = 8 (pages).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ApproximatePages = null;
    /**
     * The MoreResults
     * Meta information extracted from the WSDL
     * - documentation: This boolean value is returned as <code>true</code> if more pages of catalog product records exist for the current search criteria, and <code>false</code> if the current page or results is the only or last page in the results set
     * based on the current search criteria. <br /> <br /> If more pages of results are available (value is <code>true</code>), it is advised that the user look at the <b>PageNumber</b> value and at the <b>ApproximatePages</b> value, as this will give the
     * user an idea of how many more pages of results exist based on the current search criteria. After having this knowledge, it is up to the user whether to refine the search a little more to retrieve less results, or perhaps increase the
     * <b>MaxEntries</b> integer value in the call request to retrieve more catalog products per page, or just go ahead and make multiple <b>FindProducts</b> calls to view all pages of results, iterating the <b>PageNumber</b> integer value in the call
     * request by '1' with each subsequent call.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MoreResults = null;
    /**
     * The DomainHistogram
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Important:</b> The use of domain histograms and <b>DomainName</b> filters is no longer recommended, as the domain histogram data that is returned in the response, and filtering by domain logic is no longer
     * reliable. </span> <br> This container consist of an array of eBay category domains, and the number of catalog products that belong to each eBay category domain. This array is only returned if the <b>IncludeSelector</b> field is included in the call
     * request and set to a value of <code>DomainHistogram</code>. <br> <br> To retrieve valid domain names, first use this call with your query string specified in <b>QueryKeywords</b>, and the <b>IncludeSelector</b> field's value set to
     * <code>DomainHistogram</code>. After retrieving all eBay defined domain names for the query string under the <b>DomainHistogram</b> container, the user can select the eBay domains relevant to the product they're searching for, and then they can do
     * another <b>FindProducts</b> call with one or more <b>DomainName</b> filters. <br> <br> Generally, <b>DomainName</b> filter(s) are only useful for query string searches using <b>QueryKeywords</b> field. If you are searching for a specific catalog
     * product based on an eBay Product ID (ePID) or a Global Trade Item Number (GTIN), such as a UPC, ISBN, or EAN, a lt;b>DomainName</b> filter is not needed.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\DomainHistogramType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\DomainHistogramType $DomainHistogram = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: This integer value shows the current page number of the results set that is being displayed. The number of pages in the results set depends on how many catalog products exist based on the search criteria, and how many catalog
     * products are being returned per page (set in the <b>MaxEntries</b> field in the call request). The total number of pages in the results set is shown in the <b>ApproximatePages</b> field. <br/><br/> The <b>PageNumber</b> value in the response always
     * reflects the <b>PageNumber</b> value that is set in the call request, or, if the <b>PageNumber</b> field is not used in the call request, the first (and perhaps only) page is returned by default. <br/><br/> If there are multiple pages in the results
     * set, and the user wants to review multiple pages, multiple <b>FindProducts</b> calls are required, iterating the <b>PageNumber</b> integer value in the call request by '1' with each subsequent call.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - documentation: A <b>Product</b> container is returned for each eBay catalog product that matches the search criteria. The <b>Product</b> container consists of specific data about the catalog product, including the product title, product identifiers
     * (ePID and any GTIN value(s)), product aspects, a link to eBay product page, and links to stock photos (if any). <br/><br/> The number of catalog products returned is dependent on the search criteria in the request. Searches based on a
     * <b>QueryKeywords</b> string will generally return multiple catalog products, but a search based on an eBay Product ID (set in the <b>ProductID</b> field) should only return one catalog product. The number of catalog products returned per page will
     * also depend on the <b>MaxEntries</b> value set in the call request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\CatalogProductType[]
     */
    protected array $Product = [];
    /**
     * The TotalProducts
     * Meta information extracted from the WSDL
     * - documentation: This integer value is the total number of catalog products that match the current search criteria. This value can be quite larger than the total number of catalog products returned per page, which is controlled by the
     * <b>MaxEntries</b> value set in the call request. The user can also look at the <b>ApproximatePages</b> field to see how many pages of results exist for the current search criteria. <br/>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalProducts = null;
    /**
     * The DuplicateItems
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is no longer applicable since the <b>FindProducts</b> call no longer retrieves any active listings associated with the retrieved catalog products.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DuplicateItems = null;
    /**
     * Constructor method for FindProductsResponseType
     * @uses FindProductsResponseType::setApproximatePages()
     * @uses FindProductsResponseType::setMoreResults()
     * @uses FindProductsResponseType::setDomainHistogram()
     * @uses FindProductsResponseType::setPageNumber()
     * @uses FindProductsResponseType::setProduct()
     * @uses FindProductsResponseType::setTotalProducts()
     * @uses FindProductsResponseType::setDuplicateItems()
     * @param int $approximatePages
     * @param bool $moreResults
     * @param \macropage\ebaysdk\shopping\StructType\DomainHistogramType $domainHistogram
     * @param int $pageNumber
     * @param \macropage\ebaysdk\shopping\StructType\CatalogProductType[] $product
     * @param int $totalProducts
     * @param bool $duplicateItems
     */
    public function __construct(?int $approximatePages = null, ?bool $moreResults = null, ?\macropage\ebaysdk\shopping\StructType\DomainHistogramType $domainHistogram = null, ?int $pageNumber = null, array $product = [], ?int $totalProducts = null, ?bool $duplicateItems = null)
    {
        $this
            ->setApproximatePages($approximatePages)
            ->setMoreResults($moreResults)
            ->setDomainHistogram($domainHistogram)
            ->setPageNumber($pageNumber)
            ->setProduct($product)
            ->setTotalProducts($totalProducts)
            ->setDuplicateItems($duplicateItems);
    }
    /**
     * Get ApproximatePages value
     * @return int|null
     */
    public function getApproximatePages(): ?int
    {
        return $this->ApproximatePages;
    }
    /**
     * Set ApproximatePages value
     * @param int $approximatePages
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType
     */
    public function setApproximatePages(?int $approximatePages = null): self
    {
        // validation for constraint: int
        if (!is_null($approximatePages) && !(is_int($approximatePages) || ctype_digit($approximatePages))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($approximatePages, true), gettype($approximatePages)), __LINE__);
        }
        $this->ApproximatePages = $approximatePages;
        
        return $this;
    }
    /**
     * Get MoreResults value
     * @return bool|null
     */
    public function getMoreResults(): ?bool
    {
        return $this->MoreResults;
    }
    /**
     * Set MoreResults value
     * @param bool $moreResults
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType
     */
    public function setMoreResults(?bool $moreResults = null): self
    {
        // validation for constraint: boolean
        if (!is_null($moreResults) && !is_bool($moreResults)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreResults, true), gettype($moreResults)), __LINE__);
        }
        $this->MoreResults = $moreResults;
        
        return $this;
    }
    /**
     * Get DomainHistogram value
     * @return \macropage\ebaysdk\shopping\StructType\DomainHistogramType|null
     */
    public function getDomainHistogram(): ?\macropage\ebaysdk\shopping\StructType\DomainHistogramType
    {
        return $this->DomainHistogram;
    }
    /**
     * Set DomainHistogram value
     * @param \macropage\ebaysdk\shopping\StructType\DomainHistogramType $domainHistogram
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType
     */
    public function setDomainHistogram(?\macropage\ebaysdk\shopping\StructType\DomainHistogramType $domainHistogram = null): self
    {
        $this->DomainHistogram = $domainHistogram;
        
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType
     */
    public function setPageNumber(?int $pageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        
        return $this;
    }
    /**
     * Get Product value
     * @return \macropage\ebaysdk\shopping\StructType\CatalogProductType[]
     */
    public function getProduct(): array
    {
        return $this->Product;
    }
    /**
     * This method is responsible for validating the values passed to the setProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductForArrayConstraintsFromSetProduct(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $findProductsResponseTypeProductItem) {
            // validation for constraint: itemType
            if (!$findProductsResponseTypeProductItem instanceof \macropage\ebaysdk\shopping\StructType\CatalogProductType) {
                $invalidValues[] = is_object($findProductsResponseTypeProductItem) ? get_class($findProductsResponseTypeProductItem) : sprintf('%s(%s)', gettype($findProductsResponseTypeProductItem), var_export($findProductsResponseTypeProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Product property can only contain items of type \macropage\ebaysdk\shopping\StructType\CatalogProductType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Product value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\CatalogProductType[] $product
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType
     */
    public function setProduct(array $product = []): self
    {
        // validation for constraint: array
        if ('' !== ($productArrayErrorMessage = self::validateProductForArrayConstraintsFromSetProduct($product))) {
            throw new InvalidArgumentException($productArrayErrorMessage, __LINE__);
        }
        $this->Product = $product;
        
        return $this;
    }
    /**
     * Add item to Product value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\CatalogProductType $item
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType
     */
    public function addToProduct(\macropage\ebaysdk\shopping\StructType\CatalogProductType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\CatalogProductType) {
            throw new InvalidArgumentException(sprintf('The Product property can only contain items of type \macropage\ebaysdk\shopping\StructType\CatalogProductType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Product[] = $item;
        
        return $this;
    }
    /**
     * Get TotalProducts value
     * @return int|null
     */
    public function getTotalProducts(): ?int
    {
        return $this->TotalProducts;
    }
    /**
     * Set TotalProducts value
     * @param int $totalProducts
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType
     */
    public function setTotalProducts(?int $totalProducts = null): self
    {
        // validation for constraint: int
        if (!is_null($totalProducts) && !(is_int($totalProducts) || ctype_digit($totalProducts))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalProducts, true), gettype($totalProducts)), __LINE__);
        }
        $this->TotalProducts = $totalProducts;
        
        return $this;
    }
    /**
     * Get DuplicateItems value
     * @return bool|null
     */
    public function getDuplicateItems(): ?bool
    {
        return $this->DuplicateItems;
    }
    /**
     * Set DuplicateItems value
     * @param bool $duplicateItems
     * @return \macropage\ebaysdk\shopping\StructType\FindProductsResponseType
     */
    public function setDuplicateItems(?bool $duplicateItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateItems) && !is_bool($duplicateItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateItems, true), gettype($duplicateItems)), __LINE__);
        }
        $this->DuplicateItems = $duplicateItems;
        
        return $this;
    }
}
