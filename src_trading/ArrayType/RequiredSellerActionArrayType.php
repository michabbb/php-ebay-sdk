<?php

namespace macropage\ebaysdk\trading\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for RequiredSellerActionArrayType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the <b>RequiredSellerActionArray</b> container, which may contain one or more <b>RequiredSellerAction</b> fields.
 * @subpackage Arrays
 */
class RequiredSellerActionArrayType extends AbstractStructArrayBase
{
    /**
     * The RequiredSellerAction
     * Meta informations extracted from the WSDL
     * - documentation: This field contains a possible action that a seller can take to expedite the release of a payment hold. There can be one or more <b>RequiredSellerAction</b> fields in the <b>RequiredSellerActionArray</b> container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RequiredSellerAction;
    /**
     * Constructor method for RequiredSellerActionArrayType
     * @uses RequiredSellerActionArrayType::setRequiredSellerAction()
     * @param string[] $requiredSellerAction
     */
    public function __construct(array $requiredSellerAction = array())
    {
        $this
            ->setRequiredSellerAction($requiredSellerAction);
    }
    /**
     * Get RequiredSellerAction value
     * @return string[]|null
     */
    public function getRequiredSellerAction()
    {
        return $this->RequiredSellerAction;
    }
    /**
     * Set RequiredSellerAction value
     * @uses \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $requiredSellerAction
     * @return \macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType
     */
    public function setRequiredSellerAction(array $requiredSellerAction = array())
    {
        $invalidValues = array();
        foreach ($requiredSellerAction as $requiredSellerActionArrayTypeRequiredSellerActionItem) {
            if (!\macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::valueIsValid($requiredSellerActionArrayTypeRequiredSellerActionItem)) {
                $invalidValues[] = var_export($requiredSellerActionArrayTypeRequiredSellerActionItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::getValidValues())), __LINE__);
        }
        $this->RequiredSellerAction = $requiredSellerAction;
        return $this;
    }
    /**
     * Add item to RequiredSellerAction value
     * @uses \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType
     */
    public function addToRequiredSellerAction($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::getValidValues())), __LINE__);
        }
        $this->RequiredSellerAction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::valueIsValid()
     * @param string $item
     * @return \macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType
     */
    public function add($item)
    {
        if (!\macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\RequiredSellerActionCodeType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RequiredSellerAction
     */
    public function getAttributeName()
    {
        return 'RequiredSellerAction';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType
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
