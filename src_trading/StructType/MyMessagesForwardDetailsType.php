<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyMessagesForwardDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class MyMessagesForwardDetailsType extends AbstractStructBase
{
    /**
     * The UserForwardDate
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UserForwardDate;
    /**
     * The ForwardMessageEncoding
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ForwardMessageEncoding;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MyMessagesForwardDetailsType
     * @uses MyMessagesForwardDetailsType::setUserForwardDate()
     * @uses MyMessagesForwardDetailsType::setForwardMessageEncoding()
     * @uses MyMessagesForwardDetailsType::setAny()
     * @param string $userForwardDate
     * @param string $forwardMessageEncoding
     * @param \DOMDocument $any
     */
    public function __construct($userForwardDate = null, $forwardMessageEncoding = null, \DOMDocument $any = null)
    {
        $this
            ->setUserForwardDate($userForwardDate)
            ->setForwardMessageEncoding($forwardMessageEncoding)
            ->setAny($any);
    }
    /**
     * Get UserForwardDate value
     * @return string|null
     */
    public function getUserForwardDate()
    {
        return $this->UserForwardDate;
    }
    /**
     * Set UserForwardDate value
     * @param string $userForwardDate
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType
     */
    public function setUserForwardDate($userForwardDate = null)
    {
        // validation for constraint: string
        if (!is_null($userForwardDate) && !is_string($userForwardDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userForwardDate)), __LINE__);
        }
        $this->UserForwardDate = $userForwardDate;
        return $this;
    }
    /**
     * Get ForwardMessageEncoding value
     * @return string|null
     */
    public function getForwardMessageEncoding()
    {
        return $this->ForwardMessageEncoding;
    }
    /**
     * Set ForwardMessageEncoding value
     * @param string $forwardMessageEncoding
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType
     */
    public function setForwardMessageEncoding($forwardMessageEncoding = null)
    {
        // validation for constraint: string
        if (!is_null($forwardMessageEncoding) && !is_string($forwardMessageEncoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardMessageEncoding)), __LINE__);
        }
        $this->ForwardMessageEncoding = $forwardMessageEncoding;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesForwardDetailsType
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
