<?php 
class Instruktur extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Mlogin');
        $this->load->model('Minstruktur');
        $this->load->model('Mmember');
        $this->load->model('Morder');
        $this->load->model('Mnotification');
        $this->load->model('Mmessage');
        $this->load->model('Mreview');
    }
    public function index(){
        if($this->session->userdata('level') != 1){
            $this->session->set_flashdata('error','Anda belum menjadi Instruktur, silahkan login');
            redirect('login');
        }
        $data ['notification'] = $this->Mnotification->showNotificationi($this->session->userdata('id_instruktur'));
        $data ['orderon'] = $this->Morder->showonOrderi($this->session->userdata('id_instruktur'));
        $data ['orderacc'] = $this->Morder->showaccOrderi($this->session->userdata('id_instruktur'));
        $data ['ordercom'] = $this->Morder->showcomOrderi($this->session->userdata('id_instruktur'));
        $data ['message'] = $this->Mmessage->getMessagei($this->session->userdata('id_instruktur'));
        $data ['instruktur'] = $this->Mlogin->ambilid();
        $this->load->view('Vheaderinstruktur');
        $this->load->view('Vprofileinstruktur', $data);
        $this->load->view('footer.html');
    }

    public function confirmorder(){
        $id = $this->uri->segment(3);
        $stat = $this->uri->segment(4);
        $to = $this->uri->segment(5);
        if($stat == 1){
            $this->Morder->acceptorderi($id);
            $this->Mnotification->setNotificationacceptorderai($to);
            redirect('instruktur');
        }else{
            $this->Morder->declineorderi($id);
            $this->Mnotification->setNotificationacceptorderi($to);
            redirect('instruktur');
        }
    }
    public function showOrder(){
        $id = $this->uri->segment(3);
        $data['order'] = $this->Morder->showOrder($id);
        $idmember = $data['order']->row()->id_member;
        $data['member'] = $this->Mmember->ambilid($idmember);
        $this->load->view('Vheaderinstruktur');
        $this->load->view('Vorder', $data);
        $this->load->view('footer.html');
    }
    public function endorder(){
        $cost = $this->Minstruktur->showInstruktur($this->session->userdata('id_instruktur'))->row()->cost;
        $id = $this->uri->segment(3);
        $duration = $this->uri->segment(4);
        $bill = $cost * $duration;
        $this->Morder->endOrder($id, $bill);
        redirect('instruktur');
    }
    public function sendmessage(){
        $id = $this->uri->segment(3);
        $data['member'] = $this->Mmember->ambilid($id);
        $this->load->view('Vheaderinstruktur');
        $this->load->view('Vsendmessagei', $data);
        $this->load->view('footer.html');
    }
    public function postmessage(){
        $data = array(
            'id_to' => $this->input->post('id'),
            'id_from' => $this->session->userdata('id_instruktur'),
            'message' => $this->input->post('message'),
            'date' => date("Y-m-d"),
            'time' => date("H:i")
        );
        $this->Mmessage->setMessage($data);
        redirect('instruktur');
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
            redirect('admin');
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
            $this->Minstruktur->editdatamulti($username,$data2);
            redirect('admin');
        }
    }
}
?>