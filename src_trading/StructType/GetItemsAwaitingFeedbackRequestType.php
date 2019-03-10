<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemsAwaitingFeedbackRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base request type of the <b>GetItemsAwaitingFeedback</b> call. This call retrieves all completed order line items for which the user (buyer or seller) still needs to leave Feedback for their order partner.
 * @subpackage Structs
 */
class GetItemsAwaitingFeedbackRequestType extends AbstractRequestType
{
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: This field allows the user to control how the order line items are returned in the response. Valid values are: <br/><br/> <br/><b>EndTime</b> <br/><b>EndTimeDescending</b> <br/><b>FeedbackLeft</b> <br/><b>FeedbackLeftDescending</b>
     * <br/><b>FeedbackReceived</b> <br/><b>FeedbackReceivedDescending</b> <br/><b>Title</b> <br/><b>TitleDescending</b> <br/><b>UserID</b> <br/><b>UserIDDescending</b> <br/><br/> The user can read the <a
     * href="types/ItemSortTypeCodeType.html">ItemSortTypeCodeType</a> definition for more information on these sort values.
     * - minOccurs: 0
     * @var string
     */
    public $Sort;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: This container can be used if the user only wants to see a subset of order line item results. In this container, the user will specify the number of order line items to return per page of data, and will specify the specific page of
     * data they want to view with each call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * Constructor method for GetItemsAwaitingFeedbackRequestType
     * @uses GetItemsAwaitingFeedbackRequestType::setSort()
     * @uses GetItemsAwaitingFeedbackRequestType::setPagination()
     * @param string $sort
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     */
    public function __construct($sort = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this
            ->setSort($sort)
            ->setPagination($pagination);
    }
    /**
     * Get Sort value
     * @return string|null
     */
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sort
     * @return \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType
     */
    public function setSort($sort = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::valueIsValid($sort)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sort, implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Get Pagination value
     * @return \macropage\ebaysdk\trading\StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @return \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackRequestType
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
