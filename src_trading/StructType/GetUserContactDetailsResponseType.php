<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserContactDetailsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns contact information to a seller for both bidders and users who have made offers (via Best Offer) during an active listing.
 * @subpackage Structs
 */
class GetUserContactDetailsResponseType extends AbstractResponseType
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: An eBay ID that uniquely identifies the given user whose information is given in the call response.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The ContactAddress
     * Meta information extracted from the WSDL
     * - documentation: Contact information for the requested contact. Note that the email address is NOT returned.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $ContactAddress = null;
    /**
     * The RegistrationDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that the requested contact registered with eBay.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RegistrationDate = null;
    /**
     * Constructor method for GetUserContactDetailsResponseType
     * @uses GetUserContactDetailsResponseType::setUserID()
     * @uses GetUserContactDetailsResponseType::setContactAddress()
     * @uses GetUserContactDetailsResponseType::setRegistrationDate()
     * @param string $userID
     * @param \macropage\ebaysdk\trading\StructType\AddressType $contactAddress
     * @param string $registrationDate
     */
    public function __construct(?string $userID = null, ?\macropage\ebaysdk\trading\StructType\AddressType $contactAddress = null, ?string $registrationDate = null)
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
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType
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
     * Get ContactAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getContactAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->ContactAddress;
    }
    /**
     * Set ContactAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $contactAddress
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType
     */
    public function setContactAddress(?\macropage\ebaysdk\trading\StructType\AddressType $contactAddress = null): self
    {
        $this->ContactAddress = $contactAddress;
        
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return string|null
     */
    public function getRegistrationDate(): ?string
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param string $registrationDate
     * @return \macropage\ebaysdk\trading\StructType\GetUserContactDetailsResponseType
     */
    public function setRegistrationDate(?string $registrationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($registrationDate) && !is_string($registrationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationDate, true), gettype($registrationDate)), __LINE__);
        }
        $this->RegistrationDate = $registrationDate;
        
        return $this;
    }
}
