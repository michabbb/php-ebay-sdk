<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MemberMessageExchangeArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Type is used by the <b>MemberMessage</b> container that is returned in the <b>GetMemberMessages</b> and <b>GetAdFormatLeads</b> calls. The <b>MemberMessage</b> container will consists of one or more member messages that meet the
 * input criteria in the call request.
 * @subpackage Arrays
 */
class MemberMessageExchangeArrayType extends AbstractStructArrayBase
{
    /**
     * The MemberMessageExchange
     * Meta information extracted from the WSDL
     * - documentation: Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType[]
     */
    protected ?array $MemberMessageExchange = null;
    /**
     * Constructor method for MemberMessageExchangeArrayType
     * @uses MemberMessageExchangeArrayType::setMemberMessageExchange()
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType[] $memberMessageExchange
     */
    public function __construct(?array $memberMessageExchange = null)
    {
        $this
            ->setMemberMessageExchange($memberMessageExchange);
    }
    /**
     * Get MemberMessageExchange value
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType[]
     */
    public function getMemberMessageExchange(): ?array
    {
        return $this->MemberMessageExchange;
    }
    /**
     * This method is responsible for validating the values passed to the setMemberMessageExchange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMemberMessageExchange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMemberMessageExchangeForArrayConstraintsFromSetMemberMessageExchange(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $memberMessageExchangeArrayTypeMemberMessageExchangeItem) {
            // validation for constraint: itemType
            if (!$memberMessageExchangeArrayTypeMemberMessageExchangeItem instanceof \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType) {
                $invalidValues[] = is_object($memberMessageExchangeArrayTypeMemberMessageExchangeItem) ? get_class($memberMessageExchangeArrayTypeMemberMessageExchangeItem) : sprintf('%s(%s)', gettype($memberMessageExchangeArrayTypeMemberMessageExchangeItem), var_export($memberMessageExchangeArrayTypeMemberMessageExchangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MemberMessageExchange property can only contain items of type \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MemberMessageExchange value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType[] $memberMessageExchange
     * @return \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType
     */
    public function setMemberMessageExchange(?array $memberMessageExchange = null): self
    {
        // validation for constraint: array
        if ('' !== ($memberMessageExchangeArrayErrorMessage = self::validateMemberMessageExchangeForArrayConstraintsFromSetMemberMessageExchange($memberMessageExchange))) {
            throw new InvalidArgumentException($memberMessageExchangeArrayErrorMessage, __LINE__);
        }
        $this->MemberMessageExchange = $memberMessageExchange;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType|null
     */
    public function current(): ?\macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType|null
     */
    public function item($index): ?\macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType|null
     */
    public function first(): ?\macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType|null
     */
    public function last(): ?\macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType|null
     */
    public function offsetGet($offset): ?\macropage\ebaysdk\trading\StructType\MemberMessageExchangeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType $item
     * @return \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType) {
            throw new InvalidArgumentException(sprintf('The MemberMessageExchange property can only contain items of type \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MemberMessageExchange
     */
    public function getAttributeName(): string
    {
        return 'MemberMessageExchange';
    }
}
