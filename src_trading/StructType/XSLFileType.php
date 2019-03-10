<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XSLFileType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class XSLFileType extends AbstractStructBase
{
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FileName;
    /**
     * The FileVersion
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FileVersion;
    /**
     * The FileContent
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $FileContent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for XSLFileType
     * @uses XSLFileType::setFileName()
     * @uses XSLFileType::setFileVersion()
     * @uses XSLFileType::setFileContent()
     * @uses XSLFileType::setAny()
     * @param string $fileName
     * @param string $fileVersion
     * @param string $fileContent
     * @param \DOMDocument $any
     */
    public function __construct($fileName = null, $fileVersion = null, $fileContent = null, \DOMDocument $any = null)
    {
        $this
            ->setFileName($fileName)
            ->setFileVersion($fileVersion)
            ->setFileContent($fileContent)
            ->setAny($any);
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \macropage\ebaysdk\trading\StructType\XSLFileType
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get FileVersion value
     * @return string|null
     */
    public function getFileVersion()
    {
        return $this->FileVersion;
    }
    /**
     * Set FileVersion value
     * @param string $fileVersion
     * @return \macropage\ebaysdk\trading\StructType\XSLFileType
     */
    public function setFileVersion($fileVersion = null)
    {
        // validation for constraint: string
        if (!is_null($fileVersion) && !is_string($fileVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileVersion)), __LINE__);
        }
        $this->FileVersion = $fileVersion;
        return $this;
    }
    /**
     * Get FileContent value
     * @return string|null
     */
    public function getFileContent()
    {
        return $this->FileContent;
    }
    /**
     * Set FileContent value
     * @param string $fileContent
     * @return \macropage\ebaysdk\trading\StructType\XSLFileType
     */
    public function setFileContent($fileContent = null)
    {
        // validation for constraint: string
        if (!is_null($fileContent) && !is_string($fileContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileContent)), __LINE__);
        }
        $this->FileContent = $fileContent;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\XSLFileType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\XSLFileType
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
     * @return \macropage\ebaysdk\trading\StructType\XSLFileType
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
