<?php
class Mmessage extends CI_Model{
    public function getMessagei($id){
        $query = $this->db->query("SELECT m.id_message, m.message, m.time, m.date, m.id_from, m.id_to, u.firstname, u.lastname FROM `message` m JOIN `member` u ON m.id_from = u.id_member WHERE m.id_to='".$id."'");
        return $query;
    }
    public function getMessagem($id){
        $query = $this->db->query("SELECT m.id_message, m.message, m.time, m.date, m.id_from, m.id_to, i.firstname, i.lastname FROM `message` m JOIN `instruktur` i ON m.id_from = i.id_instruktur WHERE m.id_to='".$id."'");
        return $query;
    }
    public function setMessage($data){
        $this->db->insert('message', $data);
    }
}
?>