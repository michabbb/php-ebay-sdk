<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicSetIDsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharacteristicSetIDsType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $ID = null;
    /**
     * Constructor method for CharacteristicSetIDsType
     * @uses CharacteristicSetIDsType::setID()
     * @param string[] $iD
     */
    public function __construct(?array $iD = null)
    {
        $this
            ->setID($iD);
    }
    /**
     * Get ID value
     * @return string[]
     */
    public function getID(): ?array
    {
        return $this->ID;
    }
    /**
     * This method is responsible for validating the values passed to the setID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIDForArrayConstraintsFromSetID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $characteristicSetIDsTypeIDItem) {
            // validation for constraint: itemType
            if (!is_string($characteristicSetIDsTypeIDItem)) {
                $invalidValues[] = is_object($characteristicSetIDsTypeIDItem) ? get_class($characteristicSetIDsTypeIDItem) : sprintf('%s(%s)', gettype($characteristicSetIDsTypeIDItem), var_export($characteristicSetIDsTypeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ID value
     * @throws InvalidArgumentException
     * @param string[] $iD
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType
     */
    public function setID(?array $iD = null): self
    {
        // validation for constraint: array
        if ('' !== ($iDArrayErrorMessage = self::validateIDForArrayConstraintsFromSetID($iD))) {
            throw new InvalidArgumentException($iDArrayErrorMessage, __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Add item to ID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicSetIDsType
     */
    public function addToID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ID[] = $item;
        
        return $this;
    }
}
