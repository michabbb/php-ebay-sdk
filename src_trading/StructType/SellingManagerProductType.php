<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes a Selling Manager Product
 * @subpackage Structs
 */
class SellingManagerProductType extends AbstractStructBase
{
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: Container for information about the product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $SellingManagerProductDetails = null;
    /**
     * The SellingManagerTemplateDetailsArray
     * Meta information extracted from the WSDL
     * - documentation: Contains the list of the seller's templates contained in the product, one SellingManagerTemplateType object per template.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $SellingManagerTemplateDetailsArray = null;
    /**
     * The SellingManagerProductInventoryStatus
     * Meta information extracted from the WSDL
     * - documentation: Container for statistics about the product.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $SellingManagerProductInventoryStatus = null;
    /**
     * The SellingManagerProductSpecifics
     * Meta information extracted from the WSDL
     * - documentation: Specifies an eBay category associated with the product, defines Item Specifics that are relevant to the product, and defines variations available for the product (which may be used to create multivariation listings).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $SellingManagerProductSpecifics = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingManagerProductType
     * @uses SellingManagerProductType::setSellingManagerProductDetails()
     * @uses SellingManagerProductType::setSellingManagerTemplateDetailsArray()
     * @uses SellingManagerProductType::setSellingManagerProductInventoryStatus()
     * @uses SellingManagerProductType::setSellingManagerProductSpecifics()
     * @uses SellingManagerProductType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, ?\macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null, $any = null)
    {
        $this
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setSellingManagerTemplateDetailsArray($sellingManagerTemplateDetailsArray)
            ->setSellingManagerProductInventoryStatus($sellingManagerProductInventoryStatus)
            ->setSellingManagerProductSpecifics($sellingManagerProductSpecifics)
            ->setAny($any);
    }
    /**
     * Get SellingManagerProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails(): ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
     */
    public function setSellingManagerProductDetails(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null): self
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        
        return $this;
    }
    /**
     * Get SellingManagerTemplateDetailsArray value
     * @return \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType|null
     */
    public function getSellingManagerTemplateDetailsArray(): ?\macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType
    {
        return $this->SellingManagerTemplateDetailsArray;
    }
    /**
     * Set SellingManagerTemplateDetailsArray value
     * @param \macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
     */
    public function setSellingManagerTemplateDetailsArray(?\macropage\ebaysdk\trading\ArrayType\SellingManagerTemplateDetailsArrayType $sellingManagerTemplateDetailsArray = null): self
    {
        $this->SellingManagerTemplateDetailsArray = $sellingManagerTemplateDetailsArray;
        
        return $this;
    }
    /**
     * Get SellingManagerProductInventoryStatus value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType|null
     */
    public function getSellingManagerProductInventoryStatus(): ?\macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType
    {
        return $this->SellingManagerProductInventoryStatus;
    }
    /**
     * Set SellingManagerProductInventoryStatus value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
     */
    public function setSellingManagerProductInventoryStatus(?\macropage\ebaysdk\trading\StructType\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus = null): self
    {
        $this->SellingManagerProductInventoryStatus = $sellingManagerProductInventoryStatus;
        
        return $this;
    }
    /**
     * Get SellingManagerProductSpecifics value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType|null
     */
    public function getSellingManagerProductSpecifics(): ?\macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType
    {
        return $this->SellingManagerProductSpecifics;
    }
    /**
     * Set SellingManagerProductSpecifics value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
     */
    public function setSellingManagerProductSpecifics(?\macropage\ebaysdk\trading\StructType\SellingManagerProductSpecificsType $sellingManagerProductSpecifics = null): self
    {
        $this->SellingManagerProductSpecifics = $sellingManagerProductSpecifics;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType
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
