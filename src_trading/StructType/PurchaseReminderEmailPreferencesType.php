<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PurchaseReminderEmailPreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a seller's preference for sending a "Payment Reminder Email" to buyers.
 * @subpackage Structs
 */
class PurchaseReminderEmailPreferencesType extends AbstractStructBase
{
    /**
     * The PurchaseReminderEmailPreferences
     * Meta informations extracted from the WSDL
     * - documentation: If true, a payment reminder Email is sent to buyers.
     * - minOccurs: 0
     * @var bool
     */
    public $PurchaseReminderEmailPreferences;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PurchaseReminderEmailPreferencesType
     * @uses PurchaseReminderEmailPreferencesType::setPurchaseReminderEmailPreferences()
     * @uses PurchaseReminderEmailPreferencesType::setAny()
     * @param bool $purchaseReminderEmailPreferences
     * @param \DOMDocument $any
     */
    public function __construct($purchaseReminderEmailPreferences = null, \DOMDocument $any = null)
    {
        $this
            ->setPurchaseReminderEmailPreferences($purchaseReminderEmailPreferences)
            ->setAny($any);
    }
    /**
     * Get PurchaseReminderEmailPreferences value
     * @return bool|null
     */
    public function getPurchaseReminderEmailPreferences()
    {
        return $this->PurchaseReminderEmailPreferences;
    }
    /**
     * Set PurchaseReminderEmailPreferences value
     * @param bool $purchaseReminderEmailPreferences
     * @return \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType
     */
    public function setPurchaseReminderEmailPreferences($purchaseReminderEmailPreferences = null)
    {
        // validation for constraint: boolean
        if (!is_null($purchaseReminderEmailPreferences) && !is_bool($purchaseReminderEmailPreferences)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($purchaseReminderEmailPreferences)), __LINE__);
        }
        $this->PurchaseReminderEmailPreferences = $purchaseReminderEmailPreferences;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType
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
