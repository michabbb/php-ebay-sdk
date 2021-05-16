<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataElementSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class DataElementSetType extends AbstractStructBase
{
    /**
     * The DataElement
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DataElement = null;
    /**
     * The DataElementID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DataElementID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The attributeSetID
     * Meta information extracted from the WSDL
     * - documentation: This attribute is deprecated.
     * @var int|null
     */
    protected ?int $attributeSetID = null;
    /**
     * Constructor method for DataElementSetType
     * @uses DataElementSetType::setDataElement()
     * @uses DataElementSetType::setDataElementID()
     * @uses DataElementSetType::setAny()
     * @uses DataElementSetType::setAttributeSetID()
     * @param string $dataElement
     * @param int $dataElementID
     * @param \DOMDocument|string|null $any
     * @param int $attributeSetID
     */
    public function __construct(?string $dataElement = null, ?int $dataElementID = null, $any = null, ?int $attributeSetID = null)
    {
        $this
            ->setDataElement($dataElement)
            ->setDataElementID($dataElementID)
            ->setAny($any)
            ->setAttributeSetID($attributeSetID);
    }
    /**
     * Get DataElement value
     * @return string|null
     */
    public function getDataElement(): ?string
    {
        return $this->DataElement;
    }
    /**
     * Set DataElement value
     * @param string $dataElement
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType
     */
    public function setDataElement(?string $dataElement = null): self
    {
        // validation for constraint: string
        if (!is_null($dataElement) && !is_string($dataElement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataElement, true), gettype($dataElement)), __LINE__);
        }
        $this->DataElement = $dataElement;
        
        return $this;
    }
    /**
     * Get DataElementID value
     * @return int|null
     */
    public function getDataElementID(): ?int
    {
        return $this->DataElementID;
    }
    /**
     * Set DataElementID value
     * @param int $dataElementID
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType
     */
    public function setDataElementID(?int $dataElementID = null): self
    {
        // validation for constraint: int
        if (!is_null($dataElementID) && !(is_int($dataElementID) || ctype_digit($dataElementID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dataElementID, true), gettype($dataElementID)), __LINE__);
        }
        $this->DataElementID = $dataElementID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType
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
    /**
     * Get attributeSetID value
     * @return int|null
     */
    public function getAttributeSetID(): ?int
    {
        return $this->attributeSetID;
    }
    /**
     * Set attributeSetID value
     * @param int $attributeSetID
     * @return \macropage\ebaysdk\trading\StructType\DataElementSetType
     */
    public function setAttributeSetID(?int $attributeSetID = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeSetID) && !(is_int($attributeSetID) || ctype_digit($attributeSetID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeSetID, true), gettype($attributeSetID)), __LINE__);
        }
        $this->attributeSetID = $attributeSetID;
        
        return $this;
    }
}
