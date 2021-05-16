<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a packet ID and status for the items reported by the VeRO Program member.
 * @subpackage Structs
 */
class VeROReportItemsResponseType extends AbstractResponseType
{
    /**
     * The VeROReportPacketID
     * Meta information extracted from the WSDL
     * - documentation: A unique packet identifier for the items reported.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $VeROReportPacketID = null;
    /**
     * The VeROReportPacketStatus
     * Meta information extracted from the WSDL
     * - documentation: The processing status of the packet.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VeROReportPacketStatus = null;
    /**
     * Constructor method for VeROReportItemsResponseType
     * @uses VeROReportItemsResponseType::setVeROReportPacketID()
     * @uses VeROReportItemsResponseType::setVeROReportPacketStatus()
     * @param int $veROReportPacketID
     * @param string $veROReportPacketStatus
     */
    public function __construct(?int $veROReportPacketID = null, ?string $veROReportPacketStatus = null)
    {
        $this
            ->setVeROReportPacketID($veROReportPacketID)
            ->setVeROReportPacketStatus($veROReportPacketStatus);
    }
    /**
     * Get VeROReportPacketID value
     * @return int|null
     */
    public function getVeROReportPacketID(): ?int
    {
        return $this->VeROReportPacketID;
    }
    /**
     * Set VeROReportPacketID value
     * @param int $veROReportPacketID
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsResponseType
     */
    public function setVeROReportPacketID(?int $veROReportPacketID = null): self
    {
        // validation for constraint: int
        if (!is_null($veROReportPacketID) && !(is_int($veROReportPacketID) || ctype_digit($veROReportPacketID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($veROReportPacketID, true), gettype($veROReportPacketID)), __LINE__);
        }
        $this->VeROReportPacketID = $veROReportPacketID;
        
        return $this;
    }
    /**
     * Get VeROReportPacketStatus value
     * @return string|null
     */
    public function getVeROReportPacketStatus(): ?string
    {
        return $this->VeROReportPacketStatus;
    }
    /**
     * Set VeROReportPacketStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $veROReportPacketStatus
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsResponseType
     */
    public function setVeROReportPacketStatus(?string $veROReportPacketStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::valueIsValid($veROReportPacketStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType', is_array($veROReportPacketStatus) ? implode(', ', $veROReportPacketStatus) : var_export($veROReportPacketStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::getValidValues())), __LINE__);
        }
        $this->VeROReportPacketStatus = $veROReportPacketStatus;
        
        return $this;
    }
}
