<?php
class Order extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Morder');
        $this->load->model('Mmember');
        $this->load->model('Minstruktur');
    }
    
}
?>