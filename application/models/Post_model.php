<?php

class Post_model extends CI_Model
{
	public function AmbilData(){
		$this->db->order_by('id_post','desc');
		return $this->db->get('post')->result_array();
	}

	public function AmbilDetailData($id){
		return $this->db->get_where('post', ['id_post' => $id])-> row_array();
	}

	public function HapusDataStory($id){
		$this->db->where('id_post', $id);
		$this->db->delete('post');
	}

	public function ubahDataStory()
	{
		$data = [
			"name" => $this->input->post('name', true),
			"email" => $this->input->post('email', true),
			"title" => $this->input->post('title', true),
			"categories" => $this->input->post('categories', true),
			"story" => $this->input->post('story',true),
			
		];

		$this->db->where('id_post', $this->input->post('id'));
		$this->db->update('post', $data);
	}

	public function CariData(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('name', $keyword);
		$this->db->or_like('title', $keyword);
		$this->db->or_like('categories', $keyword);
		return $this->db->get('post')->result_array();
	}
	




	// public function CheckAuthor($id){
	// 	return $this->db->get_where('post', ['id_post' => $id])-> row_array();
	// } 
}