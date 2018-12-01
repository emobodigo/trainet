<?php
class Mmember extends CI_Model {
    public $table = 'member';
    public function ambilid($id){
        $query = $this->db->where('id_member', $id)
            ->get('member');
        return $query;
    }    

    public function sessmem($username){
        $this->db->where('username', $username);
        $hasil = $this->db->get($this->table)->row();
        return $hasil;
    }
    public function daftar($data){
        $this->db->insert('member',$data);
    }

    public function daftarmulti($data){
        $this->db->insert('login_multi',$data);
    }

    public function memberid($id){
        $query = $this->db->query("SELECT * FROM member WHERE id_member = '$id'");
        return $query;
    }

    function editdata($id,$data){
        $this->db->where('id_member',$id);
        $this->db->update('member',$data);
    }	

    function editdatamulti($id,$data){
        $this->db->where('username',$id);
        $this->db->update('login_multi',$data);
    }

    public function find($id){
        $hasil = $this->db->where('id_member', $id)
            ->limit(1)
            ->get('member');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }
}

?>