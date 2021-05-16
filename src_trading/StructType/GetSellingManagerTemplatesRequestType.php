<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerTemplatesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves Selling Manager templates. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerTemplatesRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager Template whose data will be returned. A Selling Manager Template contains the data needed to list an item. One or more template IDs can be specified, each in its own field. You can obtain
     * a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $SaleTemplateID = [];
    /**
     * Constructor method for GetSellingManagerTemplatesRequestType
     * @uses GetSellingManagerTemplatesRequestType::setSaleTemplateID()
     * @param int[] $saleTemplateID
     */
    public function __construct(array $saleTemplateID = [])
    {
        $this
            ->setSaleTemplateID($saleTemplateID);
    }
    /**
     * Get SaleTemplateID value
     * @return int[]
     */
    public function getSaleTemplateID(): array
    {
        return $this->SaleTemplateID;
    }
    /**
     * This method is responsible for validating the values passed to the setSaleTemplateID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSaleTemplateID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSaleTemplateIDForArrayConstraintsFromSetSaleTemplateID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellingManagerTemplatesRequestTypeSaleTemplateIDItem) {
            // validation for constraint: itemType
            if (!(is_int($getSellingManagerTemplatesRequestTypeSaleTemplateIDItem) || ctype_digit($getSellingManagerTemplatesRequestTypeSaleTemplateIDItem))) {
                $invalidValues[] = is_object($getSellingManagerTemplatesRequestTypeSaleTemplateIDItem) ? get_class($getSellingManagerTemplatesRequestTypeSaleTemplateIDItem) : sprintf('%s(%s)', gettype($getSellingManagerTemplatesRequestTypeSaleTemplateIDItem), var_export($getSellingManagerTemplatesRequestTypeSaleTemplateIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SaleTemplateID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SaleTemplateID value
     * @throws InvalidArgumentException
     * @param int[] $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesRequestType
     */
    public function setSaleTemplateID(array $saleTemplateID = []): self
    {
        // validation for constraint: array
        if ('' !== ($saleTemplateIDArrayErrorMessage = self::validateSaleTemplateIDForArrayConstraintsFromSetSaleTemplateID($saleTemplateID))) {
            throw new InvalidArgumentException($saleTemplateIDArrayErrorMessage, __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        
        return $this;
    }
    /**
     * Add item to SaleTemplateID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplatesRequestType
     */
    public function addToSaleTemplateID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The SaleTemplateID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SaleTemplateID[] = $item;
        
        return $this;
    }
}
