<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DigitalDeliveryUserType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide the name and email of both the purchaser of a digital gift card, and the recipient of the digital gift card.
 * @subpackage Structs
 */
class DigitalDeliveryUserType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This field displays the actual name (not the eBay user ID) of the sender/purchaser of the digital gift card (applicable for the <strong>Sender</strong> container) or the actual name of the recipient of the digital gift card
     * (applicable for the <strong>Recipient</strong> container). Both the sender and recipient name is provided by the purchaser of the digital gift card at time of purchase. <br><br> <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019
     * or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of
     * <code>Unavailable</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - documentation: This field displays the email address of the sender/purchaser of the digital gift card (applicable for the <strong>Sender</strong> container) or the email address of the recipient of the digital gift card (applicable for the
     * <strong>Recipient</strong> container). Both the sender and recipient email address is provided by the purchaser of the digital gift card at time of purchase. <br><br> <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above,
     * this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of
     * <code>Unavailable</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DigitalDeliveryUserType
     * @uses DigitalDeliveryUserType::setName()
     * @uses DigitalDeliveryUserType::setEmail()
     * @uses DigitalDeliveryUserType::setAny()
     * @param string $name
     * @param string $email
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?string $email = null, $any = null)
    {
        $this
            ->setName($name)
            ->setEmail($email)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
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
