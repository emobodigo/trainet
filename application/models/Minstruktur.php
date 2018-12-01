<?php
class Minstruktur extends CI_Model {
    public $table = 'instruktur';
    public function sessins($username){
        $this->db->where('username', $username);
        $hasil = $this->db->get($this->table)->row();
        return $hasil;
    }
    public function showInstruktur($id){
        $query = $this->db->where('id_instruktur',$id)
            ->get('instruktur');
        return $query;
    }
    public function showallinstruktur(){
        $query = $this->db->where('validation', 1)
            ->get('instruktur');
        return $query;
    }
    public function showallinstrukturuv(){
        $query = $this->db->where('validation', 0)
            ->get('instruktur');
        return $query;
    }
    public function validationinstruktur($id){
        $this->db->set('validation', 1);
        $this->db->where('id_instruktur', $id);
        $this->db->update('instruktur');
    }
    function editdata($id,$data){
        $this->db->where('id_instruktur',$id);
        $this->db->update('instruktur',$data);
    }	

    function editdatamulti($id,$data){
        $this->db->where('username',$id);
        $this->db->update('login_multi',$data);
    }
    public function addInstruktur($id){
        $this->db->insert('instruktur',$id);
    }
    
    public function addmultiins($id){
        $this->db->insert('login_multi',$id);
    }
}
?>