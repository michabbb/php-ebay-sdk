<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendSiteHostedPicturesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: By default, unpublished pictures uploaded to eBay Picture Services (EPS) via the <b>UploadSiteHostedPictures</b> call will be kept on the server for five days before being purged. The <b>ExtendSiteHostedPictures</b> call is used to
 * extend this expiration date by the number of days specified in the call. This restricted call gives approved sellers the ability to extend the default expiration date of pictures uploaded to EPS but not immediately published in an eBay listing.
 * @subpackage Structs
 */
class ExtendSiteHostedPicturesRequestType extends AbstractRequestType
{
    /**
     * The PictureURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of the image hosted by eBay Picture Services. This URL is returned in the <b>SiteHostedPictureDetails.FullURL</b> field of the <b>UploadSiteHostedPictures</b> response.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * The ExtensionInDays
     * Meta informations extracted from the WSDL
     * - documentation: The number of days by which to extend the expiration date for the specified image.
     * - minOccurs: 0
     * @var int
     */
    public $ExtensionInDays;
    /**
     * Constructor method for ExtendSiteHostedPicturesRequestType
     * @uses ExtendSiteHostedPicturesRequestType::setPictureURL()
     * @uses ExtendSiteHostedPicturesRequestType::setExtensionInDays()
     * @param string[] $pictureURL
     * @param int $extensionInDays
     */
    public function __construct(array $pictureURL = array(), $extensionInDays = null)
    {
        $this
            ->setPictureURL($pictureURL)
            ->setExtensionInDays($extensionInDays);
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
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesRequestType
     */
    public function setPictureURL(array $pictureURL = array())
    {
        foreach ($pictureURL as $extendSiteHostedPicturesRequestTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($extendSiteHostedPicturesRequestTypePictureURLItem)) {
                throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of anyURI, "%s" given', is_object($extendSiteHostedPicturesRequestTypePictureURLItem) ? get_class($extendSiteHostedPicturesRequestTypePictureURLItem) : gettype($extendSiteHostedPicturesRequestTypePictureURLItem)), __LINE__);
            }
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Add item to PictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesRequestType
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
