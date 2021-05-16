<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerInventoryResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a list of the products created by the seller. The list of products is returned as a set of tags, in which are returned zero, one, or multiple SellingManagerProductType objects. Each SellingManagerProductType object contains
 * the information about for one Selling Manager product and any Selling Manager templates the product contains.
 * @subpackage Structs
 */
class GetSellingManagerInventoryResponseType extends AbstractResponseType
{
    /**
     * The InventoryCountLastCalculatedDate
     * Meta information extracted from the WSDL
     * - documentation: Returns the date the inventory counts were last calculated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InventoryCountLastCalculatedDate = null;
    /**
     * The SellingManagerProduct
     * Meta information extracted from the WSDL
     * - documentation: Container for information about the requested products and templates.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductType[]
     */
    protected array $SellingManagerProduct = [];
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Contains the total number of pages (TotalNumberOfPages) and the total number of products entries (TotalNumberOfEntries) that can be returned on repeated calls with the same format and report criteria.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationResultType $PaginationResult = null;
    /**
     * Constructor method for GetSellingManagerInventoryResponseType
     * @uses GetSellingManagerInventoryResponseType::setInventoryCountLastCalculatedDate()
     * @uses GetSellingManagerInventoryResponseType::setSellingManagerProduct()
     * @uses GetSellingManagerInventoryResponseType::setPaginationResult()
     * @param string $inventoryCountLastCalculatedDate
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductType[] $sellingManagerProduct
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     */
    public function __construct(?string $inventoryCountLastCalculatedDate = null, array $sellingManagerProduct = [], ?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setInventoryCountLastCalculatedDate($inventoryCountLastCalculatedDate)
            ->setSellingManagerProduct($sellingManagerProduct)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get InventoryCountLastCalculatedDate value
     * @return string|null
     */
    public function getInventoryCountLastCalculatedDate(): ?string
    {
        return $this->InventoryCountLastCalculatedDate;
    }
    /**
     * Set InventoryCountLastCalculatedDate value
     * @param string $inventoryCountLastCalculatedDate
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType
     */
    public function setInventoryCountLastCalculatedDate(?string $inventoryCountLastCalculatedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($inventoryCountLastCalculatedDate) && !is_string($inventoryCountLastCalculatedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventoryCountLastCalculatedDate, true), gettype($inventoryCountLastCalculatedDate)), __LINE__);
        }
        $this->InventoryCountLastCalculatedDate = $inventoryCountLastCalculatedDate;
        
        return $this;
    }
    /**
     * Get SellingManagerProduct value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductType[]
     */
    public function getSellingManagerProduct(): array
    {
        return $this->SellingManagerProduct;
    }
    /**
     * This method is responsible for validating the values passed to the setSellingManagerProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellingManagerProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellingManagerProductForArrayConstraintsFromSetSellingManagerProduct(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellingManagerInventoryResponseTypeSellingManagerProductItem) {
            // validation for constraint: itemType
            if (!$getSellingManagerInventoryResponseTypeSellingManagerProductItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerProductType) {
                $invalidValues[] = is_object($getSellingManagerInventoryResponseTypeSellingManagerProductItem) ? get_class($getSellingManagerInventoryResponseTypeSellingManagerProductItem) : sprintf('%s(%s)', gettype($getSellingManagerInventoryResponseTypeSellingManagerProductItem), var_export($getSellingManagerInventoryResponseTypeSellingManagerProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellingManagerProduct property can only contain items of type \macropage\ebaysdk\trading\StructType\SellingManagerProductType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellingManagerProduct value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductType[] $sellingManagerProduct
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType
     */
    public function setSellingManagerProduct(array $sellingManagerProduct = []): self
    {
        // validation for constraint: array
        if ('' !== ($sellingManagerProductArrayErrorMessage = self::validateSellingManagerProductForArrayConstraintsFromSetSellingManagerProduct($sellingManagerProduct))) {
            throw new InvalidArgumentException($sellingManagerProductArrayErrorMessage, __LINE__);
        }
        $this->SellingManagerProduct = $sellingManagerProduct;
        
        return $this;
    }
    /**
     * Add item to SellingManagerProduct value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductType $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType
     */
    public function addToSellingManagerProduct(\macropage\ebaysdk\trading\StructType\SellingManagerProductType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerProductType) {
            throw new InvalidArgumentException(sprintf('The SellingManagerProduct property can only contain items of type \macropage\ebaysdk\trading\StructType\SellingManagerProductType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellingManagerProduct[] = $item;
        
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult(): ?\macropage\ebaysdk\trading\StructType\PaginationResultType
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerInventoryResponseType
     */
    public function setPaginationResult(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null): self
    {
        $this->PaginationResult = $paginationResult;
        
        return $this;
    }
}
