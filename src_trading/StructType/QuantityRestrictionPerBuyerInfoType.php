<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuantityRestrictionPerBuyerInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>QuantityRestrictionPerBuyer</b> container, which is used by the seller to restrict the quantity of items that may be purchased by one buyer during the duration of a fixed-price listing (single or
 * multi-variation).
 * @subpackage Structs
 */
class QuantityRestrictionPerBuyerInfoType extends AbstractStructBase
{
    /**
     * The MaximumQuantity
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the maximum quantity of items that a single buyer may purchase during the duration of a fixed-price listing (single or multi-variation). The buyer is blocked from the purchase if that buyer is attempting
     * to purchase a quantity of items that will exceed this value. Previous purchases made by the buyer are taken into account. For example, if <b>MaximumQuantity</b> is set to '5' for an item listing, and <em>Buyer1</em> purchases a quantity of three,
     * <em>Buyer1</em> is only allowed to purchase an additional quantity of two in subsequent orders on the same item listing. <br/><br/> This field is required if the <b>QuantityRestrictionPerBuyer</b> container is used. <br>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaximumQuantity = null;
    /**
     * Constructor method for QuantityRestrictionPerBuyerInfoType
     * @uses QuantityRestrictionPerBuyerInfoType::setMaximumQuantity()
     * @param int $maximumQuantity
     */
    public function __construct(?int $maximumQuantity = null)
    {
        $this
            ->setMaximumQuantity($maximumQuantity);
    }
    /**
     * Get MaximumQuantity value
     * @return int|null
     */
    public function getMaximumQuantity(): ?int
    {
        return $this->MaximumQuantity;
    }
    /**
     * Set MaximumQuantity value
     * @param int $maximumQuantity
     * @return \macropage\ebaysdk\trading\StructType\QuantityRestrictionPerBuyerInfoType
     */
    public function setMaximumQuantity(?int $maximumQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($maximumQuantity) && !(is_int($maximumQuantity) || ctype_digit($maximumQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumQuantity, true), gettype($maximumQuantity)), __LINE__);
        }
        $this->MaximumQuantity = $maximumQuantity;
        
        return $this;
    }
}
