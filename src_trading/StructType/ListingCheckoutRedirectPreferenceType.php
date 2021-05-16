<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingCheckoutRedirectPreferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type has been deprecated, as Pro Stores and other third-party checkouts have been deprecated.
 * @subpackage Structs
 */
class ListingCheckoutRedirectPreferenceType extends AbstractStructBase
{
    /**
     * The ProStoresStoreName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProStoresStoreName = null;
    /**
     * The SellerThirdPartyUsername
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerThirdPartyUsername = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ListingCheckoutRedirectPreferenceType
     * @uses ListingCheckoutRedirectPreferenceType::setProStoresStoreName()
     * @uses ListingCheckoutRedirectPreferenceType::setSellerThirdPartyUsername()
     * @uses ListingCheckoutRedirectPreferenceType::setAny()
     * @param string $proStoresStoreName
     * @param string $sellerThirdPartyUsername
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $proStoresStoreName = null, ?string $sellerThirdPartyUsername = null, $any = null)
    {
        $this
            ->setProStoresStoreName($proStoresStoreName)
            ->setSellerThirdPartyUsername($sellerThirdPartyUsername)
            ->setAny($any);
    }
    /**
     * Get ProStoresStoreName value
     * @return string|null
     */
    public function getProStoresStoreName(): ?string
    {
        return $this->ProStoresStoreName;
    }
    /**
     * Set ProStoresStoreName value
     * @param string $proStoresStoreName
     * @return \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType
     */
    public function setProStoresStoreName(?string $proStoresStoreName = null): self
    {
        // validation for constraint: string
        if (!is_null($proStoresStoreName) && !is_string($proStoresStoreName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proStoresStoreName, true), gettype($proStoresStoreName)), __LINE__);
        }
        $this->ProStoresStoreName = $proStoresStoreName;
        
        return $this;
    }
    /**
     * Get SellerThirdPartyUsername value
     * @return string|null
     */
    public function getSellerThirdPartyUsername(): ?string
    {
        return $this->SellerThirdPartyUsername;
    }
    /**
     * Set SellerThirdPartyUsername value
     * @param string $sellerThirdPartyUsername
     * @return \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType
     */
    public function setSellerThirdPartyUsername(?string $sellerThirdPartyUsername = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerThirdPartyUsername) && !is_string($sellerThirdPartyUsername)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerThirdPartyUsername, true), gettype($sellerThirdPartyUsername)), __LINE__);
        }
        $this->SellerThirdPartyUsername = $sellerThirdPartyUsername;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ListingCheckoutRedirectPreferenceType
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
