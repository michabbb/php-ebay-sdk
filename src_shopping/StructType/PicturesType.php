<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PicturesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to provide picture details for a multiple-variation listing. This type is used by the <b>Variations.Pictures</b> container that is returned for multiple-variation listings when the <b>IncludeSelector</b> field is
 * included in the call request and set to <code>Variations</code>. Typically, in a multiple-variation listing, the seller will provide different photos for each available variation based on one product aspect such as color.
 * @subpackage Structs
 */
class PicturesType extends AbstractStructBase
{
    /**
     * The VariationSpecificName
     * Meta informations extracted from the WSDL
     * - documentation: This field defines the product aspect in which pictures in the listing will vary based on the individual variations. For example, if the product aspect in this field is <code>Color</code>, the picture URLs in each
     * <b>VariationSpecificPictureSet</b> container would point to one or more pictures of the corresponding variation (defined in the <b>VariationSpecificValue</b> field).
     * - minOccurs: 0
     * @var string
     */
    public $VariationSpecificName;
    /**
     * The VariationSpecificPictureSet
     * Meta informations extracted from the WSDL
     * - documentation: A <b>VariationSpecificPictureSet</b> container is returned for each product variation for which there are one or more pictures available, helping buyers distinguish between the different variations in the listing. Pictures for
     * multiple or all available variations can be included for a multiple-variation listing, but note that this is not a requirement for the seller. In other words, one multiple-variation listing might contain 10 different variations (varying by color),
     * but the seller could choose to only include one or more pictures just for one particular color. However, the seller can make that listing more buyer-friendly if he/she provides pictures of all or most available colors.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType[]
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
     * @param \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType[] $variationSpecificPictureSet
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
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType
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
     * @return \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType[]|null
     */
    public function getVariationSpecificPictureSet()
    {
        return $this->VariationSpecificPictureSet;
    }
    /**
     * Set VariationSpecificPictureSet value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType[] $variationSpecificPictureSet
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType
     */
    public function setVariationSpecificPictureSet(array $variationSpecificPictureSet = array())
    {
        foreach ($variationSpecificPictureSet as $picturesTypeVariationSpecificPictureSetItem) {
            // validation for constraint: itemType
            if (!$picturesTypeVariationSpecificPictureSetItem instanceof \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType) {
                throw new \InvalidArgumentException(sprintf('The VariationSpecificPictureSet property can only contain items of \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType, "%s" given', is_object($picturesTypeVariationSpecificPictureSetItem) ? get_class($picturesTypeVariationSpecificPictureSetItem) : gettype($picturesTypeVariationSpecificPictureSetItem)), __LINE__);
            }
        }
        $this->VariationSpecificPictureSet = $variationSpecificPictureSet;
        return $this;
    }
    /**
     * Add item to VariationSpecificPictureSet value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType $item
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType
     */
    public function addToVariationSpecificPictureSet(\macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType) {
            throw new \InvalidArgumentException(sprintf('The VariationSpecificPictureSet property can only contain items of \macropage\ebaysdk\shopping\StructType\VariationSpecificPictureSetType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @uses \macropage\ebaysdk\shopping\StructType\PicturesType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType
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
     * @return \macropage\ebaysdk\shopping\StructType\PicturesType
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
