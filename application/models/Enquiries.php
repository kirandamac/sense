<?php

    class Enquiries extends CI_Model {

        public function put_enquiry( $aEnquiry ) {

            $this->db->insert('enquiries' , $aEnquiry);
        }
    }
?>
