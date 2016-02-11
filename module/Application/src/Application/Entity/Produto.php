<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produto
 *
 * @ORM\Table(name="produto")
 * @ORM\Entity
 */
class Produto
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
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoProduto", type="string", length=45, nullable=false)
     */
    private $tipoproduto;

    /**
     * @var string
     *
     * @ORM\Column(name="descProduto", type="string", length=255, nullable=false)
     */
    private $descproduto;

    /**
     * @var float
     *
     * @ORM\Column(name="quantidade", type="float", precision=10, scale=0, nullable=false)
     */
    private $quantidade;

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
     * Set nome
     *
     * @param string $nome
     *
     * @return Produto
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set tipoproduto
     *
     * @param string $tipoproduto
     *
     * @return Produto
     */
    public function setTipoproduto($tipoproduto)
    {
        $this->tipoproduto = $tipoproduto;

        return $this;
    }

    /**
     * Get tipoproduto
     *
     * @return string
     */
    public function getTipoproduto()
    {
        return $this->tipoproduto;
    }

    /**
     * Set descproduto
     *
     * @param string $descproduto
     *
     * @return Produto
     */
    public function setDescproduto($descproduto)
    {
        $this->descproduto = $descproduto;

        return $this;
    }

    /**
     * Get descproduto
     *
     * @return string
     */
    public function getDescproduto()
    {
        return $this->descproduto;
    }

    /**
     * Set quantidade
     *
     * @param float $quantidade
     *
     * @return Produto
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return float
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set obs
     *
     * @param string $obs
     *
     * @return Produto
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
     * @return Produto
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
