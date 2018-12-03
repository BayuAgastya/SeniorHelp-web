<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Costumer extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('id_user') <= 0){
			redirect(base_url("login"));
		}
		$id_user = $this->session->userdata('id_user');
		$get_dtl_user=$this->db->get_where("dtl_user",array('id_user'=>$id_user))->row_array();
		$data_session = array(
				'id_dtl_user' => $get_dtl_user['id_dtl_user'],
				'name' => $get_dtl_user['name']
				);
		$this->session->set_userdata($data_session);
	}

	public function view($main = 'index'){
		if(!file_exists(APPPATH. 'views/pages/costumer/' .$main. '.php')){
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('pages/costumer/'.$main);
		$this->load->view('templates/footer');
	}

	public function service(){
		$data['services']=$this->model->get_services()->result();

		$this->load->view('templates/header');
		$this->load->view('pages/costumer/service',$data);
		$this->load->view('templates/footer');
	}

	public function service_add($id_service = NULL){
		$data['services'] = $this->model->get_service($id_service);

		$this->load->view('templates/header');
		$this->load->view('pages/costumer/service_add',$data);
		$this->load->view('templates/footer');
	}

	public function add_request(){
		$id_service = $this->input->post('id_service');
		$required_date = $this->input->post('required_date');
		$notes = $this->input->post('notes');
		$id_user = $this->session->userdata('id_user');

		$insert_data = array(
			'id_request' => '',
			'required_date' => $required_date,
			'notes' => $notes,
			'status' => 0,
			'id_service' => $id_service,
			'id_user' => $id_user
		);

		$this->model->insert_data('request',$insert_data);
		redirect(base_url('costumer/request_list'));
	}	

	public function request_list(){
		$id_user = $this->session->userdata('id_user');
		$data['requests']=$this->model->request_list($id_user)->result();

		$this->load->view('templates/header');
		$this->load->view('pages/costumer/request_list', $data);
		$this->load->view('templates/footer');
	}

	public function delete_request($delete){
		$where = array(
			'id_request'=>$delete
		);
		$this->model->delete_data('request',$where);
		redirect('costumer/request_list');
	}

	public function review($id_request){
		$data['services'] = $this->provider_model->get_service($id_service);

		$this->load->view('templates/header');
		$this->load->view('pages/costumer/review_services', $data);
		$this->load->view('templates/footer');

	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}