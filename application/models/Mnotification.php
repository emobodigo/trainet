<?php
class Mnotification extends CI_Model {
    public function showNotificationi($id){
        $query = $this->db->query("SELECT n.`id_notification`, n.`id_from`, n.`id_to`, n.`notification`, n.`date`, n.`time`, m.`firstname`, m.`lastname` FROM `notification` n JOIN `member` m ON n.`id_from` = m.`id_member` WHERE n.`id_to`='".$id."'");
        return $query;
    }
    public function showNotificationm($id){
        $query = $this->db->query("SELECT n.`id_notification`, n.`id_from`, n.`id_to`, n.`notification`, n.`date`, n.`time`, m.`firstname`, m.`lastname` FROM `notification` n JOIN `instruktur` m ON n.`id_from` = m.`id_instruktur` WHERE n.`id_to`='".$id."'");
        return $query;
    }
    public function setNotificationcancel($to){
        $message = "".$this->session->userdata('firstname')." ".$this->session->userdata('lastname')." has canceled order on ".date("d m Y")." ".date("H:i")."";
        $data = array(
            'id_from' => $this->session->userdata('id_member'),
            'id_to' => $to,
            'notification' => $message,
            'date' => date("Y-m-d"),
            'time' => date("H:i")
        );
        $query = $this->db->insert('notification', $data);
        return $query;
    }
    
    public function setNotificationvalidation($to){
        $message = "Your account has been validate by Administrator on ".date("d m Y")." ".date("H:i")."";
        $data = array(
            'id_from' => 0,
            'id_to' => $to,
            'notification' => $message,
            'date' => date("Y-m-d"),
            'time' => date("H:i")
        );
        $query = $this->db->insert('notification', $data);
        return $query;
    }
    public function setNotificationacceptorderi($to){
        $message = "Your order has been canceled by ".$this->session->userdata('firstname')." ".$this->session->userdata('lastname')." on ".date("d m Y")." ".date("H:i")."";
        $data = array(
            'id_from' => $this->session->userdata('id_instruktur'),
            'id_to' => $to,
            'notification' => $message,
            'date' => date("Y-m-d"),
            'time' => date("H:i")
        );
        $query = $this->db->insert('notification', $data);
        return $query;
    }
    public function setNotificationacceptorderai($to){
        $message = "Your order has been accepted by ".$this->session->userdata('firstname')." ".$this->session->userdata('lastname')." on ".date("d m Y")." ".date("H:i")."";
        $data = array(
            'id_from' => $this->session->userdata('id_instruktur'),
            'id_to' => $to,
            'notification' => $message,
            'date' => date("Y-m-d"),
            'time' => date("H:i")
        );
        $query = $this->db->insert('notification', $data);
        return $query;
    }
    public function setNotificationorder($data){
        $this->db->insert('notification', $data);
    }
}

?>