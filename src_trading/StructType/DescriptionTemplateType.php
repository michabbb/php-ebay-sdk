<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescriptionTemplateType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type that provides detailed information on a Listing Designer Theme or Layout.
 * @subpackage Structs
 */
class DescriptionTemplateType extends AbstractStructBase
{
    /**
     * The GroupID
     * Meta information extracted from the WSDL
     * - documentation: This integer value is a unique identifier for the Listing Designer Theme group, such as Holiday/Seasonal, Special Events, or Patterns/Textures. This field is not applicable and will not be returned for a Listing Designer Layout.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $GroupID = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: This integer value is a unique identifier of the Listing Designer Theme or Layout.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ID = null;
    /**
     * The ImageURL
     * Meta information extracted from the WSDL
     * - documentation: This URL is the path to a small image providing a sample of the appearance of a Listing Designer Theme or Layout.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImageURL = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This string value is the name of the Listing Designer Theme or Layout.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The TemplateXML
     * Meta information extracted from the WSDL
     * - documentation: This string value is actually a CDATA representation of the Listing Designer template. Image-related elements in a template include <code>ThemeTop</code>, <code>ThemeUserCellTop</code>, <code>ThemeUserContent,</code>,
     * <code>ThemeUserCellBottom</code>, and <code>ThemeBottom</code>. This field is not applicable and will not be returned for a Listing Designer Layout.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TemplateXML = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the information returned under the <b>DescriptionTemplate</b> container is related to a Listing Designer Theme or Layout.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DescriptionTemplateType
     * @uses DescriptionTemplateType::setGroupID()
     * @uses DescriptionTemplateType::setID()
     * @uses DescriptionTemplateType::setImageURL()
     * @uses DescriptionTemplateType::setName()
     * @uses DescriptionTemplateType::setTemplateXML()
     * @uses DescriptionTemplateType::setType()
     * @uses DescriptionTemplateType::setAny()
     * @param int $groupID
     * @param int $iD
     * @param string $imageURL
     * @param string $name
     * @param string $templateXML
     * @param string $type
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $groupID = null, ?int $iD = null, ?string $imageURL = null, ?string $name = null, ?string $templateXML = null, ?string $type = null, $any = null)
    {
        $this
            ->setGroupID($groupID)
            ->setID($iD)
            ->setImageURL($imageURL)
            ->setName($name)
            ->setTemplateXML($templateXML)
            ->setType($type)
            ->setAny($any);
    }
    /**
     * Get GroupID value
     * @return int|null
     */
    public function getGroupID(): ?int
    {
        return $this->GroupID;
    }
    /**
     * Set GroupID value
     * @param int $groupID
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setGroupID(?int $groupID = null): self
    {
        // validation for constraint: int
        if (!is_null($groupID) && !(is_int($groupID) || ctype_digit($groupID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupID, true), gettype($groupID)), __LINE__);
        }
        $this->GroupID = $groupID;
        
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID(): ?int
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setID(?int $iD = null): self
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get ImageURL value
     * @return string|null
     */
    public function getImageURL(): ?string
    {
        return $this->ImageURL;
    }
    /**
     * Set ImageURL value
     * @param string $imageURL
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setImageURL(?string $imageURL = null): self
    {
        // validation for constraint: string
        if (!is_null($imageURL) && !is_string($imageURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageURL, true), gettype($imageURL)), __LINE__);
        }
        $this->ImageURL = $imageURL;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get TemplateXML value
     * @return string|null
     */
    public function getTemplateXML(): ?string
    {
        return $this->TemplateXML;
    }
    /**
     * Set TemplateXML value
     * @param string $templateXML
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setTemplateXML(?string $templateXML = null): self
    {
        // validation for constraint: string
        if (!is_null($templateXML) && !is_string($templateXML)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateXML, true), gettype($templateXML)), __LINE__);
        }
        $this->TemplateXML = $templateXML;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\DescriptionTemplateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DescriptionTemplateCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DescriptionTemplateCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DescriptionTemplateCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DescriptionTemplateCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
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
