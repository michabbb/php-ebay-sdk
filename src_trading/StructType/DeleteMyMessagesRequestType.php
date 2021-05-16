<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMyMessagesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Removes selected messages for a given user.
 * @subpackage Structs
 */
class DeleteMyMessagesRequestType extends AbstractRequestType
{
    /**
     * The AlertIDs
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $AlertIDs = null;
    /**
     * The MessageIDs
     * Meta information extracted from the WSDL
     * - documentation: Contains a list of up to 10 <b>MessageID</b> values.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $MessageIDs = null;
    /**
     * Constructor method for DeleteMyMessagesRequestType
     * @uses DeleteMyMessagesRequestType::setAlertIDs()
     * @uses DeleteMyMessagesRequestType::setMessageIDs()
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null, ?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null)
    {
        $this
            ->setAlertIDs($alertIDs)
            ->setMessageIDs($messageIDs);
    }
    /**
     * Get AlertIDs value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType|null
     */
    public function getAlertIDs(): ?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType
    {
        return $this->AlertIDs;
    }
    /**
     * Set AlertIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs
     * @return \macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType
     */
    public function setAlertIDs(?\macropage\ebaysdk\trading\ArrayType\MyMessagesAlertIDArrayType $alertIDs = null): self
    {
        $this->AlertIDs = $alertIDs;
        
        return $this;
    }
    /**
     * Get MessageIDs value
     * @return \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType|null
     */
    public function getMessageIDs(): ?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType
    {
        return $this->MessageIDs;
    }
    /**
     * Set MessageIDs value
     * @param \macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs
     * @return \macropage\ebaysdk\trading\StructType\DeleteMyMessagesRequestType
     */
    public function setMessageIDs(?\macropage\ebaysdk\trading\ArrayType\MyMessagesMessageIDArrayType $messageIDs = null): self
    {
        $this->MessageIDs = $messageIDs;
        
        return $this;
    }
}
