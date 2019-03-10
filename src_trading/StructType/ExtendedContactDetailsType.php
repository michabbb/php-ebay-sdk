<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedContactDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to provide contact hours for a seller of a Classified Ad listing, including motor vehicles. There is also a boolean field in this type that indicates whether or not potential buyer can contact the seller by email.
 * @subpackage Structs
 */
class ExtendedContactDetailsType extends AbstractStructBase
{
    /**
     * The ContactHoursDetails
     * Meta informations extracted from the WSDL
     * - documentation: This containers consists of fields that allows the seller of a Classified Ad listing to tell potential buyers what days and times they may be contacted to inquire about the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
     */
    public $ContactHoursDetails;
    /**
     * The ClassifiedAdContactByEmailEnabled
     * Meta informations extracted from the WSDL
     * - documentation: A value of <code>true</code> in this field indicates that potential buyers can contact the seller of the Classified Ad listing by email.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdContactByEmailEnabled;
    /**
     * The PayPerLeadPhoneNumber
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PayPerLeadPhoneNumber;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ExtendedContactDetailsType
     * @uses ExtendedContactDetailsType::setContactHoursDetails()
     * @uses ExtendedContactDetailsType::setClassifiedAdContactByEmailEnabled()
     * @uses ExtendedContactDetailsType::setPayPerLeadPhoneNumber()
     * @uses ExtendedContactDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType $contactHoursDetails
     * @param bool $classifiedAdContactByEmailEnabled
     * @param string $payPerLeadPhoneNumber
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ContactHoursDetailsType $contactHoursDetails = null, $classifiedAdContactByEmailEnabled = null, $payPerLeadPhoneNumber = null, \DOMDocument $any = null)
    {
        $this
            ->setContactHoursDetails($contactHoursDetails)
            ->setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled)
            ->setPayPerLeadPhoneNumber($payPerLeadPhoneNumber)
            ->setAny($any);
    }
    /**
     * Get ContactHoursDetails value
     * @return \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType|null
     */
    public function getContactHoursDetails()
    {
        return $this->ContactHoursDetails;
    }
    /**
     * Set ContactHoursDetails value
     * @param \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType $contactHoursDetails
     * @return \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType
     */
    public function setContactHoursDetails(\macropage\ebaysdk\trading\StructType\ContactHoursDetailsType $contactHoursDetails = null)
    {
        $this->ContactHoursDetails = $contactHoursDetails;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByEmailEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->ClassifiedAdContactByEmailEnabled;
    }
    /**
     * Set ClassifiedAdContactByEmailEnabled value
     * @param bool $classifiedAdContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType
     */
    public function setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByEmailEnabled) && !is_bool($classifiedAdContactByEmailEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($classifiedAdContactByEmailEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        return $this;
    }
    /**
     * Get PayPerLeadPhoneNumber value
     * @return string|null
     */
    public function getPayPerLeadPhoneNumber()
    {
        return $this->PayPerLeadPhoneNumber;
    }
    /**
     * Set PayPerLeadPhoneNumber value
     * @param string $payPerLeadPhoneNumber
     * @return \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType
     */
    public function setPayPerLeadPhoneNumber($payPerLeadPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($payPerLeadPhoneNumber) && !is_string($payPerLeadPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payPerLeadPhoneNumber)), __LINE__);
        }
        $this->PayPerLeadPhoneNumber = $payPerLeadPhoneNumber;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType
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
