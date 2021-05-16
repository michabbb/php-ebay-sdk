<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide details about a nonprofit organization registered with eBay for Charity. This type is used by the <b>Charity</b> container that is returned in <b>GetSingleItem</b> and <b>GetMultipleItems</b> if the sale
 * proceeds of an eBay listing go towards benefiting a nonprofit organization.
 * @subpackage Structs
 */
class CharityType extends AbstractStructBase
{
    /**
     * The CharityID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier that eBay creates and assigns to each nonprofit organization that is registered with eBay for Charity. This is the unique identifier that should be used if the user wishes to retrieve more details on a nonprofit
     * organization by using the Trading API's lt;b>GetCharities</b> call, or used by a seller in an Add/Revise/Relist call when they want to identify the nonprofit organization that will receive sale proceeds for a listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CharityID = null;
    /**
     * The CharityName
     * Meta information extracted from the WSDL
     * - documentation: The name of the benefiting nonprofit organization selected by the charity seller to receive sale proceeds for the listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CharityName = null;
    /**
     * The CharityNumber
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier that the PayPal Giving Fund assigns to each nonprofit organization that registers with eBay for Charity. <br> <br> <span class="tablenote"><strong>Note:</strong> The <b>CharityNumber</b> field has been scheduled
     * for deprecation. It is the <b>CharityID</b> value that should be used instead if the user wishes to retrieve more details on a nonprofit organization by using the Trading API's <b>GetCharities</b> call, or used by a seller in an Add/Revise/Relist
     * call when they want to identify the nonprofit organization that will receive sale proceeds for a listing. </span>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CharityNumber = null;
    /**
     * The DonationPercent
     * Meta information extracted from the WSDL
     * - documentation: The percentage of the purchase price that the seller chooses to donate to the selected nonprofit organization. This percentage is also displayed in the eBay View Item page for the listing. Possible values range from 10.0 to 100.0
     * (percent), in 5 percent increments. A seller is required to set a donation percentage at listing time, so this field should always be returned for charity listings.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $DonationPercent = null;
    /**
     * The Mission
     * Meta information extracted from the WSDL
     * - documentation: The stated mission of the nonprofit organization. The length of the mission statement can vary by organization. This field is returned as long as it is defined for the nonprofit organization.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Mission = null;
    /**
     * The LogoURL
     * Meta information extracted from the WSDL
     * - documentation: The full URL to the nonprofit organization's logo image file. This logo image file is the image that is displayed in all eBay listings that benefit that charity. This field is returned as long as it is defined for the nonprofit
     * organization.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogoURL = null;
    /**
     * The CharityListing
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CharityListing = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates whether or not the nonprofit organization is a valid eBay for Charity organization, and is able to receive proceeds from eBay sales.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CharityType
     * @uses CharityType::setCharityID()
     * @uses CharityType::setCharityName()
     * @uses CharityType::setCharityNumber()
     * @uses CharityType::setDonationPercent()
     * @uses CharityType::setMission()
     * @uses CharityType::setLogoURL()
     * @uses CharityType::setCharityListing()
     * @uses CharityType::setStatus()
     * @uses CharityType::setAny()
     * @param string $charityID
     * @param string $charityName
     * @param int $charityNumber
     * @param float $donationPercent
     * @param string $mission
     * @param string $logoURL
     * @param bool $charityListing
     * @param string $status
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $charityID = null, ?string $charityName = null, ?int $charityNumber = null, ?float $donationPercent = null, ?string $mission = null, ?string $logoURL = null, ?bool $charityListing = null, ?string $status = null, $any = null)
    {
        $this
            ->setCharityID($charityID)
            ->setCharityName($charityName)
            ->setCharityNumber($charityNumber)
            ->setDonationPercent($donationPercent)
            ->setMission($mission)
            ->setLogoURL($logoURL)
            ->setCharityListing($charityListing)
            ->setStatus($status)
            ->setAny($any);
    }
    /**
     * Get CharityID value
     * @return string|null
     */
    public function getCharityID(): ?string
    {
        return $this->CharityID;
    }
    /**
     * Set CharityID value
     * @param string $charityID
     * @return \macropage\ebaysdk\shopping\StructType\CharityType
     */
    public function setCharityID(?string $charityID = null): self
    {
        // validation for constraint: string
        if (!is_null($charityID) && !is_string($charityID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityID, true), gettype($charityID)), __LINE__);
        }
        $this->CharityID = $charityID;
        
        return $this;
    }
    /**
     * Get CharityName value
     * @return string|null
     */
    public function getCharityName(): ?string
    {
        return $this->CharityName;
    }
    /**
     * Set CharityName value
     * @param string $charityName
     * @return \macropage\ebaysdk\shopping\StructType\CharityType
     */
    public function setCharityName(?string $charityName = null): self
    {
        // validation for constraint: string
        if (!is_null($charityName) && !is_string($charityName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityName, true), gettype($charityName)), __LINE__);
        }
        $this->CharityName = $charityName;
        
        return $this;
    }
    /**
     * Get CharityNumber value
     * @return int|null
     */
    public function getCharityNumber(): ?int
    {
        return $this->CharityNumber;
    }
    /**
     * Set CharityNumber value
     * @param int $charityNumber
     * @return \macropage\ebaysdk\shopping\StructType\CharityType
     */
    public function setCharityNumber(?int $charityNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($charityNumber) && !(is_int($charityNumber) || ctype_digit($charityNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($charityNumber, true), gettype($charityNumber)), __LINE__);
        }
        $this->CharityNumber = $charityNumber;
        
        return $this;
    }
    /**
     * Get DonationPercent value
     * @return float|null
     */
    public function getDonationPercent(): ?float
    {
        return $this->DonationPercent;
    }
    /**
     * Set DonationPercent value
     * @param float $donationPercent
     * @return \macropage\ebaysdk\shopping\StructType\CharityType
     */
    public function setDonationPercent(?float $donationPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($donationPercent) && !(is_float($donationPercent) || is_numeric($donationPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($donationPercent, true), gettype($donationPercent)), __LINE__);
        }
        $this->DonationPercent = $donationPercent;
        
        return $this;
    }
    /**
     * Get Mission value
     * @return string|null
     */
    public function getMission(): ?string
    {
        return $this->Mission;
    }
    /**
     * Set Mission value
     * @param string $mission
     * @return \macropage\ebaysdk\shopping\StructType\CharityType
     */
    public function setMission(?string $mission = null): self
    {
        // validation for constraint: string
        if (!is_null($mission) && !is_string($mission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mission, true), gettype($mission)), __LINE__);
        }
        $this->Mission = $mission;
        
        return $this;
    }
    /**
     * Get LogoURL value
     * @return string|null
     */
    public function getLogoURL(): ?string
    {
        return $this->LogoURL;
    }
    /**
     * Set LogoURL value
     * @param string $logoURL
     * @return \macropage\ebaysdk\shopping\StructType\CharityType
     */
    public function setLogoURL(?string $logoURL = null): self
    {
        // validation for constraint: string
        if (!is_null($logoURL) && !is_string($logoURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logoURL, true), gettype($logoURL)), __LINE__);
        }
        $this->LogoURL = $logoURL;
        
        return $this;
    }
    /**
     * Get CharityListing value
     * @return bool|null
     */
    public function getCharityListing(): ?bool
    {
        return $this->CharityListing;
    }
    /**
     * Set CharityListing value
     * @param bool $charityListing
     * @return \macropage\ebaysdk\shopping\StructType\CharityType
     */
    public function setCharityListing(?bool $charityListing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($charityListing) && !is_bool($charityListing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($charityListing, true), gettype($charityListing)), __LINE__);
        }
        $this->CharityListing = $charityListing;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\shopping\EnumType\CharityStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\CharityStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\shopping\StructType\CharityType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\CharityStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\CharityStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\CharityStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\CharityType
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
