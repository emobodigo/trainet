<?php
class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Minstruktur');
        $this->load->model('Mmember');
        $this->load->model('Morder');
        $this->load->model('Mnotification');
    }
    public function index(){
        if($this->session->userdata('level') != 3){
            $this->session->set_flashdata('error','Restricted access area');
            redirect('login');
        }
        $data['listinstruktur'] = $this->Minstruktur->showallinstruktur();
        $data['listinstrukturuv'] = $this->Minstruktur->showallinstrukturuv();
        $this->load->view('Vheaderadmin');
        $this->load->view('Vadmin', $data);
        $this->load->view('footer.html');
    }
    public function editinstruktur(){
        $id = $this->uri->segment(3);
        $data['instruktur'] = $this->Minstruktur->showInstruktur($id);
        $this->load->view('Vheaderadmin');
        $this->load->view('Veditinstruktur', $data);
        $this->load->view('footer.html');
    }
    public function confirmpayorder(){
        $idtrainer = $this->input->post("id_istruktur");
        $idorder = $this->input->post("id_order");
        $pay = $this->input->post("pay");
        $bill = $this->Morder->showOrder($idorder);
        if(ctype_digit($idtrainer) == true | ctype_digit($idorder) == true | ctype_digit($pay) == true){
            foreach($bill->result_array() as $row){
                if($row["bill"] == $pay){
                    $this->Morder->payorder($idorder);
                    $message['message'] = "Pembayaran anda diterima";
                    $message['page'] = base_url('index.php/admin');
                    $this->load->view('alert', $message);
                }else{
                    $message['message'] = "Pembayaran anda tidak sesuai. Transaksi ditolak";
                    $message['page'] = base_url('index.php/admin');
                    $this->load->view('alert', $message);
                }
            }
        }else{
            $message['message'] = "Pembayaran anda tidak sesuai. Transaksi ditolak";
            $message['page'] = base_url('index.php/admin');
            $this->load->view('alert', $message);
        }
    }
    public function instrukturValidation(){
        $id = $this->uri->segment(3);
        $this->Minstruktur->validationinstruktur($id);
        $this->Mnotification->setNotificationvalidation($id);
        redirect('admin');
    }
    public function update(){
        $this->form_validation->set_rules('firstname','Firstname','required');
        $this->form_validation->set_rules('lastname','Lastname','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('phone','Handphone','required');
        $this->form_validation->set_rules('foto','Foto');

        if($this->form_validation->run() == FALSE){
            $this->load->view('Vsignup');
        } else {
            $id = $this->input->post('id_instruktur');
            $username = $this->input->post('username');
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
            $data['password'] = $this->input->post('password');
            $data['email'] = $this->input->post('email');
            $data['address'] = $this->input->post('address');
            $data['handphone'] = $this->input->post('phone');
            $data['photo'] = $gambar['file_name'];
            $data2['password'] = $this->input->post('password');

            $this->Minstruktur->editdata($id, $data);
            $this->Misntruktur->editdatamulti($username,$data2);
            redirect('Admin');
        }
    }
    public function viewtambahInstruktur(){
        $this->load->view('Vheaderadmin');
        $this->load->view('Vdaftarinstruktur');
        $this->load->view('footer.html');
    }

    public function tambahInstruktur(){
        $this->form_validation->set_rules('firstname','Firstname','required');
        $this->form_validation->set_rules('lastname','Lastname','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('level','Level','required');
        $this->form_validation->set_rules('phone','Handphone','required');
        $this->form_validation->set_rules('sport','Sport','required');
        $this->form_validation->set_rules('cost','Cost','required');
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
            $data['sport'] = $this->input->post('sport');
            $data['cost'] = $this->input->post('cost');
            $data['photo'] = $gambar['file_name'];
            $data2['username'] = $this->input->post('username');
            $data2['password'] = $this->input->post('password');
            $data2['level'] = $this->input->post('level');

            $this->Minstruktur->addInstruktur($data);
            $this->Minstruktur->addmultiins($data2);
            $pesan['message'] = "Pendaftaran Berhasil, Instruktur terdaftar";
            $this->load->view('Vheaderadmin');    
            $this->load->view('Vsukses', $pesan);
            $this->load->view('footer.html');

        }            
    }
}
?>