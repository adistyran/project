<?php
	
defined('BASEPATH') OR exit('No direct script access allowed');

class Story extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Story_model');
		$this->load->library('form_validation');
	}


	public function story()
	{
		$data['judul'] = 'Write a Story';
		$this->load->view('story/story', $data);
		$this->load->view('templates/footer');
	}


	public function tambah()
	{
		$data['judul'] = 'Write a Story';


		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('title','Title','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('story/story');
			$this->load->view('templates/footer');
		}
		else
		{
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/home/img/image/';
			$config['file_name'] = '';
			$this->load->library('upload', $config);


			if ($_FILES['image']['name'] != null) 
			{
				if ($this->upload->do_upload('image')) 
				{
					$post['image'] = $this->upload->data('file_name');
					$this->Story_model->tambahDataStory($post);
					$this->session->set_flashdata('flash', 'posted'); 
					redirect('post/post');
				}
				else
				{
					echo $this->upload->display_errors();
				}
			}
			else 
			{
				$post['image'] = null;
				$this->Story_model->tambahDataStory($post);
				$this->session->set_flashdata('flash', 'posted'); 
				redirect('post/post');
			}
		}
		
	}
}
