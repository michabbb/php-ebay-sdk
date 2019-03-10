<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteBuyerRequirementDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>BuyerRequirementDetails</b> container, which is returned in <b>GeteBayDetails</b>, and provides the seller with the buyer requirement features (and applicable values) that are supported by the listing site.
 * <br/><br/> <span class="tablenote"><b>Note: </b> This container is only returned if <b>BuyerRequirementDetails</b> is included as a <b>DetailName</b> filter in the call request, or if no <b>DetailName</b> filters are used in the request. </span>
 * @subpackage Structs
 */
class SiteBuyerRequirementDetailsType extends AbstractStructBase
{
    /**
     * The LinkedPayPalAccount
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is no longer applicable, as sellers can no longer set the Buyer Requirement that buyers must have a PayPal account linked to their eBay account in order to purchase an item. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $LinkedPayPalAccount;
    /**
     * The MaximumBuyerPolicyViolations
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is no longer applicable, as sellers can no longer set the Buyer Requirement that buyers must have only a certain amount of buyer policy violations within a specified amount of time in
     * order to purchase an item. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType
     */
    public $MaximumBuyerPolicyViolations;
    /**
     * The MaximumItemRequirements
     * Meta informations extracted from the WSDL
     * - documentation: This container shows the supported values that can be set as the <b>MaximumItemCount</b> and <b>MinimumFeedbackScore</b> to help control inexperienced or low Feedback bidders/buyers from bidding on or buying an item in a listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType
     */
    public $MaximumItemRequirements;
    /**
     * The MaximumUnpaidItemStrikesInfo
     * Meta informations extracted from the WSDL
     * - documentation: This container shows the supported values that can be set as the Maximum Unpaid Item count and period (number of days) to block buyers who have recent Unpaid Item Strikes from bidding on or buying an item in a listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public $MaximumUnpaidItemStrikesInfo;
    /**
     * The MinimumFeedbackScore
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is no longer applicable, as sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType
     */
    public $MinimumFeedbackScore;
    /**
     * The ShipToRegistrationCountry
     * Meta informations extracted from the WSDL
     * - documentation: A <code>true</code> value returned in this field indicates that the <b>ShipToRegistrationCountry</b> Buyer Requirement is supported for the specified site.
     * - minOccurs: 0
     * @var bool
     */
    public $ShipToRegistrationCountry;
    /**
     * The VerifiedUserRequirements
     * Meta informations extracted from the WSDL
     * - documentation: The Verified User Buyer Requirement has been deprecated, so this field is no longer applicable.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType
     */
    public $VerifiedUserRequirements;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: Gives the time in GMT when the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($linkedPayPalAccount = null, \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations = null, \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType $maximumItemRequirements = null, \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo = null, \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType $minimumFeedbackScore = null, $shipToRegistrationCountry = null, \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType $verifiedUserRequirements = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
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
    public function getLinkedPayPalAccount()
    {
        return $this->LinkedPayPalAccount;
    }
    /**
     * Set LinkedPayPalAccount value
     * @param bool $linkedPayPalAccount
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setLinkedPayPalAccount($linkedPayPalAccount = null)
    {
        // validation for constraint: boolean
        if (!is_null($linkedPayPalAccount) && !is_bool($linkedPayPalAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($linkedPayPalAccount)), __LINE__);
        }
        $this->LinkedPayPalAccount = $linkedPayPalAccount;
        return $this;
    }
    /**
     * Get MaximumBuyerPolicyViolations value
     * @return \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType|null
     */
    public function getMaximumBuyerPolicyViolations()
    {
        return $this->MaximumBuyerPolicyViolations;
    }
    /**
     * Set MaximumBuyerPolicyViolations value
     * @param \macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setMaximumBuyerPolicyViolations(\macropage\ebaysdk\trading\StructType\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations = null)
    {
        $this->MaximumBuyerPolicyViolations = $maximumBuyerPolicyViolations;
        return $this;
    }
    /**
     * Get MaximumItemRequirements value
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType|null
     */
    public function getMaximumItemRequirements()
    {
        return $this->MaximumItemRequirements;
    }
    /**
     * Set MaximumItemRequirements value
     * @param \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType $maximumItemRequirements
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setMaximumItemRequirements(\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsDetailsType $maximumItemRequirements = null)
    {
        $this->MaximumItemRequirements = $maximumItemRequirements;
        return $this;
    }
    /**
     * Get MaximumUnpaidItemStrikesInfo value
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType|null
     */
    public function getMaximumUnpaidItemStrikesInfo()
    {
        return $this->MaximumUnpaidItemStrikesInfo;
    }
    /**
     * Set MaximumUnpaidItemStrikesInfo value
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setMaximumUnpaidItemStrikesInfo(\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo = null)
    {
        $this->MaximumUnpaidItemStrikesInfo = $maximumUnpaidItemStrikesInfo;
        return $this;
    }
    /**
     * Get MinimumFeedbackScore value
     * @return \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType|null
     */
    public function getMinimumFeedbackScore()
    {
        return $this->MinimumFeedbackScore;
    }
    /**
     * Set MinimumFeedbackScore value
     * @param \macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType $minimumFeedbackScore
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setMinimumFeedbackScore(\macropage\ebaysdk\trading\StructType\MinimumFeedbackScoreDetailsType $minimumFeedbackScore = null)
    {
        $this->MinimumFeedbackScore = $minimumFeedbackScore;
        return $this;
    }
    /**
     * Get ShipToRegistrationCountry value
     * @return bool|null
     */
    public function getShipToRegistrationCountry()
    {
        return $this->ShipToRegistrationCountry;
    }
    /**
     * Set ShipToRegistrationCountry value
     * @param bool $shipToRegistrationCountry
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setShipToRegistrationCountry($shipToRegistrationCountry = null)
    {
        // validation for constraint: boolean
        if (!is_null($shipToRegistrationCountry) && !is_bool($shipToRegistrationCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shipToRegistrationCountry)), __LINE__);
        }
        $this->ShipToRegistrationCountry = $shipToRegistrationCountry;
        return $this;
    }
    /**
     * Get VerifiedUserRequirements value
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType|null
     */
    public function getVerifiedUserRequirements()
    {
        return $this->VerifiedUserRequirements;
    }
    /**
     * Set VerifiedUserRequirements value
     * @param \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType $verifiedUserRequirements
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setVerifiedUserRequirements(\macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsDetailsType $verifiedUserRequirements = null)
    {
        $this->VerifiedUserRequirements = $verifiedUserRequirements;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\SiteBuyerRequirementDetailsType
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
