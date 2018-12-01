<?php
class Mdiscount extends CI_Model {
    public function getDiscount($code){
        $query = $this->db->where('code', $code)
                          ->get('discount');
        return $query;
    }
}
?>