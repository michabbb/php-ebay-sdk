<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundLineType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class RefundLineType extends AmountType
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for RefundLineType
     * @uses RefundLineType::setType()
     * @param string $type
     */
    public function __construct(?string $type = null)
    {
        $this
            ->setType($type);
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
     * @uses \macropage\ebaysdk\trading\EnumType\RefundLineTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\RefundLineTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\RefundLineType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\RefundLineTypeCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\RefundLineTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\trading\EnumType\RefundLineTypeCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
