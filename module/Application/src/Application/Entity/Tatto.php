<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tatto
 *
 * @ORM\Table(name="tatto")
 * @ORM\Entity
 */
class Tatto
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
     * @ORM\Column(name="idAgendamento", type="integer", nullable=false)
     */
    private $idagendamento;

    /**
     * @var string
     *
     * @ORM\Column(name="idCliente", type="string", length=45, nullable=false)
     */
    private $idcliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidadeAgulha", type="integer", nullable=false)
     */
    private $quantidadeagulha;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="string", length=255, nullable=false)
     */
    private $obs;

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
     * Set idagendamento
     *
     * @param integer $idagendamento
     *
     * @return Tatto
     */
    public function setIdagendamento($idagendamento)
    {
        $this->idagendamento = $idagendamento;

        return $this;
    }

    /**
     * Get idagendamento
     *
     * @return integer
     */
    public function getIdagendamento()
    {
        return $this->idagendamento;
    }

    /**
     * Set idcliente
     *
     * @param string $idcliente
     *
     * @return Tatto
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return string
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set quantidadeagulha
     *
     * @param integer $quantidadeagulha
     *
     * @return Tatto
     */
    public function setQuantidadeagulha($quantidadeagulha)
    {
        $this->quantidadeagulha = $quantidadeagulha;

        return $this;
    }

    /**
     * Get quantidadeagulha
     *
     * @return integer
     */
    public function getQuantidadeagulha()
    {
        return $this->quantidadeagulha;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return Tatto
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set obs
     *
     * @param string $obs
     *
     * @return Tatto
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs
     *
     * @return string
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Set tDelete
     *
     * @param integer $tDelete
     *
     * @return Tatto
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
