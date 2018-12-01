<?php
class Mlogin extends CI_Model{
    
    function cek(){
        $username = set_value('username');
        $pass = set_value('password');
        $level = set_value('level');
        $passx = md5($pass);
        $hasil = $this->db->where('username', $username)
                          ->where('password', $pass)
                          ->limit(1)
                          ->get('login_multi');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }
    
    
    public function ambilid(){
        $userid = $this->session->userdata('username');
        $tes1 = $this->session->userdata('lastname');
        $hasil = $this->db->get_where('member', array('username' => $userid, 'lastname' => $tes1));
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
}
?>