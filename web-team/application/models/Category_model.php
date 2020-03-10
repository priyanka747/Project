
<?php
Class Category_model extends CI_Model
{
	function get_category($id)
	{
		$this->db->select(*);
		$this->db->from('category');
		$this->db->where('category_id',$id);
		$this->db->where('status','active');
		$this->db->order_by('data_created','desc');
		return $this->db->get()->result_array();
	}

	function get_categories()
	{
		$this->select->(*);
		$this->db->from('category');
		$this->db->where('status','active');
		$this->db->order_by('data_created','desc');
		return $this->db->get()->result_array();
	}

	function get_all_categories()
	{
		$this->select->(*);
		$this->db->from('category');
		$this->db->order_by('data_created','desc');
		return $this->db->get()->result_array();
	}

	function add_category($data)
	{
		return $this->db->insert('category',$data);
	}

	function update_category($data,$category_id)
	{
		$this->db->where('category_id',$category_id);
		return $this->db->update('category',$data);
	}

	function delete_category($data,$category_id)
	{
		$this->db->where('category_id',$category_id);
		return $this->db->delete->('category',$data);
	}

	function get_all_sub_categories()
	{
		$this->select->(*);
		$this->db->from('sub_categories');
		$this->db->where('parent_category !=' , '');
		$this->db->order_by('data_created','desc');
		return $this->db->get()->result_array();
	}
	function get_all_sub_categories_by_parent($parent_id)
	{
		$this->select->(*);
		$this->db->from('sub_categories');
		$this->db->where('parent_category',$parent_id);
		$this->db->order_by('data_created','desc');
		return $this->db->get()->result_array();
	}
}
?>
