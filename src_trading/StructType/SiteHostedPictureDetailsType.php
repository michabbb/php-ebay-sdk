<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteHostedPictureDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SiteHostedPictureDetails</b> container that is returned in an <b>UploadSiteHostedPictures</b> call.
 * @subpackage Structs
 */
class SiteHostedPictureDetailsType extends AbstractStructBase
{
    /**
     * The PictureName
     * Meta informations extracted from the WSDL
     * - documentation: The seller-defined name for the picture. This field is only returned if a <b>PictureName</b> value was specified in the request. A name for a picture can make it easier to track than an arbitrary, eBay-assigned URL.
     * - minOccurs: 0
     * @var string
     */
    public $PictureName;
    /**
     * The PictureSet
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the size of the generated picture. This value may differ from the one specified in the request (e.g. if a Supersize image cannot be generated).
     * - minOccurs: 0
     * @var string
     */
    public $PictureSet;
    /**
     * The PictureFormat
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the image format of the generated image, such as JPG, GIF, or PNG.
     * - minOccurs: 0
     * @var string
     */
    public $PictureFormat;
    /**
     * The FullURL
     * Meta informations extracted from the WSDL
     * - documentation: This is the full URL for the uploaded picture on the EPS server. This value should be stored by the seller, as this URL will be needed when create, revise, or relist an item and add this image to the listing. This URL will also be
     * needed for unpublished pictures whose expiration date must be extended through an <b>ExtendSiteHostedPictures</b> call.
     * - minOccurs: 0
     * @var string
     */
    public $FullURL;
    /**
     * The BaseURL
     * Meta informations extracted from the WSDL
     * - documentation: This is the truncated version of the full URL.
     * - minOccurs: 0
     * @var string
     */
    public $BaseURL;
    /**
     * The PictureSetMember
     * Meta informations extracted from the WSDL
     * - documentation: The URL and size information for each generated image.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureSetMemberType[]
     */
    public $PictureSetMember;
    /**
     * The ExternalPictureURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of the external Web site hosting the uploaded photo. This field is returned if an <b>ExternalPictureURL</b> is provided in the call request. <br>
     * - minOccurs: 0
     * @var string
     */
    public $ExternalPictureURL;
    /**
     * The UseByDate
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates when the picture must be uploaded with an eBay listing before it is purged from the EPS server. <br> <br> By default, unpublished pictures (not associated with an active eBay listing) are kept on the EPS
     * server for five days, but a seller can use the <b>ExtensionInDays</b> field in the request to make the expiration date further into the future (a maximum of 30 days). The seller can also use the <b>ExtendSiteHostedPictures</b> to extend the
     * expiration date of the picture.
     * - minOccurs: 0
     * @var string
     */
    public $UseByDate;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SiteHostedPictureDetailsType
     * @uses SiteHostedPictureDetailsType::setPictureName()
     * @uses SiteHostedPictureDetailsType::setPictureSet()
     * @uses SiteHostedPictureDetailsType::setPictureFormat()
     * @uses SiteHostedPictureDetailsType::setFullURL()
     * @uses SiteHostedPictureDetailsType::setBaseURL()
     * @uses SiteHostedPictureDetailsType::setPictureSetMember()
     * @uses SiteHostedPictureDetailsType::setExternalPictureURL()
     * @uses SiteHostedPictureDetailsType::setUseByDate()
     * @uses SiteHostedPictureDetailsType::setAny()
     * @param string $pictureName
     * @param string $pictureSet
     * @param string $pictureFormat
     * @param string $fullURL
     * @param string $baseURL
     * @param \macropage\ebaysdk\trading\StructType\PictureSetMemberType[] $pictureSetMember
     * @param string $externalPictureURL
     * @param string $useByDate
     * @param \DOMDocument $any
     */
    public function __construct($pictureName = null, $pictureSet = null, $pictureFormat = null, $fullURL = null, $baseURL = null, array $pictureSetMember = array(), $externalPictureURL = null, $useByDate = null, \DOMDocument $any = null)
    {
        $this
            ->setPictureName($pictureName)
            ->setPictureSet($pictureSet)
            ->setPictureFormat($pictureFormat)
            ->setFullURL($fullURL)
            ->setBaseURL($baseURL)
            ->setPictureSetMember($pictureSetMember)
            ->setExternalPictureURL($externalPictureURL)
            ->setUseByDate($useByDate)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
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
     * Get PictureFormat value
     * @return string|null
     */
    public function getPictureFormat()
    {
        return $this->PictureFormat;
    }
    /**
     * Set PictureFormat value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureFormatCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureFormatCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pictureFormat
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setPictureFormat($pictureFormat = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureFormatCodeType::valueIsValid($pictureFormat)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pictureFormat, implode(', ', \macropage\ebaysdk\trading\EnumType\PictureFormatCodeType::getValidValues())), __LINE__);
        }
        $this->PictureFormat = $pictureFormat;
        return $this;
    }
    /**
     * Get FullURL value
     * @return string|null
     */
    public function getFullURL()
    {
        return $this->FullURL;
    }
    /**
     * Set FullURL value
     * @param string $fullURL
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setFullURL($fullURL = null)
    {
        // validation for constraint: string
        if (!is_null($fullURL) && !is_string($fullURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fullURL)), __LINE__);
        }
        $this->FullURL = $fullURL;
        return $this;
    }
    /**
     * Get BaseURL value
     * @return string|null
     */
    public function getBaseURL()
    {
        return $this->BaseURL;
    }
    /**
     * Set BaseURL value
     * @param string $baseURL
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setBaseURL($baseURL = null)
    {
        // validation for constraint: string
        if (!is_null($baseURL) && !is_string($baseURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baseURL)), __LINE__);
        }
        $this->BaseURL = $baseURL;
        return $this;
    }
    /**
     * Get PictureSetMember value
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType[]|null
     */
    public function getPictureSetMember()
    {
        return $this->PictureSetMember;
    }
    /**
     * Set PictureSetMember value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureSetMemberType[] $pictureSetMember
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setPictureSetMember(array $pictureSetMember = array())
    {
        foreach ($pictureSetMember as $siteHostedPictureDetailsTypePictureSetMemberItem) {
            // validation for constraint: itemType
            if (!$siteHostedPictureDetailsTypePictureSetMemberItem instanceof \macropage\ebaysdk\trading\StructType\PictureSetMemberType) {
                throw new \InvalidArgumentException(sprintf('The PictureSetMember property can only contain items of \macropage\ebaysdk\trading\StructType\PictureSetMemberType, "%s" given', is_object($siteHostedPictureDetailsTypePictureSetMemberItem) ? get_class($siteHostedPictureDetailsTypePictureSetMemberItem) : gettype($siteHostedPictureDetailsTypePictureSetMemberItem)), __LINE__);
            }
        }
        $this->PictureSetMember = $pictureSetMember;
        return $this;
    }
    /**
     * Add item to PictureSetMember value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureSetMemberType $item
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function addToPictureSetMember(\macropage\ebaysdk\trading\StructType\PictureSetMemberType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PictureSetMemberType) {
            throw new \InvalidArgumentException(sprintf('The PictureSetMember property can only contain items of \macropage\ebaysdk\trading\StructType\PictureSetMemberType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PictureSetMember[] = $item;
        return $this;
    }
    /**
     * Get ExternalPictureURL value
     * @return string|null
     */
    public function getExternalPictureURL()
    {
        return $this->ExternalPictureURL;
    }
    /**
     * Set ExternalPictureURL value
     * @param string $externalPictureURL
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setExternalPictureURL($externalPictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($externalPictureURL) && !is_string($externalPictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalPictureURL)), __LINE__);
        }
        $this->ExternalPictureURL = $externalPictureURL;
        return $this;
    }
    /**
     * Get UseByDate value
     * @return string|null
     */
    public function getUseByDate()
    {
        return $this->UseByDate;
    }
    /**
     * Set UseByDate value
     * @param string $useByDate
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setUseByDate($useByDate = null)
    {
        // validation for constraint: string
        if (!is_null($useByDate) && !is_string($useByDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($useByDate)), __LINE__);
        }
        $this->UseByDate = $useByDate;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
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
