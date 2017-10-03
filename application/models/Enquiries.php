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

        public function get_enquiry_purpose() {

                $this->db->select('title');
                $this->db->where('id', 1);
                $query = $this->db->get('enquiry_purposes');
                $purpose = $query->result();
                $purpose = array (
                                            'purpose' => $purpose
                                 );

                echo "<pre>";
                    print_r($purpose);
                echo "</pre>";

        }
    }
?>
