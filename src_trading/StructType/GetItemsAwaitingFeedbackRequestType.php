<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemsAwaitingFeedbackRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type of the <b>GetItemsAwaitingFeedback</b> call. This call retrieves all completed order line items for which the user (buyer or seller) still needs to leave Feedback for their order partner.
 * @subpackage Structs
 */
class GetItemsAwaitingFeedbackRequestType extends AbstractRequestType
{
    /**
     * The Sort
     * Meta information extracted from the WSDL
     * - documentation: This field allows the user to control how the order line items are returned in the response. If this field is not used, order line items are returned based on end time (from most recent to oldest). Valid values for this field are:
     * <ul> <li><code>EndTime</code></li> <li><code>EndTimeDescending</code> (default value)</li> <li><code>FeedbackLeft</code></li> <li><code>FeedbackLeftDescending</code></li> <li><code>FeedbackReceived</code></li>
     * <li><code>FeedbackReceivedDescending</code></li> <li><code>Title</code></li> <li><code>TitleDescending</code></li> <li><code>UserID</code></li> <li><code>UserIDDescending</code></li> </ul> Reference the <a
     * href="types/ItemSortTypeCodeType.html">ItemSortTypeCodeType</a> definition for more information on these sort values. <br/>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sort = null;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This container can be used if the user only wants to see a subset of order line item results. In this container, the user will specify the number of order line items to return per page of data, and will specify the specific page of
     * data they want to view with each call. <br/><br/> With the <b>GetItemsAwaitingFeedback</b> call, the maximum allowed value for <b>EntriesPerPage</b> is 200.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationType $Pagination = null;
    /**
     * Constructor method for GetItemsAwaitingFeedbackRequestType
     * @uses GetItemsAwaitingFeedbackRequestType::setSort()
     * @uses GetItemsAwaitingFeedbackRequestType::setPagination()
     * @param string $sort
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     */
    public function __construct(?string $sort = null, ?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this
            ->setSort($sort)
            ->setPagination($pagination);
    }
    /**
     * Get Sort value
     * @return string|null
     */
    public function getSort(): ?string
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sort
     * @return \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType
     */
    public function setSort(?string $sort = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::valueIsValid($sort)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType', is_array($sort) ? implode(', ', $sort) : var_export($sort, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination(): ?\macropage\ebaysdk\trading\StructType\PaginationType
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType
     */
    public function setPagination(?\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null): self
    {
        $this->Pagination = $pagination;
        
        return $this;
    }
}
