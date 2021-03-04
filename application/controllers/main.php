<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    /*

* Super Class
 *
 * @package Package Name
 * @subpackage  Subpackage
 * @category    Category
 * @author  Radhika L
 * @link    http:'http://localhost/trainerport/'
     
    */


    // admin dashboard
    public function dashboard()
    {
        $this->load->view('dashboard');
    }
    // index
    public function start()
    {
        $this->load->view('index');
    }
    //trainer Registration
    public function reg()
    {
        $this->load->view('reg');
    }
    //master dashboard
     public function masterdashboard()
    {
        $this->load->view('masterdashboard');
    }
    //trainer trainer 
     public function masterreg()
    {
        $this->load->view('masterreg');
    }
    //trainer dashboard
     public function trainerdashboard()
    {
        $this->load->view('trainerdashboard');
    }
    //// Registration validation
    public function trainer_registration()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("fname","fname",'required');
        $this->form_validation->set_rules("lname","lname",'required');
        $this->form_validation->set_rules("address","address",'required');
        $this->form_validation->set_rules("district","district",'required');
        $this->form_validation->set_rules("gender","gender",'required');
        $this->form_validation->set_rules("qualification","qualification",'required');
        $this->form_validation->set_rules("number","number",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("subjects","subjects",'required');
        $this->form_validation->set_rules("experience","experience",'required');
        $this->form_validation->set_rules("adhar","adhar",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $pass=$this->input->post("password");
        $encpass=$this->mainmodel->encpswd($pass);
        $a=array("fname"=>$this->input->post("fname"),
                "lname"=>$this->input->post("lname"),
                "address"=>$this->input->post("address"),
                "district"=>$this->input->post("district"),
                "gender"=>$this->input->post("gender"),
                "qualification"=>$this->input->post("qualification"),
                "number"=>$this->input->post("number"),
                "email"=>$this->input->post("email"),
                 "subjects"=>$this->input->post("subjects"),
                 "experience"=>$this->input->post("experience"),
                 "adhar"=>$this->input->post("adhar"),
                 "password"=>$this->input->post("password"));
       $b=array("email"=>$this->input->post("email"),
                "password"=>$encpass,
                "usertype"=>'1');
        $this->mainmodel->inreg($a,$b);  
        redirect(base_url().'main/masterdashboard');
        }
    }
   
//trainer profile update
public function trainerprofile()

{

$this->load->model('mainmodel');
$id=$this->session->id;
$data['user_data']=$this->mainmodel->updateform($id);
$this->load->view('trainer_profile',$data);

}
//trainer profile updates
public function updatedetails1()
{

$a=array("fname"=>$this->input->post("fname"),
"lname"=>$this->input->post("lname"),
"address"=>$this->input->post("address"),
"district"=>$this->input->post("district"),
"gender"=>$this->input->post("gender"),
"qualification"=>$this->input->post("qualification"),
"number"=>$this->input->post("number"),
"email"=>$this->input->post("email"),
"subjects"=>$this->input->post("subjects"),
"experience"=>$this->input->post("experience"),
"adhar"=>$this->input->post("adhar"));
$this->load->model('mainmodel');

if($this->input->post("update"))
{
    
$id=$this->session->id;
$this->mainmodel->updates($a,$id);
redirect('main/trainer_profile','refresh');
}
}





}
	