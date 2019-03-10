<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Base64BinaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format by translating it into a radix-64 representation. The term "Base64" originates from a specific MIME content transfer encoding.
 * <br/><br/> <span class="tablenote"> <strong>Note:</strong> This type contains the name or reference ID of the binary attachment, not the attachment data. </span>
 * @subpackage Structs
 */
class Base64BinaryType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The contentType
     * Meta informations extracted from the WSDL
     * - documentation: This optional attribute allows the binary attachment to be named.
     * @var string
     */
    public $contentType;
    /**
     * Constructor method for Base64BinaryType
     * @uses Base64BinaryType::set_()
     * @uses Base64BinaryType::setContentType()
     * @param string $_
     * @param string $contentType
     */
    public function __construct($_ = null, $contentType = null)
    {
        $this
            ->set_($_)
            ->setContentType($contentType);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \macropage\ebaysdk\trading\StructType\Base64BinaryType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get contentType value
     * @return string|null
     */
    public function getContentType()
    {
        return $this->contentType;
    }
    /**
     * Set contentType value
     * @param string $contentType
     * @return \macropage\ebaysdk\trading\StructType\Base64BinaryType
     */
    public function setContentType($contentType = null)
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentType)), __LINE__);
        }
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\Base64BinaryType
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
