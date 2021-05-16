<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomSecurityHeaderType StructType
 * Meta information extracted from the WSDL
 * - documentation: Security header used for SOAP API calls.
 * @subpackage Structs
 */
class CustomSecurityHeaderType extends AbstractStructBase
{
    /**
     * The eBayAuthToken
     * Meta information extracted from the WSDL
     * - documentation: Authentication token representing the user who is making the request. The user's token must be retrieved from eBay. To determine a user's authentication token, see the Authentication and Authorization information in the eBay Web
     * Services guide. For calls that list or retrieve item or transaction data, the user usually needs to be the seller of the item in question or, in some cases, the buyer. Similarly, calls that retrieve user or account data may be restricted to the user
     * whose data is being requested. The documentation for each call includes information about such restrictions.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eBayAuthToken = null;
    /**
     * The HardExpirationWarning
     * Meta information extracted from the WSDL
     * - documentation: Expiration date of the user's authentication token. Only returned within the 7-day period prior to a token's expiration. To ensure that user authentication tokens are secure and to help avoid a user's token being compromised, tokens
     * have a limited life span. A token is only valid for a period of time (set by eBay). After this amount of time has passed, the token expires and must be replaced with a new token.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HardExpirationWarning = null;
    /**
     * The Credentials
     * Meta information extracted from the WSDL
     * - documentation: Authentication information for the user on whose behalf the application is making the request, and authorization information for the application making the request. Only registered eBay users are allowed to make API calls. To verify
     * that a user is registered, your application normally needs to pass a user-specific value called an "authentication token" in the request. This is equivalent to signing in on the eBay Web site. As API calls do not pass session information, you need to
     * pass the user's authentication token every time you invoke a call on their behalf. All calls require an authentication token, except the calls you use to retrieve a token in the first place. For such calls, you use the eBay member's username and
     * password instead.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserIdPasswordType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserIdPasswordType $Credentials = null;
    /**
     * The NotificationSignature
     * Meta information extracted from the WSDL
     * - documentation: A Base64-encoded MD5 hash that allows the recipient of a Platform Notification to verify this is a valid Platform Notification sent by eBay.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NotificationSignature = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CustomSecurityHeaderType
     * @uses CustomSecurityHeaderType::setEBayAuthToken()
     * @uses CustomSecurityHeaderType::setHardExpirationWarning()
     * @uses CustomSecurityHeaderType::setCredentials()
     * @uses CustomSecurityHeaderType::setNotificationSignature()
     * @uses CustomSecurityHeaderType::setAny()
     * @param string $eBayAuthToken
     * @param string $hardExpirationWarning
     * @param \macropage\ebaysdk\trading\StructType\UserIdPasswordType $credentials
     * @param string $notificationSignature
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $eBayAuthToken = null, ?string $hardExpirationWarning = null, ?\macropage\ebaysdk\trading\StructType\UserIdPasswordType $credentials = null, ?string $notificationSignature = null, $any = null)
    {
        $this
            ->setEBayAuthToken($eBayAuthToken)
            ->setHardExpirationWarning($hardExpirationWarning)
            ->setCredentials($credentials)
            ->setNotificationSignature($notificationSignature)
            ->setAny($any);
    }
    /**
     * Get eBayAuthToken value
     * @return string|null
     */
    public function getEBayAuthToken(): ?string
    {
        return $this->eBayAuthToken;
    }
    /**
     * Set eBayAuthToken value
     * @param string $eBayAuthToken
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     */
    public function setEBayAuthToken(?string $eBayAuthToken = null): self
    {
        // validation for constraint: string
        if (!is_null($eBayAuthToken) && !is_string($eBayAuthToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eBayAuthToken, true), gettype($eBayAuthToken)), __LINE__);
        }
        $this->eBayAuthToken = $eBayAuthToken;
        
        return $this;
    }
    /**
     * Get HardExpirationWarning value
     * @return string|null
     */
    public function getHardExpirationWarning(): ?string
    {
        return $this->HardExpirationWarning;
    }
    /**
     * Set HardExpirationWarning value
     * @param string $hardExpirationWarning
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     */
    public function setHardExpirationWarning(?string $hardExpirationWarning = null): self
    {
        // validation for constraint: string
        if (!is_null($hardExpirationWarning) && !is_string($hardExpirationWarning)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardExpirationWarning, true), gettype($hardExpirationWarning)), __LINE__);
        }
        $this->HardExpirationWarning = $hardExpirationWarning;
        
        return $this;
    }
    /**
     * Get Credentials value
     * @return \macropage\ebaysdk\trading\StructType\UserIdPasswordType|null
     */
    public function getCredentials(): ?\macropage\ebaysdk\trading\StructType\UserIdPasswordType
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \macropage\ebaysdk\trading\StructType\UserIdPasswordType $credentials
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     */
    public function setCredentials(?\macropage\ebaysdk\trading\StructType\UserIdPasswordType $credentials = null): self
    {
        $this->Credentials = $credentials;
        
        return $this;
    }
    /**
     * Get NotificationSignature value
     * @return string|null
     */
    public function getNotificationSignature(): ?string
    {
        return $this->NotificationSignature;
    }
    /**
     * Set NotificationSignature value
     * @param string $notificationSignature
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     */
    public function setNotificationSignature(?string $notificationSignature = null): self
    {
        // validation for constraint: string
        if (!is_null($notificationSignature) && !is_string($notificationSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationSignature, true), gettype($notificationSignature)), __LINE__);
        }
        $this->NotificationSignature = $notificationSignature;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
