<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for DisputeArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>DisputeArray</b> container that is returned in the response of the <b>GetUserDisputes</b> call. The <b>DisputeArray</b> container holds an array of one or more disputes that match the filter criteria in the call
 * request. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay Money Back Guarantee cases. </span>
 * @subpackage Arrays
 */
class DisputeArrayType extends AbstractStructArrayBase
{
    /**
     * The Dispute
     * Meta informations extracted from the WSDL
     * - documentation: The information that describes a dispute, including the buyer's name, the transaction ID, the dispute state and status, whether the dispute is resolved, and any messages posted to the dispute.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DisputeType[]
     */
    public $Dispute;
    /**
     * Constructor method for DisputeArrayType
     * @uses DisputeArrayType::setDispute()
     * @param \macropage\ebaysdk\trading\StructType\DisputeType[] $dispute
     */
    public function __construct(array $dispute = array())
    {
        $this
            ->setDispute($dispute);
    }
    /**
     * Get Dispute value
     * @return \macropage\ebaysdk\trading\StructType\DisputeType[]|null
     */
    public function getDispute()
    {
        return $this->Dispute;
    }
    /**
     * Set Dispute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeType[] $dispute
     * @return \macropage\ebaysdk\trading\ArrayType\DisputeArrayType
     */
    public function setDispute(array $dispute = array())
    {
        foreach ($dispute as $disputeArrayTypeDisputeItem) {
            // validation for constraint: itemType
            if (!$disputeArrayTypeDisputeItem instanceof \macropage\ebaysdk\trading\StructType\DisputeType) {
                throw new \InvalidArgumentException(sprintf('The Dispute property can only contain items of \macropage\ebaysdk\trading\StructType\DisputeType, "%s" given', is_object($disputeArrayTypeDisputeItem) ? get_class($disputeArrayTypeDisputeItem) : gettype($disputeArrayTypeDisputeItem)), __LINE__);
            }
        }
        $this->Dispute = $dispute;
        return $this;
    }
    /**
     * Add item to Dispute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DisputeType $item
     * @return \macropage\ebaysdk\trading\ArrayType\DisputeArrayType
     */
    public function addToDispute(\macropage\ebaysdk\trading\StructType\DisputeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DisputeType) {
            throw new \InvalidArgumentException(sprintf('The Dispute property can only contain items of \macropage\ebaysdk\trading\StructType\DisputeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Dispute[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\DisputeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Dispute
     */
    public function getAttributeName()
    {
        return 'Dispute';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\DisputeArrayType
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
