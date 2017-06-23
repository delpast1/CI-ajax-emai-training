<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->database();
        $this->load->model("customerInfo");
        $this->load->library('form_validation');
        $this->load->library('email');
    }

    // public function load_form()
    // {
    //     $this->load->view('diguru-view');
    //     $this->load->helper('form');
    // }

    // public function addInfo(){
    //     $info = $this->input->post('info');
        
    // }

    // public function index() { 
    //     $this->load->model("customerInfo");
    //     $data["list"] = $this->customerInfo->getList();
    //     $this->load->view("index", $data);
    // }

    public function index() {

        $this->load->view("diguru-view");
        
    }

    public function submit() {

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('firstName', 'FirstName', 'required');
        $this->form_validation->set_rules('lastName', 'LastName', 'required');
        $this->form_validation->set_rules('phoneNumber', 'PhoneNumber', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('question', 'Question', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();

            $result = array(
                "status" => false,
                "message" => $errors
            );

            echo json_encode($result);
        } else {
             $data = array(
                'firstName' => $this->input->post('firstName'),
                'lastName' => $this->input->post('lastName'),
                'phoneNumber' => $this->input->post('phoneNumber'),
                'email' => $this->input->post('email'),
                'question' => $this->input->post('question')
            );
            $this->customerInfo->insert($data);

            $this->email->from('clonetotest@gmail.com', 'Lam Quang');
            $this->email->to('clonetotest@gmail.com');
            $this->email->cc('qu4ngco@gmail.com');
            
            $this->email->subject('Customer Info');
            $this->email->message('First Name: '.$data['firstName'].'. Last Name: '.$data['lastName'].'. Phone Number: '.$data['phoneNumber'].
                '. Email: '.$data['email'].'. Question: '.$data['question'].'.');
            if ($this->email->send()){
                $result = array(
                    "status" => true,
                    "message" => "Thank for submitting."
                );
                echo json_encode($result);
            } else {
                $result = array(
                    "status" => true,
                    "message" => $this->email->print_debugger()
                );
                echo json_encode($result);
            }
            
        }
    }


}

?>