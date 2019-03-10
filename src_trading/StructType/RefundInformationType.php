<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundInformationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <strong>Refunds</strong> container, which contains an array of <strong>Refund</strong> containers. A <strong>Refund</strong> container consists of detailed information on an In-Store Pickup item refund. <br/><br/>
 * <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and can only be applied to multi-quantity, fixed-price listings. </span>
 * @subpackage Structs
 */
class RefundInformationType extends AbstractStructBase
{
    /**
     * The Refund
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of detailed information on an In-Store Pickup item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer for an In-Store Pickup item. A separate
     * <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>. <br/><br/> <span class="tablenote">
     * <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and
     * can only be applied to multi-quantity, fixed-price listings. Eligible Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations
     * and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType[]
     */
    public $Refund;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RefundInformationType
     * @uses RefundInformationType::setRefund()
     * @uses RefundInformationType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType[] $refund
     * @param \DOMDocument $any
     */
    public function __construct(array $refund = array(), \DOMDocument $any = null)
    {
        $this
            ->setRefund($refund)
            ->setAny($any);
    }
    /**
     * Get Refund value
     * @return \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType[]|null
     */
    public function getRefund()
    {
        return $this->Refund;
    }
    /**
     * Set Refund value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType[] $refund
     * @return \macropage\ebaysdk\trading\StructType\RefundInformationType
     */
    public function setRefund(array $refund = array())
    {
        foreach ($refund as $refundInformationTypeRefundItem) {
            // validation for constraint: itemType
            if (!$refundInformationTypeRefundItem instanceof \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType) {
                throw new \InvalidArgumentException(sprintf('The Refund property can only contain items of \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType, "%s" given', is_object($refundInformationTypeRefundItem) ? get_class($refundInformationTypeRefundItem) : gettype($refundInformationTypeRefundItem)), __LINE__);
            }
        }
        $this->Refund = $refund;
        return $this;
    }
    /**
     * Add item to Refund value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType $item
     * @return \macropage\ebaysdk\trading\StructType\RefundInformationType
     */
    public function addToRefund(\macropage\ebaysdk\trading\StructType\RefundTransactionInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType) {
            throw new \InvalidArgumentException(sprintf('The Refund property can only contain items of \macropage\ebaysdk\trading\StructType\RefundTransactionInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Refund[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RefundInformationType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RefundInformationType
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
     * @return \macropage\ebaysdk\trading\StructType\RefundInformationType
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
