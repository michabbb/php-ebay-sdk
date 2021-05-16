<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesAlertIDArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Arrays
 */
class MyMessagesAlertIDArrayType extends AbstractStructArrayBase
{
    /**
     * The AlertID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | This type is deprecated.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $AlertID = [];
    /**
     * Constructor method for MyMessagesAlertIDArrayType
     * @uses MyMessagesAlertIDArrayType::setAlertID()
     * @param string[] $alertID
     */
    public function __construct(array $alertID = [])
    {
        $this
            ->setAlertID($alertID);
    }
    /**
     * Get AlertID value
     * @return string[]
     */
    public function getAlertID(): array
    {
        return $this->AlertID;
    }
    /**
     * This method is responsible for validating the values passed to the setAlertID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlertID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlertIDForArrayConstraintsFromSetAlertID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myMessagesAlertIDArrayTypeAlertIDItem) {
            // validation for constraint: itemType
            if (!is_string($myMessagesAlertIDArrayTypeAlertIDItem)) {
                $invalidValues[] = is_object($myMessagesAlertIDArrayTypeAlertIDItem) ? get_class($myMessagesAlertIDArrayTypeAlertIDItem) : sprintf('%s(%s)', gettype($myMessagesAlertIDArrayTypeAlertIDItem), var_export($myMessagesAlertIDArrayTypeAlertIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AlertID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AlertID value
     * @throws InvalidArgumentException
     * @param string[] $alertID
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType
     */
    public function setAlertID(array $alertID = []): self
    {
        // validation for constraint: array
        if ('' !== ($alertIDArrayErrorMessage = self::validateAlertIDForArrayConstraintsFromSetAlertID($alertID))) {
            throw new InvalidArgumentException($alertIDArrayErrorMessage, __LINE__);
        }
        $this->AlertID = $alertID;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The AlertID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AlertID
     */
    public function getAttributeName(): string
    {
        return 'AlertID';
    }
}
