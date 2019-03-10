<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>ReportItem</b> container. A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property
 * rights.
 * @subpackage Structs
 */
class VeROReportItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier for the listing being reported for the alleged infringement, which is specified in the <b>VeROReasonCodeID</b> field. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The VeROReasonCodeID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier for the type of claimed infringement. The <b>GetVeROReasonCodeDetails</b> call can be used to retrieve a list of reason codes for a given eBay site.
     * - minOccurs: 0
     * @var int
     */
    public $VeROReasonCodeID;
    /**
     * The MessageToSeller
     * Meta informations extracted from the WSDL
     * - documentation: This field is used by the VeRO Program member to provide more details to the seller about why the item is being reported as violating copyright, trademark, or intellectual property rights.
     * - minOccurs: 0
     * @var string
     */
    public $MessageToSeller;
    /**
     * The CopyEmailToRightsOwner
     * Meta informations extracted from the WSDL
     * - documentation: If the VeRO Program member wants a copy of the Notice of Claimed Infringement (NOCI) document sent to their email address, this field should be included in the request and set to <code>true</code>. This same document is automatically
     * sent to the seller of the reported item.
     * - minOccurs: 0
     * @var bool
     */
    public $CopyEmailToRightsOwner;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - documentation: If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which geographical region the item is shipped to, each region that would trigger this infringement type should be specified in its own
     * <b>Region</b> field. Supported values for <b>Region</b> are found in <b>ShippingRegionCodeType</b>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Region;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - documentation: If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which country the item is shipped to, each country that would trigger this infringement type should be specified in its own <b>Country</b> field.
     * Supported values for <b>Country</b> are found in <b>CountryCodeType</b>. <br><br> This field is required when the <b>VeROReasonCodeID</b> is 9037 (Item(s) is unlawful importation of product bearing trademark).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Country;
    /**
     * The Patent
     * Meta informations extracted from the WSDL
     * - documentation: This string field is used to specify the number of a product patent that is being violated. <br><br> This field is required when the <b>VeROReasonCodeID</b> is 9048 (Item(s) infringes a valid patent).
     * - minOccurs: 0
     * @var string
     */
    public $Patent;
    /**
     * The DetailedMessage
     * Meta informations extracted from the WSDL
     * - documentation: Explanatory text from the VeRO Program member. This field is conditionally required when the <b>VeROReasonCodeID</b> is <code>Others</code>. Note that there is a 1000-character restriction on this text field when the items are being
     * reported with the <code>Others</code> reason code.
     * - minOccurs: 0
     * @var string
     */
    public $DetailedMessage;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VeROReportItemType
     * @uses VeROReportItemType::setItemID()
     * @uses VeROReportItemType::setVeROReasonCodeID()
     * @uses VeROReportItemType::setMessageToSeller()
     * @uses VeROReportItemType::setCopyEmailToRightsOwner()
     * @uses VeROReportItemType::setRegion()
     * @uses VeROReportItemType::setCountry()
     * @uses VeROReportItemType::setPatent()
     * @uses VeROReportItemType::setDetailedMessage()
     * @uses VeROReportItemType::setAny()
     * @param string $itemID
     * @param int $veROReasonCodeID
     * @param string $messageToSeller
     * @param bool $copyEmailToRightsOwner
     * @param string[] $region
     * @param string[] $country
     * @param string $patent
     * @param string $detailedMessage
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $veROReasonCodeID = null, $messageToSeller = null, $copyEmailToRightsOwner = null, array $region = array(), array $country = array(), $patent = null, $detailedMessage = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setVeROReasonCodeID($veROReasonCodeID)
            ->setMessageToSeller($messageToSeller)
            ->setCopyEmailToRightsOwner($copyEmailToRightsOwner)
            ->setRegion($region)
            ->setCountry($country)
            ->setPatent($patent)
            ->setDetailedMessage($detailedMessage)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get VeROReasonCodeID value
     * @return int|null
     */
    public function getVeROReasonCodeID()
    {
        return $this->VeROReasonCodeID;
    }
    /**
     * Set VeROReasonCodeID value
     * @param int $veROReasonCodeID
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
     */
    public function setVeROReasonCodeID($veROReasonCodeID = null)
    {
        // validation for constraint: int
        if (!is_null($veROReasonCodeID) && !is_numeric($veROReasonCodeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($veROReasonCodeID)), __LINE__);
        }
        $this->VeROReasonCodeID = $veROReasonCodeID;
        return $this;
    }
    /**
     * Get MessageToSeller value
     * @return string|null
     */
    public function getMessageToSeller()
    {
        return $this->MessageToSeller;
    }
    /**
     * Set MessageToSeller value
     * @param string $messageToSeller
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
     */
    public function setMessageToSeller($messageToSeller = null)
    {
        // validation for constraint: string
        if (!is_null($messageToSeller) && !is_string($messageToSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageToSeller)), __LINE__);
        }
        $this->MessageToSeller = $messageToSeller;
        return $this;
    }
    /**
     * Get CopyEmailToRightsOwner value
     * @return bool|null
     */
    public function getCopyEmailToRightsOwner()
    {
        return $this->CopyEmailToRightsOwner;
    }
    /**
     * Set CopyEmailToRightsOwner value
     * @param bool $copyEmailToRightsOwner
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
     */
    public function setCopyEmailToRightsOwner($copyEmailToRightsOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($copyEmailToRightsOwner) && !is_bool($copyEmailToRightsOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($copyEmailToRightsOwner)), __LINE__);
        }
        $this->CopyEmailToRightsOwner = $copyEmailToRightsOwner;
        return $this;
    }
    /**
     * Get Region value
     * @return string[]|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingRegionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingRegionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $region
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
     */
    public function setRegion(array $region = array())
    {
        $invalidValues = array();
        foreach ($region as $veROReportItemTypeRegionItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ShippingRegionCodeType::valueIsValid($veROReportItemTypeRegionItem)) {
                $invalidValues[] = var_export($veROReportItemTypeRegionItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingRegionCodeType::getValidValues())), __LINE__);
        }
        $this->Region = $region;
        return $this;
    }
    /**
     * Add item to Region value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingRegionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingRegionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
     */
    public function addToRegion($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingRegionCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingRegionCodeType::getValidValues())), __LINE__);
        }
        $this->Region[] = $item;
        return $this;
    }
    /**
     * Get Country value
     * @return string[]|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $country
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
     */
    public function setCountry(array $country = array())
    {
        $invalidValues = array();
        foreach ($country as $veROReportItemTypeCountryItem) {
            if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($veROReportItemTypeCountryItem)) {
                $invalidValues[] = var_export($veROReportItemTypeCountryItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Add item to Country value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
     */
    public function addToCountry($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Country[] = $item;
        return $this;
    }
    /**
     * Get Patent value
     * @return string|null
     */
    public function getPatent()
    {
        return $this->Patent;
    }
    /**
     * Set Patent value
     * @param string $patent
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
     */
    public function setPatent($patent = null)
    {
        // validation for constraint: string
        if (!is_null($patent) && !is_string($patent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($patent)), __LINE__);
        }
        $this->Patent = $patent;
        return $this;
    }
    /**
     * Get DetailedMessage value
     * @return string|null
     */
    public function getDetailedMessage()
    {
        return $this->DetailedMessage;
    }
    /**
     * Set DetailedMessage value
     * @param string $detailedMessage
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
     */
    public function setDetailedMessage($detailedMessage = null)
    {
        // validation for constraint: string
        if (!is_null($detailedMessage) && !is_string($detailedMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailedMessage)), __LINE__);
        }
        $this->DetailedMessage = $detailedMessage;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\VeROReportItemType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
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
     * @return \macropage\ebaysdk\trading\StructType\VeROReportItemType
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
