<?php

namespace Jupiter\UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="resposta_secreta", type="string", length=255)
     */
    private $respostaSecreta;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=255)
     */
    private $senha;

    /**
     * @var string
     *
     * @ORM\Column(name="pergunta_secreta", type="string", length=255)
     */
    private $perguntaSecreta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prm_001", type="boolean")
     */
    private $prm001;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prm_002", type="boolean")
     */
    private $prm002;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prm_003", type="boolean")
     */
    private $prm003;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prm_004", type="boolean")
     */
    private $prm004;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prm_005", type="boolean")
     */
    private $prm005;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prm_006", type="boolean")
     */
    private $prm006;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prm_007", type="boolean")
     */
    private $prm007;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prm_008", type="boolean")
     */
    private $prm008;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prm_009", type="boolean")
     */
    private $prm009;

    /**
     * @var boolean
     *
     * @ORM\Column(name="prm_010", type="boolean")
     */
    private $prm010;


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
     * @return Usuario
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
     * Set email
     *
     * @param string $email
     * @return Usuario
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
     * Set respostaSecreta
     *
     * @param string $respostaSecreta
     * @return Usuario
     */
    public function setRespostaSecreta($respostaSecreta)
    {
        $this->respostaSecreta = $respostaSecreta;

        return $this;
    }

    /**
     * Get respostaSecreta
     *
     * @return string 
     */
    public function getRespostaSecreta()
    {
        return $this->respostaSecreta;
    }

    /**
     * Set senha
     *
     * @param string $senha
     * @return Usuario
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha
     *
     * @return string 
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set perguntaSecreta
     *
     * @param string $perguntaSecreta
     * @return Usuario
     */
    public function setPerguntaSecreta($perguntaSecreta)
    {
        $this->perguntaSecreta = $perguntaSecreta;

        return $this;
    }

    /**
     * Get perguntaSecreta
     *
     * @return string 
     */
    public function getPerguntaSecreta()
    {
        return $this->perguntaSecreta;
    }

    /**
     * Set prm001
     *
     * @param boolean $prm001
     * @return Usuario
     */
    public function setPrm001($prm001)
    {
        $this->prm001 = $prm001;

        return $this;
    }

    /**
     * Get prm001
     *
     * @return boolean 
     */
    public function getPrm001()
    {
        return $this->prm001;
    }

    /**
     * Set prm002
     *
     * @param boolean $prm002
     * @return Usuario
     */
    public function setPrm002($prm002)
    {
        $this->prm002 = $prm002;

        return $this;
    }

    /**
     * Get prm002
     *
     * @return boolean 
     */
    public function getPrm002()
    {
        return $this->prm002;
    }

    /**
     * Set prm003
     *
     * @param boolean $prm003
     * @return Usuario
     */
    public function setPrm003($prm003)
    {
        $this->prm003 = $prm003;

        return $this;
    }

    /**
     * Get prm003
     *
     * @return boolean 
     */
    public function getPrm003()
    {
        return $this->prm003;
    }

    /**
     * Set prm004
     *
     * @param boolean $prm004
     * @return Usuario
     */
    public function setPrm004($prm004)
    {
        $this->prm004 = $prm004;

        return $this;
    }

    /**
     * Get prm004
     *
     * @return boolean 
     */
    public function getPrm004()
    {
        return $this->prm004;
    }

    /**
     * Set prm005
     *
     * @param boolean $prm005
     * @return Usuario
     */
    public function setPrm005($prm005)
    {
        $this->prm005 = $prm005;

        return $this;
    }

    /**
     * Get prm005
     *
     * @return boolean 
     */
    public function getPrm005()
    {
        return $this->prm005;
    }

    /**
     * Set prm006
     *
     * @param boolean $prm006
     * @return Usuario
     */
    public function setPrm006($prm006)
    {
        $this->prm006 = $prm006;

        return $this;
    }

    /**
     * Get prm006
     *
     * @return boolean 
     */
    public function getPrm006()
    {
        return $this->prm006;
    }

    /**
     * Set prm007
     *
     * @param boolean $prm007
     * @return Usuario
     */
    public function setPrm007($prm007)
    {
        $this->prm007 = $prm007;

        return $this;
    }

    /**
     * Get prm007
     *
     * @return boolean 
     */
    public function getPrm007()
    {
        return $this->prm007;
    }

    /**
     * Set prm008
     *
     * @param boolean $prm008
     * @return Usuario
     */
    public function setPrm008($prm008)
    {
        $this->prm008 = $prm008;

        return $this;
    }

    /**
     * Get prm008
     *
     * @return boolean 
     */
    public function getPrm008()
    {
        return $this->prm008;
    }

    /**
     * Set prm009
     *
     * @param boolean $prm009
     * @return Usuario
     */
    public function setPrm009($prm009)
    {
        $this->prm009 = $prm009;

        return $this;
    }

    /**
     * Get prm009
     *
     * @return boolean 
     */
    public function getPrm009()
    {
        return $this->prm009;
    }

    /**
     * Set prm010
     *
     * @param boolean $prm010
     * @return Usuario
     */
    public function setPrm010($prm010)
    {
        $this->prm010 = $prm010;

        return $this;
    }

    /**
     * Get prm010
     *
     * @return boolean 
     */
    public function getPrm010()
    {
        return $this->prm010;
    }
}
