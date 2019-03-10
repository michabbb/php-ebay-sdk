<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PicturesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines variation-specific pictures associated with one <b>VariationSpecificName</b> (e.g., Color) whose values differ across variations.
 * @subpackage Structs
 */
class PicturesType extends AbstractStructBase
{
    /**
     * The VariationSpecificName
     * Meta informations extracted from the WSDL
     * - documentation: One aspect of the variations that will be illustrated in the pictures for all variations. For example, if each variation is visually distinguished by color and the pictures show the different colors available, then specify "Color" as
     * the name. The name must match one of the names specified in the <b>VariationSpecifics</b> container. <br><br> This field is required in each <b>Item.Variations.Pictures</b> container that is used.
     * - minOccurs: 0
     * @var string
     */
    public $VariationSpecificName;
    /**
     * The VariationSpecificPictureSet
     * Meta informations extracted from the WSDL
     * - documentation: A container consisting of one or more picture URLs associated with a variation specific value (e.g., color=blue). For example, suppose a listing contains blue and black color variations, and <b>VariationSpecificName=Color</b>. In
     * this case, one picture set could contain pictures of the blue shirts (e.g., front view, back view, and close-up of a trim detail), and another picture set could contain pictures of the black shirts. <br><br> A variation specific picture set can
     * consist of up to 12 images hosted by eBay Picture Services (EPS) or self-hosted (hosted outside of eBay) pictures. The eBay Picture Services and self-hosted images can never be combined into the same variation specific picture set. <br><br> At least
     * one picture set is required if the <b>Pictures</b> node is present in the request. You are not required to provide pictures for all values that correspond to the variation specific name. For example, a listing could have pictures depicting the blue
     * and black color variations, but not the pink variations. <br/><br/> <span class="tablenote"><b>Note: </b> All images must comply with the <a href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Pictures-Intro.html">Picture
     * Requirements</a>. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType[]
     */
    public $VariationSpecificPictureSet;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PicturesType
     * @uses PicturesType::setVariationSpecificName()
     * @uses PicturesType::setVariationSpecificPictureSet()
     * @uses PicturesType::setAny()
     * @param string $variationSpecificName
     * @param \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType[] $variationSpecificPictureSet
     * @param \DOMDocument $any
     */
    public function __construct($variationSpecificName = null, array $variationSpecificPictureSet = array(), \DOMDocument $any = null)
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
    public function getVariationSpecificName()
    {
        return $this->VariationSpecificName;
    }
    /**
     * Set VariationSpecificName value
     * @param string $variationSpecificName
     * @return \macropage\ebaysdk\trading\StructType\PicturesType
     */
    public function setVariationSpecificName($variationSpecificName = null)
    {
        // validation for constraint: string
        if (!is_null($variationSpecificName) && !is_string($variationSpecificName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($variationSpecificName)), __LINE__);
        }
        $this->VariationSpecificName = $variationSpecificName;
        return $this;
    }
    /**
     * Get VariationSpecificPictureSet value
     * @return \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType[]|null
     */
    public function getVariationSpecificPictureSet()
    {
        return $this->VariationSpecificPictureSet;
    }
    /**
     * Set VariationSpecificPictureSet value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType[] $variationSpecificPictureSet
     * @return \macropage\ebaysdk\trading\StructType\PicturesType
     */
    public function setVariationSpecificPictureSet(array $variationSpecificPictureSet = array())
    {
        foreach ($variationSpecificPictureSet as $picturesTypeVariationSpecificPictureSetItem) {
            // validation for constraint: itemType
            if (!$picturesTypeVariationSpecificPictureSetItem instanceof \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType) {
                throw new \InvalidArgumentException(sprintf('The VariationSpecificPictureSet property can only contain items of \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType, "%s" given', is_object($picturesTypeVariationSpecificPictureSetItem) ? get_class($picturesTypeVariationSpecificPictureSetItem) : gettype($picturesTypeVariationSpecificPictureSetItem)), __LINE__);
            }
        }
        $this->VariationSpecificPictureSet = $variationSpecificPictureSet;
        return $this;
    }
    /**
     * Add item to VariationSpecificPictureSet value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType $item
     * @return \macropage\ebaysdk\trading\StructType\PicturesType
     */
    public function addToVariationSpecificPictureSet(\macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType) {
            throw new \InvalidArgumentException(sprintf('The VariationSpecificPictureSet property can only contain items of \macropage\ebaysdk\trading\StructType\VariationSpecificPictureSetType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VariationSpecificPictureSet[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PicturesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PicturesType
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
     * @return \macropage\ebaysdk\trading\StructType\PicturesType
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
