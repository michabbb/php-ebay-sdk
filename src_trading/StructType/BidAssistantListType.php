<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidAssistantListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidAssistantListType extends AbstractStructBase
{
    /**
     * The BidGroupID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $BidGroupID;
    /**
     * The IncludeNotes
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeNotes;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BidAssistantListType
     * @uses BidAssistantListType::setBidGroupID()
     * @uses BidAssistantListType::setIncludeNotes()
     * @uses BidAssistantListType::setAny()
     * @param int $bidGroupID
     * @param bool $includeNotes
     * @param \DOMDocument $any
     */
    public function __construct($bidGroupID = null, $includeNotes = null, \DOMDocument $any = null)
    {
        $this
            ->setBidGroupID($bidGroupID)
            ->setIncludeNotes($includeNotes)
            ->setAny($any);
    }
    /**
     * Get BidGroupID value
     * @return int|null
     */
    public function getBidGroupID()
    {
        return $this->BidGroupID;
    }
    /**
     * Set BidGroupID value
     * @param int $bidGroupID
     * @return \macropage\ebaysdk\trading\StructType\BidAssistantListType
     */
    public function setBidGroupID($bidGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($bidGroupID) && !is_numeric($bidGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidGroupID)), __LINE__);
        }
        $this->BidGroupID = $bidGroupID;
        return $this;
    }
    /**
     * Get IncludeNotes value
     * @return bool|null
     */
    public function getIncludeNotes()
    {
        return $this->IncludeNotes;
    }
    /**
     * Set IncludeNotes value
     * @param bool $includeNotes
     * @return \macropage\ebaysdk\trading\StructType\BidAssistantListType
     */
    public function setIncludeNotes($includeNotes = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeNotes) && !is_bool($includeNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeNotes)), __LINE__);
        }
        $this->IncludeNotes = $includeNotes;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BidAssistantListType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BidAssistantListType
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
     * @return \macropage\ebaysdk\trading\StructType\BidAssistantListType
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
