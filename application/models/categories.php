<?php

    class Categories extends CI_Model {

        public function put_category( $aCategory ) {

            $this->db->insert('categories' , $aCategory);
        }

        public function get_categories() {

            $query = $this->db->get('categories');
            $this->db->order_by("created_on", "desc");
            $result = $query->result();
            $result_set = array (
                                        'aCategories' => $result
                                );
            return $result_set;
        }

        public function get_categories_by_group( $group_name ) {

            $this->db->select('*');
            $this->db->where('group_name', $group_name);
            $query = $this->db->get('categories');
            $result = $query->result();
            $result_set = array (
                                'aCategories' => $result
                              );
            return $result_set;
        }

        public function put_category_group( $aCategory_group ) {

            $this->db->insert('category_group' , $aCategory_group);
        }

        public function get_category_groups() {

            $query = $this->db->get('category_group');
            $result = $query->result();
            $result_set = array (
                                        'aCategory_group' => $result
                                );
            return $result_set;
        }

        public function get_status() {

            $query = $this->db->get('status');
            $result = $query->result();
            $result_set = array (
                                'aStatus' => $result
                              );
            return $result_set;
        }

    }
?>
