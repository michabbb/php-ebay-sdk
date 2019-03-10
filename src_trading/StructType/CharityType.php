<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to provide details about a nonprofit organization registered with the PayPal Giving Fund.
 * @subpackage Structs
 */
class CharityType extends AbstractStructBase
{
    /**
     * The CharityName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the benefiting nonprofit charity organization selected by the charity seller.
     * - minOccurs: 0
     * @var string
     */
    public $CharityName;
    /**
     * The CharityNumber
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier assigned to a nonprofit charity organization by the PayPal Giving Fund. This value can contain up to 10 digits. This value is superseded by <b>CharityID</b>.
     * - minOccurs: 0
     * @var int
     */
    public $CharityNumber;
    /**
     * The DonationPercent
     * Meta informations extracted from the WSDL
     * - documentation: The percentage of the purchase price that the seller chooses to donate to the selected nonprofit organization. This percentage is displayed in the eBay for Charity listing. <b>Possible values</b>: 10.0 to 100.0. <b></b> <ul>
     * <li>Percentages must increment by 5.0. </li> <li>Minimum donation percentages may be required for eBay for Charity listings, see <a href="http://pages.ebay.com/help/sell/selling-nonprofit.html"> Selling to benefit nonprofit organizations</a> for
     * details. </li> </ul> <b>DonationPercent</b> is required input when creating eBay for Charity listings.
     * - minOccurs: 0
     * @var float
     */
    public $DonationPercent;
    /**
     * The CharityID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identification number assigned by the PayPal Giving Fund to registered nonprofit charity organizations. This field is required when creating eBay for Charity listings.
     * - minOccurs: 0
     * @var string
     */
    public $CharityID;
    /**
     * The Mission
     * Meta informations extracted from the WSDL
     * - documentation: The stated mission of the nonprofit charity organization. This mission is displayed in the eBay for Charity listing.
     * - minOccurs: 0
     * @var string
     */
    public $Mission;
    /**
     * The LogoURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of the nonprofit charity organization. This URL is displayed in the eBay for Charity listing.
     * - minOccurs: 0
     * @var string
     */
    public $LogoURL;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: The status of the nonprofit charity organization.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The CharityListing
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, a percentage of item's purchase price will be donated to a nonprofit organization.
     * - minOccurs: 0
     * @var bool
     */
    public $CharityListing;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharityType
     * @uses CharityType::setCharityName()
     * @uses CharityType::setCharityNumber()
     * @uses CharityType::setDonationPercent()
     * @uses CharityType::setCharityID()
     * @uses CharityType::setMission()
     * @uses CharityType::setLogoURL()
     * @uses CharityType::setStatus()
     * @uses CharityType::setCharityListing()
     * @uses CharityType::setAny()
     * @param string $charityName
     * @param int $charityNumber
     * @param float $donationPercent
     * @param string $charityID
     * @param string $mission
     * @param string $logoURL
     * @param string $status
     * @param bool $charityListing
     * @param \DOMDocument $any
     */
    public function __construct($charityName = null, $charityNumber = null, $donationPercent = null, $charityID = null, $mission = null, $logoURL = null, $status = null, $charityListing = null, \DOMDocument $any = null)
    {
        $this
            ->setCharityName($charityName)
            ->setCharityNumber($charityNumber)
            ->setDonationPercent($donationPercent)
            ->setCharityID($charityID)
            ->setMission($mission)
            ->setLogoURL($logoURL)
            ->setStatus($status)
            ->setCharityListing($charityListing)
            ->setAny($any);
    }
    /**
     * Get CharityName value
     * @return string|null
     */
    public function getCharityName()
    {
        return $this->CharityName;
    }
    /**
     * Set CharityName value
     * @param string $charityName
     * @return \macropage\ebaysdk\trading\StructType\CharityType
     */
    public function setCharityName($charityName = null)
    {
        // validation for constraint: string
        if (!is_null($charityName) && !is_string($charityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charityName)), __LINE__);
        }
        $this->CharityName = $charityName;
        return $this;
    }
    /**
     * Get CharityNumber value
     * @return int|null
     */
    public function getCharityNumber()
    {
        return $this->CharityNumber;
    }
    /**
     * Set CharityNumber value
     * @param int $charityNumber
     * @return \macropage\ebaysdk\trading\StructType\CharityType
     */
    public function setCharityNumber($charityNumber = null)
    {
        // validation for constraint: int
        if (!is_null($charityNumber) && !is_numeric($charityNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($charityNumber)), __LINE__);
        }
        $this->CharityNumber = $charityNumber;
        return $this;
    }
    /**
     * Get DonationPercent value
     * @return float|null
     */
    public function getDonationPercent()
    {
        return $this->DonationPercent;
    }
    /**
     * Set DonationPercent value
     * @param float $donationPercent
     * @return \macropage\ebaysdk\trading\StructType\CharityType
     */
    public function setDonationPercent($donationPercent = null)
    {
        $this->DonationPercent = $donationPercent;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\CharityType
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
     * Get Mission value
     * @return string|null
     */
    public function getMission()
    {
        return $this->Mission;
    }
    /**
     * Set Mission value
     * @param string $mission
     * @return \macropage\ebaysdk\trading\StructType\CharityType
     */
    public function setMission($mission = null)
    {
        // validation for constraint: string
        if (!is_null($mission) && !is_string($mission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mission)), __LINE__);
        }
        $this->Mission = $mission;
        return $this;
    }
    /**
     * Get LogoURL value
     * @return string|null
     */
    public function getLogoURL()
    {
        return $this->LogoURL;
    }
    /**
     * Set LogoURL value
     * @param string $logoURL
     * @return \macropage\ebaysdk\trading\StructType\CharityType
     */
    public function setLogoURL($logoURL = null)
    {
        // validation for constraint: string
        if (!is_null($logoURL) && !is_string($logoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logoURL)), __LINE__);
        }
        $this->LogoURL = $logoURL;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\CharityStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CharityStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\CharityType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CharityStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\CharityStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get CharityListing value
     * @return bool|null
     */
    public function getCharityListing()
    {
        return $this->CharityListing;
    }
    /**
     * Set CharityListing value
     * @param bool $charityListing
     * @return \macropage\ebaysdk\trading\StructType\CharityType
     */
    public function setCharityListing($charityListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($charityListing) && !is_bool($charityListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($charityListing)), __LINE__);
        }
        $this->CharityListing = $charityListing;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CharityType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CharityType
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
     * @return \macropage\ebaysdk\trading\StructType\CharityType
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
