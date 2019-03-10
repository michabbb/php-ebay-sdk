<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadSiteHostedPicturesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Uploads a picture to the eBay Picture Service and returns a URL of the picture. You will use this URL when creating, revising, or relisting an item with the Trading API.
 * @subpackage Structs
 */
class UploadSiteHostedPicturesRequestType extends AbstractRequestType
{
    /**
     * The PictureName
     * Meta informations extracted from the WSDL
     * - documentation: A seller-defined name for the picture. This field is optional, but can make it easier for a seller to track than an arbitrary, eBay-assigned URL.
     * - minOccurs: 0
     * @var string
     */
    public $PictureName;
    /**
     * The PictureSystemVersion
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the picture system version. Only version 2 is valid. Available to support future changes in the picture system version.
     * - minOccurs: 0
     * @var int
     */
    public $PictureSystemVersion;
    /**
     * The PictureSet
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the size of the picture that will be generated. <br/><br/> <span class="tablenote"><b>IMPORTANT: </b> To get the standard website image sizing with Zoom, set this field to <b>Supersize</b>. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PictureSet;
    /**
     * The PictureData
     * Meta informations extracted from the WSDL
     * - documentation: An optional reference ID to the binary attachment. <br/><br/> The <b>PictureData</b> field does not contain the binary attachment. The binary attachment is image data, including the headers, from a JPG, GIF, PNG, BMP, or TIF format
     * image file. The binary attachment must be sent as a MIME attachment, in your POST request, after the XML input. <br/><br/> <span class="tablenote"><b>Note: </b> This field is not applicable for eBay Large Merchant Services. Use the
     * <b>ExternalPictureURL</b> field instead. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\Base64BinaryType
     */
    public $PictureData;
    /**
     * The PictureUploadPolicy
     * Meta informations extracted from the WSDL
     * - documentation: Determines if the uploaded picture is to replace all the pictures or to be added to the pictures currently available to a seller on the eBay site. The picture is available to the seller on the My Picture Uploads tab within the Sell
     * Your Item pages. <br/><br/> The picture you upload (and its URL) is stored for a period of time on the EPS server. If, within that time, the picture is associated with an item, then the picture persists on the eBay site for the same time length as
     * other pictures uploaded using the <b>UploadSiteHostedPictures</b> call. <br/><br/> The expiration date of the picture is returned in the <b>SiteHostedPictureDetails.UseByDate</b> field in the response.
     * - minOccurs: 0
     * @var string
     */
    public $PictureUploadPolicy;
    /**
     * The ExternalPictureURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is used if the seller wishes to upload a picture to the EPS server that is currently on another external site. The URL of the picture you want to upload is passed in this field. Both http:// and https:// servers are
     * supported. You can include only one <b>ExternalPictureURL</b> field per call. <br><br> The eBay server uses the information in this field to retrieve a picture from an external web server. Once retrieved, the picture will be copied to eBay Picture
     * Services and retained for 30 days if not associated with a listing. When associated with a listing, the duration is the length of the listing plus 90 days. <br/><br/> <span class="tablenote"><b>Note: </b> Although both the HTTP and HTTPS protocols
     * are currently supported, in the near future, eBay will no longer allow the hosting or transfer of images on a server using the the HTTP protocol. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExternalPictureURL;
    /**
     * The PictureWatermark
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureWatermark;
    /**
     * The ExtensionInDays
     * Meta informations extracted from the WSDL
     * - documentation: By default, an unpublished picture will be hosted on the EPS server for five days before being purged. However, the seller has the option of using this field to set an expiration date further into the future (up to 30 days).
     * Similarly, when a listing ends or expires, the images associated with the listing remain on the EPS server for an additional 90 days. The value in this field will add on to those 90 days. <br/><br/> <span class="tablenote"><b>Note: </b>This call is
     * restricted to applications that have been granted permission. Contact the eBay Developers Program to request permission. </span>
     * - minOccurs: 0
     * @var int
     */
    public $ExtensionInDays;
    /**
     * Constructor method for UploadSiteHostedPicturesRequestType
     * @uses UploadSiteHostedPicturesRequestType::setPictureName()
     * @uses UploadSiteHostedPicturesRequestType::setPictureSystemVersion()
     * @uses UploadSiteHostedPicturesRequestType::setPictureSet()
     * @uses UploadSiteHostedPicturesRequestType::setPictureData()
     * @uses UploadSiteHostedPicturesRequestType::setPictureUploadPolicy()
     * @uses UploadSiteHostedPicturesRequestType::setExternalPictureURL()
     * @uses UploadSiteHostedPicturesRequestType::setPictureWatermark()
     * @uses UploadSiteHostedPicturesRequestType::setExtensionInDays()
     * @param string $pictureName
     * @param int $pictureSystemVersion
     * @param string $pictureSet
     * @param \macropage\ebaysdk\trading\StructType\Base64BinaryType $pictureData
     * @param string $pictureUploadPolicy
     * @param string[] $externalPictureURL
     * @param string[] $pictureWatermark
     * @param int $extensionInDays
     */
    public function __construct($pictureName = null, $pictureSystemVersion = null, $pictureSet = null, \macropage\ebaysdk\trading\StructType\Base64BinaryType $pictureData = null, $pictureUploadPolicy = null, array $externalPictureURL = array(), array $pictureWatermark = array(), $extensionInDays = null)
    {
        $this
            ->setPictureName($pictureName)
            ->setPictureSystemVersion($pictureSystemVersion)
            ->setPictureSet($pictureSet)
            ->setPictureData($pictureData)
            ->setPictureUploadPolicy($pictureUploadPolicy)
            ->setExternalPictureURL($externalPictureURL)
            ->setPictureWatermark($pictureWatermark)
            ->setExtensionInDays($extensionInDays);
    }
    /**
     * Get PictureName value
     * @return string|null
     */
    public function getPictureName()
    {
        return $this->PictureName;
    }
    /**
     * Set PictureName value
     * @param string $pictureName
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
     */
    public function setPictureName($pictureName = null)
    {
        // validation for constraint: string
        if (!is_null($pictureName) && !is_string($pictureName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pictureName)), __LINE__);
        }
        $this->PictureName = $pictureName;
        return $this;
    }
    /**
     * Get PictureSystemVersion value
     * @return int|null
     */
    public function getPictureSystemVersion()
    {
        return $this->PictureSystemVersion;
    }
    /**
     * Set PictureSystemVersion value
     * @param int $pictureSystemVersion
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
     */
    public function setPictureSystemVersion($pictureSystemVersion = null)
    {
        // validation for constraint: int
        if (!is_null($pictureSystemVersion) && !is_numeric($pictureSystemVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pictureSystemVersion)), __LINE__);
        }
        $this->PictureSystemVersion = $pictureSystemVersion;
        return $this;
    }
    /**
     * Get PictureSet value
     * @return string|null
     */
    public function getPictureSet()
    {
        return $this->PictureSet;
    }
    /**
     * Set PictureSet value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureSetCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureSetCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pictureSet
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
     */
    public function setPictureSet($pictureSet = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureSetCodeType::valueIsValid($pictureSet)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pictureSet, implode(', ', \macropage\ebaysdk\trading\EnumType\PictureSetCodeType::getValidValues())), __LINE__);
        }
        $this->PictureSet = $pictureSet;
        return $this;
    }
    /**
     * Get PictureData value
     * @return \macropage\ebaysdk\trading\StructType\Base64BinaryType|null
     */
    public function getPictureData()
    {
        return $this->PictureData;
    }
    /**
     * Set PictureData value
     * @param \macropage\ebaysdk\trading\StructType\Base64BinaryType $pictureData
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
     */
    public function setPictureData(\macropage\ebaysdk\trading\StructType\Base64BinaryType $pictureData = null)
    {
        $this->PictureData = $pictureData;
        return $this;
    }
    /**
     * Get PictureUploadPolicy value
     * @return string|null
     */
    public function getPictureUploadPolicy()
    {
        return $this->PictureUploadPolicy;
    }
    /**
     * Set PictureUploadPolicy value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureUploadPolicyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureUploadPolicyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pictureUploadPolicy
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
     */
    public function setPictureUploadPolicy($pictureUploadPolicy = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureUploadPolicyCodeType::valueIsValid($pictureUploadPolicy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pictureUploadPolicy, implode(', ', \macropage\ebaysdk\trading\EnumType\PictureUploadPolicyCodeType::getValidValues())), __LINE__);
        }
        $this->PictureUploadPolicy = $pictureUploadPolicy;
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
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
     */
    public function setExternalPictureURL(array $externalPictureURL = array())
    {
        foreach ($externalPictureURL as $uploadSiteHostedPicturesRequestTypeExternalPictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($uploadSiteHostedPicturesRequestTypeExternalPictureURLItem)) {
                throw new \InvalidArgumentException(sprintf('The ExternalPictureURL property can only contain items of anyURI, "%s" given', is_object($uploadSiteHostedPicturesRequestTypeExternalPictureURLItem) ? get_class($uploadSiteHostedPicturesRequestTypeExternalPictureURLItem) : gettype($uploadSiteHostedPicturesRequestTypeExternalPictureURLItem)), __LINE__);
            }
        }
        $this->ExternalPictureURL = $externalPictureURL;
        return $this;
    }
    /**
     * Add item to ExternalPictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
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
     * Get PictureWatermark value
     * @return string[]|null
     */
    public function getPictureWatermark()
    {
        return $this->PictureWatermark;
    }
    /**
     * Set PictureWatermark value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureWatermarkCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureWatermarkCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $pictureWatermark
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
     */
    public function setPictureWatermark(array $pictureWatermark = array())
    {
        $invalidValues = array();
        foreach ($pictureWatermark as $uploadSiteHostedPicturesRequestTypePictureWatermarkItem) {
            if (!\macropage\ebaysdk\trading\EnumType\PictureWatermarkCodeType::valueIsValid($uploadSiteHostedPicturesRequestTypePictureWatermarkItem)) {
                $invalidValues[] = var_export($uploadSiteHostedPicturesRequestTypePictureWatermarkItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\PictureWatermarkCodeType::getValidValues())), __LINE__);
        }
        $this->PictureWatermark = $pictureWatermark;
        return $this;
    }
    /**
     * Add item to PictureWatermark value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureWatermarkCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureWatermarkCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
     */
    public function addToPictureWatermark($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureWatermarkCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\PictureWatermarkCodeType::getValidValues())), __LINE__);
        }
        $this->PictureWatermark[] = $item;
        return $this;
    }
    /**
     * Get ExtensionInDays value
     * @return int|null
     */
    public function getExtensionInDays()
    {
        return $this->ExtensionInDays;
    }
    /**
     * Set ExtensionInDays value
     * @param int $extensionInDays
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
     */
    public function setExtensionInDays($extensionInDays = null)
    {
        // validation for constraint: int
        if (!is_null($extensionInDays) && !is_numeric($extensionInDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($extensionInDays)), __LINE__);
        }
        $this->ExtensionInDays = $extensionInDays;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesRequestType
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
