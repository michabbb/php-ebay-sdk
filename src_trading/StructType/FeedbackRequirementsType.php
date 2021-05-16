<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeedbackRequirementsType StructType
 * @subpackage Structs
 */
class FeedbackRequirementsType extends AbstractStructBase
{
    /**
     * The _
     * @var bool|null
     */
    protected ?bool $_ = null;
    /**
     * The minimum
     * Meta information extracted from the WSDL
     * - documentation: This type is deprecated.
     * @var string|null
     */
    protected ?string $minimum = null;
    /**
     * Constructor method for FeedbackRequirementsType
     * @uses FeedbackRequirementsType::set_()
     * @uses FeedbackRequirementsType::setMinimum()
     * @param bool $_
     * @param string $minimum
     */
    public function __construct(?bool $_ = null, ?string $minimum = null)
    {
        $this
            ->set_($_)
            ->setMinimum($minimum);
    }
    /**
     * Get _ value
     * @return bool|null
     */
    public function get_(): ?bool
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param bool $_
     * @return \macropage\ebaysdk\trading\StructType\FeedbackRequirementsType
     */
    public function set_(?bool $_ = null): self
    {
        // validation for constraint: boolean
        if (!is_null($_) && !is_bool($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get minimum value
     * @return string|null
     */
    public function getMinimum(): ?string
    {
        return $this->minimum;
    }
    /**
     * Set minimum value
     * @param string $minimum
     * @return \macropage\ebaysdk\trading\StructType\FeedbackRequirementsType
     */
    public function setMinimum(?string $minimum = null): self
    {
        // validation for constraint: string
        if (!is_null($minimum) && !is_string($minimum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minimum, true), gettype($minimum)), __LINE__);
        }
        $this->minimum = $minimum;
        
        return $this;
    }
}
