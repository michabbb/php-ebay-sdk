<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationSpecificPictureSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Complex type used by the <b>VariationSpecificPictureSet</b> container that is returned for multiple-variation listings, and gives the URL(s) to one or more of the listing's images. Images submitted for multiple-variation listings
 * must be based on the product aspect that is defined in the <b>Variations.Pictures.VariationSpecificName</b> field. This product aspect will often be 'Color', particularly when the listing features similar items available in different colors.
 * @subpackage Structs
 */
class VariationSpecificPictureSetType extends AbstractStructBase
{
    /**
     * The VariationSpecificValue
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the corresponding value of the product aspect that is shown in the the <b>Variations.Pictures.VariationSpecificName</b> field. For example, if the <b>Variations.Pictures.VariationSpecificName</b> value is 'Color',
     * the value in this field will be one of the values that is shown in the <b>Variations.VariationSpecificsSet.NameValueList</b> container. So, if the <b>Name</b> field of that <b>NameValueList</b> container was 'Color', the value in the
     * <b>VariationSpecificPictureSet.VariationSpecificValue</b> would have to be one of the defined colors for the multiple-variation listing.
     * - minOccurs: 0
     * @var string
     */
    public $VariationSpecificValue;
    /**
     * The PictureURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL to one image of one variation of the multiple-variation listing. The image must be associated with the corresponding aspect name-value pair. So, if the corresponding <b>VariationSpecificName</b> value is 'Color', and the
     * corresponding <b>VariationSpecificValue</b> value is 'Space Grey', each URL returned under the corresponding <b>VariationSpecificPictureSet</b> container should point to a picture that display the item in that particular color. <br/><br/> The URL(s)
     * can point to an image (or images) stored on the eBay Picture Server, or it can be a URL to a self-hosted picture. Note that self-hosted pictures must be on a server that supports the 'https' protocol. <br/><br/> The first <b>PictureURL</b> shown in
     * the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * The GalleryURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer returned. Note that the first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     * - minOccurs: 0
     * @var string
     */
    public $GalleryURL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VariationSpecificPictureSetType
     * @uses VariationSpecificPictureSetType::setVariationSpecificValue()
     * @uses VariationSpecificPictureSetType::setPictureURL()
     * @uses VariationSpecificPictureSetType::setGalleryURL()
     * @uses VariationSpecificPictureSetType::setAny()
     * @param string $variationSpecificValue
     * @param string[] $pictureURL
     * @param string $galleryURL
     * @param \DOMDocument $any
     */
    public function __construct($variationSpecificValue = null, array $pictureURL = array(), $galleryURL = null, \DOMDocument $any = null)
    {
        $this
            ->setVariationSpecificValue($variationSpecificValue)
            ->setPictureURL($pictureURL)
            ->setGalleryURL($galleryURL)
            ->setAny($any);
    }
    /**
     * Get VariationSpecificValue value
     * @return string|null
     */
    public function getVariationSpecificValue()
    {
        return $this->VariationSpecificValue;
    }
    /**
     * Set VariationSpecificValue value
     * @param string $variationSpecificValue
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
     */
    public function setVariationSpecificValue($variationSpecificValue = null)
    {
        // validation for constraint: string
        if (!is_null($variationSpecificValue) && !is_string($variationSpecificValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($variationSpecificValue)), __LINE__);
        }
        $this->VariationSpecificValue = $variationSpecificValue;
        return $this;
    }
    /**
     * Get PictureURL value
     * @return string[]|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @throws \InvalidArgumentException
     * @param string[] $pictureURL
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
     */
    public function setPictureURL(array $pictureURL = array())
    {
        foreach ($pictureURL as $variationSpecificPictureSetTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($variationSpecificPictureSetTypePictureURLItem)) {
                throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of anyURI, "%s" given', is_object($variationSpecificPictureSetTypePictureURLItem) ? get_class($variationSpecificPictureSetTypePictureURLItem) : gettype($variationSpecificPictureSetTypePictureURLItem)), __LINE__);
            }
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Add item to PictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
     */
    public function addToPictureURL($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of anyURI, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PictureURL[] = $item;
        return $this;
    }
    /**
     * Get GalleryURL value
     * @return string|null
     */
    public function getGalleryURL()
    {
        return $this->GalleryURL;
    }
    /**
     * Set GalleryURL value
     * @param string $galleryURL
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
     */
    public function setGalleryURL($galleryURL = null)
    {
        // validation for constraint: string
        if (!is_null($galleryURL) && !is_string($galleryURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($galleryURL)), __LINE__);
        }
        $this->GalleryURL = $galleryURL;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
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
