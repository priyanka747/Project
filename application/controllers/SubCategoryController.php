<?php
class SubCategoryController extends CI_Controller 
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
                    $data['categories']=$this->category_model->get_all_sub_categories();
                    $this->load->view('includes/header-view');
					$this->load->view('includes/nav',$data);
					$this->load->view('viewcategory',$data);
					$this->load->view('includes/footer-view');
			}
		}
    }
    function addsubcategory(){
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
                $data['subcategories']=$this->category_model->get_all_sub_categories();
                $this->load->view('includes/header');
                $this->load->view('includes/nav',$data);
                $this->load->view('addsubcategory',$data);
                $this->load->view('includes/footer');
        }
    }
    }
    function add(){
        $name = $this->security->xss_clean($this->input->post('cate_name'));
        $desc = $this->security->xss_clean($this->input->post('cate_desc'));
        $this->form_validation->set_rules('cate_name','category_name','required');
        if ($this->form_validation->run() == TRUE) {
            $data = array(
            'category_name'=>$name,
            'description'=>$desc,
            'date_created'=>date('Y-m-d H:i:s'),
            'created_by'=>$this->session->userdata('user')[0]['user_id'],
            'modified_by'=>$this->session->userdata('user')[0]['user_id']);
            //  print_r($data);
            $res=$this->category_model->add_subcategory($data);
            
            if($res)
            {
                $this->session->set_userdata('success','sub-category added successfully <a href="'. base_url().'viewsubcategories" >view</a>');
                redirect(base_url('addsubcategory'));
            }
            else{

                $this->session->set_userdata('error','trouble while adding new sub-category');
                redirect(base_url('viewsubcategories'));
            }				
        }else {
            $data['subcategories']=$this->category_model->get_all_sub_categories();
            $this->load->view('includes/header');
            $this->load->view('includes/nav',$data);
            $this->load->view('addcategory',$data);
            $this->load->view('includes/footer');
         }
    }
    function edit($id){
        $data['subcategory']=$this->category_model->get_sub_category($id);
        $this->load->view('includes/header');
        $this->load->view('includes/nav',$data);
        $this->load->view('addcategory',$data);
        $this->load->view('includes/footer');
    }

    function delete($id){
        if($this->category_model->is_parent($id)>0){
            if($this->category_model->update_subcategory($data)){
               if( $this->category_model->delete_subcategory($id))
               {
                $this->session->set_userdata('success','trouble while adding new sub-category');
                redirect(base_url('viewsubcategories'),'refresh');
                
               }else{
                $this->session->set_userdata('error','trouble while adding new sub-category');
                $this->load->view('includes/header');
                $this->load->view('includes/nav',$data);
                $this->load->view('viewcategory',$data);
                $this->load->view('includes/footer');
               }
            }
            $this->session->set_userdata('error','trouble while adding new sub-category');
        $this->load->view('includes/header');
        $this->load->view('includes/nav',$data);
        $this->load->view('viewcategory',$data);
        $this->load->view('includes/footer');
        }
    }
}
?>
