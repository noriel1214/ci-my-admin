<?php

class Awards extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/award'));
        $this->load->model(array('admin/employee'));
    }

public function index() {
        $awards = $this->award->get_all();

        $data['awards'] = $awards;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "awards_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('award_name')) {
            $data = $this->storeinputs();
            $this->award->insert($data);
            redirect('/admin/awards', 'refresh');
        }
        $data['employees'] = $this->employee->get_all();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "awards_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('award_name')) {
            $data = $this->storeinputs();
            $this->award->update($data, $id);
            redirect('/admin/awards', 'refresh');
        }

        $award = $this->award->get($id);
        $data['employees'] = $this->employee->get_all();
        $data['award'] = $award;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "awards_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->award->delete($id);
        redirect('/admin/awards', 'refresh');
    }
    
    public function awards_list(){
        $data = $this->award->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['award_name'] = $this->input->post('award_name');
            $data['gift'] = $this->input->post('gift');
            $data['gift_amt'] = $this->input->post('gift_amt');
            $data['emp_id'] = $this->input->post('emp_id');
            $data['award_dt'] = $this->input->post('award_dt');
            return $data;
    }
}
