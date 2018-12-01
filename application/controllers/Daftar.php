<?php 
class Daftar extends CI_Controller{
    
    function __construct(){
            parent::__construct();
            $this->load->model('Mmember');
            $this->load->helper(array('form','url'));
        }
    
    function index(){
        $this->form_validation->set_rules('firstname','Firstname','required');
        $this->form_validation->set_rules('lastname','Lastname','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('level','Level','required');
        $this->form_validation->set_rules('phone','Handphone','required');
        $this->form_validation->set_rules('foto','Foto');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('Vsignup');
        } else {
            $namafile = 'file_';
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 2048;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;
            $config['file_name'] = $namafile;
            $this->load->library('upload',$config);
            $this->upload->do_upload('foto');
            $gambar = $this->upload->data();
            $data['firstname'] = $this->input->post('firstname');
            $data['lastname'] = $this->input->post('lastname');
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $data['email'] = $this->input->post('email');
            $data['gender'] = $this->input->post('gender');
            $data['address'] = $this->input->post('address');
            $data['level'] = $this->input->post('level');
            $data['handphone'] = $this->input->post('phone');
            $data['photo'] = $gambar['file_name'];
            $data2['username'] = $this->input->post('username');
            $data2['password'] = $this->input->post('password');
            $data2['level'] = $this->input->post('level');
            
            $this->Mmember->daftar($data);
            $this->Mmember->daftarmulti($data2);
            $pesan['message'] = "Pendaftaran Berhasil, silahkan Login";
            $this->load->view('Vheaderguest');    
            $this->load->view('Vsukses', $pesan);
            $this->load->view('footer.html');
        }
    }
    
    public function upload($record){
        $this->form_validation->set_rules('foto','Foto');
            if ($_FILES['foto']['name']){
                if($this->upload->do_upload('foto')){
                    $gambar = $this->upload->data();
                    $data['photo'] = $gambar['file_name'];
                    $this->Mmember->daftar($data);
                }
            }
    }
}
?>