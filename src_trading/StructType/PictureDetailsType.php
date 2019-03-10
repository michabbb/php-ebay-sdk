<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the data for the pictures associated with an item.
 * @subpackage Structs
 */
class PictureDetailsType extends AbstractStructBase
{
    /**
     * The GalleryType
     * Meta informations extracted from the WSDL
     * - documentation: <a name="galleryTypeField"></a> Specifies the Gallery enhancement type for the listing. All listings automatically get the <b>Gallery</b> enhancement at no cost, so you never need to set this field to Gallery. <br/><br/> Gallery
     * types are accumulative. This means if you use <b>Plus</b>, you also get the features of <b>Gallery</b> and if you use <b>Featured</b>, you get all the features of <b>Gallery</b> and <b>Plus</b>. Passing the values <b>Plus</b> and <b>Featured</b>
     * together in the same request will return an error. <br/><br/> The Gallery image will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. <br/><br/> When revising a listing, if you remove <b>Plus</b> or <b>Featured</b>, the
     * original feature fee will not be credited. If you upgrade to <b>Featured</b>, the original feature fee is credited, and the new feature fee is charged.
     * - minOccurs: 0
     * @var string
     */
    public $GalleryType;
    /**
     * The PhotoDisplay
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of image display used in a listing. Some options are only available if images are hosted through eBay Picture Services (EPS). eBay determines this by parsing the associated <b>PictureURL</b>. <br><br> You cannot
     * use <b>PhotoDisplay</b> in combination with Listing Designer layouts. Specify <code>None</code> or do not add <b>PhotoDisplay</b> when <b>ListingDesigner.LayoutID</b> is a value other than 0. <br><br> Some <b>PhotoDisplay</b> options can result in
     * listing fees, even when the item is relisted. If you are relisting an item that was originally listed with a <b>PhotoDisplay</b> option, and you do not want that <b>PhotoDisplay</b> enhancement in your relisted item, you need to specifically remove
     * <b>PhotoDisplay</b> in your <b>RelistItem</b> call (or <b>RelistFixedPriceItem</b>, as applicable) by setting <b>PhotoDisplay</b> to <code>None</code>. Use <b>VerifyRelistItem</b> to review your listing fees before you relist an item.
     * - minOccurs: 0
     * @var string
     */
    public $PhotoDisplay;
    /**
     * The PictureURL
     * Meta informations extracted from the WSDL
     * - documentation: Contains the URL for a picture of the item. The URL can be from the eBay Picture Services (images previously uploaded) or from a server outside of eBay (self-hosted). You can pass in up to 12 URLs but you cannot mix self-hosted and
     * EPS-hosted URL in one listing. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol. <br/><br/> On the US and
     * Canada eBay Motors sites (for all vehicle listings) a listing can contain up to 24 pictures. The Gallery image will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. <br/><br/> <span class="tablenote"><b>Note: </b> All images,
     * whether they are hosted by EPS or self-hosted, must comply with the <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Pictures-Intro.html">Picture Requirements.</a> </span> To specify multiple pictures, send each URL in a
     * separate, <b>PictureDetails.PictureURL</b> element. The first URL passed in will be the Gallery image and appears on the View Item page. <br><br> If a URI contains spaces, replace them with <code>%20</code>. For example, <code>http://example.com/my
     * image.jpg</code> must be submitted as <code>http://example.com/my%20image.jpg</code> to replace the space in the image file name. <br/><br/> <span class="tablenote"><b>Note: </b> Embedding pictures in the description (by using IMG tags) is
     * discouraged. Studies show that shopper often do not look at the description. The recommended process is to specify the image URLs using <b>PictureURL</b>. </span> If a listing uses a single self-hosted picture (except in the case of a multi-variation
     * listing), the picture will be copied to eBay Picture Services (ESP) and the <b>PictureDetails.PictureURL</b> value returned by <b>GetItem</b> will be an EPS URL. <br/><br/> <b>For VerifyAddItem only:</b> You must include a picture even when using
     * <b>VerifyAddItem</b>. If you don't have a image file, you can use the following fake eBay Picture Services URL (http://i2.ebayimg.com/abc/M28/dummy.jpg) with this call. <br><br> <b>For ReviseItem and RelistItem only:</b> To remove a picture when
     * revising or relisting an item, specify <b>PictureDetails</b> with all the pictures that you want the listing to include. That is, you need to completely replace the original set of URLs with the revised set. You cannot remove all the
     * <b>PictureURL</b> fields from a listing because each listing requires at least one picture. <br/><br/> <b>Remember</b>: The Gallery image will be the first <b>PictureURL</b> in the array of <b>PictureURL</b> fields. So if the first image passed in
     * when relisting/revising is different from when the listing was created, the Gallery image will be changed. <br/><br/> <span class="tablenote"> <strong>Note:</strong> For some large merchants, there are no limitations on when pictures can be added or
     * removed from a fixed-price listing, even when the listing has had transactions or is set to end within 12 hours. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * The PictureSource
     * Meta informations extracted from the WSDL
     * - documentation: The service hosting the pictures in <b>PictureURL</b>, if any. This information is primarily useful for Picture Manager subscribers, who pay a flat subscription fee instead of individual picture fees per listing. Only returned when
     * <b>PictureURL</b> is returned.
     * - minOccurs: 0
     * @var string
     */
    public $PictureSource;
    /**
     * The GalleryDuration
     * Meta informations extracted from the WSDL
     * - documentation: Number of days that the <b>Featured Gallery</b> type applies to a listing. Applicable values include 'Days_7' and 'LifeTime'. <br><br> When a seller chooses <b>Featured</b> as the Gallery type, the listing is highlighted and is
     * included at the top of search results. This functionality is applicable only for <b>Gallery Featured</b> items and returns an error for any other Gallery type. Additionally, an error is returned if the seller attempts to downgrade from Lifetime to
     * limited duration, but the seller can upgrade from limited duration to Lifetime duration. This field is not applicable to auction listings.
     * - minOccurs: 0
     * @var string
     */
    public $GalleryDuration;
    /**
     * The GalleryStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if the gallery image upload failed and gives a reason for the failure, such as 'InvalidUrl' or 'ServerDown'. It is not returned if the gallery image is uploaded successfully.
     * - minOccurs: 0
     * @var string
     */
    public $GalleryStatus;
    /**
     * The GalleryErrorInfo
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the reason the gallery generation failed, such as, URL for the image is not valid. This field is returned when <b>GalleryStatus</b> field is returned and does not appear when the gallery generation is successful.
     * - minOccurs: 0
     * @var string
     */
    public $GalleryErrorInfo;
    /**
     * The ExternalPictureURL
     * Meta informations extracted from the WSDL
     * - documentation: When returned this contains the original URL of a self-hosted pictures, associated with the item when the item was listed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExternalPictureURL;
    /**
     * The ExtendedPictureDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
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
     * Constructor method for PictureDetailsType
     * @uses PictureDetailsType::setGalleryType()
     * @uses PictureDetailsType::setPhotoDisplay()
     * @uses PictureDetailsType::setPictureURL()
     * @uses PictureDetailsType::setPictureSource()
     * @uses PictureDetailsType::setGalleryDuration()
     * @uses PictureDetailsType::setGalleryStatus()
     * @uses PictureDetailsType::setGalleryErrorInfo()
     * @uses PictureDetailsType::setExternalPictureURL()
     * @uses PictureDetailsType::setExtendedPictureDetails()
     * @uses PictureDetailsType::setAny()
     * @param string $galleryType
     * @param string $photoDisplay
     * @param string[] $pictureURL
     * @param string $pictureSource
     * @param string $galleryDuration
     * @param string $galleryStatus
     * @param string $galleryErrorInfo
     * @param string[] $externalPictureURL
     * @param \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType $extendedPictureDetails
     * @param \DOMDocument $any
     */
    public function __construct($galleryType = null, $photoDisplay = null, array $pictureURL = array(), $pictureSource = null, $galleryDuration = null, $galleryStatus = null, $galleryErrorInfo = null, array $externalPictureURL = array(), \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType $extendedPictureDetails = null, \DOMDocument $any = null)
    {
        $this
            ->setGalleryType($galleryType)
            ->setPhotoDisplay($photoDisplay)
            ->setPictureURL($pictureURL)
            ->setPictureSource($pictureSource)
            ->setGalleryDuration($galleryDuration)
            ->setGalleryStatus($galleryStatus)
            ->setGalleryErrorInfo($galleryErrorInfo)
            ->setExternalPictureURL($externalPictureURL)
            ->setExtendedPictureDetails($extendedPictureDetails)
            ->setAny($any);
    }
    /**
     * Get GalleryType value
     * @return string|null
     */
    public function getGalleryType()
    {
        return $this->GalleryType;
    }
    /**
     * Set GalleryType value
     * @uses \macropage\ebaysdk\trading\EnumType\GalleryTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GalleryTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $galleryType
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
     */
    public function setGalleryType($galleryType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GalleryTypeCodeType::valueIsValid($galleryType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $galleryType, implode(', ', \macropage\ebaysdk\trading\EnumType\GalleryTypeCodeType::getValidValues())), __LINE__);
        }
        $this->GalleryType = $galleryType;
        return $this;
    }
    /**
     * Get PhotoDisplay value
     * @return string|null
     */
    public function getPhotoDisplay()
    {
        return $this->PhotoDisplay;
    }
    /**
     * Set PhotoDisplay value
     * @uses \macropage\ebaysdk\trading\EnumType\PhotoDisplayCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PhotoDisplayCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $photoDisplay
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
     */
    public function setPhotoDisplay($photoDisplay = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PhotoDisplayCodeType::valueIsValid($photoDisplay)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $photoDisplay, implode(', ', \macropage\ebaysdk\trading\EnumType\PhotoDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->PhotoDisplay = $photoDisplay;
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
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
     */
    public function setPictureURL(array $pictureURL = array())
    {
        foreach ($pictureURL as $pictureDetailsTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($pictureDetailsTypePictureURLItem)) {
                throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of anyURI, "%s" given', is_object($pictureDetailsTypePictureURLItem) ? get_class($pictureDetailsTypePictureURLItem) : gettype($pictureDetailsTypePictureURLItem)), __LINE__);
            }
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Add item to PictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
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
     * Get PictureSource value
     * @return string|null
     */
    public function getPictureSource()
    {
        return $this->PictureSource;
    }
    /**
     * Set PictureSource value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureSourceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureSourceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pictureSource
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
     */
    public function setPictureSource($pictureSource = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureSourceCodeType::valueIsValid($pictureSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pictureSource, implode(', ', \macropage\ebaysdk\trading\EnumType\PictureSourceCodeType::getValidValues())), __LINE__);
        }
        $this->PictureSource = $pictureSource;
        return $this;
    }
    /**
     * Get GalleryDuration value
     * @return string|null
     */
    public function getGalleryDuration()
    {
        return $this->GalleryDuration;
    }
    /**
     * Set GalleryDuration value
     * @param string $galleryDuration
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
     */
    public function setGalleryDuration($galleryDuration = null)
    {
        // validation for constraint: string
        if (!is_null($galleryDuration) && !is_string($galleryDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($galleryDuration)), __LINE__);
        }
        $this->GalleryDuration = $galleryDuration;
        return $this;
    }
    /**
     * Get GalleryStatus value
     * @return string|null
     */
    public function getGalleryStatus()
    {
        return $this->GalleryStatus;
    }
    /**
     * Set GalleryStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\GalleryStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\GalleryStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $galleryStatus
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
     */
    public function setGalleryStatus($galleryStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\GalleryStatusCodeType::valueIsValid($galleryStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $galleryStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\GalleryStatusCodeType::getValidValues())), __LINE__);
        }
        $this->GalleryStatus = $galleryStatus;
        return $this;
    }
    /**
     * Get GalleryErrorInfo value
     * @return string|null
     */
    public function getGalleryErrorInfo()
    {
        return $this->GalleryErrorInfo;
    }
    /**
     * Set GalleryErrorInfo value
     * @param string $galleryErrorInfo
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
     */
    public function setGalleryErrorInfo($galleryErrorInfo = null)
    {
        // validation for constraint: string
        if (!is_null($galleryErrorInfo) && !is_string($galleryErrorInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($galleryErrorInfo)), __LINE__);
        }
        $this->GalleryErrorInfo = $galleryErrorInfo;
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
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
     */
    public function setExternalPictureURL(array $externalPictureURL = array())
    {
        foreach ($externalPictureURL as $pictureDetailsTypeExternalPictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($pictureDetailsTypeExternalPictureURLItem)) {
                throw new \InvalidArgumentException(sprintf('The ExternalPictureURL property can only contain items of anyURI, "%s" given', is_object($pictureDetailsTypeExternalPictureURLItem) ? get_class($pictureDetailsTypeExternalPictureURLItem) : gettype($pictureDetailsTypeExternalPictureURLItem)), __LINE__);
            }
        }
        $this->ExternalPictureURL = $externalPictureURL;
        return $this;
    }
    /**
     * Add item to ExternalPictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
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
     * @uses \macropage\ebaysdk\trading\StructType\PictureDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\PictureDetailsType
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
