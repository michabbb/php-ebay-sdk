<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharitySellerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about one seller associated with a registered eBay for Charity nonprofit organization.
 * @subpackage Structs
 */
class CharitySellerType extends AbstractStructBase
{
    /**
     * The CharitySellerStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates the status of the seller's charity seller account.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CharitySellerStatus = null;
    /**
     * The CharityAffiliation
     * Meta information extracted from the WSDL
     * - documentation: Indicates the affiliation status for nonprofit charity organizations registered with the PayPal Giving Fund.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityAffiliationType[]
     */
    protected ?array $CharityAffiliation = null;
    /**
     * The TermsAndConditionsAccepted
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the seller has accepted the PayPal Giving Fund Terms and Conditions.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $TermsAndConditionsAccepted = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CharitySellerType
     * @uses CharitySellerType::setCharitySellerStatus()
     * @uses CharitySellerType::setCharityAffiliation()
     * @uses CharitySellerType::setTermsAndConditionsAccepted()
     * @uses CharitySellerType::setAny()
     * @param string $charitySellerStatus
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationType[] $charityAffiliation
     * @param bool $termsAndConditionsAccepted
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $charitySellerStatus = null, ?array $charityAffiliation = null, ?bool $termsAndConditionsAccepted = null, $any = null)
    {
        $this
            ->setCharitySellerStatus($charitySellerStatus)
            ->setCharityAffiliation($charityAffiliation)
            ->setTermsAndConditionsAccepted($termsAndConditionsAccepted)
            ->setAny($any);
    }
    /**
     * Get CharitySellerStatus value
     * @return string|null
     */
    public function getCharitySellerStatus(): ?string
    {
        return $this->CharitySellerStatus;
    }
    /**
     * Set CharitySellerStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\CharitySellerStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CharitySellerStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $charitySellerStatus
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
     */
    public function setCharitySellerStatus(?string $charitySellerStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CharitySellerStatusCodeType::valueIsValid($charitySellerStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CharitySellerStatusCodeType', is_array($charitySellerStatus) ? implode(', ', $charitySellerStatus) : var_export($charitySellerStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CharitySellerStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CharitySellerStatus = $charitySellerStatus;
        
        return $this;
    }
    /**
     * Get CharityAffiliation value
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationType[]
     */
    public function getCharityAffiliation(): ?array
    {
        return $this->CharityAffiliation;
    }
    /**
     * This method is responsible for validating the values passed to the setCharityAffiliation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharityAffiliation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharityAffiliationForArrayConstraintsFromSetCharityAffiliation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $charitySellerTypeCharityAffiliationItem) {
            // validation for constraint: itemType
            if (!$charitySellerTypeCharityAffiliationItem instanceof \macropage\ebaysdk\trading\StructType\CharityAffiliationType) {
                $invalidValues[] = is_object($charitySellerTypeCharityAffiliationItem) ? get_class($charitySellerTypeCharityAffiliationItem) : sprintf('%s(%s)', gettype($charitySellerTypeCharityAffiliationItem), var_export($charitySellerTypeCharityAffiliationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CharityAffiliation property can only contain items of type \macropage\ebaysdk\trading\StructType\CharityAffiliationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CharityAffiliation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationType[] $charityAffiliation
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
     */
    public function setCharityAffiliation(?array $charityAffiliation = null): self
    {
        // validation for constraint: array
        if ('' !== ($charityAffiliationArrayErrorMessage = self::validateCharityAffiliationForArrayConstraintsFromSetCharityAffiliation($charityAffiliation))) {
            throw new InvalidArgumentException($charityAffiliationArrayErrorMessage, __LINE__);
        }
        $this->CharityAffiliation = $charityAffiliation;
        
        return $this;
    }
    /**
     * Add item to CharityAffiliation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationType $item
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
     */
    public function addToCharityAffiliation(\macropage\ebaysdk\trading\StructType\CharityAffiliationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharityAffiliationType) {
            throw new InvalidArgumentException(sprintf('The CharityAffiliation property can only contain items of type \macropage\ebaysdk\trading\StructType\CharityAffiliationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CharityAffiliation[] = $item;
        
        return $this;
    }
    /**
     * Get TermsAndConditionsAccepted value
     * @return bool|null
     */
    public function getTermsAndConditionsAccepted(): ?bool
    {
        return $this->TermsAndConditionsAccepted;
    }
    /**
     * Set TermsAndConditionsAccepted value
     * @param bool $termsAndConditionsAccepted
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
     */
    public function setTermsAndConditionsAccepted(?bool $termsAndConditionsAccepted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($termsAndConditionsAccepted) && !is_bool($termsAndConditionsAccepted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($termsAndConditionsAccepted, true), gettype($termsAndConditionsAccepted)), __LINE__);
        }
        $this->TermsAndConditionsAccepted = $termsAndConditionsAccepted;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CharitySellerType
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
