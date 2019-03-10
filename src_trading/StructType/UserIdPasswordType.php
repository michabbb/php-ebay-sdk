<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserIdPasswordType StructType
 * @subpackage Structs
 */
class UserIdPasswordType extends AbstractStructBase
{
    /**
     * The AppId
     * Meta informations extracted from the WSDL
     * - documentation: The application ID that is unique to each application you (or your company) has registered with the eBay Developers Program. If you are executing a call in the Sandbox, this is the "AppId" value that eBay issued to you when you
     * received your Sandbox keys. If you are executing a call in Production, this is the "AppId" value that eBay issued to you when you received your Production keys.
     * - minOccurs: 0
     * @var string
     */
    public $AppId;
    /**
     * The DevId
     * Meta informations extracted from the WSDL
     * - documentation: The unique developer ID that the eBay Developers Program issued to you (or your company). If you are executing a call in the Sandbox, this is the "DevId" value that eBay issued to you when you received your Sandbox keys. Typically,
     * you receive your Sandbox keys when you register as a new developer. If you are executing a call in Production, this is the "DevId" value that eBay issued to you when you received your Production keys. Typically, you receive your Production keys when
     * you certify an application.
     * - minOccurs: 0
     * @var string
     */
    public $DevId;
    /**
     * The AuthCert
     * Meta informations extracted from the WSDL
     * - documentation: Authentication certificate that authenticates the application when making API calls. If you are executing a call in the Sandbox, this is the "CertId" value that eBay issued to you when you received your Sandbox keys. If you are
     * executing a call in Production, this is the "CertId" value that eBay issued to you when you received your Production keys. This is unrelated to auth tokens.
     * - minOccurs: 0
     * @var string
     */
    public $AuthCert;
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
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UserIdPasswordType
     * @uses UserIdPasswordType::setAppId()
     * @uses UserIdPasswordType::setDevId()
     * @uses UserIdPasswordType::setAuthCert()
     * @uses UserIdPasswordType::setUsername()
     * @uses UserIdPasswordType::setPassword()
     * @uses UserIdPasswordType::setAny()
     * @param string $appId
     * @param string $devId
     * @param string $authCert
     * @param string $username
     * @param string $password
     * @param \DOMDocument $any
     */
    public function __construct($appId = null, $devId = null, $authCert = null, $username = null, $password = null, \DOMDocument $any = null)
    {
        $this
            ->setAppId($appId)
            ->setDevId($devId)
            ->setAuthCert($authCert)
            ->setUsername($username)
            ->setPassword($password)
            ->setAny($any);
    }
    /**
     * Get AppId value
     * @return string|null
     */
    public function getAppId()
    {
        return $this->AppId;
    }
    /**
     * Set AppId value
     * @param string $appId
     * @return \macropage\ebaysdk\trading\StructType\UserIdPasswordType
     */
    public function setAppId($appId = null)
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appId)), __LINE__);
        }
        $this->AppId = $appId;
        return $this;
    }
    /**
     * Get DevId value
     * @return string|null
     */
    public function getDevId()
    {
        return $this->DevId;
    }
    /**
     * Set DevId value
     * @param string $devId
     * @return \macropage\ebaysdk\trading\StructType\UserIdPasswordType
     */
    public function setDevId($devId = null)
    {
        // validation for constraint: string
        if (!is_null($devId) && !is_string($devId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($devId)), __LINE__);
        }
        $this->DevId = $devId;
        return $this;
    }
    /**
     * Get AuthCert value
     * @return string|null
     */
    public function getAuthCert()
    {
        return $this->AuthCert;
    }
    /**
     * Set AuthCert value
     * @param string $authCert
     * @return \macropage\ebaysdk\trading\StructType\UserIdPasswordType
     */
    public function setAuthCert($authCert = null)
    {
        // validation for constraint: string
        if (!is_null($authCert) && !is_string($authCert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authCert)), __LINE__);
        }
        $this->AuthCert = $authCert;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\UserIdPasswordType
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
     * @return \macropage\ebaysdk\trading\StructType\UserIdPasswordType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\UserIdPasswordType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\UserIdPasswordType
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
     * @return \macropage\ebaysdk\trading\StructType\UserIdPasswordType
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
