<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderTransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains an order or a transaction. A transaction is the sale of one or more items from a seller's listing to a buyer. An order combines two or more transactions into a single payment.
 * @subpackage Structs
 */
class OrderTransactionType extends AbstractStructBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: Contains the information describing an order.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\OrderType $Order = null;
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - documentation: Contains the information describing a transaction.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\TransactionType $Transaction = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for OrderTransactionType
     * @uses OrderTransactionType::setOrder()
     * @uses OrderTransactionType::setTransaction()
     * @uses OrderTransactionType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\OrderType $order
     * @param \macropage\ebaysdk\trading\StructType\TransactionType $transaction
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\OrderType $order = null, ?\macropage\ebaysdk\trading\StructType\TransactionType $transaction = null, $any = null)
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
    public function getOrder(): ?\macropage\ebaysdk\trading\StructType\OrderType
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param \macropage\ebaysdk\trading\StructType\OrderType $order
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType
     */
    public function setOrder(?\macropage\ebaysdk\trading\StructType\OrderType $order = null): self
    {
        $this->Order = $order;
        
        return $this;
    }
    /**
     * Get Transaction value
     * @return \macropage\ebaysdk\trading\StructType\TransactionType|null
     */
    public function getTransaction(): ?\macropage\ebaysdk\trading\StructType\TransactionType
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param \macropage\ebaysdk\trading\StructType\TransactionType $transaction
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType
     */
    public function setTransaction(?\macropage\ebaysdk\trading\StructType\TransactionType $transaction = null): self
    {
        $this->Transaction = $transaction;
        
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
     * @return \macropage\ebaysdk\trading\StructType\OrderTransactionType
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
