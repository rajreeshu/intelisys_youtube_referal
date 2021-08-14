<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		if($refered_by=$this->uri->segment(3)){
			$this->session->set_userdata('intelisys_referal_program_refered_by',$refered_by);
		}
		if(!$this->security->xss_clean($this->session->userdata('intelisys_referal_program'))){
			$this->load->view('before_login');
		}else{
			redirect('welcome/dashboard');
		}
		
	}
	public function signup_login(){
		if(!$this->security->xss_clean($this->session->userdata('intelisys_referal_program'))){
		$this->load->view('before_signup');
	}else{
		redirect('welcome/dashboard');
	}
	}

	public function login(){
		if(!$this->security->xss_clean($this->session->userdata('intelisys_referal_program'))){
		$this->load->view('login');
	}else{
		redirect('welcome/dashboard');
	}
	}

	public function signup(){
		if(!$this->security->xss_clean($this->session->userdata('intelisys_referal_program'))){
		$this->load->view('signup');
	}else{
		redirect('welcome/dashboard');
	}
	}

	public function dashboard(){
		
		if($user_id=$this->security->xss_clean($this->session->userdata('intelisys_referal_program'))){

			$user_data=$this->db->select('referal_id,subscribed')->where('user_id',$user_id)->get("user_detail")->row();
			$total_referal=$this->db->where("refered_by",$user_data->referal_id)->get("user_detail")->num_rows();
			$this->session->unset_userdata('intelisys_referal_program_refered_by');
			$this->load->view('dashboard',['user_id'=>$user_id,'referal_id'=>$user_data->referal_id,'total_referal'=>$total_referal,'subscribed'=>$user_data->subscribed]); 
		}else{
			redirect("");
		}
	}

	public function logout() {
        $this->session->unset_userdata('intelisys_referal_program');
        redirect("");
    }




}

?>
