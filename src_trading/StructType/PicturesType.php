<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PicturesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines variation-specific pictures associated with one <b>VariationSpecificName</b> (e.g., Color) whose values differ across variations.
 * @subpackage Structs
 */
class PicturesType extends AbstractStructBase
{
    /**
     * The VariationSpecificName
     * Meta information extracted from the WSDL
     * - documentation: One aspect of the variations that will be illustrated in the pictures for all variations. For example, if each variation is visually distinguished by color and the pictures show the different colors available, then specify "Color" as
     * the name. The name must match one of the names specified in the <b>VariationSpecifics</b> container. <br><br> This field is required in each <b>Item.Variations.Pictures</b> container that is used. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VariationSpecificName = null;
    /**
     * The VariationSpecificPictureSet
     * Meta information extracted from the WSDL
     * - documentation: A container consisting of one or more picture URLs associated with a variation specific value (e.g., color=blue). For example, suppose a listing contains blue and black color variations, and <b>VariationSpecificName=Color</b>. In
     * this case, one picture set could contain pictures of the blue shirts (e.g., front view, back view, and close-up of a trim detail), and another picture set could contain pictures of the black shirts. <br><br> A variation specific picture set can
     * consist of up to 12 images hosted by eBay Picture Services (EPS) or self-hosted (hosted outside of eBay) pictures. The eBay Picture Services and self-hosted images can never be combined into the same variation specific picture set. <br><br> At least
     * one picture set is required if the <b>Pictures</b> node is present in the request. You are not required to provide pictures for all values that correspond to the variation specific name. For example, a listing could have pictures depicting the blue
     * and black color variations, but not the pink variations. <br/><br/> <span class="tablenote"><b>Note: </b> All images must comply with the <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/Pictures-Intro.html">Picture Requirements</a>. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType[]
     */
    protected ?array $VariationSpecificPictureSet = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PicturesType
     * @uses PicturesType::setVariationSpecificName()
     * @uses PicturesType::setVariationSpecificPictureSet()
     * @uses PicturesType::setAny()
     * @param string $variationSpecificName
     * @param \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType[] $variationSpecificPictureSet
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $variationSpecificName = null, ?array $variationSpecificPictureSet = null, $any = null)
    {
        $this
            ->setVariationSpecificName($variationSpecificName)
            ->setVariationSpecificPictureSet($variationSpecificPictureSet)
            ->setAny($any);
    }
    /**
     * Get VariationSpecificName value
     * @return string|null
     */
    public function getVariationSpecificName(): ?string
    {
        return $this->VariationSpecificName;
    }
    /**
     * Set VariationSpecificName value
     * @param string $variationSpecificName
     * @return \macropage\ebaysdk\trading\StructType\PicturesType
     */
    public function setVariationSpecificName(?string $variationSpecificName = null): self
    {
        // validation for constraint: string
        if (!is_null($variationSpecificName) && !is_string($variationSpecificName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variationSpecificName, true), gettype($variationSpecificName)), __LINE__);
        }
        $this->VariationSpecificName = $variationSpecificName;
        
        return $this;
    }
    /**
     * Get VariationSpecificPictureSet value
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType[]
     */
    public function getVariationSpecificPictureSet(): ?array
    {
        return $this->VariationSpecificPictureSet;
    }
    /**
     * This method is responsible for validating the values passed to the setVariationSpecificPictureSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariationSpecificPictureSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariationSpecificPictureSetForArrayConstraintsFromSetVariationSpecificPictureSet(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $picturesTypeVariationSpecificPictureSetItem) {
            // validation for constraint: itemType
            if (!$picturesTypeVariationSpecificPictureSetItem instanceof \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType) {
                $invalidValues[] = is_object($picturesTypeVariationSpecificPictureSetItem) ? get_class($picturesTypeVariationSpecificPictureSetItem) : sprintf('%s(%s)', gettype($picturesTypeVariationSpecificPictureSetItem), var_export($picturesTypeVariationSpecificPictureSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VariationSpecificPictureSet property can only contain items of type \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VariationSpecificPictureSet value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType[] $variationSpecificPictureSet
     * @return \macropage\ebaysdk\trading\StructType\PicturesType
     */
    public function setVariationSpecificPictureSet(?array $variationSpecificPictureSet = null): self
    {
        // validation for constraint: array
        if ('' !== ($variationSpecificPictureSetArrayErrorMessage = self::validateVariationSpecificPictureSetForArrayConstraintsFromSetVariationSpecificPictureSet($variationSpecificPictureSet))) {
            throw new InvalidArgumentException($variationSpecificPictureSetArrayErrorMessage, __LINE__);
        }
        $this->VariationSpecificPictureSet = $variationSpecificPictureSet;
        
        return $this;
    }
    /**
     * Add item to VariationSpecificPictureSet value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType $item
     * @return \macropage\ebaysdk\trading\StructType\PicturesType
     */
    public function addToVariationSpecificPictureSet(\macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType) {
            throw new InvalidArgumentException(sprintf('The VariationSpecificPictureSet property can only contain items of type \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VariationSpecificPictureSet[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PicturesType
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
