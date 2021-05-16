<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyMessagesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Conains information about the messages sent to a user. Depending on the detail level, this information can include message counts, resolution and flagged status, message headers, and message text.
 * @subpackage Structs
 */
class GetMyMessagesResponseType extends AbstractResponseType
{
    /**
     * The Summary
     * Meta information extracted from the WSDL
     * - documentation: Summary data for a given user's messages. This includes the numbers of new messages, flagged messages, and total messages. The amount and type of data returned is the same whether or not the request includes specific Message IDs.
     * Always/Conditionally returned logic assumes a detail level of ReturnMessages.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\MyMessagesSummaryType $Summary = null;
    /**
     * The Alerts
     * Meta information extracted from the WSDL
     * - documentation: This container is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType $Alerts = null;
    /**
     * The Messages
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of one or more messages that match the search criteria in the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType $Messages = null;
    /**
     * Constructor method for GetMyMessagesResponseType
     * @uses GetMyMessagesResponseType::setSummary()
     * @uses GetMyMessagesResponseType::setAlerts()
     * @uses GetMyMessagesResponseType::setMessages()
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType $summary
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType $alerts
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType $messages
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\MyMessagesSummaryType $summary = null, ?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType $alerts = null, ?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType $messages = null)
    {
        $this
            ->setSummary($summary)
            ->setAlerts($alerts)
            ->setMessages($messages);
    }
    /**
     * Get Summary value
     * @return \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType|null
     */
    public function getSummary(): ?\macropage\ebaysdk\trading\StructType\MyMessagesSummaryType
    {
        return $this->Summary;
    }
    /**
     * Set Summary value
     * @param \macropage\ebaysdk\trading\StructType\MyMessagesSummaryType $summary
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesResponseType
     */
    public function setSummary(?\macropage\ebaysdk\trading\StructType\MyMessagesSummaryType $summary = null): self
    {
        $this->Summary = $summary;
        
        return $this;
    }
    /**
     * Get Alerts value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType|null
     */
    public function getAlerts(): ?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType
    {
        return $this->Alerts;
    }
    /**
     * Set Alerts value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType $alerts
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesResponseType
     */
    public function setAlerts(?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertArrayType $alerts = null): self
    {
        $this->Alerts = $alerts;
        
        return $this;
    }
    /**
     * Get Messages value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType|null
     */
    public function getMessages(): ?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType
    {
        return $this->Messages;
    }
    /**
     * Set Messages value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType $messages
     * @return \macropage\ebaysdk\trading\StructType\GetMyMessagesResponseType
     */
    public function setMessages(?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageArrayType $messages = null): self
    {
        $this->Messages = $messages;
        
        return $this;
    }
}
