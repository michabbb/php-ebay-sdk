<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MemberMessageExchangeArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Type is used by the <b>MemberMessage</b> container that is returned in the <b>GetMemberMessages</b> and <b>GetAdFormatLeads</b> calls. The <b>MemberMessage</b> container will consists of one or more member messages that meet the
 * input criteria in the call request.
 * @subpackage Arrays
 */
class MemberMessageExchangeArrayType extends AbstractStructArrayBase
{
    /**
     * The MemberMessageExchange
     * Meta informations extracted from the WSDL
     * - documentation: Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType[]
     */
    public $MemberMessageExchange;
    /**
     * Constructor method for MemberMessageExchangeArrayType
     * @uses MemberMessageExchangeArrayType::setMemberMessageExchange()
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType[] $memberMessageExchange
     */
    public function __construct(array $memberMessageExchange = array())
    {
        $this
            ->setMemberMessageExchange($memberMessageExchange);
    }
    /**
     * Get MemberMessageExchange value
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType[]|null
     */
    public function getMemberMessageExchange()
    {
        return $this->MemberMessageExchange;
    }
    /**
     * Set MemberMessageExchange value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType[] $memberMessageExchange
     * @return \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType
     */
    public function setMemberMessageExchange(array $memberMessageExchange = array())
    {
        foreach ($memberMessageExchange as $memberMessageExchangeArrayTypeMemberMessageExchangeItem) {
            // validation for constraint: itemType
            if (!$memberMessageExchangeArrayTypeMemberMessageExchangeItem instanceof \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType) {
                throw new \InvalidArgumentException(sprintf('The MemberMessageExchange property can only contain items of \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType, "%s" given', is_object($memberMessageExchangeArrayTypeMemberMessageExchangeItem) ? get_class($memberMessageExchangeArrayTypeMemberMessageExchangeItem) : gettype($memberMessageExchangeArrayTypeMemberMessageExchangeItem)), __LINE__);
            }
        }
        $this->MemberMessageExchange = $memberMessageExchange;
        return $this;
    }
    /**
     * Add item to MemberMessageExchange value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType $item
     * @return \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType
     */
    public function addToMemberMessageExchange(\macropage\ebaysdk\trading\StructType\MemberMessageExchangeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType) {
            throw new \InvalidArgumentException(sprintf('The MemberMessageExchange property can only contain items of \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MemberMessageExchange[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \macropage\ebaysdk\trading\StructType\MemberMessageExchangeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MemberMessageExchange
     */
    public function getAttributeName()
    {
        return 'MemberMessageExchange';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType
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
