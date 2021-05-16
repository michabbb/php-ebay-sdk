<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PurchaseReminderEmailPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a seller's preference for sending a "Payment Reminder Email" to buyers.
 * @subpackage Structs
 */
class PurchaseReminderEmailPreferencesType extends AbstractStructBase
{
    /**
     * The PurchaseReminderEmailPreferences
     * Meta information extracted from the WSDL
     * - documentation: If true, a payment reminder Email is sent to buyers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PurchaseReminderEmailPreferences = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PurchaseReminderEmailPreferencesType
     * @uses PurchaseReminderEmailPreferencesType::setPurchaseReminderEmailPreferences()
     * @uses PurchaseReminderEmailPreferencesType::setAny()
     * @param bool $purchaseReminderEmailPreferences
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $purchaseReminderEmailPreferences = null, $any = null)
    {
        $this
            ->setPurchaseReminderEmailPreferences($purchaseReminderEmailPreferences)
            ->setAny($any);
    }
    /**
     * Get PurchaseReminderEmailPreferences value
     * @return bool|null
     */
    public function getPurchaseReminderEmailPreferences(): ?bool
    {
        return $this->PurchaseReminderEmailPreferences;
    }
    /**
     * Set PurchaseReminderEmailPreferences value
     * @param bool $purchaseReminderEmailPreferences
     * @return \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType
     */
    public function setPurchaseReminderEmailPreferences(?bool $purchaseReminderEmailPreferences = null): self
    {
        // validation for constraint: boolean
        if (!is_null($purchaseReminderEmailPreferences) && !is_bool($purchaseReminderEmailPreferences)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($purchaseReminderEmailPreferences, true), gettype($purchaseReminderEmailPreferences)), __LINE__);
        }
        $this->PurchaseReminderEmailPreferences = $purchaseReminderEmailPreferences;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PurchaseReminderEmailPreferencesType
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
