<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformanceDashboardType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Performance</b> container returned in the <b>GetSellerDashboard</b> response. The <b>Performance</b> container consists of the seller's overall selling performance rating on all eBay sites on which the seller is
 * sellling, as well as any alerts related to performance.
 * @subpackage Structs
 */
class PerformanceDashboardType extends AbstractStructBase
{
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: The eBay site(s) on which the seller's performance is being evaluated. <br /> A seller's performance status is evaluated for three specific regions: US, UK/Ireland, and Germany/Switzerland/Austria. The <b>Site</b> field is repeated
     * to show all sites in each region, if applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Site = [];
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the seller's performance rating. This rating is an overall performance for the eBay site(s) found in the <b>Site</b> field(s).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Alert
     * Meta information extracted from the WSDL
     * - documentation: The <b>Performance.Alert</b> container is only returned if eBay has posted one or more informational or warning messages related to the seller's performance rating.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $Alert = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PerformanceDashboardType
     * @uses PerformanceDashboardType::setSite()
     * @uses PerformanceDashboardType::setStatus()
     * @uses PerformanceDashboardType::setAlert()
     * @uses PerformanceDashboardType::setAny()
     * @param string[] $site
     * @param string $status
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $alert
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $site = [], ?string $status = null, ?\macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $alert = null, $any = null)
    {
        $this
            ->setSite($site)
            ->setStatus($status)
            ->setAlert($alert)
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
        foreach ($values as $performanceDashboardTypeSiteItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($performanceDashboardTypeSiteItem)) {
                $invalidValues[] = is_object($performanceDashboardTypeSiteItem) ? get_class($performanceDashboardTypeSiteItem) : sprintf('%s(%s)', gettype($performanceDashboardTypeSiteItem), var_export($performanceDashboardTypeSiteItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
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
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
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
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\PerformanceStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PerformanceStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PerformanceStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PerformanceStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PerformanceStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Alert value
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType|null
     */
    public function getAlert(): ?\macropage\ebaysdk\trading\StructType\SellerDashboardAlertType
    {
        return $this->Alert;
    }
    /**
     * Set Alert value
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $alert
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
     */
    public function setAlert(?\macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $alert = null): self
    {
        $this->Alert = $alert;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
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
