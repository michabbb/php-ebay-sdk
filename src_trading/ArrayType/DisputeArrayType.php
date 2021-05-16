<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for DisputeArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>DisputeArray</b> container that is returned in the response of the <b>GetUserDisputes</b> call. The <b>DisputeArray</b> container holds an array of one or more disputes that match the filter criteria in the call
 * request. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>. The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Arrays
 */
class DisputeArrayType extends AbstractStructArrayBase
{
    /**
     * The Dispute
     * Meta information extracted from the WSDL
     * - documentation: The information that describes a dispute, including the buyer's name, the transaction ID, the dispute state and status, whether the dispute is resolved, and any messages posted to the dispute.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DisputeType[]
     */
    protected array $Dispute = [];
    /**
     * Constructor method for DisputeArrayType
     * @uses DisputeArrayType::setDispute()
     * @param \macropage\ebaysdk\trading\StructType\DisputeType[] $dispute
     */
    public function __construct(array $dispute = [])
    {
        $this
            ->setDispute($dispute);
    }
    /**
     * Get Dispute value
     * @return \macropage\ebaysdk\trading\StructType\DisputeType[]
     */
    public function getDispute(): array
    {
        return $this->Dispute;
    }
    /**
     * This method is responsible for validating the values passed to the setDispute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDispute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisputeForArrayConstraintsFromSetDispute(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $disputeArrayTypeDisputeItem) {
            // validation for constraint: itemType
            if (!$disputeArrayTypeDisputeItem instanceof \macropage\ebaysdk\trading\StructType\DisputeType) {
                $invalidValues[] = is_object($disputeArrayTypeDisputeItem) ? get_class($disputeArrayTypeDisputeItem) : sprintf('%s(%s)', gettype($disputeArrayTypeDisputeItem), var_export($disputeArrayTypeDisputeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Dispute property can only contain items of type \macropage\ebaysdk\trading\StructType\DisputeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Dispute value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeType[] $dispute
     * @return \macropage\ebaysdk\trading\ArrayType\DisputeArrayType
     */
    public function setDispute(array $dispute = []): self
    {
        // validation for constraint: array
        if ('' !== ($disputeArrayErrorMessage = self::validateDisputeForArrayConstraintsFromSetDispute($dispute))) {
            throw new InvalidArgumentException($disputeArrayErrorMessage, __LINE__);
        }
        $this->Dispute = $dispute;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\DisputeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\DisputeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\DisputeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\DisputeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\DisputeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeType $item
     * @return \macropage\ebaysdk\trading\ArrayType\DisputeArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DisputeType) {
            throw new InvalidArgumentException(sprintf('The Dispute property can only contain items of type \macropage\ebaysdk\trading\StructType\DisputeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Dispute
     */
    public function getAttributeName(): string
    {
        return 'Dispute';
    }
}
