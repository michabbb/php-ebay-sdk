<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformanceDashboardType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>Performance</b> container returned in the <b>GetSellerDashboard</b> response. The <b>Performance</b> container consists of the seller's overall selling performance rating on all eBay sites on which the seller is
 * sellling, as well as any alerts related to performance.
 * @subpackage Structs
 */
class PerformanceDashboardType extends AbstractStructBase
{
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - documentation: The eBay site(s) on which the seller's performance is being evaluated. <br /> A seller's performance status is evaluated for three specific regions: US, UK/Ireland, and Germany/Switzerland/Austria. The <b>Site</b> field is repeated
     * to show all sites in each region, if applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Site;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the seller's performance rating. This rating is an overall performance for the eBay site(s) found in the <b>Site</b> field(s).
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Alert
     * Meta informations extracted from the WSDL
     * - documentation: The <b>Performance.Alert</b> container is only returned if eBay has posted one or more informational or warning messages related to the seller's performance rating.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType
     */
    public $Alert;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PerformanceDashboardType
     * @uses PerformanceDashboardType::setSite()
     * @uses PerformanceDashboardType::setStatus()
     * @uses PerformanceDashboardType::setAlert()
     * @uses PerformanceDashboardType::setAny()
     * @param string[] $site
     * @param string $status
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $alert
     * @param \DOMDocument $any
     */
    public function __construct(array $site = array(), $status = null, \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $alert = null, \DOMDocument $any = null)
    {
        $this
            ->setSite($site)
            ->setStatus($status)
            ->setAlert($alert)
            ->setAny($any);
    }
    /**
     * Get Site value
     * @return string[]|null
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
     * @param string[] $site
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
     */
    public function setSite(array $site = array())
    {
        $invalidValues = array();
        foreach ($site as $performanceDashboardTypeSiteItem) {
            if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($performanceDashboardTypeSiteItem)) {
                $invalidValues[] = var_export($performanceDashboardTypeSiteItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Add item to Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
     */
    public function addToSite($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site[] = $item;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\PerformanceStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PerformanceStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PerformanceStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\PerformanceStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Alert value
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType|null
     */
    public function getAlert()
    {
        return $this->Alert;
    }
    /**
     * Set Alert value
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $alert
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
     */
    public function setAlert(\macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $alert = null)
    {
        $this->Alert = $alert;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PerformanceDashboardType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
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
     * @return \macropage\ebaysdk\trading\StructType\PerformanceDashboardType
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
