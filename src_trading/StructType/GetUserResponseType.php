<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <b>GetUser</b> call. This response includes detailed information about the user, including Feedback data, eBay registration date, selling feature eligibility, valid subsriptions, etc.
 * @subpackage Structs
 */
class GetUserResponseType extends AbstractResponseType
{
    /**
     * The User
     * Meta information extracted from the WSDL
     * - documentation: This container consists of detailed information about the user specified in the call request (through the <b>UserID</b> field) or the eBay user account that is tied to the <strong>eBayAuthToken</strong> value that is passed in the
     * call request. <br><br> Some sensitive data will be masked/omitted if the returned eBay user is not the person making the <b>GetUser</b> call. More information on another eBay user will be revealed to the person making the call if that person has an
     * order relationship for an eBay listing specified in the <strong>ItemID</strong> field of the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserType $User = null;
    /**
     * Constructor method for GetUserResponseType
     * @uses GetUserResponseType::setUser()
     * @param \macropage\ebaysdk\trading\StructType\UserType $user
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\UserType $user = null)
    {
        $this
            ->setUser($user);
    }
    /**
     * Get User value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getUser(): ?\macropage\ebaysdk\trading\StructType\UserType
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \macropage\ebaysdk\trading\StructType\UserType $user
     * @return \macropage\ebaysdk\trading\StructType\GetUserResponseType
     */
    public function setUser(?\macropage\ebaysdk\trading\StructType\UserType $user = null): self
    {
        $this->User = $user;
        
        return $this;
    }
}
