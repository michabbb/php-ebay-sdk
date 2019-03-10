<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GalleryURL StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the image URL returned in galleryInfoContainer.
 * @subpackage Structs
 */
class GalleryURL extends AbstractStructBase
{
    /**
     * The gallerySize
     * Meta informations extracted from the WSDL
     * - documentation: Relative size (Large, Medium, or Small) of the image thumbnail for the item.
     * - use: required
     * @var string
     */
    public $gallerySize;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for GalleryURL
     * @uses GalleryURL::setGallerySize()
     * @uses GalleryURL::set_()
     * @param string $gallerySize
     * @param string $_
     */
    public function __construct($gallerySize = null, $_ = null)
    {
        $this
            ->setGallerySize($gallerySize)
            ->set_($_);
    }
    /**
     * Get gallerySize value
     * @return string
     */
    public function getGallerySize()
    {
        return $this->gallerySize;
    }
    /**
     * Set gallerySize value
     * @uses \macropage\ebaysdk\finding\EnumType\GallerySizeEnum::valueIsValid()
     * @uses \macropage\ebaysdk\finding\EnumType\GallerySizeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gallerySize
     * @return \macropage\ebaysdk\finding\StructType\GalleryURL
     */
    public function setGallerySize($gallerySize = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\finding\EnumType\GallerySizeEnum::valueIsValid($gallerySize)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gallerySize, implode(', ', \macropage\ebaysdk\finding\EnumType\GallerySizeEnum::getValidValues())), __LINE__);
        }
        $this->gallerySize = $gallerySize;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \macropage\ebaysdk\finding\StructType\GalleryURL
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\GalleryURL
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
