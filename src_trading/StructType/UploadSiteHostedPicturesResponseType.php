<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadSiteHostedPicturesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a picture upload (i.e., information about a picture upload containing a binary attachment of an image).
 * @subpackage Structs
 */
class UploadSiteHostedPicturesResponseType extends AbstractResponseType
{
    /**
     * The PictureSystemVersion
     * Meta information extracted from the WSDL
     * - documentation: Specifies the picture system version that was used to upload pictures. Only version 2 is valid.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PictureSystemVersion = null;
    /**
     * The SiteHostedPictureDetails
     * Meta information extracted from the WSDL
     * - documentation: The information about an <b>UploadSiteHostedPictures</b> upload, including the URL of the uploaded picture.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType $SiteHostedPictureDetails = null;
    /**
     * Constructor method for UploadSiteHostedPicturesResponseType
     * @uses UploadSiteHostedPicturesResponseType::setPictureSystemVersion()
     * @uses UploadSiteHostedPicturesResponseType::setSiteHostedPictureDetails()
     * @param int $pictureSystemVersion
     * @param \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails
     */
    public function __construct(?int $pictureSystemVersion = null, ?\macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails = null)
    {
        $this
            ->setPictureSystemVersion($pictureSystemVersion)
            ->setSiteHostedPictureDetails($siteHostedPictureDetails);
    }
    /**
     * Get PictureSystemVersion value
     * @return int|null
     */
    public function getPictureSystemVersion(): ?int
    {
        return $this->PictureSystemVersion;
    }
    /**
     * Set PictureSystemVersion value
     * @param int $pictureSystemVersion
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesResponseType
     */
    public function setPictureSystemVersion(?int $pictureSystemVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($pictureSystemVersion) && !(is_int($pictureSystemVersion) || ctype_digit($pictureSystemVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pictureSystemVersion, true), gettype($pictureSystemVersion)), __LINE__);
        }
        $this->PictureSystemVersion = $pictureSystemVersion;
        
        return $this;
    }
    /**
     * Get SiteHostedPictureDetails value
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType|null
     */
    public function getSiteHostedPictureDetails(): ?\macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
    {
        return $this->SiteHostedPictureDetails;
    }
    /**
     * Set SiteHostedPictureDetails value
     * @param \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails
     * @return \macropage\ebaysdk\trading\StructType\UploadSiteHostedPicturesResponseType
     */
    public function setSiteHostedPictureDetails(?\macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType $siteHostedPictureDetails = null): self
    {
        $this->SiteHostedPictureDetails = $siteHostedPictureDetails;
        
        return $this;
    }
}
