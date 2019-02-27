<?php

namespace App\Model;

class Participant
{

    private $id;
    private $nom;
     private $prenom;
    private $date_naissance;
    private $sexe;
    private $telephone;
    private $mail;
    private $profession;
    private $lieu_travail;

    public function getId()
    {

        return $this->id;
    }

    public function setId($id)
    {

        $this->id = $id;
    }

    public function getNom()
    {

        return $this->nom;
    }

    public function setNom($nom)
    {

        $this->nom = $nom;
    }
    
     public function getPrenom()
    {

        return $this->prenom;
    }

    public function setPrenom($prenom)
    {

        $this->prenom = $prenom;
    }

    public function getDateNaissance()
    {

        return $this->date_naissance;
    }

    public function setDateNaissance($date_naissance)
    {

        $this->date_naissance = $date_naissance;
    }


    public function getSexe()
    {

        return $this->sexe;
    }

    public function setSexe($sexe)
    {

        $this->sexe = $sexe;
    }


    public function getTelephone()
    {

        return $this->telephone;
    }

    public function setTelephone($telephone)
    {

        $this->telephone = $telephone;
    }


    public function getMail()
    {

        return $this->mail;
    }

    public function setMail($mail)
    {

        $this->mail = $mail;
    }


    public function getProfession()
    {

        return $this->profession;
    }

    public function setProfession($profession)
    {

        $this->profession = $profession;
    }

    public function getLieuTravail()
    {

        return $this->lieu_travail;
    }

    public function setLieuTravail($lieu_travail)
    {

        $this->lieu_travail = $lieu_travail;
    }


}
