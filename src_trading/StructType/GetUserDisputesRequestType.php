<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserDisputesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Requests a list of disputes the requester is involved in as buyer or seller. eBay Money Back Guarantee Item Not Received and Return cases are not returned with this call. To retrieve eBay Money Back Guarantee cases, use the <b>Search
 * Cases</b> call of the Post-Order API (or alternatively, the <b>getUserCases</b> call of the Resolution Case Management API.
 * @subpackage Structs
 */
class GetUserDisputesRequestType extends AbstractRequestType
{
    /**
     * The DisputeFilterType
     * Meta informations extracted from the WSDL
     * - documentation: An inclusive filter that isolates the returned disputes to a certain type such as Item Not Received or Unpaid Item disputes. eBay Money Back Guarantee cases are not retrieved with this call, even if the <b>ItemNotReceivedDisputes</b>
     * filter is included in the request.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeFilterType;
    /**
     * The DisputeSortType
     * Meta informations extracted from the WSDL
     * - documentation: The value and sequence to use to sort the returned disputes.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeSortType;
    /**
     * The ModTimeFrom
     * Meta informations extracted from the WSDL
     * - documentation: A filter that retrieves disputes whose <b>DisputeModifiedTime</b> is later than or equal to this value. Specify the time value in GMT. See the eBay Features Guide for information about specifying time values. For more precise control
     * of the date range filter, it is a good practice to also specify <b>ModTimeTo</b>. Otherwise, the end of the date range is the present time. Filtering by date range is optional. You can use date range filters in combination with other filters like
     * <b>DisputeFilterType</b> to control the amount of data returned.
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeFrom;
    /**
     * The ModTimeTo
     * Meta informations extracted from the WSDL
     * - documentation: A filter that retrieves disputes whose <b>DisputeModifiedTime</b> is earlier than or equal to this value. Specify the time value in GMT. See the eBay Features Guide for information about specifying time values. For more precise
     * control of the date range filter, it is a good practice to also specify <b>ModTimeFrom</b>. Otherwise, all available disputes modified prior to the <b>ModTimeTo</b> value are returned. Filtering by date range is optional. You can use date range
     * filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeTo;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: The virtual page number of the result set to display. A result set has a number of disputes divided into virtual pages, with 200 disputes per page. The response can only display one page. The first page in the result set is number 1.
     * Required. If not specified, a warning is returned and <b>Pagination.PageNumber</b> is set to 1 by default.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * Constructor method for GetUserDisputesRequestType
     * @uses GetUserDisputesRequestType::setDisputeFilterType()
     * @uses GetUserDisputesRequestType::setDisputeSortType()
     * @uses GetUserDisputesRequestType::setModTimeFrom()
     * @uses GetUserDisputesRequestType::setModTimeTo()
     * @uses GetUserDisputesRequestType::setPagination()
     * @param string $disputeFilterType
     * @param string $disputeSortType
     * @param string $modTimeFrom
     * @param string $modTimeTo
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     */
    public function __construct($disputeFilterType = null, $disputeSortType = null, $modTimeFrom = null, $modTimeTo = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this
            ->setDisputeFilterType($disputeFilterType)
            ->setDisputeSortType($disputeSortType)
            ->setModTimeFrom($modTimeFrom)
            ->setModTimeTo($modTimeTo)
            ->setPagination($pagination);
    }
    /**
     * Get DisputeFilterType value
     * @return string|null
     */
    public function getDisputeFilterType()
    {
        return $this->DisputeFilterType;
    }
    /**
     * Set DisputeFilterType value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeFilterType
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType
     */
    public function setDisputeFilterType($disputeFilterType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::valueIsValid($disputeFilterType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeFilterType, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeFilterType = $disputeFilterType;
        return $this;
    }
    /**
     * Get DisputeSortType value
     * @return string|null
     */
    public function getDisputeSortType()
    {
        return $this->DisputeSortType;
    }
    /**
     * Set DisputeSortType value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeSortTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeSortTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeSortType
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType
     */
    public function setDisputeSortType($disputeSortType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeSortTypeCodeType::valueIsValid($disputeSortType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeSortType, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeSortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeSortType = $disputeSortType;
        return $this;
    }
    /**
     * Get ModTimeFrom value
     * @return string|null
     */
    public function getModTimeFrom()
    {
        return $this->ModTimeFrom;
    }
    /**
     * Set ModTimeFrom value
     * @param string $modTimeFrom
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType
     */
    public function setModTimeFrom($modTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($modTimeFrom) && !is_string($modTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modTimeFrom)), __LINE__);
        }
        $this->ModTimeFrom = $modTimeFrom;
        return $this;
    }
    /**
     * Get ModTimeTo value
     * @return string|null
     */
    public function getModTimeTo()
    {
        return $this->ModTimeTo;
    }
    /**
     * Set ModTimeTo value
     * @param string $modTimeTo
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType
     */
    public function setModTimeTo($modTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($modTimeTo) && !is_string($modTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modTimeTo)), __LINE__);
        }
        $this->ModTimeTo = $modTimeTo;
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
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\GetUserDisputesRequestType
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
