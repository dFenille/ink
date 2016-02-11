<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taxonomia
 *
 * @ORM\Table(name="taxonomia")
 * @ORM\Entity
 */
class Taxonomia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_taxonomia", type="integer", nullable=true)
     */
    private $idTipoTaxonomia;

    /**
     * @var string
     *
     * @ORM\Column(name="taxonomia", type="string", length=45, nullable=true)
     */
    private $taxonomia;

    /**
     * @var integer
     *
     * @ORM\Column(name="t_delete", type="integer", nullable=true)
     */
    private $tDelete = '1';



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTipoTaxonomia
     *
     * @param integer $idTipoTaxonomia
     *
     * @return Taxonomia
     */
    public function setIdTipoTaxonomia($idTipoTaxonomia)
    {
        $this->idTipoTaxonomia = $idTipoTaxonomia;

        return $this;
    }

    /**
     * Get idTipoTaxonomia
     *
     * @return integer
     */
    public function getIdTipoTaxonomia()
    {
        return $this->idTipoTaxonomia;
    }

    /**
     * Set taxonomia
     *
     * @param string $taxonomia
     *
     * @return Taxonomia
     */
    public function setTaxonomia($taxonomia)
    {
        $this->taxonomia = $taxonomia;

        return $this;
    }

    /**
     * Get taxonomia
     *
     * @return string
     */
    public function getTaxonomia()
    {
        return $this->taxonomia;
    }

    /**
     * Set tDelete
     *
     * @param integer $tDelete
     *
     * @return Taxonomia
     */
    public function setTDelete($tDelete)
    {
        $this->tDelete = $tDelete;

        return $this;
    }

    /**
     * Get tDelete
     *
     * @return integer
     */
    public function getTDelete()
    {
        return $this->tDelete;
    }
}
