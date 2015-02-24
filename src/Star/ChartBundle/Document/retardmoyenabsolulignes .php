<?php
// src/Star/ChartBundle/Document/retardmoyenabsolulignes.php
namespace Star\ChartBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class retardmoyenabsolulignes
{
	/**
     * @MongoDB\Id
     */
    protected $_id;

    /**
     * @MongoDB\Float
     */
    protected $value;


    /**
     * Set id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return string $id
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Set value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return float $value
     */
    public function getValue()
    {
        return $this->value;
    }
}
