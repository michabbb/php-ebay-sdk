<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtensionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reserved for future use.
 * @subpackage Structs
 */
class ExtensionType extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * @var int
     */
    public $id;
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * @var string
     */
    public $version;
    /**
     * The contentType
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * @var string
     */
    public $contentType;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * @var string
     */
    public $value;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ExtensionType
     * @uses ExtensionType::setId()
     * @uses ExtensionType::setVersion()
     * @uses ExtensionType::setContentType()
     * @uses ExtensionType::setValue()
     * @uses ExtensionType::setAny()
     * @param int $id
     * @param string $version
     * @param string $contentType
     * @param string $value
     * @param \DOMDocument $any
     */
    public function __construct($id = null, $version = null, $contentType = null, $value = null, \DOMDocument $any = null)
    {
        $this
            ->setId($id)
            ->setVersion($version)
            ->setContentType($contentType)
            ->setValue($value)
            ->setAny($any);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \macropage\ebaysdk\finding\StructType\ExtensionType
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
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
     * @return \macropage\ebaysdk\finding\StructType\ExtensionType
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
     * @return \macropage\ebaysdk\finding\StructType\ExtensionType
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
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \macropage\ebaysdk\finding\StructType\ExtensionType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\ExtensionType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\finding\StructType\ExtensionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\ExtensionType
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
