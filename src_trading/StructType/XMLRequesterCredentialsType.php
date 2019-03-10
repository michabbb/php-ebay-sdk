<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XMLRequesterCredentialsType StructType
 * @subpackage Structs
 */
class XMLRequesterCredentialsType extends AbstractStructBase
{
    /**
     * The Username
     * Meta informations extracted from the WSDL
     * - documentation: eBay user ID (i.e., eBay.com Web site login name) for the user the application is retrieving a token for. This is typically the application's end-user (not the developer).
     * - minOccurs: 0
     * @var string
     */
    public $Username;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - documentation: Password for the user specified in Username.
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * The eBayAuthToken
     * Meta informations extracted from the WSDL
     * - documentation: Authentication token representing the user who is making the request. The user's token must be retrieved from eBay. To determine a user's authentication token, see the Authentication and Authorization information in the eBay Web
     * Services guide. For calls that list or retrieve item or transaction data, the user usually needs to be the seller of the item in question or, in some cases, the buyer. Similarly, calls that retrieve user or account data may be restricted to the user
     * whose data is being requested. The documentation for each call includes information about such restrictions.
     * - minOccurs: 0
     * @var string
     */
    public $eBayAuthToken;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for XMLRequesterCredentialsType
     * @uses XMLRequesterCredentialsType::setUsername()
     * @uses XMLRequesterCredentialsType::setPassword()
     * @uses XMLRequesterCredentialsType::setEBayAuthToken()
     * @uses XMLRequesterCredentialsType::setAny()
     * @param string $username
     * @param string $password
     * @param string $eBayAuthToken
     * @param \DOMDocument $any
     */
    public function __construct($username = null, $password = null, $eBayAuthToken = null, \DOMDocument $any = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setEBayAuthToken($eBayAuthToken)
            ->setAny($any);
    }
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $username
     * @return \macropage\ebaysdk\trading\StructType\XMLRequesterCredentialsType
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($username)), __LINE__);
        }
        $this->Username = $username;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \macropage\ebaysdk\trading\StructType\XMLRequesterCredentialsType
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get eBayAuthToken value
     * @return string|null
     */
    public function getEBayAuthToken()
    {
        return $this->eBayAuthToken;
    }
    /**
     * Set eBayAuthToken value
     * @param string $eBayAuthToken
     * @return \macropage\ebaysdk\trading\StructType\XMLRequesterCredentialsType
     */
    public function setEBayAuthToken($eBayAuthToken = null)
    {
        // validation for constraint: string
        if (!is_null($eBayAuthToken) && !is_string($eBayAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eBayAuthToken)), __LINE__);
        }
        $this->eBayAuthToken = $eBayAuthToken;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\XMLRequesterCredentialsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\XMLRequesterCredentialsType
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
     * @return \macropage\ebaysdk\trading\StructType\XMLRequesterCredentialsType
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
