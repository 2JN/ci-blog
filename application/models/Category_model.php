<?php
class Category_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_categories($id = NULL) {
        if ($id === NULL) {
            $this->db->order_by('name');
            $query = $this->db->get('categories');
            return $query->result_array();
        }

        $query = $this->db->get_where('categories', array('id' => $id));
        return $query->row();
    }

    public function create_category() {
        $data = array(
            'name' => $this->input->post('name'),
            'user_id' => $this->session->userdata('user_id'),
        );

        return $this->db->insert('categories', $data);
    }

    public function delete_category($id) {
        $this->db->where('id', $id);
        return $this->db->delete('categories');
    }
}