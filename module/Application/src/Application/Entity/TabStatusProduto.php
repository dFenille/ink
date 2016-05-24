<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TabStatusProduto
 *
 * @ORM\Table(name="tab_status_produto")
 * @ORM\Entity
 */
class TabStatusProduto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_status_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatusProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="status_produto", type="string", length=15, nullable=false)
     */
    private $statusProduto;

    /**
     * @var integer
     *
     * @ORM\Column(name="flg_ativo", type="integer", nullable=false)
     */
    private $flgAtivo = '1';



    /**
     * Get idStatusProduto
     *
     * @return integer
     */
    public function getIdStatusProduto()
    {
        return $this->idStatusProduto;
    }

    /**
     * Set statusProduto
     *
     * @param string $statusProduto
     *
     * @return TabStatusProduto
     */
    public function setStatusProduto($statusProduto)
    {
        $this->statusProduto = $statusProduto;

        return $this;
    }

    /**
     * Get statusProduto
     *
     * @return string
     */
    public function getStatusProduto()
    {
        return $this->statusProduto;
    }

    /**
     * Set flgAtivo
     *
     * @param integer $flgAtivo
     *
     * @return TabStatusProduto
     */
    public function setFlgAtivo($flgAtivo)
    {
        $this->flgAtivo = $flgAtivo;

        return $this;
    }

    /**
     * Get flgAtivo
     *
     * @return integer
     */
    public function getFlgAtivo()
    {
        return $this->flgAtivo;
    }
}
