<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDashboardAlertType StructType
 * Meta information extracted from the WSDL
 * - documentation: A message to help the you understand your status as a seller (PowerSeller status, policy compliance status, etc.).
 * @subpackage Structs
 */
class SellerDashboardAlertType extends AbstractStructBase
{
    /**
     * The Severity
     * Meta information extracted from the WSDL
     * - documentation: The severity level helps you understand whether the alert is identifying a problem (a warning or strong warning) or if it is informational in nature. This field is present if an alert has been issued to your account.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Severity = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: The warning or informational alert text. When you parse this text, note that some alerts may use plain text while others can include HTML. Returned only if the seller has been issued an alert.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellerDashboardAlertType
     * @uses SellerDashboardAlertType::setSeverity()
     * @uses SellerDashboardAlertType::setText()
     * @uses SellerDashboardAlertType::setAny()
     * @param string $severity
     * @param string $text
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $severity = null, ?string $text = null, $any = null)
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
    public function getSeverity(): ?string
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerDashboardAlertSeverityCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerDashboardAlertSeverityCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $severity
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType
     */
    public function setSeverity(?string $severity = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerDashboardAlertSeverityCodeType::valueIsValid($severity)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellerDashboardAlertSeverityCodeType', is_array($severity) ? implode(', ', $severity) : var_export($severity, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellerDashboardAlertSeverityCodeType::getValidValues())), __LINE__);
        }
        $this->Severity = $severity;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType
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
