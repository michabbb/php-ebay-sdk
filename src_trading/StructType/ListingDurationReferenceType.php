<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDurationReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the type of listing as an attribute on the <b>ListingDuration</b> node.
 * @subpackage Structs
 */
class ListingDurationReferenceType extends AbstractStructBase
{
    /**
     * The _
     * @var int|null
     */
    protected ?int $_ = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: The type of listing a set of durations describes.
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for ListingDurationReferenceType
     * @uses ListingDurationReferenceType::set_()
     * @uses ListingDurationReferenceType::setType()
     * @param int $_
     * @param string $type
     */
    public function __construct(?int $_ = null, ?string $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
    }
    /**
     * Get _ value
     * @return int|null
     */
    public function get_(): ?int
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param int $_
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType
     */
    public function set_(?int $_ = null): self
    {
        // validation for constraint: int
        if (!is_null($_) && !(is_int($_) || ctype_digit($_))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationReferenceType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
