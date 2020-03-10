<?php 

  class Product_model extends CI_Model {
  	  function get_product ($id) {
  	  	return $this->db->select('*')->from ('product')->where ('product_id',$id)->get()->result_array(); 
  	  }

  	  function get_all_products {
  	  	return $this->db->select('*')->from ('product')->where ('status !=','delete')->order_by('date_created',desc)->get()->result_array(); 
  	  }
  	   function get_products {
  	  	return $this->db->select('*')->from ('product')->where ('status ','active')->order_by('date_created',desc)->get()->result_array(); 
  	  }
  	  function create_product($data,$images)
	{
		$product_image='';
		$product_id= $this->db->insert('product',$data)->insert_id();
		$count=count($images);
		for($i=0;$i<$count;$i++){
					$image_id= $this->db->insert('image',$images[$i])->insert_id();
					$product_image[$i]=array(
						'product_id' => $product_id,
						'image_id'=>$image_id	,
						'status'=>'active',	
						'entry_date'=>date("Y-m-d H:i:s"));
		}
		$this->db->insert_batch('product_image', $product_image);
	}

	function delete_product($product_id)
	{

		// $query = $this->db->query('SELECT * FROM product_image where product_id=$product_id');
		// $count = $query->numrows();
		// for($i=0;$i<$count;$i++){
		// 	$this->db->set('status', 'deleted');
		// 	$this->db->where('product_id', $product_id);
		// 	$result2 = $this->db->update('product');
		// }


		$this->db->set('status', 'deleted');
		$this->db->where('product_id', $product_id);
		$result2 = $this->db->update('product_image');

		$this->db->set('status', 'delete');
		$this->db->where('product_id', $product_id);
		$result2 = $this->db->update('product');

		return $result1&&$result2;
	}

	function modify_product($data, $product_id)
	{
		$this->db->where('product_id', $product_id);
		return $this->db->update('product', $data);
  	 
    }
    //filter function
    function filter_Result($data)
    {
    	$this->db->select('*');
    	$this->db->from('product');
    	$this->db->where($data);
    	$this->db->order_by('date_create', 'desc');
    	  return $this->db->get()->result_array();

    }

  }
