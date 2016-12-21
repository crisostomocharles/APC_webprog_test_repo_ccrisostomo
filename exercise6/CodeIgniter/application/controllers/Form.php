<?php
class Form extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Form_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['users'] = $this->Form_model->get_users();
 
		$this->load->view('form/mypage4');
        $this->load->view('form/index', $data);
		$this->load->view('templates/footer');
    }
 
    public function view($nickname = NULL)
    {
        $data['users_item'] = $this->Form_model->get_users($nickname);
        
        if (empty($data['users_item']))
        {
            show_404();
        }
 
 
        $this->load->view('templates/header', $data);
        $this->load->view('form/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
 
		  $this->form_validation->set_rules('name', 'Name', 'required');
		  $this->form_validation->set_rules('nickname', 'Nickname', 'required');
		  $this->form_validation->set_rules('email', 'Email', 'required');
		  $this->form_validation->set_rules('gender', 'Gender', 'required');
		  $this->form_validation->set_rules('number', 'Number', 'required');
		  
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');
			$this->load->view('form/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->Form_model->set_users();
			
            $this->load->view('templates/header');
			 $this->load->view('form/create');
        }
    }
    
    public function edit()
    {
        $user_id = $this->uri->segment(3);
        
        if (empty($user_id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit an item';        
        $data['users_item'] = $this->Form_model->get_users_by_id($user_id);
        
          $this->form_validation->set_rules('name', 'Name', 'required');
		  $this->form_validation->set_rules('nickname', 'Nickname', 'required');
		  $this->form_validation->set_rules('email', 'Email', 'required');
		  $this->form_validation->set_rules('gender', 'Gender', 'required');
		  $this->form_validation->set_rules('number', 'Number', 'required');
		  
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('form/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->Form_model->set_users($user_id);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/form');
        }
    }
    
    public function delete()
    {
        $user_id = $this->uri->segment(3);
        
        if (empty($user_id))
        {
            show_404();
        }
                
        $users_item = $this->Form_model->get_users_by_id($user_id);
        
        $this->Form_model->delete_users($user_id);        
        redirect( base_url() . 'index.php/form');        
    }
	
	 public function success()
    {
		$this->load->view('form/success');
	}
}