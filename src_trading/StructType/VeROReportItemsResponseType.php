<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a packet ID and status for the items reported by the VeRO Program member.
 * @subpackage Structs
 */
class VeROReportItemsResponseType extends AbstractResponseType
{
    /**
     * The VeROReportPacketID
     * Meta informations extracted from the WSDL
     * - documentation: A unique packet identifier for the items reported.
     * - minOccurs: 0
     * @var int
     */
    public $VeROReportPacketID;
    /**
     * The VeROReportPacketStatus
     * Meta informations extracted from the WSDL
     * - documentation: The processing status of the packet.
     * - minOccurs: 0
     * @var string
     */
    public $VeROReportPacketStatus;
    /**
     * Constructor method for VeROReportItemsResponseType
     * @uses VeROReportItemsResponseType::setVeROReportPacketID()
     * @uses VeROReportItemsResponseType::setVeROReportPacketStatus()
     * @param int $veROReportPacketID
     * @param string $veROReportPacketStatus
     */
    public function __construct($veROReportPacketID = null, $veROReportPacketStatus = null)
    {
        $this
            ->setVeROReportPacketID($veROReportPacketID)
            ->setVeROReportPacketStatus($veROReportPacketStatus);
    }
    /**
     * Get VeROReportPacketID value
     * @return int|null
     */
    public function getVeROReportPacketID()
    {
        return $this->VeROReportPacketID;
    }
    /**
     * Set VeROReportPacketID value
     * @param int $veROReportPacketID
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsResponseType
     */
    public function setVeROReportPacketID($veROReportPacketID = null)
    {
        // validation for constraint: int
        if (!is_null($veROReportPacketID) && !is_numeric($veROReportPacketID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($veROReportPacketID)), __LINE__);
        }
        $this->VeROReportPacketID = $veROReportPacketID;
        return $this;
    }
    /**
     * Get VeROReportPacketStatus value
     * @return string|null
     */
    public function getVeROReportPacketStatus()
    {
        return $this->VeROReportPacketStatus;
    }
    /**
     * Set VeROReportPacketStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $veROReportPacketStatus
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsResponseType
     */
    public function setVeROReportPacketStatus($veROReportPacketStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::valueIsValid($veROReportPacketStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $veROReportPacketStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\VeROReportPacketStatusCodeType::getValidValues())), __LINE__);
        }
        $this->VeROReportPacketStatus = $veROReportPacketStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemsResponseType
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
