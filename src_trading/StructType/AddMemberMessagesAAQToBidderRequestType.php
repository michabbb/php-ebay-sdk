<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMemberMessagesAAQToBidderRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base request of the <b>AddMemberMessagesAAQToBidder</b> call, which allows a seller to send up to 10 messages to bidders/potential buyers regarding an active listing. These potential buyers may include those who have made a Best
 * Offer on a listing.
 * @subpackage Structs
 */
class AddMemberMessagesAAQToBidderRequestType extends AbstractRequestType
{
    /**
     * The AddMemberMessagesAAQToBidderRequestContainer
     * Meta information extracted from the WSDL
     * - documentation: An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one
     * <b>AddMemberMessagesAAQToBidder</b> call.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType[]
     */
    protected array $AddMemberMessagesAAQToBidderRequestContainer = [];
    /**
     * Constructor method for AddMemberMessagesAAQToBidderRequestType
     * @uses AddMemberMessagesAAQToBidderRequestType::setAddMemberMessagesAAQToBidderRequestContainer()
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType[] $addMemberMessagesAAQToBidderRequestContainer
     */
    public function __construct(array $addMemberMessagesAAQToBidderRequestContainer = [])
    {
        $this
            ->setAddMemberMessagesAAQToBidderRequestContainer($addMemberMessagesAAQToBidderRequestContainer);
    }
    /**
     * Get AddMemberMessagesAAQToBidderRequestContainer value
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType[]
     */
    public function getAddMemberMessagesAAQToBidderRequestContainer(): array
    {
        return $this->AddMemberMessagesAAQToBidderRequestContainer;
    }
    /**
     * This method is responsible for validating the values passed to the setAddMemberMessagesAAQToBidderRequestContainer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddMemberMessagesAAQToBidderRequestContainer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddMemberMessagesAAQToBidderRequestContainerForArrayConstraintsFromSetAddMemberMessagesAAQToBidderRequestContainer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem) {
            // validation for constraint: itemType
            if (!$addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem instanceof \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType) {
                $invalidValues[] = is_object($addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem) ? get_class($addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem) : sprintf('%s(%s)', gettype($addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem), var_export($addMemberMessagesAAQToBidderRequestTypeAddMemberMessagesAAQToBidderRequestContainerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddMemberMessagesAAQToBidderRequestContainer property can only contain items of type \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddMemberMessagesAAQToBidderRequestContainer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType[] $addMemberMessagesAAQToBidderRequestContainer
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType
     */
    public function setAddMemberMessagesAAQToBidderRequestContainer(array $addMemberMessagesAAQToBidderRequestContainer = []): self
    {
        // validation for constraint: array
        if ('' !== ($addMemberMessagesAAQToBidderRequestContainerArrayErrorMessage = self::validateAddMemberMessagesAAQToBidderRequestContainerForArrayConstraintsFromSetAddMemberMessagesAAQToBidderRequestContainer($addMemberMessagesAAQToBidderRequestContainer))) {
            throw new InvalidArgumentException($addMemberMessagesAAQToBidderRequestContainerArrayErrorMessage, __LINE__);
        }
        $this->AddMemberMessagesAAQToBidderRequestContainer = $addMemberMessagesAAQToBidderRequestContainer;
        
        return $this;
    }
    /**
     * Add item to AddMemberMessagesAAQToBidderRequestContainer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType $item
     * @return \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestType
     */
    public function addToAddMemberMessagesAAQToBidderRequestContainer(\macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType) {
            throw new InvalidArgumentException(sprintf('The AddMemberMessagesAAQToBidderRequestContainer property can only contain items of type \macropage\ebaysdk\trading\StructType\AddMemberMessagesAAQToBidderRequestContainerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AddMemberMessagesAAQToBidderRequestContainer[] = $item;
        
        return $this;
    }
}
