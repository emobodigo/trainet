<?php
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	}
 
	function index(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('Vlogin');
        } else {
            $this->load->model('Mlogin');
            $this->load->model('Mmember');
            $this->load->model('Minstruktur');
            $valid = $this->Mlogin->cek();
            
            if($valid == FALSE){
                $this->session->set_flashdata('error','Wrong Username/Password');
                redirect('login');
            } else {
                switch($valid->level){
                    case 1:
                        $hasil = $this->Minstruktur->sessins($valid->username);
                        $userData = array(
                        'id_instruktur' => $hasil->id_instruktur,
                        'firstname' => $hasil->firstname,
                        'lastname' => $hasil->lastname,
                        'username' => $hasil->username,
                        'password' => $hasil->password,
                        'level' => $hasil->level,
                        'email' => $hasil->email,
                        'gender' => $hasil->gender,
                        'handphone' => $hasil->handphone,
                        'address' => $hasil->address,
                        'photo' => $hasil->photo,
                        'status' => $hasil->status,
                        'validation' => $hasil->validation,
                        'sport' => $hasil->sport
                        );
                        $this->session->set_userdata($userData);
                        redirect('instruktur');
                        break;
                    case 2:
                        $hasil = $this->Mmember->sessmem($valid->username);
                        $userData = array(
                        'id_member' => $hasil->id_member,
                        'firstname' => $hasil->firstname,
                        'lastname' => $hasil->lastname,
                        'username' => $hasil->username,
                        'password' => $hasil->password,
                        'level' => $hasil->level,
                        'email' => $hasil->email,
                        'gender' => $hasil->gender,
                        'handphone' => $hasil->handphone,
                        'address' => $hasil->address,
                        'photo' => $hasil->photo
                        );
                        $this->session->set_userdata($userData);
                        redirect('member');
                        break;
                        case 3:
                        $level = array('level' => 3);
                        $this->session->set_userdata($level);
                        redirect('admin');
                        break;
                    default: break;
                }
            }
        }
	}
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
 
    
    public function signup(){
        $this->load->view('Vheaderguest');
        $this->load->view('Vsignup');
        $this->load->view('footer.html');
    }
 
}
?>