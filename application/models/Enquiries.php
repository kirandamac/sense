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
    }
?>
