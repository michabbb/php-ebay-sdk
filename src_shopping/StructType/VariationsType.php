<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Variations are multiple similar (but not identical) items in a single fixed-price listing. For example, a single listing could contain multiple items of the same brand and model that vary by color and size (like "Blue, Large" and
 * "Black, Medium"). Each variation can have its own quantity and price. For example, a listing could include 10 "Blue, Large" variations and 20 "Black, Medium" variations.
 * @subpackage Structs
 */
class VariationsType extends AbstractStructBase
{
    /**
     * The Variation
     * Meta information extracted from the WSDL
     * - documentation: Contains data that distinguishes one variation from another. For example, if the items vary by color and size, each Variation node specifies a combination of one of those colors and sizes. The quantity and price for each variation is
     * also shown in the <b>Variation</b> container
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\VariationType[]
     */
    protected array $Variation = [];
    /**
     * The Pictures
     * Meta information extracted from the WSDL
     * - documentation: Contains a set of pictures that correspond to one of the variation specifics, such as 'Color'. For example, if a listing has blue and black color variations, a listing could specify the name 'Color' as an organizing mechanism for all
     * the pictures, and then include a set of pictures for the blue variations and another set of pictures for the black variations.<br> <br> <span class="tablenote"><b>Note:</b> Only one Pictures node is currently returned for a listing. However, the node
     * has been defined as unbounded (repeatable) in the schema to allow for different use cases for some calls or sites in the future.</span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\PicturesType[]
     */
    protected array $Pictures = [];
    /**
     * The VariationSpecificsSet
     * Meta information extracted from the WSDL
     * - documentation: A list of all variation names and values that are defined on the item. This could include values that were previously defined (but no longer for sale).<br> <br> eBay uses this list to configure variation selection widgets that appear
     * on eBay's View Item page. For example, if 'Color' and 'Size' are names in the list, then eBay's View Item page displays Color and Size drop-down lists to help a buyer choose a variation of interest.<br> <br> The order in which the names and values
     * are returned matches the order in which the selection widgets appear on the View Item page. For example, if the names "Color", then "Size", and then "Sleeve Style" are returned, the View Item page shows drop-down lists with those labels in that
     * order. For "Size", if the values returned are "S", "M", and then "L", the View Item page shows the values in that order in the Size drop-down list.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    protected ?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $VariationSpecificsSet = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for VariationsType
     * @uses VariationsType::setVariation()
     * @uses VariationsType::setPictures()
     * @uses VariationsType::setVariationSpecificsSet()
     * @uses VariationsType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\VariationType[] $variation
     * @param \macropage\ebaysdk\shopping\StructType\PicturesType[] $pictures
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecificsSet
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $variation = [], array $pictures = [], ?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecificsSet = null, $any = null)
    {
        $this
            ->setVariation($variation)
            ->setPictures($pictures)
            ->setVariationSpecificsSet($variationSpecificsSet)
            ->setAny($any);
    }
    /**
     * Get Variation value
     * @return \macropage\ebaysdk\shopping\StructType\VariationType[]
     */
    public function getVariation(): array
    {
        return $this->Variation;
    }
    /**
     * This method is responsible for validating the values passed to the setVariation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariationForArrayConstraintsFromSetVariation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $variationsTypeVariationItem) {
            // validation for constraint: itemType
            if (!$variationsTypeVariationItem instanceof \macropage\ebaysdk\shopping\StructType\VariationType) {
                $invalidValues[] = is_object($variationsTypeVariationItem) ? get_class($variationsTypeVariationItem) : sprintf('%s(%s)', gettype($variationsTypeVariationItem), var_export($variationsTypeVariationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Variation property can only contain items of type \macropage\ebaysdk\shopping\StructType\VariationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Variation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\VariationType[] $variation
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public function setVariation(array $variation = []): self
    {
        // validation for constraint: array
        if ('' !== ($variationArrayErrorMessage = self::validateVariationForArrayConstraintsFromSetVariation($variation))) {
            throw new InvalidArgumentException($variationArrayErrorMessage, __LINE__);
        }
        $this->Variation = $variation;
        
        return $this;
    }
    /**
     * Add item to Variation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\VariationType $item
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public function addToVariation(\macropage\ebaysdk\shopping\StructType\VariationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\VariationType) {
            throw new InvalidArgumentException(sprintf('The Variation property can only contain items of type \macropage\ebaysdk\shopping\StructType\VariationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Variation[] = $item;
        
        return $this;
    }
    /**
     * Get Pictures value
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType[]
     */
    public function getPictures(): array
    {
        return $this->Pictures;
    }
    /**
     * This method is responsible for validating the values passed to the setPictures method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictures method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePicturesForArrayConstraintsFromSetPictures(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $variationsTypePicturesItem) {
            // validation for constraint: itemType
            if (!$variationsTypePicturesItem instanceof \macropage\ebaysdk\shopping\StructType\PicturesType) {
                $invalidValues[] = is_object($variationsTypePicturesItem) ? get_class($variationsTypePicturesItem) : sprintf('%s(%s)', gettype($variationsTypePicturesItem), var_export($variationsTypePicturesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pictures property can only contain items of type \macropage\ebaysdk\shopping\StructType\PicturesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Pictures value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\PicturesType[] $pictures
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public function setPictures(array $pictures = []): self
    {
        // validation for constraint: array
        if ('' !== ($picturesArrayErrorMessage = self::validatePicturesForArrayConstraintsFromSetPictures($pictures))) {
            throw new InvalidArgumentException($picturesArrayErrorMessage, __LINE__);
        }
        $this->Pictures = $pictures;
        
        return $this;
    }
    /**
     * Add item to Pictures value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\PicturesType $item
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public function addToPictures(\macropage\ebaysdk\shopping\StructType\PicturesType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\PicturesType) {
            throw new InvalidArgumentException(sprintf('The Pictures property can only contain items of type \macropage\ebaysdk\shopping\StructType\PicturesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pictures[] = $item;
        
        return $this;
    }
    /**
     * Get VariationSpecificsSet value
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecificsSet(): ?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
    {
        return $this->VariationSpecificsSet;
    }
    /**
     * Set VariationSpecificsSet value
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecificsSet
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public function setVariationSpecificsSet(?\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecificsSet = null): self
    {
        $this->VariationSpecificsSet = $variationSpecificsSet;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
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
