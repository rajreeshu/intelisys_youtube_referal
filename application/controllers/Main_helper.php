<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_helper extends CI_Controller {

    public function signup(){
        $input=$this->security->xss_clean($this->input->post());
        $input['date_time']=date('Y-m-d H:i:s');
        $input['ip_address']=$_SERVER['REMOTE_ADDR'];   
        $input['referal_id']=substr(sha1(mt_rand()),17,7);
        $input['refered_by'] =$this->session->userdata('intelisys_referal_program_refered_by')==null?"":$this->session->userdata('intelisys_referal_program_refered_by');
        
        $password_new="//".$input['password'];
        $options = array('cost' => 11);
        $password_new_hash=password_hash($password_new,PASSWORD_BCRYPT,$options);
        $input['password']=$password_new_hash;


        $error=false;
        if($this->db->where("email",$input['email'])->get("user_detail")->num_rows()){
            $data['error_email']="Email already registerd";
            $error=true;
        }
        
        if($this->db->where("phone",$input['phone'])->get("user_detail")->num_rows()){
            $data['error_phone']="Phone No already registered";
            $error=true;
        }
        if($error){
            $data['data']=false;
           
        }else{
            $data['data']=$this->db->insert("user_detail",$input);
            $this->session->set_userdata('intelisys_referal_program',$this->db->insert_id());
        }

            
        
        

        

        // $data['data']=$input;

        $data['key']=$this->security->get_csrf_hash();
		echo json_encode($data);
    }


    public function login() {
        $input=$this->security->xss_clean($this->input->post());

        $user_data=$this->db->select("user_id,password")->where('email',$input['email'])->get("user_detail")->row();
        if($user_data){
            $data['data']=password_verify("//".$input['password'],$user_data->password);
            if($data['data']){
                $this->session->set_userdata('intelisys_referal_program',$user_data->user_id);
            }
        }else{
            $data['data']=false;
        }
        

        $data['key']=$this->security->get_csrf_hash();
		echo json_encode($data);

    }

    public function google_login(){
        $input=$this->security->xss_clean($this->input->post());

        $user_data=$this->db->select("user_id")->where('email',$input['email'])->get("user_detail")->row();
        if(isset($user_data->user_id)){
            $this->session->set_userdata('intelisys_referal_program',$user_data->user_id);
            $data['data']=true;
        }else{
            $refered_by =$this->session->userdata('intelisys_referal_program_refered_by')==null?"":$this->session->userdata('intelisys_referal_program_refered_by');
            $data['data']=$this->db->insert("user_detail",['name'=>$input['name'], 'email'=>$input['email'],'date_time'=>date('Y-m-d H:i:s'),'referal_id'=>substr(sha1(mt_rand()),17,7),'refered_by'=>$refered_by]);
            $this->session->set_userdata('intelisys_referal_program',$this->db->insert_id());
        }
        $data['key']=$this->security->get_csrf_hash();
		echo json_encode($data);
    }

    public function click_to_subscribe(){
        $input=$this->security->xss_clean($this->input->post());
        $data['data']=$this->db->where('user_id',$input['user_id'])->update('user_detail',['subscribed'=>1]);
        $data['key']=$this->security->get_csrf_hash();
		echo json_encode($data);
    }

    
 
}
?>