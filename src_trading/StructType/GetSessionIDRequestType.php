<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSessionIDRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves a session ID that identifies a user and your application when you make a <b>FetchToken</b> request.
 * @subpackage Structs
 */
class GetSessionIDRequestType extends AbstractRequestType
{
    /**
     * The RuName
     * Meta informations extracted from the WSDL
     * - documentation: The eBay Registered URL must be specified in this field. An eBay Registered URL is created and associated with a developer's Sandbox or Production key set by logging into the user's developer account on <b>developer.ebay.com</b> and
     * going to the <b>User Tokens</b> page. The <b>RuName</b> value passed in this field must match the one specified for the specific Sandbox or Production key set being used to make the <b>GetSessionID</b> call. For more information on adding and
     * registering your <b class="con">RuName</b>, see the <a href="../../HowTo/Tokens/GettingTokens.html#step1">Setting Up an Application to Receive Tokens</a> tutorial.
     * - minOccurs: 0
     * @var string
     */
    public $RuName;
    /**
     * Constructor method for GetSessionIDRequestType
     * @uses GetSessionIDRequestType::setRuName()
     * @param string $ruName
     */
    public function __construct($ruName = null)
    {
        $this
            ->setRuName($ruName);
    }
    /**
     * Get RuName value
     * @return string|null
     */
    public function getRuName()
    {
        return $this->RuName;
    }
    /**
     * Set RuName value
     * @param string $ruName
     * @return \macropage\ebaysdk\trading\StructType\GetSessionIDRequestType
     */
    public function setRuName($ruName = null)
    {
        // validation for constraint: string
        if (!is_null($ruName) && !is_string($ruName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruName)), __LINE__);
        }
        $this->RuName = $ruName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSessionIDRequestType
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
