<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerPaymentProfileType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerPaymentProfile</b> container, which is used in an Add/Revise/Relist/Verify Trading API call to reference and use a payment business policy.
 * @subpackage Structs
 */
class SellerPaymentProfileType extends AbstractStructBase
{
    /**
     * The PaymentProfileID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a payment business policy. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the payment settings/values of a payment
     * business policy. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence. <br/><br/> Payment profile IDs can be retrieved with the <b>getPaymentPolicies</b> call of the <b>Account API</b> or with the
     * <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business policy IDs can also be retrieved through the Business policies section of My eBay. <br/><br/> In the 'Get' calls, the <b>PaymentProfileID</b> value will always be
     * returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment business policy.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PaymentProfileID = null;
    /**
     * The PaymentProfileName
     * Meta information extracted from the WSDL
     * - documentation: The name of a payment business policy. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the payment settings/values of a payment business policy. If
     * both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence. <br/><br/> In the 'Get' calls, the <b>PaymentProfileID</b> value will always be returned if business policies are set for the listing, and the person
     * making the API call is the seller of the listing. The <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment business policy.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentProfileName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellerPaymentProfileType
     * @uses SellerPaymentProfileType::setPaymentProfileID()
     * @uses SellerPaymentProfileType::setPaymentProfileName()
     * @uses SellerPaymentProfileType::setAny()
     * @param int $paymentProfileID
     * @param string $paymentProfileName
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $paymentProfileID = null, ?string $paymentProfileName = null, $any = null)
    {
        $this
            ->setPaymentProfileID($paymentProfileID)
            ->setPaymentProfileName($paymentProfileName)
            ->setAny($any);
    }
    /**
     * Get PaymentProfileID value
     * @return int|null
     */
    public function getPaymentProfileID(): ?int
    {
        return $this->PaymentProfileID;
    }
    /**
     * Set PaymentProfileID value
     * @param int $paymentProfileID
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType
     */
    public function setPaymentProfileID(?int $paymentProfileID = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentProfileID) && !(is_int($paymentProfileID) || ctype_digit($paymentProfileID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentProfileID, true), gettype($paymentProfileID)), __LINE__);
        }
        $this->PaymentProfileID = $paymentProfileID;
        
        return $this;
    }
    /**
     * Get PaymentProfileName value
     * @return string|null
     */
    public function getPaymentProfileName(): ?string
    {
        return $this->PaymentProfileName;
    }
    /**
     * Set PaymentProfileName value
     * @param string $paymentProfileName
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType
     */
    public function setPaymentProfileName(?string $paymentProfileName = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentProfileName) && !is_string($paymentProfileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentProfileName, true), gettype($paymentProfileName)), __LINE__);
        }
        $this->PaymentProfileName = $paymentProfileName;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType
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
