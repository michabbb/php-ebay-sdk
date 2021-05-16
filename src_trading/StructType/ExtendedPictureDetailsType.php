<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedPictureDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
 * @subpackage Structs
 */
class ExtendedPictureDetailsType extends AbstractStructBase
{
    /**
     * The PictureURLs
     * Meta information extracted from the WSDL
     * - documentation: This container returns the <b>eBayPictureURL</b> (images hosted by eBay Picture Services) and the <b>ExternalPictureURL</b> (images hosted outside of eBay) fields.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureURLsType[]
     */
    protected array $PictureURLs = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ExtendedPictureDetailsType
     * @uses ExtendedPictureDetailsType::setPictureURLs()
     * @uses ExtendedPictureDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PictureURLsType[] $pictureURLs
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $pictureURLs = [], $any = null)
    {
        $this
            ->setPictureURLs($pictureURLs)
            ->setAny($any);
    }
    /**
     * Get PictureURLs value
     * @return \macropage\ebaysdk\trading\StructType\PictureURLsType[]
     */
    public function getPictureURLs(): array
    {
        return $this->PictureURLs;
    }
    /**
     * This method is responsible for validating the values passed to the setPictureURLs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictureURLs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureURLsForArrayConstraintsFromSetPictureURLs(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $extendedPictureDetailsTypePictureURLsItem) {
            // validation for constraint: itemType
            if (!$extendedPictureDetailsTypePictureURLsItem instanceof \macropage\ebaysdk\trading\StructType\PictureURLsType) {
                $invalidValues[] = is_object($extendedPictureDetailsTypePictureURLsItem) ? get_class($extendedPictureDetailsTypePictureURLsItem) : sprintf('%s(%s)', gettype($extendedPictureDetailsTypePictureURLsItem), var_export($extendedPictureDetailsTypePictureURLsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PictureURLs property can only contain items of type \macropage\ebaysdk\trading\StructType\PictureURLsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PictureURLs value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureURLsType[] $pictureURLs
     * @return \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType
     */
    public function setPictureURLs(array $pictureURLs = []): self
    {
        // validation for constraint: array
        if ('' !== ($pictureURLsArrayErrorMessage = self::validatePictureURLsForArrayConstraintsFromSetPictureURLs($pictureURLs))) {
            throw new InvalidArgumentException($pictureURLsArrayErrorMessage, __LINE__);
        }
        $this->PictureURLs = $pictureURLs;
        
        return $this;
    }
    /**
     * Add item to PictureURLs value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureURLsType $item
     * @return \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType
     */
    public function addToPictureURLs(\macropage\ebaysdk\trading\StructType\PictureURLsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PictureURLsType) {
            throw new InvalidArgumentException(sprintf('The PictureURLs property can only contain items of type \macropage\ebaysdk\trading\StructType\PictureURLsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PictureURLs[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ExtendedPictureDetailsType
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
