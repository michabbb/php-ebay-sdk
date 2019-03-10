<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharitySellerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about one seller associated with a registered eBay for Charity nonprofit organization.
 * @subpackage Structs
 */
class CharitySellerType extends AbstractStructBase
{
    /**
     * The CharitySellerStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the status of the seller's charity seller account.
     * - minOccurs: 0
     * @var string
     */
    public $CharitySellerStatus;
    /**
     * The CharityAffiliation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the affiliation status for nonprofit charity organizations registered with the PayPal Giving Fund.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityAffiliationType[]
     */
    public $CharityAffiliation;
    /**
     * The TermsAndConditionsAccepted
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if the seller has accepted the PayPal Giving Fund Terms and Conditions.
     * - minOccurs: 0
     * @var bool
     */
    public $TermsAndConditionsAccepted;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharitySellerType
     * @uses CharitySellerType::setCharitySellerStatus()
     * @uses CharitySellerType::setCharityAffiliation()
     * @uses CharitySellerType::setTermsAndConditionsAccepted()
     * @uses CharitySellerType::setAny()
     * @param string $charitySellerStatus
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationType[] $charityAffiliation
     * @param bool $termsAndConditionsAccepted
     * @param \DOMDocument $any
     */
    public function __construct($charitySellerStatus = null, array $charityAffiliation = array(), $termsAndConditionsAccepted = null, \DOMDocument $any = null)
    {
        $this
            ->setCharitySellerStatus($charitySellerStatus)
            ->setCharityAffiliation($charityAffiliation)
            ->setTermsAndConditionsAccepted($termsAndConditionsAccepted)
            ->setAny($any);
    }
    /**
     * Get CharitySellerStatus value
     * @return string|null
     */
    public function getCharitySellerStatus()
    {
        return $this->CharitySellerStatus;
    }
    /**
     * Set CharitySellerStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CharitySellerStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CharitySellerStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $charitySellerStatus
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
     */
    public function setCharitySellerStatus($charitySellerStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CharitySellerStatusCodeType::valueIsValid($charitySellerStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $charitySellerStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\CharitySellerStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CharitySellerStatus = $charitySellerStatus;
        return $this;
    }
    /**
     * Get CharityAffiliation value
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationType[]|null
     */
    public function getCharityAffiliation()
    {
        return $this->CharityAffiliation;
    }
    /**
     * Set CharityAffiliation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationType[] $charityAffiliation
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
     */
    public function setCharityAffiliation(array $charityAffiliation = array())
    {
        foreach ($charityAffiliation as $charitySellerTypeCharityAffiliationItem) {
            // validation for constraint: itemType
            if (!$charitySellerTypeCharityAffiliationItem instanceof \macropage\ebaysdk\trading\StructType\CharityAffiliationType) {
                throw new \InvalidArgumentException(sprintf('The CharityAffiliation property can only contain items of \macropage\ebaysdk\trading\StructType\CharityAffiliationType, "%s" given', is_object($charitySellerTypeCharityAffiliationItem) ? get_class($charitySellerTypeCharityAffiliationItem) : gettype($charitySellerTypeCharityAffiliationItem)), __LINE__);
            }
        }
        $this->CharityAffiliation = $charityAffiliation;
        return $this;
    }
    /**
     * Add item to CharityAffiliation value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationType $item
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
     */
    public function addToCharityAffiliation(\macropage\ebaysdk\trading\StructType\CharityAffiliationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharityAffiliationType) {
            throw new \InvalidArgumentException(sprintf('The CharityAffiliation property can only contain items of \macropage\ebaysdk\trading\StructType\CharityAffiliationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CharityAffiliation[] = $item;
        return $this;
    }
    /**
     * Get TermsAndConditionsAccepted value
     * @return bool|null
     */
    public function getTermsAndConditionsAccepted()
    {
        return $this->TermsAndConditionsAccepted;
    }
    /**
     * Set TermsAndConditionsAccepted value
     * @param bool $termsAndConditionsAccepted
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
     */
    public function setTermsAndConditionsAccepted($termsAndConditionsAccepted = null)
    {
        // validation for constraint: boolean
        if (!is_null($termsAndConditionsAccepted) && !is_bool($termsAndConditionsAccepted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($termsAndConditionsAccepted)), __LINE__);
        }
        $this->TermsAndConditionsAccepted = $termsAndConditionsAccepted;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CharitySellerType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
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
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
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
