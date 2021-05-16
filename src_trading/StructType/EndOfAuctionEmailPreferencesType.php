<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndOfAuctionEmailPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the seller's preferences for the email that can be sent to the winner of an auction listing.
 * @subpackage Structs
 */
class EndOfAuctionEmailPreferencesType extends AbstractStructBase
{
    /**
     * The TemplateText
     * Meta information extracted from the WSDL
     * - documentation: The seller can customize the text of the email that is sent to the winner of an auction listing. The text of the email is provided in this field. If the seller is going to customize the text of the email through this field, the
     * seller must also include the <b>TextCustomized</b> field and set its value to <code>true</code>.The text of the custom message for the email. <br> <br> This field is only returned if set for the account.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TemplateText = null;
    /**
     * The LogoURL
     * Meta information extracted from the WSDL
     * - documentation: The seller can include a customized logo in the email that is sent to the winner of an auction listing. The full URI to this logo image should be applied in this field. If the seller is going to include a customized logo in the email
     * through this field, the seller must also include the <b>LogoCustomized</b> field and set its value to <code>true</code>, and include the <b>LogoType</b> field and set its value to <code>Customized</code>. <br> <br> This field is only returned if a
     * customized logo is being used for the customized email.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogoURL = null;
    /**
     * The LogoType
     * Meta information extracted from the WSDL
     * - documentation: This field is needed in the <b>SetUserPreferences</b> call if the seller would like to use a customized or eBay Store logo. If the seller would like to use a customized logo, this field's value will be set to <code>Customized</code>.
     * If the seller would like to use their eBay Store logo (if it exists), this field's value will be set to <code>Store</code>. <br> <br> This field is always returned, and its value will be <code>None</code> if no logo is used in the customized email.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogoType = null;
    /**
     * The EmailCustomized
     * Meta information extracted from the WSDL
     * - documentation: This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether a customized email will be sent to the winning bidder or not. <br> <br> This field is always returned to indicate whether or not a customized
     * email will be sent to the winning bidder.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EmailCustomized = null;
    /**
     * The TextCustomized
     * Meta information extracted from the WSDL
     * - documentation: This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether customized text will be used or not in the customized email that is sent to the winning bidder. Customized text is provided through the
     * <b>LogoURL</b> field. <br> <br> This field is always returned to indicate whether or not customized text is used in a customized email that is sent to the winning bidder.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $TextCustomized = null;
    /**
     * The LogoCustomized
     * Meta information extracted from the WSDL
     * - documentation: This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether a customized logo will be used or not in the customized email that is sent to the winning bidder. The URI to a customized logo is provided
     * through the <b>TemplateText</b> field. If the seller would like to use a customized logo, the <b>LogoType</b> field must also be included, and its value will be set to <code>Customized</code>. <br> <br> This field is always returned to indicate
     * whether or not a customized logo is used in a customized email that is sent to the winning bidder.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LogoCustomized = null;
    /**
     * The CopyEmail
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CopyEmail = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for EndOfAuctionEmailPreferencesType
     * @uses EndOfAuctionEmailPreferencesType::setTemplateText()
     * @uses EndOfAuctionEmailPreferencesType::setLogoURL()
     * @uses EndOfAuctionEmailPreferencesType::setLogoType()
     * @uses EndOfAuctionEmailPreferencesType::setEmailCustomized()
     * @uses EndOfAuctionEmailPreferencesType::setTextCustomized()
     * @uses EndOfAuctionEmailPreferencesType::setLogoCustomized()
     * @uses EndOfAuctionEmailPreferencesType::setCopyEmail()
     * @uses EndOfAuctionEmailPreferencesType::setAny()
     * @param string $templateText
     * @param string $logoURL
     * @param string $logoType
     * @param bool $emailCustomized
     * @param bool $textCustomized
     * @param bool $logoCustomized
     * @param bool $copyEmail
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $templateText = null, ?string $logoURL = null, ?string $logoType = null, ?bool $emailCustomized = null, ?bool $textCustomized = null, ?bool $logoCustomized = null, ?bool $copyEmail = null, $any = null)
    {
        $this
            ->setTemplateText($templateText)
            ->setLogoURL($logoURL)
            ->setLogoType($logoType)
            ->setEmailCustomized($emailCustomized)
            ->setTextCustomized($textCustomized)
            ->setLogoCustomized($logoCustomized)
            ->setCopyEmail($copyEmail)
            ->setAny($any);
    }
    /**
     * Get TemplateText value
     * @return string|null
     */
    public function getTemplateText(): ?string
    {
        return $this->TemplateText;
    }
    /**
     * Set TemplateText value
     * @param string $templateText
     * @return \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType
     */
    public function setTemplateText(?string $templateText = null): self
    {
        // validation for constraint: string
        if (!is_null($templateText) && !is_string($templateText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateText, true), gettype($templateText)), __LINE__);
        }
        $this->TemplateText = $templateText;
        
        return $this;
    }
    /**
     * Get LogoURL value
     * @return string|null
     */
    public function getLogoURL(): ?string
    {
        return $this->LogoURL;
    }
    /**
     * Set LogoURL value
     * @param string $logoURL
     * @return \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType
     */
    public function setLogoURL(?string $logoURL = null): self
    {
        // validation for constraint: string
        if (!is_null($logoURL) && !is_string($logoURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logoURL, true), gettype($logoURL)), __LINE__);
        }
        $this->LogoURL = $logoURL;
        
        return $this;
    }
    /**
     * Get LogoType value
     * @return string|null
     */
    public function getLogoType(): ?string
    {
        return $this->LogoType;
    }
    /**
     * Set LogoType value
     * @uses \macropage\ebaysdk\trading\EnumType\EndOfAuctionLogoTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EndOfAuctionLogoTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $logoType
     * @return \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType
     */
    public function setLogoType(?string $logoType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EndOfAuctionLogoTypeCodeType::valueIsValid($logoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\EndOfAuctionLogoTypeCodeType', is_array($logoType) ? implode(', ', $logoType) : var_export($logoType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\EndOfAuctionLogoTypeCodeType::getValidValues())), __LINE__);
        }
        $this->LogoType = $logoType;
        
        return $this;
    }
    /**
     * Get EmailCustomized value
     * @return bool|null
     */
    public function getEmailCustomized(): ?bool
    {
        return $this->EmailCustomized;
    }
    /**
     * Set EmailCustomized value
     * @param bool $emailCustomized
     * @return \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType
     */
    public function setEmailCustomized(?bool $emailCustomized = null): self
    {
        // validation for constraint: boolean
        if (!is_null($emailCustomized) && !is_bool($emailCustomized)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emailCustomized, true), gettype($emailCustomized)), __LINE__);
        }
        $this->EmailCustomized = $emailCustomized;
        
        return $this;
    }
    /**
     * Get TextCustomized value
     * @return bool|null
     */
    public function getTextCustomized(): ?bool
    {
        return $this->TextCustomized;
    }
    /**
     * Set TextCustomized value
     * @param bool $textCustomized
     * @return \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType
     */
    public function setTextCustomized(?bool $textCustomized = null): self
    {
        // validation for constraint: boolean
        if (!is_null($textCustomized) && !is_bool($textCustomized)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($textCustomized, true), gettype($textCustomized)), __LINE__);
        }
        $this->TextCustomized = $textCustomized;
        
        return $this;
    }
    /**
     * Get LogoCustomized value
     * @return bool|null
     */
    public function getLogoCustomized(): ?bool
    {
        return $this->LogoCustomized;
    }
    /**
     * Set LogoCustomized value
     * @param bool $logoCustomized
     * @return \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType
     */
    public function setLogoCustomized(?bool $logoCustomized = null): self
    {
        // validation for constraint: boolean
        if (!is_null($logoCustomized) && !is_bool($logoCustomized)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($logoCustomized, true), gettype($logoCustomized)), __LINE__);
        }
        $this->LogoCustomized = $logoCustomized;
        
        return $this;
    }
    /**
     * Get CopyEmail value
     * @return bool|null
     */
    public function getCopyEmail(): ?bool
    {
        return $this->CopyEmail;
    }
    /**
     * Set CopyEmail value
     * @param bool $copyEmail
     * @return \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType
     */
    public function setCopyEmail(?bool $copyEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($copyEmail) && !is_bool($copyEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($copyEmail, true), gettype($copyEmail)), __LINE__);
        }
        $this->CopyEmail = $copyEmail;
        
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
     * @return \macropage\ebaysdk\trading\StructType\EndOfAuctionEmailPreferencesType
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
