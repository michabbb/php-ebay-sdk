<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserContactDetailsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns contact information to a seller for both bidders and users who have made offers (via Best Offer) during an active listing.
 * @subpackage Structs
 */
class GetUserContactDetailsResponseType extends AbstractResponseType
{
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - documentation: An eBay ID that uniquely identifies the given user whose information is given in the call response.
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The ContactAddress
     * Meta informations extracted from the WSDL
     * - documentation: Contact information for the requested contact. Note that the email address is NOT returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $ContactAddress;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - documentation: The date and time that the requested contact registered with eBay.
     * - minOccurs: 0
     * @var string
     */
    public $RegistrationDate;
    /**
     * Constructor method for GetUserContactDetailsResponseType
     * @uses GetUserContactDetailsResponseType::setUserID()
     * @uses GetUserContactDetailsResponseType::setContactAddress()
     * @uses GetUserContactDetailsResponseType::setRegistrationDate()
     * @param string $userID
     * @param \macropage\ebaysdk\trading\StructType\AddressType $contactAddress
     * @param string $registrationDate
     */
    public function __construct($userID = null, \macropage\ebaysdk\trading\StructType\AddressType $contactAddress = null, $registrationDate = null)
    {
        $this
            ->setUserID($userID)
            ->setContactAddress($contactAddress)
            ->setRegistrationDate($registrationDate);
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
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType
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
     * Get ContactAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getContactAddress()
    {
        return $this->ContactAddress;
    }
    /**
     * Set ContactAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $contactAddress
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType
     */
    public function setContactAddress(\macropage\ebaysdk\trading\StructType\AddressType $contactAddress = null)
    {
        $this->ContactAddress = $contactAddress;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return string|null
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param string $registrationDate
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType
     */
    public function setRegistrationDate($registrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($registrationDate) && !is_string($registrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registrationDate)), __LINE__);
        }
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType
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
