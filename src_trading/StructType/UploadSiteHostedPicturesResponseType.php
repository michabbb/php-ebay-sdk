<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadSiteHostedPicturesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about a picture upload (i.e., information about a picture upload containing a binary attachment of an image).
 * @subpackage Structs
 */
class UploadSiteHostedPicturesResponseType extends AbstractResponseType
{
    /**
     * The PictureSystemVersion
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the picture system version that was used to upload pictures. Only version 2 is valid.
     * - minOccurs: 0
     * @var int
     */
    public $PictureSystemVersion;
    /**
     * The SiteHostedPictureDetails
     * Meta informations extracted from the WSDL
     * - documentation: The information about an <b>UploadSiteHostedPictures</b> upload, including the URL of the uploaded picture.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public $SiteHostedPictureDetails;
    /**
     * Constructor method for UploadSiteHostedPicturesResponseType
     * @uses UploadSiteHostedPicturesResponseType::setPictureSystemVersion()
     * @uses UploadSiteHostedPicturesResponseType::setSiteHostedPictureDetails()
     * @param int $pictureSystemVersion
     * @param \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails
     */
    public function __construct($pictureSystemVersion = null, \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails = null)
    {
        $this
            ->setPictureSystemVersion($pictureSystemVersion)
            ->setSiteHostedPictureDetails($siteHostedPictureDetails);
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
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesResponseType
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
     * Get SiteHostedPictureDetails value
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType|null
     */
    public function getSiteHostedPictureDetails()
    {
        return $this->SiteHostedPictureDetails;
    }
    /**
     * Set SiteHostedPictureDetails value
     * @param \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesResponseType
     */
    public function setSiteHostedPictureDetails(\macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails = null)
    {
        $this->SiteHostedPictureDetails = $siteHostedPictureDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesResponseType
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
