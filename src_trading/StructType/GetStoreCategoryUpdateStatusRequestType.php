<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreCategoryUpdateStatusRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call is used to retrieve the status of an eBay Store Category hierarchy change that was made with a <b>SetStoreCategories</b> call.
 * @subpackage Structs
 */
class GetStoreCategoryUpdateStatusRequestType extends AbstractRequestType
{
    /**
     * The TaskID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of an eBay Store Category hierarchy change task. A <b>TaskID</b> value is returned in the response of a successful <b>SetStoreCategories</b> call. <br/><br/> <span class="tablenote"><b>Note: </b> Depending on
     * the breadth of changes being made to an eBay Store Category hierarchy, it is is possible that the <b>SetStoreCategories</b> call will complete the task simultaneously with the call response. A seller will know if an eBay Store Category hierarchy task
     * was completed simultaneously if the <b>TaskID</b> value is returned as <code>0</code>, and the <b>Status</b> field is returned with a value of <code>Complete</code>. If the task was not completely simultaneously, the <b>TaskID</b> value will be a
     * positive integer, and the <b>Status</b> field will show a value of <code>InProgress</code> or <code>Pending</code>. </span>
     * - minOccurs: 0
     * @var int
     */
    public $TaskID;
    /**
     * Constructor method for GetStoreCategoryUpdateStatusRequestType
     * @uses GetStoreCategoryUpdateStatusRequestType::setTaskID()
     * @param int $taskID
     */
    public function __construct($taskID = null)
    {
        $this
            ->setTaskID($taskID);
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
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusRequestType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusRequestType
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
