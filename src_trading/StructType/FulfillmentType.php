<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfillmentType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide details about an order line item being fulfilled by eBay or an eBay fulfillment partner.
 * @subpackage Structs
 */
class FulfillmentType extends AbstractStructBase
{
    /**
     * The FulfillmentBy
     * Meta information extracted from the WSDL
     * - documentation: The value returned in this field indicates the party that is handling fulfillment of the order line item. <br> <br> For eBay Vault scenarios, for the <strong>GetOrders</strong> <strong>GetItemTransactions</strong>, and
     * <strong>GetSellerTransactions</strong> calls, this value is returned as <code>EBAY</code> for either of the following fulfillment options:<ul><li>Vault to Vault</li><li>Vault to Buyer</li></ul>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FulfillmentBy = null;
    /**
     * The FulfillmentRefId
     * Meta information extracted from the WSDL
     * - documentation: The value in this field identifies the warehouse where the order line item is located. <br> <br> For eBay Vault scenarios: <strong>GetOrders</strong> and <strong>GetSellerTransactions</strong> calls, if <b>FulfillmentBy</b> is
     * returned as <code>EBAY</code>, <strong>FulfillmentRefId</strong> is not returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FulfillmentRefId = null;
    /**
     * Constructor method for FulfillmentType
     * @uses FulfillmentType::setFulfillmentBy()
     * @uses FulfillmentType::setFulfillmentRefId()
     * @param string $fulfillmentBy
     * @param string $fulfillmentRefId
     */
    public function __construct(?string $fulfillmentBy = null, ?string $fulfillmentRefId = null)
    {
        $this
            ->setFulfillmentBy($fulfillmentBy)
            ->setFulfillmentRefId($fulfillmentRefId);
    }
    /**
     * Get FulfillmentBy value
     * @return string|null
     */
    public function getFulfillmentBy(): ?string
    {
        return $this->FulfillmentBy;
    }
    /**
     * Set FulfillmentBy value
     * @param string $fulfillmentBy
     * @return \macropage\ebaysdk\trading\StructType\FulfillmentType
     */
    public function setFulfillmentBy(?string $fulfillmentBy = null): self
    {
        // validation for constraint: string
        if (!is_null($fulfillmentBy) && !is_string($fulfillmentBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fulfillmentBy, true), gettype($fulfillmentBy)), __LINE__);
        }
        $this->FulfillmentBy = $fulfillmentBy;
        
        return $this;
    }
    /**
     * Get FulfillmentRefId value
     * @return string|null
     */
    public function getFulfillmentRefId(): ?string
    {
        return $this->FulfillmentRefId;
    }
    /**
     * Set FulfillmentRefId value
     * @param string $fulfillmentRefId
     * @return \macropage\ebaysdk\trading\StructType\FulfillmentType
     */
    public function setFulfillmentRefId(?string $fulfillmentRefId = null): self
    {
        // validation for constraint: string
        if (!is_null($fulfillmentRefId) && !is_string($fulfillmentRefId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fulfillmentRefId, true), gettype($fulfillmentRefId)), __LINE__);
        }
        $this->FulfillmentRefId = $fulfillmentRefId;
        
        return $this;
    }
}
