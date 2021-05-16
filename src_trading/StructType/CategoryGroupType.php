<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryGroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>CategoryGroup</b> container, which defines the category group to which the corresponding Business Policies profile will be applied, and a flag that indicates whether or not that Business Policies profile is the
 * default for that category group.
 * @subpackage Structs
 */
class CategoryGroupType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Defines the name of the category group tied to a Business Policies profile. Valid values are <code>ALL</code> (referring to all non-motor vehicle category groups) or <code>MOTORS_VEHICLE</code> (referring to only motor vehicle
     * category groups). <br><br> The <b>CategoryGroup</b> container is only returned in <b>GetUserPreferences</b> if the <b>ShowSellerProfilePreferences</b> field is included in the request and set to <code>true</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The IsDefault
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates whether the corresponding Business Policies profile is the default for the category group. <br><br> The <b>CategoryGroup</b> container is only returned in <b>GetUserPreferences</b> if the
     * <b>ShowSellerProfilePreferences</b> field is included in the request and set to <code>true</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDefault = null;
    /**
     * Constructor method for CategoryGroupType
     * @uses CategoryGroupType::setName()
     * @uses CategoryGroupType::setIsDefault()
     * @param string $name
     * @param bool $isDefault
     */
    public function __construct(?string $name = null, ?bool $isDefault = null)
    {
        $this
            ->setName($name)
            ->setIsDefault($isDefault);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\CategoryGroupType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get IsDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->IsDefault;
    }
    /**
     * Set IsDefault value
     * @param bool $isDefault
     * @return \macropage\ebaysdk\trading\StructType\CategoryGroupType
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->IsDefault = $isDefault;
        
        return $this;
    }
}
