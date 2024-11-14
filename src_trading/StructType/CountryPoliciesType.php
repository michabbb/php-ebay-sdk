<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryPoliciesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type specifies custom product compliance and/or take-back policies that apply to a specified country.
 * @subpackage Structs
 */
class CountryPoliciesType extends AbstractStructBase
{
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: Defines the 2-letter country code set. <br><br> Use the <a href ="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GeteBayDetails.html">GeteBayDetails</a> call to see the list of currently supported codes, and the English
     * names associated with each code (e.g., KY="Cayman Islands"). <br><br> Most of the codes that eBay uses conform to the ISO 3166 standard, but some of the codes in the ISO 3166 standard are not used by eBay. Plus, there are some non-ISO codes in the
     * eBay list. (Additional codes appear at the end of this code list and are noted as non-ISO.) <br><br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The PolicyID
     * Meta information extracted from the WSDL
     * - documentation: The policy Id specifying product compliance or take-back policy information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $PolicyID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CountryPoliciesType
     * @uses CountryPoliciesType::setCountry()
     * @uses CountryPoliciesType::setPolicyID()
     * @uses CountryPoliciesType::setAny()
     * @param string $country
     * @param int[] $policyID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $country = null, ?array $policyID = null, $any = null)
    {
        $this
            ->setCountry($country)
            ->setPolicyID($policyID)
            ->setAny($any);
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $country
     * @return \macropage\ebaysdk\trading\StructType\CountryPoliciesType
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CountryCodeType', is_array($country) ? implode(', ', $country) : var_export($country, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Country = $country;
        
        return $this;
    }
    /**
     * Get PolicyID value
     * @return int[]
     */
    public function getPolicyID(): ?array
    {
        return $this->PolicyID;
    }
    /**
     * This method is responsible for validating the values passed to the setPolicyID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolicyID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolicyIDForArrayConstraintsFromSetPolicyID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $countryPoliciesTypePolicyIDItem) {
            // validation for constraint: itemType
            if (!(is_int($countryPoliciesTypePolicyIDItem) || ctype_digit($countryPoliciesTypePolicyIDItem))) {
                $invalidValues[] = is_object($countryPoliciesTypePolicyIDItem) ? get_class($countryPoliciesTypePolicyIDItem) : sprintf('%s(%s)', gettype($countryPoliciesTypePolicyIDItem), var_export($countryPoliciesTypePolicyIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PolicyID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PolicyID value
     * @throws InvalidArgumentException
     * @param int[] $policyID
     * @return \macropage\ebaysdk\trading\StructType\CountryPoliciesType
     */
    public function setPolicyID(?array $policyID = null): self
    {
        // validation for constraint: array
        if ('' !== ($policyIDArrayErrorMessage = self::validatePolicyIDForArrayConstraintsFromSetPolicyID($policyID))) {
            throw new InvalidArgumentException($policyIDArrayErrorMessage, __LINE__);
        }
        $this->PolicyID = $policyID;
        
        return $this;
    }
    /**
     * Add item to PolicyID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\CountryPoliciesType
     */
    public function addToPolicyID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The PolicyID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PolicyID[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CountryPoliciesType
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
