<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDashboardAlertType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A message to help the you understand your status as a seller (PowerSeller status, policy compliance status, etc.).
 * @subpackage Structs
 */
class SellerDashboardAlertType extends AbstractStructBase
{
    /**
     * The Severity
     * Meta informations extracted from the WSDL
     * - documentation: The severity level helps you understand whether the alert is identifying a problem (a warning or strong warning) or if it is informational in nature. This field is present if an alert has been issued to your account.
     * - minOccurs: 0
     * @var string
     */
    public $Severity;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: The warning or informational alert text. When you parse this text, note that some alerts may use plain text while others can include HTML. Returned only if the seller has been issued an alert.
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerDashboardAlertType
     * @uses SellerDashboardAlertType::setSeverity()
     * @uses SellerDashboardAlertType::setText()
     * @uses SellerDashboardAlertType::setAny()
     * @param string $severity
     * @param string $text
     * @param \DOMDocument $any
     */
    public function __construct($severity = null, $text = null, \DOMDocument $any = null)
    {
        $this
            ->setSeverity($severity)
            ->setText($text)
            ->setAny($any);
    }
    /**
     * Get Severity value
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerDashboardAlertSeverityCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerDashboardAlertSeverityCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $severity
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType
     */
    public function setSeverity($severity = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerDashboardAlertSeverityCodeType::valueIsValid($severity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $severity, implode(', ', \macropage\ebaysdk\trading\EnumType\SellerDashboardAlertSeverityCodeType::getValidValues())), __LINE__);
        }
        $this->Severity = $severity;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType
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
