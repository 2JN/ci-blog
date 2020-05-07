<?php
class User_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function register() {
        $enc_password = md5($this->input->post('password'));

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'zipcode' => $this->input->post('zipcode'),
            'password' => $enc_password,
        );

        return $this->db->insert('users', $data);
    }

    public function check_user_exists($data) {
        $query = $this->db->get_where('users', $data);

        return empty($query->row_array());
    }
}