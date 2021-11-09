<?php

namespace Model;

class Produit
{

    protected $id;
    protected $image;
    protected $nom;
    protected $description;
    protected $poidsMoyen;
    protected $prixTTC;

    

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of poidsMoyen
     */
    public function getPoidsMoyen()
    {
        return $this->poidsMoyen;
    }

    /**
     * Set the value of poidsMoyen
     */
    public function setPoidsMoyen($poidsMoyen): self
    {
        $this->poidsMoyen = $poidsMoyen;

        return $this;
    }

    /**
     * Get the value of prixTTC
     */
    public function getPrixTTC()
    {
        return $this->prixTTC;
    }

    /**
     * Set the value of prixTTC
     */
    public function setPrixTTC($prixTTC): self
    {
        $this->prixTTC = $prixTTC;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

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
