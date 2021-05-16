<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerRequirementDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyerRequirementDetails</b> container, which allows the seller to set buyer requirements at the listing level. For the corresponding listing, all buyer requirement values/settings will overwrite values/settings
 * in Buyer Requirements preferences in My eBay.
 * @subpackage Structs
 */
class BuyerRequirementDetailsType extends AbstractStructBase
{
    /**
     * The ShipToRegistrationCountry
     * Meta information extracted from the WSDL
     * - documentation: The seller includes and sets this field to <code>true</code> as a mechanism to block bidders who reside (according to their eBay primary shipping address) in countries that are on the ship-to exclusion list. Sellers add countries or
     * regions to their ship-to exclusion list by adding those countries or regions using one or more <b>ExcludeShipToLocation</b> fields in an Add/Revise/Relist call. <br>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShipToRegistrationCountry = null;
    /**
     * The ZeroFeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: This Buyer Requirements feature is only available to sellers on the China site, and is only applicable to fixed-price or auction Buy It Now items. <br/><br/> The seller includes and sets this field to <code>true</code> as a mechanism
     * to block prospective buyers with a feedback score of 0 from buying items with a price of 100 RMB or higher. <br/>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ZeroFeedbackScore = null;
    /**
     * The MaximumItemRequirements
     * Meta information extracted from the WSDL
     * - documentation: The seller uses this container as a mechanism to restrict the number of items (specifying a <b>MaximumItemCount</b> value) a prospective buyer can purchase from the seller during a 10-day period. The seller also has the option of
     * setting a <b>MinimumFeedbackScore</b> requirement. If both fields of the <b>MaximumItemRequirements</b> container are set, the <b>MaximumItemCount</b> limit will only apply to those prospective buyers that don't equal or exceed the specified minimum
     * Feedback Score.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType $MaximumItemRequirements = null;
    /**
     * The MaximumUnpaidItemStrikesInfo
     * Meta information extracted from the WSDL
     * - documentation: The seller uses this container as a mechanism to block prospective buyers who have one or more Unpaid Item strikes on their account during a specified time period. A buyer receives an Unpaid Item strike if a seller files an Unpaid
     * Item case against the buyer, and eBay rules in favor of the seller.
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
