<?php

class Admin extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('ion_auth'));
        $this->load->model(array('admin/employee'));
        
        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }        
    }

    public function index() {
        $this->db->select('*');
        $this->db->from('employees');
        $this->db->where('emp_status = 0');
        $query=$this->db->get();

        $data['empcount'] = $query->num_rows();
        
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "dashboard";
        $this->load->view($this->_container, $data);
    }

}
