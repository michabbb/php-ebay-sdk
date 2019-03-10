<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSessionIDResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of the <b>GetSessionID</b> call. This response will include the generated <b>SessionID</b> value, which is a unique identifier for authenticating data entry during the process that creates a user token.
 * @subpackage Structs
 */
class GetSessionIDResponseType extends AbstractResponseType
{
    /**
     * The SessionID
     * Meta informations extracted from the WSDL
     * - documentation: A 40-character identifier supplied by eBay to an application. Used to confirm the identities of the user and the application in a URL redirect during the process in which the user agrees to let the application wield a user token that
     * grants the application the right to access eBay data on behalf of the user. Subsequently also used as input for the <b>FetchToken</b> API call. The <b>SessionID</b> value is valid for five minutes after it is retrieved.
     * - minOccurs: 0
     * @var string
     */
    public $SessionID;
    /**
     * Constructor method for GetSessionIDResponseType
     * @uses GetSessionIDResponseType::setSessionID()
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
     * @return \macropage\ebaysdk\trading\StructType\GetSessionIDResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSessionIDResponseType
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
