<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemResponseContainerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>AddItemResponseContainer</b> containers that are returned in an <b>AddItems</b> call. An <b>AddItemResponseContainer</b> container is returned for each item created through an <b>AddItems</b> call. Each item
 * being created through an <b>AddItems</b> call is identified through a unique <b>AddItemRequestContainer.MessageID</b> value that is defined by the seller. To match up the <b>AddItemResponseContainer</b> to the <b>AddItemRequestContainer</b>, look for
 * a <b>AddItemResponseContainer.CorrelationID</b> value that matches the <b>AddItemRequestContainer.MessageID</b> value in the request.
 * @subpackage Structs
 */
class AddItemResponseContainerType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the new listing. This field is returned as long as the listing was successfully created. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller included the <b>Item.ScheduleTime</b> field in the request and set
     * a custom start time of the listing (in the future).
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: Date and time when the new listing is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field at listing time. If the value of <b>ListingDuration</b> was set to
     * <code>GTC</code> (Good 'Til Cancelled) this value will be set 30 days ahead of the start time, although this value will be updated if the GTC listing is still alive and automatically renewed 30 days after start time.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - documentation: This container is an array of one or more fees associated with the creation of the listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType
     */
    public $Fees;
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the primary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is included and set to <code>true</code> in the request and the Category
     * ID passed in as the primary listing category was mapped to a new Category ID by eBay. If the primary category has not changed, or if it has expired with no replacement, this field is not returned.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The Category2ID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the secondary category in which the item was listed. This field is only returned if a secondary category was used, the <b>Item.CategoryMappingAllowed</b> boolean field is included and set to <code>true</code> in
     * the request, and the Category ID passed in as the secondary listing category was mapped to a new Category ID by eBay. If the secondary category has not changed or it has expired with no replacement, this field is not returned.
     * - minOccurs: 0
     * @var string
     */
    public $Category2ID;
    /**
     * The CorrelationID
     * Meta informations extracted from the WSDL
     * - documentation: Most Trading API calls support a <b>MessageID</b> element in the request and a <b>CorrelationID</b> element in the response. With <b>AddItems</b>, a unique <b>MessageID</b> value is required for each <b>AddItemRequestContainer</b>
     * container that is used in the request. The <b>CorrelationID</b> value returned under each <b>AddItemResponseContainer</b> container is used to correlate each item request container with its corresponding response container. The same <b>MessageID</b>
     * value that you pass into a request will be returned in the <b>CorrelationID</b> field in the response.
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationID;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - documentation: This container is an array of one or more errors and/or warnings (if any) that occurred when eBay processed the request. <br> <br> Errors may occur due to problems with business-level data on the client side or on the eBay server
     * side. For example, an error would occur if the request contains an invalid combination of fields, or it is missing a required field, or the value of the field is not recognized. An error could also occur if eBay encountered a problem in our internal
     * business logic while processing the request.<br> <br> This container is only returned if there were one or more warnings or errors.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ErrorType[]
     */
    public $Errors;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Supplemental information from eBay, if applicable. May elaborate on errors or provide useful hints for the seller. This data can accompany the call's normal data result set or a result set that contains only errors. The string can
     * return HTML, including TABLE, IMG, and HREF elements. In this case, an HTML- based application should be able to include the HTML as-is in the HTML page that displays the results. A non-HTML application would need to parse the HTML and convert the
     * table elements and image references into UI elements particular to the programming language used. Because this data is returned as a string, the HTML markup elements are escaped with character entity references (e.g.,&lt;table&gt;&lt;tr&gt;...).
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The DiscountReason
     * Meta informations extracted from the WSDL
     * - documentation: This container is an array of one or more listing fee/upgrade discount types being offered by eBay to the seller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DiscountReason;
    /**
     * The ListingRecommendations
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated
     * seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling
     * (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge. <br><br> This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in
     * the <b>AddItems</b> request, and if at least one listing recommendation exists for the newly created listing. If one or more listing recommendations are returned for one or more of the newly created listings, it will be at the seller's discretion
     * about whether to revise the item(s) based on eBay's listing recommendation(s).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
     */
    public $ListingRecommendations;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AddItemResponseContainerType
     * @uses AddItemResponseContainerType::setItemID()
     * @uses AddItemResponseContainerType::setStartTime()
     * @uses AddItemResponseContainerType::setEndTime()
     * @uses AddItemResponseContainerType::setFees()
     * @uses AddItemResponseContainerType::setCategoryID()
     * @uses AddItemResponseContainerType::setCategory2ID()
     * @uses AddItemResponseContainerType::setCorrelationID()
     * @uses AddItemResponseContainerType::setErrors()
     * @uses AddItemResponseContainerType::setMessage()
     * @uses AddItemResponseContainerType::setDiscountReason()
     * @uses AddItemResponseContainerType::setListingRecommendations()
     * @uses AddItemResponseContainerType::setAny()
     * @param string $itemID
     * @param string $startTime
     * @param string $endTime
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @param string $categoryID
     * @param string $category2ID
     * @param string $correlationID
     * @param \macropage\ebaysdk\trading\StructType\ErrorType[] $errors
     * @param string $message
     * @param string[] $discountReason
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $startTime = null, $endTime = null, \macropage\ebaysdk\trading\StructType\FeesType $fees = null, $categoryID = null, $category2ID = null, $correlationID = null, array $errors = array(), $message = null, array $discountReason = array(), \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setFees($fees)
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setCorrelationID($correlationID)
            ->setErrors($errors)
            ->setMessage($message)
            ->setDiscountReason($discountReason)
            ->setListingRecommendations($listingRecommendations)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get Fees value
     * @return \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setFees(\macropage\ebaysdk\trading\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get Category2ID value
     * @return string|null
     */
    public function getCategory2ID()
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param string $category2ID
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setCategory2ID($category2ID = null)
    {
        // validation for constraint: string
        if (!is_null($category2ID) && !is_string($category2ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get Errors value
     * @return \macropage\ebaysdk\trading\StructType\ErrorType[]|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ErrorType[] $errors
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setErrors(array $errors = array())
    {
        foreach ($errors as $addItemResponseContainerTypeErrorsItem) {
            // validation for constraint: itemType
            if (!$addItemResponseContainerTypeErrorsItem instanceof \macropage\ebaysdk\trading\StructType\ErrorType) {
                throw new \InvalidArgumentException(sprintf('The Errors property can only contain items of \macropage\ebaysdk\trading\StructType\ErrorType, "%s" given', is_object($addItemResponseContainerTypeErrorsItem) ? get_class($addItemResponseContainerTypeErrorsItem) : gettype($addItemResponseContainerTypeErrorsItem)), __LINE__);
            }
        }
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Add item to Errors value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ErrorType $item
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function addToErrors(\macropage\ebaysdk\trading\StructType\ErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ErrorType) {
            throw new \InvalidArgumentException(sprintf('The Errors property can only contain items of \macropage\ebaysdk\trading\StructType\ErrorType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Errors[] = $item;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get DiscountReason value
     * @return string[]|null
     */
    public function getDiscountReason()
    {
        return $this->DiscountReason;
    }
    /**
     * Set DiscountReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $discountReason
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setDiscountReason(array $discountReason = array())
    {
        $invalidValues = array();
        foreach ($discountReason as $addItemResponseContainerTypeDiscountReasonItem) {
            if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($addItemResponseContainerTypeDiscountReasonItem)) {
                $invalidValues[] = var_export($addItemResponseContainerTypeDiscountReasonItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountReason = $discountReason;
        return $this;
    }
    /**
     * Add item to DiscountReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function addToDiscountReason($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountReason[] = $item;
        return $this;
    }
    /**
     * Get ListingRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationsType|null
     */
    public function getListingRecommendations()
    {
        return $this->ListingRecommendations;
    }
    /**
     * Set ListingRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setListingRecommendations(\macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations = null)
    {
        $this->ListingRecommendations = $listingRecommendations;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
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
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
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
