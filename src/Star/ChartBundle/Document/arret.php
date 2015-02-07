<?php
// src/Star/ChartBundle/Document/arretbus.php
namespace Star\ChartBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document (repositoryClass="Star\ChartBundle\Document\arretRepository")
 */
class arret
{
	/**
     	* @MongoDB\Id
    	 */
    	protected $id;

    	/**
     	* @MongoDB\String
    	 */
	protected $stop_code;
	/**
     	* @MongoDB\String
    	 */
	protected $nom;
	/**
     	* @MongoDB\String
    	 */
	protected $description;
	/**
     	* @MongoDB\String
    	 */
	protected $lon;
	/**
     	* @MongoDB\String
    	 */
	protected $lat;
	/**
     	* @MongoDB\String
    	 */
	protected $zone_id;
	/**
     	* @MongoDB\String
    	 */
	protected $stop_url;
	/**
     	* @MongoDB\String
    	 */
	protected $location_type;
	/**
     	* @MongoDB\String
    	 */
	protected $parent_station;
	/**
     	* @MongoDB\String
    	 */
	protected $stop_timezone;
	/**
     	* @MongoDB\String
    	 */
	protected $wheelchair_boarding;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set stopCode
     *
     * @param string $stopCode
     * @return self
     */
    public function setStopCode($stopCode)
    {
        $this->stop_code = $stopCode;
        return $this;
    }

    /**
     * Get stopCode
     *
     * @return string $stopCode
     */
    public function getStopCode()
    {
        return $this->stop_code;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get nom
     *
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set lon
     *
     * @param string $lon
     * @return self
     */
    public function setLon($lon)
    {
        $this->lon = $lon;
        return $this;
    }

    /**
     * Get lon
     *
     * @return string $lon
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return self
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * Get lat
     *
     * @return string $lat
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set zoneId
     *
     * @param string $zoneId
     * @return self
     */
    public function setZoneId($zoneId)
    {
        $this->zone_id = $zoneId;
        return $this;
    }

    /**
     * Get zoneId
     *
     * @return string $zoneId
     */
    public function getZoneId()
    {
        return $this->zone_id;
    }

    /**
     * Set stopUrl
     *
     * @param string $stopUrl
     * @return self
     */
    public function setStopUrl($stopUrl)
    {
        $this->stop_url = $stopUrl;
        return $this;
    }

    /**
     * Get stopUrl
     *
     * @return string $stopUrl
     */
    public function getStopUrl()
    {
        return $this->stop_url;
    }

    /**
     * Set locationType
     *
     * @param string $locationType
     * @return self
     */
    public function setLocationType($locationType)
    {
        $this->location_type = $locationType;
        return $this;
    }

    /**
     * Get locationType
     *
     * @return string $locationType
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * Set parentStation
     *
     * @param string $parentStation
     * @return self
     */
    public function setParentStation($parentStation)
    {
        $this->parent_station = $parentStation;
        return $this;
    }

    /**
     * Get parentStation
     *
     * @return string $parentStation
     */
    public function getParentStation()
    {
        return $this->parent_station;
    }

    /**
     * Set stopTimezone
     *
     * @param string $stopTimezone
     * @return self
     */
    public function setStopTimezone($stopTimezone)
    {
        $this->stop_timezone = $stopTimezone;
        return $this;
    }

    /**
     * Get stopTimezone
     *
     * @return string $stopTimezone
     */
    public function getStopTimezone()
    {
        return $this->stop_timezone;
    }

    /**
     * Set wheelchairBoarding
     *
     * @param string $wheelchairBoarding
     * @return self
     */
    public function setWheelchairBoarding($wheelchairBoarding)
    {
        $this->wheelchair_boarding = $wheelchairBoarding;
        return $this;
    }

    /**
     * Get wheelchairBoarding
     *
     * @return string $wheelchairBoarding
     */
    public function getWheelchairBoarding()
    {
        return $this->wheelchair_boarding;
    }
}
