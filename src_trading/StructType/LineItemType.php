<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LineItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type provides information about one order line item in a Global Shipping package. The package can contain multiple units of a given order line item.
 * @subpackage Structs
 */
class LineItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the eBay item listing of the order line item. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is specified in the
     * same node, this field is required for each <b>ItemTransactionID</b> node included in the request. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 1
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item (transaction). The <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b> node included in the request. Optionally, an <b>OrderLineItemID</b> value
     * can substitute for the <b>ItemID</b>/<b>TransactionID</b> pair.
     * - minOccurs: 1
     * @var string
     */
    public $TransactionID;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of units of the order line item in this package; this is required for customs. The seller must ensure that this matches the quantity of the order line item enclosed in the package. <br/><br/> This value must be a positive
     * integer, and it can't be greater than the quantity of this item specified in the original transaction.
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The CountryOfOrigin
     * Meta informations extracted from the WSDL
     * - documentation: The Country of Manufacture for the order line item; this is required for customs. This should identify the country in which more than 50% of the value of the item was created. <br/><br/> This value must conform to the ISO 3166
     * two-letter country code standard. To see the list of currently supported codes, and the English names associated with each code (e.g., KY="Cayman Islands"), call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>CountryDetails</b>.
     * - minOccurs: 0
     * @var string
     */
    public $CountryOfOrigin;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: The item description of the order line item, based on its <strong>ItemID</strong>.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for LineItemType
     * @uses LineItemType::setItemID()
     * @uses LineItemType::setTransactionID()
     * @uses LineItemType::setQuantity()
     * @uses LineItemType::setCountryOfOrigin()
     * @uses LineItemType::setDescription()
     * @uses LineItemType::setAny()
     * @param string $itemID
     * @param string $transactionID
     * @param int $quantity
     * @param string $countryOfOrigin
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $transactionID = null, $quantity = null, $countryOfOrigin = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setQuantity($quantity)
            ->setCountryOfOrigin($countryOfOrigin)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
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
     * Get TransactionID value
     * @return string
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get CountryOfOrigin value
     * @return string|null
     */
    public function getCountryOfOrigin()
    {
        return $this->CountryOfOrigin;
    }
    /**
     * Set CountryOfOrigin value
     * @param string $countryOfOrigin
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
     */
    public function setCountryOfOrigin($countryOfOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($countryOfOrigin) && !is_string($countryOfOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryOfOrigin)), __LINE__);
        }
        $this->CountryOfOrigin = $countryOfOrigin;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\LineItemType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
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
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
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
