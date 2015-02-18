<?php
// src/Star/ChartBundle/Document/arretbus.php
namespace Star\ChartBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document (repositoryClass="Star\ChartBundle\Document\ligneRepository")
 */
class ligne
{
	/**
 	* @MongoDB\Id
	 */
	protected $id;

	/**
	 * @MongoDB\String
	 */
	protected $id_ligne;
	
	/**
 	* @MongoDB\String
	 */
    protected $id_agency;
	/**
 	* @MongoDB\String
	 */
	protected $short_name;
	/**
 	* @MongoDB\String
	 */
	protected $long_name;
	/**
 	* @MongoDB\String
	 */
	protected $desc;
	/**
 	* @MongoDB\String
	 */
	protected $type;
	/**
 	* @MongoDB\String
	 */
	protected $url;
	/**
 	* @MongoDB\String
	 */
	protected $color;
	/**
 	* @MongoDB\String
	 */
	protected $text_color;

	
	public function __construct()
	{
	   
	}
	


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
     * Set id_ligne
     *
     * @param string $idLigne
     * @return self
     */
    public function setIdLigne($idLigne)
    {
        $this->id_ligne = $idLigne;
        return $this;
    }

    /**
     * Get id_ligne
     *
     * @return string $idLigne
     */
    public function getIdLigne()
    {
        return $this->id_ligne;
    }

    /**
     * Set id_agency
     *
     * @param string $idAgency
     * @return self
     */
    public function setIdAgency($idAgency)
    {
        $this->id_agency = $idAgency;
        return $this;
    }

    /**
     * Get id_agency
     *
     * @return string $idAgency
     */
    public function getIdAgency()
    {
        return $this->id_agency;
    }

    /**
     * Set short_name
     *
     * @param string $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->short_name = $shortName;
        return $this;
    }

    /**
     * Get short_name
     *
     * @return string $shortName
     */
    public function getShortName()
    {
        return $this->short_name;
    }

    /**
     * Set long_name
     *
     * @param string $longName
     * @return self
     */
    public function setLongName($longName)
    {
        $this->long_name = $longName;
        return $this;
    }

    /**
     * Get long_name
     *
     * @return string $longName
     */
    public function getLongName()
    {
        return $this->long_name;
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
     * Set type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
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
     * Set color
     *
     * @param string $color
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Get color
     *
     * @return string $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set text_color
     *
     * @param string $textColor
     * @return self
     */
    public function setTextColor($textColor)
    {
        $this->text_color = $textColor;
        return $this;
    }

    /**
     * Get text_color
     *
     * @return string $textColor
     */
    public function getTextColor()
    {
        return $this->text_color;
    }
}
