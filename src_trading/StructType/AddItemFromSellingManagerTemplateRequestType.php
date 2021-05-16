<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddItemFromSellingManagerTemplateRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type of the <b>AddItemFromSellingManagerTemplate</b> call, which is used to create listings based on settings contained in a Selling Manager template.
 * @subpackage Structs
 */
class AddItemFromSellingManagerTemplateRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager template that a seller is using to create a listing. Unique identifiers of Selling Manager templates can be retrieved programatically by using the <b>GetSellingManagerInventory</b> call.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SaleTemplateID = null;
    /**
     * The ScheduleTime
     * Meta information extracted from the WSDL
     * - documentation: This field allows the user to specify a time in the future when the listing being created becomes active. If this field is not used, the listing will become active immediately upon being created successfully. The time in this field
     * should be specified in GMT format.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ScheduleTime = null;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This container is intended for specifying setting in the listing that differ from values in the Selling Manager template being used. <br><br> <span class="tablenote"><strong>Note:</strong> Only the following three values of
     * <b>ItemType</b> may be used for a <b>AddItemFromSellingManagerTemplate</b> call: <b>CategoryMappingAllowed</b>, <b>PaymentMethods</b>, and <b>PayPalEmailAddress</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemType $Item = null;
    /**
     * Constructor method for AddItemFromSellingManagerTemplateRequestType
     * @uses AddItemFromSellingManagerTemplateRequestType::setSaleTemplateID()
     * @uses AddItemFromSellingManagerTemplateRequestType::setScheduleTime()
     * @uses AddItemFromSellingManagerTemplateRequestType::setItem()
     * @param int $saleTemplateID
     * @param string $scheduleTime
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     */
    public function __construct(?int $saleTemplateID = null, ?string $scheduleTime = null, ?\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID)
            ->setScheduleTime($scheduleTime)
            ->setItem($item);
    }
    /**
     * Get SaleTemplateID value
     * @return int|null
     */
    public function getSaleTemplateID(): ?int
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param int $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\AddItemFromSellingManagerTemplateRequestType
     */
    public function setSaleTemplateID(?int $saleTemplateID = null): self
    {
        // validation for constraint: int
        if (!is_null($saleTemplateID) && !(is_int($saleTemplateID) || ctype_digit($saleTemplateID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleTemplateID, true), gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        
        return $this;
    }
    /**
     * Get ScheduleTime value
     * @return string|null
     */
    public function getScheduleTime(): ?string
    {
        return $this->ScheduleTime;
    }
    /**
     * Set ScheduleTime value
     * @param string $scheduleTime
     * @return \macropage\ebaysdk\trading\StructType\AddItemFromSellingManagerTemplateRequestType
     */
    public function setScheduleTime(?string $scheduleTime = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduleTime) && !is_string($scheduleTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduleTime, true), gettype($scheduleTime)), __LINE__);
        }
        $this->ScheduleTime = $scheduleTime;
        
        return $this;
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\AddItemFromSellingManagerTemplateRequestType
     */
    public function setItem(?\macropage\ebaysdk\trading\StructType\ItemType $item = null): self
    {
        $this->Item = $item;
        
        return $this;
    }
}
