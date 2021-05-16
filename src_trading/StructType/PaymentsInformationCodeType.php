<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentsInformationCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PaymentsInformationCodeType extends AbstractStructBase
{
    /**
     * The Payments
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaymentInformationCodeType $Payments = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaymentsInformationCodeType
     * @uses PaymentsInformationCodeType::setPayments()
     * @uses PaymentsInformationCodeType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType $payments
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\PaymentInformationCodeType $payments = null, $any = null)
    {
        $this
            ->setPayments($payments)
            ->setAny($any);
    }
    /**
     * Get Payments value
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType|null
     */
    public function getPayments(): ?\macropage\ebaysdk\trading\StructType\PaymentInformationCodeType
    {
        return $this->Payments;
    }
    /**
     * Set Payments value
     * @param \macropage\ebaysdk\trading\StructType\PaymentInformationCodeType $payments
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationCodeType
     */
    public function setPayments(?\macropage\ebaysdk\trading\StructType\PaymentInformationCodeType $payments = null): self
    {
        $this->Payments = $payments;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationCodeType
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
