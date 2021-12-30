<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerAccountDashboardType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerAccount</b> container returned in the <b>GetSellerDashboard</b> response.
 * @subpackage Structs
 */
class SellerAccountDashboardType extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the status of your seller's account. Specifically, you'll find out if your account is current and active, or if your account has a past due balance or is on hold. For more details about your account, you can go
     * to your Seller Account page on the eBay site (login to My eBay), or you can call <b>GetAccount</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Alert
     * Meta information extracted from the WSDL
     * - documentation: The <b>SellerAccount.Alert</b> container is only returned if eBay has posted one or more informational or warning messages to the seller's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[]
     */
    protected ?array $Alert = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellerAccountDashboardType
     * @uses SellerAccountDashboardType::setStatus()
     * @uses SellerAccountDashboardType::setAlert()
     * @uses SellerAccountDashboardType::setAny()
     * @param string $status
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[] $alert
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $status = null, ?array $alert = null, $any = null)
    {
        $this
            ->setStatus($status)
            ->setAlert($alert)
            ->setAny($any);
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
     * @uses \macropage\ebaysdk\trading\EnumType\SellerAccountStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellerAccountStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\SellerAccountDashboardType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellerAccountStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellerAccountStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellerAccountStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Alert value
     * @return \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[]
     */
    public function getAlert(): ?array
    {
        return $this->Alert;
    }
    /**
     * This method is responsible for validating the values passed to the setAlert method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlert method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlertForArrayConstraintsFromSetAlert(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellerAccountDashboardTypeAlertItem) {
            // validation for constraint: itemType
            if (!$sellerAccountDashboardTypeAlertItem instanceof \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType) {
                $invalidValues[] = is_object($sellerAccountDashboardTypeAlertItem) ? get_class($sellerAccountDashboardTypeAlertItem) : sprintf('%s(%s)', gettype($sellerAccountDashboardTypeAlertItem), var_export($sellerAccountDashboardTypeAlertItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Alert property can only contain items of type \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Alert value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType[] $alert
     * @return \macropage\ebaysdk\trading\StructType\SellerAccountDashboardType
     */
    public function setAlert(?array $alert = null): self
    {
        // validation for constraint: array
        if ('' !== ($alertArrayErrorMessage = self::validateAlertForArrayConstraintsFromSetAlert($alert))) {
            throw new InvalidArgumentException($alertArrayErrorMessage, __LINE__);
        }
        $this->Alert = $alert;
        
        return $this;
    }
    /**
     * Add item to Alert value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $item
     * @return \macropage\ebaysdk\trading\StructType\SellerAccountDashboardType
     */
    public function addToAlert(\macropage\ebaysdk\trading\StructType\SellerDashboardAlertType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType) {
            throw new InvalidArgumentException(sprintf('The Alert property can only contain items of type \macropage\ebaysdk\trading\StructType\SellerDashboardAlertType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Alert[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerAccountDashboardType
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
