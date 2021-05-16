<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAlertType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the Alert container, which contains summary information on one type of Selling Manager alert.
 * @subpackage Structs
 */
class SellingManagerAlertType extends AbstractStructBase
{
    /**
     * The AlertType
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the type of Selling Manager alert returned to the seller. This field is always returned with the <b>Alert</b> container in the <b>GetSellingManagerAlerts</b> response.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AlertType = null;
    /**
     * The SoldAlert
     * Meta information extracted from the WSDL
     * - documentation: This value indicates an alert related to a sold item. This field is only returned if <b>AlertType</b>='Sold'.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SoldAlert = null;
    /**
     * The InventoryAlert
     * Meta information extracted from the WSDL
     * - documentation: This value indicates an alert related to the seller's inventory, such as a restocking alert. This field is only returned if <b>AlertType</b>='Inventory'.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InventoryAlert = null;
    /**
     * The AutomationAlert
     * Meta information extracted from the WSDL
     * - documentation: This value indicates an alert related to listing automation, and may be received when a listing does not conform to listing automation rules. This field is only returned if <b>AlertType</b>='Automation'.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AutomationAlert = null;
    /**
     * The PaisaPayAlert
     * Meta information extracted from the WSDL
     * - documentation: This value indicates an alert related to a PaisaPay issue. This field is only returned if <b>AlertType</b>='PaisaPay'.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaisaPayAlert = null;
    /**
     * The GeneralAlert
     * Meta information extracted from the WSDL
     * - documentation: This value indicates a general alert was received, such as negative feedback received or an unpaid item dispute. This field is only returned if <b> AlertType</b>='General'.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GeneralAlert = null;
    /**
     * The DurationInDays
     * Meta information extracted from the WSDL
     * - documentation: Represents the duration for which this alert is computed. This field is only returned if the alert is based on duration.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DurationInDays = null;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the number of items affected by the alert. This field is not returned if the count is 0.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $alertType = null, ?string $soldAlert = null, ?string $inventoryAlert = null, ?string $automationAlert = null, ?string $paisaPayAlert = null, ?string $generalAlert = null, ?int $durationInDays = null, ?int $count = null, $any = null)
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
    public function getAlertType(): ?string
    {
        return $this->AlertType;
    }
    /**
     * Set AlertType value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAlertTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAlertTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $alertType
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setAlertType(?string $alertType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerAlertTypeCodeType::valueIsValid($alertType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerAlertTypeCodeType', is_array($alertType) ? implode(', ', $alertType) : var_export($alertType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerAlertTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AlertType = $alertType;
        
        return $this;
    }
    /**
     * Get SoldAlert value
     * @return string|null
     */
    public function getSoldAlert(): ?string
    {
        return $this->SoldAlert;
    }
    /**
     * Set SoldAlert value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $soldAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setSoldAlert(?string $soldAlert = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::valueIsValid($soldAlert)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType', is_array($soldAlert) ? implode(', ', $soldAlert) : var_export($soldAlert, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerSoldListingsPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SoldAlert = $soldAlert;
        
        return $this;
    }
    /**
     * Get InventoryAlert value
     * @return string|null
     */
    public function getInventoryAlert(): ?string
    {
        return $this->InventoryAlert;
    }
    /**
     * Set InventoryAlert value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $inventoryAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setInventoryAlert(?string $inventoryAlert = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::valueIsValid($inventoryAlert)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType', is_array($inventoryAlert) ? implode(', ', $inventoryAlert) : var_export($inventoryAlert, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerInventoryPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->InventoryAlert = $inventoryAlert;
        
        return $this;
    }
    /**
     * Get AutomationAlert value
     * @return string|null
     */
    public function getAutomationAlert(): ?string
    {
        return $this->AutomationAlert;
    }
    /**
     * Set AutomationAlert value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutomationPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerAutomationPropertyTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $automationAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setAutomationAlert(?string $automationAlert = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerAutomationPropertyTypeCodeType::valueIsValid($automationAlert)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerAutomationPropertyTypeCodeType', is_array($automationAlert) ? implode(', ', $automationAlert) : var_export($automationAlert, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerAutomationPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AutomationAlert = $automationAlert;
        
        return $this;
    }
    /**
     * Get PaisaPayAlert value
     * @return string|null
     */
    public function getPaisaPayAlert(): ?string
    {
        return $this->PaisaPayAlert;
    }
    /**
     * Set PaisaPayAlert value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerPaisaPayPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerPaisaPayPropertyTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paisaPayAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setPaisaPayAlert(?string $paisaPayAlert = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerPaisaPayPropertyTypeCodeType::valueIsValid($paisaPayAlert)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerPaisaPayPropertyTypeCodeType', is_array($paisaPayAlert) ? implode(', ', $paisaPayAlert) : var_export($paisaPayAlert, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerPaisaPayPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PaisaPayAlert = $paisaPayAlert;
        
        return $this;
    }
    /**
     * Get GeneralAlert value
     * @return string|null
     */
    public function getGeneralAlert(): ?string
    {
        return $this->GeneralAlert;
    }
    /**
     * Set GeneralAlert value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerGeneralPropertyTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerGeneralPropertyTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $generalAlert
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setGeneralAlert(?string $generalAlert = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerGeneralPropertyTypeCodeType::valueIsValid($generalAlert)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerGeneralPropertyTypeCodeType', is_array($generalAlert) ? implode(', ', $generalAlert) : var_export($generalAlert, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerGeneralPropertyTypeCodeType::getValidValues())), __LINE__);
        }
        $this->GeneralAlert = $generalAlert;
        
        return $this;
    }
    /**
     * Get DurationInDays value
     * @return int|null
     */
    public function getDurationInDays(): ?int
    {
        return $this->DurationInDays;
    }
    /**
     * Set DurationInDays value
     * @param int $durationInDays
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setDurationInDays(?int $durationInDays = null): self
    {
        // validation for constraint: int
        if (!is_null($durationInDays) && !(is_int($durationInDays) || ctype_digit($durationInDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationInDays, true), gettype($durationInDays)), __LINE__);
        }
        $this->DurationInDays = $durationInDays;
        
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType
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
