<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->model('Categories');
		if( !empty($_POST) ) {

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');

			if( $this->form_validation->run() == TRUE ) {

				$aCategory = array();

				$aCategory['name']       		= $this->input->post('name');
				$aCategory['title']       		= $this->input->post('title');
				$aCategory['description'] 		= $this->input->post('description');
				$aCategory['group_id']  	    = $this->input->post('category_group');
				$aCategory['created_on'] 		= date('Y-m-d H:i:s');

				$this->Categories->put_category( $aCategory );
				$this->session->set_flashdata('message','Success!!!');
			}
		}
		$aResult_Category_groups = $this->Categories->get_category_groups();
		$this->load->view('category/create_category', $aResult_Category_groups);
	}

	public function get_categories() {

		$aCategories = $this->Categories->get_categories();

	}

	public function get_categories_by_group() {

		$group_id = 1;
		$aCategories = $this->Categories->get_categories_by_group($group_id);

	}

	public function edit_category() {

		$id = $this->input->get('id');

		if( !empty($_POST) ) {

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');

			if( $this->form_validation->run() == TRUE) {

				$aCategory['id']				= $id;
				$aCategory['title'] 	    	= $this->input->post('title');
				$aCategory['description']   	= $this->input->post('description');
				$aCategory['category_status']	= $this->input->post('category_status');

				$this->Categories->update_category($aCategory);

				$Category_groups = $this->Categories->get_category_groups();
				$Category_group_status = $this->Categories->get_status();
				$Categories = $this->Categories->get_categories();
				$aCategory_group_Data = array_merge($Category_groups, $Category_group_status, $Categories);
				$this->load->view('category/add_category_group', $aCategory_group_Data);

			}

		}

		else {

				$id = $this->input->get('id');
				$aCategory_groups = $this->Categories->get_category_groups();
				$aCategory = $this->Categories->get_category_by_id($id);
				$Category_status = $this->Categories->get_status();
				$aCategory_Data = array_merge($aCategory_groups, $aCategory, $Category_status);
				$this->load->view('category/edit_category', $aCategory_Data);
		}

	}

	public function category_group() {

		if( !empty($_POST) ) {

			$this->form_validation->set_rules('group_name', 'Group Name', 'required');
			$this->form_validation->set_rules('group_title', 'Group Title', 'required');

			if( $this->form_validation->run() == TRUE ) {

				$aCategory = array();

				$aCategory_group['name'] 	= $this->input->post('group_name');
				$aCategory_group['title'] 	= $this->input->post('group_title');
				$aCategory_group['status'] 	= 1;

				$this->Categories->put_category_group( $aCategory_group );
				$this->session->set_flashdata('message','successfully added new group');
			}
		}

		$Category_groups = $this->Categories->get_category_groups();
		$Category_group_status = $this->Categories->get_status();
		$Categories = $this->Categories->get_categories();
		$aCategory_group_Data = array_merge($Category_groups, $Category_group_status, $Categories);
		$this->load->view('category/add_category_group', $aCategory_group_Data);
	}

	public function edit_category_group() {

		$id = $this->input->get('id');

		if( !empty($_POST) ) {

			$aCategory_group['id'] 	   = $this->input->get('id');
			$aCategory_group['title']  = $this->input->post('group_title');
			$aCategory_group['status'] = $this->input->post('category_group_status');

			$this->Categories->update_category_groups($aCategory_group);

			$Category_groups = $this->Categories->get_category_groups();
			$Category_group_status = $this->Categories->get_status();
			$Categories = $this->Categories->get_categories();
			$aCategory_group_Data = array_merge($Category_groups, $Category_group_status, $Categories);
			$this->load->view('category/add_category_group', $aCategory_group_Data);
		}
		else {

			$Category_groups = $this->Categories->get_category_groups();
			$Category_group_status = $this->Categories->get_status();
			$aCategory_group_Data = array_merge($Category_groups, $Category_group_status);
			$this->load->view('category/edit_category_group', $aCategory_group_Data);

		}

	}

}
