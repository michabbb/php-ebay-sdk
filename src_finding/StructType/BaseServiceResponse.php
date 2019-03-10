<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseServiceResponse StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response container for all service operations. Contains error information associated with the request.
 * @subpackage Structs
 */
abstract class BaseServiceResponse extends AbstractStructBase
{
    /**
     * The ack
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not errors or warnings were generated during the processing of the request.
     * @var string
     */
    public $ack;
    /**
     * The errorMessage
     * Meta informations extracted from the WSDL
     * - documentation: Description of an error or warning that occurred when eBay processed the request. Not returned if the ack value is Success.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ErrorMessage
     */
    public $errorMessage;
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - documentation: The release version that eBay used to process the request. Developer Technical Support may ask you for the version value if you work with them to troubleshoot issues. <br><br> <span class="tablenote"><strong>Note:</strong> The
     * version in use is normally the latest release version, as specified in the release notes. </span> </span>
     * - minOccurs: 0
     * @var string
     */
    public $version;
    /**
     * The timestamp
     * Meta informations extracted from the WSDL
     * - documentation: This value represents the date and time when eBay processed the request. This value is returned in GMT, the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about the time format, and
     * for details on converting to and from the GMT time zone.
     * - minOccurs: 0
     * @var string
     */
    public $timestamp;
    /**
     * Constructor method for BaseServiceResponse
     * @uses BaseServiceResponse::setAck()
     * @uses BaseServiceResponse::setErrorMessage()
     * @uses BaseServiceResponse::setVersion()
     * @uses BaseServiceResponse::setTimestamp()
     * @param string $ack
     * @param \macropage\ebaysdk\finding\StructType\ErrorMessage $errorMessage
     * @param string $version
     * @param string $timestamp
     */
    public function __construct($ack = null, \macropage\ebaysdk\finding\StructType\ErrorMessage $errorMessage = null, $version = null, $timestamp = null)
    {
        $this
            ->setAck($ack)
            ->setErrorMessage($errorMessage)
            ->setVersion($version)
            ->setTimestamp($timestamp);
    }
    /**
     * Get ack value
     * @return string|null
     */
    public function getAck()
    {
        return $this->ack;
    }
    /**
     * Set ack value
     * @uses \macropage\ebaysdk\finding\EnumType\AckValue::valueIsValid()
     * @uses \macropage\ebaysdk\finding\EnumType\AckValue::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ack
     * @return \macropage\ebaysdk\finding\StructType\BaseServiceResponse
     */
    public function setAck($ack = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\finding\EnumType\AckValue::valueIsValid($ack)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ack, implode(', ', \macropage\ebaysdk\finding\EnumType\AckValue::getValidValues())), __LINE__);
        }
        $this->ack = $ack;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return \macropage\ebaysdk\finding\StructType\ErrorMessage|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param \macropage\ebaysdk\finding\StructType\ErrorMessage $errorMessage
     * @return \macropage\ebaysdk\finding\StructType\BaseServiceResponse
     */
    public function setErrorMessage(\macropage\ebaysdk\finding\StructType\ErrorMessage $errorMessage = null)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \macropage\ebaysdk\finding\StructType\BaseServiceResponse
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \macropage\ebaysdk\finding\StructType\BaseServiceResponse
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\BaseServiceResponse
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
