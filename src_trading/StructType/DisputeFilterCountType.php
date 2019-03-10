<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeFilterCountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The number of disputes that match a given filter. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
 * @subpackage Structs
 */
class DisputeFilterCountType extends AbstractStructBase
{
    /**
     * The DisputeFilterType
     * Meta informations extracted from the WSDL
     * - documentation: A filter used to reduce the number of disputes returned. The filter uses criteria such as whether the dispute is awaiting a response, is closed, or is eligible for credit. Both <i>Unpaid Item</i> and <i>Item Not Received</i> disputes
     * can be returned for the same filter value.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeFilterType;
    /**
     * The TotalAvailable
     * Meta informations extracted from the WSDL
     * - documentation: The number of disputes that match the filter. In the <b>GetUserDisputes</b> response, not returned for the filter type that was used in the request.
     * - minOccurs: 0
     * @var int
     */
    public $TotalAvailable;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DisputeFilterCountType
     * @uses DisputeFilterCountType::setDisputeFilterType()
     * @uses DisputeFilterCountType::setTotalAvailable()
     * @uses DisputeFilterCountType::setAny()
     * @param string $disputeFilterType
     * @param int $totalAvailable
     * @param \DOMDocument $any
     */
    public function __construct($disputeFilterType = null, $totalAvailable = null, \DOMDocument $any = null)
    {
        $this
            ->setDisputeFilterType($disputeFilterType)
            ->setTotalAvailable($totalAvailable)
            ->setAny($any);
    }
    /**
     * Get DisputeFilterType value
     * @return string|null
     */
    public function getDisputeFilterType()
    {
        return $this->DisputeFilterType;
    }
    /**
     * Set DisputeFilterType value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeFilterType
     * @return \macropage\ebaysdk\trading\StructType\DisputeFilterCountType
     */
    public function setDisputeFilterType($disputeFilterType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::valueIsValid($disputeFilterType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $disputeFilterType, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeFilterType = $disputeFilterType;
        return $this;
    }
    /**
     * Get TotalAvailable value
     * @return int|null
     */
    public function getTotalAvailable()
    {
        return $this->TotalAvailable;
    }
    /**
     * Set TotalAvailable value
     * @param int $totalAvailable
     * @return \macropage\ebaysdk\trading\StructType\DisputeFilterCountType
     */
    public function setTotalAvailable($totalAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($totalAvailable) && !is_numeric($totalAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalAvailable)), __LINE__);
        }
        $this->TotalAvailable = $totalAvailable;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DisputeFilterCountType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DisputeFilterCountType
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
     * @return \macropage\ebaysdk\trading\StructType\DisputeFilterCountType
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
