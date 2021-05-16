<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationSpecificPictureSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: Complex type used by the <b>VariationSpecificPictureSet</b> container that is returned for multiple-variation listings, and gives the URL(s) to one or more of the listing's images. Images submitted for multiple-variation listings
 * must be based on the product aspect that is defined in the <b>Variations.Pictures.VariationSpecificName</b> field. This product aspect will often be 'Color', particularly when the listing features similar items available in different colors.
 * @subpackage Structs
 */
class VariationSpecificPictureSetType extends AbstractStructBase
{
    /**
     * The VariationSpecificValue
     * Meta information extracted from the WSDL
     * - documentation: This field shows the corresponding value of the product aspect that is shown in the the <b>Variations.Pictures.VariationSpecificName</b> field. For example, if the <b>Variations.Pictures.VariationSpecificName</b> value is 'Color',
     * the value in this field will be one of the values that is shown in the <b>Variations.VariationSpecificsSet.NameValueList</b> container. So, if the <b>Name</b> field of that <b>NameValueList</b> container was 'Color', the value in the
     * <b>VariationSpecificPictureSet.VariationSpecificValue</b> would have to be one of the defined colors for the multiple-variation listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VariationSpecificValue = null;
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL to one image of one variation of the multiple-variation listing. The image must be associated with the corresponding aspect name-value pair. So, if the corresponding <b>VariationSpecificName</b> value is 'Color', and the
     * corresponding <b>VariationSpecificValue</b> value is 'Space Grey', each URL returned under the corresponding <b>VariationSpecificPictureSet</b> container should point to a picture that display the item in that particular color. <br/><br/> The URL(s)
     * can point to an image (or images) stored on the eBay Picture Server, or it can be a URL to a self-hosted picture. Note that self-hosted pictures must be on a server that supports the 'https' protocol. <br/><br/> The first <b>PictureURL</b> shown in
     * the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $PictureURL = [];
    /**
     * The GalleryURL
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer returned. Note that the first <b>PictureURL</b> shown in the response is the URL that is used as the 'Gallery URL' for that particular product variation.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GalleryURL = null;
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
     * @uses VariationSpecificPictureSetType::setAny()
     * @param string $variationSpecificValue
     * @param string[] $pictureURL
     * @param string $galleryURL
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $variationSpecificValue = null, array $pictureURL = [], ?string $galleryURL = null, $any = null)
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
    public function getVariationSpecificValue(): ?string
    {
        return $this->VariationSpecificValue;
    }
    /**
     * Set VariationSpecificValue value
     * @param string $variationSpecificValue
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType
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
