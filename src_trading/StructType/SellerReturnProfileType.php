<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReturnProfileType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerReturnProfile</b> container, which is used in an Add/Revise/Relist/Verify Trading API call to reference a return policy business policy. Return policy business policies contain detailed information on the
 * seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return the item for a
 * refund, and who pays the return shipping costs.
 * @subpackage Structs
 */
class SellerReturnProfileType extends AbstractStructBase
{
    /**
     * The ReturnProfileID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a return policy business policy. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy settings/values of a
     * return policy business policy. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence. <br/><br/> Return policy profile IDs can be retrieved with the <b>getReturnPolicies</b> call of the <b>Account
     * API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business policy IDs can also be retrieved through the Business policies section of My eBay. <br/><br/> In the 'Get' calls, the <b>ReturnProfileID</b>
     * value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy business
     * policy.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ReturnProfileID = null;
    /**
     * The ReturnProfileName
     * Meta information extracted from the WSDL
     * - documentation: The name of a return policy business policy. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy settings/values of a return policy
     * business policy. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence. <br/><br/> In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if business policies are set for the
     * listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy business policy.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReturnProfileName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellerReturnProfileType
     * @uses SellerReturnProfileType::setReturnProfileID()
     * @uses SellerReturnProfileType::setReturnProfileName()
     * @uses SellerReturnProfileType::setAny()
     * @param int $returnProfileID
     * @param string $returnProfileName
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $returnProfileID = null, ?string $returnProfileName = null, $any = null)
    {
        $this
            ->setReturnProfileID($returnProfileID)
            ->setReturnProfileName($returnProfileName)
            ->setAny($any);
    }
    /**
     * Get ReturnProfileID value
     * @return int|null
     */
    public function getReturnProfileID(): ?int
    {
        return $this->ReturnProfileID;
    }
    /**
     * Set ReturnProfileID value
     * @param int $returnProfileID
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnProfileType
     */
    public function setReturnProfileID(?int $returnProfileID = null): self
    {
        // validation for constraint: int
        if (!is_null($returnProfileID) && !(is_int($returnProfileID) || ctype_digit($returnProfileID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnProfileID, true), gettype($returnProfileID)), __LINE__);
        }
        $this->ReturnProfileID = $returnProfileID;
        
        return $this;
    }
    /**
     * Get ReturnProfileName value
     * @return string|null
     */
    public function getReturnProfileName(): ?string
    {
        return $this->ReturnProfileName;
    }
    /**
     * Set ReturnProfileName value
     * @param string $returnProfileName
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnProfileType
     */
    public function setReturnProfileName(?string $returnProfileName = null): self
    {
        // validation for constraint: string
        if (!is_null($returnProfileName) && !is_string($returnProfileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnProfileName, true), gettype($returnProfileName)), __LINE__);
        }
        $this->ReturnProfileName = $returnProfileName;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnProfileType
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
