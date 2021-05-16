<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionalSaleDetailsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> The <b>GetPromotionalSaleDetails</b> call is being deprecated. No new features and/or fields will be added to <b>GetPromotionalSaleDetails</b>, and it will no longer be supported after May 17,
 * 2021. eBay recommends that sellers use the Marketing API, which provides all Promotions Manager and Promoted Listings capabilities. The Marketing API will continue to be improved and enhanced as more marketing features become available to sellers.
 * </span> The base request type for the <b>GetPromotionalSaleDetails</b> call. This call retrieves information about promotional sales set up by an eBay store owner. The eBay store owner has the option to retrieve all promotional sales, a specific
 * promotional sale, or promotional sales in a specific state.
 * @subpackage Structs
 */
class GetPromotionalSaleDetailsRequestType extends AbstractRequestType
{
    /**
     * The PromotionalSaleID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the promotional sale to retrieve. This field is used if the eBay store owner only wants to retrieve a specific promotional sale. Any <b>PromotionalSaleStatus</b> fields that are included will be ignored if
     * the <b>PromotionalSaleID</b> field is used. <br><br> If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PromotionalSaleID = null;
    /**
     * The PromotionalSaleStatus
     * Meta information extracted from the WSDL
     * - documentation: One or more <b>PromotionalSaleStatus</b> fields are used if the eBay store owner wants to retrieve promotional sales in a specific state, such as <code>Active</code>, <code>Scheduled</code>, or <code>Deleted</code>. A
     * <b>PromotionalSaleStatus</b> field is included for each status. See <a href="types/PromotionalSaleStatusCodeType.html">PromotionalSaleStatusCodeType</a> for a description of the status values that can be used in this field. <br><br> If neither the
     * <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $PromotionalSaleStatus = [];
    /**
     * Constructor method for GetPromotionalSaleDetailsRequestType
     * @uses GetPromotionalSaleDetailsRequestType::setPromotionalSaleID()
     * @uses GetPromotionalSaleDetailsRequestType::setPromotionalSaleStatus()
     * @param int $promotionalSaleID
     * @param string[] $promotionalSaleStatus
     */
    public function __construct(?int $promotionalSaleID = null, array $promotionalSaleStatus = [])
    {
        $this
            ->setPromotionalSaleID($promotionalSaleID)
            ->setPromotionalSaleStatus($promotionalSaleStatus);
    }
    /**
     * Get PromotionalSaleID value
     * @return int|null
     */
    public function getPromotionalSaleID(): ?int
    {
        return $this->PromotionalSaleID;
    }
    /**
     * Set PromotionalSaleID value
     * @param int $promotionalSaleID
     * @return \macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsRequestType
     */
    public function setPromotionalSaleID(?int $promotionalSaleID = null): self
    {
        // validation for constraint: int
        if (!is_null($promotionalSaleID) && !(is_int($promotionalSaleID) || ctype_digit($promotionalSaleID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($promotionalSaleID, true), gettype($promotionalSaleID)), __LINE__);
        }
        $this->PromotionalSaleID = $promotionalSaleID;
        
        return $this;
    }
    /**
     * Get PromotionalSaleStatus value
     * @return string[]
     */
    public function getPromotionalSaleStatus(): array
    {
        return $this->PromotionalSaleStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setPromotionalSaleStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotionalSaleStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotionalSaleStatusForArrayConstraintsFromSetPromotionalSaleStatus(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPromotionalSaleDetailsRequestTypePromotionalSaleStatusItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid($getPromotionalSaleDetailsRequestTypePromotionalSaleStatusItem)) {
                $invalidValues[] = is_object($getPromotionalSaleDetailsRequestTypePromotionalSaleStatusItem) ? get_class($getPromotionalSaleDetailsRequestTypePromotionalSaleStatusItem) : sprintf('%s(%s)', gettype($getPromotionalSaleDetailsRequestTypePromotionalSaleStatusItem), var_export($getPromotionalSaleDetailsRequestTypePromotionalSaleStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PromotionalSaleStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $promotionalSaleStatus
     * @return \macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsRequestType
     */
    public function setPromotionalSaleStatus(array $promotionalSaleStatus = []): self
    {
        // validation for constraint: array
        if ('' !== ($promotionalSaleStatusArrayErrorMessage = self::validatePromotionalSaleStatusForArrayConstraintsFromSetPromotionalSaleStatus($promotionalSaleStatus))) {
            throw new InvalidArgumentException($promotionalSaleStatusArrayErrorMessage, __LINE__);
        }
        $this->PromotionalSaleStatus = $promotionalSaleStatus;
        
        return $this;
    }
    /**
     * Add item to PromotionalSaleStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsRequestType
     */
    public function addToPromotionalSaleStatus(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionalSaleStatus[] = $item;
        
        return $this;
    }
}
