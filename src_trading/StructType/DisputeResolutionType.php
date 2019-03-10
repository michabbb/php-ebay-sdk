<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeResolutionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains all information about a dispute resolution. A dispute can have a resolution even if the seller does not receive payment. The resolution can have various results, including a Final Value Fee credit to the seller or a strike
 * to the buyer. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
 * @subpackage Structs
 */
class DisputeResolutionType extends AbstractStructBase
{
    /**
     * The DisputeResolutionRecordType
     * Meta informations extracted from the WSDL
     * - documentation: The action resulting from the resolution, affecting either the buyer or the seller.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeResolutionRecordType;
    /**
     * The DisputeResolutionReason
     * Meta informations extracted from the WSDL
     * - documentation: The reason for the resolution. The DisputeResolutionReason results in the action described by the DisputeResolutionRecordType.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeResolutionReason;
    /**
     * The ResolutionTime
     * Meta informations extracted from the WSDL
     * - documentation: The date and time the dispute was resolved, in GMT.
     * - minOccurs: 0
     * @var string
     */
    public $ResolutionTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DisputeResolutionType
     * @uses DisputeResolutionType::setDisputeResolutionRecordType()
     * @uses DisputeResolutionType::setDisputeResolutionReason()
     * @uses DisputeResolutionType::setResolutionTime()
     * @uses DisputeResolutionType::setAny()
     * @param string $disputeResolutionRecordType
     * @param string $disputeResolutionReason
     * @param string $resolutionTime
     * @param \DOMDocument $any
     */
    public function __construct($disputeResolutionRecordType = null, $disputeResolutionReason = null, $resolutionTime = null, \DOMDocument $any = null)
    {
        $this
            ->setDisputeResolutionRecordType($disputeResolutionRecordType)
            ->setDisputeResolutionReason($disputeResolutionReason)
            ->setResolutionTime($resolutionTime)
            ->setAny($any);
    }
    /**
     * Get DisputeResolutionRecordType value
     * @return string|null
     */
    public function getDisputeResolutionRecordType()
    {
        return $this->DisputeResolutionRecordType;
    }
    /**
     * Set DisputeResolutionRecordType value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionRecordTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionRecordTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeResolutionRecordType
     * @return \macropage\ebaysdk\trading\StructType\DisputeResolutionType
     */
    public function setDisputeResolutionRecordType($disputeResolutionRecordType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeResolutionRecordTypeCodeType::valueIsValid($disputeResolutionRecordType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeResolutionRecordType, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeResolutionRecordTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeResolutionRecordType = $disputeResolutionRecordType;
        return $this;
    }
    /**
     * Get DisputeResolutionReason value
     * @return string|null
     */
    public function getDisputeResolutionReason()
    {
        return $this->DisputeResolutionReason;
    }
    /**
     * Set DisputeResolutionReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeResolutionReason
     * @return \macropage\ebaysdk\trading\StructType\DisputeResolutionType
     */
    public function setDisputeResolutionReason($disputeResolutionReason = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::valueIsValid($disputeResolutionReason)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeResolutionReason, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeResolutionReason = $disputeResolutionReason;
        return $this;
    }
    /**
     * Get ResolutionTime value
     * @return string|null
     */
    public function getResolutionTime()
    {
        return $this->ResolutionTime;
    }
    /**
     * Set ResolutionTime value
     * @param string $resolutionTime
     * @return \macropage\ebaysdk\trading\StructType\DisputeResolutionType
     */
    public function setResolutionTime($resolutionTime = null)
    {
        // validation for constraint: string
        if (!is_null($resolutionTime) && !is_string($resolutionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resolutionTime)), __LINE__);
        }
        $this->ResolutionTime = $resolutionTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DisputeResolutionType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\DisputeResolutionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\DisputeResolutionType
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
