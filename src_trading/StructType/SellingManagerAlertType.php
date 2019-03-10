<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAlertType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the Alert container, which contains summary information on one type of Selling Manager alert.
 * @subpackage Structs
 */
class SellingManagerAlertType extends AbstractStructBase
{
    /**
     * The AlertType
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the type of Selling Manager alert returned to the seller. This field is always returned with the <b>Alert</b> container in the <b>GetSellingManagerAlerts</b> response.
     * - minOccurs: 0
     * @var string
     */
    public $AlertType;
    /**
     * The SoldAlert
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates an alert related to a sold item. This field is only returned if <b>AlertType</b>='Sold'.
     * - minOccurs: 0
     * @var string
     */
    public $SoldAlert;
    /**
     * The InventoryAlert
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates an alert related to the seller's inventory, such as a restocking alert. This field is only returned if <b>AlertType</b>='Inventory'.
     * - minOccurs: 0
     * @var string
     */
    public $InventoryAlert;
    /**
     * The AutomationAlert
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates an alert related to listing automation, and may be received when a listing does not conform to listing automation rules. This field is only returned if <b>AlertType</b>='Automation'.
     * - minOccurs: 0
     * @var string
     */
    public $AutomationAlert;
    /**
     * The PaisaPayAlert
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates an alert related to a PaisaPay issue. This field is only returned if <b>AlertType</b>='PaisaPay'.
     * - minOccurs: 0
     * @var string
     */
    public $PaisaPayAlert;
    /**
     * The GeneralAlert
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates a general alert was received, such as negative feedback received or an unpaid item dispute. This field is only returned if <b> AlertType</b>='General'.
     * - minOccurs: 0
     * @var string
     */
    public $GeneralAlert;
    /**
     * The DurationInDays
     * Meta informations extracted from the WSDL
     * - documentation: Represents the duration for which this alert is computed. This field is only returned if the alert is based on duration.
     * - minOccurs: 0
     * @var int
     */
    public $DurationInDays;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the number of items affected by the alert. This field is not returned if the count is 0.
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerAlertType
     * @uses SellingManagerAlertType::setAlertType()
     * @uses SellingManagerAlertType::setSoldAlert()
     * @uses SellingManagerAlertType::setInventoryAlert()
     * @uses SellingManagerAlertType::setAutomationAlert()
     * @uses SellingManagerAlertType::setPaisaPayAlert()
     * @uses SellingManagerAlertType::setGeneralAlert()
     * @uses SellingManagerAlertType::setDurationInDays()
     * @uses SellingManagerAlertType::setCount()
     * @uses SellingManagerAlertType::setAny()
     * @param string $alertType
     * @param string $soldAlert
     * @param string $inventoryAlert
     * @param string $automationAlert
     * @param string $paisaPayAlert
     * @param string $generalAlert
     * @param int $durationInDays
     * @param int $count
     * @param \DOMDocument $any
     */
    public function __construct($alertType = null, $soldAlert = null, $inventoryAlert = null, $automationAlert = null, $paisaPayAlert = null, $generalAlert = null, $durationInDays = null, $count = null, \DOMDocument $any = null)
    {
        $this
            ->setAlertType($alertType)
            ->setSoldAlert($soldAlert)
            ->setInventoryAlert($inventoryAlert)
            ->setAutomationAlert($automationAlert)
            ->setPaisaPayAlert($paisaPayAlert)
            ->setGeneralAlert($generalAlert)
            ->setDurationInDays($durationInDays)
            ->setCount($count)
            ->setAny($any);
    }
    /**
     * Get AlertType value
     * @return string|null
     */
    public function getAlertType()
    {
        return $this->AlertType;
    }
    /**
     * Set AlertType value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAlertTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAlertTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $alertType
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setAlertType($alertType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerAlertTypeCodeType::valueIsValid($alertType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $alertType, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerAlertTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AlertType = $alertType;
        return $this;
    }
    /**
     * Get SoldAlert value
     * @return string|null
     */
    public function getSoldAlert()
    {
        return $this->SoldAlert;
    }
    /**
     * Set SoldAlert value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $soldAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setSoldAlert($soldAlert = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid($soldAlert)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $soldAlert, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SoldAlert = $soldAlert;
        return $this;
    }
    /**
     * Get InventoryAlert value
     * @return string|null
     */
    public function getInventoryAlert()
    {
        return $this->InventoryAlert;
    }
    /**
     * Set InventoryAlert value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inventoryAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setInventoryAlert($inventoryAlert = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid($inventoryAlert)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $inventoryAlert, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->InventoryAlert = $inventoryAlert;
        return $this;
    }
    /**
     * Get AutomationAlert value
     * @return string|null
     */
    public function getAutomationAlert()
    {
        return $this->AutomationAlert;
    }
    /**
     * Set AutomationAlert value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutomationPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutomationPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $automationAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setAutomationAlert($automationAlert = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerAutomationPropertyTypeCodeType::valueIsValid($automationAlert)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $automationAlert, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerAutomationPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AutomationAlert = $automationAlert;
        return $this;
    }
    /**
     * Get PaisaPayAlert value
     * @return string|null
     */
    public function getPaisaPayAlert()
    {
        return $this->PaisaPayAlert;
    }
    /**
     * Set PaisaPayAlert value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerPaisaPayPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerPaisaPayPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paisaPayAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setPaisaPayAlert($paisaPayAlert = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerPaisaPayPropertyTypeCodeType::valueIsValid($paisaPayAlert)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paisaPayAlert, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerPaisaPayPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PaisaPayAlert = $paisaPayAlert;
        return $this;
    }
    /**
     * Get GeneralAlert value
     * @return string|null
     */
    public function getGeneralAlert()
    {
        return $this->GeneralAlert;
    }
    /**
     * Set GeneralAlert value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerGeneralPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerGeneralPropertyTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $generalAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setGeneralAlert($generalAlert = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerGeneralPropertyTypeCodeType::valueIsValid($generalAlert)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $generalAlert, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerGeneralPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->GeneralAlert = $generalAlert;
        return $this;
    }
    /**
     * Get DurationInDays value
     * @return int|null
     */
    public function getDurationInDays()
    {
        return $this->DurationInDays;
    }
    /**
     * Set DurationInDays value
     * @param int $durationInDays
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setDurationInDays($durationInDays = null)
    {
        // validation for constraint: int
        if (!is_null($durationInDays) && !is_numeric($durationInDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($durationInDays)), __LINE__);
        }
        $this->DurationInDays = $durationInDays;
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerAlertType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
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
