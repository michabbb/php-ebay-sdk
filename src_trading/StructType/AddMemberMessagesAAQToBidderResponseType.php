<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessagesAAQToBidderResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>AddMemberMessagesAAQToBidderResponseContainer</b> container, which consists of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple
 * send message operations performed in one call).
 * @subpackage Structs
 */
class AddMemberMessagesAAQToBidderResponseType extends AbstractResponseType
{
    /**
     * The AddMemberMessagesAAQToBidderResponseContainer
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> field (used to track multiple send message operations performed in one call).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType[]
     */
    protected ?array $AddMemberMessagesAAQToBidderResponseContainer = null;
    /**
     * Constructor method for AddMemberMessagesAAQToBidderResponseType
     * @uses AddMemberMessagesAAQToBidderResponseType::setAddMemberMessagesAAQToBidderResponseContainer()
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType[] $addMemberMessagesAAQToBidderResponseContainer
     */
    public function __construct(?array $addMemberMessagesAAQToBidderResponseContainer = null)
    {
        $this
            ->setAddMemberMessagesAAQToBidderResponseContainer($addMemberMessagesAAQToBidderResponseContainer);
    }
    /**
     * Get AddMemberMessagesAAQToBidderResponseContainer value
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType[]
     */
    public function getAddMemberMessagesAAQToBidderResponseContainer(): ?array
    {
        return $this->AddMemberMessagesAAQToBidderResponseContainer;
    }
    /**
     * This method is responsible for validating the values passed to the setAddMemberMessagesAAQToBidderResponseContainer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddMemberMessagesAAQToBidderResponseContainer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddMemberMessagesAAQToBidderResponseContainerForArrayConstraintsFromSetAddMemberMessagesAAQToBidderResponseContainer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem) {
            // validation for constraint: itemType
            if (!$addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem instanceof \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType) {
                $invalidValues[] = is_object($addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem) ? get_class($addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem) : sprintf('%s(%s)', gettype($addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem), var_export($addMemberMessagesAAQToBidderResponseTypeAddMemberMessagesAAQToBidderResponseContainerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddMemberMessagesAAQToBidderResponseContainer property can only contain items of type \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddMemberMessagesAAQToBidderResponseContainer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType[] $addMemberMessagesAAQToBidderResponseContainer
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseType
     */
    public function setAddMemberMessagesAAQToBidderResponseContainer(?array $addMemberMessagesAAQToBidderResponseContainer = null): self
    {
        // validation for constraint: array
        if ('' !== ($addMemberMessagesAAQToBidderResponseContainerArrayErrorMessage = self::validateAddMemberMessagesAAQToBidderResponseContainerForArrayConstraintsFromSetAddMemberMessagesAAQToBidderResponseContainer($addMemberMessagesAAQToBidderResponseContainer))) {
            throw new InvalidArgumentException($addMemberMessagesAAQToBidderResponseContainerArrayErrorMessage, __LINE__);
        }
        $this->AddMemberMessagesAAQToBidderResponseContainer = $addMemberMessagesAAQToBidderResponseContainer;
        
        return $this;
    }
    /**
     * Add item to AddMemberMessagesAAQToBidderResponseContainer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseType
     */
    public function addToAddMemberMessagesAAQToBidderResponseContainer(\macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType) {
            throw new InvalidArgumentException(sprintf('The AddMemberMessagesAAQToBidderResponseContainer property can only contain items of type \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderResponseContainerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AddMemberMessagesAAQToBidderResponseContainer[] = $item;
        
        return $this;
    }
}
