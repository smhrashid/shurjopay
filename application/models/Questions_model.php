<?php

class Questions_model extends CI_Model {

    public function get_tabs() {
        $this->db->insert('TabQst', $_POST);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}
