<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmIdentityRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns the ID of a user who has gone through an application's consent flow process for obtaining an authorization token.
 * @subpackage Structs
 */
class ConfirmIdentityRequestType extends AbstractRequestType
{
    /**
     * The SessionID
     * Meta informations extracted from the WSDL
     * - documentation: A string obtained by making a <b>GetSessionID</b> call, passed in redirect URL to the eBay signin page.
     * - minOccurs: 0
     * @var string
     */
    public $SessionID;
    /**
     * Constructor method for ConfirmIdentityRequestType
     * @uses ConfirmIdentityRequestType::setSessionID()
     * @param string $sessionID
     */
    public function __construct($sessionID = null)
    {
        $this
            ->setSessionID($sessionID);
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \macropage\ebaysdk\trading\StructType\ConfirmIdentityRequestType
     */
    public function setSessionID($sessionID = null)
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ConfirmIdentityRequestType
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
