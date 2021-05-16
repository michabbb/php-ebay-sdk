<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketListingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>TicketListingDetails</b> container, which is used in an <b>Add</b>/<b>Revise</b>/<b>Relist</b> call to provide more details about event tickets.
 * @subpackage Structs
 */
class TicketListingDetailsType extends AbstractStructBase
{
    /**
     * The EventTitle
     * Meta information extracted from the WSDL
     * - documentation: The name of the event, as shown on the ticket. Typically the headliner. There is no maximum number of words or characters. However, the words in the name must be an exact match (or a subset consisting of complete words) to the words
     * in the product title in the catalog. The words in the name are matched using OR logic (the order of the words does not matter). As with all strings, you need to escape reserved characters such as ampersand. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EventTitle = null;
    /**
     * The Venue
     * Meta information extracted from the WSDL
     * - documentation: The name of the venue, as shown on the ticket. The validation rules are the same as the rules for the event name. In addition, eBay supports both US English and UK English spelling variations for typical words found on tickets (such
     * as "theater" and "theatre"). As with all strings, you need to escape reserved characters such as ampersand. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Venue = null;
    /**
     * The PrintedDate
     * Meta information extracted from the WSDL
     * - documentation: The date of the event, as shown on the ticket. Use the date shown on the ticket, without attempting to adjust it for a different time zone (such as Pacific time or GMT).<br> <br> In most cases, you should be able to specify any
     * numeric date format in month/day/year order. eBay supports m or mm for the month, d or dd for the day, and yy or yyyy for the year, in all combinations. The delimiters must be forward slashes (/).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PrintedDate = null;
    /**
     * The PrintedTime
     * Meta information extracted from the WSDL
     * - documentation: The time of the event, as shown on the ticket. Use the time value shown on the ticket, without attempting to convert it to a different time zone (such as Pacific time or GMT). Do not round the value up or down (e.g., do not round
     * 7:01 PM to 7:00 PM).<br> <br> In most cases, you should be able to specify the time format exactly as shown on the ticket.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PrintedTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for TicketListingDetailsType
     * @uses TicketListingDetailsType::setEventTitle()
     * @uses TicketListingDetailsType::setVenue()
     * @uses TicketListingDetailsType::setPrintedDate()
     * @uses TicketListingDetailsType::setPrintedTime()
     * @uses TicketListingDetailsType::setAny()
     * @param string $eventTitle
     * @param string $venue
     * @param string $printedDate
     * @param string $printedTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $eventTitle = null, ?string $venue = null, ?string $printedDate = null, ?string $printedTime = null, $any = null)
    {
        $this
            ->setEventTitle($eventTitle)
            ->setVenue($venue)
            ->setPrintedDate($printedDate)
            ->setPrintedTime($printedTime)
            ->setAny($any);
    }
    /**
     * Get EventTitle value
     * @return string|null
     */
    public function getEventTitle(): ?string
    {
        return $this->EventTitle;
    }
    /**
     * Set EventTitle value
     * @param string $eventTitle
     * @return \macropage\ebaysdk\trading\StructType\TicketListingDetailsType
     */
    public function setEventTitle(?string $eventTitle = null): self
    {
        // validation for constraint: string
        if (!is_null($eventTitle) && !is_string($eventTitle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventTitle, true), gettype($eventTitle)), __LINE__);
        }
        $this->EventTitle = $eventTitle;
        
        return $this;
    }
    /**
     * Get Venue value
     * @return string|null
     */
    public function getVenue(): ?string
    {
        return $this->Venue;
    }
    /**
     * Set Venue value
     * @param string $venue
     * @return \macropage\ebaysdk\trading\StructType\TicketListingDetailsType
     */
    public function setVenue(?string $venue = null): self
    {
        // validation for constraint: string
        if (!is_null($venue) && !is_string($venue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($venue, true), gettype($venue)), __LINE__);
        }
        $this->Venue = $venue;
        
        return $this;
    }
    /**
     * Get PrintedDate value
     * @return string|null
     */
    public function getPrintedDate(): ?string
    {
        return $this->PrintedDate;
    }
    /**
     * Set PrintedDate value
     * @param string $printedDate
     * @return \macropage\ebaysdk\trading\StructType\TicketListingDetailsType
     */
    public function setPrintedDate(?string $printedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printedDate) && !is_string($printedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printedDate, true), gettype($printedDate)), __LINE__);
        }
        $this->PrintedDate = $printedDate;
        
        return $this;
    }
    /**
     * Get PrintedTime value
     * @return string|null
     */
    public function getPrintedTime(): ?string
    {
        return $this->PrintedTime;
    }
    /**
     * Set PrintedTime value
     * @param string $printedTime
     * @return \macropage\ebaysdk\trading\StructType\TicketListingDetailsType
     */
    public function setPrintedTime(?string $printedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($printedTime) && !is_string($printedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printedTime, true), gettype($printedTime)), __LINE__);
        }
        $this->PrintedTime = $printedTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TicketListingDetailsType
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
