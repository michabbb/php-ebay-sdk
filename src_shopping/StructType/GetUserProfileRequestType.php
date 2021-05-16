<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserProfileRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves user information based on the eBay user ID you specify. The response contains detailed information about a user. You can specify the types of user information you want in the response.
 * @subpackage Structs
 */
class GetUserProfileRequestType extends AbstractRequestType
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: An eBay user ID is input into this field to retrieve information about that eBay user.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The IncludeSelector
     * Meta information extracted from the WSDL
     * - documentation: This inclusive filter is included to control the amount and type of user data that is retrieved. <br> <br> If you don't include this field, a default set of fields is returned. Click the <b>Detail Controls</b> link below and see the
     * <b>none</b> column in that table to see the fields that are returned when no <b>IncludeSelector</b> value is used. <br> <br> To retrieve more data than just the default fields, including detailed Feedback data, the <b>IncludeSelector</b> field can be
     * included, and one to three values can be specified in this field. If multiple values are specified, each value is separated with a comma (,). The enumeration values that can be specified in the <b>IncludeSelector</b> field are discussed below. <br>
     * <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Including this value as an <b>IncludeSelector</b> value increases the number of fields that are returned under the <b>User</b> container in the response,
     * including fields related to the user's profile page and eBay Store (if applicable). Compare the <b>none</b> and <b>Details</b> columns in the the <b>Detail Controls</b> table to see which additional fields are returned when the <b>Details</b> value
     * is used in the <b>IncludeSelector</b> field.</p> <p class="ename">&bull;&nbsp;&nbsp; FeedbackDetails</p> <p class="edef"> If this value is included as an <b>IncludeSelector</b> value, the user's last five Feedback entries (as buyer or seller) are
     * returned in the response. A separate <b>FeedbackDetails</b> container is returned for each Feedback entry, with detailed information about that Feedback entry. </p> <p class="ename">&bull;&nbsp;&nbsp; FeedbackHistory</p> <p class="edef">If this value
     * is included as an <b>IncludeSelector</b> value, a <b>FeedbackHistory</b> container is returned, and this container consists of detailed Feedback data on the eBay user. See <b>FeedbackHistory</b> container (and its child containers) for more
     * information on the type of data that is returned. </p> <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IncludeSelector = null;
    /**
     * Constructor method for GetUserProfileRequestType
     * @uses GetUserProfileRequestType::setUserID()
     * @uses GetUserProfileRequestType::setIncludeSelector()
     * @param string $userID
     * @param string $includeSelector
     */
    public function __construct(?string $userID = null, ?string $includeSelector = null)
    {
        $this
            ->setUserID($userID)
            ->setIncludeSelector($includeSelector);
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
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileRequestType
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
     * Get IncludeSelector value
     * @return string|null
     */
    public function getIncludeSelector(): ?string
    {
        return $this->IncludeSelector;
    }
    /**
     * Set IncludeSelector value
     * @param string $includeSelector
     * @return \macropage\ebaysdk\shopping\StructType\GetUserProfileRequestType
     */
    public function setIncludeSelector(?string $includeSelector = null): self
    {
        // validation for constraint: string
        if (!is_null($includeSelector) && !is_string($includeSelector)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($includeSelector, true), gettype($includeSelector)), __LINE__);
        }
        $this->IncludeSelector = $includeSelector;
        
        return $this;
    }
}
