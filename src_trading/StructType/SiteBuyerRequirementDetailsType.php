<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteBuyerRequirementDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyerRequirementDetails</b> container, which is returned in <b>GeteBayDetails</b>, and provides the seller with the buyer requirement features (and applicable values) that are supported by the listing site.
 * <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>BuyerRequirementDetails</b> is included as a <b>DetailName</b> filter in the call request, or if no <b>DetailName</b> filters are used in the request. </span>
 * @subpackage Structs
 */
class SiteBuyerRequirementDetailsType extends AbstractStructBase
{
    /**
     * The LinkedPayPalAccount
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is no longer applicable, as sellers can no longer set the Buyer Requirement that buyers must have a PayPal account linked to their eBay account in order to purchase an item. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LinkedPayPalAccount = null;
    /**
     * The MaximumBuyerPolicyViolations
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is no longer applicable, as sellers can no longer set the Buyer Requirement that buyers must have only a certain amount of buyer policy violations within a specified amount of time in
     * order to purchase an item. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType $MaximumBuyerPolicyViolations = null;
    /**
     * The MaximumItemRequirements
     * Meta information extracted from the WSDL
     * - documentation: This container shows the supported values that can be set as the <b>MaximumItemCount</b> and <b>MinimumFeedbackScore</b> to help control inexperienced or low Feedback bidders/buyers from bidding on or buying an item in a listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType $MaximumItemRequirements = null;
    /**
     * The MaximumUnpaidItemStrikesInfo
     * Meta information extracted from the WSDL
     * - documentation: This container shows the supported values that can be set as the Maximum Unpaid Item count and period (number of days) to block buyers who have recent Unpaid Item Strikes from bidding on or buying an item in a listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType $MaximumUnpaidItemStrikesInfo = null;
    /**
     * The MinimumFeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is no longer applicable, as sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType $MinimumFeedbackScore = null;
    /**
     * The ShipToRegistrationCountry
     * Meta information extracted from the WSDL
     * - documentation: A <code>true</code> value returned in this field indicates that the <b>ShipToRegistrationCountry</b> Buyer Requirement is supported for the specified site.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShipToRegistrationCountry = null;
    /**
     * The VerifiedUserRequirements
     * Meta information extracted from the WSDL
     * - documentation: The Verified User Buyer Requirement has been deprecated, so this field is no longer applicable.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType $VerifiedUserRequirements = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT when the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SiteBuyerRequirementDetailsType
     * @uses SiteBuyerRequirementDetailsType::setLinkedPayPalAccount()
     * @uses SiteBuyerRequirementDetailsType::setMaximumBuyerPolicyViolations()
     * @uses SiteBuyerRequirementDetailsType::setMaximumItemRequirements()
     * @uses SiteBuyerRequirementDetailsType::setMaximumUnpaidItemStrikesInfo()
     * @uses SiteBuyerRequirementDetailsType::setMinimumFeedbackScore()
     * @uses SiteBuyerRequirementDetailsType::setShipToRegistrationCountry()
     * @uses SiteBuyerRequirementDetailsType::setVerifiedUserRequirements()
     * @uses SiteBuyerRequirementDetailsType::setDetailVersion()
     * @uses SiteBuyerRequirementDetailsType::setUpdateTime()
     * @uses SiteBuyerRequirementDetailsType::setAny()
     * @param bool $linkedPayPalAccount
     * @param \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations
     * @param \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType $maximumItemRequirements
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo
     * @param \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType $minimumFeedbackScore
     * @param bool $shipToRegistrationCountry
     * @param \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType $verifiedUserRequirements
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $linkedPayPalAccount = null, ?\macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations = null, ?\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType $maximumItemRequirements = null, ?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo = null, ?\macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType $minimumFeedbackScore = null, ?bool $shipToRegistrationCountry = null, ?\macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType $verifiedUserRequirements = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setLinkedPayPalAccount($linkedPayPalAccount)
            ->setMaximumBuyerPolicyViolations($maximumBuyerPolicyViolations)
            ->setMaximumItemRequirements($maximumItemRequirements)
            ->setMaximumUnpaidItemStrikesInfo($maximumUnpaidItemStrikesInfo)
            ->setMinimumFeedbackScore($minimumFeedbackScore)
            ->setShipToRegistrationCountry($shipToRegistrationCountry)
            ->setVerifiedUserRequirements($verifiedUserRequirements)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get LinkedPayPalAccount value
     * @return bool|null
     */
    public function getLinkedPayPalAccount(): ?bool
    {
        return $this->LinkedPayPalAccount;
    }
    /**
     * Set LinkedPayPalAccount value
     * @param bool $linkedPayPalAccount
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setLinkedPayPalAccount(?bool $linkedPayPalAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($linkedPayPalAccount) && !is_bool($linkedPayPalAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($linkedPayPalAccount, true), gettype($linkedPayPalAccount)), __LINE__);
        }
        $this->LinkedPayPalAccount = $linkedPayPalAccount;
        
        return $this;
    }
    /**
     * Get MaximumBuyerPolicyViolations value
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType|null
     */
    public function getMaximumBuyerPolicyViolations(): ?\macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
    {
        return $this->MaximumBuyerPolicyViolations;
    }
    /**
     * Set MaximumBuyerPolicyViolations value
     * @param \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setMaximumBuyerPolicyViolations(?\macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations = null): self
    {
        $this->MaximumBuyerPolicyViolations = $maximumBuyerPolicyViolations;
        
        return $this;
    }
    /**
     * Get MaximumItemRequirements value
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType|null
     */
    public function getMaximumItemRequirements(): ?\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
    {
        return $this->MaximumItemRequirements;
    }
    /**
     * Set MaximumItemRequirements value
     * @param \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType $maximumItemRequirements
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setMaximumItemRequirements(?\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType $maximumItemRequirements = null): self
    {
        $this->MaximumItemRequirements = $maximumItemRequirements;
        
        return $this;
    }
    /**
     * Get MaximumUnpaidItemStrikesInfo value
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType|null
     */
    public function getMaximumUnpaidItemStrikesInfo(): ?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
    {
        return $this->MaximumUnpaidItemStrikesInfo;
    }
    /**
     * Set MaximumUnpaidItemStrikesInfo value
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setMaximumUnpaidItemStrikesInfo(?\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo = null): self
    {
        $this->MaximumUnpaidItemStrikesInfo = $maximumUnpaidItemStrikesInfo;
        
        return $this;
    }
    /**
     * Get MinimumFeedbackScore value
     * @return \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType|null
     */
    public function getMinimumFeedbackScore(): ?\macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType
    {
        return $this->MinimumFeedbackScore;
    }
    /**
     * Set MinimumFeedbackScore value
     * @param \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType $minimumFeedbackScore
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setMinimumFeedbackScore(?\macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType $minimumFeedbackScore = null): self
    {
        $this->MinimumFeedbackScore = $minimumFeedbackScore;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
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
     * Get VerifiedUserRequirements value
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType|null
     */
    public function getVerifiedUserRequirements(): ?\macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
    {
        return $this->VerifiedUserRequirements;
    }
    /**
     * Set VerifiedUserRequirements value
     * @param \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType $verifiedUserRequirements
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setVerifiedUserRequirements(?\macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType $verifiedUserRequirements = null): self
    {
        $this->VerifiedUserRequirements = $verifiedUserRequirements;
        
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion(): ?string
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setDetailVersion(?string $detailVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
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
