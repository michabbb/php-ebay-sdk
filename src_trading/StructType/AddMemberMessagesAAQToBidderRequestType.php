<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessagesAAQToBidderRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base request of the <b>AddMemberMessagesAAQToBidder</b> call, which allows a seller to send up to 10 messages to bidders/potential buyers regarding an active listing. These potential buyers may include those who have made a Best
 * Offer on a listing.
 * @subpackage Structs
 */
class AddMemberMessagesAAQToBidderRequestType extends AbstractRequestType
{
    /**
     * The AddMemberMessagesAAQToBidderRequestContainer
     * Meta informations extracted from the WSDL
     * - documentation: An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one
     * <b>AddMemberMessagesAAQToBidder</b> call.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType[]
     */
    public $AddMemberMessagesAAQToBidderRequestContainer;
    /**
     * Constructor method for AddMemberMessagesAAQToBidderRequestType
     * @uses AddMemberMessagesAAQToBidderRequestType::setAddMemberMessagesAAQToBidderRequestContainer()
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType[] $addMemberMessagesAAQToBidderRequestContainer
     */
    public function __construct(array $addMemberMessagesAAQToBidderRequestContainer = array())
    {
        $this
            ->setAddMemberMessagesAAQToBidderRequestContainer($addMemberMessagesAAQToBidderRequestContainer);
    }
    /**
     * Get AddMemberMessagesAAQToBidderRequestContainer value
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType[]|null
     */
    public function getAddMemberMessagesAAQToBidderRequestContainer()
    {
        return $this->AddMemberMessagesAAQToBidderRequestContainer;
    }
    /**
     * Set AddMemberMessagesAAQToBidderRequestContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType[] $addMemberMessagesAAQToBidderRequestContainer
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType
     */
    public function setAddMemberMessagesAAQToBidderRequestContainer(array $addMemberMessagesAAQToBidderRequestContainer = array())
    {
        foreach ($addMemberMessagesAAQToBidderRequestContainer as $addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem) {
            // validation for constraint: itemType
            if (!$addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem instanceof \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType) {
                throw new \InvalidArgumentException(sprintf('The AddMemberMessagesAAQToBidderRequestContainer property can only contain items of \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType, "%s" given', is_object($addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem) ? get_class($addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem) : gettype($addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem)), __LINE__);
            }
        }
        $this->AddMemberMessagesAAQToBidderRequestContainer = $addMemberMessagesAAQToBidderRequestContainer;
        return $this;
    }
    /**
     * Add item to AddMemberMessagesAAQToBidderRequestContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType
     */
    public function addToAddMemberMessagesAAQToBidderRequestContainer(\macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType) {
            throw new \InvalidArgumentException(sprintf('The AddMemberMessagesAAQToBidderRequestContainer property can only contain items of \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddMemberMessagesAAQToBidderRequestContainer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType
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
