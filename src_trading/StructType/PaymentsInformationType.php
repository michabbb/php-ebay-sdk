<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentsInformationType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <strong>MonetaryDetails</strong> container, which consists of detailed information about one or more exchanges of funds that occur between the buyer, seller, eBay, and eBay partners during the lifecycle of an
 * order, as well as detailed information about a merchant's refund (or store credit) to a buyer who has returned an In-Store Pickup item. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally
 * only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Structs
 */
class PaymentsInformationType extends AbstractStructBase
{
    /**
     * The Payments
     * Meta information extracted from the WSDL
     * - documentation: Contains information about how different portions of the funds exchanged for a specified order are allocated among payees. Each allocated portion is represented by a <strong>Payment</strong> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentInformationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaymentInformationType $Payments = null;
    /**
     * The Refunds
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a merchant's refund (or store credit) to a buyer who has
     * returned an In-Store Pickup item. <br/><br/> This container is only returned if the buyer has returned an In-Store Pickup item to the merchant at a physical store, and the merchant has notified eBay through the <strong>ORDER.RETURNED</strong>
     * notification of the Inbound Notifications API. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity,
     * fixed-price listings. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundInformationType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\RefundInformationType $Refunds = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaymentsInformationType
     * @uses PaymentsInformationType::setPayments()
     * @uses PaymentsInformationType::setRefunds()
     * @uses PaymentsInformationType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PaymentInformationType $payments
     * @param \macropage\ebaysdk\trading\StructType\RefundInformationType $refunds
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\PaymentInformationType $payments = null, ?\macropage\ebaysdk\trading\StructType\RefundInformationType $refunds = null, $any = null)
    {
        $this
            ->setPayments($payments)
            ->setRefunds($refunds)
            ->setAny($any);
    }
    /**
     * Get Payments value
     * @return \macropage\ebaysdk\trading\StructType\PaymentInformationType|null
     */
    public function getPayments(): ?\macropage\ebaysdk\trading\StructType\PaymentInformationType
    {
        return $this->Payments;
    }
    /**
     * Set Payments value
     * @param \macropage\ebaysdk\trading\StructType\PaymentInformationType $payments
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationType
     */
    public function setPayments(?\macropage\ebaysdk\trading\StructType\PaymentInformationType $payments = null): self
    {
        $this->Payments = $payments;
        
        return $this;
    }
    /**
     * Get Refunds value
     * @return \macropage\ebaysdk\trading\StructType\RefundInformationType|null
     */
    public function getRefunds(): ?\macropage\ebaysdk\trading\StructType\RefundInformationType
    {
        return $this->Refunds;
    }
    /**
     * Set Refunds value
     * @param \macropage\ebaysdk\trading\StructType\RefundInformationType $refunds
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationType
     */
    public function setRefunds(?\macropage\ebaysdk\trading\StructType\RefundInformationType $refunds = null): self
    {
        $this->Refunds = $refunds;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationType
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
