<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

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
	public function index() {

		if( ! empty($_POST) ) {


			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('contact_number', 'Contact Number', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');

			if( $this->form_validation->run() == TRUE) {

				$aEnquiry = array();

				$aEnquiry['firstname']			= $this->input->post('fname');
				$aEnquiry['lastname']			= $this->input->post('lname');
				$aEnquiry['email']				= $this->input->post('email');
				$aEnquiry['contact_number'] 	= $this->input->post('contact_number');
				$aEnquiry['message']  			= $this->input->post('message');
				$aEnquiry['purpose']  			= $this->input->post('purpose');
				$aEnquiry['created_on']  		= date('Y-m-d H:i:s');

				$this->load->model('Enquiries');
				$this->Enquiries->put_enquiry( $aEnquiry );

		  }

		}


		$this->load->view('enquiry/contact_us');
	}
	public function list_enquiries() {

		$this->load->model('Enquiries');
		$result_set = $this->Enquiries->get_enquiries();
		$this->load->view('enquiry/list_enquiries', $result_set);
	}

	public function get_enquiry_purpose() {

		//foreach ( $result_set as $key => $data ):

			//$count = 0;
		//	print_r($data);
			$this->load->model('Enquiries');
			$this->Enquiries->get_enquiry_purpose();
			//$count++;
		//endforeach;
	}

	public function add_enquiry_reply() {


	}

}
