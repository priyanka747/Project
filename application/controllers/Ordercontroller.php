<?php
 
class Ordercontroller extends CI_Controller
{
	public function __Construct()
	{
		error_reporting(-1);
		parent:: __Construct();
		$this->load->model('order_model');
	}

	function index()
	{
		if(!$this->session->userdata('user')){
			$data['page'] = 'login';
			$this->load->view('include/header-login');
			$this->load->view('login');
			$this->load->view('includes/footer-login');
		}
		else{
			$user=json_decode(json_encode($this->session->userdata('user')),true);
			//print_r ($user);

			if($user[0]['user_type']=='admin'){
				$data['page'] = 'dashboard';
				$data['orders']=$this->order_model->get_orders();
				// print_r($data);				
				$this->load->view('includes/header-view');
				$this->load->view('includes/nav',$data);
				$this->load->view('vieworder',$data);
				$this->load->view('includes/footer-view');
			}
		}
	}

	function addproduct(){
		if(!$this->session->userdata('user')){
			$data['page'] = 'login';
			$this->load->view('includes/header-login');
			$this->load->view('login');
			$this->load->view('includes/footer-login');
		}
		else{
			$user=json_decode(json_encode($this->session->userdata('user')),true);

			if($user[0]['user_type']=='admin'){
				$data['page'] = 'dashboard';
				$data['categories']=$this->product_model->get_all_products();
				$this->load->view('includes/header');
				$this->load->view('includes/nav',$data);
				$this->load->view('addproduct',$data);
				$this->load->view('includes/footer');

			}
		}
	}

	function add(){
		$name = $this->security->xss_clean($this->input->post('prod_name'));
		$desc = $this->security->xss_clean($this->input->post('prod_desc'));
		$this->form_validation->set_rules('prod_name','product_name','required');

		if($this->form_validation->run()== TRUE){
				$data == array(
				'product_name'=>$name,
				'description'=>$desc,
				'date_created'=>date('Y-m-d H:i:s'),
				'created_by'=>$this->session->userdate('user')[0]['user_id'],
				'modified_by'=>$this->session->userdate('user')[0]['user_id']);

				$res=$this->product_model->add_product($data);

				if($res)
				{
					$this->session->set_userdata('success','product added successfully.! <a href="'.base_url().'viewproducts" >view</a>');
					redirect(base_url('addproduct'));
				}
				else{
					$this->session->set_userdata('error','trouble while adding new products');
					redirect(base_url('viewproducts'));
				}
			}else{
					$data['categories']=$this->product_model->get_all_products();
				$this->load->view('includes/header');
				$this->load->view('includes/nav',$data);
				$this->load->view('addproducts',$data);
				$this->load->view('includes/footer');	
			}
		}	
			
	function delete($id){
		//if($this->product_model->is_parent($id)>0){
			//if($this->product_model->update_product($data)){
				if($this->order_model->cancel_order($id)){
					$this->session->set_userdata('success','Order deleted successfully.!');
					redirect(base_url('vieworders'),'refresh');
				}
				else{
					$this->session->set_userdata('error','trouble while adding new order');
					$this->load->view('include/header');
					$this->load->view('include/nav',$data);
					$this->load->view('vieworders',$data);
					$this->load->view('include/footer');
				}
			//}else{
			//	$this->session->set_userdata('error','trouble while adding new order');
			//	$this->load->view('include/header');
			//		$this->load->view('include/nav',$data);
			//		$this->load->view('vieworder',$data);
			//		$this->load->view('include/footer');
				
			}
		//}else{

		//}	

		
}

		

?>
