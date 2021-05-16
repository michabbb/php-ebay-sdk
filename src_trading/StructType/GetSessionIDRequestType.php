<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSessionIDRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves a session ID that identifies a user and your application when you make a <b>FetchToken</b> request.
 * @subpackage Structs
 */
class GetSessionIDRequestType extends AbstractRequestType
{
    /**
     * The RuName
     * Meta information extracted from the WSDL
     * - documentation: The eBay Registered URL must be specified in this field. An eBay Registered URL is created and associated with a developer's Sandbox or Production key set by logging into the user's developer account on <b>developer.ebay.com</b> and
     * going to the <b>User Tokens</b> page. The <b>RuName</b> value passed in this field must match the one specified for the specific Sandbox or Production key set being used to make the <b>GetSessionID</b> call. For more information on adding and
     * registering your <b class="con">RuName</b>, see the <a href="../../HowTo/Tokens/GettingTokens.html#step1">Setting Up an Application to Receive Tokens</a> tutorial.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RuName = null;
    /**
     * Constructor method for GetSessionIDRequestType
     * @uses GetSessionIDRequestType::setRuName()
     * @param string $ruName
     */
    public function __construct(?string $ruName = null)
    {
        $this
            ->setRuName($ruName);
    }
    /**
     * Get RuName value
     * @return string|null
     */
    public function getRuName(): ?string
    {
        return $this->RuName;
    }
    /**
     * Set RuName value
     * @param string $ruName
     * @return \macropage\ebaysdk\trading\StructType\GetSessionIDRequestType
     */
    public function setRuName(?string $ruName = null): self
    {
        // validation for constraint: string
        if (!is_null($ruName) && !is_string($ruName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruName, true), gettype($ruName)), __LINE__);
        }
        $this->RuName = $ruName;
        
        return $this;
    }
}
