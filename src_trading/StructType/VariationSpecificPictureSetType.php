<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationSpecificPictureSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>VariationSpecificPictureSet</b> container, which is used to specify the URL(s) where the picture(s) of the variation specific will be hosted. If the <b>Variations.Pictures</b> container is used, at least one
 * <b>VariationSpecificPictureSet</b> container is required.
 * @subpackage Structs
 */
class VariationSpecificPictureSetType extends AbstractStructBase
{
    /**
     * The VariationSpecificValue
     * Meta information extracted from the WSDL
     * - documentation: A value that is associated with <b>VariationSpecificName</b>. For example, suppose this set of pictures is showing blue shirts, and some of the variations include Color=Blue in their variation specifics. If
     * <b>VariationSpecificName</b> is <code>Color </code>, then <b>VariationSpecificValue</b> would be <code>Blue</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VariationSpecificValue = null;
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of a picture that is associated with the <b>VariationSpecificValue</b>. A variation specific picture set can consist of up to 12 self-hosted or eBay Picture Services (EPS) hosted pictures. eBay Picture Services and
     * self-hosted images can never be combined into the same variation specific picture set. To specify more than one image, use multiple <b>PictureURL</b> fields, passing in a distinct URL in each of those fields. This field cannot have an empty/null
     * value. The <b>UploadSiteHostedPictures</b> call can be used to upload pictures to EPS. Note that if pictures are externally-hosted, they must be hosted on a site that is using the 'https' protocol. <br><br> The image specified in the first
     * <b>PictureURL</b> field is also used as the thumbnail image for applicable variations. For example, if the picture set contains pictures of red shirts (i.e., VariationSpecificName=Color and VariationSpecificValue=Red), the first picture is used as
     * the thumbnail image for all the red shirt variations. <br/><br/> <span class="tablenote"><b>Note: </b> All images, whether they are hosted by EPS or self-hosted, must comply with eBay picture requirements, including the requirement that all images
     * must be at least 500 pixels on its longest side. If the image does not satisfy the 500 pixels requirement, the listing may be blocked. For more information about other requirements and tips for adding pictures to listings, see the <a
     * href="https://www.ebay.com/help/selling/listings/adding-pictures-listings?id=4148">Adding pictures to your listings</a> help page. </span> You can use Item.PictureDetails to specify additional pictures. For example, the item-level pictures could
     * include a model wearing a black shirt, as a typical example of the shirt style. <br><br> <span class="tablenote"><b>Note:</b> If a URL contains spaces, those spaces can be replaced with <code>%20</code>. For example, <code>https://example.com/my
     * image.jpg</code> must be submitted as <code>https://example.com/my%20image.jpg</code> to replace the space in the image file name. However, a semicolon character (;) cannot be replaced with <code>%20</code>, so a semicolon cannot be a part of the
     * URL, as an error will occur. </span> Variation pictures cannot be added or removed from a fixed-price listing when the listing is scheduled to end within 12 hours or if the item variation has already had transactions. <br/><br/> <span
     * class="tablenote"> <strong>Note:</strong> For some large merchants, there are no limitations on when variation pictures can be added or removed from a fixed-price listing, even when the item variation has had transactions or is set to end within 12
     * hours. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $PictureURL = [];
    /**
     * The GalleryURL
     * Meta information extracted from the WSDL
     * - documentation: No longer used.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GalleryURL = null;
    /**
     * The ExternalPictureURL
     * Meta information extracted from the WSDL
     * - documentation: Returns the URL of a variation-specific picture that is hosted outside of eBay.<br> <br> When you list, revise, or relist a variation, use VariationSpecificPictureSet.PictureURL (not ExternalPictureURL) to specify your self-hosted
     * picture or EPS picture.<br> <br/> <span class="tablenote"><b>Note: </b> All images must comply to the <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-Intro.html">Picture Requirements</a>. </span>
     * This is returned only when the seller used a self-hosted picture for the variation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $ExternalPictureURL = [];
    /**
     * The ExtendedPictureDetails
     * Meta information extracted from the WSDL
     * - documentation: Returns the URLs of the seller's self-hosted (hosted outside of eBay) variation specific pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType $ExtendedPictureDetails = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $variationSpecificValue = null, array $pictureURL = [], ?string $galleryURL = null, array $externalPictureURL = [], ?\macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType $extendedPictureDetails = null, $any = null)
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
    public function getVariationSpecificValue(): ?string
    {
        return $this->VariationSpecificValue;
    }
    /**
     * Set VariationSpecificValue value
     * @param string $variationSpecificValue
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
     */
    public function setVariationSpecificValue(?string $variationSpecificValue = null): self
    {
        // validation for constraint: string
        if (!is_null($variationSpecificValue) && !is_string($variationSpecificValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variationSpecificValue, true), gettype($variationSpecificValue)), __LINE__);
        }
        $this->VariationSpecificValue = $variationSpecificValue;
        
        return $this;
    }
    /**
     * Get PictureURL value
     * @return string[]
     */
    public function getPictureURL(): array
    {
        return $this->PictureURL;
    }
    /**
     * This method is responsible for validating the values passed to the setPictureURL method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictureURL method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureURLForArrayConstraintsFromSetPictureURL(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $variationSpecificPictureSetTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($variationSpecificPictureSetTypePictureURLItem)) {
                $invalidValues[] = is_object($variationSpecificPictureSetTypePictureURLItem) ? get_class($variationSpecificPictureSetTypePictureURLItem) : sprintf('%s(%s)', gettype($variationSpecificPictureSetTypePictureURLItem), var_export($variationSpecificPictureSetTypePictureURLItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PictureURL property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PictureURL value
     * @throws InvalidArgumentException
     * @param string[] $pictureURL
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
     */
    public function setPictureURL(array $pictureURL = []): self
    {
        // validation for constraint: array
        if ('' !== ($pictureURLArrayErrorMessage = self::validatePictureURLForArrayConstraintsFromSetPictureURL($pictureURL))) {
            throw new InvalidArgumentException($pictureURLArrayErrorMessage, __LINE__);
        }
        $this->PictureURL = $pictureURL;
        
        return $this;
    }
    /**
     * Add item to PictureURL value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
     */
    public function addToPictureURL(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The PictureURL property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PictureURL[] = $item;
        
        return $this;
    }
    /**
     * Get GalleryURL value
     * @return string|null
     */
    public function getGalleryURL(): ?string
    {
        return $this->GalleryURL;
    }
    /**
     * Set GalleryURL value
     * @param string $galleryURL
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
     */
    public function setGalleryURL(?string $galleryURL = null): self
    {
        // validation for constraint: string
        if (!is_null($galleryURL) && !is_string($galleryURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($galleryURL, true), gettype($galleryURL)), __LINE__);
        }
        $this->GalleryURL = $galleryURL;
        
        return $this;
    }
    /**
     * Get ExternalPictureURL value
     * @return string[]
     */
    public function getExternalPictureURL(): array
    {
        return $this->ExternalPictureURL;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalPictureURL method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalPictureURL method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalPictureURLForArrayConstraintsFromSetExternalPictureURL(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $variationSpecificPictureSetTypeExternalPictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($variationSpecificPictureSetTypeExternalPictureURLItem)) {
                $invalidValues[] = is_object($variationSpecificPictureSetTypeExternalPictureURLItem) ? get_class($variationSpecificPictureSetTypeExternalPictureURLItem) : sprintf('%s(%s)', gettype($variationSpecificPictureSetTypeExternalPictureURLItem), var_export($variationSpecificPictureSetTypeExternalPictureURLItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalPictureURL property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalPictureURL value
     * @throws InvalidArgumentException
     * @param string[] $externalPictureURL
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
     */
    public function setExternalPictureURL(array $externalPictureURL = []): self
    {
        // validation for constraint: array
        if ('' !== ($externalPictureURLArrayErrorMessage = self::validateExternalPictureURLForArrayConstraintsFromSetExternalPictureURL($externalPictureURL))) {
            throw new InvalidArgumentException($externalPictureURLArrayErrorMessage, __LINE__);
        }
        $this->ExternalPictureURL = $externalPictureURL;
        
        return $this;
    }
    /**
     * Add item to ExternalPictureURL value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
     */
    public function addToExternalPictureURL(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ExternalPictureURL property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalPictureURL[] = $item;
        
        return $this;
    }
    /**
     * Get ExtendedPictureDetails value
     * @return \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType|null
     */
    public function getExtendedPictureDetails(): ?\macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType
    {
        return $this->ExtendedPictureDetails;
    }
    /**
     * Set ExtendedPictureDetails value
     * @param \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType $extendedPictureDetails
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
     */
    public function setExtendedPictureDetails(?\macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType $extendedPictureDetails = null): self
    {
        $this->ExtendedPictureDetails = $extendedPictureDetails;
        
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
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType
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
