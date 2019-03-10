<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorMessage StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information regarding an error or warning that occurred when eBay processed the request. Not returned when the ack value is Success. Run-time errors are not reported here, but are instead reported as part of a SOAP fault.
 * @subpackage Structs
 */
class ErrorMessage extends AbstractStructBase
{
    /**
     * The error
     * Meta informations extracted from the WSDL
     * - documentation: Details about a single error.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \macropage\ebaysdk\finding\StructType\ErrorData[]
     */
    public $error;
    /**
     * Constructor method for ErrorMessage
     * @uses ErrorMessage::setError()
     * @param \macropage\ebaysdk\finding\StructType\ErrorData[] $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get error value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \macropage\ebaysdk\finding\StructType\ErrorData[]|null
     */
    public function getError()
    {
        return isset($this->error) ? $this->error : null;
    }
    /**
     * Set error value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ErrorData[] $error
     * @return \macropage\ebaysdk\finding\StructType\ErrorMessage
     */
    public function setError(array $error = array())
    {
        foreach ($error as $errorMessageErrorItem) {
            // validation for constraint: itemType
            if (!$errorMessageErrorItem instanceof \macropage\ebaysdk\finding\StructType\ErrorData) {
                throw new \InvalidArgumentException(sprintf('The error property can only contain items of \macropage\ebaysdk\finding\StructType\ErrorData, "%s" given', is_object($errorMessageErrorItem) ? get_class($errorMessageErrorItem) : gettype($errorMessageErrorItem)), __LINE__);
            }
        }
        if (is_null($error) || (is_array($error) && empty($error))) {
            unset($this->error);
        } else {
            $this->error = $error;
        }
        return $this;
    }
    /**
     * Add item to error value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\ErrorData $item
     * @return \macropage\ebaysdk\finding\StructType\ErrorMessage
     */
    public function addToError(\macropage\ebaysdk\finding\StructType\ErrorData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\ErrorData) {
            throw new \InvalidArgumentException(sprintf('The error property can only contain items of \macropage\ebaysdk\finding\StructType\ErrorData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->error[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\ErrorMessage
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
