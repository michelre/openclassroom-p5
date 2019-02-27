<?php

namespace App\Dao;

use PDO;

class ParticipantDao extends BaseDao
{

    public function findById($id)
    {
        if(!isset($id)){
            return null;
        }
        $query = $this->db->prepare("SELECT * FROM participant WHERE id = ?");
        $query->execute(array($id));
        $query->setFetchMode(PDO::FETCH_CLASS, 'App\Model\Participant');
        return $query->fetch();
    }
    
    public function findAllByEvenementId($evenementId)
    {
       
        $query = $this->db->prepare("SELECT * FROM `participant` INNER JOIN evenement_participant ON participant.id=evenement_participant.participant_id WHERE evenement_participant.evenement_id=? ");
        $query->execute(array($evenementId));
        $query->setFetchMode(PDO::FETCH_CLASS, 'App\Model\Participant');
        return $query->fetchAll();
    }
    
      public function create($participant)
    {
          
    
              $query=$this->db->prepare("insert into participant(nom,prenom,sexe,telephone,mail,profession,lieu_travail) values(?,?,?,?,?,?,?)");
       
  $query->execute(array($participant->getNom(),$participant->getPrenom(),$participant->getSexe(),$participant->getTelephone(),$participant->getMail(),$participant->getProfession(),$participant->getLieuTravail()));
              
       return   $this->db->lastInsertId();// PDO Driver DSN. Throws A PDOException.


        
    }
    
     public function delete($participantId)
         
    {
        
         $query=$this->db->prepare("delete from participant where id=? ");
       
return $query->execute(array($participantId));

    }
    
     public function deleteEvenementParticipant($participantId,$evenementId)
         
    {
        
         $query=$this->db->prepare("delete from evenement_participant where evenement_id=? and participant_id=? ");
       
return $query->execute(array($evenementId,$participantId));

    }
    
  public function update($participant)
    {
        $query=$this->db->prepare("update participant set nom=?, prenom=?, date_naissance=Now(), sexe=?, telephone=?, mail=?, profession=?, lieu_travail=? WHERE id=?");
       
 return $query->execute(array($participant->getNom(),$participant->getPrenom(),$participant->getSexe(), $participant->getTelephone(), $participant->getMail(), $participant->getProfession(), $participant->getLieuTravail(), $participant->getId()));
    }

}
