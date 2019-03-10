<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReturnProfileType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SellerReturnProfile</b> container, which is used in an Add/Revise/Relist/Verify Trading API call to reference a Business Policies return policy profile. Business Policies return policy profiles contain detailed
 * information on the seller's return policy, including the refund option and how many days the buyer has to return the item for a refund.
 * @subpackage Structs
 */
class SellerReturnProfileType extends AbstractStructBase
{
    /**
     * The ReturnProfileID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of a Business Policies return policy profile. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy values of a
     * Business Policies return policy profile. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence. <br/><br/> Return Policy profile IDs can be retrieved with the <b>getReturnPolicies</b> call of the
     * <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay. <br/><br/> In the 'Get' calls, the
     * <b>ReturnProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the
     * return policy profile.
     * - minOccurs: 0
     * @var int
     */
    public $ReturnProfileID;
    /**
     * The ReturnProfileName
     * Meta informations extracted from the WSDL
     * - documentation: The name of a Business Policies return policy profile. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy values of a Business Policies
     * return policy profile. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence. <br/><br/> In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if Business Policies are set for the
     * listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy profile.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnProfileName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerReturnProfileType
     * @uses SellerReturnProfileType::setReturnProfileID()
     * @uses SellerReturnProfileType::setReturnProfileName()
     * @uses SellerReturnProfileType::setAny()
     * @param int $returnProfileID
     * @param string $returnProfileName
     * @param \DOMDocument $any
     */
    public function __construct($returnProfileID = null, $returnProfileName = null, \DOMDocument $any = null)
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
    public function getReturnProfileID()
    {
        return $this->ReturnProfileID;
    }
    /**
     * Set ReturnProfileID value
     * @param int $returnProfileID
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnProfileType
     */
    public function setReturnProfileID($returnProfileID = null)
    {
        // validation for constraint: int
        if (!is_null($returnProfileID) && !is_numeric($returnProfileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnProfileID)), __LINE__);
        }
        $this->ReturnProfileID = $returnProfileID;
        return $this;
    }
    /**
     * Get ReturnProfileName value
     * @return string|null
     */
    public function getReturnProfileName()
    {
        return $this->ReturnProfileName;
    }
    /**
     * Set ReturnProfileName value
     * @param string $returnProfileName
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnProfileType
     */
    public function setReturnProfileName($returnProfileName = null)
    {
        // validation for constraint: string
        if (!is_null($returnProfileName) && !is_string($returnProfileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnProfileName)), __LINE__);
        }
        $this->ReturnProfileName = $returnProfileName;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerReturnProfileType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnProfileType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnProfileType
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
