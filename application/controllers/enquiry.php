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

		$this->load->model('Enquiries');
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

				$this->Enquiries->put_enquiry( $aEnquiry );

				$this->session->set_flashdata('message','Success!!!');

				$existing_user = FALSE;
				$user_email = "sample@gmail.com";
				if( $aEnquiry['email'] == $user_email) {

					$existing_user = TRUE;
				}

				if(!$existing_user) {

				}

				$config['mailtype'] = 'html';
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'utf-8';
				$config['wordwrap'] = TRUE;
				$this->email->initialize($config);


				$this->email->from('kiran.damac@gmail.com', 'Sense');
				$this->email->to('kiran.damac@gmail.com');
				//$this->email->cc('another@another-example.com');
				//$this->email->bcc('them@their-example.com');

				$this->email->subject('Enquiry');
				$message = "<p>Thanks for registration and you have successfuly register.</p>";
				$message .= "<p>Please click link here to follow your enquiry</p>";
                //Here is my problem
				$enquiry_id = 5;
				$message = "";

				$this->email->message($message);

				$this->email->send();

		  }

		}

		$aEnquiry_purposes = $this->Enquiries->get_enquiry_purposes();
		$this->load->view('enquiry/enquiry', $aEnquiry_purposes);
	}
	public function list_enquiries() {

		$this->load->model('Enquiries');
		$aEnquiry_purposes = $this->Enquiries->get_enquiry_purposes();
		$result_set = $this->Enquiries->get_enquiries();
		$aList_Enquiry_Data = array_merge($result_set, $aEnquiry_purposes);
		$this->load->view('enquiry/list_enquiries', $aList_Enquiry_Data);

	}

	public function get_enquiry_purposes() {

		$this->load->model('Enquiries');
		$this->Enquiries->get_enquiry_purposes();

	}

	public function add_enquiry_reply() {

		$this->load->model('Enquiries');
	  	$enquiry_id = $this->input->post('enquiry_id');
		$message 	= $this->input->post('reply_message');
		$aEnquiry_reply = array();

			$aEnquiry_reply['enquiry_id']  = $enquiry_id;
			$aEnquiry_reply['author_id']   = 1;
			$aEnquiry_reply['message']     = $message;
			$aEnquiry_reply['created_on']  = date('Y-m-d H:i:s');

		$this->Enquiries->put_enquiry_reply( $aEnquiry_reply );
	}

	public function view_conversation() {

		$this->load->model('Enquiries');
		$enquiry_id = $this->input->get('id');
		$aEnquiry = $this->Enquiries->get_enquiry_by_id($enquiry_id);
		$aEnquiry_reply = $this->Enquiries->get_enquiry_reply($enquiry_id);
		$aConversation_Data = array_merge($aEnquiry, $aEnquiry_reply);
		$this->load->view('enquiry/conversation', $aConversation_Data);
	}

	public function add_conversation() {

		$this->load->model('Enquiries');
		$message 	= $this->input->post('message');
		$enquiry_id = $this->input->get('id');
		$aEnquiry_reply = array();

			$aEnquiry_reply['enquiry_id']  = $enquiry_id;
			$aEnquiry_reply['author_id']   = 1;
			$aEnquiry_reply['message']     = $message;
			$aEnquiry_reply['created_on']  = date('Y-m-d H:i:s');

		$this->Enquiries->put_enquiry_reply( $aEnquiry_reply );
		$aEnquiry = $this->Enquiries->get_enquiry_by_id($enquiry_id);
		$aEnquiry_reply = $this->Enquiries->get_enquiry_reply($enquiry_id);
		$aConversation_Data = array_merge($aEnquiry, $aEnquiry_reply);
		$this->load->view('enquiry/conversation', $aConversation_Data);
	}

}
