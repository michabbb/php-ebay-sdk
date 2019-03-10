<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerRequirementDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>BuyerRequirementDetails</b> container, which allows the seller to set buyer requirements at the listing level. For the corresponding listing, all buyer requirement values/settings will overwrite values/settings
 * in Buyer Requirements preferences in My eBay.
 * @subpackage Structs
 */
class BuyerRequirementDetailsType extends AbstractStructBase
{
    /**
     * The ShipToRegistrationCountry
     * Meta informations extracted from the WSDL
     * - documentation: The seller includes and sets this field to <code>true</code> as a mechanism to block bidders who reside (according to their eBay primary shipping address) in countries that are on the ship-to exclusion list. Sellers add countries or
     * regions to their ship-to exclusion list by adding those countries or regions using one or more <b>ExcludeShipToLocation</b> fields in an Add/Revise/Relist call. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $ShipToRegistrationCountry;
    /**
     * The ZeroFeedbackScore
     * Meta informations extracted from the WSDL
     * - documentation: This Buyer Requirements feature is only available to sellers on the China site, and is only applicable to fixed-price or auction Buy It Now items. <br/><br/> The seller includes and sets this field to <code>true</code> as a mechanism
     * to block prospective buyers with a feedback score of 0 from buying items with a price of 100 RMB or higher. <br/>
     * - minOccurs: 0
     * @var bool
     */
    public $ZeroFeedbackScore;
    /**
     * The MaximumItemRequirements
     * Meta informations extracted from the WSDL
     * - documentation: The seller uses this container as a mechanism to restrict the number of items (specifying a <b>MaximumItemCount</b> value) a prospective buyer can purchase from the seller during a 10-day period. The seller also has the option of
     * setting a <b>MinimumFeedbackScore</b> requirement. If both fields of the <b>MaximumItemRequirements</b> container are set, the <b>MaximumItemCount</b> limit will only apply to those prospective buyers that don't equal or exceed the specified minimum
     * Feedback Score.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType
     */
    public $MaximumItemRequirements;
    /**
     * The MaximumUnpaidItemStrikesInfo
     * Meta informations extracted from the WSDL
     * - documentation: The seller uses this container as a mechanism to block prospective buyers who have one or more Unpaid Item Strikes on their account during a specified time period. A buyer receives an Unpaid Item Strike is a seller files an Unpaid
     * Item case against the buyer, and eBay rules in favor of the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType
     */
    public $MaximumUnpaidItemStrikesInfo;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($shipToRegistrationCountry = null, $zeroFeedbackScore = null, \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType $maximumItemRequirements = null, \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo = null, \DOMDocument $any = null)
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
    public function getShipToRegistrationCountry()
    {
        return $this->ShipToRegistrationCountry;
    }
    /**
     * Set ShipToRegistrationCountry value
     * @param bool $shipToRegistrationCountry
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
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
     * Get ZeroFeedbackScore value
     * @return bool|null
     */
    public function getZeroFeedbackScore()
    {
        return $this->ZeroFeedbackScore;
    }
    /**
     * Set ZeroFeedbackScore value
     * @param bool $zeroFeedbackScore
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
     */
    public function setZeroFeedbackScore($zeroFeedbackScore = null)
    {
        // validation for constraint: boolean
        if (!is_null($zeroFeedbackScore) && !is_bool($zeroFeedbackScore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($zeroFeedbackScore)), __LINE__);
        }
        $this->ZeroFeedbackScore = $zeroFeedbackScore;
        return $this;
    }
    /**
     * Get MaximumItemRequirements value
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType|null
     */
    public function getMaximumItemRequirements()
    {
        return $this->MaximumItemRequirements;
    }
    /**
     * Set MaximumItemRequirements value
     * @param \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType $maximumItemRequirements
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
     */
    public function setMaximumItemRequirements(\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType $maximumItemRequirements = null)
    {
        $this->MaximumItemRequirements = $maximumItemRequirements;
        return $this;
    }
    /**
     * Get MaximumUnpaidItemStrikesInfo value
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType|null
     */
    public function getMaximumUnpaidItemStrikesInfo()
    {
        return $this->MaximumUnpaidItemStrikesInfo;
    }
    /**
     * Set MaximumUnpaidItemStrikesInfo value
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
     */
    public function setMaximumUnpaidItemStrikesInfo(\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo = null)
    {
        $this->MaximumUnpaidItemStrikesInfo = $maximumUnpaidItemStrikesInfo;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerRequirementDetailsType
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
