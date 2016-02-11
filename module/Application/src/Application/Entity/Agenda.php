<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 *
 * @ORM\Table(name="agenda")
 * @ORM\Entity
 */
class Agenda
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
     * @var string
     *
     * @ORM\Column(name="nomeAgendamento", type="string", length=45, nullable=false)
     */
    private $nomeagendamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false)
     */
    private $idusuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="t_delete", type="integer", nullable=false)
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
     * Set nomeagendamento
     *
     * @param string $nomeagendamento
     *
     * @return Agenda
     */
    public function setNomeagendamento($nomeagendamento)
    {
        $this->nomeagendamento = $nomeagendamento;

        return $this;
    }

    /**
     * Get nomeagendamento
     *
     * @return string
     */
    public function getNomeagendamento()
    {
        return $this->nomeagendamento;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Agenda
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set idusuario
     *
     * @param integer $idusuario
     *
     * @return Agenda
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set tDelete
     *
     * @param integer $tDelete
     *
     * @return Agenda
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
