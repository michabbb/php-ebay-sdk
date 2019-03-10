<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendSiteHostedPicturesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns the URL of an eBay Picture Services image whose expiration date was extended.
 * @subpackage Structs
 */
class ExtendSiteHostedPicturesResponseType extends AbstractResponseType
{
    /**
     * The PictureURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of the site-hosted picture whose expiration date was extended through the <b>ExtendSiteHostedPictures</b> call. This field will be returned if the expiration date of the site-hosted picture was successfully extended.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * Constructor method for ExtendSiteHostedPicturesResponseType
     * @uses ExtendSiteHostedPicturesResponseType::setPictureURL()
     * @param string[] $pictureURL
     */
    public function __construct(array $pictureURL = array())
    {
        $this
            ->setPictureURL($pictureURL);
    }
    /**
     * Get PictureURL value
     * @return string[]|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @throws \InvalidArgumentException
     * @param string[] $pictureURL
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesResponseType
     */
    public function setPictureURL(array $pictureURL = array())
    {
        foreach ($pictureURL as $extendSiteHostedPicturesResponseTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($extendSiteHostedPicturesResponseTypePictureURLItem)) {
                throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of anyURI, "%s" given', is_object($extendSiteHostedPicturesResponseTypePictureURLItem) ? get_class($extendSiteHostedPicturesResponseTypePictureURLItem) : gettype($extendSiteHostedPicturesResponseTypePictureURLItem)), __LINE__);
            }
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Add item to PictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesResponseType
     */
    public function addToPictureURL($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of anyURI, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PictureURL[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesResponseType
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
