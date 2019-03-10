<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessSellerDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>BusinessSellerDetails</b> container, which is returned in an <b>Item</b> node if the item's seller is registered on eBay as a Business Seller.
 * @subpackage Structs
 */
class BusinessSellerDetailsType extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the address on file for the Business Seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $Address;
    /**
     * The Fax
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the Fax number on file for the Business Seller. This field is only returned if known and available.
     * - minOccurs: 0
     * @var string
     */
    public $Fax;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the email address on file for the Business Seller.
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The AdditionalContactInformation
     * Meta informations extracted from the WSDL
     * - documentation: This field shows any additional contact for the Business Seller in free-form text. This field is only returned if known and available.
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalContactInformation;
    /**
     * The TradeRegistrationNumber
     * Meta informations extracted from the WSDL
     * - documentation: This field shows the Trade Registration Number for the Business Seller.
     * - minOccurs: 0
     * @var string
     */
    public $TradeRegistrationNumber;
    /**
     * The LegalInvoice
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is returned as <code>true</code> if the Business Seller provides legal invoices to buyers.
     * - minOccurs: 0
     * @var bool
     */
    public $LegalInvoice;
    /**
     * The TermsAndConditions
     * Meta informations extracted from the WSDL
     * - documentation: This free-form text field provides the Business Seller's terms and conditions for doing business.
     * - minOccurs: 0
     * @var string
     */
    public $TermsAndConditions;
    /**
     * The VATDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container provides Value-Added Tax (VAT) details for the Business Seller, including the seller's VAT ID and the VAT percentage rate applicable to the item. VAT is similar to a sales and/or consumption tax, and it is only
     * applicable to sellers selling on European sites.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VATDetailsType
     */
    public $VATDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AddressType $address = null, $fax = null, $email = null, $additionalContactInformation = null, $tradeRegistrationNumber = null, $legalInvoice = null, $termsAndConditions = null, \macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails = null, \DOMDocument $any = null)
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
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $address
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setAddress(\macropage\ebaysdk\trading\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Fax value
     * @return string|null
     */
    public function getFax()
    {
        return $this->Fax;
    }
    /**
     * Set Fax value
     * @param string $fax
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax)), __LINE__);
        }
        $this->Fax = $fax;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get AdditionalContactInformation value
     * @return string|null
     */
    public function getAdditionalContactInformation()
    {
        return $this->AdditionalContactInformation;
    }
    /**
     * Set AdditionalContactInformation value
     * @param string $additionalContactInformation
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setAdditionalContactInformation($additionalContactInformation = null)
    {
        // validation for constraint: string
        if (!is_null($additionalContactInformation) && !is_string($additionalContactInformation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalContactInformation)), __LINE__);
        }
        $this->AdditionalContactInformation = $additionalContactInformation;
        return $this;
    }
    /**
     * Get TradeRegistrationNumber value
     * @return string|null
     */
    public function getTradeRegistrationNumber()
    {
        return $this->TradeRegistrationNumber;
    }
    /**
     * Set TradeRegistrationNumber value
     * @param string $tradeRegistrationNumber
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setTradeRegistrationNumber($tradeRegistrationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($tradeRegistrationNumber) && !is_string($tradeRegistrationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tradeRegistrationNumber)), __LINE__);
        }
        $this->TradeRegistrationNumber = $tradeRegistrationNumber;
        return $this;
    }
    /**
     * Get LegalInvoice value
     * @return bool|null
     */
    public function getLegalInvoice()
    {
        return $this->LegalInvoice;
    }
    /**
     * Set LegalInvoice value
     * @param bool $legalInvoice
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setLegalInvoice($legalInvoice = null)
    {
        // validation for constraint: boolean
        if (!is_null($legalInvoice) && !is_bool($legalInvoice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($legalInvoice)), __LINE__);
        }
        $this->LegalInvoice = $legalInvoice;
        return $this;
    }
    /**
     * Get TermsAndConditions value
     * @return string|null
     */
    public function getTermsAndConditions()
    {
        return $this->TermsAndConditions;
    }
    /**
     * Set TermsAndConditions value
     * @param string $termsAndConditions
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setTermsAndConditions($termsAndConditions = null)
    {
        // validation for constraint: string
        if (!is_null($termsAndConditions) && !is_string($termsAndConditions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($termsAndConditions)), __LINE__);
        }
        $this->TermsAndConditions = $termsAndConditions;
        return $this;
    }
    /**
     * Get VATDetails value
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType|null
     */
    public function getVATDetails()
    {
        return $this->VATDetails;
    }
    /**
     * Set VATDetails value
     * @param \macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
     */
    public function setVATDetails(\macropage\ebaysdk\trading\StructType\VATDetailsType $vATDetails = null)
    {
        $this->VATDetails = $vATDetails;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\BusinessSellerDetailsType
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
