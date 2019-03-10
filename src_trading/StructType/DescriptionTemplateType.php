<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescriptionTemplateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type that provides detailed information on a Listing Designer Theme or Layout.
 * @subpackage Structs
 */
class DescriptionTemplateType extends AbstractStructBase
{
    /**
     * The GroupID
     * Meta informations extracted from the WSDL
     * - documentation: This integer value is a unique identifier for the Listing Designer Theme group, such as Holiday/Seasonal, Special Events, or Patterns/Textures. This field is not applicable and will not be returned for a Listing Designer Layout.
     * - minOccurs: 0
     * @var int
     */
    public $GroupID;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: This integer value is a unique identifier of the Listing Designer Theme or Layout.
     * - minOccurs: 0
     * @var int
     */
    public $ID;
    /**
     * The ImageURL
     * Meta informations extracted from the WSDL
     * - documentation: This URL is the path to a small image providing a sample of the appearance of a Listing Designer Theme or Layout.
     * - minOccurs: 0
     * @var string
     */
    public $ImageURL;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: This string value is the name of the Listing Designer Theme or Layout.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The TemplateXML
     * Meta informations extracted from the WSDL
     * - documentation: This string value is actually a CDATA representation of the Listing Designer template. Image-related elements in a template include <code>ThemeTop</code>, <code>ThemeUserCellTop</code>, <code>ThemeUserContent,</code>,
     * <code>ThemeUserCellBottom</code>, and <code>ThemeBottom</code>. This field is not applicable and will not be returned for a Listing Designer Layout.
     * - minOccurs: 0
     * @var string
     */
    public $TemplateXML;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates that the information returned under the <b>DescriptionTemplate</b> container is related to a Listing Designer Theme or Layout.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($groupID = null, $iD = null, $imageURL = null, $name = null, $templateXML = null, $type = null, \DOMDocument $any = null)
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
    public function getGroupID()
    {
        return $this->GroupID;
    }
    /**
     * Set GroupID value
     * @param int $groupID
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setGroupID($groupID = null)
    {
        // validation for constraint: int
        if (!is_null($groupID) && !is_numeric($groupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupID)), __LINE__);
        }
        $this->GroupID = $groupID;
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !is_numeric($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get ImageURL value
     * @return string|null
     */
    public function getImageURL()
    {
        return $this->ImageURL;
    }
    /**
     * Set ImageURL value
     * @param string $imageURL
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setImageURL($imageURL = null)
    {
        // validation for constraint: string
        if (!is_null($imageURL) && !is_string($imageURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($imageURL)), __LINE__);
        }
        $this->ImageURL = $imageURL;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get TemplateXML value
     * @return string|null
     */
    public function getTemplateXML()
    {
        return $this->TemplateXML;
    }
    /**
     * Set TemplateXML value
     * @param string $templateXML
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setTemplateXML($templateXML = null)
    {
        // validation for constraint: string
        if (!is_null($templateXML) && !is_string($templateXML)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($templateXML)), __LINE__);
        }
        $this->TemplateXML = $templateXML;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\DescriptionTemplateCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DescriptionTemplateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DescriptionTemplateCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \macropage\ebaysdk\trading\EnumType\DescriptionTemplateCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DescriptionTemplateType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
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
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType
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
