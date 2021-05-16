<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used to express all fees associated with listing an item. These are the fees that the seller will pay to eBay.
 * @subpackage Structs
 */
class FeesType extends AbstractStructBase
{
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A
     * <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeeType[]
     */
    protected array $Fee = [];
    /**
     * Constructor method for FeesType
     * @uses FeesType::setFee()
     * @param \macropage\ebaysdk\trading\StructType\FeeType[] $fee
     */
    public function __construct(array $fee = [])
    {
        $this
            ->setFee($fee);
    }
    /**
     * Get Fee value
     * @return \macropage\ebaysdk\trading\StructType\FeeType[]
     */
    public function getFee(): array
    {
        return $this->Fee;
    }
    /**
     * This method is responsible for validating the values passed to the setFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeForArrayConstraintsFromSetFee(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feesTypeFeeItem) {
            // validation for constraint: itemType
            if (!$feesTypeFeeItem instanceof \macropage\ebaysdk\trading\StructType\FeeType) {
                $invalidValues[] = is_object($feesTypeFeeItem) ? get_class($feesTypeFeeItem) : sprintf('%s(%s)', gettype($feesTypeFeeItem), var_export($feesTypeFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fee property can only contain items of type \macropage\ebaysdk\trading\StructType\FeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Fee value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeeType[] $fee
     * @return \macropage\ebaysdk\trading\StructType\FeesType
     */
    public function setFee(array $fee = []): self
    {
        // validation for constraint: array
        if ('' !== ($feeArrayErrorMessage = self::validateFeeForArrayConstraintsFromSetFee($fee))) {
            throw new InvalidArgumentException($feeArrayErrorMessage, __LINE__);
        }
        $this->Fee = $fee;
        
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\FeeType $item
     * @return \macropage\ebaysdk\trading\StructType\FeesType
     */
    public function addToFee(\macropage\ebaysdk\trading\StructType\FeeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\FeeType) {
            throw new InvalidArgumentException(sprintf('The Fee property can only contain items of type \macropage\ebaysdk\trading\StructType\FeeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Fee[] = $item;
        
        return $this;
    }
}
