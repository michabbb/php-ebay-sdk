<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base type definition of the request payload, which can carry any type of payload content plus optional versioning information and detail level requirements. All concrete request types (e.g., AddItemRequestType) are derived from the
 * abstract request type. The naming convention we use for the concrete type names is the name of the service (the verb or call name) followed by "RequestType": VerbNameRequestType
 * @subpackage Structs
 */
abstract class AbstractRequestType extends AbstractStructBase
{
    /**
     * The DetailLevel
     * Meta information extracted from the WSDL
     * - documentation: Detail levels are instructions that define standard subsets of data to return for particular data components (e.g., each Item, Transaction, or User) within the response payload. For example, a particular detail level might cause the
     * response to include buyer-related data in every result (e.g., for every Item), but no seller-related data. <br/><br/> Specifying a detail level is like using a predefined attribute list in the SELECT clause of an SQL query. Use the <b>DetailLevel</b>
     * element to specify the required detail level that the client application needs pertaining to the data components that are applicable to the request. <br><br> The <b>DetailLevelCodeType</b> defines the global list of available detail levels for all
     * request types. Most request types support certain detail levels or none at all. If you pass a detail level that exists in the schema but that isn't valid for a particular request, eBay ignores it and processes the request without it. <br/><br/> For
     * each request type, see the detail level tables in the Input/Output Reference to determine which detail levels are applicable and which elements are returned for each applicable detail level. <br><br>Note that <b>DetailLevel</b> is required input for
     * <b>GetMyMessages</b>. <br> <br> With <b>GetSellerList</b> and other calls that retrieve large data sets, please avoid using <b>ReturnAll</b> when possible. For example, if you use <b>GetSellerList</b>, use <b>GranularityLevel</b> instead, or use
     * <b>GetSellerEvents</b>. If you do use 'ReturnAll' with <b>GetSellerList</b>, use a small <b>Pagination.EntriesPerPage</b> value and a narrow <b>EndTimeFrom</b>/<b>EndTimeTo</b> date range for better performance.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $DetailLevel = [];
    /**
     * The ErrorLanguage
     * Meta information extracted from the WSDL
     * - documentation: Use <b>ErrorLanguage</b> to return error strings for the call in a different language from the language commonly associated with the site that the requesting user is registered with. Below are some examples from different countries.
     * <br><br> <table border="0"> <tr> <th>ID</th> <th>Country</th> </tr> <tr> <td>en_AU</td> <td>Australia</td> </tr> <tr> <td>de_AT</td> <td>Austria</td> </tr> <tr> <td>nl_BE</td> <td>Belgium (Dutch)</td> </tr> <tr> <td>fr_BE</td> <td>Belgium
     * (French)</td> </tr> <tr> <td>en_CA</td> <td>Canada</td> </tr> <tr> <td>fr_CA</td> <td>Canada (French)</td> </tr> <tr> <td>zh_CN</td> <td>China</td> </tr> <tr> <td>fr_FR</td> <td>France</td> </tr> <tr> <td>de_DE</td> <td>Germany</td> </tr> <tr>
     * <td>zh_HK</td> <td>Hong Kong</td> </tr> <tr> <td>en_IN</td> <td>India</td> </tr> <tr> <td>en_IE</td> <td>Ireland</td> </tr> <tr> <td>it_IT</td> <td>Italy</td> </tr> <tr> <td>nl_NL</td> <td>Netherlands</td> </tr> <tr> <td>en_SG</td> <td>Singapore</td>
     * </tr> <tr> <td>es_ES</td> <td>Spain</td> </tr> <tr> <td>de_CH</td> <td>Switzerland</td> </tr> <tr> <td>en_GB</td> <td>United Kingdom</td> </tr> <tr> <td>en_US</td> <td> United States</td> </tr> </table>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ErrorLanguage = null;
    /**
     * The MessageID
     * Meta information extracted from the WSDL
     * - documentation: Most Trading API calls support a <b>MessageID</b> element in the request and a <b>CorrelationID</b> element in the response. If you pass in a <b>MessageID</b> in a request, the same value will be returned in the <b>CorrelationID</b>
     * field in the response. Pairing these values can help you track and confirm that a response is returned for every request and to match specific responses to specific requests. If you do not pass a <b>MessageID</b> value in the request,
     * <b>CorrelationID</b> is not returned.<br> <br> <span class="tablenote"><b>Note:</b> <b>GetCategories</b> is designed to retrieve very large sets of metadata that change once a day or less often. To improve performance, these calls return cached
     * responses when you request all available data (with no filters). When this occurs, the <b>MessageID</b> and <b>CorrelationID</b> fields aren't applicable. However, if you specify an input filter to reduce the amount of data returned, the calls
     * retrieve the latest data (not cached). When this occurs, <b>MessageID</b> and <b>CorrelationID</b> are applicable. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageID = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: The version number of the API code that you are programming against (e.g., 1149). The version you specify for a call has these basic effects: <b></b> <ul> <li>It indicates the version of the code lists and other data that eBay should
     * use to process your request.</li> <li>It indicates the schema version you are using.</li> </ul> You need to use a version that is greater than or equal to the lowest supported version. <br> <b>For the SOAP API:</b> If you are using the SOAP API, this
     * field is required. Specify the version of the WSDL your application is using.<br> <br> <b>For the XML API:</b> If you are using the XML API, this field has no effect. Instead, specify the version in the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP
     * header. (If you specify <b>Version</b> in the body of an XML API request and it is different from the value in the HTTP header, eBay returns an informational warning that the value in the HTTP header was used instead.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Version = null;
    /**
     * The EndUserIP
     * Meta information extracted from the WSDL
     * - documentation: The public IP address of the machine from which the request is sent. Your application captures that IP address and includes it in a call request. eBay evaluates requests for safety (also see the <b>BotBlock</b> container in the
     * request and response of this call).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndUserIP = null;
    /**
     * The ErrorHandling
     * Meta information extracted from the WSDL
     * - documentation: Error tolerance level for the call. This is a preference that specifies how eBay should handle requests that contain invalid data or that could partially fail. This gives you some control over whether eBay returns warnings or
     * blocking errors and how eBay processes the invalid data.<br> <br> This field is only applicable to <b>AddItem</b> and related calls, and only when the listing includes <b>ProductListingDetails</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ErrorHandling = null;
    /**
     * The InvocationID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for a particular call. If the same <b>InvocationID</b> is passed in after it has been passed in once on a call that succeeded for a particular application and user, then an error will be returned. The identifier
     * can only contain digits from 0-9 and letters from A-F. The identifier must be 32 characters long. For example, 1FB02B2-9D27-3acb-ABA2-9D539C374228. | Specifies a universally unique identifier for an item. This is used to ensure that you only list a
     * particular item once, particularly if you are listing many items at once. The identifier can contain only digits from 0-9 and letters from A-F. The identifier must be 32 characters long. For example, 9CEBD9A6825644EC8D06C436D6CF494B.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InvocationID = null;
    /**
     * The OutputSelector
     * Meta information extracted from the WSDL
     * - documentation: You can use the <b>OutputSelector</b> field to restrict the data returned by a call. This field can make the call response easier to manage, especially when a large payload is returned. If you use the <b>OutputSelector</b> field, the
     * output data will only include the field(s) you specified in the request, as well as all of its child fields (if a field is a container) and its parent fields (if any). Note that it is possible that a field included through an <b>OutputSelector</b>
     * field may still not be returned if it is not applicable, or if it is not found based on other criteria set up in the request payload. <br> <br> For example, if you are using <b>GetItem</b> and you only want to retrieve the URL of the View Item page
     * (emitted in <b>ViewItemURL</b> field) and the item's Buy It Now price (emitted in <b>BuyItNowPrice</b> field), you would include two separate <b>OutputSelector</b> fields and set the value for each one as <b>ViewItemURL</b> and <b>BuyItNowPrice</b>
     * as in the following example: <br> <br> <pre> <b>If the following output selectors are used:</b> <br><br>...<br> <code>&lt;OutputSelector&gt;ViewItemURL&lt;/OutputSelector&gt;<br> &lt;OutputSelector&gt;BuyItNowPrice&lt;/OutputSelector&gt;
     * </code><br>... <br><br> <b>...the response might look like the following</b> <br><br> <code> &lt;Item&gt;<br> &lt;BuyItNowPrice currencyID="USD"&gt;0.0&lt;/BuyItNowPrice&gt;<br> &lt;ListingDetails&gt;<br>
     * &lt;ViewItemURL&gt;http://www.ebay.com/itm/Tag-Heuer-Mens-Watch/182879833261&lt;/ViewItemURL&gt;<br> &lt;/ListingDetails&gt;<br> &lt;/Item&gt; </code> </pre>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $OutputSelector = [];
    /**
     * The WarningLevel
     * Meta information extracted from the WSDL
     * - documentation: Controls whether or not to return warnings when the application passes unrecognized or deprecated elements in a request.<br> <br> An unrecognized element is one that is not defined in any supported version of the schema. Schema
     * element names are case-sensitive, so using <b>WarningLevel</b> can also help you remove any potential hidden bugs within your application due to incorrect case or spelling in field names before you put your application into the Production
     * environment.<br> <br> <b>WarningLevel</b> only validates elements; it doesn't validate XML attributes. It also doesn't control warnings related to user-entered strings or numbers, or warnings for logical errors.<br> <br> We recommend that you only
     * use this during development and debugging. Do not use this in requests performed in the Production environment.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WarningLevel = null;
    /**
     * The BotBlock
     * Meta information extracted from the WSDL
     * - documentation: This container is only used by the <b>PlaceOffer</b> call request if the previous <b>PlaceOffer</b> call resulted in a <b>BotBlock</b> container in the response. If the caller receives this container in the response, that caller must
     * make another <b>PlaceOffer</b> call, this time, passing in the encrypted token and URL that is returned in the <b>BotBlock</b> container in the response. This safeguard lets eBay know that a real user is making a <b>PlaceOffer</b> call and not a bot.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BotBlockRequestType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BotBlockRequestType $BotBlock = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for AbstractRequestType
     * @uses AbstractRequestType::setDetailLevel()
     * @uses AbstractRequestType::setErrorLanguage()
     * @uses AbstractRequestType::setMessageID()
     * @uses AbstractRequestType::setVersion()
     * @uses AbstractRequestType::setEndUserIP()
     * @uses AbstractRequestType::setErrorHandling()
     * @uses AbstractRequestType::setInvocationID()
     * @uses AbstractRequestType::setOutputSelector()
     * @uses AbstractRequestType::setWarningLevel()
     * @uses AbstractRequestType::setBotBlock()
     * @uses AbstractRequestType::setAny()
     * @param string[] $detailLevel
     * @param string $errorLanguage
     * @param string $messageID
     * @param string $version
     * @param string $endUserIP
     * @param string $errorHandling
     * @param string $invocationID
     * @param string[] $outputSelector
     * @param string $warningLevel
     * @param \macropage\ebaysdk\trading\StructType\BotBlockRequestType $botBlock
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $detailLevel = [], ?string $errorLanguage = null, ?string $messageID = null, ?string $version = null, ?string $endUserIP = null, ?string $errorHandling = null, ?string $invocationID = null, array $outputSelector = [], ?string $warningLevel = null, ?\macropage\ebaysdk\trading\StructType\BotBlockRequestType $botBlock = null, $any = null)
    {
        $this
            ->setDetailLevel($detailLevel)
            ->setErrorLanguage($errorLanguage)
            ->setMessageID($messageID)
            ->setVersion($version)
            ->setEndUserIP($endUserIP)
            ->setErrorHandling($errorHandling)
            ->setInvocationID($invocationID)
            ->setOutputSelector($outputSelector)
            ->setWarningLevel($warningLevel)
            ->setBotBlock($botBlock)
            ->setAny($any);
    }
    /**
     * Get DetailLevel value
     * @return string[]
     */
    public function getDetailLevel(): array
    {
        return $this->DetailLevel;
    }
    /**
     * This method is responsible for validating the values passed to the setDetailLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetailLevel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetailLevelForArrayConstraintsFromSetDetailLevel(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $abstractRequestTypeDetailLevelItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\DetailLevelCodeType::valueIsValid($abstractRequestTypeDetailLevelItem)) {
                $invalidValues[] = is_object($abstractRequestTypeDetailLevelItem) ? get_class($abstractRequestTypeDetailLevelItem) : sprintf('%s(%s)', gettype($abstractRequestTypeDetailLevelItem), var_export($abstractRequestTypeDetailLevelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DetailLevelCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DetailLevelCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DetailLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\DetailLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DetailLevelCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $detailLevel
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function setDetailLevel(array $detailLevel = []): self
    {
        // validation for constraint: array
        if ('' !== ($detailLevelArrayErrorMessage = self::validateDetailLevelForArrayConstraintsFromSetDetailLevel($detailLevel))) {
            throw new InvalidArgumentException($detailLevelArrayErrorMessage, __LINE__);
        }
        $this->DetailLevel = $detailLevel;
        
        return $this;
    }
    /**
     * Add item to DetailLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\DetailLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DetailLevelCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function addToDetailLevel(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DetailLevelCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DetailLevelCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DetailLevelCodeType::getValidValues())), __LINE__);
        }
        $this->DetailLevel[] = $item;
        
        return $this;
    }
    /**
     * Get ErrorLanguage value
     * @return string|null
     */
    public function getErrorLanguage(): ?string
    {
        return $this->ErrorLanguage;
    }
    /**
     * Set ErrorLanguage value
     * @param string $errorLanguage
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function setErrorLanguage(?string $errorLanguage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorLanguage) && !is_string($errorLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorLanguage, true), gettype($errorLanguage)), __LINE__);
        }
        $this->ErrorLanguage = $errorLanguage;
        
        return $this;
    }
    /**
     * Get MessageID value
     * @return string|null
     */
    public function getMessageID(): ?string
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param string $messageID
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function setMessageID(?string $messageID = null): self
    {
        // validation for constraint: string
        if (!is_null($messageID) && !is_string($messageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageID, true), gettype($messageID)), __LINE__);
        }
        $this->MessageID = $messageID;
        
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get EndUserIP value
     * @return string|null
     */
    public function getEndUserIP(): ?string
    {
        return $this->EndUserIP;
    }
    /**
     * Set EndUserIP value
     * @param string $endUserIP
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function setEndUserIP(?string $endUserIP = null): self
    {
        // validation for constraint: string
        if (!is_null($endUserIP) && !is_string($endUserIP)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endUserIP, true), gettype($endUserIP)), __LINE__);
        }
        $this->EndUserIP = $endUserIP;
        
        return $this;
    }
    /**
     * Get ErrorHandling value
     * @return string|null
     */
    public function getErrorHandling(): ?string
    {
        return $this->ErrorHandling;
    }
    /**
     * Set ErrorHandling value
     * @uses \macropage\ebaysdk\trading\EnumType\ErrorHandlingCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ErrorHandlingCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $errorHandling
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function setErrorHandling(?string $errorHandling = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ErrorHandlingCodeType::valueIsValid($errorHandling)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ErrorHandlingCodeType', is_array($errorHandling) ? implode(', ', $errorHandling) : var_export($errorHandling, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ErrorHandlingCodeType::getValidValues())), __LINE__);
        }
        $this->ErrorHandling = $errorHandling;
        
        return $this;
    }
    /**
     * Get InvocationID value
     * @return string|null
     */
    public function getInvocationID(): ?string
    {
        return $this->InvocationID;
    }
    /**
     * Set InvocationID value
     * @param string $invocationID
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function setInvocationID(?string $invocationID = null): self
    {
        // validation for constraint: string
        if (!is_null($invocationID) && !is_string($invocationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invocationID, true), gettype($invocationID)), __LINE__);
        }
        $this->InvocationID = $invocationID;
        
        return $this;
    }
    /**
     * Get OutputSelector value
     * @return string[]
     */
    public function getOutputSelector(): array
    {
        return $this->OutputSelector;
    }
    /**
     * This method is responsible for validating the values passed to the setOutputSelector method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOutputSelector method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOutputSelectorForArrayConstraintsFromSetOutputSelector(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $abstractRequestTypeOutputSelectorItem) {
            // validation for constraint: itemType
            if (!is_string($abstractRequestTypeOutputSelectorItem)) {
                $invalidValues[] = is_object($abstractRequestTypeOutputSelectorItem) ? get_class($abstractRequestTypeOutputSelectorItem) : sprintf('%s(%s)', gettype($abstractRequestTypeOutputSelectorItem), var_export($abstractRequestTypeOutputSelectorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OutputSelector property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OutputSelector value
     * @throws InvalidArgumentException
     * @param string[] $outputSelector
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function setOutputSelector(array $outputSelector = []): self
    {
        // validation for constraint: array
        if ('' !== ($outputSelectorArrayErrorMessage = self::validateOutputSelectorForArrayConstraintsFromSetOutputSelector($outputSelector))) {
            throw new InvalidArgumentException($outputSelectorArrayErrorMessage, __LINE__);
        }
        $this->OutputSelector = $outputSelector;
        
        return $this;
    }
    /**
     * Add item to OutputSelector value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function addToOutputSelector(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OutputSelector property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OutputSelector[] = $item;
        
        return $this;
    }
    /**
     * Get WarningLevel value
     * @return string|null
     */
    public function getWarningLevel(): ?string
    {
        return $this->WarningLevel;
    }
    /**
     * Set WarningLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\WarningLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\WarningLevelCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $warningLevel
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function setWarningLevel(?string $warningLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\WarningLevelCodeType::valueIsValid($warningLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\WarningLevelCodeType', is_array($warningLevel) ? implode(', ', $warningLevel) : var_export($warningLevel, true), implode(', ', \macropage\ebaysdk\trading\EnumType\WarningLevelCodeType::getValidValues())), __LINE__);
        }
        $this->WarningLevel = $warningLevel;
        
        return $this;
    }
    /**
     * Get BotBlock value
     * @return \macropage\ebaysdk\trading\StructType\BotBlockRequestType|null
     */
    public function getBotBlock(): ?\macropage\ebaysdk\trading\StructType\BotBlockRequestType
    {
        return $this->BotBlock;
    }
    /**
     * Set BotBlock value
     * @param \macropage\ebaysdk\trading\StructType\BotBlockRequestType $botBlock
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
     */
    public function setBotBlock(?\macropage\ebaysdk\trading\StructType\BotBlockRequestType $botBlock = null): self
    {
        $this->BotBlock = $botBlock;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AbstractRequestType
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
