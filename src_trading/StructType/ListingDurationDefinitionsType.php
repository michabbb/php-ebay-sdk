<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDurationDefinitionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: A type used by the <b>ListingDurations</b> container node that is returned in the response of <b>GetCategoryFeatures</b> call. A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the
 * supported listing duration times for those listing types.
 * @subpackage Structs
 */
class ListingDurationDefinitionsType extends AbstractStructBase
{
    /**
     * The ListingDuration
     * Meta information extracted from the WSDL
     * - documentation: A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the supported listing duration times for those listing types. The <b>durationSetID</b> attribute value indicates the listing type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType[]
     */
    protected ?array $ListingDuration = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: This attribute indicates the current version of the Listing Durations data. This can be helpful to let users know when modifications have been made to Listing Durations.
     * @var int|null
     */
    protected ?int $Version = null;
    /**
     * Constructor method for ListingDurationDefinitionsType
     * @uses ListingDurationDefinitionsType::setListingDuration()
     * @uses ListingDurationDefinitionsType::setVersion()
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType[] $listingDuration
     * @param int $version
     */
    public function __construct(?array $listingDuration = null, ?int $version = null)
    {
        $this
            ->setListingDuration($listingDuration)
            ->setVersion($version);
    }
    /**
     * Get ListingDuration value
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType[]
     */
    public function getListingDuration(): ?array
    {
        return $this->ListingDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setListingDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListingDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListingDurationForArrayConstraintsFromSetListingDuration(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listingDurationDefinitionsTypeListingDurationItem) {
            // validation for constraint: itemType
            if (!$listingDurationDefinitionsTypeListingDurationItem instanceof \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType) {
                $invalidValues[] = is_object($listingDurationDefinitionsTypeListingDurationItem) ? get_class($listingDurationDefinitionsTypeListingDurationItem) : sprintf('%s(%s)', gettype($listingDurationDefinitionsTypeListingDurationItem), var_export($listingDurationDefinitionsTypeListingDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListingDuration property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ListingDuration value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType[] $listingDuration
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType
     */
    public function setListingDuration(?array $listingDuration = null): self
    {
        // validation for constraint: array
        if ('' !== ($listingDurationArrayErrorMessage = self::validateListingDurationForArrayConstraintsFromSetListingDuration($listingDuration))) {
            throw new InvalidArgumentException($listingDurationArrayErrorMessage, __LINE__);
        }
        $this->ListingDuration = $listingDuration;
        
        return $this;
    }
    /**
     * Add item to ListingDuration value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType $item
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType
     */
    public function addToListingDuration(\macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType) {
            throw new InvalidArgumentException(sprintf('The ListingDuration property can only contain items of type \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ListingDuration[] = $item;
        
        return $this;
    }
    /**
     * Get Version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionsType
     */
    public function setVersion(?int $version = null): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
}
