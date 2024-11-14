<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomPoliciesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <strong>CustomPolicies</strong> container, which specifies custom policy IDs. A custom policy ID refers to the relevant policy created for product compliance and other purposes. For more information, see the
 * <b>Custom Policies</b> page for your site (for example, <a href="https://www.ebay.fr/help/selling/custom-policies/custom-policies?id=5311" target="_blank">https://www.ebay.fr/help/selling/custom-policies/custom-policies?id=5311</a>). To create and
 * manage custom policies, use the <a href="https://developer.ebay.com/api-docs/sell/account/resources/methods#h2-custom_policy" target="_blank">custom_policy</a> resource of the <b>Account API</b>.
 * @subpackage Structs
 */
class CustomPoliciesType extends AbstractStructBase
{
    /**
     * The TakeBackPolicyID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to apply a <i>global</i> take-back policy to the listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />Use this field
     * to specify one <i>global</i> take-back policy ID for the listing. <span class="tablenote"><strong>Note: </strong> For countries that support country-specific policies, use <b>RegionalTakeBackPolicies</b> to apply them to a listing. </span>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TakeBackPolicyID = null;
    /**
     * The RegionalTakeBackPolicies
     * Meta information extracted from the WSDL
     * - documentation: The list of unique identifiers indicating the seller-created country-specific take-back policies that will be used for a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new
     * product.<br /><br /> Each listing may include one (1) country-specific take-back policy for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul>
     * <span class="tablenote"><strong>Note: </strong> Take-back policies that apply to <i>all</i> countries to which a seller ships are specified using <b>TakeBackPolicyID</b>. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType $RegionalTakeBackPolicies = null;
    /**
     * The ProductCompliancePolicyID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to apply one or more seller-created <i>global</i> product compliance policies that will be used in a listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be
     * applied, and the seller specifies the identifier of each policy in this field.<br /> Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are
     * required to be shared with all potential buyers, your global product compliance policy could contain the required disclosures.<br /><br />A maximum of six (6) global product compliance policies may be applied to each listing. <span
     * class="tablenote"><strong>Note: </strong> For countries that support country-specific policies, use <b>RegionalProductCompliancePolicies</b> to apply them to a listing. </span>
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $ProductCompliancePolicyID = null;
    /**
     * The RegionalProductCompliancePolicies
     * Meta information extracted from the WSDL
     * - documentation: The set of compliance policies for indicating the seller-created country-specific product compliance policies that that will be used for a listing.<br /><br /> Product compliance policies provide buyers with important information and
     * disclosures about products. For example, if you sell batteries in a country requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br /><br /> Each listing may
     * include up to six (6) product compliance policies for <i>each</i> of the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul> For example, if a seller offers products
     * in the UK, Germany, and Italy, each of which requires custom product compliance information, up to 18 policies (in other words, 6 policies x 3 countries) may be included for each listing. <span class="tablenote"><strong>Note: </strong> Product
     * compliance policies that apply to <i>all</i> countries to which a seller ships are specified using <b>ProductCompliancePolicyID</b>. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType $RegionalProductCompliancePolicies = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CustomPoliciesType
     * @uses CustomPoliciesType::setTakeBackPolicyID()
     * @uses CustomPoliciesType::setRegionalTakeBackPolicies()
     * @uses CustomPoliciesType::setProductCompliancePolicyID()
     * @uses CustomPoliciesType::setRegionalProductCompliancePolicies()
     * @uses CustomPoliciesType::setAny()
     * @param int $takeBackPolicyID
     * @param \macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType $regionalTakeBackPolicies
     * @param int[] $productCompliancePolicyID
     * @param \macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType $regionalProductCompliancePolicies
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $takeBackPolicyID = null, ?\macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType $regionalTakeBackPolicies = null, ?array $productCompliancePolicyID = null, ?\macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType $regionalProductCompliancePolicies = null, $any = null)
    {
        $this
            ->setTakeBackPolicyID($takeBackPolicyID)
            ->setRegionalTakeBackPolicies($regionalTakeBackPolicies)
            ->setProductCompliancePolicyID($productCompliancePolicyID)
            ->setRegionalProductCompliancePolicies($regionalProductCompliancePolicies)
            ->setAny($any);
    }
    /**
     * Get TakeBackPolicyID value
     * @return int|null
     */
    public function getTakeBackPolicyID(): ?int
    {
        return $this->TakeBackPolicyID;
    }
    /**
     * Set TakeBackPolicyID value
     * @param int $takeBackPolicyID
     * @return \macropage\ebaysdk\trading\StructType\CustomPoliciesType
     */
    public function setTakeBackPolicyID(?int $takeBackPolicyID = null): self
    {
        // validation for constraint: int
        if (!is_null($takeBackPolicyID) && !(is_int($takeBackPolicyID) || ctype_digit($takeBackPolicyID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($takeBackPolicyID, true), gettype($takeBackPolicyID)), __LINE__);
        }
        $this->TakeBackPolicyID = $takeBackPolicyID;
        
        return $this;
    }
    /**
     * Get RegionalTakeBackPolicies value
     * @return \macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType|null
     */
    public function getRegionalTakeBackPolicies(): ?\macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType
    {
        return $this->RegionalTakeBackPolicies;
    }
    /**
     * Set RegionalTakeBackPolicies value
     * @param \macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType $regionalTakeBackPolicies
     * @return \macropage\ebaysdk\trading\StructType\CustomPoliciesType
     */
    public function setRegionalTakeBackPolicies(?\macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType $regionalTakeBackPolicies = null): self
    {
        $this->RegionalTakeBackPolicies = $regionalTakeBackPolicies;
        
        return $this;
    }
    /**
     * Get ProductCompliancePolicyID value
     * @return int[]
     */
    public function getProductCompliancePolicyID(): ?array
    {
        return $this->ProductCompliancePolicyID;
    }
    /**
     * This method is responsible for validating the values passed to the setProductCompliancePolicyID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductCompliancePolicyID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductCompliancePolicyIDForArrayConstraintsFromSetProductCompliancePolicyID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customPoliciesTypeProductCompliancePolicyIDItem) {
            // validation for constraint: itemType
            if (!(is_int($customPoliciesTypeProductCompliancePolicyIDItem) || ctype_digit($customPoliciesTypeProductCompliancePolicyIDItem))) {
                $invalidValues[] = is_object($customPoliciesTypeProductCompliancePolicyIDItem) ? get_class($customPoliciesTypeProductCompliancePolicyIDItem) : sprintf('%s(%s)', gettype($customPoliciesTypeProductCompliancePolicyIDItem), var_export($customPoliciesTypeProductCompliancePolicyIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductCompliancePolicyID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductCompliancePolicyID value
     * @throws InvalidArgumentException
     * @param int[] $productCompliancePolicyID
     * @return \macropage\ebaysdk\trading\StructType\CustomPoliciesType
     */
    public function setProductCompliancePolicyID(?array $productCompliancePolicyID = null): self
    {
        // validation for constraint: array
        if ('' !== ($productCompliancePolicyIDArrayErrorMessage = self::validateProductCompliancePolicyIDForArrayConstraintsFromSetProductCompliancePolicyID($productCompliancePolicyID))) {
            throw new InvalidArgumentException($productCompliancePolicyIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($productCompliancePolicyID) && count($productCompliancePolicyID) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($productCompliancePolicyID)), __LINE__);
        }
        $this->ProductCompliancePolicyID = $productCompliancePolicyID;
        
        return $this;
    }
    /**
     * Add item to ProductCompliancePolicyID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\CustomPoliciesType
     */
    public function addToProductCompliancePolicyID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The ProductCompliancePolicyID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->ProductCompliancePolicyID) && count($this->ProductCompliancePolicyID) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->ProductCompliancePolicyID)), __LINE__);
        }
        $this->ProductCompliancePolicyID[] = $item;
        
        return $this;
    }
    /**
     * Get RegionalProductCompliancePolicies value
     * @return \macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType|null
     */
    public function getRegionalProductCompliancePolicies(): ?\macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType
    {
        return $this->RegionalProductCompliancePolicies;
    }
    /**
     * Set RegionalProductCompliancePolicies value
     * @param \macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType $regionalProductCompliancePolicies
     * @return \macropage\ebaysdk\trading\StructType\CustomPoliciesType
     */
    public function setRegionalProductCompliancePolicies(?\macropage\ebaysdk\trading\ArrayType\CountryPoliciesArrayType $regionalProductCompliancePolicies = null): self
    {
        $this->RegionalProductCompliancePolicies = $regionalProductCompliancePolicies;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\CustomPoliciesType
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
