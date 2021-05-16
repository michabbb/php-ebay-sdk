<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LineItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type provides information about one order line item in a Global Shipping package. The package can contain multiple units of a given order line item.
 * @subpackage Structs
 */
class LineItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the eBay listing associated with the order line item. A multiple-quantity listing can have multiple order line items, but only one <b>ItemID</b> value. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is
     * specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 1
     * @var string
     */
    protected string $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item (transaction). The <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b> node included in the request. Optionally, an <b>OrderLineItemID</b> value
     * can substitute for the <b>ItemID</b>/<b>TransactionID</b> pair. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     * - minOccurs: 1
     * @var string
     */
    protected string $TransactionID;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: The number of units of the order line item in this package; this is required for customs. The seller must ensure that this matches the quantity of the order line item enclosed in the package. <br/><br/> This value must be a positive
     * integer, and it can't be greater than the quantity of this item specified in the original transaction.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The CountryOfOrigin
     * Meta information extracted from the WSDL
     * - documentation: The Country of Manufacture for the order line item; this is required for customs. This should identify the country in which more than 50% of the value of the item was created. <br/><br/> This value must conform to the ISO 3166
     * two-letter country code standard. To see the list of currently supported codes, and the English names associated with each code (e.g., KY="Cayman Islands"), call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>CountryDetails</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CountryOfOrigin = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The item description of the order line item, based on its <strong>ItemID</strong>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(string $itemID, string $transactionID, ?int $quantity = null, ?string $countryOfOrigin = null, ?string $description = null, $any = null)
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
    public function getItemID(): string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
     */
    public function setItemID(string $itemID): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string
     */
    public function getTransactionID(): string
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
     */
    public function setTransactionID(string $transactionID): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get CountryOfOrigin value
     * @return string|null
     */
    public function getCountryOfOrigin(): ?string
    {
        return $this->CountryOfOrigin;
    }
    /**
     * Set CountryOfOrigin value
     * @param string $countryOfOrigin
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
     */
    public function setCountryOfOrigin(?string $countryOfOrigin = null): self
    {
        // validation for constraint: string
        if (!is_null($countryOfOrigin) && !is_string($countryOfOrigin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryOfOrigin, true), gettype($countryOfOrigin)), __LINE__);
        }
        $this->CountryOfOrigin = $countryOfOrigin;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
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
     * @return \macropage\ebaysdk\trading\StructType\LineItemType
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
