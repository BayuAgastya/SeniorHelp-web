<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provider extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('id_provider') <= 0){
			redirect(base_url("login"));
		}
		$id_provider = $this->session->userdata('id_provider');
		$get_provider=$this->db->get_where("provider",array('id_provider'=>$id_provider))->row_array();
		$data_session = array(
				'id_provider' => $get_provider['id_provider'],
				'name' => $get_provider['name']
				);
		$this->session->set_userdata($data_session);
	}
	
	public function view($main = 'index'){
		if(!file_exists(APPPATH. 'views/pages/provider/' .$main. '.php')){
			show_404();
		}
		$data['notifications'] = $this->provider_model->request_notification()->result();
		$data['count_notifications'] = $this->provider_model->request_list(0)->num_rows();
		$data['requests'] = $this->provider_model->request_list(0)->result();

		$this->load->view('templates/h_provider');
		$this->load->view('pages/provider/'.$main, $data);
		$this->load->view('templates/f_provider');
	}

	public function accept_request($id_request){
		$id_provider = $this->session->userdata('id_provider');
		$where=array(
			'id_request'=> $id_request
		);
		$data=array(
			'status' => 1,
			'id_provider' => $id_provider
		);

		$this->provider_model->update_data('request',$where,$data);
		redirect(base_url('provider'));
	}

	public function complete_request($id_request){
		$id_provider = $this->session->userdata('id_provider');
		$where=array(
			'id_request'=> $id_request
		);
		$data=array(
			'status' => 2
		);

		$this->provider_model->update_data('request',$where,$data);
		redirect(base_url('provider/accepted_request'));
	}

	public function accepted_request(){
		$id_provider = $this->session->userdata('id_provider');
		$data['notifications'] = $this->provider_model->request_notification()->result();
		$data['count_notifications'] = $this->provider_model->request_list(0)->num_rows();
		$data['requests'] = $this->provider_model->request_list(1,$id_provider)->result();
		$data['completes'] = $this->provider_model->request_list(2,$id_provider)->result();
		$cek = $this->provider_model->request_list(2,$id_provider)->num_rows();

		if($cek>0){
			$data['cek']=1;
		}else{
			$data['cek']=0;
		}

		$this->load->view('templates/h_provider');
		$this->load->view('pages/provider/accepted_request', $data);
		$this->load->view('templates/f_provider');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}