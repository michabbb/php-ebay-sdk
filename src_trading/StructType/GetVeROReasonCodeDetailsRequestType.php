<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVeROReasonCodeDetailsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves details for VeRO reason codes and their descriptions. You can specify a reason code ID to get details for a specific reason on the site specified in the request header. If <strong>ReasonCodeID</strong> is not passed in the
 * request, all reason codes are returned. Set <strong>ReturnAllSites</strong> to <code>true</code> to retrieve reason codes for all sites. You must be a member of the Verified Rights Owner (VeRO) Program to use this call.
 * @subpackage Structs
 */
class GetVeROReasonCodeDetailsRequestType extends AbstractRequestType
{
    /**
     * The ReasonCodeID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for a reason code. If this <strong>ReasonCodeID</strong> field is passed in, only the details related to this <strong>ReasonCodeID</strong> will be returned. If no reason code is specified, all reason codes are
     * returned.
     * - minOccurs: 0
     * @var int
     */
    public $ReasonCodeID;
    /**
     * The ReturnAllSites
     * Meta informations extracted from the WSDL
     * - documentation: Set to true to retrieve reason codes for all sites. If not specified, reason codes are returned for the site specified in the request header only. If a <strong>ReasonCodeID</strong> value is specified, this parameter is ignored.
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnAllSites;
    /**
     * Constructor method for GetVeROReasonCodeDetailsRequestType
     * @uses GetVeROReasonCodeDetailsRequestType::setReasonCodeID()
     * @uses GetVeROReasonCodeDetailsRequestType::setReturnAllSites()
     * @param int $reasonCodeID
     * @param bool $returnAllSites
     */
    public function __construct($reasonCodeID = null, $returnAllSites = null)
    {
        $this
            ->setReasonCodeID($reasonCodeID)
            ->setReturnAllSites($returnAllSites);
    }
    /**
     * Get ReasonCodeID value
     * @return int|null
     */
    public function getReasonCodeID()
    {
        return $this->ReasonCodeID;
    }
    /**
     * Set ReasonCodeID value
     * @param int $reasonCodeID
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsRequestType
     */
    public function setReasonCodeID($reasonCodeID = null)
    {
        // validation for constraint: int
        if (!is_null($reasonCodeID) && !is_numeric($reasonCodeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($reasonCodeID)), __LINE__);
        }
        $this->ReasonCodeID = $reasonCodeID;
        return $this;
    }
    /**
     * Get ReturnAllSites value
     * @return bool|null
     */
    public function getReturnAllSites()
    {
        return $this->ReturnAllSites;
    }
    /**
     * Set ReturnAllSites value
     * @param bool $returnAllSites
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsRequestType
     */
    public function setReturnAllSites($returnAllSites = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnAllSites) && !is_bool($returnAllSites)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnAllSites)), __LINE__);
        }
        $this->ReturnAllSites = $returnAllSites;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetVeROReasonCodeDetailsRequestType
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
