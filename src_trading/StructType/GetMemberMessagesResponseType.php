<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMemberMessagesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves a list of the messages buyers have posted about your active item listings.
 * @subpackage Structs
 */
class GetMemberMessagesResponseType extends AbstractResponseType
{
    /**
     * The MemberMessage
     * Meta informations extracted from the WSDL
     * - documentation: The returned member messages. Returned if messages that meet the request criteria exist. Note that <b>GetMemberMessages</b> does not return messages when, in the request, the <b>MailMessageType</b> is <b>AskSellerQuestion</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType
     */
    public $MemberMessage;
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Shows the pagination of data returned by requests.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreItems
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the response has more items.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreItems;
    /**
     * Constructor method for GetMemberMessagesResponseType
     * @uses GetMemberMessagesResponseType::setMemberMessage()
     * @uses GetMemberMessagesResponseType::setPaginationResult()
     * @uses GetMemberMessagesResponseType::setHasMoreItems()
     * @param \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType $memberMessage
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreItems
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType $memberMessage = null, \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, $hasMoreItems = null)
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
    public function getMemberMessage()
    {
        return $this->MemberMessage;
    }
    /**
     * Set MemberMessage value
     * @param \macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType $memberMessage
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType
     */
    public function setMemberMessage(\macropage\ebaysdk\trading\ArrayType\MemberMessageExchangeArrayType $memberMessage = null)
    {
        $this->MemberMessage = $memberMessage;
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get HasMoreItems value
     * @return bool|null
     */
    public function getHasMoreItems()
    {
        return $this->HasMoreItems;
    }
    /**
     * Set HasMoreItems value
     * @param bool $hasMoreItems
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType
     */
    public function setHasMoreItems($hasMoreItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreItems) && !is_bool($hasMoreItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasMoreItems)), __LINE__);
        }
        $this->HasMoreItems = $hasMoreItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetMemberMessagesResponseType
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
