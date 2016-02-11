<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tattoimagem
 *
 * @ORM\Table(name="tattoImagem")
 * @ORM\Entity
 */
class Tattoimagem
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
     * @ORM\Column(name="idTatto", type="integer", nullable=false)
     */
    private $idtatto;

    /**
     * @var string
     *
     * @ORM\Column(name="nmImagem", type="string", length=45, nullable=false)
     */
    private $nmimagem;

    /**
     * @var string
     *
     * @ORM\Column(name="nmImagemSystem", type="string", length=255, nullable=false)
     */
    private $nmimagemsystem;

    /**
     * @var integer
     *
     * @ORM\Column(name="t_delete", type="integer", nullable=false)
     */
    private $tDelete;



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
     * Set idtatto
     *
     * @param integer $idtatto
     *
     * @return Tattoimagem
     */
    public function setIdtatto($idtatto)
    {
        $this->idtatto = $idtatto;

        return $this;
    }

    /**
     * Get idtatto
     *
     * @return integer
     */
    public function getIdtatto()
    {
        return $this->idtatto;
    }

    /**
     * Set nmimagem
     *
     * @param string $nmimagem
     *
     * @return Tattoimagem
     */
    public function setNmimagem($nmimagem)
    {
        $this->nmimagem = $nmimagem;

        return $this;
    }

    /**
     * Get nmimagem
     *
     * @return string
     */
    public function getNmimagem()
    {
        return $this->nmimagem;
    }

    /**
     * Set nmimagemsystem
     *
     * @param string $nmimagemsystem
     *
     * @return Tattoimagem
     */
    public function setNmimagemsystem($nmimagemsystem)
    {
        $this->nmimagemsystem = $nmimagemsystem;

        return $this;
    }

    /**
     * Get nmimagemsystem
     *
     * @return string
     */
    public function getNmimagemsystem()
    {
        return $this->nmimagemsystem;
    }

    /**
     * Set tDelete
     *
     * @param integer $tDelete
     *
     * @return Tattoimagem
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
