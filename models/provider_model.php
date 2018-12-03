<?php 
	class Provider_model extends CI_model{
		public function __construct(){
			$this->load->database();
		}

		function request_notification(){		
			$this->db->select('request.*,service.*,dtl_user.*');
			$this->db->from('request,service,dtl_user');
			$this->db->where('service.id_service=request.id_service');
			$this->db->where('dtl_user.id_user=request.id_user');
			$this->db->where('request.status=0');
			$this->db->order_by('request.id_request', 'DESC');
			$this->db->limit('4');

			return $this->db->get();
		}	

		function request_list($status){			
			$this->db->select('request.*,service.*,dtl_user.*');
			$this->db->from('request,service,dtl_user');
			$this->db->where('service.id_service=request.id_service');
			$this->db->where('dtl_user.id_user=request.id_user');
			$this->db->where('request.status',$status);

			return $this->db->get();
		}	

		function accepted_request_list($status,$id_provider){			
			$this->db->select('request.*,service.*,dtl_user.*');
			$this->db->from('request,service,dtl_user');
			$this->db->where('service.id_service=request.id_service');
			$this->db->where('dtl_user.id_user=request.id_user');
			$this->db->where('request.status',$status);
			$this->db->where('request.id_provider',$id_provider);

			return $this->db->get();
		}	

		function complete_request_list(){			
			$this->db->select('request.*,service.*,dtl_user.*');
			$this->db->from('request,service,dtl_user');
			$this->db->where('service.id_service=request.id_service');
			$this->db->where('dtl_user.id_user=request.id_user');
			$this->db->where('request.status=2');

			return $this->db->get();
		}	


		function update_data($table,$where,$data){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}

?>