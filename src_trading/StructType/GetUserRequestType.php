<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves data pertaining to a single eBay user. Callers can use this call to return their own user data or the data of another eBay user. Unless the caller passes in an <strong>ItemID</strong> value that identifies a current or past
 * common order, not all data (like email addresses) will be returned in the response.
 * @subpackage Structs
 */
class GetUserRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Specify the <strong>ItemID</strong> value for a successfully concluded listing in which the requestor and target user were participants (one as seller and the other as buyer). Necessary to return certain data (like an email address).
     * Not necessary if the requestor is retrieving their own data. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: Specify the user whose data you want returned by the call. If not specified, eBay returns data pertaining to the requesting user (as specified with the <strong>eBayAuthToken</strong> value).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The IncludeExpressRequirements
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeExpressRequirements = null;
    /**
     * The IncludeFeatureEligibility
     * Meta information extracted from the WSDL
     * - documentation: If the <b>IncludeFeatureEligibility</b> flag is included and set to 'true', the call response will include a <b>QualifiesForSelling</b> flag which indicates if the eBay user is eligible to sell on eBay, and a
     * <b>IncludeFeatureEligibility</b> container which indicates which selling features are available to the user.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeFeatureEligibility = null;
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
    public function __construct(?string $itemID = null, ?string $userID = null, ?bool $includeExpressRequirements = null, ?bool $includeFeatureEligibility = null)
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
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetUserRequestType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\GetUserRequestType
     */
    public function setUserID(?string $userID = null): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        
        return $this;
    }
    /**
     * Get IncludeExpressRequirements value
     * @return bool|null
     */
    public function getIncludeExpressRequirements(): ?bool
    {
        return $this->IncludeExpressRequirements;
    }
    /**
     * Set IncludeExpressRequirements value
     * @param bool $includeExpressRequirements
     * @return \macropage\ebaysdk\trading\StructType\GetUserRequestType
     */
    public function setIncludeExpressRequirements(?bool $includeExpressRequirements = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeExpressRequirements) && !is_bool($includeExpressRequirements)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeExpressRequirements, true), gettype($includeExpressRequirements)), __LINE__);
        }
        $this->IncludeExpressRequirements = $includeExpressRequirements;
        
        return $this;
    }
    /**
     * Get IncludeFeatureEligibility value
     * @return bool|null
     */
    public function getIncludeFeatureEligibility(): ?bool
    {
        return $this->IncludeFeatureEligibility;
    }
    /**
     * Set IncludeFeatureEligibility value
     * @param bool $includeFeatureEligibility
     * @return \macropage\ebaysdk\trading\StructType\GetUserRequestType
     */
    public function setIncludeFeatureEligibility(?bool $includeFeatureEligibility = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeFeatureEligibility) && !is_bool($includeFeatureEligibility)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeFeatureEligibility, true), gettype($includeFeatureEligibility)), __LINE__);
        }
        $this->IncludeFeatureEligibility = $includeFeatureEligibility;
        
        return $this;
    }
}
