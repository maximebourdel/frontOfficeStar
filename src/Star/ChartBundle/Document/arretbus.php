<?php
// src/Star/ChartBundle/Document/arretbus.php
namespace Star\ChartBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document (repositoryClass="Star\ChartBundle\Document\arretbusRepository")
 */
class arretbus
{
	/**
     	* @MongoDB\Id
    	 */
    	protected $id;

    	/**
     	* @MongoDB\String
     	*/
	protected $id_arret;
	/**
     	* @MongoDB\String
     	*/
	protected $id_ligne;
	/**
     	* @MongoDB\String
     	*/
	protected $date_requete;
	/**
     	* @MongoDB\String
     	*/
	protected $direction;
	/**
     	* @MongoDB\String
     	*/
	protected $en_tete;
	/**
     	* @MongoDB\String
     	*/
	protected $prevu;
	/**
     	* @MongoDB\String
     	*/
	protected $reel;
	/**
     	* @MongoDB\String
     	*/
	protected $num_vehicule;
	/**
     	* @MongoDB\String
     	*/
	protected $precision;
	/**
     	* @MongoDB\String
     	*/
	protected $diff_TR;

    

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
     * Set idArret
     *
     * @param string $idArret
     * @return self
     */
    public function setIdArret($idArret)
    {
        $this->id_arret = $idArret;
        return $this;
    }

    /**
     * Get idArret
     *
     * @return string $idArret
     */
    public function getIdArret()
    {
        return $this->id_arret;
    }

    /**
     * Set idLigne
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
     * Get idLigne
     *
     * @return string $idLigne
     */
    public function getIdLigne()
    {
        return $this->id_ligne;
    }

    /**
     * Set dateRequete
     *
     * @param string $dateRequete
     * @return self
     */
    public function setDateRequete($dateRequete)
    {
        $this->date_requete = $dateRequete;
        return $this;
    }

    /**
     * Get dateRequete
     *
     * @return string $dateRequete
     */
    public function getDateRequete()
    {
        return $this->date_requete;
    }

    /**
     * Set direction
     *
     * @param string $direction
     * @return self
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * Get direction
     *
     * @return string $direction
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set enTete
     *
     * @param string $enTete
     * @return self
     */
    public function setEnTete($enTete)
    {
        $this->en_tete = $enTete;
        return $this;
    }

    /**
     * Get enTete
     *
     * @return string $enTete
     */
    public function getEnTete()
    {
        return $this->en_tete;
    }

    /**
     * Set prevu
     *
     * @param string $prevu
     * @return self
     */
    public function setPrevu($prevu)
    {
        $this->prevu = $prevu;
        return $this;
    }

    /**
     * Get prevu
     *
     * @return string $prevu
     */
    public function getPrevu()
    {
        return $this->prevu;
    }

    /**
     * Set reel
     *
     * @param string $reel
     * @return self
     */
    public function setReel($reel)
    {
        $this->reel = $reel;
        return $this;
    }

    /**
     * Get reel
     *
     * @return string $reel
     */
    public function getReel()
    {
        return $this->reel;
    }

    /**
     * Set numVehicule
     *
     * @param string $numVehicule
     * @return self
     */
    public function setNumVehicule($numVehicule)
    {
        $this->num_vehicule = $numVehicule;
        return $this;
    }

    /**
     * Get numVehicule
     *
     * @return string $numVehicule
     */
    public function getNumVehicule()
    {
        return $this->num_vehicule;
    }

    /**
     * Set precision
     *
     * @param string $precision
     * @return self
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
        return $this;
    }

    /**
     * Get precision
     *
     * @return string $precision
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Set diffTR
     *
     * @param string $diffTR
     * @return self
     */
    public function setDiffTR($diffTR)
    {
        $this->diff_TR = $diffTR;
        return $this;
    }

    /**
     * Get diffTR
     *
     * @return string $diffTR
     */
    public function getDiffTR()
    {
        return $this->diff_TR;
    }
}
