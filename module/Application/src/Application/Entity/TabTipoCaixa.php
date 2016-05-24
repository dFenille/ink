<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TabTipoCaixa
 *
 * @ORM\Table(name="tab_tipo_caixa")
 * @ORM\Entity
 */
class TabTipoCaixa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_caixa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoCaixa;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_caixa", type="string", length=45, nullable=false)
     */
    private $tipoCaixa;



    /**
     * Get idTipoCaixa
     *
     * @return integer
     */
    public function getIdTipoCaixa()
    {
        return $this->idTipoCaixa;
    }

    /**
     * Set tipoCaixa
     *
     * @param string $tipoCaixa
     *
     * @return TabTipoCaixa
     */
    public function setTipoCaixa($tipoCaixa)
    {
        $this->tipoCaixa = $tipoCaixa;

        return $this;
    }

    /**
     * Get tipoCaixa
     *
     * @return string
     */
    public function getTipoCaixa()
    {
        return $this->tipoCaixa;
    }
}
