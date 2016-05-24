<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caixa
 *
 * @ORM\Table(name="caixa", indexes={@ORM\Index(name="fk_caixa_tipo_caixa_idx", columns={"tipo_caixa"})})
 * @ORM\Entity
 */
class Caixa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_caixa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCaixa;

    /**
     * @var string
     *
     * @ORM\Column(name="caixa", type="string", length=100, nullable=false)
     */
    private $caixa;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_caixa", type="integer", nullable=false)
     */
    private $tipoCaixa;



    /**
     * Get idCaixa
     *
     * @return integer
     */
    public function getIdCaixa()
    {
        return $this->idCaixa;
    }

    /**
     * Set caixa
     *
     * @param string $caixa
     *
     * @return Caixa
     */
    public function setCaixa($caixa)
    {
        $this->caixa = $caixa;

        return $this;
    }

    /**
     * Get caixa
     *
     * @return string
     */
    public function getCaixa()
    {
        return $this->caixa;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return Caixa
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
     * Set tipoCaixa
     *
     * @param integer $tipoCaixa
     *
     * @return Caixa
     */
    public function setTipoCaixa($tipoCaixa)
    {
        $this->tipoCaixa = $tipoCaixa;

        return $this;
    }

    /**
     * Get tipoCaixa
     *
     * @return integer
     */
    public function getTipoCaixa()
    {
        return $this->tipoCaixa;
    }
}
