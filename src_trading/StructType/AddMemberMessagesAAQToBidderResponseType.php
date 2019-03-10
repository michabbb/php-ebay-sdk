<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessagesAAQToBidderResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>AddMemberMessagesAAQToBidderResponseContainer</b> container, which consists of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple
 * send message operations performed in one call).
 * @subpackage Structs
 */
class AddMemberMessagesAAQToBidderResponseType extends AbstractResponseType
{
    /**
     * The AddMemberMessagesAAQToBidderResponseContainer
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType[]
     */
    public $AddMemberMessagesAAQToBidderResponseContainer;
    /**
     * Constructor method for AddMemberMessagesAAQToBidderResponseType
     * @uses AddMemberMessagesAAQToBidderResponseType::setAddMemberMessagesAAQToBidderResponseContainer()
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType[] $addMemberMessagesAAQToBidderResponseContainer
     */
    public function __construct(array $addMemberMessagesAAQToBidderResponseContainer = array())
    {
        $this
            ->setAddMemberMessagesAAQToBidderResponseContainer($addMemberMessagesAAQToBidderResponseContainer);
    }
    /**
     * Get AddMemberMessagesAAQToBidderResponseContainer value
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType[]|null
     */
    public function getAddMemberMessagesAAQToBidderResponseContainer()
    {
        return $this->AddMemberMessagesAAQToBidderResponseContainer;
    }
    /**
     * Set AddMemberMessagesAAQToBidderResponseContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType[] $addMemberMessagesAAQToBidderResponseContainer
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseType
     */
    public function setAddMemberMessagesAAQToBidderResponseContainer(array $addMemberMessagesAAQToBidderResponseContainer = array())
    {
        foreach ($addMemberMessagesAAQToBidderResponseContainer as $addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem) {
            // validation for constraint: itemType
            if (!$addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem instanceof \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType) {
                throw new \InvalidArgumentException(sprintf('The AddMemberMessagesAAQToBidderResponseContainer property can only contain items of \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType, "%s" given', is_object($addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem) ? get_class($addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem) : gettype($addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem)), __LINE__);
            }
        }
        $this->AddMemberMessagesAAQToBidderResponseContainer = $addMemberMessagesAAQToBidderResponseContainer;
        return $this;
    }
    /**
     * Add item to AddMemberMessagesAAQToBidderResponseContainer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseType
     */
    public function addToAddMemberMessagesAAQToBidderResponseContainer(\macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType) {
            throw new \InvalidArgumentException(sprintf('The AddMemberMessagesAAQToBidderResponseContainer property can only contain items of \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddMemberMessagesAAQToBidderResponseContainer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseType
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
