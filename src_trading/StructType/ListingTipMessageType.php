<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingTipMessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingTipMessageType extends AbstractStructBase
{
    /**
     * The ListingTipMessageID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ListingTipMessageID;
    /**
     * The ShortMessage
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ShortMessage;
    /**
     * The LongMessage
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $LongMessage;
    /**
     * The HelpURLPath
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $HelpURLPath;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ListingTipMessageType
     * @uses ListingTipMessageType::setListingTipMessageID()
     * @uses ListingTipMessageType::setShortMessage()
     * @uses ListingTipMessageType::setLongMessage()
     * @uses ListingTipMessageType::setHelpURLPath()
     * @uses ListingTipMessageType::setAny()
     * @param string $listingTipMessageID
     * @param string $shortMessage
     * @param string $longMessage
     * @param string $helpURLPath
     * @param \DOMDocument $any
     */
    public function __construct($listingTipMessageID = null, $shortMessage = null, $longMessage = null, $helpURLPath = null, \DOMDocument $any = null)
    {
        $this
            ->setListingTipMessageID($listingTipMessageID)
            ->setShortMessage($shortMessage)
            ->setLongMessage($longMessage)
            ->setHelpURLPath($helpURLPath)
            ->setAny($any);
    }
    /**
     * Get ListingTipMessageID value
     * @return string|null
     */
    public function getListingTipMessageID()
    {
        return $this->ListingTipMessageID;
    }
    /**
     * Set ListingTipMessageID value
     * @param string $listingTipMessageID
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
     */
    public function setListingTipMessageID($listingTipMessageID = null)
    {
        // validation for constraint: string
        if (!is_null($listingTipMessageID) && !is_string($listingTipMessageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listingTipMessageID)), __LINE__);
        }
        $this->ListingTipMessageID = $listingTipMessageID;
        return $this;
    }
    /**
     * Get ShortMessage value
     * @return string|null
     */
    public function getShortMessage()
    {
        return $this->ShortMessage;
    }
    /**
     * Set ShortMessage value
     * @param string $shortMessage
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
     */
    public function setShortMessage($shortMessage = null)
    {
        // validation for constraint: string
        if (!is_null($shortMessage) && !is_string($shortMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortMessage)), __LINE__);
        }
        $this->ShortMessage = $shortMessage;
        return $this;
    }
    /**
     * Get LongMessage value
     * @return string|null
     */
    public function getLongMessage()
    {
        return $this->LongMessage;
    }
    /**
     * Set LongMessage value
     * @param string $longMessage
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
     */
    public function setLongMessage($longMessage = null)
    {
        // validation for constraint: string
        if (!is_null($longMessage) && !is_string($longMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($longMessage)), __LINE__);
        }
        $this->LongMessage = $longMessage;
        return $this;
    }
    /**
     * Get HelpURLPath value
     * @return string|null
     */
    public function getHelpURLPath()
    {
        return $this->HelpURLPath;
    }
    /**
     * Set HelpURLPath value
     * @param string $helpURLPath
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
     */
    public function setHelpURLPath($helpURLPath = null)
    {
        // validation for constraint: string
        if (!is_null($helpURLPath) && !is_string($helpURLPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($helpURLPath)), __LINE__);
        }
        $this->HelpURLPath = $helpURLPath;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ListingTipMessageType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
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
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
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
