<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupportedSellerProfilesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SupportedSellerProfiles</b> container for all payment, return, and shipping policy profiles that a seller has defined for a site.
 * @subpackage Structs
 */
class SupportedSellerProfilesType extends AbstractStructBase
{
    /**
     * The SupportedSellerProfile
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of information related to specific Business Policies payment, return, and shipping policy profiles. The profile type is found in the <b>ProfileType</b> field.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType[]
     */
    protected array $SupportedSellerProfile = [];
    /**
     * Constructor method for SupportedSellerProfilesType
     * @uses SupportedSellerProfilesType::setSupportedSellerProfile()
     * @param \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType[] $supportedSellerProfile
     */
    public function __construct(array $supportedSellerProfile = [])
    {
        $this
            ->setSupportedSellerProfile($supportedSellerProfile);
    }
    /**
     * Get SupportedSellerProfile value
     * @return \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType[]
     */
    public function getSupportedSellerProfile(): array
    {
        return $this->SupportedSellerProfile;
    }
    /**
     * This method is responsible for validating the values passed to the setSupportedSellerProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupportedSellerProfile method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupportedSellerProfileForArrayConstraintsFromSetSupportedSellerProfile(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $supportedSellerProfilesTypeSupportedSellerProfileItem) {
            // validation for constraint: itemType
            if (!$supportedSellerProfilesTypeSupportedSellerProfileItem instanceof \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType) {
                $invalidValues[] = is_object($supportedSellerProfilesTypeSupportedSellerProfileItem) ? get_class($supportedSellerProfilesTypeSupportedSellerProfileItem) : sprintf('%s(%s)', gettype($supportedSellerProfilesTypeSupportedSellerProfileItem), var_export($supportedSellerProfilesTypeSupportedSellerProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupportedSellerProfile property can only contain items of type \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupportedSellerProfile value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType[] $supportedSellerProfile
     * @return \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType
     */
    public function setSupportedSellerProfile(array $supportedSellerProfile = []): self
    {
        // validation for constraint: array
        if ('' !== ($supportedSellerProfileArrayErrorMessage = self::validateSupportedSellerProfileForArrayConstraintsFromSetSupportedSellerProfile($supportedSellerProfile))) {
            throw new InvalidArgumentException($supportedSellerProfileArrayErrorMessage, __LINE__);
        }
        $this->SupportedSellerProfile = $supportedSellerProfile;
        
        return $this;
    }
    /**
     * Add item to SupportedSellerProfile value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType $item
     * @return \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType
     */
    public function addToSupportedSellerProfile(\macropage\ebaysdk\trading\StructType\SupportedSellerProfileType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType) {
            throw new InvalidArgumentException(sprintf('The SupportedSellerProfile property can only contain items of type \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SupportedSellerProfile[] = $item;
        
        return $this;
    }
}
