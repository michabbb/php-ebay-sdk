<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedPictureDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
 * @subpackage Structs
 */
class ExtendedPictureDetailsType extends AbstractStructBase
{
    /**
     * The PictureURLs
     * Meta informations extracted from the WSDL
     * - documentation: This container returns the <b>eBayPictureURL</b> (images hosted by eBay Picture Services) and the <b>ExternalPictureURL</b> (images hosted outside of eBay) fields.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureURLsType[]
     */
    public $PictureURLs;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ExtendedPictureDetailsType
     * @uses ExtendedPictureDetailsType::setPictureURLs()
     * @uses ExtendedPictureDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PictureURLsType[] $pictureURLs
     * @param \DOMDocument $any
     */
    public function __construct(array $pictureURLs = array(), \DOMDocument $any = null)
    {
        $this
            ->setPictureURLs($pictureURLs)
            ->setAny($any);
    }
    /**
     * Get PictureURLs value
     * @return \macropage\ebaysdk\trading\StructType\PictureURLsType[]|null
     */
    public function getPictureURLs()
    {
        return $this->PictureURLs;
    }
    /**
     * Set PictureURLs value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureURLsType[] $pictureURLs
     * @return \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType
     */
    public function setPictureURLs(array $pictureURLs = array())
    {
        foreach ($pictureURLs as $extendedPictureDetailsTypePictureURLsItem) {
            // validation for constraint: itemType
            if (!$extendedPictureDetailsTypePictureURLsItem instanceof \macropage\ebaysdk\trading\StructType\PictureURLsType) {
                throw new \InvalidArgumentException(sprintf('The PictureURLs property can only contain items of \macropage\ebaysdk\trading\StructType\PictureURLsType, "%s" given', is_object($extendedPictureDetailsTypePictureURLsItem) ? get_class($extendedPictureDetailsTypePictureURLsItem) : gettype($extendedPictureDetailsTypePictureURLsItem)), __LINE__);
            }
        }
        $this->PictureURLs = $pictureURLs;
        return $this;
    }
    /**
     * Add item to PictureURLs value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureURLsType $item
     * @return \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType
     */
    public function addToPictureURLs(\macropage\ebaysdk\trading\StructType\PictureURLsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PictureURLsType) {
            throw new \InvalidArgumentException(sprintf('The PictureURLs property can only contain items of \macropage\ebaysdk\trading\StructType\PictureURLsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PictureURLs[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType
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
