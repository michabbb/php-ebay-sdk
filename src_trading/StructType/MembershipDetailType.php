<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MembershipDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>Program</b> container that is returned in the response of the <b>GetUser</b> call if the seller is enrolled in one or more eBay membership programs, such as eBay Plus. The <b>Program</b> container provides the
 * eBay site, program (such as '<code>EBAYPLUS</code>'), and the membership expiration date. <br/><br/> <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers on Germany and Australia marketplaces. In Australia, the seller
 * has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus. </span>
 * @subpackage Structs
 */
class MembershipDetailType extends AbstractStructBase
{
    /**
     * The ProgramName
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the name of the membership program, such as <code>EBAYPLUS</code>. This field will always be returned with each <b>Program</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProgramName = null;
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the eBay site for which the seller is enrolled in a membership program. This field will always be returned with each <b>Program</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Site = null;
    /**
     * The ExpiryDate
     * Meta information extracted from the WSDL
     * - documentation: This dateTime value is the expiration date of the seller's membership within the program specified in the <b>ProgramName</b> field. This field will always be returned with each <b>Program</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpiryDate = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MembershipDetailType
     * @uses MembershipDetailType::setProgramName()
     * @uses MembershipDetailType::setSite()
     * @uses MembershipDetailType::setExpiryDate()
     * @uses MembershipDetailType::setAny()
     * @param string $programName
     * @param string $site
     * @param string $expiryDate
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $programName = null, ?string $site = null, ?string $expiryDate = null, $any = null)
    {
        $this
            ->setProgramName($programName)
            ->setSite($site)
            ->setExpiryDate($expiryDate)
            ->setAny($any);
    }
    /**
     * Get ProgramName value
     * @return string|null
     */
    public function getProgramName(): ?string
    {
        return $this->ProgramName;
    }
    /**
     * Set ProgramName value
     * @param string $programName
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailType
     */
    public function setProgramName(?string $programName = null): self
    {
        // validation for constraint: string
        if (!is_null($programName) && !is_string($programName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($programName, true), gettype($programName)), __LINE__);
        }
        $this->ProgramName = $programName;
        
        return $this;
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite(): ?string
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailType
     */
    public function setSite(?string $site = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SiteCodeType', is_array($site) ? implode(', ', $site) : var_export($site, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        
        return $this;
    }
    /**
     * Get ExpiryDate value
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->ExpiryDate;
    }
    /**
     * Set ExpiryDate value
     * @param string $expiryDate
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailType
     */
    public function setExpiryDate(?string $expiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryDate, true), gettype($expiryDate)), __LINE__);
        }
        $this->ExpiryDate = $expiryDate;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailType
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
