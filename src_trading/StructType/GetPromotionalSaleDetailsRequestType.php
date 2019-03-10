<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionalSaleDetailsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base request type for the <b>GetPromotionalSaleDetails</b> call. This call retrieves information about promotional sales set up by an eBay store owner. The eBay store owner has the option to retrieve all promotional sales, a
 * specific promotional sale, or promotional sales in a specific state.
 * @subpackage Structs
 */
class GetPromotionalSaleDetailsRequestType extends AbstractRequestType
{
    /**
     * The PromotionalSaleID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the promotional sale to retrieve. This field is used if the eBay store owner only wants to retrieve a specific promotional sale. Any <b>PromotionalSaleStatus</b> fields that are included will be ignored if
     * the <b>PromotionalSaleID</b> field is used. <br><br> If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     * - minOccurs: 0
     * @var int
     */
    public $PromotionalSaleID;
    /**
     * The PromotionalSaleStatus
     * Meta informations extracted from the WSDL
     * - documentation: One or more <b>PromotionalSaleStatus</b> fields are used if the eBay store owner wants to retrieve promotional sales in a specific state, such as <code>Active</code>, <code>Scheduled</code>, or <code>Deleted</code>. A
     * <b>PromotionalSaleStatus</b> field is included for each status. See <a href="types/PromotionalSaleStatusCodeType.html">PromotionalSaleStatusCodeType</a> for a description of the status values that can be used in this field. <br><br> If neither the
     * <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PromotionalSaleStatus;
    /**
     * Constructor method for GetPromotionalSaleDetailsRequestType
     * @uses GetPromotionalSaleDetailsRequestType::setPromotionalSaleID()
     * @uses GetPromotionalSaleDetailsRequestType::setPromotionalSaleStatus()
     * @param int $promotionalSaleID
     * @param string[] $promotionalSaleStatus
     */
    public function __construct($promotionalSaleID = null, array $promotionalSaleStatus = array())
    {
        $this
            ->setPromotionalSaleID($promotionalSaleID)
            ->setPromotionalSaleStatus($promotionalSaleStatus);
    }
    /**
     * Get PromotionalSaleID value
     * @return int|null
     */
    public function getPromotionalSaleID()
    {
        return $this->PromotionalSaleID;
    }
    /**
     * Set PromotionalSaleID value
     * @param int $promotionalSaleID
     * @return \macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsRequestType
     */
    public function setPromotionalSaleID($promotionalSaleID = null)
    {
        // validation for constraint: int
        if (!is_null($promotionalSaleID) && !is_numeric($promotionalSaleID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($promotionalSaleID)), __LINE__);
        }
        $this->PromotionalSaleID = $promotionalSaleID;
        return $this;
    }
    /**
     * Get PromotionalSaleStatus value
     * @return string[]|null
     */
    public function getPromotionalSaleStatus()
    {
        return $this->PromotionalSaleStatus;
    }
    /**
     * Set PromotionalSaleStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $promotionalSaleStatus
     * @return \macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsRequestType
     */
    public function setPromotionalSaleStatus(array $promotionalSaleStatus = array())
    {
        $invalidValues = array();
        foreach ($promotionalSaleStatus as $getPromotionalSaleDetailsRequestTypePromotionalSaleStatusItem) {
            if (!\macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid($getPromotionalSaleDetailsRequestTypePromotionalSaleStatusItem)) {
                $invalidValues[] = var_export($getPromotionalSaleDetailsRequestTypePromotionalSaleStatusItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionalSaleStatus = $promotionalSaleStatus;
        return $this;
    }
    /**
     * Add item to PromotionalSaleStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsRequestType
     */
    public function addToPromotionalSaleStatus($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionalSaleStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionalSaleStatus[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetPromotionalSaleDetailsRequestType
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
