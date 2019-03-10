<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderTransactionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains an order or a transaction. A transaction is the sale of one or more items from a seller's listing to a buyer. An order combines two or more transactions into a single payment.
 * @subpackage Structs
 */
class OrderTransactionType extends AbstractStructBase
{
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - documentation: Contains the information describing an order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderType
     */
    public $Order;
    /**
     * The Transaction
     * Meta informations extracted from the WSDL
     * - documentation: Contains the information describing a transaction.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionType
     */
    public $Transaction;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for OrderTransactionType
     * @uses OrderTransactionType::setOrder()
     * @uses OrderTransactionType::setTransaction()
     * @uses OrderTransactionType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\OrderType $order
     * @param \macropage\ebaysdk\trading\StructType\TransactionType $transaction
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\OrderType $order = null, \macropage\ebaysdk\trading\StructType\TransactionType $transaction = null, \DOMDocument $any = null)
    {
        $this
            ->setOrder($order)
            ->setTransaction($transaction)
            ->setAny($any);
    }
    /**
     * Get Order value
     * @return \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param \macropage\ebaysdk\trading\StructType\OrderType $order
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType
     */
    public function setOrder(\macropage\ebaysdk\trading\StructType\OrderType $order = null)
    {
        $this->Order = $order;
        return $this;
    }
    /**
     * Get Transaction value
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param \macropage\ebaysdk\trading\StructType\TransactionType $transaction
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType
     */
    public function setTransaction(\macropage\ebaysdk\trading\StructType\TransactionType $transaction = null)
    {
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\OrderTransactionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType
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
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType
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
