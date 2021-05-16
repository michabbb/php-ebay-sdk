<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerShippingProfileType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerShippingProfile</b> container, which is used in an Add/Revise/Relist Trading API call to reference a shipping business policy. Shipping business policies contain detailed information on domestic and
 * international shipping, including shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations.
 * @subpackage Structs
 */
class SellerShippingProfileType extends AbstractStructBase
{
    /**
     * The ShippingProfileID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a shipping business policy. A <b>ShippingProfileID</b> and/or a <b>ShipppingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shippping-related settings/values of a
     * shipping business policy. If both fields are provided and their values don't match, the <b>ShipppingProfileID</b> takes precedence. <br/><br/> Shipping profile IDs can be retrieved with the <b>getFulfillmentPolicies</b> call of the <b>Account API</b>
     * or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business policy IDs can also be retrieved through the Business policies section of My eBay. <br/><br/> In the 'Get' calls, the <b>ShipppingProfileID</b> value
     * will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShipppingProfileName</b> value will be returned if a name is assigned to the shipping business policy.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingProfileID = null;
    /**
     * The ShippingProfileName
     * Meta information extracted from the WSDL
     * - documentation: The name of a shipping business policy. A <b>ShippingProfileID</b> and/or a <b>ShippingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shipping-related settings/values of a shipping
     * business policy. If both fields are provided and their values don't match, the <b>ShippingProfileID</b> takes precedence. <br/><br/> In the 'Get' calls, the <b>ShippingProfileID</b> value will always be returned if business policies are set for the
     * listing, and the person making the API call is the seller of the listing. The <b>ShippingProfileName</b> value will be returned if a name is assigned to the shipping business policy.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShippingProfileName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellerShippingProfileType
     * @uses SellerShippingProfileType::setShippingProfileID()
     * @uses SellerShippingProfileType::setShippingProfileName()
     * @uses SellerShippingProfileType::setAny()
     * @param int $shippingProfileID
     * @param string $shippingProfileName
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $shippingProfileID = null, ?string $shippingProfileName = null, $any = null)
    {
        $this
            ->setShippingProfileID($shippingProfileID)
            ->setShippingProfileName($shippingProfileName)
            ->setAny($any);
    }
    /**
     * Get ShippingProfileID value
     * @return int|null
     */
    public function getShippingProfileID(): ?int
    {
        return $this->ShippingProfileID;
    }
    /**
     * Set ShippingProfileID value
     * @param int $shippingProfileID
     * @return \macropage\ebaysdk\trading\StructType\SellerShippingProfileType
     */
    public function setShippingProfileID(?int $shippingProfileID = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingProfileID) && !(is_int($shippingProfileID) || ctype_digit($shippingProfileID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingProfileID, true), gettype($shippingProfileID)), __LINE__);
        }
        $this->ShippingProfileID = $shippingProfileID;
        
        return $this;
    }
    /**
     * Get ShippingProfileName value
     * @return string|null
     */
    public function getShippingProfileName(): ?string
    {
        return $this->ShippingProfileName;
    }
    /**
     * Set ShippingProfileName value
     * @param string $shippingProfileName
     * @return \macropage\ebaysdk\trading\StructType\SellerShippingProfileType
     */
    public function setShippingProfileName(?string $shippingProfileName = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingProfileName) && !is_string($shippingProfileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingProfileName, true), gettype($shippingProfileName)), __LINE__);
        }
        $this->ShippingProfileName = $shippingProfileName;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerShippingProfileType
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
