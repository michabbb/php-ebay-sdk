<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReminderCustomizationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies how to return certain reminder types from the user's My eBay account.
 * @subpackage Structs
 */
class ReminderCustomizationType extends AbstractStructBase
{
    /**
     * The DurationInDays
     * Meta information extracted from the WSDL
     * - documentation: The length of time the reminder has existed in the user's My eBay account, in days. Valid values are 1-60.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DurationInDays = null;
    /**
     * The Include
     * Meta information extracted from the WSDL
     * - documentation: Whether to include information about this type of reminder in the response. When true, the container is returned with default input parameters.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Include = null;
    /**
     * Constructor method for ReminderCustomizationType
     * @uses ReminderCustomizationType::setDurationInDays()
     * @uses ReminderCustomizationType::setInclude()
     * @param int $durationInDays
     * @param bool $include
     */
    public function __construct(?int $durationInDays = null, ?bool $include = null)
    {
        $this
            ->setDurationInDays($durationInDays)
            ->setInclude($include);
    }
    /**
     * Get DurationInDays value
     * @return int|null
     */
    public function getDurationInDays(): ?int
    {
        return $this->DurationInDays;
    }
    /**
     * Set DurationInDays value
     * @param int $durationInDays
     * @return \macropage\ebaysdk\trading\StructType\ReminderCustomizationType
     */
    public function setDurationInDays(?int $durationInDays = null): self
    {
        // validation for constraint: int
        if (!is_null($durationInDays) && !(is_int($durationInDays) || ctype_digit($durationInDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationInDays, true), gettype($durationInDays)), __LINE__);
        }
        $this->DurationInDays = $durationInDays;
        
        return $this;
    }
    /**
     * Get Include value
     * @return bool|null
     */
    public function getInclude(): ?bool
    {
        return $this->Include;
    }
    /**
     * Set Include value
     * @param bool $include
     * @return \macropage\ebaysdk\trading\StructType\ReminderCustomizationType
     */
    public function setInclude(?bool $include = null): self
    {
        // validation for constraint: boolean
        if (!is_null($include) && !is_bool($include)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include, true), gettype($include)), __LINE__);
        }
        $this->Include = $include;
        
        return $this;
    }
}
