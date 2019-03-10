<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreCategoriesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response of the <b>SetStoreCategories</b> call. Returns the status of the eBay Store category changes.
 * @subpackage Structs
 */
class SetStoreCategoriesResponseType extends AbstractResponseType
{
    /**
     * The TaskID
     * Meta informations extracted from the WSDL
     * - documentation: The task ID associated with the category structure change request. For a simple change, the <b>SetStoreCategories</b> call is processed synchronously. That is, simple changes are made immediately and then the response is returned.
     * For synchronous processing, the task ID in the response is 0. If the category structure changes affect many listings, the changes will be processed asynchronously and the task ID will be a positive number. Use the non-zero task ID with
     * <b>GetStoreCategoryUpdateStatus</b> to monitor the status of asynchronously processed changes.
     * - minOccurs: 0
     * @var int
     */
    public $TaskID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: When an eBay Store category structure change is processed synchronously, the status is returned as 'Complete' or 'Failed'. For asynchronously processed changes, the status is reported as 'InProgress' or 'Pending'. Use
     * <b>GetStoreCategoryUpdateStatus</b> to monitor the status of asynchronously processed changes.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The CustomCategory
     * Meta informations extracted from the WSDL
     * - documentation: Contains hierarchy data for eBay Store categories that you have created/modified.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
     */
    public $CustomCategory;
    /**
     * Constructor method for SetStoreCategoriesResponseType
     * @uses SetStoreCategoriesResponseType::setTaskID()
     * @uses SetStoreCategoriesResponseType::setStatus()
     * @uses SetStoreCategoriesResponseType::setCustomCategory()
     * @param int $taskID
     * @param string $status
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategory
     */
    public function __construct($taskID = null, $status = null, \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategory = null)
    {
        $this
            ->setTaskID($taskID)
            ->setStatus($status)
            ->setCustomCategory($customCategory);
    }
    /**
     * Get TaskID value
     * @return int|null
     */
    public function getTaskID()
    {
        return $this->TaskID;
    }
    /**
     * Set TaskID value
     * @param int $taskID
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesResponseType
     */
    public function setTaskID($taskID = null)
    {
        // validation for constraint: int
        if (!is_null($taskID) && !is_numeric($taskID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($taskID)), __LINE__);
        }
        $this->TaskID = $taskID;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\TaskStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TaskStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesResponseType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TaskStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\TaskStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get CustomCategory value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType|null
     */
    public function getCustomCategory()
    {
        return $this->CustomCategory;
    }
    /**
     * Set CustomCategory value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategory
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesResponseType
     */
    public function setCustomCategory(\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategory = null)
    {
        $this->CustomCategory = $customCategory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCategoriesResponseType
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
