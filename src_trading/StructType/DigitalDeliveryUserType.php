<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DigitalDeliveryUserType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to provide the name and email of both the purchaser of a digital gift card, and the recipient of the digital gift card.
 * @subpackage Structs
 */
class DigitalDeliveryUserType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: This field displays the actual name (not the eBay user ID) of the sender/purchaser of the digital gift card (applicable for the <strong>Sender</strong> container) or the actual name of the recipient of the digital gift card
     * (applicable for the <strong>Recipient</strong> container). Both the sender and recipient name is provided by the purchaser of the digital gift card at time of purchase. <br><br> <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019
     * or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of
     * <code>Unavailable</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: This field displays the email address of the sender/purchaser of the digital gift card (applicable for the <strong>Sender</strong> container) or the email address of the recipient of the digital gift card (applicable for the
     * <strong>Recipient</strong> container). Both the sender and recipient email address is provided by the purchaser of the digital gift card at time of purchase. <br><br> <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above,
     * this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of
     * <code>Unavailable</code> will be returned to all third parties.
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DigitalDeliveryUserType
     * @uses DigitalDeliveryUserType::setName()
     * @uses DigitalDeliveryUserType::setEmail()
     * @uses DigitalDeliveryUserType::setAny()
     * @param string $name
     * @param string $email
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $email = null, \DOMDocument $any = null)
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
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
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
     * @return \macropage\ebaysdk\trading\StructType\DigitalDeliveryUserType
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
