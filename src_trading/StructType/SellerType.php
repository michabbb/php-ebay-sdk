<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about a user returned in the context of an item's seller.
 * @subpackage Structs
 */
class SellerType extends AbstractStructBase
{
    /**
     * The PaisaPayStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the seller's PaisaPay and PaisapayEscrow registration status. India site only.<br> 0 - Seller not registered<br> 1 - Seller registered<br> 2 - Seller registered but registration suspended<br> 3 - Seller registered but
     * outbound payment suspended<br>
     * - minOccurs: 0
     * @var int
     */
    public $PaisaPayStatus;
    /**
     * The AllowPaymentEdit
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the user as a seller by default allows buyers to edit the total cost of an item (while in checkout). (Sellers enable this property in their My eBay user preferences on the eBay site.)
     * @var bool
     */
    public $AllowPaymentEdit;
    /**
     * The BillingCurrency
     * Meta informations extracted from the WSDL
     * - documentation: Currency type in which the user is billed seller fees.
     * - minOccurs: 0
     * @var string
     */
    public $BillingCurrency;
    /**
     * The CheckoutEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This flag indicates whether or not the seller's Checkout Enabled preference is turned on (at account level or at listing level). This preference is managed through Payment Preferences in My eBay. If this preference is enabled, a Pay
     * Now button will appear in checkout flow pages and in the email notifications that are sent to buyers. This preferance is enabled by default if PayPal is one of the payment methods.
     * @var bool
     */
    public $CheckoutEnabled;
    /**
     * The CIPBankAccountStored
     * Meta informations extracted from the WSDL
     * - documentation: If true, this flag indicates that the seller has stored bank account information on file with eBay. A seller must have stored bank account information on file with eBay in order to use 'CashOnPickup' as a payment method (known as
     * 'Pay upon Pickup' on the site). This field is applicable to all eBay sites that support 'CashOnPickup' as a payment method.
     * @var bool
     */
    public $CIPBankAccountStored;
    /**
     * The GoodStanding
     * Meta informations extracted from the WSDL
     * - documentation: If true, indicates that the user is in good standing with eBay. (One of the requirements for listing a new item with Immediate Payment.)
     * @var bool
     */
    public $GoodStanding;
    /**
     * The MerchandizingPref
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $MerchandizingPref;
    /**
     * The QualifiesForB2BVAT
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the user is subject to VAT. Users who have registered with eBay as VAT-exempt are not subject to VAT.
     * @var bool
     */
    public $QualifiesForB2BVAT;
    /**
     * The SellerGuaranteeLevel
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerGuaranteeLevel;
    /**
     * The SellerLevel
     * Meta informations extracted from the WSDL
     * - documentation: The user's eBay PowerSeller tier. Possible values are enumerated in the SellerLevelCodeType code list. SellerInfo.SellerLevel is no longer returned in the GetUser, GetBidderList, GetSellerList, GetItem, and GetItemTransactions
     * responses for the US, DE/AT/CH, and UK/IE sites, for version 629 and later. If you are using a version older than 629, SellerInfo.SellerLevel will still be returned. Developers should note that SellerInfo.SellerLevel could potentially be removed from
     * other sites as well.
     * - minOccurs: 0
     * @var string
     */
    public $SellerLevel;
    /**
     * The SellerPaymentAddress
     * Meta informations extracted from the WSDL
     * - documentation: Address used by eBay for purposes of billing the user for seller fees.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $SellerPaymentAddress;
    /**
     * The SchedulingInfo
     * Meta informations extracted from the WSDL
     * - documentation: Container for scheduling limits for the user. Conveys the minimum and maximum minutes the user may schedule listings in advance, as well as the maximum number of items the user may schedule.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SchedulingInfoType
     */
    public $SchedulingInfo;
    /**
     * The StoreOwner
     * Meta informations extracted from the WSDL
     * - documentation: Boolean value indicates whether or not the seller is an eBay Store owner.
     * @var bool
     */
    public $StoreOwner;
    /**
     * The StoreURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL for the seller's eBay Store. This field is only returned if the seller is a store owner. To determine if a seller is a Store owner, check for the <b>User.SellerInfo.StoreOwner</b> and a value of true. The eBay Stores domain
     * that is returned in this field is based on the <b>SITEID</b> header that is passed in the request, and not on the user's registration address, as was the case prior to version 757. So, if the seller's registration county is the UK, but a
     * <b>SITEID</b> value of 71 (France) is passed into the call, the eBay Stores domain that is returned would be stores.ebay.fr.
     * - minOccurs: 0
     * @var string
     */
    public $StoreURL;
    /**
     * The SellerBusinessType
     * Meta informations extracted from the WSDL
     * - documentation: Type of seller account. This value is returned if the German (ID 77), UK (ID 3), Ireland (ID 205), or US eBay Motors (ID 0) sites are specified.
     * - minOccurs: 0
     * @var string
     */
    public $SellerBusinessType;
    /**
     * The RegisteredBusinessSeller
     * Meta informations extracted from the WSDL
     * - documentation: If true, the user is registered as a vehicle dealer on the eBay Motors site.
     * - minOccurs: 0
     * @var bool
     */
    public $RegisteredBusinessSeller;
    /**
     * The StoreSite
     * Meta informations extracted from the WSDL
     * - documentation: The site associated with the seller's eBay Store.
     * - minOccurs: 0
     * @var string
     */
    public $StoreSite;
    /**
     * The PaymentMethod
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the method the seller selected to pay eBay with for the account. The payment methods vary from one eBay site to the next.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethod;
    /**
     * The ProStoresPreference
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType
     */
    public $ProStoresPreference;
    /**
     * The CharityRegistered
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not the seller is a registered charity seller. If <b>CharityRegistered</b> is <code>false</code>, the user must register their nonprofit organization with the PayPal Giving Fund to list eBay for Charity items.
     * - minOccurs: 0
     * @var bool
     */
    public $CharityRegistered;
    /**
     * The SafePaymentExempt
     * Meta informations extracted from the WSDL
     * - documentation: If this field is <code>true</code>, the user is currently exempt from the requirement to offer at least one safe payment method (PayPal/PaisaPay or one of the credit cards specified in <b>Item.PaymentMethods</b>) when listing items.
     * This value should only return <code>true</code> for sellers who registered before January 17, 2007. Otherwise, it should return <code>false</code>. This setting overrides both the site and category values for <b>SafePaymentRequired</b>.
     * - minOccurs: 0
     * @var bool
     */
    public $SafePaymentExempt;
    /**
     * The PaisaPayEscrowEMIStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the seller's PaisaPayEscrowEMI (Equal Monthly Installment) registration status. India site only.<br> 0 - Seller not registered<br> 1 - Seller registered<br> 7 - Seller eligible<br>
     * - minOccurs: 0
     * @var int
     */
    public $PaisaPayEscrowEMIStatus;
    /**
     * The CharityAffiliationDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of one or more of nonprofit organizations associated with the seller's account. This container will not be returned if the user is not affiliated with any nonprofit organizations. A seller must be registered
     * with the PayPal Giving Fund to be affiliated with an eBay for Charity nonprofit organization.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType
     */
    public $CharityAffiliationDetails;
    /**
     * The TransactionPercent
     * Meta informations extracted from the WSDL
     * - documentation: Percentage of the number of times a member has sold successfully vs. the number of times a member has bought an item in the preceding 365 days.
     * - minOccurs: 0
     * @var float
     */
    public $TransactionPercent;
    /**
     * The IntegratedMerchantCreditCardInfo
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the sites on which a seller has a payment gateway account (and thus the sites on which the seller can use the IntegratedMerchantCreditCard payment method). Sellers use a payment gateway account to accept online credit
     * cards.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType
     */
    public $IntegratedMerchantCreditCardInfo;
    /**
     * The FeatureEligibility
     * Meta informations extracted from the WSDL
     * - documentation: Contains eligibility details about seller- or platform-based features. This is returned only if IncludeFeatureEligibility is set to true in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public $FeatureEligibility;
    /**
     * The TopRatedSeller
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field indicates if the seller is certified as a <em>Top Rated Seller</em>. Only Top Rated Sellers can qualify for Top Rated Plus listings, which receive the Top Rated Plus seal, and will help those listings stand out.
     * Top Rated Plus listings also receive a 20 percent discount on the Final Value Fee. <br/><br/> This field is only returned for the following sites: US (EBAY-US), Motors (EBAY-MOTOR), AT (EBAY-AT), CH (EBAY-CH), DE (EBAY-DE), IE (EBAY-IE), UK
     * (EBAY-GB), and AU (EBAY-AU). The Top Rated Seller and Top Rated Plus listing requirements will differ by site. Below are some links to Help pages that discusss these requirements: <ul> <li>eBay US: <a
     * href="http://pages.ebay.com/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a></li> <li>eBay US Motors: <a href="http://pages.ebay.com/help/sell/top-rated.html#becoming">Becoming a Top Rated Seller in Motors
     * vehicles categories</a></li> <li>eBay UK/IE: <a href="http://pages.ebay.co.uk/help/sell/top-rated.html">eBay Top-rated Seller status and the eBay Premium Service</a></li> <li>eBay DE/AT/CH: <a
     * href="http://pages.ebay.de/help/sell/top-rated/2.html">Anforderungen fur den Verkaufer mit Top-Bewertung</a></li> <li>eBay AU: <a href="http://pages.ebay.com.au/help/sell/top-rated.html">Becoming a Top Rated Seller and qualifying for eBay Premium
     * Service</a></li> </ul> Top Rated Sellers, registered in the US, can qualify for Top Rated Seller programs in other countries as long as they meet the selling requirments in those countries. However, even if US sellers qualify for programs in other
     * countries, they will not receive the Final Value Fee discount on sales in those countries. For more information, see the <a href="http://pages.ebay.com/help/sell/top-rated.html#qualifying">Qualifying for Top Rated Seller status on other eBay
     * sites</a> help topic.
     * - minOccurs: 0
     * @var bool
     */
    public $TopRatedSeller;
    /**
     * The TopRatedSellerDetails
     * Meta informations extracted from the WSDL
     * - documentation: Contains Top Rated Seller program details for the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType
     */
    public $TopRatedSellerDetails;
    /**
     * The RecoupmentPolicyConsent
     * Meta informations extracted from the WSDL
     * - documentation: The list of the sites where a seller has agreed to the cross-border recoupment terms. <br><br> Sellers who engage in cross-border trade on sites that require a recoupment agreement, must agree to the recoupment terms before adding
     * items to the site. This agreement allows eBay to reimburse a buyer during a dispute and then recoup the cost from the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType
     */
    public $RecoupmentPolicyConsent;
    /**
     * The DomesticRateTable
     * Meta informations extracted from the WSDL
     * - documentation: If true, the seller has configured a domestic shipping rate table on the DE, UK or US website.
     * - minOccurs: 0
     * @var bool
     */
    public $DomesticRateTable;
    /**
     * The InternationalRateTable
     * Meta informations extracted from the WSDL
     * - documentation: If true, the seller has configured an international shipping rate table on the US, UK or DE website.
     * - minOccurs: 0
     * @var bool
     */
    public $InternationalRateTable;
    /**
     * The SellereBayPaymentProcessStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer used.
     * - minOccurs: 0
     * @var string
     */
    public $SellereBayPaymentProcessStatus;
    /**
     * The SellereBayPaymentProcessConsent
     * Meta informations extracted from the WSDL
     * - documentation: This field is no longer used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
     */
    public $SellereBayPaymentProcessConsent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerType
     * @uses SellerType::setPaisaPayStatus()
     * @uses SellerType::setAllowPaymentEdit()
     * @uses SellerType::setBillingCurrency()
     * @uses SellerType::setCheckoutEnabled()
     * @uses SellerType::setCIPBankAccountStored()
     * @uses SellerType::setGoodStanding()
     * @uses SellerType::setMerchandizingPref()
     * @uses SellerType::setQualifiesForB2BVAT()
     * @uses SellerType::setSellerGuaranteeLevel()
     * @uses SellerType::setSellerLevel()
     * @uses SellerType::setSellerPaymentAddress()
     * @uses SellerType::setSchedulingInfo()
     * @uses SellerType::setStoreOwner()
     * @uses SellerType::setStoreURL()
     * @uses SellerType::setSellerBusinessType()
     * @uses SellerType::setRegisteredBusinessSeller()
     * @uses SellerType::setStoreSite()
     * @uses SellerType::setPaymentMethod()
     * @uses SellerType::setProStoresPreference()
     * @uses SellerType::setCharityRegistered()
     * @uses SellerType::setSafePaymentExempt()
     * @uses SellerType::setPaisaPayEscrowEMIStatus()
     * @uses SellerType::setCharityAffiliationDetails()
     * @uses SellerType::setTransactionPercent()
     * @uses SellerType::setIntegratedMerchantCreditCardInfo()
     * @uses SellerType::setFeatureEligibility()
     * @uses SellerType::setTopRatedSeller()
     * @uses SellerType::setTopRatedSellerDetails()
     * @uses SellerType::setRecoupmentPolicyConsent()
     * @uses SellerType::setDomesticRateTable()
     * @uses SellerType::setInternationalRateTable()
     * @uses SellerType::setSellereBayPaymentProcessStatus()
     * @uses SellerType::setSellereBayPaymentProcessConsent()
     * @uses SellerType::setAny()
     * @param int $paisaPayStatus
     * @param bool $allowPaymentEdit
     * @param string $billingCurrency
     * @param bool $checkoutEnabled
     * @param bool $cIPBankAccountStored
     * @param bool $goodStanding
     * @param string $merchandizingPref
     * @param bool $qualifiesForB2BVAT
     * @param string $sellerGuaranteeLevel
     * @param string $sellerLevel
     * @param \macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress
     * @param \macropage\ebaysdk\trading\StructType\SchedulingInfoType $schedulingInfo
     * @param bool $storeOwner
     * @param string $storeURL
     * @param string $sellerBusinessType
     * @param bool $registeredBusinessSeller
     * @param string $storeSite
     * @param string $paymentMethod
     * @param \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType $proStoresPreference
     * @param bool $charityRegistered
     * @param bool $safePaymentExempt
     * @param int $paisaPayEscrowEMIStatus
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType $charityAffiliationDetails
     * @param float $transactionPercent
     * @param \macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType $integratedMerchantCreditCardInfo
     * @param \macropage\ebaysdk\trading\StructType\FeatureEligibilityType $featureEligibility
     * @param bool $topRatedSeller
     * @param \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType $topRatedSellerDetails
     * @param \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType $recoupmentPolicyConsent
     * @param bool $domesticRateTable
     * @param bool $internationalRateTable
     * @param string $sellereBayPaymentProcessStatus
     * @param \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType $sellereBayPaymentProcessConsent
     * @param \DOMDocument $any
     */
    public function __construct($paisaPayStatus = null, $allowPaymentEdit = null, $billingCurrency = null, $checkoutEnabled = null, $cIPBankAccountStored = null, $goodStanding = null, $merchandizingPref = null, $qualifiesForB2BVAT = null, $sellerGuaranteeLevel = null, $sellerLevel = null, \macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress = null, \macropage\ebaysdk\trading\StructType\SchedulingInfoType $schedulingInfo = null, $storeOwner = null, $storeURL = null, $sellerBusinessType = null, $registeredBusinessSeller = null, $storeSite = null, $paymentMethod = null, \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType $proStoresPreference = null, $charityRegistered = null, $safePaymentExempt = null, $paisaPayEscrowEMIStatus = null, \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType $charityAffiliationDetails = null, $transactionPercent = null, \macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType $integratedMerchantCreditCardInfo = null, \macropage\ebaysdk\trading\StructType\FeatureEligibilityType $featureEligibility = null, $topRatedSeller = null, \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType $topRatedSellerDetails = null, \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType $recoupmentPolicyConsent = null, $domesticRateTable = null, $internationalRateTable = null, $sellereBayPaymentProcessStatus = null, \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType $sellereBayPaymentProcessConsent = null, \DOMDocument $any = null)
    {
        $this
            ->setPaisaPayStatus($paisaPayStatus)
            ->setAllowPaymentEdit($allowPaymentEdit)
            ->setBillingCurrency($billingCurrency)
            ->setCheckoutEnabled($checkoutEnabled)
            ->setCIPBankAccountStored($cIPBankAccountStored)
            ->setGoodStanding($goodStanding)
            ->setMerchandizingPref($merchandizingPref)
            ->setQualifiesForB2BVAT($qualifiesForB2BVAT)
            ->setSellerGuaranteeLevel($sellerGuaranteeLevel)
            ->setSellerLevel($sellerLevel)
            ->setSellerPaymentAddress($sellerPaymentAddress)
            ->setSchedulingInfo($schedulingInfo)
            ->setStoreOwner($storeOwner)
            ->setStoreURL($storeURL)
            ->setSellerBusinessType($sellerBusinessType)
            ->setRegisteredBusinessSeller($registeredBusinessSeller)
            ->setStoreSite($storeSite)
            ->setPaymentMethod($paymentMethod)
            ->setProStoresPreference($proStoresPreference)
            ->setCharityRegistered($charityRegistered)
            ->setSafePaymentExempt($safePaymentExempt)
            ->setPaisaPayEscrowEMIStatus($paisaPayEscrowEMIStatus)
            ->setCharityAffiliationDetails($charityAffiliationDetails)
            ->setTransactionPercent($transactionPercent)
            ->setIntegratedMerchantCreditCardInfo($integratedMerchantCreditCardInfo)
            ->setFeatureEligibility($featureEligibility)
            ->setTopRatedSeller($topRatedSeller)
            ->setTopRatedSellerDetails($topRatedSellerDetails)
            ->setRecoupmentPolicyConsent($recoupmentPolicyConsent)
            ->setDomesticRateTable($domesticRateTable)
            ->setInternationalRateTable($internationalRateTable)
            ->setSellereBayPaymentProcessStatus($sellereBayPaymentProcessStatus)
            ->setSellereBayPaymentProcessConsent($sellereBayPaymentProcessConsent)
            ->setAny($any);
    }
    /**
     * Get PaisaPayStatus value
     * @return int|null
     */
    public function getPaisaPayStatus()
    {
        return $this->PaisaPayStatus;
    }
    /**
     * Set PaisaPayStatus value
     * @param int $paisaPayStatus
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setPaisaPayStatus($paisaPayStatus = null)
    {
        // validation for constraint: int
        if (!is_null($paisaPayStatus) && !is_numeric($paisaPayStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paisaPayStatus)), __LINE__);
        }
        $this->PaisaPayStatus = $paisaPayStatus;
        return $this;
    }
    /**
     * Get AllowPaymentEdit value
     * @return bool|null
     */
    public function getAllowPaymentEdit()
    {
        return $this->AllowPaymentEdit;
    }
    /**
     * Set AllowPaymentEdit value
     * @param bool $allowPaymentEdit
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setAllowPaymentEdit($allowPaymentEdit = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowPaymentEdit) && !is_bool($allowPaymentEdit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowPaymentEdit)), __LINE__);
        }
        $this->AllowPaymentEdit = $allowPaymentEdit;
        return $this;
    }
    /**
     * Get BillingCurrency value
     * @return string|null
     */
    public function getBillingCurrency()
    {
        return $this->BillingCurrency;
    }
    /**
     * Set BillingCurrency value
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $billingCurrency
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setBillingCurrency($billingCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CurrencyCodeType::valueIsValid($billingCurrency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $billingCurrency, implode(', ', \macropage\ebaysdk\trading\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->BillingCurrency = $billingCurrency;
        return $this;
    }
    /**
     * Get CheckoutEnabled value
     * @return bool|null
     */
    public function getCheckoutEnabled()
    {
        return $this->CheckoutEnabled;
    }
    /**
     * Set CheckoutEnabled value
     * @param bool $checkoutEnabled
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setCheckoutEnabled($checkoutEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($checkoutEnabled) && !is_bool($checkoutEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($checkoutEnabled)), __LINE__);
        }
        $this->CheckoutEnabled = $checkoutEnabled;
        return $this;
    }
    /**
     * Get CIPBankAccountStored value
     * @return bool|null
     */
    public function getCIPBankAccountStored()
    {
        return $this->CIPBankAccountStored;
    }
    /**
     * Set CIPBankAccountStored value
     * @param bool $cIPBankAccountStored
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setCIPBankAccountStored($cIPBankAccountStored = null)
    {
        // validation for constraint: boolean
        if (!is_null($cIPBankAccountStored) && !is_bool($cIPBankAccountStored)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cIPBankAccountStored)), __LINE__);
        }
        $this->CIPBankAccountStored = $cIPBankAccountStored;
        return $this;
    }
    /**
     * Get GoodStanding value
     * @return bool|null
     */
    public function getGoodStanding()
    {
        return $this->GoodStanding;
    }
    /**
     * Set GoodStanding value
     * @param bool $goodStanding
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setGoodStanding($goodStanding = null)
    {
        // validation for constraint: boolean
        if (!is_null($goodStanding) && !is_bool($goodStanding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($goodStanding)), __LINE__);
        }
        $this->GoodStanding = $goodStanding;
        return $this;
    }
    /**
     * Get MerchandizingPref value
     * @return string|null
     */
    public function getMerchandizingPref()
    {
        return $this->MerchandizingPref;
    }
    /**
     * Set MerchandizingPref value
     * @uses \macropage\ebaysdk\trading\EnumType\MerchandizingPrefCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MerchandizingPrefCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $merchandizingPref
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setMerchandizingPref($merchandizingPref = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MerchandizingPrefCodeType::valueIsValid($merchandizingPref)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $merchandizingPref, implode(', ', \macropage\ebaysdk\trading\EnumType\MerchandizingPrefCodeType::getValidValues())), __LINE__);
        }
        $this->MerchandizingPref = $merchandizingPref;
        return $this;
    }
    /**
     * Get QualifiesForB2BVAT value
     * @return bool|null
     */
    public function getQualifiesForB2BVAT()
    {
        return $this->QualifiesForB2BVAT;
    }
    /**
     * Set QualifiesForB2BVAT value
     * @param bool $qualifiesForB2BVAT
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setQualifiesForB2BVAT($qualifiesForB2BVAT = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForB2BVAT) && !is_bool($qualifiesForB2BVAT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($qualifiesForB2BVAT)), __LINE__);
        }
        $this->QualifiesForB2BVAT = $qualifiesForB2BVAT;
        return $this;
    }
    /**
     * Get SellerGuaranteeLevel value
     * @return string|null
     */
    public function getSellerGuaranteeLevel()
    {
        return $this->SellerGuaranteeLevel;
    }
    /**
     * Set SellerGuaranteeLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerGuaranteeLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerGuaranteeLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellerGuaranteeLevel
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setSellerGuaranteeLevel($sellerGuaranteeLevel = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerGuaranteeLevelCodeType::valueIsValid($sellerGuaranteeLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellerGuaranteeLevel, implode(', ', \macropage\ebaysdk\trading\EnumType\SellerGuaranteeLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SellerGuaranteeLevel = $sellerGuaranteeLevel;
        return $this;
    }
    /**
     * Get SellerLevel value
     * @return string|null
     */
    public function getSellerLevel()
    {
        return $this->SellerLevel;
    }
    /**
     * Set SellerLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellerLevel
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setSellerLevel($sellerLevel = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerLevelCodeType::valueIsValid($sellerLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellerLevel, implode(', ', \macropage\ebaysdk\trading\EnumType\SellerLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SellerLevel = $sellerLevel;
        return $this;
    }
    /**
     * Get SellerPaymentAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getSellerPaymentAddress()
    {
        return $this->SellerPaymentAddress;
    }
    /**
     * Set SellerPaymentAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setSellerPaymentAddress(\macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress = null)
    {
        $this->SellerPaymentAddress = $sellerPaymentAddress;
        return $this;
    }
    /**
     * Get SchedulingInfo value
     * @return \macropage\ebaysdk\trading\StructType\SchedulingInfoType|null
     */
    public function getSchedulingInfo()
    {
        return $this->SchedulingInfo;
    }
    /**
     * Set SchedulingInfo value
     * @param \macropage\ebaysdk\trading\StructType\SchedulingInfoType $schedulingInfo
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setSchedulingInfo(\macropage\ebaysdk\trading\StructType\SchedulingInfoType $schedulingInfo = null)
    {
        $this->SchedulingInfo = $schedulingInfo;
        return $this;
    }
    /**
     * Get StoreOwner value
     * @return bool|null
     */
    public function getStoreOwner()
    {
        return $this->StoreOwner;
    }
    /**
     * Set StoreOwner value
     * @param bool $storeOwner
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setStoreOwner($storeOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($storeOwner) && !is_bool($storeOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($storeOwner)), __LINE__);
        }
        $this->StoreOwner = $storeOwner;
        return $this;
    }
    /**
     * Get StoreURL value
     * @return string|null
     */
    public function getStoreURL()
    {
        return $this->StoreURL;
    }
    /**
     * Set StoreURL value
     * @param string $storeURL
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setStoreURL($storeURL = null)
    {
        // validation for constraint: string
        if (!is_null($storeURL) && !is_string($storeURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeURL)), __LINE__);
        }
        $this->StoreURL = $storeURL;
        return $this;
    }
    /**
     * Get SellerBusinessType value
     * @return string|null
     */
    public function getSellerBusinessType()
    {
        return $this->SellerBusinessType;
    }
    /**
     * Set SellerBusinessType value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellerBusinessType
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setSellerBusinessType($sellerBusinessType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::valueIsValid($sellerBusinessType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellerBusinessType, implode(', ', \macropage\ebaysdk\trading\EnumType\SellerBusinessCodeType::getValidValues())), __LINE__);
        }
        $this->SellerBusinessType = $sellerBusinessType;
        return $this;
    }
    /**
     * Get RegisteredBusinessSeller value
     * @return bool|null
     */
    public function getRegisteredBusinessSeller()
    {
        return $this->RegisteredBusinessSeller;
    }
    /**
     * Set RegisteredBusinessSeller value
     * @param bool $registeredBusinessSeller
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setRegisteredBusinessSeller($registeredBusinessSeller = null)
    {
        // validation for constraint: boolean
        if (!is_null($registeredBusinessSeller) && !is_bool($registeredBusinessSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($registeredBusinessSeller)), __LINE__);
        }
        $this->RegisteredBusinessSeller = $registeredBusinessSeller;
        return $this;
    }
    /**
     * Get StoreSite value
     * @return string|null
     */
    public function getStoreSite()
    {
        return $this->StoreSite;
    }
    /**
     * Set StoreSite value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $storeSite
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setStoreSite($storeSite = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($storeSite)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $storeSite, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->StoreSite = $storeSite;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMethod
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::valueIsValid($paymentMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentMethod, implode(', ', \macropage\ebaysdk\trading\EnumType\SellerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Get ProStoresPreference value
     * @return \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType|null
     */
    public function getProStoresPreference()
    {
        return $this->ProStoresPreference;
    }
    /**
     * Set ProStoresPreference value
     * @param \macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType $proStoresPreference
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setProStoresPreference(\macropage\ebaysdk\trading\StructType\ProStoresCheckoutPreferenceType $proStoresPreference = null)
    {
        $this->ProStoresPreference = $proStoresPreference;
        return $this;
    }
    /**
     * Get CharityRegistered value
     * @return bool|null
     */
    public function getCharityRegistered()
    {
        return $this->CharityRegistered;
    }
    /**
     * Set CharityRegistered value
     * @param bool $charityRegistered
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setCharityRegistered($charityRegistered = null)
    {
        // validation for constraint: boolean
        if (!is_null($charityRegistered) && !is_bool($charityRegistered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($charityRegistered)), __LINE__);
        }
        $this->CharityRegistered = $charityRegistered;
        return $this;
    }
    /**
     * Get SafePaymentExempt value
     * @return bool|null
     */
    public function getSafePaymentExempt()
    {
        return $this->SafePaymentExempt;
    }
    /**
     * Set SafePaymentExempt value
     * @param bool $safePaymentExempt
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setSafePaymentExempt($safePaymentExempt = null)
    {
        // validation for constraint: boolean
        if (!is_null($safePaymentExempt) && !is_bool($safePaymentExempt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($safePaymentExempt)), __LINE__);
        }
        $this->SafePaymentExempt = $safePaymentExempt;
        return $this;
    }
    /**
     * Get PaisaPayEscrowEMIStatus value
     * @return int|null
     */
    public function getPaisaPayEscrowEMIStatus()
    {
        return $this->PaisaPayEscrowEMIStatus;
    }
    /**
     * Set PaisaPayEscrowEMIStatus value
     * @param int $paisaPayEscrowEMIStatus
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setPaisaPayEscrowEMIStatus($paisaPayEscrowEMIStatus = null)
    {
        // validation for constraint: int
        if (!is_null($paisaPayEscrowEMIStatus) && !is_numeric($paisaPayEscrowEMIStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paisaPayEscrowEMIStatus)), __LINE__);
        }
        $this->PaisaPayEscrowEMIStatus = $paisaPayEscrowEMIStatus;
        return $this;
    }
    /**
     * Get CharityAffiliationDetails value
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType|null
     */
    public function getCharityAffiliationDetails()
    {
        return $this->CharityAffiliationDetails;
    }
    /**
     * Set CharityAffiliationDetails value
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType $charityAffiliationDetails
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setCharityAffiliationDetails(\macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType $charityAffiliationDetails = null)
    {
        $this->CharityAffiliationDetails = $charityAffiliationDetails;
        return $this;
    }
    /**
     * Get TransactionPercent value
     * @return float|null
     */
    public function getTransactionPercent()
    {
        return $this->TransactionPercent;
    }
    /**
     * Set TransactionPercent value
     * @param float $transactionPercent
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setTransactionPercent($transactionPercent = null)
    {
        $this->TransactionPercent = $transactionPercent;
        return $this;
    }
    /**
     * Get IntegratedMerchantCreditCardInfo value
     * @return \macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType|null
     */
    public function getIntegratedMerchantCreditCardInfo()
    {
        return $this->IntegratedMerchantCreditCardInfo;
    }
    /**
     * Set IntegratedMerchantCreditCardInfo value
     * @param \macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType $integratedMerchantCreditCardInfo
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setIntegratedMerchantCreditCardInfo(\macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType $integratedMerchantCreditCardInfo = null)
    {
        $this->IntegratedMerchantCreditCardInfo = $integratedMerchantCreditCardInfo;
        return $this;
    }
    /**
     * Get FeatureEligibility value
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType|null
     */
    public function getFeatureEligibility()
    {
        return $this->FeatureEligibility;
    }
    /**
     * Set FeatureEligibility value
     * @param \macropage\ebaysdk\trading\StructType\FeatureEligibilityType $featureEligibility
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setFeatureEligibility(\macropage\ebaysdk\trading\StructType\FeatureEligibilityType $featureEligibility = null)
    {
        $this->FeatureEligibility = $featureEligibility;
        return $this;
    }
    /**
     * Get TopRatedSeller value
     * @return bool|null
     */
    public function getTopRatedSeller()
    {
        return $this->TopRatedSeller;
    }
    /**
     * Set TopRatedSeller value
     * @param bool $topRatedSeller
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setTopRatedSeller($topRatedSeller = null)
    {
        // validation for constraint: boolean
        if (!is_null($topRatedSeller) && !is_bool($topRatedSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($topRatedSeller)), __LINE__);
        }
        $this->TopRatedSeller = $topRatedSeller;
        return $this;
    }
    /**
     * Get TopRatedSellerDetails value
     * @return \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType|null
     */
    public function getTopRatedSellerDetails()
    {
        return $this->TopRatedSellerDetails;
    }
    /**
     * Set TopRatedSellerDetails value
     * @param \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType $topRatedSellerDetails
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setTopRatedSellerDetails(\macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType $topRatedSellerDetails = null)
    {
        $this->TopRatedSellerDetails = $topRatedSellerDetails;
        return $this;
    }
    /**
     * Get RecoupmentPolicyConsent value
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType|null
     */
    public function getRecoupmentPolicyConsent()
    {
        return $this->RecoupmentPolicyConsent;
    }
    /**
     * Set RecoupmentPolicyConsent value
     * @param \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType $recoupmentPolicyConsent
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setRecoupmentPolicyConsent(\macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType $recoupmentPolicyConsent = null)
    {
        $this->RecoupmentPolicyConsent = $recoupmentPolicyConsent;
        return $this;
    }
    /**
     * Get DomesticRateTable value
     * @return bool|null
     */
    public function getDomesticRateTable()
    {
        return $this->DomesticRateTable;
    }
    /**
     * Set DomesticRateTable value
     * @param bool $domesticRateTable
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setDomesticRateTable($domesticRateTable = null)
    {
        // validation for constraint: boolean
        if (!is_null($domesticRateTable) && !is_bool($domesticRateTable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($domesticRateTable)), __LINE__);
        }
        $this->DomesticRateTable = $domesticRateTable;
        return $this;
    }
    /**
     * Get InternationalRateTable value
     * @return bool|null
     */
    public function getInternationalRateTable()
    {
        return $this->InternationalRateTable;
    }
    /**
     * Set InternationalRateTable value
     * @param bool $internationalRateTable
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setInternationalRateTable($internationalRateTable = null)
    {
        // validation for constraint: boolean
        if (!is_null($internationalRateTable) && !is_bool($internationalRateTable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($internationalRateTable)), __LINE__);
        }
        $this->InternationalRateTable = $internationalRateTable;
        return $this;
    }
    /**
     * Get SellereBayPaymentProcessStatus value
     * @return string|null
     */
    public function getSellereBayPaymentProcessStatus()
    {
        return $this->SellereBayPaymentProcessStatus;
    }
    /**
     * Set SellereBayPaymentProcessStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellereBayPaymentProcessStatus
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setSellereBayPaymentProcessStatus($sellereBayPaymentProcessStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::valueIsValid($sellereBayPaymentProcessStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellereBayPaymentProcessStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::getValidValues())), __LINE__);
        }
        $this->SellereBayPaymentProcessStatus = $sellereBayPaymentProcessStatus;
        return $this;
    }
    /**
     * Get SellereBayPaymentProcessConsent value
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType|null
     */
    public function getSellereBayPaymentProcessConsent()
    {
        return $this->SellereBayPaymentProcessConsent;
    }
    /**
     * Set SellereBayPaymentProcessConsent value
     * @param \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType $sellereBayPaymentProcessConsent
     * @return \macropage\ebaysdk\trading\StructType\SellerType
     */
    public function setSellereBayPaymentProcessConsent(\macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType $sellereBayPaymentProcessConsent = null)
    {
        $this->SellereBayPaymentProcessConsent = $sellereBayPaymentProcessConsent;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerType
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
