<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreCategoryUpdateStatusRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is used to retrieve the status of an eBay Store Category hierarchy change that was made with a <b>SetStoreCategories</b> call.
 * @subpackage Structs
 */
class GetStoreCategoryUpdateStatusRequestType extends AbstractRequestType
{
    /**
     * The TaskID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an eBay Store Category hierarchy change task. A <b>TaskID</b> value is returned in the response of a successful <b>SetStoreCategories</b> call. <br/><br/> <span class="tablenote"><b>Note: </b> Depending on
     * the breadth of changes being made to an eBay Store Category hierarchy, it is is possible that the <b>SetStoreCategories</b> call will complete the task simultaneously with the call response. A seller will know if an eBay Store Category hierarchy task
     * was completed simultaneously if the <b>TaskID</b> value is returned as <code>0</code>, and the <b>Status</b> field is returned with a value of <code>Complete</code>. If the task was not completely simultaneously, the <b>TaskID</b> value will be a
     * positive integer, and the <b>Status</b> field will show a value of <code>InProgress</code> or <code>Pending</code>. </span>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TaskID = null;
    /**
     * Constructor method for GetStoreCategoryUpdateStatusRequestType
     * @uses GetStoreCategoryUpdateStatusRequestType::setTaskID()
     * @param int $taskID
     */
    public function __construct(?int $taskID = null)
    {
        $this
            ->setTaskID($taskID);
    }
    /**
     * Get TaskID value
     * @return int|null
     */
    public function getTaskID(): ?int
    {
        return $this->TaskID;
    }
    /**
     * Set TaskID value
     * @param int $taskID
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusRequestType
     */
    public function setTaskID(?int $taskID = null): self
    {
        // validation for constraint: int
        if (!is_null($taskID) && !(is_int($taskID) || ctype_digit($taskID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taskID, true), gettype($taskID)), __LINE__);
        }
        $this->TaskID = $taskID;
        
        return $this;
    }
}
