<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GalleryInfoContainer StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for URLs of thumbnail images for an item.
 * @subpackage Structs
 */
class GalleryInfoContainer extends AbstractStructBase
{
    /**
     * The galleryURL
     * Meta informations extracted from the WSDL
     * - documentation: URL for a single item image thumbnail of a specific size.
     * - maxOccurs: 3
     * - minOccurs: 1
     * @var \macropage\ebaysdk\finding\StructType\GalleryURL[]
     */
    public $galleryURL;
    /**
     * Constructor method for GalleryInfoContainer
     * @uses GalleryInfoContainer::setGalleryURL()
     * @param \macropage\ebaysdk\finding\StructType\GalleryURL[] $galleryURL
     */
    public function __construct(array $galleryURL = array())
    {
        $this
            ->setGalleryURL($galleryURL);
    }
    /**
     * Get galleryURL value
     * @return \macropage\ebaysdk\finding\StructType\GalleryURL[]
     */
    public function getGalleryURL()
    {
        return $this->galleryURL;
    }
    /**
     * Set galleryURL value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\GalleryURL[] $galleryURL
     * @return \macropage\ebaysdk\finding\StructType\GalleryInfoContainer
     */
    public function setGalleryURL(array $galleryURL = array())
    {
        foreach ($galleryURL as $galleryInfoContainerGalleryURLItem) {
            // validation for constraint: itemType
            if (!$galleryInfoContainerGalleryURLItem instanceof \macropage\ebaysdk\finding\StructType\GalleryURL) {
                throw new \InvalidArgumentException(sprintf('The galleryURL property can only contain items of \macropage\ebaysdk\finding\StructType\GalleryURL, "%s" given', is_object($galleryInfoContainerGalleryURLItem) ? get_class($galleryInfoContainerGalleryURLItem) : gettype($galleryInfoContainerGalleryURLItem)), __LINE__);
            }
        }
        $this->galleryURL = $galleryURL;
        return $this;
    }
    /**
     * Add item to galleryURL value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\finding\StructType\GalleryURL $item
     * @return \macropage\ebaysdk\finding\StructType\GalleryInfoContainer
     */
    public function addToGalleryURL(\macropage\ebaysdk\finding\StructType\GalleryURL $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\finding\StructType\GalleryURL) {
            throw new \InvalidArgumentException(sprintf('The galleryURL property can only contain items of \macropage\ebaysdk\finding\StructType\GalleryURL, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->galleryURL[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\GalleryInfoContainer
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
