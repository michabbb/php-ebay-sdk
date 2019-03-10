<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemRequestContainerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container to specify a single eBay item to end.
 * @subpackage Structs
 */
class EndItemRequestContainerType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique item ID of the eBay listing to end. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The EndingReason
     * Meta informations extracted from the WSDL
     * - documentation: The seller's reason for ending the listing early is input into this required field. The seller is not allowed to use the <code>ProductDeleted<code> value, as this ending reason can only be used internally by eBay to administratively
     * end a listing due to the associated Catalog product being removed from the eBay Catalog.
     * - minOccurs: 0
     * @var string
     */
    public $EndingReason;
    /**
     * The MessageID
     * Meta informations extracted from the WSDL
     * - documentation: Most Trading API calls support a <b>MessageID</b> element in the request and a <b>CorrelationID</b> element in the response. With <b>EndItems</b>, the seller can pass in a different <b>MessageID</b> value for each
     * <b>EndItemRequestContainer</b> container that is used in the request. The <b>CorrelationID</b> value returned under each <b>EndItemResponseContainer</b> container is used to correlate each End Item request container with its corresponding End Item
     * response container. The same <b>MessageID</b> value that you pass into a request will be returned in the <b>CorrelationID</b> field in the response. <br> <br> If you do not pass in a <b>MessageID</b> value in the request, <b>CorrelationID</b> is not
     * returned.
     * - minOccurs: 0
     * @var string
     */
    public $MessageID;
    /**
     * The SellerInventoryID
     * Meta informations extracted from the WSDL
     * - documentation: This field was previously only used to identify and end Half.com listings, and since the Half.com site has been shut down, this element is no longer applicable.
     * - minOccurs: 0
     * @var string
     */
    public $SellerInventoryID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for EndItemRequestContainerType
     * @uses EndItemRequestContainerType::setItemID()
     * @uses EndItemRequestContainerType::setEndingReason()
     * @uses EndItemRequestContainerType::setMessageID()
     * @uses EndItemRequestContainerType::setSellerInventoryID()
     * @uses EndItemRequestContainerType::setAny()
     * @param string $itemID
     * @param string $endingReason
     * @param string $messageID
     * @param string $sellerInventoryID
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $endingReason = null, $messageID = null, $sellerInventoryID = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setEndingReason($endingReason)
            ->setMessageID($messageID)
            ->setSellerInventoryID($sellerInventoryID)
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType
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
     * Get EndingReason value
     * @return string|null
     */
    public function getEndingReason()
    {
        return $this->EndingReason;
    }
    /**
     * Set EndingReason value
     * @uses \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $endingReason
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType
     */
    public function setEndingReason($endingReason = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EndReasonCodeType::valueIsValid($endingReason)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $endingReason, implode(', ', \macropage\ebaysdk\trading\EnumType\EndReasonCodeType::getValidValues())), __LINE__);
        }
        $this->EndingReason = $endingReason;
        return $this;
    }
    /**
     * Get MessageID value
     * @return string|null
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param string $messageID
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType
     */
    public function setMessageID($messageID = null)
    {
        // validation for constraint: string
        if (!is_null($messageID) && !is_string($messageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageID)), __LINE__);
        }
        $this->MessageID = $messageID;
        return $this;
    }
    /**
     * Get SellerInventoryID value
     * @return string|null
     */
    public function getSellerInventoryID()
    {
        return $this->SellerInventoryID;
    }
    /**
     * Set SellerInventoryID value
     * @param string $sellerInventoryID
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType
     */
    public function setSellerInventoryID($sellerInventoryID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerInventoryID) && !is_string($sellerInventoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerInventoryID)), __LINE__);
        }
        $this->SellerInventoryID = $sellerInventoryID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemRequestContainerType
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
