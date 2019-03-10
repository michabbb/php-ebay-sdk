<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateChallengeInputResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response of the <b>ValidateChallengeInput</b> call. The response indicates whether the botblock challenge was successful.
 * @subpackage Structs
 */
class ValidateChallengeInputResponseType extends AbstractResponseType
{
    /**
     * The ValidToken
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the token is valid.
     * - minOccurs: 0
     * @var bool
     */
    public $ValidToken;
    /**
     * Constructor method for ValidateChallengeInputResponseType
     * @uses ValidateChallengeInputResponseType::setValidToken()
     * @param bool $validToken
     */
    public function __construct($validToken = null)
    {
        $this
            ->setValidToken($validToken);
    }
    /**
     * Get ValidToken value
     * @return bool|null
     */
    public function getValidToken()
    {
        return $this->ValidToken;
    }
    /**
     * Set ValidToken value
     * @param bool $validToken
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputResponseType
     */
    public function setValidToken($validToken = null)
    {
        // validation for constraint: boolean
        if (!is_null($validToken) && !is_bool($validToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($validToken)), __LINE__);
        }
        $this->ValidToken = $validToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputResponseType
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
