
<?php
 
 class Settingscontroller extends CI_Controller
 {
     public function __Construct()
     {
         error_reporting(-1);
         parent:: __Construct();
         $this->load->model('setting_model');
     }
 
     function index(){
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
                //  $data['categories']=$this->product_model->get_all_products();
                 $this->load->view('includes/header');
                 $this->load->view('includes/nav',$data);
                 $this->load->view('updatecompanydetails',$data);
                 $this->load->view('includes/footer');
             }
         }
     }
 
     function banner(){
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
               //  $data['categories']=$this->product_model->get_all_products();
                $this->load->view('includes/header');
                $this->load->view('includes/nav',$data);
                $this->load->view('changebanners',$data);
                $this->load->view('includes/footer');
            }
        }
     }
     function socialmedia(){
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
                $data['fl']=$this->setting_model->get_setting_by_settings_name('fb');
            $data['ll']=$this->setting_model->get_setting_by_settings_name('li');
            $data['tl']=$this->setting_model->get_setting_by_settings_name('tweeter');
                $this->load->view('includes/header');
                $this->load->view('includes/nav',$data);
                $this->load->view('changesocialmedialinks',$data);
                $this->load->view('includes/footer');
            }
        }
     }
     function privacypolicy(){
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
               //  $data['categories']=$this->product_model->get_all_products();
                $this->load->view('includes/header');
                $this->load->view('includes/nav',$data);
                $this->load->view('changeprivacypolicy',$data);
                $this->load->view('includes/footer');
            }
        }
     }
 
     function update_privacy_policy(){
         $name = $this->security->xss_clean($this->input->post('pp'));
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
                     redirect(dase_url('addproduct'));
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
     function update_social_media(){
        $fb = $this->security->xss_clean($this->input->post('fl'));
        $li = $this->security->xss_clean($this->input->post('ll'));
        $tweeter = $this->security->xss_clean($this->input->post('tl'));
        $this->form_validation->set_rules('fl','facebook link','regex_match[/(?:http:\/\/)?(?:www\.)?facebook\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-]*)/]');//http(s)?:\/\/(www\.)?(facebook|fb)\.com\/[A-z0-9_\-\.]+\/?
        $this->form_validation->set_rules('ll','linkedin link','regex_match[(http(s)?:\/\/([\w]+\.)?linkedin\.com\/in\/[A-z0-9_-]+\/?)]');
        $this->form_validation->set_rules('tl','tweeter link','regex_match[(http(s)?:\/\/(.*\.)?twitter\.com\/[A-z0-9_]+\/?)]');

        if($this->form_validation->run()== TRUE){
                    $data=array(
                        array(
                            'settings_name'=>'fb',
                            'settings_value'=>$fb,
                            'modified_by'=>$this->session->userdata('user')[0]['user_id']
                        ),
                        array(
                            'settings_name'=>'li',
                            'settings_value'=>$li,
                            'modified_by'=>$this->session->userdata('user')[0]['user_id']
                        ),
                        array(
                            'settings_name'=>'tweeter',
                            'settings_value'=>$tweeter,
                            'modified_by'=>$this->session->userdata('user')[0]['user_id']
                        )
                    );
                $res=$this->setting_model->update_settings($data);

                if($res)
                {
                    $this->session->set_userdata('success','settings updated successfully.! ');
                    redirect(base_url('socialmedia'));
                }
                else{
                    $this->session->set_userdata('error','trouble while updating links');
                    redirect(base_url('socialmedia'));
                }
            }else{
               $data['page'] = 'settings';
               $data['fl']=$this->setting_model->get_setting_by_settings_name('fb');
           $data['ll']=$this->setting_model->get_setting_by_settings_name('li');
           $data['tl']=$this->setting_model->get_setting_by_settings_name('tweeter');
                $this->load->view('includes/header');
                $this->load->view('includes/nav',$data);
                $this->load->view('changesocialmedialinks',$data);
                $this->load->view('includes/footer');	
            }
	}
	
	function delete($id){
		if($this->setting_model->is_parent($id)>0){
			if($this->product_model->update_setting($data)){
				if($this->setting_model->delete_setting($id)){
					$this->session->set_userdata('success','delete.!');
					redirect(base_url('viewsetting'),'refresh');
				}
				else{
					$this->session->set_userdata('error','trouble while deleting');
					$this->load->view('include/header');
					$this->load->view('include/nav',$data);
					$this->load->view('viewsetting',$data);
					$this->load->view('include/footer');
				}
				$this->session->set_userdata('error','trouble while deleting');
				$this->load->view('include/header');
					$this->load->view('include/nav',$data);
					$this->load->view('viewsetting',$data);
					$this->load->view('include/footer');
				
			}
		}

    
    }
  
         
 
 ?>
 