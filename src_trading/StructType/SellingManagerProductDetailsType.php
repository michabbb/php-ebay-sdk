<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returned if the user is a Selling Manager user. Defines product information for Selling Manager users.
 * @subpackage Structs
 */
class SellingManagerProductDetailsType extends AbstractStructBase
{
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - documentation: The name of a Selling Manager product. The AddSellingManagerProduct call is used to create a Selling Manager product.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProductName = null;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: The ID of a Selling Manager product. When you call AddSellingManagerProduct, a product ID is returned for the product created. When you use this ID to make subsequent calls, such as AddSellingManagerTemplate, the ProductID you
     * provide on input is returned in the output.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ProductID = null;
    /**
     * The CustomLabel
     * Meta information extracted from the WSDL
     * - documentation: Custom label of this product.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomLabel = null;
    /**
     * The QuantityAvailable
     * Meta information extracted from the WSDL
     * - documentation: Quantity of items in the seller's inventory for this product.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantityAvailable = null;
    /**
     * The UnitCost
     * Meta information extracted from the WSDL
     * - documentation: Cost of each item of this product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $UnitCost = null;
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: ID of the inventory folder that contains the product. Value is initially returned in the AddSellingManagerInventoryFolder response.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderID = null;
    /**
     * The RestockAlert
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether a restock alert is triggered for the product or not.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $RestockAlert = null;
    /**
     * The RestockThreshold
     * Meta information extracted from the WSDL
     * - documentation: Specifies the quantity at which a restock alert should be triggered.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RestockThreshold = null;
    /**
     * The VendorInfo
     * Meta information extracted from the WSDL
     * - documentation: Primary vendor information. Vendor information is returned only if it has been set.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType $VendorInfo = null;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: Seller's note about this product.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Note = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingManagerProductDetailsType
     * @uses SellingManagerProductDetailsType::setProductName()
     * @uses SellingManagerProductDetailsType::setProductID()
     * @uses SellingManagerProductDetailsType::setCustomLabel()
     * @uses SellingManagerProductDetailsType::setQuantityAvailable()
     * @uses SellingManagerProductDetailsType::setUnitCost()
     * @uses SellingManagerProductDetailsType::setFolderID()
     * @uses SellingManagerProductDetailsType::setRestockAlert()
     * @uses SellingManagerProductDetailsType::setRestockThreshold()
     * @uses SellingManagerProductDetailsType::setVendorInfo()
     * @uses SellingManagerProductDetailsType::setNote()
     * @uses SellingManagerProductDetailsType::setAny()
     * @param string $productName
     * @param int $productID
     * @param string $customLabel
     * @param int $quantityAvailable
     * @param \macropage\ebaysdk\trading\StructType\AmountType $unitCost
     * @param int $folderID
     * @param bool $restockAlert
     * @param int $restockThreshold
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType $vendorInfo
     * @param string $note
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $productName = null, ?int $productID = null, ?string $customLabel = null, ?int $quantityAvailable = null, ?\macropage\ebaysdk\trading\StructType\AmountType $unitCost = null, ?int $folderID = null, ?bool $restockAlert = null, ?int $restockThreshold = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType $vendorInfo = null, ?string $note = null, $any = null)
    {
        $this
            ->setProductName($productName)
            ->setProductID($productID)
            ->setCustomLabel($customLabel)
            ->setQuantityAvailable($quantityAvailable)
            ->setUnitCost($unitCost)
            ->setFolderID($folderID)
            ->setRestockAlert($restockAlert)
            ->setRestockThreshold($restockThreshold)
            ->setVendorInfo($vendorInfo)
            ->setNote($note)
            ->setAny($any);
    }
    /**
     * Get ProductName value
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->ProductName;
    }
    /**
     * Set ProductName value
     * @param string $productName
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setProductName(?string $productName = null): self
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
        }
        $this->ProductName = $productName;
        
        return $this;
    }
    /**
     * Get ProductID value
     * @return int|null
     */
    public function getProductID(): ?int
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param int $productID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setProductID(?int $productID = null): self
    {
        // validation for constraint: int
        if (!is_null($productID) && !(is_int($productID) || ctype_digit($productID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        
        return $this;
    }
    /**
     * Get CustomLabel value
     * @return string|null
     */
    public function getCustomLabel(): ?string
    {
        return $this->CustomLabel;
    }
    /**
     * Set CustomLabel value
     * @param string $customLabel
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setCustomLabel(?string $customLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($customLabel) && !is_string($customLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customLabel, true), gettype($customLabel)), __LINE__);
        }
        $this->CustomLabel = $customLabel;
        
        return $this;
    }
    /**
     * Get QuantityAvailable value
     * @return int|null
     */
    public function getQuantityAvailable(): ?int
    {
        return $this->QuantityAvailable;
    }
    /**
     * Set QuantityAvailable value
     * @param int $quantityAvailable
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setQuantityAvailable(?int $quantityAvailable = null): self
    {
        // validation for constraint: int
        if (!is_null($quantityAvailable) && !(is_int($quantityAvailable) || ctype_digit($quantityAvailable))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityAvailable, true), gettype($quantityAvailable)), __LINE__);
        }
        $this->QuantityAvailable = $quantityAvailable;
        
        return $this;
    }
    /**
     * Get UnitCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getUnitCost(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->UnitCost;
    }
    /**
     * Set UnitCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $unitCost
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setUnitCost(?\macropage\ebaysdk\trading\StructType\AmountType $unitCost = null): self
    {
        $this->UnitCost = $unitCost;
        
        return $this;
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID(): ?int
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setFolderID(?int $folderID = null): self
    {
        // validation for constraint: int
        if (!is_null($folderID) && !(is_int($folderID) || ctype_digit($folderID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderID, true), gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
        
        return $this;
    }
    /**
     * Get RestockAlert value
     * @return bool|null
     */
    public function getRestockAlert(): ?bool
    {
        return $this->RestockAlert;
    }
    /**
     * Set RestockAlert value
     * @param bool $restockAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setRestockAlert(?bool $restockAlert = null): self
    {
        // validation for constraint: boolean
        if (!is_null($restockAlert) && !is_bool($restockAlert)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restockAlert, true), gettype($restockAlert)), __LINE__);
        }
        $this->RestockAlert = $restockAlert;
        
        return $this;
    }
    /**
     * Get RestockThreshold value
     * @return int|null
     */
    public function getRestockThreshold(): ?int
    {
        return $this->RestockThreshold;
    }
    /**
     * Set RestockThreshold value
     * @param int $restockThreshold
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setRestockThreshold(?int $restockThreshold = null): self
    {
        // validation for constraint: int
        if (!is_null($restockThreshold) && !(is_int($restockThreshold) || ctype_digit($restockThreshold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($restockThreshold, true), gettype($restockThreshold)), __LINE__);
        }
        $this->RestockThreshold = $restockThreshold;
        
        return $this;
    }
    /**
     * Get VendorInfo value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType|null
     */
    public function getVendorInfo(): ?\macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType
    {
        return $this->VendorInfo;
    }
    /**
     * Set VendorInfo value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType $vendorInfo
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setVendorInfo(?\macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType $vendorInfo = null): self
    {
        $this->VendorInfo = $vendorInfo;
        
        return $this;
    }
    /**
     * Get Note value
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->Note;
    }
    /**
     * Set Note value
     * @param string $note
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public function setNote(?string $note = null): self
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->Note = $note;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
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
