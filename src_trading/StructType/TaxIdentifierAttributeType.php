<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxIdentifierAttributeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to display the value of the <b>name</b> attribute of the <b>BuyerTaxIdentifier.Attribute</b> field.
 * @subpackage Structs
 */
class TaxIdentifierAttributeType extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - documentation: The only supported value for this attribute is 'IssuingCountry', but in the future, other attributes related to the tax ID may be supported.
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for TaxIdentifierAttributeType
     * @uses TaxIdentifierAttributeType::set_()
     * @uses TaxIdentifierAttributeType::setName()
     * @param string $_
     * @param string $name
     */
    public function __construct(?string $_ = null, ?string $name = null)
    {
        $this
            ->set_($_)
            ->setName($name);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @uses \macropage\ebaysdk\trading\EnumType\TaxIdentifierAttributeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TaxIdentifierAttributeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TaxIdentifierAttributeCodeType::valueIsValid($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TaxIdentifierAttributeCodeType', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TaxIdentifierAttributeCodeType::getValidValues())), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
}
