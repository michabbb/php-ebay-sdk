<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>OrderArray</b> container that is returned in order management calls. The <b>OrderArray</b> container consists of one or more eBay orders that match the input criteria.
 * @subpackage Structs
 */
class OrderArrayType extends AbstractStructBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OrderType[]
     */
    protected ?array $Order = null;
    /**
     * The Errors
     * Meta information extracted from the WSDL
     * - documentation: This container will be returned if there are one or more errors or warnings with the corresponding order. This container consists of detailed information on the warning or error, including the actual error message and information on
     * any input parameters that actually triggered the warning or error.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ErrorType[]
     */
    protected ?array $Errors = null;
    /**
     * Constructor method for OrderArrayType
     * @uses OrderArrayType::setOrder()
     * @uses OrderArrayType::setErrors()
     * @param \macropage\ebaysdk\trading\StructType\OrderType[] $order
     * @param \macropage\ebaysdk\trading\StructType\ErrorType[] $errors
     */
    public function __construct(?array $order = null, ?array $errors = null)
    {
        $this
            ->setOrder($order)
            ->setErrors($errors);
    }
    /**
     * Get Order value
     * @return \macropage\ebaysdk\trading\StructType\OrderType[]
     */
    public function getOrder(): ?array
    {
        return $this->Order;
    }
    /**
     * This method is responsible for validating the values passed to the setOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderForArrayConstraintsFromSetOrder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderArrayTypeOrderItem) {
            // validation for constraint: itemType
            if (!$orderArrayTypeOrderItem instanceof \macropage\ebaysdk\trading\StructType\OrderType) {
                $invalidValues[] = is_object($orderArrayTypeOrderItem) ? get_class($orderArrayTypeOrderItem) : sprintf('%s(%s)', gettype($orderArrayTypeOrderItem), var_export($orderArrayTypeOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Order property can only contain items of type \macropage\ebaysdk\trading\StructType\OrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Order value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OrderType[] $order
     * @return \macropage\ebaysdk\trading\StructType\OrderArrayType
     */
    public function setOrder(?array $order = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderArrayErrorMessage = self::validateOrderForArrayConstraintsFromSetOrder($order))) {
            throw new InvalidArgumentException($orderArrayErrorMessage, __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
    /**
     * Add item to Order value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\OrderType $item
     * @return \macropage\ebaysdk\trading\StructType\OrderArrayType
     */
    public function addToOrder(\macropage\ebaysdk\trading\StructType\OrderType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\OrderType) {
            throw new InvalidArgumentException(sprintf('The Order property can only contain items of type \macropage\ebaysdk\trading\StructType\OrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Order[] = $item;
        
        return $this;
    }
    /**
     * Get Errors value
     * @return \macropage\ebaysdk\trading\StructType\ErrorType[]
     */
    public function getErrors(): ?array
    {
        return $this->Errors;
    }
    /**
     * This method is responsible for validating the values passed to the setErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorsForArrayConstraintsFromSetErrors(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderArrayTypeErrorsItem) {
            // validation for constraint: itemType
            if (!$orderArrayTypeErrorsItem instanceof \macropage\ebaysdk\trading\StructType\ErrorType) {
                $invalidValues[] = is_object($orderArrayTypeErrorsItem) ? get_class($orderArrayTypeErrorsItem) : sprintf('%s(%s)', gettype($orderArrayTypeErrorsItem), var_export($orderArrayTypeErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Errors property can only contain items of type \macropage\ebaysdk\trading\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Errors value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ErrorType[] $errors
     * @return \macropage\ebaysdk\trading\StructType\OrderArrayType
     */
    public function setErrors(?array $errors = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintsFromSetErrors($errors))) {
            throw new InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        $this->Errors = $errors;
        
        return $this;
    }
    /**
     * Add item to Errors value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ErrorType $item
     * @return \macropage\ebaysdk\trading\StructType\OrderArrayType
     */
    public function addToErrors(\macropage\ebaysdk\trading\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The Errors property can only contain items of type \macropage\ebaysdk\trading\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Errors[] = $item;
        
        return $this;
    }
}
