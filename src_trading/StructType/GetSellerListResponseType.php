<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerListResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type of the <b>GetSellerList</b> call. The <b>GetSellerList</b> response includes an array of one or more listings that matched the input criteria, as well as pagination data.
 * @subpackage Structs
 */
class GetSellerListResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: This container shows the total number or pages in the result set, as well as the total number of listings that match the current input criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationResultType $PaginationResult = null;
    /**
     * The HasMoreItems
     * Meta information extracted from the WSDL
     * - documentation: This field's value is returned as <code>true</code> if there are more pages in the current result set to view, or <code>false</code> if the current page being viewed is the last (or only) page of the result set. <br/><br/> If there
     * are more listings to view in the result set, additional <b>GetSellerList</b> calls can be made but with changes to the <b>Pagination</b> values in the request. For example, if the <b>Pagination.PageNumber</b> value in the request for the last call
     * was <code>1</code>, you can make another <b>GetSellerList</b> call, keeping everything the same except changing the value of the <b>Pagination.PageNumber</b> field from <code>1</code> to <code>2</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasMoreItems = null;
    /**
     * The ItemArray
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of one or more listings that match the input criteria. If none of the seller's listings match the input criteria, this container is returned as an empty tag.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $ItemArray = null;
    /**
     * The ItemsPerPage
     * Meta information extracted from the WSDL
     * - documentation: This value reflects the value that was set in the <b>Pagination.EntriesPerPage</b> field in the request. This is the maximum number of listings that may be returned per page of the result set. Note that this value is only the maximum
     * threshold and does not necessarily reflect the number of listings appearing on the current page of data.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemsPerPage = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the current page of data in the result set that is being displayed. This value reflects the value specified in the <b>Pagination.PageNumber</b> field in the request. Note that page number defaults to
     * <code>1</code> if the <b>Pagination.PageNumber</b> field was not included in the request.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * The ReturnedItemCountActual
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total number of listings being shown on the current page of the results set.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ReturnedItemCountActual = null;
    /**
     * The Seller
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information about the seller and the seller's account. This container is only returned if the <b>GranularityLevel</b> field is included in the request and set to <code>Fine</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserType $Seller = null;
    /**
     * Constructor method for GetSellerListResponseType
     * @uses GetSellerListResponseType::setPaginationResult()
     * @uses GetSellerListResponseType::setHasMoreItems()
     * @uses GetSellerListResponseType::setItemArray()
     * @uses GetSellerListResponseType::setItemsPerPage()
     * @uses GetSellerListResponseType::setPageNumber()
     * @uses GetSellerListResponseType::setReturnedItemCountActual()
     * @uses GetSellerListResponseType::setSeller()
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreItems
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @param int $itemsPerPage
     * @param int $pageNumber
     * @param int $returnedItemCountActual
     * @param \macropage\ebaysdk\trading\StructType\UserType $seller
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, ?bool $hasMoreItems = null, ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null, ?int $itemsPerPage = null, ?int $pageNumber = null, ?int $returnedItemCountActual = null, ?\macropage\ebaysdk\trading\StructType\UserType $seller = null)
    {
        $this
            ->setPaginationResult($paginationResult)
            ->setHasMoreItems($hasMoreItems)
            ->setItemArray($itemArray)
            ->setItemsPerPage($itemsPerPage)
            ->setPageNumber($pageNumber)
            ->setReturnedItemCountActual($returnedItemCountActual)
            ->setSeller($seller);
    }
    /**
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult(): ?\macropage\ebaysdk\trading\StructType\PaginationResultType
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setPaginationResult(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null): self
    {
        $this->PaginationResult = $paginationResult;
        
        return $this;
    }
    /**
     * Get HasMoreItems value
     * @return bool|null
     */
    public function getHasMoreItems(): ?bool
    {
        return $this->HasMoreItems;
    }
    /**
     * Set HasMoreItems value
     * @param bool $hasMoreItems
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setHasMoreItems(?bool $hasMoreItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreItems) && !is_bool($hasMoreItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreItems, true), gettype($hasMoreItems)), __LINE__);
        }
        $this->HasMoreItems = $hasMoreItems;
        
        return $this;
    }
    /**
     * Get ItemArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    public function getItemArray(): ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setItemArray(?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null): self
    {
        $this->ItemArray = $itemArray;
        
        return $this;
    }
    /**
     * Get ItemsPerPage value
     * @return int|null
     */
    public function getItemsPerPage(): ?int
    {
        return $this->ItemsPerPage;
    }
    /**
     * Set ItemsPerPage value
     * @param int $itemsPerPage
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setItemsPerPage(?int $itemsPerPage = null): self
    {
        // validation for constraint: int
        if (!is_null($itemsPerPage) && !(is_int($itemsPerPage) || ctype_digit($itemsPerPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemsPerPage, true), gettype($itemsPerPage)), __LINE__);
        }
        $this->ItemsPerPage = $itemsPerPage;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
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
     * Get ReturnedItemCountActual value
     * @return int|null
     */
    public function getReturnedItemCountActual(): ?int
    {
        return $this->ReturnedItemCountActual;
    }
    /**
     * Set ReturnedItemCountActual value
     * @param int $returnedItemCountActual
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setReturnedItemCountActual(?int $returnedItemCountActual = null): self
    {
        // validation for constraint: int
        if (!is_null($returnedItemCountActual) && !(is_int($returnedItemCountActual) || ctype_digit($returnedItemCountActual))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnedItemCountActual, true), gettype($returnedItemCountActual)), __LINE__);
        }
        $this->ReturnedItemCountActual = $returnedItemCountActual;
        
        return $this;
    }
    /**
     * Get Seller value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getSeller(): ?\macropage\ebaysdk\trading\StructType\UserType
    {
        return $this->Seller;
    }
    /**
     * Set Seller value
     * @param \macropage\ebaysdk\trading\StructType\UserType $seller
     * @return \macropage\ebaysdk\trading\StructType\GetSellerListResponseType
     */
    public function setSeller(?\macropage\ebaysdk\trading\StructType\UserType $seller = null): self
    {
        $this->Seller = $seller;
        
        return $this;
    }
}
