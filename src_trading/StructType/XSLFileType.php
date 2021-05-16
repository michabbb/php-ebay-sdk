<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XSLFileType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class XSLFileType extends AbstractStructBase
{
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileName = null;
    /**
     * The FileVersion
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileVersion = null;
    /**
     * The FileContent
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FileContent = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for XSLFileType
     * @uses XSLFileType::setFileName()
     * @uses XSLFileType::setFileVersion()
     * @uses XSLFileType::setFileContent()
     * @uses XSLFileType::setAny()
     * @param string $fileName
     * @param string $fileVersion
     * @param string $fileContent
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $fileName = null, ?string $fileVersion = null, ?string $fileContent = null, $any = null)
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
    public function getFileName(): ?string
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \macropage\ebaysdk\trading\StructType\XSLFileType
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        
        return $this;
    }
    /**
     * Get FileVersion value
     * @return string|null
     */
    public function getFileVersion(): ?string
    {
        return $this->FileVersion;
    }
    /**
     * Set FileVersion value
     * @param string $fileVersion
     * @return \macropage\ebaysdk\trading\StructType\XSLFileType
     */
    public function setFileVersion(?string $fileVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($fileVersion) && !is_string($fileVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileVersion, true), gettype($fileVersion)), __LINE__);
        }
        $this->FileVersion = $fileVersion;
        
        return $this;
    }
    /**
     * Get FileContent value
     * @return string|null
     */
    public function getFileContent(): ?string
    {
        return $this->FileContent;
    }
    /**
     * Set FileContent value
     * @param string $fileContent
     * @return \macropage\ebaysdk\trading\StructType\XSLFileType
     */
    public function setFileContent(?string $fileContent = null): self
    {
        // validation for constraint: string
        if (!is_null($fileContent) && !is_string($fileContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileContent, true), gettype($fileContent)), __LINE__);
        }
        $this->FileContent = $fileContent;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\XSLFileType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
