<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerPictureType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerPictureType extends AbstractStructBase
{
    /**
     * The PictureURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PictureURL;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The DisplayFormat
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType[]
     */
    public $DisplayFormat;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureManagerPictureType
     * @uses PictureManagerPictureType::setPictureURL()
     * @uses PictureManagerPictureType::setName()
     * @uses PictureManagerPictureType::setDate()
     * @uses PictureManagerPictureType::setDisplayFormat()
     * @uses PictureManagerPictureType::setAny()
     * @param string $pictureURL
     * @param string $name
     * @param string $date
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType[] $displayFormat
     * @param \DOMDocument $any
     */
    public function __construct($pictureURL = null, $name = null, $date = null, array $displayFormat = array(), \DOMDocument $any = null)
    {
        $this
            ->setPictureURL($pictureURL)
            ->setName($name)
            ->setDate($date)
            ->setDisplayFormat($displayFormat)
            ->setAny($any);
    }
    /**
     * Get PictureURL value
     * @return string|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @param string $pictureURL
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
     */
    public function setPictureURL($pictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($pictureURL) && !is_string($pictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pictureURL)), __LINE__);
        }
        $this->PictureURL = $pictureURL;
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
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
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get DisplayFormat value
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType[]|null
     */
    public function getDisplayFormat()
    {
        return $this->DisplayFormat;
    }
    /**
     * Set DisplayFormat value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType[] $displayFormat
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
     */
    public function setDisplayFormat(array $displayFormat = array())
    {
        foreach ($displayFormat as $pictureManagerPictureTypeDisplayFormatItem) {
            // validation for constraint: itemType
            if (!$pictureManagerPictureTypeDisplayFormatItem instanceof \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType) {
                throw new \InvalidArgumentException(sprintf('The DisplayFormat property can only contain items of \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType, "%s" given', is_object($pictureManagerPictureTypeDisplayFormatItem) ? get_class($pictureManagerPictureTypeDisplayFormatItem) : gettype($pictureManagerPictureTypeDisplayFormatItem)), __LINE__);
            }
        }
        $this->DisplayFormat = $displayFormat;
        return $this;
    }
    /**
     * Add item to DisplayFormat value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType $item
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
     */
    public function addToDisplayFormat(\macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType) {
            throw new \InvalidArgumentException(sprintf('The DisplayFormat property can only contain items of \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisplayFormat[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PictureManagerPictureType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
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
