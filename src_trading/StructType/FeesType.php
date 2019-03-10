<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used to express all fees associated with listing an item. These are the fees that the seller will pay to eBay.
 * @subpackage Structs
 */
class FeesType extends AbstractStructBase
{
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - documentation: A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A
     * <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeeType[]
     */
    public $Fee;
    /**
     * Constructor method for FeesType
     * @uses FeesType::setFee()
     * @param \macropage\ebaysdk\trading\StructType\FeeType[] $fee
     */
    public function __construct(array $fee = array())
    {
        $this
            ->setFee($fee);
    }
    /**
     * Get Fee value
     * @return \macropage\ebaysdk\trading\StructType\FeeType[]|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeeType[] $fee
     * @return \macropage\ebaysdk\trading\StructType\FeesType
     */
    public function setFee(array $fee = array())
    {
        foreach ($fee as $feesTypeFeeItem) {
            // validation for constraint: itemType
            if (!$feesTypeFeeItem instanceof \macropage\ebaysdk\trading\StructType\FeeType) {
                throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \macropage\ebaysdk\trading\StructType\FeeType, "%s" given', is_object($feesTypeFeeItem) ? get_class($feesTypeFeeItem) : gettype($feesTypeFeeItem)), __LINE__);
            }
        }
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeeType $item
     * @return \macropage\ebaysdk\trading\StructType\FeesType
     */
    public function addToFee(\macropage\ebaysdk\trading\StructType\FeeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\FeeType) {
            throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \macropage\ebaysdk\trading\StructType\FeeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Fee[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\FeesType
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
