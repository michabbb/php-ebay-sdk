<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomSecurityHeaderType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Security header used for SOAP API calls.
 * @subpackage Structs
 */
class CustomSecurityHeaderType extends AbstractStructBase
{
    /**
     * The eBayAuthToken
     * Meta informations extracted from the WSDL
     * - documentation: Authentication token representing the user who is making the request. The user's token must be retrieved from eBay. To determine a user's authentication token, see the Authentication and Authorization information in the eBay Web
     * Services guide. For calls that list or retrieve item or transaction data, the user usually needs to be the seller of the item in question or, in some cases, the buyer. Similarly, calls that retrieve user or account data may be restricted to the user
     * whose data is being requested. The documentation for each call includes information about such restrictions.
     * - minOccurs: 0
     * @var string
     */
    public $eBayAuthToken;
    /**
     * The HardExpirationWarning
     * Meta informations extracted from the WSDL
     * - documentation: Expiration date of the user's authentication token. Only returned within the 7-day period prior to a token's expiration. To ensure that user authentication tokens are secure and to help avoid a user's token being compromised, tokens
     * have a limited life span. A token is only valid for a period of time (set by eBay). After this amount of time has passed, the token expires and must be replaced with a new token.
     * - minOccurs: 0
     * @var string
     */
    public $HardExpirationWarning;
    /**
     * The Credentials
     * Meta informations extracted from the WSDL
     * - documentation: Authentication information for the user on whose behalf the application is making the request, and authorization information for the application making the request. Only registered eBay users are allowed to make API calls. To verify
     * that a user is registered, your application normally needs to pass a user-specific value called an "authentication token" in the request. This is equivalent to signing in on the eBay Web site. As API calls do not pass session information, you need to
     * pass the user's authentication token every time you invoke a call on their behalf. All calls require an authentication token, except the calls you use to retrieve a token in the first place. For such calls, you use the eBay member's username and
     * password instead.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserIdPasswordType
     */
    public $Credentials;
    /**
     * The NotificationSignature
     * Meta informations extracted from the WSDL
     * - documentation: A Base64-encoded MD5 hash that allows the recipient of a Platform Notification to verify this is a valid Platform Notification sent by eBay.
     * - minOccurs: 0
     * @var string
     */
    public $NotificationSignature;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($eBayAuthToken = null, $hardExpirationWarning = null, \macropage\ebaysdk\trading\StructType\UserIdPasswordType $credentials = null, $notificationSignature = null, \DOMDocument $any = null)
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
    public function getEBayAuthToken()
    {
        return $this->eBayAuthToken;
    }
    /**
     * Set eBayAuthToken value
     * @param string $eBayAuthToken
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     */
    public function setEBayAuthToken($eBayAuthToken = null)
    {
        // validation for constraint: string
        if (!is_null($eBayAuthToken) && !is_string($eBayAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eBayAuthToken)), __LINE__);
        }
        $this->eBayAuthToken = $eBayAuthToken;
        return $this;
    }
    /**
     * Get HardExpirationWarning value
     * @return string|null
     */
    public function getHardExpirationWarning()
    {
        return $this->HardExpirationWarning;
    }
    /**
     * Set HardExpirationWarning value
     * @param string $hardExpirationWarning
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     */
    public function setHardExpirationWarning($hardExpirationWarning = null)
    {
        // validation for constraint: string
        if (!is_null($hardExpirationWarning) && !is_string($hardExpirationWarning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hardExpirationWarning)), __LINE__);
        }
        $this->HardExpirationWarning = $hardExpirationWarning;
        return $this;
    }
    /**
     * Get Credentials value
     * @return \macropage\ebaysdk\trading\StructType\UserIdPasswordType|null
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \macropage\ebaysdk\trading\StructType\UserIdPasswordType $credentials
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     */
    public function setCredentials(\macropage\ebaysdk\trading\StructType\UserIdPasswordType $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Get NotificationSignature value
     * @return string|null
     */
    public function getNotificationSignature()
    {
        return $this->NotificationSignature;
    }
    /**
     * Set NotificationSignature value
     * @param string $notificationSignature
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     */
    public function setNotificationSignature($notificationSignature = null)
    {
        // validation for constraint: string
        if (!is_null($notificationSignature) && !is_string($notificationSignature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notificationSignature)), __LINE__);
        }
        $this->NotificationSignature = $notificationSignature;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\CustomSecurityHeaderType
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
