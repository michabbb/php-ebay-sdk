<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserDisputesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>GetUserDisputes</b>, a call that retrieves a list of Unpaid Item cases that the user is involved in as a buyer or seller.
 * @subpackage Structs
 */
class GetUserDisputesResponseType extends AbstractResponseType
{
    /**
     * The StartingDisputeID
     * Meta information extracted from the WSDL
     * - documentation: The index of the first dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are
     * returned per page: The first page returns a <b>StartingDisputeID</b> value of 0 (since a zero-based index is used) and the second page returns a <b>StartingDisputeID</b> value of 200. | The unique identifier of an Unpaid Item case involving a buyer
     * and seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> Despite the name, this type is now only used to identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the
     * <strong>DisputeID</strong> field in Dispute calls handles Unpaid Item case IDs. These calls no longer support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay
     * buyers. eBay buyers must create an INR case through eBay's Resolution Center, and these calls also do not support eBay Money Back Guarantee cases. <br/><br/> To respond to an eBay Money Back Guarantee case, the seller should use the <a
     * href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartingDisputeID = null;
    /**
     * The EndingDisputeID
     * Meta information extracted from the WSDL
     * - documentation: The index of the last dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned
     * per page: The first page returns an <b>EndingDisputeID</b> value of 199 (since a zero-based index is used) and the second page returns an <b>EndingDisputeID</b> value of 227. | The unique identifier of an Unpaid Item case involving a buyer and
     * seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> Despite the name, this type is now only used to identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the
     * <strong>DisputeID</strong> field in Dispute calls handles Unpaid Item case IDs. These calls no longer support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay
     * buyers. eBay buyers must create an INR case through eBay's Resolution Center, and these calls also do not support eBay Money Back Guarantee cases. <br/><br/> To respond to an eBay Money Back Guarantee case, the seller should use the <a
     * href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndingDisputeID = null;
    /**
     * The DisputeArray
     * Meta information extracted from the WSDL
     * - documentation: The array of disputes that match the input criteria in the request. It will be returned as empty if no disputes match the input criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\DisputeArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\DisputeArrayType $DisputeArray = null;
    /**
     * The ItemsPerPage
     * Meta information extracted from the WSDL
     * - documentation: The maximum number of records that will be displayed per page of data. This value will always be <code>200</code> since the <b>EntriesPerPage</b> value defaults to and can only be set to <code>200</code>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemsPerPage = null;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: The page number of the result set that is currently being viewed. Keep in mind that the <b>GetUserDisputes</b> call uses a zero-based index for pagination, so the first page of data in the result set will actually have a value of
     * lt;code>0</code>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageNumber = null;
    /**
     * The DisputeFilterCount
     * Meta information extracted from the WSDL
     * - documentation: This container will be returned for the different types/categories of disputes. The <b>TotalAvailable</b> field will indicate how many disputes of that type/category (identified in the corresponding <b>DisputeFilterType</b> field)
     * match the input criteria.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DisputeFilterCountType[]
     */
    protected ?array $DisputeFilterCount = null;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: The result of the pagination, including the total number of virtual pages in the result set and the total number of records returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationResultType $PaginationResult = null;
    /**
     * Constructor method for GetUserDisputesResponseType
     * @uses GetUserDisputesResponseType::setStartingDisputeID()
     * @uses GetUserDisputesResponseType::setEndingDisputeID()
     * @uses GetUserDisputesResponseType::setDisputeArray()
     * @uses GetUserDisputesResponseType::setItemsPerPage()
     * @uses GetUserDisputesResponseType::setPageNumber()
     * @uses GetUserDisputesResponseType::setDisputeFilterCount()
     * @uses GetUserDisputesResponseType::setPaginationResult()
     * @param string $startingDisputeID
     * @param string $endingDisputeID
     * @param \macropage\ebaysdk\trading\ArrayType\DisputeArrayType $disputeArray
     * @param int $itemsPerPage
     * @param int $pageNumber
     * @param \macropage\ebaysdk\trading\StructType\DisputeFilterCountType[] $disputeFilterCount
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     */
    public function __construct(?string $startingDisputeID = null, ?string $endingDisputeID = null, ?\macropage\ebaysdk\trading\ArrayType\DisputeArrayType $disputeArray = null, ?int $itemsPerPage = null, ?int $pageNumber = null, ?array $disputeFilterCount = null, ?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setStartingDisputeID($startingDisputeID)
            ->setEndingDisputeID($endingDisputeID)
            ->setDisputeArray($disputeArray)
            ->setItemsPerPage($itemsPerPage)
            ->setPageNumber($pageNumber)
            ->setDisputeFilterCount($disputeFilterCount)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get StartingDisputeID value
     * @return string|null
     */
    public function getStartingDisputeID(): ?string
    {
        return $this->StartingDisputeID;
    }
    /**
     * Set StartingDisputeID value
     * @param string $startingDisputeID
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setStartingDisputeID(?string $startingDisputeID = null): self
    {
        // validation for constraint: string
        if (!is_null($startingDisputeID) && !is_string($startingDisputeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startingDisputeID, true), gettype($startingDisputeID)), __LINE__);
        }
        $this->StartingDisputeID = $startingDisputeID;
        
        return $this;
    }
    /**
     * Get EndingDisputeID value
     * @return string|null
     */
    public function getEndingDisputeID(): ?string
    {
        return $this->EndingDisputeID;
    }
    /**
     * Set EndingDisputeID value
     * @param string $endingDisputeID
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setEndingDisputeID(?string $endingDisputeID = null): self
    {
        // validation for constraint: string
        if (!is_null($endingDisputeID) && !is_string($endingDisputeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endingDisputeID, true), gettype($endingDisputeID)), __LINE__);
        }
        $this->EndingDisputeID = $endingDisputeID;
        
        return $this;
    }
    /**
     * Get DisputeArray value
     * @return \macropage\ebaysdk\trading\ArrayType\DisputeArrayType|null
     */
    public function getDisputeArray(): ?\macropage\ebaysdk\trading\ArrayType\DisputeArrayType
    {
        return $this->DisputeArray;
    }
    /**
     * Set DisputeArray value
     * @param \macropage\ebaysdk\trading\ArrayType\DisputeArrayType $disputeArray
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setDisputeArray(?\macropage\ebaysdk\trading\ArrayType\DisputeArrayType $disputeArray = null): self
    {
        $this->DisputeArray = $disputeArray;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
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
     * Get DisputeFilterCount value
     * @return \macropage\ebaysdk\trading\StructType\DisputeFilterCountType[]
     */
    public function getDisputeFilterCount(): ?array
    {
        return $this->DisputeFilterCount;
    }
    /**
     * This method is responsible for validating the values passed to the setDisputeFilterCount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisputeFilterCount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisputeFilterCountForArrayConstraintsFromSetDisputeFilterCount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserDisputesResponseTypeDisputeFilterCountItem) {
            // validation for constraint: itemType
            if (!$getUserDisputesResponseTypeDisputeFilterCountItem instanceof \macropage\ebaysdk\trading\StructType\DisputeFilterCountType) {
                $invalidValues[] = is_object($getUserDisputesResponseTypeDisputeFilterCountItem) ? get_class($getUserDisputesResponseTypeDisputeFilterCountItem) : sprintf('%s(%s)', gettype($getUserDisputesResponseTypeDisputeFilterCountItem), var_export($getUserDisputesResponseTypeDisputeFilterCountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DisputeFilterCount property can only contain items of type \macropage\ebaysdk\trading\StructType\DisputeFilterCountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DisputeFilterCount value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeFilterCountType[] $disputeFilterCount
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setDisputeFilterCount(?array $disputeFilterCount = null): self
    {
        // validation for constraint: array
        if ('' !== ($disputeFilterCountArrayErrorMessage = self::validateDisputeFilterCountForArrayConstraintsFromSetDisputeFilterCount($disputeFilterCount))) {
            throw new InvalidArgumentException($disputeFilterCountArrayErrorMessage, __LINE__);
        }
        $this->DisputeFilterCount = $disputeFilterCount;
        
        return $this;
    }
    /**
     * Add item to DisputeFilterCount value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeFilterCountType $item
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function addToDisputeFilterCount(\macropage\ebaysdk\trading\StructType\DisputeFilterCountType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DisputeFilterCountType) {
            throw new InvalidArgumentException(sprintf('The DisputeFilterCount property can only contain items of type \macropage\ebaysdk\trading\StructType\DisputeFilterCountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DisputeFilterCount[] = $item;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesResponseType
     */
    public function setPaginationResult(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null): self
    {
        $this->PaginationResult = $paginationResult;
        
        return $this;
    }
}
