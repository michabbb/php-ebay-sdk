<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for TicketEventTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is deprecated.
 * @subpackage Enumerations
 */
class TicketEventTypeCodeType
{
    /**
     * Constant for value 'Any'
     * @return string 'Any'
     */
    const VALUE_ANY = 'Any';
    /**
     * Constant for value 'DE_ComedyAndKabarett'
     * @return string 'DE_ComedyAndKabarett'
     */
    const VALUE_DE_COMEDY_AND_KABARETT = 'DE_ComedyAndKabarett';
    /**
     * Constant for value 'DE_FreizeitAndEvents'
     * @return string 'DE_FreizeitAndEvents'
     */
    const VALUE_DE_FREIZEIT_AND_EVENTS = 'DE_FreizeitAndEvents';
    /**
     * Constant for value 'DE_KonzerteAndFestivals'
     * @return string 'DE_KonzerteAndFestivals'
     */
    const VALUE_DE_KONZERTE_AND_FESTIVALS = 'DE_KonzerteAndFestivals';
    /**
     * Constant for value 'DE_KulturAndKlassik'
     * @return string 'DE_KulturAndKlassik'
     */
    const VALUE_DE_KULTUR_AND_KLASSIK = 'DE_KulturAndKlassik';
    /**
     * Constant for value 'DE_MusicalsAndShows'
     * @return string 'DE_MusicalsAndShows'
     */
    const VALUE_DE_MUSICALS_AND_SHOWS = 'DE_MusicalsAndShows';
    /**
     * Constant for value 'DE_Sportveranstaltungen'
     * @return string 'DE_Sportveranstaltungen'
     */
    const VALUE_DE_SPORTVERANSTALTUNGEN = 'DE_Sportveranstaltungen';
    /**
     * Constant for value 'DE_Sonstige'
     * @return string 'DE_Sonstige'
     */
    const VALUE_DE_SONSTIGE = 'DE_Sonstige';
    /**
     * Constant for value 'UK_AmusementParks'
     * @return string 'UK_AmusementParks'
     */
    const VALUE_UK_AMUSEMENT_PARKS = 'UK_AmusementParks';
    /**
     * Constant for value 'UK_Comedy'
     * @return string 'UK_Comedy'
     */
    const VALUE_UK_COMEDY = 'UK_Comedy';
    /**
     * Constant for value 'UK_ConcertsAndGigs'
     * @return string 'UK_ConcertsAndGigs'
     */
    const VALUE_UK_CONCERTS_AND_GIGS = 'UK_ConcertsAndGigs';
    /**
     * Constant for value 'UK_ConferencesAndSeminars'
     * @return string 'UK_ConferencesAndSeminars'
     */
    const VALUE_UK_CONFERENCES_AND_SEMINARS = 'UK_ConferencesAndSeminars';
    /**
     * Constant for value 'UK_ExhibitionsAndShows'
     * @return string 'UK_ExhibitionsAndShows'
     */
    const VALUE_UK_EXHIBITIONS_AND_SHOWS = 'UK_ExhibitionsAndShows';
    /**
     * Constant for value 'UK_Experiences'
     * @return string 'UK_Experiences'
     */
    const VALUE_UK_EXPERIENCES = 'UK_Experiences';
    /**
     * Constant for value 'UK_SportingEvents'
     * @return string 'UK_SportingEvents'
     */
    const VALUE_UK_SPORTING_EVENTS = 'UK_SportingEvents';
    /**
     * Constant for value 'UK_TheatreCinemaAndCircus'
     * @return string 'UK_TheatreCinemaAndCircus'
     */
    const VALUE_UK_THEATRE_CINEMA_AND_CIRCUS = 'UK_TheatreCinemaAndCircus';
    /**
     * Constant for value 'UK_Other'
     * @return string 'UK_Other'
     */
    const VALUE_UK_OTHER = 'UK_Other';
    /**
     * Constant for value 'US_Concerts'
     * @return string 'US_Concerts'
     */
    const VALUE_US_CONCERTS = 'US_Concerts';
    /**
     * Constant for value 'US_Movies'
     * @return string 'US_Movies'
     */
    const VALUE_US_MOVIES = 'US_Movies';
    /**
     * Constant for value 'US_SportingEvents'
     * @return string 'US_SportingEvents'
     */
    const VALUE_US_SPORTING_EVENTS = 'US_SportingEvents';
    /**
     * Constant for value 'US_Theater'
     * @return string 'US_Theater'
     */
    const VALUE_US_THEATER = 'US_Theater';
    /**
     * Constant for value 'US_Other'
     * @return string 'US_Other'
     */
    const VALUE_US_OTHER = 'US_Other';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ANY
     * @uses self::VALUE_DE_COMEDY_AND_KABARETT
     * @uses self::VALUE_DE_FREIZEIT_AND_EVENTS
     * @uses self::VALUE_DE_KONZERTE_AND_FESTIVALS
     * @uses self::VALUE_DE_KULTUR_AND_KLASSIK
     * @uses self::VALUE_DE_MUSICALS_AND_SHOWS
     * @uses self::VALUE_DE_SPORTVERANSTALTUNGEN
     * @uses self::VALUE_DE_SONSTIGE
     * @uses self::VALUE_UK_AMUSEMENT_PARKS
     * @uses self::VALUE_UK_COMEDY
     * @uses self::VALUE_UK_CONCERTS_AND_GIGS
     * @uses self::VALUE_UK_CONFERENCES_AND_SEMINARS
     * @uses self::VALUE_UK_EXHIBITIONS_AND_SHOWS
     * @uses self::VALUE_UK_EXPERIENCES
     * @uses self::VALUE_UK_SPORTING_EVENTS
     * @uses self::VALUE_UK_THEATRE_CINEMA_AND_CIRCUS
     * @uses self::VALUE_UK_OTHER
     * @uses self::VALUE_US_CONCERTS
     * @uses self::VALUE_US_MOVIES
     * @uses self::VALUE_US_SPORTING_EVENTS
     * @uses self::VALUE_US_THEATER
     * @uses self::VALUE_US_OTHER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANY,
            self::VALUE_DE_COMEDY_AND_KABARETT,
            self::VALUE_DE_FREIZEIT_AND_EVENTS,
            self::VALUE_DE_KONZERTE_AND_FESTIVALS,
            self::VALUE_DE_KULTUR_AND_KLASSIK,
            self::VALUE_DE_MUSICALS_AND_SHOWS,
            self::VALUE_DE_SPORTVERANSTALTUNGEN,
            self::VALUE_DE_SONSTIGE,
            self::VALUE_UK_AMUSEMENT_PARKS,
            self::VALUE_UK_COMEDY,
            self::VALUE_UK_CONCERTS_AND_GIGS,
            self::VALUE_UK_CONFERENCES_AND_SEMINARS,
            self::VALUE_UK_EXHIBITIONS_AND_SHOWS,
            self::VALUE_UK_EXPERIENCES,
            self::VALUE_UK_SPORTING_EVENTS,
            self::VALUE_UK_THEATRE_CINEMA_AND_CIRCUS,
            self::VALUE_UK_OTHER,
            self::VALUE_US_CONCERTS,
            self::VALUE_US_MOVIES,
            self::VALUE_US_SPORTING_EVENTS,
            self::VALUE_US_THEATER,
            self::VALUE_US_OTHER,
            self::VALUE_CUSTOM_CODE,
        );
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
