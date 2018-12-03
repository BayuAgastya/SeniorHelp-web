<?php 
	class Model extends CI_model{
		public function __construct(){
			$this->load->database();
		}

		function login_check($where){		
		return $this->db->get_where('user',$where);
		}	

		function provider_check($where){		
		return $this->db->get_where('provider',$where);
		}

		public function insert_data($table,$data){
			$this->db->insert($table,$data);
		}

		public function delete_data($table,$where){
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function get_services(){
			return $this->db->get('service');
		}

		public function get_service($id_service = FALSE){
			if($id_service == FALSE){
				$query = $this->db->get('service');
				return $query->result_array();
			}

			$query=$this->db->get_where('service',array('id_service' => $id_service));

			return $query->row_array();
		}

		public function request_list($id){
			$this->db->select('request.*,service.*,user.id_user');
			$this->db->from('request,service,user');
			$this->db->where('service.id_service=request.id_service');
			$this->db->where('request.id_user',$id);

			return $this->db->get();
		}

	}
?>