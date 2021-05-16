<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerPackageEnclosureType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyerPackageEnclosure</b> container, which is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment
 * instructions in the shipping package. A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
 * @subpackage Structs
 */
class BuyerPackageEnclosureType extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: This attribute indicates the type of payment instructions included in the shipping package.
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for BuyerPackageEnclosureType
     * @uses BuyerPackageEnclosureType::set_()
     * @uses BuyerPackageEnclosureType::setType()
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType
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
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentInstructionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentInstructionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentInstructionCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PaymentInstructionCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentInstructionCodeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
