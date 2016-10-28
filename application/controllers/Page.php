<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('level_one/header');
        $this->load->view('level_one/home');
        $this->load->view('level_one/navigation');
        $this->load->view('level_one/about');
        $this->load->view('level_one/mapping');
        $this->load->view('level_one/speakers');
        $this->load->view('level_one/partners');
        $this->load->view('level_one/gallery');
        $this->load->view('level_one/contacts');
        $this->load->view('level_one/script');
    }
    public function index_old()
    {
        $this->load->view('level_three/header');
        $this->load->view('level_three/home');
        $this->load->view('level_three/navigation');
        $this->load->view('level_three/about');
        $this->load->view('level_three/mapping');
        $this->load->view('level_three/speakers');
        $this->load->view('level_three/partners');
        $this->load->view('level_three/gallery');
        $this->load->view('level_three/contacts');
        $this->load->view('level_three/script');
    }




    public function send_email(){
        $to=$_POST["to"];
        $subject=$_POST["subject"];
        $message="My email is ".$_POST['email']." ".$_POST['message'];
        mail($to, $subject, $message,null);

        echo json_encode("success");
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */