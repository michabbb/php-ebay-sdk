<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureSetMemberType StructType
 * Meta informations extracted from the WSDL
 * - documentation: URL and size information for each generated and stored picture. This data is provided for use in application previews of pictures. This data is used for display control for specific pictures in the generated imageset. This container
 * is supplied for all generated pictures.
 * @subpackage Structs
 */
class PictureSetMemberType extends AbstractStructBase
{
    /**
     * The MemberURL
     * Meta informations extracted from the WSDL
     * - documentation: URL for the picture.
     * - minOccurs: 0
     * @var string
     */
    public $MemberURL;
    /**
     * The PictureHeight
     * Meta informations extracted from the WSDL
     * - documentation: Height of the picture in pixels.
     * - minOccurs: 0
     * @var int
     */
    public $PictureHeight;
    /**
     * The PictureWidth
     * Meta informations extracted from the WSDL
     * - documentation: Width of the picture in pixels.
     * - minOccurs: 0
     * @var int
     */
    public $PictureWidth;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureSetMemberType
     * @uses PictureSetMemberType::setMemberURL()
     * @uses PictureSetMemberType::setPictureHeight()
     * @uses PictureSetMemberType::setPictureWidth()
     * @uses PictureSetMemberType::setAny()
     * @param string $memberURL
     * @param int $pictureHeight
     * @param int $pictureWidth
     * @param \DOMDocument $any
     */
    public function __construct($memberURL = null, $pictureHeight = null, $pictureWidth = null, \DOMDocument $any = null)
    {
        $this
            ->setMemberURL($memberURL)
            ->setPictureHeight($pictureHeight)
            ->setPictureWidth($pictureWidth)
            ->setAny($any);
    }
    /**
     * Get MemberURL value
     * @return string|null
     */
    public function getMemberURL()
    {
        return $this->MemberURL;
    }
    /**
     * Set MemberURL value
     * @param string $memberURL
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType
     */
    public function setMemberURL($memberURL = null)
    {
        // validation for constraint: string
        if (!is_null($memberURL) && !is_string($memberURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memberURL)), __LINE__);
        }
        $this->MemberURL = $memberURL;
        return $this;
    }
    /**
     * Get PictureHeight value
     * @return int|null
     */
    public function getPictureHeight()
    {
        return $this->PictureHeight;
    }
    /**
     * Set PictureHeight value
     * @param int $pictureHeight
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType
     */
    public function setPictureHeight($pictureHeight = null)
    {
        // validation for constraint: int
        if (!is_null($pictureHeight) && !is_numeric($pictureHeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pictureHeight)), __LINE__);
        }
        $this->PictureHeight = $pictureHeight;
        return $this;
    }
    /**
     * Get PictureWidth value
     * @return int|null
     */
    public function getPictureWidth()
    {
        return $this->PictureWidth;
    }
    /**
     * Set PictureWidth value
     * @param int $pictureWidth
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType
     */
    public function setPictureWidth($pictureWidth = null)
    {
        // validation for constraint: int
        if (!is_null($pictureWidth) && !is_numeric($pictureWidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pictureWidth)), __LINE__);
        }
        $this->PictureWidth = $pictureWidth;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PictureSetMemberType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType
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
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType
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
