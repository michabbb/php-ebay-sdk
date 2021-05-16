<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyMessagesExternalMessageIDArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Contains a list of up to 10 external message IDs.
 * @subpackage Arrays
 */
class MyMessagesExternalMessageIDArrayType extends AbstractStructArrayBase
{
    /**
     * The ExternalMessageID
     * Meta information extracted from the WSDL
     * - documentation: Currently available on the US site. A message ID that uniquely identifies a message for a given user. If provided at the time of message creation, this ID can be used to retrieve messages, and will take precedence over the message
     * ID. A total of 10 message IDs can be specified. | Type defining the <b>ExternalMessageID</b> field used in <b>GetMyMessages</b> to identify a specific eBay message to retrieve. Up to 10 <b>ExternalMessageID</b> values can be specified in one API
     * call. The <b>ExternalMessageIDs</b> container is only available for use on the eBay US site (SiteID 0).
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $ExternalMessageID = [];
    /**
     * Constructor method for MyMessagesExternalMessageIDArrayType
     * @uses MyMessagesExternalMessageIDArrayType::setExternalMessageID()
     * @param string[] $externalMessageID
     */
    public function __construct(array $externalMessageID = [])
    {
        $this
            ->setExternalMessageID($externalMessageID);
    }
    /**
     * Get ExternalMessageID value
     * @return string[]
     */
    public function getExternalMessageID(): array
    {
        return $this->ExternalMessageID;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalMessageID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalMessageID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalMessageIDForArrayConstraintsFromSetExternalMessageID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myMessagesExternalMessageIDArrayTypeExternalMessageIDItem) {
            // validation for constraint: itemType
            if (!is_string($myMessagesExternalMessageIDArrayTypeExternalMessageIDItem)) {
                $invalidValues[] = is_object($myMessagesExternalMessageIDArrayTypeExternalMessageIDItem) ? get_class($myMessagesExternalMessageIDArrayTypeExternalMessageIDItem) : sprintf('%s(%s)', gettype($myMessagesExternalMessageIDArrayTypeExternalMessageIDItem), var_export($myMessagesExternalMessageIDArrayTypeExternalMessageIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalMessageID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalMessageID value
     * @throws InvalidArgumentException
     * @param string[] $externalMessageID
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType
     */
    public function setExternalMessageID(array $externalMessageID = []): self
    {
        // validation for constraint: array
        if ('' !== ($externalMessageIDArrayErrorMessage = self::validateExternalMessageIDForArrayConstraintsFromSetExternalMessageID($externalMessageID))) {
            throw new InvalidArgumentException($externalMessageIDArrayErrorMessage, __LINE__);
        }
        $this->ExternalMessageID = $externalMessageID;
        
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
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesExternalMessageIDArrayType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ExternalMessageID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExternalMessageID
     */
    public function getAttributeName(): string
    {
        return 'ExternalMessageID';
    }
}
