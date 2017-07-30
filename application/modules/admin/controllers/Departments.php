<?php

class Departments extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/department'));
    }

public function index() {
        $departments = $this->department->get_all();

        $data['departments'] = $departments;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "departments_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('dept_name')) {
            $data=$this->storeinputs();
            $this->department->insert($data);
            redirect('/admin/departments', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "departments_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('dept_name')) {
            $data=$this->storeinputs();
            $this->department->update($data, $id);
            redirect('/admin/departments', 'refresh');
        }

        $department = $this->department->get($id);

        $data['department'] = $department;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "departments_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->department->delete($id);
        redirect('/admin/departments', 'refresh');
    }
    
    public function departments_list(){
        $data = $this->department->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['dept_name'] = $this->input->post('dept_name');
            $data['dept_desc'] = $this->input->post('dept_desc');     
    }
}
