<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameValueRelationshipType StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about a parent name-value pair that indicates the relationships between Item Specifics.
 * @subpackage Structs
 */
class NameValueRelationshipType extends AbstractStructBase
{
    /**
     * The ParentName
     * Meta information extracted from the WSDL
     * - documentation: The name of another Item Specific that the current value depends on. For example, in a clothing category, "Size Type" could be recommended as a parent of Size.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ParentName = null;
    /**
     * The ParentValue
     * Meta information extracted from the WSDL
     * - documentation: The value of another Item Specific that the current value depends on. For example, in a clothing category, if "Size Type" is the <b>ParentName</b>, then "Petite" could be recommended as a parent value for <b>Size</b> =
     * <code>Medium</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ParentValue = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for NameValueRelationshipType
     * @uses NameValueRelationshipType::setParentName()
     * @uses NameValueRelationshipType::setParentValue()
     * @uses NameValueRelationshipType::setAny()
     * @param string $parentName
     * @param string $parentValue
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $parentName = null, ?string $parentValue = null, $any = null)
    {
        $this
            ->setParentName($parentName)
            ->setParentValue($parentValue)
            ->setAny($any);
    }
    /**
     * Get ParentName value
     * @return string|null
     */
    public function getParentName(): ?string
    {
        return $this->ParentName;
    }
    /**
     * Set ParentName value
     * @param string $parentName
     * @return \macropage\ebaysdk\trading\StructType\NameValueRelationshipType
     */
    public function setParentName(?string $parentName = null): self
    {
        // validation for constraint: string
        if (!is_null($parentName) && !is_string($parentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentName, true), gettype($parentName)), __LINE__);
        }
        $this->ParentName = $parentName;
        
        return $this;
    }
    /**
     * Get ParentValue value
     * @return string|null
     */
    public function getParentValue(): ?string
    {
        return $this->ParentValue;
    }
    /**
     * Set ParentValue value
     * @param string $parentValue
     * @return \macropage\ebaysdk\trading\StructType\NameValueRelationshipType
     */
    public function setParentValue(?string $parentValue = null): self
    {
        // validation for constraint: string
        if (!is_null($parentValue) && !is_string($parentValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentValue, true), gettype($parentValue)), __LINE__);
        }
        $this->ParentValue = $parentValue;
        
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
     * @return \macropage\ebaysdk\trading\StructType\NameValueRelationshipType
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
