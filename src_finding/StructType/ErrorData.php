<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorData StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container for error details.
 * @subpackage Structs
 */
class ErrorData extends AbstractStructBase
{
    /**
     * The errorId
     * Meta informations extracted from the WSDL
     * - documentation: A unique code that identifies the particular error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
     * @var int
     */
    public $errorId;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - documentation: Name of the domain in which the error occurred. <dl> <dt> <strong>domain values:</strong> </dt> <dt> Marketplace </dt> <dd> A business or validation error occurred in the service. </dd> <dt> SOA </dt> <dd> An exception occurred in
     * the Service Oriented Architecture (SOA) framework. </dd> </dl>
     * @var string
     */
    public $domain;
    /**
     * The severity
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the reported problem is fatal (an error) or is less- severe (a warning). Review the error message details for information on the cause. <br><br> If the request fails and the application is the source of the error
     * (for example, a required element is missing), update the application before you retry the request. If the problem is due to incorrect user data, alert the end-user to the problem and provide the means for them to correct the data. Once the problem in
     * the application or data is resolved, re-send the request to eBay. <br><br> If the source of the problem is on eBay's side, you can retry the request a reasonable number of times (eBay recommends you try the request twice). If the error persists,
     * contact Developer Technical Support. Once the problem has been resolved, you can resend the request in its original form. <br><br> If a warning occurs, warning information is returned in addition to the business data. Normally, you do not need to
     * resend the request (as the original request was successful). However, depending on the cause of the warning, you might need to contact the end user, or eBay, to effect a long term solution to the problem.
     * @var string
     */
    public $severity;
    /**
     * The category
     * Meta informations extracted from the WSDL
     * - documentation: There are three categories of errors: request errors, application errors, and system errors.
     * @var string
     */
    public $category;
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - documentation: A detailed description of the condition that caused in the error.
     * @var string
     */
    public $message;
    /**
     * The subdomain
     * Meta informations extracted from the WSDL
     * - documentation: Name of the subdomain in which the error occurred. <dl> <dt> <strong>subdomain values:</strong> </dt> <dt> Finding </dt> <dd> The error is specific to the Finding service. </dd> <dt> MarketplaceCommon </dt> <dd> The error is common
     * to all Marketplace services. </dd> </dl>
     * - minOccurs: 0
     * @var string
     */
    public $subdomain;
    /**
     * The exceptionId
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an exception associated with an error.
     * - minOccurs: 0
     * @var string
     */
    public $exceptionId;
    /**
     * The parameter
     * Meta informations extracted from the WSDL
     * - documentation: Various warning and error messages return one or more variables that contain contextual information about the error. This is often the field or value that triggered the error.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \macropage\ebaysdk\finding\StructType\ErrorParameter[]
     */
    public $parameter;
    /**
     * Constructor method for ErrorData
     * @uses ErrorData::setErrorId()
     * @uses ErrorData::setDomain()
     * @uses ErrorData::setSeverity()
     * @uses ErrorData::setCategory()
     * @uses ErrorData::setMessage()
     * @uses ErrorData::setSubdomain()
     * @uses ErrorData::setExceptionId()
     * @uses ErrorData::setParameter()
     * @param int $errorId
     * @param string $domain
     * @param string $severity
     * @param string $category
     * @param string $message
     * @param string $subdomain
     * @param string $exceptionId
     * @param \macropage\ebaysdk\finding\StructType\ErrorParameter[] $parameter
     */
    public function __construct($errorId = null, $domain = null, $severity = null, $category = null, $message = null, $subdomain = null, $exceptionId = null, array $parameter = array())
    {
        $this
            ->setErrorId($errorId)
            ->setDomain($domain)
            ->setSeverity($severity)
            ->setCategory($category)
            ->setMessage($message)
            ->setSubdomain($subdomain)
            ->setExceptionId($exceptionId)
            ->setParameter($parameter);
    }
    /**
     * Get errorId value
     * @return int|null
     */
    public function getErrorId()
    {
        return $this->errorId;
    }
    /**
     * Set errorId value
     * @param int $errorId
     * @return \macropage\ebaysdk\finding\StructType\ErrorData
     */
    public function setErrorId($errorId = null)
    {
        // validation for constraint: int
        if (!is_null($errorId) && !is_numeric($errorId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($errorId)), __LINE__);
        }
        $this->errorId = $errorId;
        return $this;
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \macropage\ebaysdk\finding\StructType\ErrorData
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get severity value
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->severity;
    }
    /**
     * Set severity value
     * @uses \macropage\ebaysdk\finding\EnumType\ErrorSeverity::valueIsValid()
     * @uses \macropage\ebaysdk\finding\EnumType\ErrorSeverity::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $severity
     * @return \macropage\ebaysdk\finding\StructType\ErrorData
     */
    public function setSeverity($severity = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\finding\EnumType\ErrorSeverity::valueIsValid($severity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $severity, implode(', ', \macropage\ebaysdk\finding\EnumType\ErrorSeverity::getValidValues())), __LINE__);
        }
        $this->severity = $severity;
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @uses \macropage\ebaysdk\finding\EnumType\ErrorCategory::valueIsValid()
     * @uses \macropage\ebaysdk\finding\EnumType\ErrorCategory::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $category
     * @return \macropage\ebaysdk\finding\StructType\ErrorData
     */
    public function setCategory($category = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\finding\EnumType\ErrorCategory::valueIsValid($category)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $category, implode(', ', \macropage\ebaysdk\finding\EnumType\ErrorCategory::getValidValues())), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \macropage\ebaysdk\finding\StructType\ErrorData
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
    /**
     * Get subdomain value
     * @return string|null
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }
    /**
     * Set subdomain value
     * @param string $subdomain
     * @return \macropage\ebaysdk\finding\StructType\ErrorData
     */
    public function setSubdomain($subdomain = null)
    {
        // validation for constraint: string
        if (!is_null($subdomain) && !is_string($subdomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subdomain)), __LINE__);
        }
        $this->subdomain = $subdomain;
        return $this;
    }
    /**
     * Get exceptionId value
     * @return string|null
     */
    public function getExceptionId()
    {
        return $this->exceptionId;
    }
    /**
     * Set exceptionId value
     * @param string $exceptionId
     * @return \macropage\ebaysdk\finding\StructType\ErrorData
     */
    public function setExceptionId($exceptionId = null)
    {
        // validation for constraint: string
        if (!is_null($exceptionId) && !is_string($exceptionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exceptionId)), __LINE__);
        }
        $this->exceptionId = $exceptionId;
        return $this;
    }
    /**
     * Get parameter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \macropage\ebaysdk\finding\StructType\ErrorParameter[]|null
     */
    public function getParameter()
    {
        return isset($this->parameter) ? $this->parameter : null;
    }
    /**
     * Set parameter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ErrorParameter[] $parameter
     * @return \macropage\ebaysdk\finding\StructType\ErrorData
     */
    public function setParameter(array $parameter = array())
    {
        foreach ($parameter as $errorDataParameterItem) {
            // validation for constraint: itemType
            if (!$errorDataParameterItem instanceof \macropage\ebaysdk\finding\StructType\ErrorParameter) {
                throw new \InvalidArgumentException(sprintf('The parameter property can only contain items of \macropage\ebaysdk\finding\StructType\ErrorParameter, "%s" given', is_object($errorDataParameterItem) ? get_class($errorDataParameterItem) : gettype($errorDataParameterItem)), __LINE__);
            }
        }
        if (is_null($parameter) || (is_array($parameter) && empty($parameter))) {
            unset($this->parameter);
        } else {
            $this->parameter = $parameter;
        }
        return $this;
    }
    /**
     * Add item to parameter value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ErrorParameter $item
     * @return \macropage\ebaysdk\finding\StructType\ErrorData
     */
    public function addToParameter(\macropage\ebaysdk\finding\StructType\ErrorParameter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\ErrorParameter) {
            throw new \InvalidArgumentException(sprintf('The parameter property can only contain items of \macropage\ebaysdk\finding\StructType\ErrorParameter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->parameter[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\ErrorData
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
