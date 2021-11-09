<?php

namespace Model;

class Utilisateur
{

    protected $id;
    protected $email;
    protected $motDePasse;
    protected $admin;
    


    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of motDePasse
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set the value of motDePasse
     */
    public function setMotDePasse($motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get the value of admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set the value of admin
     */
    public function setAdmin($admin): self
    {
        $this->admin = $admin;

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
}
