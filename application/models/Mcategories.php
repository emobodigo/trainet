<?php
class Mcategories extends CI_Model{
    public function showCategories($cat){
        $query = $this->db->where('sport',$cat)
                          ->get('instruktur');
        return $query;
    }
}

?>