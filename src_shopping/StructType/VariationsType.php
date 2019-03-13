<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Variations are multiple similar (but not identical) items in a single fixed-price listing. For example, a single listing could contain multiple items of the same brand and model that vary by color and size (like "Blue, Large" and
 * "Black, Medium"). Each variation can have its own quantity and price. For example, a listing could include 10 "Blue, Large" variations and 20 "Black, Medium" variations.
 * @subpackage Structs
 */
class VariationsType extends AbstractStructBase
{
    /**
     * The Variation
     * Meta informations extracted from the WSDL
     * - documentation: Contains data that distinguishes one variation from another. For example, if the items vary by color and size, each Variation node specifies a combination of one of those colors and sizes. The quantity and price for each variation is
     * also shown in the <b>Variation</b> container
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\VariationType[]
     */
    public $Variation;
    /**
     * The Pictures
     * Meta informations extracted from the WSDL
     * - documentation: Contains a set of pictures that correspond to one of the variation specifics, such as 'Color'. For example, if a listing has blue and black color variations, a listing could specify the name 'Color' as an organizing mechanism for all
     * the pictures, and then include a set of pictures for the blue variations and another set of pictures for the black variations.<br> <br> <span class="tablenote"><b>Note:</b> Only one Pictures node is currently returned for a listing. However, the node
     * has been defined as unbounded (repeatable) in the schema to allow for different use cases for some calls or sites in the future.</span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\PicturesType[]
     */
    public $Pictures;
    /**
     * The VariationSpecificsSet
     * Meta informations extracted from the WSDL
     * - documentation: A list of all variation names and values that are defined on the item. This could include values that were previously defined (but no longer for sale).<br> <br> eBay uses this list to configure variation selection widgets that appear
     * on eBay's View Item page. For example, if 'Color' and 'Size' are names in the list, then eBay's View Item page displays Color and Size drop-down lists to help a buyer choose a variation of interest.<br> <br> The order in which the names and values
     * are returned matches the order in which the selection widgets appear on the View Item page. For example, if the names "Color", then "Size", and then "Sleeve Style" are returned, the View Item page shows drop-down lists with those labels in that
     * order. For "Size", if the values returned are "S", "M", and then "L", the View Item page shows the values in that order in the Size drop-down list.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType
     */
    public $VariationSpecificsSet;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VariationsType
     * @uses VariationsType::setVariation()
     * @uses VariationsType::setPictures()
     * @uses VariationsType::setVariationSpecificsSet()
     * @uses VariationsType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\VariationType[] $variation
     * @param \macropage\ebaysdk\shopping\StructType\PicturesType[] $pictures
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecificsSet
     * @param \DOMDocument $any
     */
    public function __construct(array $variation = array(), array $pictures = array(), \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecificsSet = null, \DOMDocument $any = null)
    {
        $this
            ->setVariation($variation)
            ->setPictures($pictures)
            ->setVariationSpecificsSet($variationSpecificsSet)
            ->setAny($any);
    }
    /**
     * Get Variation value
     * @return \macropage\ebaysdk\shopping\StructType\VariationType[]|null
     */
    public function getVariation()
    {
        return $this->Variation;
    }
    /**
     * Set Variation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\VariationType[] $variation
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public function setVariation(array $variation = array())
    {
        foreach ($variation as $variationsTypeVariationItem) {
            // validation for constraint: itemType
            if (!$variationsTypeVariationItem instanceof \macropage\ebaysdk\shopping\StructType\VariationType) {
                throw new \InvalidArgumentException(sprintf('The Variation property can only contain items of \macropage\ebaysdk\shopping\StructType\VariationType, "%s" given', is_object($variationsTypeVariationItem) ? get_class($variationsTypeVariationItem) : gettype($variationsTypeVariationItem)), __LINE__);
            }
        }
        $this->Variation = $variation;
        return $this;
    }
    /**
     * Add item to Variation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\VariationType $item
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public function addToVariation(\macropage\ebaysdk\shopping\StructType\VariationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\VariationType) {
            throw new \InvalidArgumentException(sprintf('The Variation property can only contain items of \macropage\ebaysdk\shopping\StructType\VariationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Variation[] = $item;
        return $this;
    }
    /**
     * Get Pictures value
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType[]|null
     */
    public function getPictures()
    {
        return $this->Pictures;
    }
    /**
     * Set Pictures value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\PicturesType[] $pictures
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public function setPictures(array $pictures = array())
    {
        foreach ($pictures as $variationsTypePicturesItem) {
            // validation for constraint: itemType
            if (!$variationsTypePicturesItem instanceof \macropage\ebaysdk\shopping\StructType\PicturesType) {
                throw new \InvalidArgumentException(sprintf('The Pictures property can only contain items of \macropage\ebaysdk\shopping\StructType\PicturesType, "%s" given', is_object($variationsTypePicturesItem) ? get_class($variationsTypePicturesItem) : gettype($variationsTypePicturesItem)), __LINE__);
            }
        }
        $this->Pictures = $pictures;
        return $this;
    }
    /**
     * Add item to Pictures value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\PicturesType $item
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public function addToPictures(\macropage\ebaysdk\shopping\StructType\PicturesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\PicturesType) {
            throw new \InvalidArgumentException(sprintf('The Pictures property can only contain items of \macropage\ebaysdk\shopping\StructType\PicturesType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Pictures[] = $item;
        return $this;
    }
    /**
     * Get VariationSpecificsSet value
     * @return \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecificsSet()
    {
        return $this->VariationSpecificsSet;
    }
    /**
     * Set VariationSpecificsSet value
     * @param \macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecificsSet
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
     */
    public function setVariationSpecificsSet(\macropage\ebaysdk\shopping\ArrayType\NameValueListArrayType $variationSpecificsSet = null)
    {
        $this->VariationSpecificsSet = $variationSpecificsSet;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\VariationsType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationsType
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
