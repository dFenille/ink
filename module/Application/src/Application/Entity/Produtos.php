<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produtos
 *
 * @ORM\Table(name="produtos")
 * @ORM\Entity
 */
class Produtos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_produto", type="string", length=255, nullable=false)
     */
    private $nomeProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_produto", type="string", length=255, nullable=false)
     */
    private $descProduto;

    /**
     * @var float
     *
     * @ORM\Column(name="quantidade_produto", type="float", precision=10, scale=0, nullable=false)
     */
    private $quantidadeProduto;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '1';



    /**
     * Get idProduto
     *
     * @return integer
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set nomeProduto
     *
     * @param string $nomeProduto
     *
     * @return Produtos
     */
    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;

        return $this;
    }

    /**
     * Get nomeProduto
     *
     * @return string
     */
    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    /**
     * Set descProduto
     *
     * @param string $descProduto
     *
     * @return Produtos
     */
    public function setDescProduto($descProduto)
    {
        $this->descProduto = $descProduto;

        return $this;
    }

    /**
     * Get descProduto
     *
     * @return string
     */
    public function getDescProduto()
    {
        return $this->descProduto;
    }

    /**
     * Set quantidadeProduto
     *
     * @param float $quantidadeProduto
     *
     * @return Produtos
     */
    public function setQuantidadeProduto($quantidadeProduto)
    {
        $this->quantidadeProduto = $quantidadeProduto;

        return $this;
    }

    /**
     * Get quantidadeProduto
     *
     * @return float
     */
    public function getQuantidadeProduto()
    {
        return $this->quantidadeProduto;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Produtos
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
}
