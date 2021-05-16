<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdFormatLeadsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves sales lead information for a lead generation listing.
 * @subpackage Structs
 */
class GetAdFormatLeadsRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an item listed on the eBay site. Returned by eBay when the item is created. This ID must correspond to an ad format item. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Filters the leads based on their status.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The IncludeMemberMessages
     * Meta information extracted from the WSDL
     * - documentation: Boolean which indicates whether to return mail messages for this lead in a MemberMessage node.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeMemberMessages = null;
    /**
     * The StartCreationTime
     * Meta information extracted from the WSDL
     * - documentation: Used with EndCreationTime to limit the returned leads for a user to only those with a creation date greater than or equal to the specified date and time.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartCreationTime = null;
    /**
     * The EndCreationTime
     * Meta information extracted from the WSDL
     * - documentation: Used with StartCreationTime to limit the returned leads for a user to only those with a creation date less than or equal to the specified date and time.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndCreationTime = null;
    /**
     * Constructor method for GetAdFormatLeadsRequestType
     * @uses GetAdFormatLeadsRequestType::setItemID()
     * @uses GetAdFormatLeadsRequestType::setStatus()
     * @uses GetAdFormatLeadsRequestType::setIncludeMemberMessages()
     * @uses GetAdFormatLeadsRequestType::setStartCreationTime()
     * @uses GetAdFormatLeadsRequestType::setEndCreationTime()
     * @param string $itemID
     * @param string $status
     * @param bool $includeMemberMessages
     * @param string $startCreationTime
     * @param string $endCreationTime
     */
    public function __construct(?string $itemID = null, ?string $status = null, ?bool $includeMemberMessages = null, ?string $startCreationTime = null, ?string $endCreationTime = null)
    {
        $this
            ->setItemID($itemID)
            ->setStatus($status)
            ->setIncludeMemberMessages($includeMemberMessages)
            ->setStartCreationTime($startCreationTime)
            ->setEndCreationTime($endCreationTime);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get IncludeMemberMessages value
     * @return bool|null
     */
    public function getIncludeMemberMessages(): ?bool
    {
        return $this->IncludeMemberMessages;
    }
    /**
     * Set IncludeMemberMessages value
     * @param bool $includeMemberMessages
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
     */
    public function setIncludeMemberMessages(?bool $includeMemberMessages = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeMemberMessages) && !is_bool($includeMemberMessages)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeMemberMessages, true), gettype($includeMemberMessages)), __LINE__);
        }
        $this->IncludeMemberMessages = $includeMemberMessages;
        
        return $this;
    }
    /**
     * Get StartCreationTime value
     * @return string|null
     */
    public function getStartCreationTime(): ?string
    {
        return $this->StartCreationTime;
    }
    /**
     * Set StartCreationTime value
     * @param string $startCreationTime
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
     */
    public function setStartCreationTime(?string $startCreationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startCreationTime) && !is_string($startCreationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startCreationTime, true), gettype($startCreationTime)), __LINE__);
        }
        $this->StartCreationTime = $startCreationTime;
        
        return $this;
    }
    /**
     * Get EndCreationTime value
     * @return string|null
     */
    public function getEndCreationTime(): ?string
    {
        return $this->EndCreationTime;
    }
    /**
     * Set EndCreationTime value
     * @param string $endCreationTime
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
     */
    public function setEndCreationTime(?string $endCreationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endCreationTime) && !is_string($endCreationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endCreationTime, true), gettype($endCreationTime)), __LINE__);
        }
        $this->EndCreationTime = $endCreationTime;
        
        return $this;
    }
}
