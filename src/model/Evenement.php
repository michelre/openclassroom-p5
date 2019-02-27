<?php

namespace App\Model;

class Evenement
{

    private $id;
    private $nom;
    private $date_creation;
    private $lieu;
    private $date_debut;
    private $date_fin;
     private $content;
    private $doc;
    private $participant_id;
    private $participants;

    public function __construct()
    {
        $this->participants = [];
    }


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

    public function getDateCreation()
    {

        return $this->date_creation;
    }

    public function setDateCreation($date_creation)
    {

        $this->date_creation = $date_creation;
    }

    public function getLieu()
    {

        return $this->lieu;
    }

    public function setLieu($lieu)
    {

        $this->lieu = $lieu;
    }

    public function getDateDebut()
    {

        return $this->date_debut;
    }

    public function setDateDebut($date_debut)
    {

        $this->date_debut = $date_debut;
    }

    public function getDateFin()
    {

        return $this->date_fin;
    }

    
    public function setDateFin($date_fin)
    {

        $this->date_fin = $date_fin;
    }
    
      public function getContent()
    {

        return $this->content;
    }
    
     
    public function setContent($content)
    {

        $this->content = $content;
    }
    
 public function getDoc()
    {

        return $this->doc;
    }
    
     public function setDoc($doc)
    {

        $this->doc = $doc;
    }
    /**
     * @return mixed
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param mixed $participants
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }

    /**
     * @param Participant $participant
     */
    public function appendParticipant($participant)
    {
        if(isset($participant)){
            array_push($this->participants, $participant);
        }
    }

    /**
     * @return mixed
     */
    public function getParticipantId()
    {
        return $this->participant_id;
    }

    /**
     * @param mixed $participant_id
     */
    public function setParticipantId($participant_id)
    {
        $this->participant_id = $participant_id;
    }


}
