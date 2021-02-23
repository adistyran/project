<?php
	
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function post()
	{

		$data['judul'] = 'Post Timeline';
		$post['post'] = $this->Post_model->AmbilData();
		if( $this->input->post('keyword')) {
			$post['post'] = $this->Post_model->CariData();
		}

		$this->load->view('templates/header',$data);
		$this->load->view('post/post', $post);
		$this->load->view('templates/footer');
		
	}

	public function detailpost($id)
	{
		$data['judul'] = 'Detail Post';
		$data['post'] = $this->Post_model->AmbilDetailData($id);
		$this->load->view('templates/header', $data);
		$this->load->view('post/detailpost', $data);
		
	}

	public function hapusdata($id){
		$this->Post_model->HapusDataStory($id);
		$this->session->set_flashdata('flash','Deleted');
		redirect('post/post');

	}

	public function editpost($id)
	{
		$data['judul'] = 'Edit Story';
		$data['post'] = $this->Post_model->AmbilDetailData($id);
		$data['categories'] = ['Culture', 'Culinary','Music'];


		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('title','Title','required');
		
		if ($this->form_validation->run($id) == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('post/editpost', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->Post_model->ubahDataStory();
			$this->session->set_flashdata('flash', 'Edited'); 
			redirect('post/post');
			}
		
		
	}

	public function checkauthor()
	{
		$this->form_validation->set_rules('name','Name', 'trim|required');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
			
		if($this->form_validation->run() == FALSE){

			
			$data['judul'] = 'Check Author';
			$this->load->view('templates/header', $data);
			$this->load->view('post/checkauthor');
		}
		else{
			//validasinya sukses
		
			redirect('post/editpost');
		}
			
		}
	}



