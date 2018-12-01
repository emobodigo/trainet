<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainet extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    public function index(){
        if($this->session->userdata('level') == 2){
            $this->load->view('Vheadermember');
            $this->load->view('index');
            $this->load->view('footer.html');
        }else if($this->session->userdata('level') == 1){
            $this->load->view('Vheaderinstruktur');
            $this->load->view('index');
            $this->load->view('footer.html');
        }else if($this->session->userdata('level') == 3){
            $this->load->view('Vheaderadmin');
            $this->load->view('index');
            $this->load->view('footer.html');
        }else{
            $this->load->view('Vheaderguest');
            $this->load->view('index');
            $this->load->view('footer.html');

        }
    }
}

?>