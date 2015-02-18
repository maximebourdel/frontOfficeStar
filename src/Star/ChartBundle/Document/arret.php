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
    protected $arret_id;
    
    /**
     * @MongoDB\String
     */
	protected $code;
	/**
 	* @MongoDB\String
	 */
	protected $name;
	/**
 	* @MongoDB\String
	 */
	protected $desc;
	/**
 	* @MongoDB\String
	 */
	protected $lat;
	/**
 	* @MongoDB\String
	 */
	protected $lon;
	/**
 	* @MongoDB\String
	 */
	protected $zone_id;
	/**
     	* @MongoDB\String
    	 */
	protected $url;
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
	protected $timezone;
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
     * Set arret_id
     *
     * @param string $arretId
     * @return self
     */
    public function setArretId($arretId)
    {
        $this->arret_id = $arretId;
        return $this;
    }

    /**
     * Get arret_id
     *
     * @return string $arretId
     */
    public function getArretId()
    {
        return $this->arret_id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string $code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return self
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * Get desc
     *
     * @return string $desc
     */
    public function getDesc()
    {
        return $this->desc;
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
     * Set zone_id
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
     * Get zone_id
     *
     * @return string $zoneId
     */
    public function getZoneId()
    {
        return $this->zone_id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set location_type
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
     * Get location_type
     *
     * @return string $locationType
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * Set parent_station
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
     * Get parent_station
     *
     * @return string $parentStation
     */
    public function getParentStation()
    {
        return $this->parent_station;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return self
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * Get timezone
     *
     * @return string $timezone
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set wheelchair_boarding
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
     * Get wheelchair_boarding
     *
     * @return string $wheelchairBoarding
     */
    public function getWheelchairBoarding()
    {
        return $this->wheelchair_boarding;
    }
}
