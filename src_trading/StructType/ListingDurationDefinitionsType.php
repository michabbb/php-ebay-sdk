<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDurationDefinitionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A type used by the <b>ListingDurations</b> container node that is returned in the response of <b>GetCategoryFeatures</b> call. A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the
 * supported listing duration times for those listing types.
 * @subpackage Structs
 */
class ListingDurationDefinitionsType extends AbstractStructBase
{
    /**
     * The ListingDuration
     * Meta informations extracted from the WSDL
     * - documentation: A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the supported listing duration times for those listing types. The <b>durationSetID</b> attribute value indicates the listing type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType[]
     */
    public $ListingDuration;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: This attribute indicates the current version of the Listing Durations data. This can be helpful to let users know when modifications have been made to Listing Durations.
     * @var int
     */
    public $Version;
    /**
     * Constructor method for ListingDurationDefinitionsType
     * @uses ListingDurationDefinitionsType::setListingDuration()
     * @uses ListingDurationDefinitionsType::setVersion()
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType[] $listingDuration
     * @param int $version
     */
    public function __construct(array $listingDuration = array(), $version = null)
    {
        $this
            ->setListingDuration($listingDuration)
            ->setVersion($version);
    }
    /**
     * Get ListingDuration value
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType[]|null
     */
    public function getListingDuration()
    {
        return $this->ListingDuration;
    }
    /**
     * Set ListingDuration value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType[] $listingDuration
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType
     */
    public function setListingDuration(array $listingDuration = array())
    {
        foreach ($listingDuration as $listingDurationDefinitionsTypeListingDurationItem) {
            // validation for constraint: itemType
            if (!$listingDurationDefinitionsTypeListingDurationItem instanceof \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType) {
                throw new \InvalidArgumentException(sprintf('The ListingDuration property can only contain items of \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType, "%s" given', is_object($listingDurationDefinitionsTypeListingDurationItem) ? get_class($listingDurationDefinitionsTypeListingDurationItem) : gettype($listingDurationDefinitionsTypeListingDurationItem)), __LINE__);
            }
        }
        $this->ListingDuration = $listingDuration;
        return $this;
    }
    /**
     * Add item to ListingDuration value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType $item
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType
     */
    public function addToListingDuration(\macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType) {
            throw new \InvalidArgumentException(sprintf('The ListingDuration property can only contain items of \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ListingDuration[] = $item;
        return $this;
    }
    /**
     * Get Version value
     * @return int|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !is_numeric($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType
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
