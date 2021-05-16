<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedContactDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide contact hours for a seller of a Classified Ad listing, including motor vehicles. There is also a boolean field in this type that indicates whether or not potential buyer can contact the seller by email.
 * @subpackage Structs
 */
class ExtendedContactDetailsType extends AbstractStructBase
{
    /**
     * The ContactHoursDetails
     * Meta information extracted from the WSDL
     * - documentation: This containers consists of fields that allows the seller of a Classified Ad listing to tell potential buyers what days and times they may be contacted to inquire about the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ContactHoursDetailsType $ContactHoursDetails = null;
    /**
     * The ClassifiedAdContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: A value of <code>true</code> in this field indicates that potential buyers can contact the seller of the Classified Ad listing by email.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassifiedAdContactByEmailEnabled = null;
    /**
     * The PayPerLeadPhoneNumber
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PayPerLeadPhoneNumber = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ExtendedContactDetailsType
     * @uses ExtendedContactDetailsType::setContactHoursDetails()
     * @uses ExtendedContactDetailsType::setClassifiedAdContactByEmailEnabled()
     * @uses ExtendedContactDetailsType::setPayPerLeadPhoneNumber()
     * @uses ExtendedContactDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType $contactHoursDetails
     * @param bool $classifiedAdContactByEmailEnabled
     * @param string $payPerLeadPhoneNumber
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ContactHoursDetailsType $contactHoursDetails = null, ?bool $classifiedAdContactByEmailEnabled = null, ?string $payPerLeadPhoneNumber = null, $any = null)
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
    public function getContactHoursDetails(): ?\macropage\ebaysdk\trading\StructType\ContactHoursDetailsType
    {
        return $this->ContactHoursDetails;
    }
    /**
     * Set ContactHoursDetails value
     * @param \macropage\ebaysdk\trading\StructType\ContactHoursDetailsType $contactHoursDetails
     * @return \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType
     */
    public function setContactHoursDetails(?\macropage\ebaysdk\trading\StructType\ContactHoursDetailsType $contactHoursDetails = null): self
    {
        $this->ContactHoursDetails = $contactHoursDetails;
        
        return $this;
    }
    /**
     * Get ClassifiedAdContactByEmailEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByEmailEnabled(): ?bool
    {
        return $this->ClassifiedAdContactByEmailEnabled;
    }
    /**
     * Set ClassifiedAdContactByEmailEnabled value
     * @param bool $classifiedAdContactByEmailEnabled
     * @return \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType
     */
    public function setClassifiedAdContactByEmailEnabled(?bool $classifiedAdContactByEmailEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByEmailEnabled) && !is_bool($classifiedAdContactByEmailEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdContactByEmailEnabled, true), gettype($classifiedAdContactByEmailEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        
        return $this;
    }
    /**
     * Get PayPerLeadPhoneNumber value
     * @return string|null
     */
    public function getPayPerLeadPhoneNumber(): ?string
    {
        return $this->PayPerLeadPhoneNumber;
    }
    /**
     * Set PayPerLeadPhoneNumber value
     * @param string $payPerLeadPhoneNumber
     * @return \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType
     */
    public function setPayPerLeadPhoneNumber(?string $payPerLeadPhoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($payPerLeadPhoneNumber) && !is_string($payPerLeadPhoneNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payPerLeadPhoneNumber, true), gettype($payPerLeadPhoneNumber)), __LINE__);
        }
        $this->PayPerLeadPhoneNumber = $payPerLeadPhoneNumber;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\ExtendedContactDetailsType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
