<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemResponseContainerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>AddItemResponseContainer</b> containers that are returned in an <b>AddItems</b> call. An <b>AddItemResponseContainer</b> container is returned for each item created through an <b>AddItems</b> call. Each item
 * being created through an <b>AddItems</b> call is identified through a unique <b>AddItemRequestContainer.MessageID</b> value that is defined by the seller. To match up the <b>AddItemResponseContainer</b> to the <b>AddItemRequestContainer</b>, look for
 * a <b>AddItemResponseContainer.CorrelationID</b> value that matches the <b>AddItemRequestContainer.MessageID</b> value in the request.
 * @subpackage Structs
 */
class AddItemResponseContainerType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the new listing. This field is returned as long as the listing was successfully created. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller included the <b>Item.ScheduleTime</b> field in the request and set
     * a custom start time of the listing (in the future).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time when the new listing is scheduled to end based on the start time and the listing duration value that was set in the <b>ListingDuration</b> field at listing time. If the value of <b>ListingDuration</b> was set to
     * <code>GTC</code> (Good 'Til Cancelled) this value will be set one month ahead of the start time, and this value will continue to be updated one month ahead each time the GTC listing needs to be renewed. Fixed-price listings get renewed automatically
     * as long as there is still a quantity of <code>1</code> or above, or even if the quantity is <code>0</code>, but the 'out-of-stock control' feature is enabled. <br><br> Note that <code>GTC</code> is not a supported listing duration for auction
     * listings, but is the only supported listing duration for fixed-price listings except for a few motor vehicle categories on eBay Motors US, eBay UK, and eBay Italy. <br><br> <span class="tablenote"><b>Note: </b> As of July 1, 2019, the Good 'Til
     * Cancelled renewal schedule has been modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be August 5. If a GTC listing is created on the 31st of the month, but the
     * following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on February 28th (or 29th during a 'Leap Year'). See the <a
     * href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019 Seller Updates</b> for more information about this
     * change. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of fees associated with the creation of the listing. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the
     * listing has a sale. <br> <br> All listing fee types are returned, even if those fees are not applicable for the revised listings and are '0.0'. <br> <br> <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the
     * <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>AddItems</b> call to list items on the eBay US site, the currency type
     * shown for each fee will be <code>USD</code> and not <code>CAD</code>. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FeesType $Fees = null;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the primary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is set to <code>true</code> in the request (or omitted) and the Category
     * ID passed in as the primary listing category was automatically mapped to a new Category ID by eBay. If the primary category ID passed in the request is still active/valid, this field is not returned. <br/><br/> <span class="tablenote"><b>Note: </b>
     * The <b>Item.CategoryMappingAllowed</b> field value in the request now defaults to <code>true</code> if omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for
     * eBay to map an outdated Primary or Secondary Category ID to the updated Category ID. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The Category2ID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the secondary category in which the item was listed. This field is only returned if the <b>Item.CategoryMappingAllowed</b> boolean field is set to <code>true</code> in the request (or omitted) and the Category ID
     * passed in as the secondary listing category was automatically mapped to a new Category ID by eBay. If the secondary category ID passed in the request is still active/valid, this field is not returned. <br/><br/> <span class="tablenote"><b>Note: </b>
     * The <b>Item.CategoryMappingAllowed</b> field value in the request now defaults to <code>true</code> if omitted. Previously, the default value was <code>false</code>, so a user had to include this field and set it to <code>true</code> in order for
     * eBay to map an outdated Primary or Secondary Category ID to the updated Category ID. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Category2ID = null;
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: Most Trading API calls support a <b>MessageID</b> element in the request and a <b>CorrelationID</b> element in the response. With <b>AddItems</b>, a unique <b>MessageID</b> value is required for each <b>AddItemRequestContainer</b>
     * container that is used in the request. The <b>CorrelationID</b> value returned under each <b>AddItemResponseContainer</b> container is used to correlate each item request container with its corresponding response container. The same <b>MessageID</b>
     * value that you pass into a request will be returned in the <b>CorrelationID</b> field in the response.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CorrelationID = null;
    /**
     * The Errors
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of one or more errors and/or warnings (if any) that occurred when eBay attempted to create the corresponding listing. Note that one or more errors and/or warnings may also occur at the call-level. <br> <br>
     * This container is only returned if there were one or more warnings and/or errors that occurred with the creation of the corresponding listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ErrorType[]
     */
    protected array $Errors = [];
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: Supplemental information from eBay, if applicable. May elaborate on errors or provide useful hints for the seller. This data can accompany the call's normal data result set or a result set that contains only errors. The string can
     * return HTML, including TABLE, IMG, and HREF elements. In this case, an HTML- based application should be able to include the HTML as-is in the HTML page that displays the results. A non-HTML application would need to parse the HTML and convert the
     * table elements and image references into UI elements particular to the programming language used. Because this data is returned as a string, the HTML markup elements are escaped with character entity references (e.g.,&lt;table&gt;&lt;tr&gt;...).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * The DiscountReason
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of one or more listing fee/upgrade discount types being offered by eBay to the seller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $DiscountReason = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $itemID = null, ?string $startTime = null, ?string $endTime = null, ?\macropage\ebaysdk\trading\StructType\FeesType $fees = null, ?string $categoryID = null, ?string $category2ID = null, ?string $correlationID = null, array $errors = [], ?string $message = null, array $discountReason = [], $any = null)
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
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    public function getFees(): ?\macropage\ebaysdk\trading\StructType\FeesType
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setFees(?\macropage\ebaysdk\trading\StructType\FeesType $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID(): ?string
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setCategoryID(?string $categoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get Category2ID value
     * @return string|null
     */
    public function getCategory2ID(): ?string
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param string $category2ID
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setCategory2ID(?string $category2ID = null): self
    {
        // validation for constraint: string
        if (!is_null($category2ID) && !is_string($category2ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category2ID, true), gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID(): ?string
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setCorrelationID(?string $correlationID = null): self
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlationID, true), gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        
        return $this;
    }
    /**
     * Get Errors value
     * @return \macropage\ebaysdk\trading\StructType\ErrorType[]
     */
    public function getErrors(): array
    {
        return $this->Errors;
    }
    /**
     * This method is responsible for validating the values passed to the setErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorsForArrayConstraintsFromSetErrors(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addItemResponseContainerTypeErrorsItem) {
            // validation for constraint: itemType
            if (!$addItemResponseContainerTypeErrorsItem instanceof \macropage\ebaysdk\trading\StructType\ErrorType) {
                $invalidValues[] = is_object($addItemResponseContainerTypeErrorsItem) ? get_class($addItemResponseContainerTypeErrorsItem) : sprintf('%s(%s)', gettype($addItemResponseContainerTypeErrorsItem), var_export($addItemResponseContainerTypeErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Errors property can only contain items of type \macropage\ebaysdk\trading\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Errors value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ErrorType[] $errors
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setErrors(array $errors = []): self
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintsFromSetErrors($errors))) {
            throw new InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        $this->Errors = $errors;
        
        return $this;
    }
    /**
     * Add item to Errors value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ErrorType $item
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function addToErrors(\macropage\ebaysdk\trading\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The Errors property can only contain items of type \macropage\ebaysdk\trading\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Errors[] = $item;
        
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Get DiscountReason value
     * @return string[]
     */
    public function getDiscountReason(): array
    {
        return $this->DiscountReason;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountReasonForArrayConstraintsFromSetDiscountReason(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addItemResponseContainerTypeDiscountReasonItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($addItemResponseContainerTypeDiscountReasonItem)) {
                $invalidValues[] = is_object($addItemResponseContainerTypeDiscountReasonItem) ? get_class($addItemResponseContainerTypeDiscountReasonItem) : sprintf('%s(%s)', gettype($addItemResponseContainerTypeDiscountReasonItem), var_export($addItemResponseContainerTypeDiscountReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiscountReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $discountReason
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setDiscountReason(array $discountReason = []): self
    {
        // validation for constraint: array
        if ('' !== ($discountReasonArrayErrorMessage = self::validateDiscountReasonForArrayConstraintsFromSetDiscountReason($discountReason))) {
            throw new InvalidArgumentException($discountReasonArrayErrorMessage, __LINE__);
        }
        $this->DiscountReason = $discountReason;
        
        return $this;
    }
    /**
     * Add item to DiscountReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function addToDiscountReason(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountReason[] = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\AddItemResponseContainerType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
