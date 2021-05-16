<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteHostedPictureDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SiteHostedPictureDetails</b> container that is returned in an <b>UploadSiteHostedPictures</b> call.
 * @subpackage Structs
 */
class SiteHostedPictureDetailsType extends AbstractStructBase
{
    /**
     * The PictureName
     * Meta information extracted from the WSDL
     * - documentation: The seller-defined name for the picture. This field is only returned if a <b>PictureName</b> value was specified in the request. A name for a picture can make it easier to track than an arbitrary, eBay-assigned URL.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PictureName = null;
    /**
     * The PictureSet
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the size of the generated picture. This value may differ from the one specified in the request (e.g. if a Supersize image cannot be generated).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PictureSet = null;
    /**
     * The PictureFormat
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the image format of the generated image, such as JPG, GIF, or PNG.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PictureFormat = null;
    /**
     * The FullURL
     * Meta information extracted from the WSDL
     * - documentation: This is the full URL for the uploaded picture on the EPS server. This value should be stored by the seller, as this URL will be needed when create, revise, or relist an item and add this image to the listing. This URL will also be
     * needed for unpublished pictures whose expiration date must be extended through an <b>ExtendSiteHostedPictures</b> call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FullURL = null;
    /**
     * The BaseURL
     * Meta information extracted from the WSDL
     * - documentation: This is the truncated version of the full URL.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BaseURL = null;
    /**
     * The PictureSetMember
     * Meta information extracted from the WSDL
     * - documentation: The URL and size information for each generated image.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureSetMemberType[]
     */
    protected array $PictureSetMember = [];
    /**
     * The ExternalPictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the external Web site hosting the uploaded photo. This field is returned if an <b>ExternalPictureURL</b> is provided in the call request. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalPictureURL = null;
    /**
     * The UseByDate
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates when the picture must be uploaded with an eBay listing before it is purged from the EPS server. <br> <br> By default, unpublished pictures (not associated with an active eBay listing) are kept on the EPS
     * server for five days, but a seller can use the <b>ExtensionInDays</b> field in the request to make the expiration date further into the future (a maximum of 30 days). The seller can also use the <b>ExtendSiteHostedPictures</b> to extend the
     * expiration date of the picture.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UseByDate = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $pictureName = null, ?string $pictureSet = null, ?string $pictureFormat = null, ?string $fullURL = null, ?string $baseURL = null, array $pictureSetMember = [], ?string $externalPictureURL = null, ?string $useByDate = null, $any = null)
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
    public function getPictureName(): ?string
    {
        return $this->PictureName;
    }
    /**
     * Set PictureName value
     * @param string $pictureName
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setPictureName(?string $pictureName = null): self
    {
        // validation for constraint: string
        if (!is_null($pictureName) && !is_string($pictureName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pictureName, true), gettype($pictureName)), __LINE__);
        }
        $this->PictureName = $pictureName;
        
        return $this;
    }
    /**
     * Get PictureSet value
     * @return string|null
     */
    public function getPictureSet(): ?string
    {
        return $this->PictureSet;
    }
    /**
     * Set PictureSet value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureSetCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureSetCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pictureSet
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setPictureSet(?string $pictureSet = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureSetCodeType::valueIsValid($pictureSet)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PictureSetCodeType', is_array($pictureSet) ? implode(', ', $pictureSet) : var_export($pictureSet, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PictureSetCodeType::getValidValues())), __LINE__);
        }
        $this->PictureSet = $pictureSet;
        
        return $this;
    }
    /**
     * Get PictureFormat value
     * @return string|null
     */
    public function getPictureFormat(): ?string
    {
        return $this->PictureFormat;
    }
    /**
     * Set PictureFormat value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureFormatCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureFormatCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pictureFormat
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setPictureFormat(?string $pictureFormat = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureFormatCodeType::valueIsValid($pictureFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PictureFormatCodeType', is_array($pictureFormat) ? implode(', ', $pictureFormat) : var_export($pictureFormat, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PictureFormatCodeType::getValidValues())), __LINE__);
        }
        $this->PictureFormat = $pictureFormat;
        
        return $this;
    }
    /**
     * Get FullURL value
     * @return string|null
     */
    public function getFullURL(): ?string
    {
        return $this->FullURL;
    }
    /**
     * Set FullURL value
     * @param string $fullURL
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setFullURL(?string $fullURL = null): self
    {
        // validation for constraint: string
        if (!is_null($fullURL) && !is_string($fullURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullURL, true), gettype($fullURL)), __LINE__);
        }
        $this->FullURL = $fullURL;
        
        return $this;
    }
    /**
     * Get BaseURL value
     * @return string|null
     */
    public function getBaseURL(): ?string
    {
        return $this->BaseURL;
    }
    /**
     * Set BaseURL value
     * @param string $baseURL
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setBaseURL(?string $baseURL = null): self
    {
        // validation for constraint: string
        if (!is_null($baseURL) && !is_string($baseURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseURL, true), gettype($baseURL)), __LINE__);
        }
        $this->BaseURL = $baseURL;
        
        return $this;
    }
    /**
     * Get PictureSetMember value
     * @return \macropage\ebaysdk\trading\StructType\PictureSetMemberType[]
     */
    public function getPictureSetMember(): array
    {
        return $this->PictureSetMember;
    }
    /**
     * This method is responsible for validating the values passed to the setPictureSetMember method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictureSetMember method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureSetMemberForArrayConstraintsFromSetPictureSetMember(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $siteHostedPictureDetailsTypePictureSetMemberItem) {
            // validation for constraint: itemType
            if (!$siteHostedPictureDetailsTypePictureSetMemberItem instanceof \macropage\ebaysdk\trading\StructType\PictureSetMemberType) {
                $invalidValues[] = is_object($siteHostedPictureDetailsTypePictureSetMemberItem) ? get_class($siteHostedPictureDetailsTypePictureSetMemberItem) : sprintf('%s(%s)', gettype($siteHostedPictureDetailsTypePictureSetMemberItem), var_export($siteHostedPictureDetailsTypePictureSetMemberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PictureSetMember property can only contain items of type \macropage\ebaysdk\trading\StructType\PictureSetMemberType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PictureSetMember value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureSetMemberType[] $pictureSetMember
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setPictureSetMember(array $pictureSetMember = []): self
    {
        // validation for constraint: array
        if ('' !== ($pictureSetMemberArrayErrorMessage = self::validatePictureSetMemberForArrayConstraintsFromSetPictureSetMember($pictureSetMember))) {
            throw new InvalidArgumentException($pictureSetMemberArrayErrorMessage, __LINE__);
        }
        $this->PictureSetMember = $pictureSetMember;
        
        return $this;
    }
    /**
     * Add item to PictureSetMember value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureSetMemberType $item
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function addToPictureSetMember(\macropage\ebaysdk\trading\StructType\PictureSetMemberType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PictureSetMemberType) {
            throw new InvalidArgumentException(sprintf('The PictureSetMember property can only contain items of type \macropage\ebaysdk\trading\StructType\PictureSetMemberType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PictureSetMember[] = $item;
        
        return $this;
    }
    /**
     * Get ExternalPictureURL value
     * @return string|null
     */
    public function getExternalPictureURL(): ?string
    {
        return $this->ExternalPictureURL;
    }
    /**
     * Set ExternalPictureURL value
     * @param string $externalPictureURL
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setExternalPictureURL(?string $externalPictureURL = null): self
    {
        // validation for constraint: string
        if (!is_null($externalPictureURL) && !is_string($externalPictureURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalPictureURL, true), gettype($externalPictureURL)), __LINE__);
        }
        $this->ExternalPictureURL = $externalPictureURL;
        
        return $this;
    }
    /**
     * Get UseByDate value
     * @return string|null
     */
    public function getUseByDate(): ?string
    {
        return $this->UseByDate;
    }
    /**
     * Set UseByDate value
     * @param string $useByDate
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setUseByDate(?string $useByDate = null): self
    {
        // validation for constraint: string
        if (!is_null($useByDate) && !is_string($useByDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($useByDate, true), gettype($useByDate)), __LINE__);
        }
        $this->UseByDate = $useByDate;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\SiteHostedPictureDetailsType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
