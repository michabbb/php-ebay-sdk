<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentsInformationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the <strong>MonetaryDetails</strong> container, which consists of detailed information about one or more exchanges of funds that occur between the buyer, seller, eBay, and eBay partners during the lifecycle of an
 * order, as well as detailed information about a merchant's refund (or store credit) to a buyer who has returned an In-Store Pickup item. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally
 * only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Structs
 */
class PaymentsInformationType extends AbstractStructBase
{
    /**
     * The Payments
     * Meta informations extracted from the WSDL
     * - documentation: Contains information about how different portions of the funds exchanged for a specified order are allocated among payees. Each allocated portion is represented by a <strong>Payment</strong> container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaymentInformationType
     */
    public $Payments;
    /**
     * The Refunds
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of an array of one or more <strong>Refund</strong> containers, and each <strong>Refund</strong> container consists of detailed information about a merchant's refund (or store credit) to a buyer who has
     * returned an In-Store Pickup item. <br/><br/> This container is only returned if the buyer has returned an In-Store Pickup item to the merchant at a physical store, and the merchant has notified eBay through the <strong>ORDER.RETURNED</strong>
     * notification of the Inbound Notifications API. <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity,
     * fixed-price listings. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundInformationType
     */
    public $Refunds;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaymentsInformationType
     * @uses PaymentsInformationType::setPayments()
     * @uses PaymentsInformationType::setRefunds()
     * @uses PaymentsInformationType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PaymentInformationType $payments
     * @param \macropage\ebaysdk\trading\StructType\RefundInformationType $refunds
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\PaymentInformationType $payments = null, \macropage\ebaysdk\trading\StructType\RefundInformationType $refunds = null, \DOMDocument $any = null)
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
    public function getPayments()
    {
        return $this->Payments;
    }
    /**
     * Set Payments value
     * @param \macropage\ebaysdk\trading\StructType\PaymentInformationType $payments
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationType
     */
    public function setPayments(\macropage\ebaysdk\trading\StructType\PaymentInformationType $payments = null)
    {
        $this->Payments = $payments;
        return $this;
    }
    /**
     * Get Refunds value
     * @return \macropage\ebaysdk\trading\StructType\RefundInformationType|null
     */
    public function getRefunds()
    {
        return $this->Refunds;
    }
    /**
     * Set Refunds value
     * @param \macropage\ebaysdk\trading\StructType\RefundInformationType $refunds
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationType
     */
    public function setRefunds(\macropage\ebaysdk\trading\StructType\RefundInformationType $refunds = null)
    {
        $this->Refunds = $refunds;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PaymentsInformationType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationType
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentsInformationType
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
