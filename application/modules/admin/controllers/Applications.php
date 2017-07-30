<?php

class Applications extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/application'));
    }

public function index() {
        $applications = $this->application->get_all();

        $data['applications'] = $applications;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "applications_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('appl_name')) {
            $this->storeinputs();
            $this->application->insert($data);
            redirect('/admin/applications', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "applications_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('appl_name')) {
            $this->storeinputs();
            $this->application->update($data, $id);
            redirect('/admin/applications', 'refresh');
        }

        $application = $this->application->get($id);

        $data['application'] = $application;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "applications_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->application->delete($id);
        redirect('/admin/applications', 'refresh');
    }
    
    public function applications_list(){
        $data = $this->application->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['appl_name'] = $this->input->post('appl_name');
            $data['appl_desc'] = $this->input->post('appl_desc');     
            $data['dept_id'] = $this->input->post('dept_id');
            $data['pos_id'] = $this->input->post('pos_id');
            $data['appl_dt'] = $this->input->post('appl_dt');
            $data['pos_status_id'] = $this->input->post('pos_status_id');
    }
}
