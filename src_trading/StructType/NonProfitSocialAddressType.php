<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonProfitSocialAddressType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>NonProfitSocialAddress</b> container, which identifies the nonprofit organization's social networking site account ID. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the
 * charity organization is associated with.
 * @subpackage Structs
 */
class NonProfitSocialAddressType extends AbstractStructBase
{
    /**
     * The SocialAddressType
     * Meta information extracted from the WSDL
     * - documentation: Enumeration value that indicates the social networking site that the nonprofit charity organization is associated with. This is a required field for each social networking account associated with the nonprofit organization.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SocialAddressType = null;
    /**
     * The SocialAddressId
     * Meta information extracted from the WSDL
     * - documentation: The account ID/handle associated with the nonprofit charity organization's social networking site. This is a required field for each social networking account associated with the nonprofit organization.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SocialAddressId = null;
    /**
     * Constructor method for NonProfitSocialAddressType
     * @uses NonProfitSocialAddressType::setSocialAddressType()
     * @uses NonProfitSocialAddressType::setSocialAddressId()
     * @param string $socialAddressType
     * @param string $socialAddressId
     */
    public function __construct(?string $socialAddressType = null, ?string $socialAddressId = null)
    {
        $this
            ->setSocialAddressType($socialAddressType)
            ->setSocialAddressId($socialAddressId);
    }
    /**
     * Get SocialAddressType value
     * @return string|null
     */
    public function getSocialAddressType(): ?string
    {
        return $this->SocialAddressType;
    }
    /**
     * Set SocialAddressType value
     * @uses \macropage\ebaysdk\trading\EnumType\SocialAddressTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SocialAddressTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $socialAddressType
     * @return \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType
     */
    public function setSocialAddressType(?string $socialAddressType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SocialAddressTypeCodeType::valueIsValid($socialAddressType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SocialAddressTypeCodeType', is_array($socialAddressType) ? implode(', ', $socialAddressType) : var_export($socialAddressType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SocialAddressTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SocialAddressType = $socialAddressType;
        
        return $this;
    }
    /**
     * Get SocialAddressId value
     * @return string|null
     */
    public function getSocialAddressId(): ?string
    {
        return $this->SocialAddressId;
    }
    /**
     * Set SocialAddressId value
     * @param string $socialAddressId
     * @return \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType
     */
    public function setSocialAddressId(?string $socialAddressId = null): self
    {
        // validation for constraint: string
        if (!is_null($socialAddressId) && !is_string($socialAddressId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($socialAddressId, true), gettype($socialAddressId)), __LINE__);
        }
        $this->SocialAddressId = $socialAddressId;
        
        return $this;
    }
}
