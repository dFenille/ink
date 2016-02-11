<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente
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
     * @ORM\Column(name="nome", type="string", length=45, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=45, nullable=false)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=80, nullable=false)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="obs", type="text", length=16777215, nullable=false)
     */
    private $obs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dtCadastro", type="datetime", nullable=false)
     */
    private $dtcadastro = 'CURRENT_TIMESTAMP';

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
     * @return Cliente
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
     * Set telefone
     *
     * @param string $telefone
     *
     * @return Cliente
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Cliente
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set obs
     *
     * @param string $obs
     *
     * @return Cliente
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
     * Set dtcadastro
     *
     * @param \DateTime $dtcadastro
     *
     * @return Cliente
     */
    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;

        return $this;
    }

    /**
     * Get dtcadastro
     *
     * @return \DateTime
     */
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    /**
     * Set tDelete
     *
     * @param integer $tDelete
     *
     * @return Cliente
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
