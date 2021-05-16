<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecoupmentPolicyConsentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <strong>RecoupmentPolicyConsent</strong> container that is returned in the <strong>GetItem</strong> call response to indicate which sites the user (specified in <strong>UserID</strong> field of call request) has
 * signed a cross-border trade Recoupment Policy Agreement.
 * @subpackage Structs
 */
class RecoupmentPolicyConsentType extends AbstractStructBase
{
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an eBay site. Each site where the user (specified in <strong>UserID</strong> field of call request) has signed a cross-border trade Recoupment Policy Agreement is returned. The enumeration values that
     * represent these eBay sites can be found in <strong>SiteCodeType</strong>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Site = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RecoupmentPolicyConsentType
     * @uses RecoupmentPolicyConsentType::setSite()
     * @uses RecoupmentPolicyConsentType::setAny()
     * @param string[] $site
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $site = [], $any = null)
    {
        $this
            ->setSite($site)
            ->setAny($any);
    }
    /**
     * Get Site value
     * @return string[]
     */
    public function getSite(): array
    {
        return $this->Site;
    }
    /**
     * This method is responsible for validating the values passed to the setSite method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSite method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSiteForArrayConstraintsFromSetSite(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recoupmentPolicyConsentTypeSiteItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($recoupmentPolicyConsentTypeSiteItem)) {
                $invalidValues[] = is_object($recoupmentPolicyConsentTypeSiteItem) ? get_class($recoupmentPolicyConsentTypeSiteItem) : sprintf('%s(%s)', gettype($recoupmentPolicyConsentTypeSiteItem), var_export($recoupmentPolicyConsentTypeSiteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SiteCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $site
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType
     */
    public function setSite(array $site = []): self
    {
        // validation for constraint: array
        if ('' !== ($siteArrayErrorMessage = self::validateSiteForArrayConstraintsFromSetSite($site))) {
            throw new InvalidArgumentException($siteArrayErrorMessage, __LINE__);
        }
        $this->Site = $site;
        
        return $this;
    }
    /**
     * Add item to Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType
     */
    public function addToSite(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SiteCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType
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
