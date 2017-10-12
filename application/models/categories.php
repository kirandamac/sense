<?php

    class Categories extends CI_Model {

        public function put_category( $aCategory ) {

            $this->db->insert('categories' , $aCategory);
        }

        public function get_categories() {

            $query = $this->db->get('categories');
            $result = $query->result();
            $result_set = array (
                                        'aCategories' => $result
                                );
            return $result_set;
        }

        public function get_categories_by_group( $group_id ) {

            $this->db->select('*');
            $this->db->where('group_id', $group_id);
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

        public function update_category_groups($aCategory_group) {

            $id = $aCategory_group['id'];
            $data = array(
                        'status' => $aCategory_group['status']
                         );
            $this->db->where('id', $id);
            $this->db->update('category_group', $data);
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
