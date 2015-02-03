<?php
// src/Star/ChartBundle/Document/arretbus.php
namespace Star\ChartBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
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
	protected $agence;
    	/**
     	* @MongoDB\String
    	 */
	protected $numero;
    	/**
     	* @MongoDB\String
    	 */
	protected $long_name;
    	/**
     	* @MongoDB\String
    	 */
	protected $type_bus;
    	/**
     	* @MongoDB\String
    	 */
	protected $route_type;
    	/**
     	* @MongoDB\String
    	 */
	protected $route_url;
    	/**
     	* @MongoDB\String
    	 */
	protected $couleur_font;
    	/**
     	* @MongoDB\String
    	 */
	protected $couleur_texte;

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
     * Set agence
     *
     * @param string $agence
     * @return self
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;
        return $this;
    }

    /**
     * Get agence
     *
     * @return string $agence
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Get numero
     *
     * @return string $numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set longName
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
     * Get longName
     *
     * @return string $longName
     */
    public function getLongName()
    {
        return $this->long_name;
    }

    /**
     * Set typeBus
     *
     * @param string $typeBus
     * @return self
     */
    public function setTypeBus($typeBus)
    {
        $this->type_bus = $typeBus;
        return $this;
    }

    /**
     * Get typeBus
     *
     * @return string $typeBus
     */
    public function getTypeBus()
    {
        return $this->type_bus;
    }

    /**
     * Set routeType
     *
     * @param string $routeType
     * @return self
     */
    public function setRouteType($routeType)
    {
        $this->route_type = $routeType;
        return $this;
    }

    /**
     * Get routeType
     *
     * @return string $routeType
     */
    public function getRouteType()
    {
        return $this->route_type;
    }

    /**
     * Set routeUrl
     *
     * @param string $routeUrl
     * @return self
     */
    public function setRouteUrl($routeUrl)
    {
        $this->route_url = $routeUrl;
        return $this;
    }

    /**
     * Get routeUrl
     *
     * @return string $routeUrl
     */
    public function getRouteUrl()
    {
        return $this->route_url;
    }

    /**
     * Set couleurFont
     *
     * @param string $couleurFont
     * @return self
     */
    public function setCouleurFont($couleurFont)
    {
        $this->couleur_font = $couleurFont;
        return $this;
    }

    /**
     * Get couleurFont
     *
     * @return string $couleurFont
     */
    public function getCouleurFont()
    {
        return $this->couleur_font;
    }

    /**
     * Set couleurTexte
     *
     * @param string $couleurTexte
     * @return self
     */
    public function setCouleurTexte($couleurTexte)
    {
        $this->couleur_texte = $couleurTexte;
        return $this;
    }

    /**
     * Get couleurTexte
     *
     * @return string $couleurTexte
     */
    public function getCouleurTexte()
    {
        return $this->couleur_texte;
    }
}
