<?php
class CategoryController extends CI_Controller 
{
	public function __Construct()
	{	error_reporting(-1);
        parent:: __construct();
        $this->load->model('category_model');
	}
	
	function index()
	{
		if(!$this->session->userdata('user')){
			
				$data['page'] = 'login';
				$this->load->view('includes/header-login');
				$this->load->view('login');
				$this->load->view('includes/footer-login');			
		}else{
			$user=json_decode(json_encode($this->session->userdata('user')),true);
			// print_r($user);
			if($user[0]['user_type']=='admin'){
                    $data['page'] = 'Dashboard';
                    $data['categories']=$this->category_model->get_all_categories();
                    $this->load->view('includes/header-view');
					$this->load->view('includes/nav',$data);
					$this->load->view('viewcategory',$data);
					$this->load->view('includes/footer-view');
			}
		}
    }
    function addcategory(){
        if(!$this->session->userdata('user')){
			
            $data['page'] = 'login';
            $this->load->view('includes/header-login');
            $this->load->view('login');
            $this->load->view('includes/footer-login');			
    }else{
        $user=json_decode(json_encode($this->session->userdata('user')),true);
        // print_r($user);
        if($user[0]['user_type']=='admin'){
                $data['page'] = 'Dashboard';
                $data['categories']=$this->category_model->get_all_categories();
                $this->load->view('includes/header');
                $this->load->view('includes/nav',$data);
                $this->load->view('addcategory',$data);
                $this->load->view('includes/footer');
        }
    }
    }
    function add(){
        $name = $this->security->xss_clean($this->input->post('cate_name'));
        $desc = $this->security->xss_clean($this->input->post('cate_desc'));
        $this->form_validation->set_rules('cate_name','category name','required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
            'category_name'=>$name,
            'description'=>$desc,
            'date_created'=>date('Y-m-d H:i:s'),
            'created_by'=>$this->session->userdata('user')[0]['user_id'],
            'modified_by'=>$this->session->userdata('user')[0]['user_id']);
            //  print_r($data);
            $res=$this->category_model->add_category($data);
            
            if($res)
            {
                $this->session->set_userdata('success','Email with temporary password sent to '.$email.' successfully');
                redirect(base_url('viewcategories'));
            }
            else{

                $this->session->set_userdata('error','Seems like email is not registered !! enter valid email address');
                redirect(base_url('viewcategories'));
            }				
        }else {
            $this->session->set_userdata('login_status','failed');
            $data['categories']=$this->category_model->get_all_categories();
            $this->load->view('includes/header');
            $this->load->view('includes/nav',$data);
            $this->load->view('addcategory',$data);
            $this->load->view('includes/footer');
         }
    }
}
?>