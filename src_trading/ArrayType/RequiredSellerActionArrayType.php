<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for RequiredSellerActionArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>RequiredSellerActionArray</b> container, which may contain one or more <b>RequiredSellerAction</b> fields.
 * @subpackage Arrays
 */
class RequiredSellerActionArrayType extends AbstractStructArrayBase
{
    /**
     * The RequiredSellerAction
     * Meta information extracted from the WSDL
     * - documentation: This field contains a possible action that a seller can take to expedite the release of a payment hold. There can be one or more <b>RequiredSellerAction</b> fields in the <b>RequiredSellerActionArray</b> container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $RequiredSellerAction = [];
    /**
     * Constructor method for RequiredSellerActionArrayType
     * @uses RequiredSellerActionArrayType::setRequiredSellerAction()
     * @param string[] $requiredSellerAction
     */
    public function __construct(array $requiredSellerAction = [])
    {
        $this
            ->setRequiredSellerAction($requiredSellerAction);
    }
    /**
     * Get RequiredSellerAction value
     * @return string[]
     */
    public function getRequiredSellerAction(): array
    {
        return $this->RequiredSellerAction;
    }
    /**
     * This method is responsible for validating the values passed to the setRequiredSellerAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequiredSellerAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequiredSellerActionForArrayConstraintsFromSetRequiredSellerAction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $requiredSellerActionArrayTypeRequiredSellerActionItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::valueIsValid($requiredSellerActionArrayTypeRequiredSellerActionItem)) {
                $invalidValues[] = is_object($requiredSellerActionArrayTypeRequiredSellerActionItem) ? get_class($requiredSellerActionArrayTypeRequiredSellerActionItem) : sprintf('%s(%s)', gettype($requiredSellerActionArrayTypeRequiredSellerActionItem), var_export($requiredSellerActionArrayTypeRequiredSellerActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RequiredSellerAction value
     * @uses \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $requiredSellerAction
     * @return \macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType
     */
    public function setRequiredSellerAction(array $requiredSellerAction = []): self
    {
        // validation for constraint: array
        if ('' !== ($requiredSellerActionArrayErrorMessage = self::validateRequiredSellerActionForArrayConstraintsFromSetRequiredSellerAction($requiredSellerAction))) {
            throw new InvalidArgumentException($requiredSellerActionArrayErrorMessage, __LINE__);
        }
        $this->RequiredSellerAction = $requiredSellerAction;
        
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
     * @return \macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType
     */
    public function add($item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RequiredSellerAction
     */
    public function getAttributeName(): string
    {
        return 'RequiredSellerAction';
    }
}
