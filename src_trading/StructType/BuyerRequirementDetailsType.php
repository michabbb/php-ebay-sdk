<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerRequirementDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyerRequirementDetails</b> container, which indicates if the seller has set any buyer requirements that apply to a listing. Sellers use buyer requirements if they want to avoid working with 'risky' buyers, who
 * may be brand new to eBay, have low/poor Feedback scores, or who have some unpaid item strikes or buyer-initiated cancellations.
 * @subpackage Structs
 */
class BuyerRequirementDetailsType extends AbstractStructBase
{
    /**
     * The ShipToRegistrationCountry
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the seller has enabled the setting to block buyers/bidders who reside (according to their eBay primary shipping address) in countries that are on the seller's ship-to exclusion list.
     * <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShipToRegistrationCountry = null;
    /**
     * The ZeroFeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the seller has enabled the setting to block buyers/bidders with a feedback score of 0 from buying items. <br/>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ZeroFeedbackScore = null;
    /**
     * The MaximumItemRequirements
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if the seller has set a maximum quantity threshold buyer requirement. With this buyer requirement, a buyer is limited in regards to the quantity of a line item that may be purchased. <br/><br/> This buyer
     * requirement is only applicable to fixed-price listings where multiple quantity is available for purchase. <br/><br/> In addition to setting a maximum quantity threshold buyer requirement, the seller can also choose to apply this threshold to only
     * those prospective buyers who don't meet or exceed the minimum Feedback score threshold.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType $MaximumItemRequirements = null;
    /**
     * The MaximumUnpaidItemStrikesInfo
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if the seller has enabled a setting to block prospective buyers who have one or more unpaid items and/or buyer-initiated cancellations on their account during a specified time period.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType $MaximumUnpaidItemStrikesInfo = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BuyerRequirementDetailsType
     * @uses BuyerRequirementDetailsType::setShipToRegistrationCountry()
     * @uses BuyerRequirementDetailsType::setZeroFeedbackScore()
     * @uses BuyerRequirementDetailsType::setMaximumItemRequirements()
     * @uses BuyerRequirementDetailsType::setMaximumUnpaidItemStrikesInfo()
     * @uses BuyerRequirementDetailsType::setAny()
     * @param bool $shipToRegistrationCountry
     * @param bool $zeroFeedbackScore
     * @param \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType $maximumItemRequirements
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $shipToRegistrationCountry = null, ?bool $zeroFeedbackScore = null, ?\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType $maximumItemRequirements = null, ?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo = null, $any = null)
    {
        $this
            ->setShipToRegistrationCountry($shipToRegistrationCountry)
            ->setZeroFeedbackScore($zeroFeedbackScore)
            ->setMaximumItemRequirements($maximumItemRequirements)
            ->setMaximumUnpaidItemStrikesInfo($maximumUnpaidItemStrikesInfo)
            ->setAny($any);
    }
    /**
     * Get ShipToRegistrationCountry value
     * @return bool|null
     */
    public function getShipToRegistrationCountry(): ?bool
    {
        return $this->ShipToRegistrationCountry;
    }
    /**
     * Set ShipToRegistrationCountry value
     * @param bool $shipToRegistrationCountry
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
     */
    public function setShipToRegistrationCountry(?bool $shipToRegistrationCountry = null): self
    {
        // validation for constraint: boolean
        if (!is_null($shipToRegistrationCountry) && !is_bool($shipToRegistrationCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shipToRegistrationCountry, true), gettype($shipToRegistrationCountry)), __LINE__);
        }
        $this->ShipToRegistrationCountry = $shipToRegistrationCountry;
        
        return $this;
    }
    /**
     * Get ZeroFeedbackScore value
     * @return bool|null
     */
    public function getZeroFeedbackScore(): ?bool
    {
        return $this->ZeroFeedbackScore;
    }
    /**
     * Set ZeroFeedbackScore value
     * @param bool $zeroFeedbackScore
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
     */
    public function setZeroFeedbackScore(?bool $zeroFeedbackScore = null): self
    {
        // validation for constraint: boolean
        if (!is_null($zeroFeedbackScore) && !is_bool($zeroFeedbackScore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zeroFeedbackScore, true), gettype($zeroFeedbackScore)), __LINE__);
        }
        $this->ZeroFeedbackScore = $zeroFeedbackScore;
        
        return $this;
    }
    /**
     * Get MaximumItemRequirements value
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType|null
     */
    public function getMaximumItemRequirements(): ?\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType
    {
        return $this->MaximumItemRequirements;
    }
    /**
     * Set MaximumItemRequirements value
     * @param \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType $maximumItemRequirements
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
     */
    public function setMaximumItemRequirements(?\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType $maximumItemRequirements = null): self
    {
        $this->MaximumItemRequirements = $maximumItemRequirements;
        
        return $this;
    }
    /**
     * Get MaximumUnpaidItemStrikesInfo value
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType|null
     */
    public function getMaximumUnpaidItemStrikesInfo(): ?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType
    {
        return $this->MaximumUnpaidItemStrikesInfo;
    }
    /**
     * Set MaximumUnpaidItemStrikesInfo value
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
     */
    public function setMaximumUnpaidItemStrikesInfo(?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo = null): self
    {
        $this->MaximumUnpaidItemStrikesInfo = $maximumUnpaidItemStrikesInfo;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
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
