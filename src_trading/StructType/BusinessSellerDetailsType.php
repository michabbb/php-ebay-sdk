<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessSellerDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>BusinessSellerDetails</b> container, which is returned in an <b>Item</b> node if the item's seller is registered on eBay as a Business Seller.
 * @subpackage Structs
 */
class BusinessSellerDetailsType extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - documentation: This field shows the address on file for the Business Seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $Address = null;
    /**
     * The Fax
     * Meta information extracted from the WSDL
     * - documentation: This field shows the Fax number on file for the Business Seller. This field is only returned if known and available.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Fax = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - documentation: This field shows the email address on file for the Business Seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The AdditionalContactInformation
     * Meta information extracted from the WSDL
     * - documentation: This field shows any additional contact for the Business Seller in free-form text. This field is only returned if known and available.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AdditionalContactInformation = null;
    /**
     * The TradeRegistrationNumber
     * Meta information extracted from the WSDL
     * - documentation: This field shows the Trade Registration Number for the Business Seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TradeRegistrationNumber = null;
    /**
     * The LegalInvoice
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the Business Seller provides legal invoices to buyers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LegalInvoice = null;
    /**
     * The TermsAndConditions
     * Meta information extracted from the WSDL
     * - documentation: This free-form text field provides the Business Seller's terms and conditions for doing business.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TermsAndConditions = null;
    /**
     * The VATDetails
     * Meta information extracted from the WSDL
     * - documentation: This container provides Value-Added Tax (VAT) details for the Business Seller, including the seller's VAT ID and the VAT percentage rate applicable to the item. VAT is similar to a sales and/or consumption tax, and it is only
     * applicable to sellers selling on European sites.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VATDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\VATDetailsType $VATDetails = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BusinessSellerDetailsType
     * @uses BusinessSellerDetailsType::setAddress()
     * @uses BusinessSellerDetailsType::setFax()
     * @uses BusinessSellerDetailsType::setEmail()
     * @uses BusinessSellerDetailsType::setAdditionalContactInformation()
     * @uses BusinessSellerDetailsType::setTradeRegistrationNumber()
     * @uses BusinessSellerDetailsType::setLegalInvoice()
     * @uses BusinessSellerDetailsType::setTermsAndConditions()
     * @uses BusinessSellerDetailsType::setVATDetails()
     * @uses BusinessSellerDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AddressType $address
     * @param string $fax
     * @param string $email
     * @param string $additionalContactInformation
     * @param string $tradeRegistrationNumber
     * @param bool $legalInvoice
     * @param string $termsAndConditions
     * @param \macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AddressType $address = null, ?string $fax = null, ?string $email = null, ?string $additionalContactInformation = null, ?string $tradeRegistrationNumber = null, ?bool $legalInvoice = null, ?string $termsAndConditions = null, ?\macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails = null, $any = null)
    {
        $this
            ->setAddress($address)
            ->setFax($fax)
            ->setEmail($email)
            ->setAdditionalContactInformation($additionalContactInformation)
            ->setTradeRegistrationNumber($tradeRegistrationNumber)
            ->setLegalInvoice($legalInvoice)
            ->setTermsAndConditions($termsAndConditions)
            ->setVATDetails($vATDetails)
            ->setAny($any);
    }
    /**
     * Get Address value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $address
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setAddress(?\macropage\ebaysdk\trading\StructType\AddressType $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get Fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->Fax;
    }
    /**
     * Set Fax value
     * @param string $fax
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->Fax = $fax;
        
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get AdditionalContactInformation value
     * @return string|null
     */
    public function getAdditionalContactInformation(): ?string
    {
        return $this->AdditionalContactInformation;
    }
    /**
     * Set AdditionalContactInformation value
     * @param string $additionalContactInformation
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setAdditionalContactInformation(?string $additionalContactInformation = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalContactInformation) && !is_string($additionalContactInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalContactInformation, true), gettype($additionalContactInformation)), __LINE__);
        }
        $this->AdditionalContactInformation = $additionalContactInformation;
        
        return $this;
    }
    /**
     * Get TradeRegistrationNumber value
     * @return string|null
     */
    public function getTradeRegistrationNumber(): ?string
    {
        return $this->TradeRegistrationNumber;
    }
    /**
     * Set TradeRegistrationNumber value
     * @param string $tradeRegistrationNumber
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setTradeRegistrationNumber(?string $tradeRegistrationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($tradeRegistrationNumber) && !is_string($tradeRegistrationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradeRegistrationNumber, true), gettype($tradeRegistrationNumber)), __LINE__);
        }
        $this->TradeRegistrationNumber = $tradeRegistrationNumber;
        
        return $this;
    }
    /**
     * Get LegalInvoice value
     * @return bool|null
     */
    public function getLegalInvoice(): ?bool
    {
        return $this->LegalInvoice;
    }
    /**
     * Set LegalInvoice value
     * @param bool $legalInvoice
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setLegalInvoice(?bool $legalInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($legalInvoice) && !is_bool($legalInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($legalInvoice, true), gettype($legalInvoice)), __LINE__);
        }
        $this->LegalInvoice = $legalInvoice;
        
        return $this;
    }
    /**
     * Get TermsAndConditions value
     * @return string|null
     */
    public function getTermsAndConditions(): ?string
    {
        return $this->TermsAndConditions;
    }
    /**
     * Set TermsAndConditions value
     * @param string $termsAndConditions
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setTermsAndConditions(?string $termsAndConditions = null): self
    {
        // validation for constraint: string
        if (!is_null($termsAndConditions) && !is_string($termsAndConditions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termsAndConditions, true), gettype($termsAndConditions)), __LINE__);
        }
        $this->TermsAndConditions = $termsAndConditions;
        
        return $this;
    }
    /**
     * Get VATDetails value
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType|null
     */
    public function getVATDetails(): ?\macropage\ebaysdk\trading\StructType\VATDetailsType
    {
        return $this->VATDetails;
    }
    /**
     * Set VATDetails value
     * @param \macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setVATDetails(?\macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails = null): self
    {
        $this->VATDetails = $vATDetails;
        
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
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
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
