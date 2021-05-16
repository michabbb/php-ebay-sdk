<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductIDType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type consists of an attribute that is used by the <b>ProductID</b> field in Shopping API calls to identify the type of product identifier that is used to identify a product.
 * @subpackage Structs
 */
class ProductIDType extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: This attribute value identifies the product identifier type being used. If <b>ProductID</b> is used in a <b>FindProducts</b> call, this attribute value is required.
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for ProductIDType
     * @uses ProductIDType::set_()
     * @uses ProductIDType::setType()
     * @param string $_
     * @param string $type
     */
    public function __construct(?string $_ = null, ?string $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
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
     * @return \macropage\ebaysdk\shopping\StructType\ProductIDType
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
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \macropage\ebaysdk\shopping\EnumType\ProductIDCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ProductIDCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\shopping\StructType\ProductIDType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ProductIDCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\ProductIDCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\ProductIDCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
