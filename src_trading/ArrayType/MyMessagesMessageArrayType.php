<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesMessageArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>Messages</b> container that is returned in <b>GetMyMessages</b>. The <b>Messages</b> container consists of an array of one or more messages.
 * @subpackage Arrays
 */
class MyMessagesMessageArrayType extends AbstractStructArrayBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: A <b>Message</b> container is returned for each message that matches the input criteria in the call request. Each <b>Message</b> container consists of detailed information on a message. The amount of information that is returned in
     * each <b>Message</b> container is partially dependent on the value that is set in the required <b>DetailLevel</b> field.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesMessageType[]
     */
    protected ?array $Message = null;
    /**
     * Constructor method for MyMessagesMessageArrayType
     * @uses MyMessagesMessageArrayType::setMessage()
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesMessageType[] $message
     */
    public function __construct(?array $message = null)
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get Message value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType[]
     */
    public function getMessage(): ?array
    {
        return $this->Message;
    }
    /**
     * This method is responsible for validating the values passed to the setMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageForArrayConstraintsFromSetMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $myMessagesMessageArrayTypeMessageItem) {
            // validation for constraint: itemType
            if (!$myMessagesMessageArrayTypeMessageItem instanceof \macropage\ebaysdk\trading\StructType\MyMessagesMessageType) {
                $invalidValues[] = is_object($myMessagesMessageArrayTypeMessageItem) ? get_class($myMessagesMessageArrayTypeMessageItem) : sprintf('%s(%s)', gettype($myMessagesMessageArrayTypeMessageItem), var_export($myMessagesMessageArrayTypeMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Message property can only contain items of type \macropage\ebaysdk\trading\StructType\MyMessagesMessageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Message value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesMessageType[] $message
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType
     */
    public function setMessage(?array $message = null): self
    {
        // validation for constraint: array
        if ('' !== ($messageArrayErrorMessage = self::validateMessageForArrayConstraintsFromSetMessage($message))) {
            throw new InvalidArgumentException($messageArrayErrorMessage, __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\MyMessagesMessageType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\MyMessagesMessageType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\MyMessagesMessageType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\MyMessagesMessageType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesMessageType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\MyMessagesMessageType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesMessageType $item
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MyMessagesMessageType) {
            throw new InvalidArgumentException(sprintf('The Message property can only contain items of type \macropage\ebaysdk\trading\StructType\MyMessagesMessageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Message
     */
    public function getAttributeName(): string
    {
        return 'Message';
    }
}
