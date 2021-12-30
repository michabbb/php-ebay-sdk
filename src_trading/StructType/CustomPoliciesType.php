<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomPoliciesType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note:</b> Support for extended producer responsibility regulations and custom policies will become active mid-December 2021. Additional resources such as the custom policies resource (for the <b>Account
 * API</b>), the <b>getExtendedProducerResponsibilityPolicies</b> method (for the <b>Sell Metadata API</b>), and the <a href="https://www.ebay.com/help/selling/custom-policies/custom-policies?id=5311" target="_blank">Custom Policies</a> help page will
 * also become active.</span> This type is used by the <strong>CustomPolicies</strong> container, which specifies custom policy IDs. A custom policy ID refers to the relevant policy created for compliance and other purposes.
 * @subpackage Structs
 */
class CustomPoliciesType extends AbstractStructBase
{
    /**
     * The TakeBackPolicyID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to apply a take-back policy to the listing. The seller will specify the identifier of the take-back policy in this field. The law in some countries may require sellers to take back a used
     * product when the buyer buys a new product. Use this field to specify one take-back policy ID for the listing. To create and manage your takeback policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account
     * API</a>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TakeBackPolicyID = null;
    /**
     * The ProductCompliancePolicyID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to apply one or more product compliance policies to the listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the
     * identifier of each policy in this field. To create and manage custom policies, see the <a href="../../../../../../api-docs/sell/account/overview.html" target="_blank">Account API</a>.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $ProductCompliancePolicyID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CustomPoliciesType
     * @uses CustomPoliciesType::setTakeBackPolicyID()
     * @uses CustomPoliciesType::setProductCompliancePolicyID()
     * @uses CustomPoliciesType::setAny()
     * @param int $takeBackPolicyID
     * @param int[] $productCompliancePolicyID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $takeBackPolicyID = null, ?array $productCompliancePolicyID = null, $any = null)
    {
        $this
            ->setTakeBackPolicyID($takeBackPolicyID)
            ->setProductCompliancePolicyID($productCompliancePolicyID)
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
