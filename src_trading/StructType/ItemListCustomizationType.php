<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemListCustomizationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines how a list of items should be returned.
 * @subpackage Structs
 */
class ItemListCustomizationType extends AbstractStructBase
{
    /**
     * The Include
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether or not to include the container in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container. <br><br> If
     * you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
     * - minOccurs: 0
     * @var bool
     */
    public $Include;
    /**
     * The ListingType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the listing type of items in the returned list.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the sort order of the result. Default is Ascending.
     * - minOccurs: 0
     * @var string
     */
    public $Sort;
    /**
     * The DurationInDays
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the time period during which an item was won or lost. Similar to the period drop-down menu in the My eBay user interface. For example, to return the items won or lost in the last week, specify a DurationInDays of 7.
     * - minOccurs: 0
     * @var int
     */
    public $DurationInDays;
    /**
     * The IncludeNotes
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether or not to include Item.PrivateNotes and Item.eBayNotes in the response.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeNotes;
    /**
     * The Pagination
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to create virtual pages in the returned list. <br> Default for EntriesPerPage with GetMyeBayBuying is 200.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationType
     */
    public $Pagination;
    /**
     * The OrderStatusFilter
     * Meta informations extracted from the WSDL
     * - documentation: Filter to reduce the SoldList response based on whether the seller (or eBay) marked the applicable order as Paid and/or Shipped in My eBay.<br> <br> (Sellers can use CompleteSale or the eBay Web site UI to mark an order as Paid or
     * Shipped in My eBay. Sellers can also specify PaymentStatus in ReviseCheckoutStatus to mark an order as Paid or awaiting payment in My eBay.)
     * - minOccurs: 0
     * @var string
     */
    public $OrderStatusFilter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemListCustomizationType
     * @uses ItemListCustomizationType::setInclude()
     * @uses ItemListCustomizationType::setListingType()
     * @uses ItemListCustomizationType::setSort()
     * @uses ItemListCustomizationType::setDurationInDays()
     * @uses ItemListCustomizationType::setIncludeNotes()
     * @uses ItemListCustomizationType::setPagination()
     * @uses ItemListCustomizationType::setOrderStatusFilter()
     * @uses ItemListCustomizationType::setAny()
     * @param bool $include
     * @param string $listingType
     * @param string $sort
     * @param int $durationInDays
     * @param bool $includeNotes
     * @param \macropage\ebaysdk\trading\StructType\PaginationType $pagination
     * @param string $orderStatusFilter
     * @param \DOMDocument $any
     */
    public function __construct($include = null, $listingType = null, $sort = null, $durationInDays = null, $includeNotes = null, \macropage\ebaysdk\trading\StructType\PaginationType $pagination = null, $orderStatusFilter = null, \DOMDocument $any = null)
    {
        $this
            ->setInclude($include)
            ->setListingType($listingType)
            ->setSort($sort)
            ->setDurationInDays($durationInDays)
            ->setIncludeNotes($includeNotes)
            ->setPagination($pagination)
            ->setOrderStatusFilter($orderStatusFilter)
            ->setAny($any);
    }
    /**
     * Get Include value
     * @return bool|null
     */
    public function getInclude()
    {
        return $this->Include;
    }
    /**
     * Set Include value
     * @param bool $include
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setInclude($include = null)
    {
        // validation for constraint: boolean
        if (!is_null($include) && !is_bool($include)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($include)), __LINE__);
        }
        $this->Include = $include;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingType, implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
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
     * Get DurationInDays value
     * @return int|null
     */
    public function getDurationInDays()
    {
        return $this->DurationInDays;
    }
    /**
     * Set DurationInDays value
     * @param int $durationInDays
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setDurationInDays($durationInDays = null)
    {
        // validation for constraint: int
        if (!is_null($durationInDays) && !is_numeric($durationInDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($durationInDays)), __LINE__);
        }
        $this->DurationInDays = $durationInDays;
        return $this;
    }
    /**
     * Get IncludeNotes value
     * @return bool|null
     */
    public function getIncludeNotes()
    {
        return $this->IncludeNotes;
    }
    /**
     * Set IncludeNotes value
     * @param bool $includeNotes
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setIncludeNotes($includeNotes = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeNotes) && !is_bool($includeNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeNotes)), __LINE__);
        }
        $this->IncludeNotes = $includeNotes;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setPagination(\macropage\ebaysdk\trading\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
    /**
     * Get OrderStatusFilter value
     * @return string|null
     */
    public function getOrderStatusFilter()
    {
        return $this->OrderStatusFilter;
    }
    /**
     * Set OrderStatusFilter value
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusFilterCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\OrderStatusFilterCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $orderStatusFilter
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setOrderStatusFilter($orderStatusFilter = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\OrderStatusFilterCodeType::valueIsValid($orderStatusFilter)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $orderStatusFilter, implode(', ', \macropage\ebaysdk\trading\EnumType\OrderStatusFilterCodeType::getValidValues())), __LINE__);
        }
        $this->OrderStatusFilter = $orderStatusFilter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ItemListCustomizationType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ItemListCustomizationType
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
