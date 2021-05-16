<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMemberMessagesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves a list of the messages buyers have posted about your active item listings.
 * @subpackage Structs
 */
class GetMemberMessagesResponseType extends AbstractResponseType
{
    /**
     * The MemberMessage
     * Meta information extracted from the WSDL
     * - documentation: The returned member messages. Returned if messages that meet the request criteria exist. Note that <b>GetMemberMessages</b> does not return messages when, in the request, the <b>MailMessageType</b> is <b>AskSellerQuestion</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType $MemberMessage = null;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Shows the pagination of data returned by requests.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationResultType $PaginationResult = null;
    /**
     * The HasMoreItems
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the response has more items.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HasMoreItems = null;
    /**
     * Constructor method for GetMemberMessagesResponseType
     * @uses GetMemberMessagesResponseType::setMemberMessage()
     * @uses GetMemberMessagesResponseType::setPaginationResult()
     * @uses GetMemberMessagesResponseType::setHasMoreItems()
     * @param \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType $memberMessage
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreItems
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType $memberMessage = null, ?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, ?bool $hasMoreItems = null)
    {
        $this
            ->setMemberMessage($memberMessage)
            ->setPaginationResult($paginationResult)
            ->setHasMoreItems($hasMoreItems);
    }
    /**
     * Get MemberMessage value
     * @return \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType|null
     */
    public function getMemberMessage(): ?\macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType
    {
        return $this->MemberMessage;
    }
    /**
     * Set MemberMessage value
     * @param \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType $memberMessage
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType
     */
    public function setMemberMessage(?\macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType $memberMessage = null): self
    {
        $this->MemberMessage = $memberMessage;
        
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult(): ?\macropage\ebaysdk\trading\StructType\PaginationResultType
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType
     */
    public function setPaginationResult(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null): self
    {
        $this->PaginationResult = $paginationResult;
        
        return $this;
    }
    /**
     * Get HasMoreItems value
     * @return bool|null
     */
    public function getHasMoreItems(): ?bool
    {
        return $this->HasMoreItems;
    }
    /**
     * Set HasMoreItems value
     * @param bool $hasMoreItems
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType
     */
    public function setHasMoreItems(?bool $hasMoreItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreItems) && !is_bool($hasMoreItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreItems, true), gettype($hasMoreItems)), __LINE__);
        }
        $this->HasMoreItems = $hasMoreItems;
        
        return $this;
    }
}
