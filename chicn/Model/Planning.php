<?php

namespace Model;

class planning
{

    protected $id;
    protected $jour;
    protected $cp;
    protected $ville;
    protected $detail;
    protected $horaires;
    protected $type_semaine;


    /**
     * Get the value of jour
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set the value of jour
     */
    public function setJour($jour): self
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get the value of cp
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set the value of cp
     */
    public function setCp($cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     */
    public function setVille($ville): self
    {
        $this->ville = $ville;

        return $this;
    }


    /**
     * Get the value of horaires
     */
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * Set the value of horaires
     */
    public function setHoraires($horaires): self
    {
        $this->horaires = $horaires;

        return $this;
    }

    /**
     * Get the value of type_semaine
     */
    public function getTypeSemaine()
    {
        return $this->type_semaine;
    }

    /**
     * Set the value of type_semaine
     */
    public function setTypeSemaine($type_semaine): self
    {
        $this->type_semaine = $type_semaine;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of detail
     */ 
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set the value of detail
     *
     * @return  self
     */ 
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }
}
