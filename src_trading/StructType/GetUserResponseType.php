<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response of the <b>GetUser</b> call. This response includes detailed information about the user, including Feedback data, eBay registration date, selling feature eligibility, valid subsriptions, etc.
 * @subpackage Structs
 */
class GetUserResponseType extends AbstractResponseType
{
    /**
     * The User
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of detailed information about the user specified in the call request (through the <b>UserID</b> field) or the eBay user account that is tied to the <strong>eBayAuthToken</strong> value that is passed in the
     * call request. <br><br> Some sensitive data will be masked/omitted if the returned eBay user is not the person making the <b>GetUser</b> call. More information on another eBay user will be revealed to the person making the call if that person has an
     * order relationship for an eBay listing specified in the <strong>ItemID</strong> field of the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType
     */
    public $User;
    /**
     * Constructor method for GetUserResponseType
     * @uses GetUserResponseType::setUser()
     * @param \macropage\ebaysdk\trading\StructType\UserType $user
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\UserType $user = null)
    {
        $this
            ->setUser($user);
    }
    /**
     * Get User value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getUser()
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \macropage\ebaysdk\trading\StructType\UserType $user
     * @return \macropage\ebaysdk\trading\StructType\GetUserResponseType
     */
    public function setUser(\macropage\ebaysdk\trading\StructType\UserType $user = null)
    {
        $this->User = $user;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetUserResponseType
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
