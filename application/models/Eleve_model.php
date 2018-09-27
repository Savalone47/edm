<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eleve_model extends CI_Model
{

    function login($matricule, $password)
    {
        $this->db->select('*');
        $this->db->where('matricule',$matricule);
        $this->db->from('eleve');
        $q = $this->db->get();

        $user = $q->row_array();

        // var_dump(password_hash('kkvvddii',PASSWORD_BCRYPT));die();

        // var_dump(password_verify($password, $user['pwd']));die();
        if($user['pwd']){
            if(password_verify($password, $user['pwd'])){
                // print_r($user);
                  // var_dump($user);die();
                return $user;
            }
            // else{
            //     print_r("***Mot de passe non-Concordants(password_verify failed)*** ");
            // }

        }
        return null;
    }
    
    function selectHoraire($idClass){
        $this->db->select('*');
        $this->db->from('horaire');
        $this->db->join('classe','horaire.idClasse = classe.id');
        $this->db->join('matiere','horaire.idMatiere = matiere.id');
        $this->db->join('jour','horaire.idJour = jour.id');
        $this->db->where('classe.id',$idClass);
        $res = $this->db->get()->result_array();

        return $res;
    }

    function selectCours($idClass){
        $this->db->select('*,m.nom as nomCours,m.description as descriptionCours', false);
        $this->db->from('dispenser as d');
        $this->db->join('matiere as m','d.idMatiere = m.id');
        $this->db->join('agent as a','d.idAgent = a.id');
        $this->db->join('classe as c','d.idClasse = c.id');
        $this->db->where('c.id',$idClass);
        $res = $this->db->get()->result_array();
        // var_dump($res = $this->db->get());die();

        return $res;
    }
}