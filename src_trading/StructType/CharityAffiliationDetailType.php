<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityAffiliationDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>CharityAffiliationDetail</b> container that is returned in the <b>GetUser</b> response. The <b>CharityAffiliationDetail</b> container consists of information on a nonprofit charity organization associated with
 * the seller's account. A separate <b>CharityAffiliationDetail</b> container is returned for each nonprofit charity organization associated with the seller's account.
 * @subpackage Structs
 */
class CharityAffiliationDetailType extends AbstractStructBase
{
    /**
     * The CharityID
     * Meta informations extracted from the WSDL
     * - documentation: The affiliation ID for nonprofit charity organizations registered with the PayPal Giving Fund.
     * - minOccurs: 0
     * @var string
     */
    public $CharityID;
    /**
     * The AffiliationType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the affiliation status of the nonprofit charity organization registered with the PayPal Giving Fund.
     * - minOccurs: 0
     * @var string
     */
    public $AffiliationType;
    /**
     * The LastUsedTime
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the affiliation last used date of the nonprofit charity organization registered with the PayPal Giving Fund.
     * - minOccurs: 0
     * @var string
     */
    public $LastUsedTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharityAffiliationDetailType
     * @uses CharityAffiliationDetailType::setCharityID()
     * @uses CharityAffiliationDetailType::setAffiliationType()
     * @uses CharityAffiliationDetailType::setLastUsedTime()
     * @uses CharityAffiliationDetailType::setAny()
     * @param string $charityID
     * @param string $affiliationType
     * @param string $lastUsedTime
     * @param \DOMDocument $any
     */
    public function __construct($charityID = null, $affiliationType = null, $lastUsedTime = null, \DOMDocument $any = null)
    {
        $this
            ->setCharityID($charityID)
            ->setAffiliationType($affiliationType)
            ->setLastUsedTime($lastUsedTime)
            ->setAny($any);
    }
    /**
     * Get CharityID value
     * @return string|null
     */
    public function getCharityID()
    {
        return $this->CharityID;
    }
    /**
     * Set CharityID value
     * @param string $charityID
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType
     */
    public function setCharityID($charityID = null)
    {
        // validation for constraint: string
        if (!is_null($charityID) && !is_string($charityID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charityID)), __LINE__);
        }
        $this->CharityID = $charityID;
        return $this;
    }
    /**
     * Get AffiliationType value
     * @return string|null
     */
    public function getAffiliationType()
    {
        return $this->AffiliationType;
    }
    /**
     * Set AffiliationType value
     * @uses \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $affiliationType
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType
     */
    public function setAffiliationType($affiliationType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::valueIsValid($affiliationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $affiliationType, implode(', ', \macropage\ebaysdk\trading\EnumType\CharityAffiliationTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AffiliationType = $affiliationType;
        return $this;
    }
    /**
     * Get LastUsedTime value
     * @return string|null
     */
    public function getLastUsedTime()
    {
        return $this->LastUsedTime;
    }
    /**
     * Set LastUsedTime value
     * @param string $lastUsedTime
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType
     */
    public function setLastUsedTime($lastUsedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastUsedTime) && !is_string($lastUsedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUsedTime)), __LINE__);
        }
        $this->LastUsedTime = $lastUsedTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType
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
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType
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
