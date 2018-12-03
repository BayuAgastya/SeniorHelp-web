<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function view($page = 'index'){
		if(!file_exists(APPPATH. 'views/pages/' .$page. '.php')){
			show_404();
		}

		$data['title'] = ucfirst($page);

		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}

	public function login_action(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->model->login_check($where)->num_rows();
		if($cek > 0){
			$get_user=$this->db->get_where("user",$where)->row_array();

			$data_session = array(
				'id_user' => $get_user['id_user'],
				'username' => $username
				);

			$this->session->set_userdata($data_session);
			redirect(base_url('costumer'));
		}
		else{
			$cek_provider=$this->model->provider_check($where)->num_rows();
			if($cek_provider > 0){
				$get_provider=$this->db->get_where("provider",$where)->row_array();
				$data_session = array(
					'id_provider' => $get_provider['id_provider'],
					'username' => $username
				);

				$this->session->set_userdata($data_session);
				redirect(base_url('provider'));
			}else{
				redirect(base_url('login'));
			}
		}
	}

	function register_action(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$name = $this->input->post('name');
		$location = $this->input->post('location');
		$address = $this->input->post('address');
		$email = $this->input->post('email');

		$id = $this->db->get('user')->num_rows();
		$help = date('his');

		$id+=1;

		$input_user = array(
			'id_user' => $help.''.$id,
			'username' => $username,
			'password' => md5($password)
		);

		$this->model->insert_data('user',$input_user);

		$input_dtl_user = array(
			'id_dtl_user'=>$help.''.$id,
			'id_user'=>$help.''.$id,
			'name'=>$name,
			'email'=>$email,
			'address'=>$address
		);
		$this->model->insert_data('dtl_user',$input_dtl_user);
		redirect(base_url('login'));
	}
}

?>
