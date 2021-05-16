<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionProgramType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>Program</b> container, which provides details on whether the order line item has passed or failed the authenticity inspection.
 * @subpackage Structs
 */
class TransactionProgramType extends AbstractStructBase
{
    /**
     * The AuthenticityVerification
     * Meta information extracted from the WSDL
     * - documentation: This container gives status on whether the order line item has passed or failed the authenticity inspection.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AuthenticityVerificationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AuthenticityVerificationType $AuthenticityVerification = null;
    /**
     * The Fulfillment
     * Meta information extracted from the WSDL
     * - documentation: This container provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FulfillmentType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FulfillmentType $Fulfillment = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for TransactionProgramType
     * @uses TransactionProgramType::setAuthenticityVerification()
     * @uses TransactionProgramType::setFulfillment()
     * @uses TransactionProgramType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AuthenticityVerificationType $authenticityVerification
     * @param \macropage\ebaysdk\trading\StructType\FulfillmentType $fulfillment
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AuthenticityVerificationType $authenticityVerification = null, ?\macropage\ebaysdk\trading\StructType\FulfillmentType $fulfillment = null, $any = null)
    {
        $this
            ->setAuthenticityVerification($authenticityVerification)
            ->setFulfillment($fulfillment)
            ->setAny($any);
    }
    /**
     * Get AuthenticityVerification value
     * @return \macropage\ebaysdk\trading\StructType\AuthenticityVerificationType|null
     */
    public function getAuthenticityVerification(): ?\macropage\ebaysdk\trading\StructType\AuthenticityVerificationType
    {
        return $this->AuthenticityVerification;
    }
    /**
     * Set AuthenticityVerification value
     * @param \macropage\ebaysdk\trading\StructType\AuthenticityVerificationType $authenticityVerification
     * @return \macropage\ebaysdk\trading\StructType\TransactionProgramType
     */
    public function setAuthenticityVerification(?\macropage\ebaysdk\trading\StructType\AuthenticityVerificationType $authenticityVerification = null): self
    {
        $this->AuthenticityVerification = $authenticityVerification;
        
        return $this;
    }
    /**
     * Get Fulfillment value
     * @return \macropage\ebaysdk\trading\StructType\FulfillmentType|null
     */
    public function getFulfillment(): ?\macropage\ebaysdk\trading\StructType\FulfillmentType
    {
        return $this->Fulfillment;
    }
    /**
     * Set Fulfillment value
     * @param \macropage\ebaysdk\trading\StructType\FulfillmentType $fulfillment
     * @return \macropage\ebaysdk\trading\StructType\TransactionProgramType
     */
    public function setFulfillment(?\macropage\ebaysdk\trading\StructType\FulfillmentType $fulfillment = null): self
    {
        $this->Fulfillment = $fulfillment;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TransactionProgramType
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
