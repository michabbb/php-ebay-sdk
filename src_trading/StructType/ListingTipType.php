<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingTipType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingTipType extends AbstractStructBase
{
    /**
     * The ListingTipID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ListingTipID;
    /**
     * The Priority
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Priority;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingTipMessageType
     */
    public $Message;
    /**
     * The Field
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingTipFieldType
     */
    public $Field;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingTipType
     * @uses ListingTipType::setListingTipID()
     * @uses ListingTipType::setPriority()
     * @uses ListingTipType::setMessage()
     * @uses ListingTipType::setField()
     * @uses ListingTipType::setAny()
     * @param string $listingTipID
     * @param int $priority
     * @param \macropage\ebaysdk\trading\StructType\ListingTipMessageType $message
     * @param \macropage\ebaysdk\trading\StructType\ListingTipFieldType $field
     * @param \DOMDocument $any
     */
    public function __construct($listingTipID = null, $priority = null, \macropage\ebaysdk\trading\StructType\ListingTipMessageType $message = null, \macropage\ebaysdk\trading\StructType\ListingTipFieldType $field = null, \DOMDocument $any = null)
    {
        $this
            ->setListingTipID($listingTipID)
            ->setPriority($priority)
            ->setMessage($message)
            ->setField($field)
            ->setAny($any);
    }
    /**
     * Get ListingTipID value
     * @return string|null
     */
    public function getListingTipID()
    {
        return $this->ListingTipID;
    }
    /**
     * Set ListingTipID value
     * @param string $listingTipID
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
     */
    public function setListingTipID($listingTipID = null)
    {
        // validation for constraint: string
        if (!is_null($listingTipID) && !is_string($listingTipID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listingTipID)), __LINE__);
        }
        $this->ListingTipID = $listingTipID;
        return $this;
    }
    /**
     * Get Priority value
     * @return int|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !is_numeric($priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get Message value
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param \macropage\ebaysdk\trading\StructType\ListingTipMessageType $message
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
     */
    public function setMessage(\macropage\ebaysdk\trading\StructType\ListingTipMessageType $message = null)
    {
        $this->Message = $message;
        return $this;
    }
    /**
     * Get Field value
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType|null
     */
    public function getField()
    {
        return $this->Field;
    }
    /**
     * Set Field value
     * @param \macropage\ebaysdk\trading\StructType\ListingTipFieldType $field
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
     */
    public function setField(\macropage\ebaysdk\trading\StructType\ListingTipFieldType $field = null)
    {
        $this->Field = $field;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingTipType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
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
