<?php
class Morder extends CI_Model {
    public function showonOrderm($id){
        $query = $this->db->query("SELECT o.`review`, o.`id_instruktur`, o.`id_order`,  o.`date_order`, o.`time_order`, o.`meeting_point`, o.`duration`, i.`firstname`, i.`lastname` FROM `orders` o JOIN `instruktur` i ON o.`id_instruktur`= i.`id_instruktur` WHERE o.`id_member`='".$id."' AND o.`status`='0'");
        return $query;
    }
    public function showcomOrderm($id){
        $query = $this->db->query("SELECT o.`review`, o.`paid`, o.`id_instruktur`, o.`id_order`,  o.`date_order`, o.`time_order`, o.`meeting_point`, o.`duration`, i.`firstname`, i.`lastname` FROM `orders` o JOIN `instruktur` i ON o.`id_instruktur`= i.`id_instruktur` WHERE o.`id_member`='".$id."' AND o.`status`='2'");
        return $query;
    }
    public function showonOrderi($id){
        $query = $this->db->query("SELECT o.`review`, o.`id_instruktur`, o.`id_order`,  o.`date_order`, o.`time_order`, o.`meeting_point`, o.`duration`, m.`firstname`, m.`lastname`, m.`id_member` FROM `orders` o JOIN `member` m ON o.`id_member`= m.`id_member` WHERE o.`id_instruktur`='".$id."' AND o.`status`='0'");
        return $query;
    }
    public function showcomOrderi($id){
        $query = $this->db->query("SELECT o.`review`, o.`paid`, o.`id_instruktur`, o.`id_order`,  o.`date_order`, o.`time_order`, o.`meeting_point`, o.`duration`, m.`firstname`, m.`lastname`, m.`id_member` FROM `orders` o JOIN `member` m ON o.`id_member`= m.`id_member` WHERE o.`id_instruktur`='".$id."' AND o.`status`='2'");
        return $query;
    }public function showaccOrderi($id){
        $query = $this->db->query("SELECT o.`paid`, o.`id_instruktur`, o.`id_order`,  o.`date_order`, o.`time_order`, o.`meeting_point`, o.`duration`, m.`firstname`, m.`lastname`, m.`id_member` FROM `orders` o JOIN `member` m ON o.`id_member`= m.`id_member` WHERE o.`id_instruktur`='".$id."' AND o.`status`='1'");
        return $query;
    }
    
    public function acceptorderi($id){
        $this->db->set('status', 1);
        $this->db->where('id_order', $id);
        $this->db->update('orders');
    }
    public function declineorderi($id){
        $this->db->set('status', 3);
        $this->db->where('id_order', $id);
        $this->db->update('orders');
    }
    public function cancelOrder($id){
        $query = $this->db->delete('orders', array('id_order' => $id));
        return $query;
    }
    
    public function getInvoice($id){
        $query = $this->db->query("SELECT o.`bill`, o.`id_instruktur`, o.`id_order`,  o.`date_order`, o.`time_order`, o.`meeting_point`, o.`duration`, i.`firstname`, i.`lastname`, i.`sport` FROM `orders` o JOIN `instruktur` i ON o.`id_instruktur`= i.`id_instruktur` WHERE o.`id_order`='".$id."'");
        return $query;
    }
    public function payorder($a){
        $this->db->set('paid', 1);
        $this->db->where('id_order', $a);
        $this->db->update('orders');
    }
    public function showOrder($id){
        $query = $this->db->where('id_order', $id)
                          ->get('orders');
        return $query;
    }
    public function endOrder($id, $bill){
        $this->db->set('status', 2);
        $this->db->set('bill', $bill);
        $this->db->where('id_order', $id);
        $this->db->update('orders');
    }
    public function setDiscount($bill, $id){
        $this->db->set('bill', $bill);
        $this->db->set('discount', 1);
        $this->db->where('id_order', $id);
        $this->db->update('orders');
    }
    public function setOrder($data){
        $this->db->insert('orders', $data);
    }
    public function setReview($id){
        $this->db->set('review', 1)
                 ->where('id_order', $id)
                 ->update('orders');
    }
}

?>