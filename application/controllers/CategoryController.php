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
        $fname = $this->security->xss_clean($this->input->post('cate_nmae'));
		$lname = $this->security->xss_clean($this->input->post('cate_nmae'));
		$email = $this->security->xss_clean($this->input->post('r_email'));
		$password = sha1($this->security->xss_clean($this->input->post('r_pass')));
        $data = array(
        'firstname'=>$fname,
        'lastname'=>$lname,
        'email'=>$email,
        'password'=>$password,
        'date_created'=>date('Y-m-d H:i:s')
    );
		$res= $this->user_model->register($data);
		if($res)
		{
            $this->session->set_userdata('login_status','register_success');
            $this->session->set_userdata('login_status','register_success');
			redirect(base_url('index.php/login'));
		}
    }
}
?>