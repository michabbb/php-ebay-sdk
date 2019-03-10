<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMyMessagesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Removes selected messages for a given user.
 * @subpackage Structs
 */
class DeleteMyMessagesRequestType extends AbstractRequestType
{
    /**
     * The AlertIDs
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType
     */
    public $AlertIDs;
    /**
     * The MessageIDs
     * Meta informations extracted from the WSDL
     * - documentation: Contains a list of up to 10 <b>MessageID</b> values.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType
     */
    public $MessageIDs;
    /**
     * Constructor method for DeleteMyMessagesRequestType
     * @uses DeleteMyMessagesRequestType::setAlertIDs()
     * @uses DeleteMyMessagesRequestType::setMessageIDs()
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null, \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null)
    {
        $this
            ->setAlertIDs($alertIDs)
            ->setMessageIDs($messageIDs);
    }
    /**
     * Get AlertIDs value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType|null
     */
    public function getAlertIDs()
    {
        return $this->AlertIDs;
    }
    /**
     * Set AlertIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs
     * @return \macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType
     */
    public function setAlertIDs(\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null)
    {
        $this->AlertIDs = $alertIDs;
        return $this;
    }
    /**
     * Get MessageIDs value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType|null
     */
    public function getMessageIDs()
    {
        return $this->MessageIDs;
    }
    /**
     * Set MessageIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs
     * @return \macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType
     */
    public function setMessageIDs(\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null)
    {
        $this->MessageIDs = $messageIDs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType
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
