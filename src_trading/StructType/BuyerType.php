<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by various <b>Get</b> calls, including <b>GetItem</b> and <b>GetOrders</b>. Only the order management calls return the <b>BuyerTaxIdentifier</b> container, and each call that uses <b>BuyerType</b> uses the
 * <b>ShippingAddress</b> container a little differently.
 * @subpackage Structs
 */
class BuyerType extends AbstractStructBase
{
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - documentation: This container shows the buyer's shipping address. <br> <br> <span class="tablenote"><b>Note:</b> For an Authenticity Guarantee program order returned in <b>GetItemTransactions</b> or <b>GetSellerTransactions</b>, this is the address
     * of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer's shipping address. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $ShippingAddress = null;
    /**
     * The BuyerTaxIdentifier
     * Meta information extracted from the WSDL
     * - documentation: This container consists of taxpayer identification for the buyer. Although this container may be used for other purposes at a later date, it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID
     * of the buyer. <br/><br/> It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site. <br/><br/> On the Spain site, a
     * Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with
     * his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during
     * checkout. <br/><br/> This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> will be returned for each tax ID that is
     * associated with the buyer's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxIdentifierType[]
     */
    protected ?array $BuyerTaxIdentifier = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BuyerType
     * @uses BuyerType::setShippingAddress()
     * @uses BuyerType::setBuyerTaxIdentifier()
     * @uses BuyerType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, ?array $buyerTaxIdentifier = null, $any = null)
    {
        $this
            ->setShippingAddress($shippingAddress)
            ->setBuyerTaxIdentifier($buyerTaxIdentifier)
            ->setAny($any);
    }
    /**
     * Get ShippingAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getShippingAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @return \macropage\ebaysdk\trading\StructType\BuyerType
     */
    public function setShippingAddress(?\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null): self
    {
        $this->ShippingAddress = $shippingAddress;
        
        return $this;
    }
    /**
     * Get BuyerTaxIdentifier value
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType[]
     */
    public function getBuyerTaxIdentifier(): ?array
    {
        return $this->BuyerTaxIdentifier;
    }
    /**
     * This method is responsible for validating the values passed to the setBuyerTaxIdentifier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuyerTaxIdentifier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuyerTaxIdentifierForArrayConstraintsFromSetBuyerTaxIdentifier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $buyerTypeBuyerTaxIdentifierItem) {
            // validation for constraint: itemType
            if (!$buyerTypeBuyerTaxIdentifierItem instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierType) {
                $invalidValues[] = is_object($buyerTypeBuyerTaxIdentifierItem) ? get_class($buyerTypeBuyerTaxIdentifierItem) : sprintf('%s(%s)', gettype($buyerTypeBuyerTaxIdentifierItem), var_export($buyerTypeBuyerTaxIdentifierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BuyerTaxIdentifier property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxIdentifierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BuyerTaxIdentifier value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @return \macropage\ebaysdk\trading\StructType\BuyerType
     */
    public function setBuyerTaxIdentifier(?array $buyerTaxIdentifier = null): self
    {
        // validation for constraint: array
        if ('' !== ($buyerTaxIdentifierArrayErrorMessage = self::validateBuyerTaxIdentifierForArrayConstraintsFromSetBuyerTaxIdentifier($buyerTaxIdentifier))) {
            throw new InvalidArgumentException($buyerTaxIdentifierArrayErrorMessage, __LINE__);
        }
        $this->BuyerTaxIdentifier = $buyerTaxIdentifier;
        
        return $this;
    }
    /**
     * Add item to BuyerTaxIdentifier value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType $item
     * @return \macropage\ebaysdk\trading\StructType\BuyerType
     */
    public function addToBuyerTaxIdentifier(\macropage\ebaysdk\trading\StructType\TaxIdentifierType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierType) {
            throw new InvalidArgumentException(sprintf('The BuyerTaxIdentifier property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxIdentifierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BuyerTaxIdentifier[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerType
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
