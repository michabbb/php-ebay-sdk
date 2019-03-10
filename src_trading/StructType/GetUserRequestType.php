<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves data pertaining to a single eBay user. Callers can use this call to return their own user data or the data of another eBay user. Unless the caller passes in an <strong>ItemID</strong> value that identifies a current or past
 * common order, not all data (like email addresses) will be returned in the response.
 * @subpackage Structs
 */
class GetUserRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Specify the <strong>ItemID</strong> value for a successfully concluded listing in which the requestor and target user were participants (one as seller and the other as buyer). Necessary to return certain data (like an email address).
     * Not necessary if the requestor is retrieving their own data. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - documentation: Specify the user whose data you want returned by the call. If not specified, eBay returns data pertaining to the requesting user (as specified with the <strong>eBayAuthToken</strong> value).
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The IncludeExpressRequirements
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeExpressRequirements;
    /**
     * The IncludeFeatureEligibility
     * Meta informations extracted from the WSDL
     * - documentation: If the <b>IncludeFeatureEligibility</b> flag is included and set to 'true', the call response will include a <b>QualifiesForSelling</b> flag which indicates if the eBay user is eligible to sell on eBay, and a
     * <b>IncludeFeatureEligibility</b> container which indicates which selling features are available to the user.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeFeatureEligibility;
    /**
     * Constructor method for GetUserRequestType
     * @uses GetUserRequestType::setItemID()
     * @uses GetUserRequestType::setUserID()
     * @uses GetUserRequestType::setIncludeExpressRequirements()
     * @uses GetUserRequestType::setIncludeFeatureEligibility()
     * @param string $itemID
     * @param string $userID
     * @param bool $includeExpressRequirements
     * @param bool $includeFeatureEligibility
     */
    public function __construct($itemID = null, $userID = null, $includeExpressRequirements = null, $includeFeatureEligibility = null)
    {
        $this
            ->setItemID($itemID)
            ->setUserID($userID)
            ->setIncludeExpressRequirements($includeExpressRequirements)
            ->setIncludeFeatureEligibility($includeFeatureEligibility);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetUserRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\GetUserRequestType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get IncludeExpressRequirements value
     * @return bool|null
     */
    public function getIncludeExpressRequirements()
    {
        return $this->IncludeExpressRequirements;
    }
    /**
     * Set IncludeExpressRequirements value
     * @param bool $includeExpressRequirements
     * @return \macropage\ebaysdk\trading\StructType\GetUserRequestType
     */
    public function setIncludeExpressRequirements($includeExpressRequirements = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeExpressRequirements) && !is_bool($includeExpressRequirements)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeExpressRequirements)), __LINE__);
        }
        $this->IncludeExpressRequirements = $includeExpressRequirements;
        return $this;
    }
    /**
     * Get IncludeFeatureEligibility value
     * @return bool|null
     */
    public function getIncludeFeatureEligibility()
    {
        return $this->IncludeFeatureEligibility;
    }
    /**
     * Set IncludeFeatureEligibility value
     * @param bool $includeFeatureEligibility
     * @return \macropage\ebaysdk\trading\StructType\GetUserRequestType
     */
    public function setIncludeFeatureEligibility($includeFeatureEligibility = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeFeatureEligibility) && !is_bool($includeFeatureEligibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeFeatureEligibility)), __LINE__);
        }
        $this->IncludeFeatureEligibility = $includeFeatureEligibility;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetUserRequestType
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
