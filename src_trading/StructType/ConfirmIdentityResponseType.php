<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmIdentityResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Confirms the identity of the user by returning the <b>UserID</b> and the <b>EIASToken</b> belonging to the user.
 * @subpackage Structs
 */
class ConfirmIdentityResponseType extends AbstractResponseType
{
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - documentation: Unique eBay user ID for the user.
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * Constructor method for ConfirmIdentityResponseType
     * @uses ConfirmIdentityResponseType::setUserID()
     * @param string $userID
     */
    public function __construct($userID = null)
    {
        $this
            ->setUserID($userID);
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\ConfirmIdentityResponseType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ConfirmIdentityResponseType
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
