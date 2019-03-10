<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MembershipDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>Program</b> container that is returned in the response of the <b>GetUser</b> call if the seller is enrolled in one or more eBay membership programs, such as eBay Plus. The <b>Program</b> container provides the
 * eBay site, program (such as '<code>EBAYPLUS</code>'), and the membership expiration date. <br/><br/> <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers in Germany (DE), but this program is scheduled to come to the
 * Austria and Australia marketplaces in the near future. </span>
 * @subpackage Structs
 */
class MembershipDetailType extends AbstractStructBase
{
    /**
     * The ProgramName
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the name of the membership program, such as <code>EBAYPLUS</code>. This field will always be returned with each <b>Program</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $ProgramName;
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the eBay site for which the seller is enrolled in a membership program. This field will always be returned with each <b>Program</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $Site;
    /**
     * The ExpiryDate
     * Meta informations extracted from the WSDL
     * - documentation: This dateTime value is the expiration date of the seller's membership within the program specified in the <b>ProgramName</b> field. This field will always be returned with each <b>Program</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $ExpiryDate;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MembershipDetailType
     * @uses MembershipDetailType::setProgramName()
     * @uses MembershipDetailType::setSite()
     * @uses MembershipDetailType::setExpiryDate()
     * @uses MembershipDetailType::setAny()
     * @param string $programName
     * @param string $site
     * @param string $expiryDate
     * @param \DOMDocument $any
     */
    public function __construct($programName = null, $site = null, $expiryDate = null, \DOMDocument $any = null)
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
    public function getProgramName()
    {
        return $this->ProgramName;
    }
    /**
     * Set ProgramName value
     * @param string $programName
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailType
     */
    public function setProgramName($programName = null)
    {
        // validation for constraint: string
        if (!is_null($programName) && !is_string($programName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programName)), __LINE__);
        }
        $this->ProgramName = $programName;
        return $this;
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailType
     */
    public function setSite($site = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $site, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Get ExpiryDate value
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->ExpiryDate;
    }
    /**
     * Set ExpiryDate value
     * @param string $expiryDate
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailType
     */
    public function setExpiryDate($expiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryDate)), __LINE__);
        }
        $this->ExpiryDate = $expiryDate;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MembershipDetailType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\MembershipDetailType
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
