<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevokeTokenRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Revokes a token before it would otherwise expire.
 * @subpackage Structs
 */
class RevokeTokenRequestType extends AbstractRequestType
{
    /**
     * The UnsubscribeNotification
     * Meta informations extracted from the WSDL
     * - documentation: Cancels notification subscriptions for the user/application if set to true. Default value is false.
     * - minOccurs: 0
     * @var bool
     */
    public $UnsubscribeNotification;
    /**
     * Constructor method for RevokeTokenRequestType
     * @uses RevokeTokenRequestType::setUnsubscribeNotification()
     * @param bool $unsubscribeNotification
     */
    public function __construct($unsubscribeNotification = null)
    {
        $this
            ->setUnsubscribeNotification($unsubscribeNotification);
    }
    /**
     * Get UnsubscribeNotification value
     * @return bool|null
     */
    public function getUnsubscribeNotification()
    {
        return $this->UnsubscribeNotification;
    }
    /**
     * Set UnsubscribeNotification value
     * @param bool $unsubscribeNotification
     * @return \macropage\ebaysdk\trading\StructType\RevokeTokenRequestType
     */
    public function setUnsubscribeNotification($unsubscribeNotification = null)
    {
        // validation for constraint: boolean
        if (!is_null($unsubscribeNotification) && !is_bool($unsubscribeNotification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($unsubscribeNotification)), __LINE__);
        }
        $this->UnsubscribeNotification = $unsubscribeNotification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\RevokeTokenRequestType
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
