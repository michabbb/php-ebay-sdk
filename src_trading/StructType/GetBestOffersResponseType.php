<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBestOffersResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. For the notification client usage, this response includes a single Best Offer.
 * @subpackage Structs
 */
class GetBestOffersResponseType extends AbstractResponseType
{
    /**
     * The BestOfferArray
     * Meta informations extracted from the WSDL
     * - documentation: All Best Offers for the item according to the filter or Best Offer ID (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if the
     * <code>ReturnAll</code> detail level is used. Only returned if Best Offers have been made.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType
     */
    public $BestOfferArray;
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of several details about the listing for which a Best Offer has been made, including the Item ID, the current price of the item (not the Best Offer price), and the time that the listing is scheduled to end.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The ItemBestOffersArray
     * Meta informations extracted from the WSDL
     * - documentation: A collection of details about the Best Offers received for a specific item. Empty if there are no Best Offers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType
     */
    public $ItemBestOffersArray;
    /**
     * The PageNumber
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the current page number of Best Offers that is currently being shown. This value will be the same value passed into the <b>Pagination.PageNumber</b> field in the request.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Provides information about the data returned, including the number of pages and the number of entries.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for GetBestOffersResponseType
     * @uses GetBestOffersResponseType::setBestOfferArray()
     * @uses GetBestOffersResponseType::setItem()
     * @uses GetBestOffersResponseType::setItemBestOffersArray()
     * @uses GetBestOffersResponseType::setPageNumber()
     * @uses GetBestOffersResponseType::setPaginationResult()
     * @param \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType $itemBestOffersArray
     * @param int $pageNumber
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray = null, \macropage\ebaysdk\trading\StructType\ItemType $item = null, \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType $itemBestOffersArray = null, $pageNumber = null, \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setBestOfferArray($bestOfferArray)
            ->setItem($item)
            ->setItemBestOffersArray($itemBestOffersArray)
            ->setPageNumber($pageNumber)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get BestOfferArray value
     * @return \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType|null
     */
    public function getBestOfferArray()
    {
        return $this->BestOfferArray;
    }
    /**
     * Set BestOfferArray value
     * @param \macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray
     * @return \macropage\ebaysdk\trading\StructType\GetBestOffersResponseType
     */
    public function setBestOfferArray(\macropage\ebaysdk\trading\ArrayType\BestOfferArrayType $bestOfferArray = null)
    {
        $this->BestOfferArray = $bestOfferArray;
        return $this;
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\GetBestOffersResponseType
     */
    public function setItem(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get ItemBestOffersArray value
     * @return \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType|null
     */
    public function getItemBestOffersArray()
    {
        return $this->ItemBestOffersArray;
    }
    /**
     * Set ItemBestOffersArray value
     * @param \macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType $itemBestOffersArray
     * @return \macropage\ebaysdk\trading\StructType\GetBestOffersResponseType
     */
    public function setItemBestOffersArray(\macropage\ebaysdk\trading\StructType\ItemBestOffersArrayType $itemBestOffersArray = null)
    {
        $this->ItemBestOffersArray = $itemBestOffersArray;
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
     * @return \macropage\ebaysdk\trading\StructType\GetBestOffersResponseType
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
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetBestOffersResponseType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetBestOffersResponseType
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
