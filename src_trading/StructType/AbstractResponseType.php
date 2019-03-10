<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base type definition of a response payload that can carry any type of payload content with following optional elements: <ul> <li>timestamp of response message</li> <li>application-level acknowledgement</li> <li>application-level
 * (business-level) errors and warnings</li> </ul>
 * @subpackage Structs
 */
abstract class AbstractResponseType extends AbstractStructBase
{
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - documentation: This value represents the date and time when eBay processed the request. The time zone of this value is GMT and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the <b>Time Values</b> section in the
     * eBay Features Guide for information about this time format and converting to and from the GMT time zone. <br> <br> <span class="tablenote"><b>Note:</b> <b>GetCategories</b> and other Trading API calls are designed to retrieve very large sets of
     * metadata that change once a day or less often. To improve performance, these calls return cached responses when you request all available data (with no filters). When this occurs, this time value reflects the time the cached response was created.
     * Thus, this value is not necessarily when the request was processed. However, if you specify an input filter to reduce the amount of data returned, the calls retrieve the latest data (not cached). When this occurs, this time value does reflect when
     * the request was processed.</span>
     * - minOccurs: 0
     * @var string
     */
    public $Timestamp;
    /**
     * The Ack
     * Meta informations extracted from the WSDL
     * - documentation: A token representing the application-level acknowledgement code that indicates the response status (e.g., success). The <b>AckCodeType</b> list specifies the possible values for the <b>Ack</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $Ack;
    /**
     * The CorrelationID
     * Meta informations extracted from the WSDL
     * - documentation: Most Trading API calls support a <b>MessageID</b> element in the request and a <b>CorrelationID</b> element in the response. If you pass in a <b>MessageID</b> in a request, the same value will be returned in the <b>CorrelationID</b>
     * field in the response. Pairing these values can help you track and confirm that a response is returned for every request and to match specific responses to specific requests. If you do not pass a <b>MessageID</b> value in the request,
     * <b>CorrelationID</b> is not returned.<br> <br> <span class="tablenote"><b>Note:</b> <b>GetCategories</b> is designed to retrieve very large sets of metadata that change once a day or less often. To improve performance, these calls return cached
     * responses when you request all available data (with no filters). When this occurs, the <b>MessageID</b> and <b>CorrelationID</b> fields aren't applicable. However, if you specify an input filter to reduce the amount of data returned, the calls
     * retrieve the latest data (not cached). When this occurs, <b>MessageID</b> and <b>CorrelationID</b> are applicable. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationID;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - documentation: A list of application-level errors (if any) that occurred when eBay processed the request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ErrorType[]
     */
    public $Errors;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Supplemental information from eBay, if applicable. May elaborate on errors (such as how a listing violates eBay policies) or provide useful hints that may help a seller increase sales. This data can accompany the call's normal data
     * result set or a result set that contains only errors. <br> <br> Applications must recognize when the <b>Message</b> field is returned and provide a means to display the listing hints and error message explanations to the user. <br> <br> The string
     * can return HTML, including TABLE, IMG, and HREF elements. In this case, an HTML-based application should be able to include the HTML as-is in the HTML page that displays the results. A non-HTML application would need to parse the HTML and convert the
     * table elements and image references into UI elements particular to the programming language used. As usual for string data types, the HTML markup elements are escaped with character entity references (e.g.,&lt;table&gt;&lt;tr&gt;...).
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The version of the response payload schema. Indicates the version of the schema that eBay used to process the request. See the <b>Standard Data for All Calls</b> section in the eBay Features Guide for information on using the
     * response version when troubleshooting <b>CustomCode</b> values that appear in the response.
     * - minOccurs: 0
     * @var string
     */
    public $Version;
    /**
     * The Build
     * Meta informations extracted from the WSDL
     * - documentation: This refers to the specific software build that eBay used when processing the request and generating the response. This includes the version number plus additional information. eBay Developer Support may request the build information
     * when helping you resolve technical issues.
     * - minOccurs: 0
     * @var string
     */
    public $Build;
    /**
     * The NotificationEventName
     * Meta informations extracted from the WSDL
     * - documentation: Event name of the notification. Only returned by Platform Notifications.
     * - minOccurs: 0
     * @var string
     */
    public $NotificationEventName;
    /**
     * The DuplicateInvocationDetails
     * Meta informations extracted from the WSDL
     * - documentation: Information that explains a failure due to a duplicate <b>InvocationID</b> being passed in.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType
     */
    public $DuplicateInvocationDetails;
    /**
     * The RecipientUserID
     * Meta informations extracted from the WSDL
     * - documentation: Recipient user ID of the notification. Only returned by Platform Notifications.
     * - minOccurs: 0
     * @var string
     */
    public $RecipientUserID;
    /**
     * The EIASToken
     * Meta informations extracted from the WSDL
     * - documentation: Unique Identifier of Recipient user ID of the notification. Only returned by Platform Notifications (not for regular API call responses).
     * - minOccurs: 0
     * @var string
     */
    public $EIASToken;
    /**
     * The NotificationSignature
     * Meta informations extracted from the WSDL
     * - documentation: A Base64-encoded MD5 hash that allows the recipient of a Platform Notification to verify this is a valid Platform Notification sent by eBay.
     * - minOccurs: 0
     * @var string
     */
    public $NotificationSignature;
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
     * The BotBlock
     * Meta informations extracted from the WSDL
     * - documentation: This container is conditionally returned in the <b>PlaceOffer</b> call response if eBay wants to challenge the user making the call to ensure that the call is being made by a real user and not a bot. This container consist of an
     * encrypted token, the URL of the image that should be displayed to the user, or the URL of an audio clip for sight-impaired users. After receiving this data in the response, the caller must make another <b>PlaceOffer</b> call, this time passing in the
     * encrypted token and one of the URLs that was received in the previous call response.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BotBlockResponseType
     */
    public $BotBlock;
    /**
     * The ExternalUserData
     * Meta informations extracted from the WSDL
     * - documentation: An application subscribing to notifications can include an XML-compliant string, not to exceed 256 characters, which will be returned. The string can identify a particular user. Any sensitive information should be passed with due
     * caution. <br><br> To subscribe to and receive eBay Buyer Protection notifications, this field is required, and you must pass in 'eBP notification' as a string.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalUserData;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AbstractResponseType
     * @uses AbstractResponseType::setTimestamp()
     * @uses AbstractResponseType::setAck()
     * @uses AbstractResponseType::setCorrelationID()
     * @uses AbstractResponseType::setErrors()
     * @uses AbstractResponseType::setMessage()
     * @uses AbstractResponseType::setVersion()
     * @uses AbstractResponseType::setBuild()
     * @uses AbstractResponseType::setNotificationEventName()
     * @uses AbstractResponseType::setDuplicateInvocationDetails()
     * @uses AbstractResponseType::setRecipientUserID()
     * @uses AbstractResponseType::setEIASToken()
     * @uses AbstractResponseType::setNotificationSignature()
     * @uses AbstractResponseType::setHardExpirationWarning()
     * @uses AbstractResponseType::setBotBlock()
     * @uses AbstractResponseType::setExternalUserData()
     * @uses AbstractResponseType::setAny()
     * @param string $timestamp
     * @param string $ack
     * @param string $correlationID
     * @param \macropage\ebaysdk\trading\StructType\ErrorType[] $errors
     * @param string $message
     * @param string $version
     * @param string $build
     * @param string $notificationEventName
     * @param \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType $duplicateInvocationDetails
     * @param string $recipientUserID
     * @param string $eIASToken
     * @param string $notificationSignature
     * @param string $hardExpirationWarning
     * @param \macropage\ebaysdk\trading\StructType\BotBlockResponseType $botBlock
     * @param string $externalUserData
     * @param \DOMDocument $any
     */
    public function __construct($timestamp = null, $ack = null, $correlationID = null, array $errors = array(), $message = null, $version = null, $build = null, $notificationEventName = null, \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType $duplicateInvocationDetails = null, $recipientUserID = null, $eIASToken = null, $notificationSignature = null, $hardExpirationWarning = null, \macropage\ebaysdk\trading\StructType\BotBlockResponseType $botBlock = null, $externalUserData = null, \DOMDocument $any = null)
    {
        $this
            ->setTimestamp($timestamp)
            ->setAck($ack)
            ->setCorrelationID($correlationID)
            ->setErrors($errors)
            ->setMessage($message)
            ->setVersion($version)
            ->setBuild($build)
            ->setNotificationEventName($notificationEventName)
            ->setDuplicateInvocationDetails($duplicateInvocationDetails)
            ->setRecipientUserID($recipientUserID)
            ->setEIASToken($eIASToken)
            ->setNotificationSignature($notificationSignature)
            ->setHardExpirationWarning($hardExpirationWarning)
            ->setBotBlock($botBlock)
            ->setExternalUserData($externalUserData)
            ->setAny($any);
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get Ack value
     * @return string|null
     */
    public function getAck()
    {
        return $this->Ack;
    }
    /**
     * Set Ack value
     * @uses \macropage\ebaysdk\trading\EnumType\AckCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AckCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ack
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setAck($ack = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AckCodeType::valueIsValid($ack)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ack, implode(', ', \macropage\ebaysdk\trading\EnumType\AckCodeType::getValidValues())), __LINE__);
        }
        $this->Ack = $ack;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get Errors value
     * @return \macropage\ebaysdk\trading\StructType\ErrorType[]|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ErrorType[] $errors
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setErrors(array $errors = array())
    {
        foreach ($errors as $abstractResponseTypeErrorsItem) {
            // validation for constraint: itemType
            if (!$abstractResponseTypeErrorsItem instanceof \macropage\ebaysdk\trading\StructType\ErrorType) {
                throw new \InvalidArgumentException(sprintf('The Errors property can only contain items of \macropage\ebaysdk\trading\StructType\ErrorType, "%s" given', is_object($abstractResponseTypeErrorsItem) ? get_class($abstractResponseTypeErrorsItem) : gettype($abstractResponseTypeErrorsItem)), __LINE__);
            }
        }
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Add item to Errors value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ErrorType $item
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function addToErrors(\macropage\ebaysdk\trading\StructType\ErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ErrorType) {
            throw new \InvalidArgumentException(sprintf('The Errors property can only contain items of \macropage\ebaysdk\trading\StructType\ErrorType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Errors[] = $item;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get Build value
     * @return string|null
     */
    public function getBuild()
    {
        return $this->Build;
    }
    /**
     * Set Build value
     * @param string $build
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setBuild($build = null)
    {
        // validation for constraint: string
        if (!is_null($build) && !is_string($build)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($build)), __LINE__);
        }
        $this->Build = $build;
        return $this;
    }
    /**
     * Get NotificationEventName value
     * @return string|null
     */
    public function getNotificationEventName()
    {
        return $this->NotificationEventName;
    }
    /**
     * Set NotificationEventName value
     * @param string $notificationEventName
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setNotificationEventName($notificationEventName = null)
    {
        // validation for constraint: string
        if (!is_null($notificationEventName) && !is_string($notificationEventName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notificationEventName)), __LINE__);
        }
        $this->NotificationEventName = $notificationEventName;
        return $this;
    }
    /**
     * Get DuplicateInvocationDetails value
     * @return \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType|null
     */
    public function getDuplicateInvocationDetails()
    {
        return $this->DuplicateInvocationDetails;
    }
    /**
     * Set DuplicateInvocationDetails value
     * @param \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType $duplicateInvocationDetails
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setDuplicateInvocationDetails(\macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType $duplicateInvocationDetails = null)
    {
        $this->DuplicateInvocationDetails = $duplicateInvocationDetails;
        return $this;
    }
    /**
     * Get RecipientUserID value
     * @return string|null
     */
    public function getRecipientUserID()
    {
        return $this->RecipientUserID;
    }
    /**
     * Set RecipientUserID value
     * @param string $recipientUserID
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setRecipientUserID($recipientUserID = null)
    {
        // validation for constraint: string
        if (!is_null($recipientUserID) && !is_string($recipientUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientUserID)), __LINE__);
        }
        $this->RecipientUserID = $recipientUserID;
        return $this;
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken()
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setEIASToken($eIASToken = null)
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
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
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
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
     * Get BotBlock value
     * @return \macropage\ebaysdk\trading\StructType\BotBlockResponseType|null
     */
    public function getBotBlock()
    {
        return $this->BotBlock;
    }
    /**
     * Set BotBlock value
     * @param \macropage\ebaysdk\trading\StructType\BotBlockResponseType $botBlock
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setBotBlock(\macropage\ebaysdk\trading\StructType\BotBlockResponseType $botBlock = null)
    {
        $this->BotBlock = $botBlock;
        return $this;
    }
    /**
     * Get ExternalUserData value
     * @return string|null
     */
    public function getExternalUserData()
    {
        return $this->ExternalUserData;
    }
    /**
     * Set ExternalUserData value
     * @param string $externalUserData
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
     */
    public function setExternalUserData($externalUserData = null)
    {
        // validation for constraint: string
        if (!is_null($externalUserData) && !is_string($externalUserData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalUserData)), __LINE__);
        }
        $this->ExternalUserData = $externalUserData;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AbstractResponseType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\AbstractResponseType
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
