<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApiAccessRuleType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ApiAccessRule</b> container that is returned in the <b>GetApiAccessRules</b> call response. An <b>ApiAccessRule</b> container will be returned for every Trading API call that the user/application has used.
 * The <b>ApiAccessRule</b> container consists of hourly, daily, and periodic call limits for the call, the total number of times the call was used, and other information about usage of the call.
 * @subpackage Structs
 */
class ApiAccessRuleType extends AbstractStructBase
{
    /**
     * The CallName
     * Meta information extracted from the WSDL
     * - documentation: The value in this field can be the name of a Trading API call, or it can be <code>ApplicationAggregate</code> (returns totals for all calls), <code>PasswordAuthenticationLimiter</code> (dummy call), or
     * <code>NonUTF8UsageLimiter</code>. All of the other data in the <b>ApiAccessRule</b> container will pertain to this call, including the call limits.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CallName = null;
    /**
     * The CountsTowardAggregate
     * Meta information extracted from the WSDL
     * - documentation: This boolean field will indicate whether or not the use of the call (indicated in <b>CallName</b> field) counts toward the application's aggregate limit for all calls.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CountsTowardAggregate = null;
    /**
     * The DailyHardLimit
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total number of calls per day that the application can make to this call before being blocked. The day starts at midnight, 00:00:00 PST (not GMT).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DailyHardLimit = null;
    /**
     * The DailySoftLimit
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total number of calls per day that the application can make to this call before you receive a warning. The day starts at midnight, 00:00:00 PST.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DailySoftLimit = null;
    /**
     * The DailyUsage
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the number of times that the application has used this call today. The day starts at midnight, 00:00:00 PST.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DailyUsage = null;
    /**
     * The HourlyHardLimit
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total number of calls per hour that the application can make to this call before being blocked. Each count begins at the top of each hour (e.g. 1:00:00).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $HourlyHardLimit = null;
    /**
     * The HourlySoftLimit
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total number of calls per hour that the application can make to this call before you receive a warning. Each count begins at the top of each hour (e.g. 1:00:00).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $HourlySoftLimit = null;
    /**
     * The HourlyUsage
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the number of times that the application has used this call during this hour. Each count begins at the top of each hour (e.g. 1:00:00).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $HourlyUsage = null;
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - documentation: The length of time before your application's periodic usage counter restarts for this call. If the number of calls you make exceeds the periodic hard limit before the current period ends, further calls will be blocked until the next
     * period starts. Possible values: -1 (Periodic limit not enforced, could be any negative integer), 0 (Calendar month), 30 (Number of days, could be any positive integer). If the period is based on the calendar month, the usage counters restart on the
     * same day of every month, regardless of the number of days in the month.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Period = null;
    /**
     * The PeriodicHardLimit
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the number of calls per period that your application may make before a call is blocked, if the periodic limit is enforced. The length of the period is specified in the <b>Period</b> field.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PeriodicHardLimit = null;
    /**
     * The PeriodicSoftLimit
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the number of calls per period that your application may make before receiving a warning, if the periodic limit is enforced. The length of the period is specified in the <b>Period</b> field.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PeriodicSoftLimit = null;
    /**
     * The PeriodicUsage
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the number of times that the application has used this call during this period. <code>0</code> is returned if the periodic access rule has not been configured for the application. The length of the period is
     * specified in <b>Period</b> field and the start date of the period is specified in <b>PeriodicStartDate</b> field.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PeriodicUsage = null;
    /**
     * The PeriodicStartDate
     * Meta information extracted from the WSDL
     * - documentation: This timestamp (in GMT) marks the date and time when the access rule's period started. The period starts at midnight Pacific time. For example, if the period begins on June 29 in 2005 when California is on Pacific Daylight Time, the
     * GMT value returned would be 2005-06-29T07:00:00.000Z If the period begins on December 29 in 2005 when California is on Pacific Standard Time, the GMT value returned would be 2005-12-29T08:00:00.000Z. This field is only returned when the eBay
     * Developers Program has configured the start date for the access rule. The start date can vary per application and per call name.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PeriodicStartDate = null;
    /**
     * The ModTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp marks the date and time when the access rule was last modified by eBay.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModTime = null;
    /**
     * The RuleCurrentStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value will only be returned if a hourly, daily, or periodic hard or soft call limit is exceeded by the application, or if call limits do not apply to the call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RuleCurrentStatus = null;
    /**
     * The RuleStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value will indicate whether the access rule is on or off, or if the application is currently being blocked due to exceeding a hard call limit.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RuleStatus = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ApiAccessRuleType
     * @uses ApiAccessRuleType::setCallName()
     * @uses ApiAccessRuleType::setCountsTowardAggregate()
     * @uses ApiAccessRuleType::setDailyHardLimit()
     * @uses ApiAccessRuleType::setDailySoftLimit()
     * @uses ApiAccessRuleType::setDailyUsage()
     * @uses ApiAccessRuleType::setHourlyHardLimit()
     * @uses ApiAccessRuleType::setHourlySoftLimit()
     * @uses ApiAccessRuleType::setHourlyUsage()
     * @uses ApiAccessRuleType::setPeriod()
     * @uses ApiAccessRuleType::setPeriodicHardLimit()
     * @uses ApiAccessRuleType::setPeriodicSoftLimit()
     * @uses ApiAccessRuleType::setPeriodicUsage()
     * @uses ApiAccessRuleType::setPeriodicStartDate()
     * @uses ApiAccessRuleType::setModTime()
     * @uses ApiAccessRuleType::setRuleCurrentStatus()
     * @uses ApiAccessRuleType::setRuleStatus()
     * @uses ApiAccessRuleType::setAny()
     * @param string $callName
     * @param bool $countsTowardAggregate
     * @param int $dailyHardLimit
     * @param int $dailySoftLimit
     * @param int $dailyUsage
     * @param int $hourlyHardLimit
     * @param int $hourlySoftLimit
     * @param int $hourlyUsage
     * @param int $period
     * @param int $periodicHardLimit
     * @param int $periodicSoftLimit
     * @param int $periodicUsage
     * @param string $periodicStartDate
     * @param string $modTime
     * @param string $ruleCurrentStatus
     * @param string $ruleStatus
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $callName = null, ?bool $countsTowardAggregate = null, ?int $dailyHardLimit = null, ?int $dailySoftLimit = null, ?int $dailyUsage = null, ?int $hourlyHardLimit = null, ?int $hourlySoftLimit = null, ?int $hourlyUsage = null, ?int $period = null, ?int $periodicHardLimit = null, ?int $periodicSoftLimit = null, ?int $periodicUsage = null, ?string $periodicStartDate = null, ?string $modTime = null, ?string $ruleCurrentStatus = null, ?string $ruleStatus = null, $any = null)
    {
        $this
            ->setCallName($callName)
            ->setCountsTowardAggregate($countsTowardAggregate)
            ->setDailyHardLimit($dailyHardLimit)
            ->setDailySoftLimit($dailySoftLimit)
            ->setDailyUsage($dailyUsage)
            ->setHourlyHardLimit($hourlyHardLimit)
            ->setHourlySoftLimit($hourlySoftLimit)
            ->setHourlyUsage($hourlyUsage)
            ->setPeriod($period)
            ->setPeriodicHardLimit($periodicHardLimit)
            ->setPeriodicSoftLimit($periodicSoftLimit)
            ->setPeriodicUsage($periodicUsage)
            ->setPeriodicStartDate($periodicStartDate)
            ->setModTime($modTime)
            ->setRuleCurrentStatus($ruleCurrentStatus)
            ->setRuleStatus($ruleStatus)
            ->setAny($any);
    }
    /**
     * Get CallName value
     * @return string|null
     */
    public function getCallName(): ?string
    {
        return $this->CallName;
    }
    /**
     * Set CallName value
     * @param string $callName
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setCallName(?string $callName = null): self
    {
        // validation for constraint: string
        if (!is_null($callName) && !is_string($callName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callName, true), gettype($callName)), __LINE__);
        }
        $this->CallName = $callName;
        
        return $this;
    }
    /**
     * Get CountsTowardAggregate value
     * @return bool|null
     */
    public function getCountsTowardAggregate(): ?bool
    {
        return $this->CountsTowardAggregate;
    }
    /**
     * Set CountsTowardAggregate value
     * @param bool $countsTowardAggregate
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setCountsTowardAggregate(?bool $countsTowardAggregate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($countsTowardAggregate) && !is_bool($countsTowardAggregate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($countsTowardAggregate, true), gettype($countsTowardAggregate)), __LINE__);
        }
        $this->CountsTowardAggregate = $countsTowardAggregate;
        
        return $this;
    }
    /**
     * Get DailyHardLimit value
     * @return int|null
     */
    public function getDailyHardLimit(): ?int
    {
        return $this->DailyHardLimit;
    }
    /**
     * Set DailyHardLimit value
     * @param int $dailyHardLimit
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setDailyHardLimit(?int $dailyHardLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($dailyHardLimit) && !(is_int($dailyHardLimit) || ctype_digit($dailyHardLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dailyHardLimit, true), gettype($dailyHardLimit)), __LINE__);
        }
        $this->DailyHardLimit = $dailyHardLimit;
        
        return $this;
    }
    /**
     * Get DailySoftLimit value
     * @return int|null
     */
    public function getDailySoftLimit(): ?int
    {
        return $this->DailySoftLimit;
    }
    /**
     * Set DailySoftLimit value
     * @param int $dailySoftLimit
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setDailySoftLimit(?int $dailySoftLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($dailySoftLimit) && !(is_int($dailySoftLimit) || ctype_digit($dailySoftLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dailySoftLimit, true), gettype($dailySoftLimit)), __LINE__);
        }
        $this->DailySoftLimit = $dailySoftLimit;
        
        return $this;
    }
    /**
     * Get DailyUsage value
     * @return int|null
     */
    public function getDailyUsage(): ?int
    {
        return $this->DailyUsage;
    }
    /**
     * Set DailyUsage value
     * @param int $dailyUsage
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setDailyUsage(?int $dailyUsage = null): self
    {
        // validation for constraint: int
        if (!is_null($dailyUsage) && !(is_int($dailyUsage) || ctype_digit($dailyUsage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dailyUsage, true), gettype($dailyUsage)), __LINE__);
        }
        $this->DailyUsage = $dailyUsage;
        
        return $this;
    }
    /**
     * Get HourlyHardLimit value
     * @return int|null
     */
    public function getHourlyHardLimit(): ?int
    {
        return $this->HourlyHardLimit;
    }
    /**
     * Set HourlyHardLimit value
     * @param int $hourlyHardLimit
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setHourlyHardLimit(?int $hourlyHardLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($hourlyHardLimit) && !(is_int($hourlyHardLimit) || ctype_digit($hourlyHardLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hourlyHardLimit, true), gettype($hourlyHardLimit)), __LINE__);
        }
        $this->HourlyHardLimit = $hourlyHardLimit;
        
        return $this;
    }
    /**
     * Get HourlySoftLimit value
     * @return int|null
     */
    public function getHourlySoftLimit(): ?int
    {
        return $this->HourlySoftLimit;
    }
    /**
     * Set HourlySoftLimit value
     * @param int $hourlySoftLimit
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setHourlySoftLimit(?int $hourlySoftLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($hourlySoftLimit) && !(is_int($hourlySoftLimit) || ctype_digit($hourlySoftLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hourlySoftLimit, true), gettype($hourlySoftLimit)), __LINE__);
        }
        $this->HourlySoftLimit = $hourlySoftLimit;
        
        return $this;
    }
    /**
     * Get HourlyUsage value
     * @return int|null
     */
    public function getHourlyUsage(): ?int
    {
        return $this->HourlyUsage;
    }
    /**
     * Set HourlyUsage value
     * @param int $hourlyUsage
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setHourlyUsage(?int $hourlyUsage = null): self
    {
        // validation for constraint: int
        if (!is_null($hourlyUsage) && !(is_int($hourlyUsage) || ctype_digit($hourlyUsage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hourlyUsage, true), gettype($hourlyUsage)), __LINE__);
        }
        $this->HourlyUsage = $hourlyUsage;
        
        return $this;
    }
    /**
     * Get Period value
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @param int $period
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setPeriod(?int $period = null): self
    {
        // validation for constraint: int
        if (!is_null($period) && !(is_int($period) || ctype_digit($period))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($period, true), gettype($period)), __LINE__);
        }
        $this->Period = $period;
        
        return $this;
    }
    /**
     * Get PeriodicHardLimit value
     * @return int|null
     */
    public function getPeriodicHardLimit(): ?int
    {
        return $this->PeriodicHardLimit;
    }
    /**
     * Set PeriodicHardLimit value
     * @param int $periodicHardLimit
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setPeriodicHardLimit(?int $periodicHardLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($periodicHardLimit) && !(is_int($periodicHardLimit) || ctype_digit($periodicHardLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($periodicHardLimit, true), gettype($periodicHardLimit)), __LINE__);
        }
        $this->PeriodicHardLimit = $periodicHardLimit;
        
        return $this;
    }
    /**
     * Get PeriodicSoftLimit value
     * @return int|null
     */
    public function getPeriodicSoftLimit(): ?int
    {
        return $this->PeriodicSoftLimit;
    }
    /**
     * Set PeriodicSoftLimit value
     * @param int $periodicSoftLimit
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setPeriodicSoftLimit(?int $periodicSoftLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($periodicSoftLimit) && !(is_int($periodicSoftLimit) || ctype_digit($periodicSoftLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($periodicSoftLimit, true), gettype($periodicSoftLimit)), __LINE__);
        }
        $this->PeriodicSoftLimit = $periodicSoftLimit;
        
        return $this;
    }
    /**
     * Get PeriodicUsage value
     * @return int|null
     */
    public function getPeriodicUsage(): ?int
    {
        return $this->PeriodicUsage;
    }
    /**
     * Set PeriodicUsage value
     * @param int $periodicUsage
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setPeriodicUsage(?int $periodicUsage = null): self
    {
        // validation for constraint: int
        if (!is_null($periodicUsage) && !(is_int($periodicUsage) || ctype_digit($periodicUsage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($periodicUsage, true), gettype($periodicUsage)), __LINE__);
        }
        $this->PeriodicUsage = $periodicUsage;
        
        return $this;
    }
    /**
     * Get PeriodicStartDate value
     * @return string|null
     */
    public function getPeriodicStartDate(): ?string
    {
        return $this->PeriodicStartDate;
    }
    /**
     * Set PeriodicStartDate value
     * @param string $periodicStartDate
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setPeriodicStartDate(?string $periodicStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($periodicStartDate) && !is_string($periodicStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodicStartDate, true), gettype($periodicStartDate)), __LINE__);
        }
        $this->PeriodicStartDate = $periodicStartDate;
        
        return $this;
    }
    /**
     * Get ModTime value
     * @return string|null
     */
    public function getModTime(): ?string
    {
        return $this->ModTime;
    }
    /**
     * Set ModTime value
     * @param string $modTime
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setModTime(?string $modTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modTime) && !is_string($modTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modTime, true), gettype($modTime)), __LINE__);
        }
        $this->ModTime = $modTime;
        
        return $this;
    }
    /**
     * Get RuleCurrentStatus value
     * @return string|null
     */
    public function getRuleCurrentStatus(): ?string
    {
        return $this->RuleCurrentStatus;
    }
    /**
     * Set RuleCurrentStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\AccessRuleCurrentStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AccessRuleCurrentStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ruleCurrentStatus
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setRuleCurrentStatus(?string $ruleCurrentStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AccessRuleCurrentStatusCodeType::valueIsValid($ruleCurrentStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AccessRuleCurrentStatusCodeType', is_array($ruleCurrentStatus) ? implode(', ', $ruleCurrentStatus) : var_export($ruleCurrentStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AccessRuleCurrentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->RuleCurrentStatus = $ruleCurrentStatus;
        
        return $this;
    }
    /**
     * Get RuleStatus value
     * @return string|null
     */
    public function getRuleStatus(): ?string
    {
        return $this->RuleStatus;
    }
    /**
     * Set RuleStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\AccessRuleStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AccessRuleStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ruleStatus
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
     */
    public function setRuleStatus(?string $ruleStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AccessRuleStatusCodeType::valueIsValid($ruleStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AccessRuleStatusCodeType', is_array($ruleStatus) ? implode(', ', $ruleStatus) : var_export($ruleStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AccessRuleStatusCodeType::getValidValues())), __LINE__);
        }
        $this->RuleStatus = $ruleStatus;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ApiAccessRuleType
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
