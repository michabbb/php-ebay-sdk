<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerEmailLogResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns the log of emails not sent.
 * @subpackage Structs
 */
class GetSellingManagerEmailLogResponseType extends AbstractResponseType
{
    /**
     * The EmailLog
     * Meta informations extracted from the WSDL
     * - documentation: Email logs associated with this order.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType[]
     */
    public $EmailLog;
    /**
     * Constructor method for GetSellingManagerEmailLogResponseType
     * @uses GetSellingManagerEmailLogResponseType::setEmailLog()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType[] $emailLog
     */
    public function __construct(array $emailLog = array())
    {
        $this
            ->setEmailLog($emailLog);
    }
    /**
     * Get EmailLog value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType[]|null
     */
    public function getEmailLog()
    {
        return $this->EmailLog;
    }
    /**
     * Set EmailLog value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType[] $emailLog
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogResponseType
     */
    public function setEmailLog(array $emailLog = array())
    {
        foreach ($emailLog as $getSellingManagerEmailLogResponseTypeEmailLogItem) {
            // validation for constraint: itemType
            if (!$getSellingManagerEmailLogResponseTypeEmailLogItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType) {
                throw new \InvalidArgumentException(sprintf('The EmailLog property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType, "%s" given', is_object($getSellingManagerEmailLogResponseTypeEmailLogItem) ? get_class($getSellingManagerEmailLogResponseTypeEmailLogItem) : gettype($getSellingManagerEmailLogResponseTypeEmailLogItem)), __LINE__);
            }
        }
        $this->EmailLog = $emailLog;
        return $this;
    }
    /**
     * Add item to EmailLog value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogResponseType
     */
    public function addToEmailLog(\macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType) {
            throw new \InvalidArgumentException(sprintf('The EmailLog property can only contain items of \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmailLog[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerEmailLogResponseType
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
