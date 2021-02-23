<?php

class Story_model extends CI_Model
{
	public function tambahDataStory($post)
	{
		$data = [
			"name" => $this->input->post('name', true),
			"email" => $this->input->post('email', true),
			"title" => $this->input->post('title', true),
			"categories" => $this->input->post('categories', true),
			"story" => $this->input->post('story',true),
			'image' => $post['image'],
			
		];

		$this->db->insert('post', $data);
	}

}



