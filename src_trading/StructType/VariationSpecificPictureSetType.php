<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationSpecificPictureSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>VariationSpecificPictureSet</b> container, which is used to specify the URL(s) where the picture(s) of the variation specific will be hosted. If the <b>Variations.Pictures</b> container is used, at least one
 * <b>VariationSpecificPictureSet</b> container is required.
 * @subpackage Structs
 */
class VariationSpecificPictureSetType extends AbstractStructBase
{
    /**
     * The VariationSpecificValue
     * Meta informations extracted from the WSDL
     * - documentation: A value that is associated with <b>VariationSpecificName</b>. For example, suppose this set of pictures is showing blue shirts, and some of the variations include Color=Blue in their variation specifics. If
     * <b>VariationSpecificName</b> is <code>Color </code>, then <b>VariationSpecificValue</b> would be <code>Blue</code>.
     * - minOccurs: 0
     * @var string
     */
    public $VariationSpecificValue;
    /**
     * The PictureURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of a picture that is associated with the <b>VariationSpecificValue</b>. A variation specific picture set can consist of up to 12 self-hosted or eBay Picture Services (EPS) hosted pictures. eBay Picture Services and
     * self-hosted images can never be combined into the same variation specific picture set. To specify more than one image, use multiple <b>PictureURL</b> fields, passing in a distinct URL in each of those fields. This field cannot have an empty/null
     * value. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol. <br><br> The image specified in the first
     * <b>PictureURL</b> field is also used as the thumbnail image for applicable variations. For example, if the picture set contains pictures of red shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the first picture is used as
     * the thumbnail image for all the red shirt variations. <br/><br/> <span class="tablenote"><b>Note: </b> All images must comply with the <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Pictures-Intro.html">Picture
     * Requirements</a>. </span> You can use Item.PictureDetails to specify additional pictures. For example, the item-level pictures could include a model wearing a black shirt, as a typical example of the shirt style. <br><br> <span
     * class="tablenote"><b>Note:</b> If a URI contains spaces, replace them with <code>%20</code>. For example, <code>http://example.com/my image.jpg</code> must be submitted as <code>http://example.com/my%20image.jpg</code> to replace the space in the
     * image file name. </span> Variation pictures cannot be added or removed from a fixed-price listing when the listing is scheduled to end within 12 hours or if the item variation has already had transactions. <br/><br/> <span class="tablenote">
     * <strong>Note:</strong> For some large merchants, there are no limitations on when variation pictures can be added or removed from a fixed-price listing, even when the item variation has had transactions or is set to end within 12 hours. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * The GalleryURL
     * Meta informations extracted from the WSDL
     * - documentation: No longer used.
     * - minOccurs: 0
     * @var string
     */
    public $GalleryURL;
    /**
     * The ExternalPictureURL
     * Meta informations extracted from the WSDL
     * - documentation: Returns the URL of a variation-specific picture that is hosted outside of eBay.<br> <br> When you list, revise, or relist a variation, use VariationSpecificPictureSet.PictureURL (not ExternalPictureURL) to specify your self-hosted
     * picture or EPS picture.<br> <br/> <span class="tablenote"><b>Note: </b> All images must comply to the <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Pictures-Intro.html">Picture Requirements</a>. </span> This is returned
     * only when the seller used a self-hosted picture for the variation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExternalPictureURL;
    /**
     * The ExtendedPictureDetails
     * Meta informations extracted from the WSDL
     * - documentation: Returns the URLs of the seller's self-hosted (hosted outside of eBay) variation specific pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType
     */
    public $ExtendedPictureDetails;
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
     * @uses VariationSpecificPictureSetType::setExternalPictureURL()
     * @uses VariationSpecificPictureSetType::setExtendedPictureDetails()
     * @uses VariationSpecificPictureSetType::setAny()
     * @param string $variationSpecificValue
     * @param string[] $pictureURL
     * @param string $galleryURL
     * @param string[] $externalPictureURL
     * @param \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType $extendedPictureDetails
     * @param \DOMDocument $any
     */
    public function __construct($variationSpecificValue = null, array $pictureURL = array(), $galleryURL = null, array $externalPictureURL = array(), \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType $extendedPictureDetails = null, \DOMDocument $any = null)
    {
        $this
            ->setVariationSpecificValue($variationSpecificValue)
            ->setPictureURL($pictureURL)
            ->setGalleryURL($galleryURL)
            ->setExternalPictureURL($externalPictureURL)
            ->setExtendedPictureDetails($extendedPictureDetails)
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
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
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
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
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
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
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
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
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
     * Get ExternalPictureURL value
     * @return string[]|null
     */
    public function getExternalPictureURL()
    {
        return $this->ExternalPictureURL;
    }
    /**
     * Set ExternalPictureURL value
     * @throws \InvalidArgumentException
     * @param string[] $externalPictureURL
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
     */
    public function setExternalPictureURL(array $externalPictureURL = array())
    {
        foreach ($externalPictureURL as $variationSpecificPictureSetTypeExternalPictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($variationSpecificPictureSetTypeExternalPictureURLItem)) {
                throw new \InvalidArgumentException(sprintf('The ExternalPictureURL property can only contain items of anyURI, "%s" given', is_object($variationSpecificPictureSetTypeExternalPictureURLItem) ? get_class($variationSpecificPictureSetTypeExternalPictureURLItem) : gettype($variationSpecificPictureSetTypeExternalPictureURLItem)), __LINE__);
            }
        }
        $this->ExternalPictureURL = $externalPictureURL;
        return $this;
    }
    /**
     * Add item to ExternalPictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
     */
    public function addToExternalPictureURL($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExternalPictureURL property can only contain items of anyURI, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExternalPictureURL[] = $item;
        return $this;
    }
    /**
     * Get ExtendedPictureDetails value
     * @return \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType|null
     */
    public function getExtendedPictureDetails()
    {
        return $this->ExtendedPictureDetails;
    }
    /**
     * Set ExtendedPictureDetails value
     * @param \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType $extendedPictureDetails
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
     */
    public function setExtendedPictureDetails(\macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType $extendedPictureDetails = null)
    {
        $this->ExtendedPictureDetails = $extendedPictureDetails;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
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
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
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
