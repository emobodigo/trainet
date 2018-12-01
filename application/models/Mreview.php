<?php
class Mreview extends CI_Model{
    public function getReview($id){
        $query = $this->db->query("select m.`firstname`, m.`lastname`, r.`review`, r.`date` from `review` r join `member` m on r.`id_member` = m.`id_member` where r.`id_instruktur`='".$id."'");
        return $query;
    }
    public function setReview($data){
        $this->db->insert('review', $data);
    }
}
?>