<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndFixedPriceItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Acknowledgement that includes SKU, as well as the date and time that the listing ended due to the call to EndFixedPriceItem.
 * @subpackage Structs
 */
class EndFixedPriceItemResponseType extends AbstractResponseType
{
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp that indicates the date and time (GMT) that the specified listing was ended.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: If a SKU (stock-keeping unit) exists for the item in the listing, it is returned in the response. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage
     * information and rules, see the fields that reference this type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SKU = null;
    /**
     * Constructor method for EndFixedPriceItemResponseType
     * @uses EndFixedPriceItemResponseType::setEndTime()
     * @uses EndFixedPriceItemResponseType::setSKU()
     * @param string $endTime
     * @param string $sKU
     */
    public function __construct(?string $endTime = null, ?string $sKU = null)
    {
        $this
            ->setEndTime($endTime)
            ->setSKU($sKU);
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemResponseType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU(): ?string
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\EndFixedPriceItemResponseType
     */
    public function setSKU(?string $sKU = null): self
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        
        return $this;
    }
}
