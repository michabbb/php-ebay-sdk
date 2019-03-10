<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by various <b>Get</b> calls, including <b>GetItem</b> and <b>GetOrders</b>. Only the order management calls return the <b>BuyerTaxIdentifier</b> container, and each call that uses <b>BuyerType</b> uses the
 * <b>ShippingAddress</b> container a little differently.
 * @subpackage Structs
 */
class BuyerType extends AbstractStructBase
{
    /**
     * The ShippingAddress
     * Meta informations extracted from the WSDL
     * - documentation: This container uses <b>AddressType</b>, and each call that uses <b>BuyerType</b> uses the <b>ShippingAddress</b> container a little differently. See the Call Reference documentation for each call to see what fields of
     * <b>AddressType</b> are used by each call. Output only.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $ShippingAddress;
    /**
     * The BuyerTaxIdentifier
     * Meta informations extracted from the WSDL
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
    public $BuyerTaxIdentifier;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyerType
     * @uses BuyerType::setShippingAddress()
     * @uses BuyerType::setBuyerTaxIdentifier()
     * @uses BuyerType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null, array $buyerTaxIdentifier = array(), \DOMDocument $any = null)
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
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $shippingAddress
     * @return \macropage\ebaysdk\trading\StructType\BuyerType
     */
    public function setShippingAddress(\macropage\ebaysdk\trading\StructType\AddressType $shippingAddress = null)
    {
        $this->ShippingAddress = $shippingAddress;
        return $this;
    }
    /**
     * Get BuyerTaxIdentifier value
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType[]|null
     */
    public function getBuyerTaxIdentifier()
    {
        return $this->BuyerTaxIdentifier;
    }
    /**
     * Set BuyerTaxIdentifier value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType[] $buyerTaxIdentifier
     * @return \macropage\ebaysdk\trading\StructType\BuyerType
     */
    public function setBuyerTaxIdentifier(array $buyerTaxIdentifier = array())
    {
        foreach ($buyerTaxIdentifier as $buyerTypeBuyerTaxIdentifierItem) {
            // validation for constraint: itemType
            if (!$buyerTypeBuyerTaxIdentifierItem instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierType) {
                throw new \InvalidArgumentException(sprintf('The BuyerTaxIdentifier property can only contain items of \macropage\ebaysdk\trading\StructType\TaxIdentifierType, "%s" given', is_object($buyerTypeBuyerTaxIdentifierItem) ? get_class($buyerTypeBuyerTaxIdentifierItem) : gettype($buyerTypeBuyerTaxIdentifierItem)), __LINE__);
            }
        }
        $this->BuyerTaxIdentifier = $buyerTaxIdentifier;
        return $this;
    }
    /**
     * Add item to BuyerTaxIdentifier value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierType $item
     * @return \macropage\ebaysdk\trading\StructType\BuyerType
     */
    public function addToBuyerTaxIdentifier(\macropage\ebaysdk\trading\StructType\TaxIdentifierType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierType) {
            throw new \InvalidArgumentException(sprintf('The BuyerTaxIdentifier property can only contain items of \macropage\ebaysdk\trading\StructType\TaxIdentifierType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BuyerTaxIdentifier[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BuyerType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerType
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerType
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
