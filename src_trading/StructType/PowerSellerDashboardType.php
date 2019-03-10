<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PowerSellerDashboardType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>PowerSellerStatus</b> container returned in the <b>GetSellerDashboard</b> response. The <b>PowerSellerStatus</b> container is only returned if the seller making the call is a Power Seller.
 * @subpackage Structs
 */
class PowerSellerDashboardType extends AbstractStructBase
{
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the seller's eBay PowerSeller tier. PowerSellers are distinguished in five tiers based on average monthly sales. Benefits and services vary for each tier. eBay calculates eligibility for each tier on a monthly
     * basis.
     * - minOccurs: 0
     * @var string
     */
    public $Level;
    /**
     * The Alert
     * Meta informations extracted from the WSDL
     * - documentation: The <b>PowerSellerStatus.Alert</b> container is only returned if eBay has posted one or more informational or warning messages related to the seller's PowerSeller status.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[]
     */
    public $Alert;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PowerSellerDashboardType
     * @uses PowerSellerDashboardType::setLevel()
     * @uses PowerSellerDashboardType::setAlert()
     * @uses PowerSellerDashboardType::setAny()
     * @param string $level
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[] $alert
     * @param \DOMDocument $any
     */
    public function __construct($level = null, array $alert = array(), \DOMDocument $any = null)
    {
        $this
            ->setLevel($level)
            ->setAlert($alert)
            ->setAny($any);
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $level
     * @return \macropage\ebaysdk\trading\StructType\PowerSellerDashboardType
     */
    public function setLevel($level = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerLevelCodeType::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $level, implode(', ', \macropage\ebaysdk\trading\EnumType\SellerLevelCodeType::getValidValues())), __LINE__);
        }
        $this->Level = $level;
        return $this;
    }
    /**
     * Get Alert value
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[]|null
     */
    public function getAlert()
    {
        return $this->Alert;
    }
    /**
     * Set Alert value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[] $alert
     * @return \macropage\ebaysdk\trading\StructType\PowerSellerDashboardType
     */
    public function setAlert(array $alert = array())
    {
        foreach ($alert as $powerSellerDashboardTypeAlertItem) {
            // validation for constraint: itemType
            if (!$powerSellerDashboardTypeAlertItem instanceof \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType) {
                throw new \InvalidArgumentException(sprintf('The Alert property can only contain items of \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType, "%s" given', is_object($powerSellerDashboardTypeAlertItem) ? get_class($powerSellerDashboardTypeAlertItem) : gettype($powerSellerDashboardTypeAlertItem)), __LINE__);
            }
        }
        $this->Alert = $alert;
        return $this;
    }
    /**
     * Add item to Alert value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $item
     * @return \macropage\ebaysdk\trading\StructType\PowerSellerDashboardType
     */
    public function addToAlert(\macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType) {
            throw new \InvalidArgumentException(sprintf('The Alert property can only contain items of \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Alert[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PowerSellerDashboardType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PowerSellerDashboardType
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
     * @return \macropage\ebaysdk\trading\StructType\PowerSellerDashboardType
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
