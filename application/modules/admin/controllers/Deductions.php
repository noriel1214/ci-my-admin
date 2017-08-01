<?php

class Deductions extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/deduction'));
    }

public function index() {
        $deductions = $this->deduction->get_all();

        $data['deductions'] = $deductions;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "deductions_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('deduction_name')) {
            $data = $this->storeinputs();
            $this->deduction->insert($data);
            redirect('/admin/deductions', 'refresh');
        }
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "deductions_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('deduction_name')) {
            $data = $this->storeinputs();
            $this->deduction->update($data, $id);
            redirect('/admin/deductions', 'refresh');
        }

        $deduction = $this->deduction->get($id);

        $data['deduction'] = $deduction;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "deductions_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->deduction->delete($id);
        redirect('/admin/deductions', 'refresh');
    }
    
    public function deductions_list(){
        $data = $this->deduction->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['deduction_name'] = $this->input->post('deduction_name');
            $data['deduction_desc'] = $this->input->post('deduction_desc');
            return $data;
    }
}
