<?php

    class Enquiries extends CI_Model {

        public function put_enquiry( $aEnquiry ) {

            $this->db->insert('enquiries' , $aEnquiry);
        }

        public function get_enquiries() {

            $query = $this->db->get('enquiries');
            $this->db->order_by("created_on", "desc");
            $result = $query->result();
            $result_set = array (
                                        'result' => $result
                                );
            return $result_set;
        }

        public function get_enquiry_purposes() {

            $query = $this->db->get('enquiry_purposes');
            $aPurposes = $query->result();
            $aPurposes = array (
                                    'purposes' => $aPurposes
                               );

            return $aPurposes;
        }

        public function put_enquiry_reply() {

            $this->db->insert('enquiry_replies' , $aEnquiry_reply);

        }
    }
?>
