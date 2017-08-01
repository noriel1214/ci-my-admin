<?php

class Allowances extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/allowance'));
    }

public function index() {
        $allowances = $this->allowance->get_all();

        $data['allowances'] = $allowances;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "allowances_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('allowance_name')) {
            $data = $this->storeinputs();
            $this->allowance->insert($data);
            redirect('/admin/allowances', 'refresh');
        }
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "allowances_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('allowance_name')) {
            $data = $this->storeinputs();
            $this->allowance->update($data, $id);
            redirect('/admin/allowances', 'refresh');
        }

        $allowance = $this->allowance->get($id);

        $data['allowance'] = $allowance;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "allowances_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->allowance->delete($id);
        redirect('/admin/allowances', 'refresh');
    }
    
    public function allowances_list(){
        $data = $this->allowance->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['allowance_name'] = $this->input->post('allowance_name');
            $data['allowance_desc'] = $this->input->post('allowance_desc');
                
            return $data;
    }
}
