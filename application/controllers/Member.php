<?php
class Member extends CI_Controller {
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('level') != 2){
            $this->session->set_flashdata('error','Anda belum menjadi member, silahkan login');
            redirect('login');
        }
        $this->load->model('Mlogin');
        $this->load->model('Mnotification');
        $this->load->model('Morder');
        $this->load->model('Minstruktur');
        $this->load->model('Mdiscount');
        $this->load->model('Mreview');
        $this->load->model('Mmessage');
        $this->load->model('Mmember');
        $this->load->model('Mreview');
    }
    public function index(){
        $data ['notification'] = $this->Mnotification->showNotificationm($this->session->userdata('id_member'));
        $data ['orderon'] = $this->Morder->showonOrderm($this->session->userdata('id_member'));
        $data ['ordercom'] = $this->Morder->showcomOrderm($this->session->userdata('id_member'));
        $data ['user'] = $this->Mmember->memberid($this->session->userdata('id_member'));
        $this->load->view('Vheadermember');
        $this->load->view('Vprofile', $data);
        $this->load->view('footer.html');
    }
    public function order(){
        $id = $this->uri->segment(3);
        $data['instruktur'] = $this->Minstruktur->showInstruktur($id);
        $this->load->view('Vheadermember');
        $this->load->view('Vneworder', $data);
        $this->load->view('footer.html');
    }
    public function makeOrder(){
        $data = array(
            'id_instruktur' => $this->input->post('id_instruktur'),
            'id_member' => $this->session->userdata('id_member'),
            'date_order' => $this->input->post('date'),
            'time_order' => $this->input->post('time'),
            'duration' => $this->input->post('duration'),
            'meeting_point' => $this->input->post('meeting_point')
        );
        $message = $this->session->userdata('firstname')." ".$this->session->userdata('lastname')." has ordered on ".$this->input->post('date')." ".$this->input->post('time');
        $data2 = array(
            'id_from' => $this->session->userdata('id_member'),
            'id_to' => $this->input->post('id_instruktur'),
            'notification' => $message,
            'date' => date("Y-m-d"),
            'time' => date("H:i")
        );
        $this->Morder->setOrder($data);
        $this->Mnotification->setNotificationorder($data2);
        redirect('member');
    }

    public function cancelOrderm(){
        $id = $this->uri->segment(3);
        $to = $this->uri->segment(4);
        $this->Morder->cancelOrder($id);
        $this->Mnotification->setNotificationcancel($to);
        redirect('member');
    }
    public function sendmessage(){
        $id = $this->uri->segment(3);
        $data['instruktur'] = $this->Minstruktur->showInstruktur($id);
        $this->load->view('Vheadermember');
        $this->load->view('Vsendmessagem', $data);
        $this->load->view('footer.html');
    }
    public function postmessage(){
        $data = array(
            'id_to' => $this->input->post('id'),
            'id_from' => $this->session->userdata('id_member'),
            'message' => $this->input->post('message'),
            'date' => date("Y-m-d"),
            'time' => date("H:i")
        );
        $this->Mmessage->setMessage($data);
        redirect('member');
    }
    public function messagenotification(){
        $data ['notification'] = $this->Mnotification->showNotificationm($this->session->userdata('id_member'));
        $data ['message'] = $this->Mmessage->getMessagem($this->session->userdata('id_member'));
        $this->load->view('Vheadermember');
        $this->load->view('Vmessagenotification', $data);
        $this->load->view('footer.html');
    }
    public function showInvoice(){
        $id = $this->uri->segment(3);
        $data['invoice'] = $this->Morder->getInvoice($id);
        $this->load->view('Vheadermember');
        $this->load->view('Vinvoice', $data);
        $this->load->view('footer.html');
    }

    public function profileinstruktur(){ 
        $id = $this->uri->segment(3);
        $data['instruktur'] = $this->Minstruktur->showInstruktur($id);
        $data['review'] = $this->Mreview->getReview($id);
        $this->load->view('Vheadermember');
        $this->load->view('Vinstruktur', $data);
        $this->load->view('footer.html');
    }

    public function edit(){
        $id = $this->uri->segment(3);
        $data['member'] = $this->session->userdata();
        $data ['user'] = $this->Mmember->memberid($this->session->userdata('id_member'));
        $this->load->view('Vheadermember');
        $this->load->view('Veditprofile',$data);
        $this->load->view('footer.html');
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
            $id = $this->input->post('id_member');
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

            $this->Mmember->editdata($id, $data);
            $this->Mmember->editdatamulti($username,$data2);

            $data ['notification'] = $this->Mnotification->showNotificationm($this->session->userdata('id_member'));
            $data ['orderon'] = $this->Morder->showonOrderm($this->session->userdata('id_member'));
            $data ['ordercom'] = $this->Morder->showcomOrderm($this->session->userdata('id_member'));
            $data ['user'] = $this->Mmember->memberid($this->session->userdata('id_member'));
            $this->load->view('Vheadermember');
            $this->load->view('Vprofile',$data);
            $this->load->view('footer.html');
        }
    }
    public function discount(){
        $code = $this->input->post('code');
        $sport = $this->input->post('sport');
        $id = $this->input->post('id');
        $today = date("Y-m-d");
        $datadiscount = $this->Mdiscount->getDiscount($code);
        $dataorder = $this->Morder->showOrder($id);
        if($datadiscount->num_rows() != 0){
            $from = $datadiscount->row()->valid_from;
            $until = $datadiscount->row()->valid_until;
            $discount = $datadiscount->row()->discount;
            $code2 = $datadiscount->row()->code;
            $sport2 = $datadiscount->row()->sport;
            $bill = $dataorder->row()->bill;
            $status = $dataorder->row()->discount;
            if($today>=$from && $today<=$until){
                if($status == 1){
                    $message['message'] = "Anda sudah menggunakan kode ini";
                    $message['page'] = base_url('index.php/member/showinvoice/').$id;
                    $this->load->view('alert', $message);
                }else{
                    if($code == $code2 && $sport == $sport2){
                        $message['message'] = "Kode yang anda masukan diterima";
                        $message['page'] = base_url('index.php/member/showinvoice/').$id;
                        $this->load->view('alert', $message);
                        $newbill = $bill - (($bill*$discount)/100);
                        $this->Morder->setDiscount($newbill, $id);   
                    }else{
                        $message['message'] = "Kode yang anda masukan tidak berlaku untuk item ini";
                        $message['page'] = base_url('index.php/member/showinvoice/').$id;
                        $this->load->view('alert', $message);
                    } 
                }
            }else{
                $message['message'] = "Kode anda sudah tidak berlaku";
                $message['page'] = base_url('index.php/member/showinvoice/').$id;
                $this->load->view('alert', $message);
            }
        }else{
            $message['message'] = "Kode anda Salah";
            $message['page'] = base_url('index.php/member/showinvoice/').$id;
            $this->load->view('alert', $message);
        }
    }
    public function makeReview(){
        $id = $this->uri->segment(3);
        $data["instruktur"] = $this->Minstruktur->showInstruktur($id);
        $data["id"] = $id;
        $this->load->view('Vheadermember');
        $this->load->view('Vreview', $data);
        $this->load->view('footer.html');
    }
    public function review(){
        $id = $this->input->post('id_order');
        $data = array(
            'id_instruktur' => $this->input->post('id_instruktur'),
            'id_member' => $this->session->userdata('id_member'),
            'review' => $this->input->post('review'),
            'date' => date("Y-m-d")
        );
        $this->Mreview->setReview($data);
        $this->Morder->setReview($id);
        redirect('member');
    }
}

?>