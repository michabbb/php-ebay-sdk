<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddSecondChanceItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <b>VerifyAddSecondChanceItem</b> call.
 * @subpackage Structs
 */
class VerifyAddSecondChanceItemResponseType extends AbstractResponseType
{
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date and time when the the new Second Chance Offer listing became active and the recipient user could purchase the item.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the date and time when the Second Chance Offer listing expires, at which time the listing ends (if the recipient user does not purchase the item first).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * Constructor method for VerifyAddSecondChanceItemResponseType
     * @uses VerifyAddSecondChanceItemResponseType::setStartTime()
     * @uses VerifyAddSecondChanceItemResponseType::setEndTime()
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct(?string $startTime = null, ?string $endTime = null)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime);
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemResponseType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemResponseType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
    }
}
