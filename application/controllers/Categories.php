<?php
class Categories extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Mcategories');
    }
    public function index(){
        $data['fitness'] = $this->Mcategories->showCategories('fitness');
        $data['yoga'] = $this->Mcategories->showCategories('yoga');
        $data['aerobic'] = $this->Mcategories->showCategories('aerobic');
        $data['swimming'] = $this->Mcategories->showCategories('swimming');
        $this->load->view('Vheadermember');
        $this->load->view('Vcategories', $data);
        $this->load->view('footer.html');
    }

    public function showcategories(){
        $sport = $this->uri->segment(3);
        $data['sport'] = $this->Mcategories->showCategories($sport);
        $this->load->view('Vheadermember');
        $this->load->view('Vlistinstruktur', $data);
        $this->load->view('footer.html');
    }
}

?>