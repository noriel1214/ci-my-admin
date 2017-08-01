<?php

class Systems extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/system'));
    }

public function index() {
        $systems = $this->system->get_all();

        $data['systems'] = $systems;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "systems_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('sys_name')) {
            $data = $this->storeinputs();
            $this->system->insert($data);
            redirect('/admin/systems', 'refresh');
        }
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "systems_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('sys_name')) {
            $data = $this->storeinputs();
            $this->system->update($data, $id);
            redirect('/admin/systems', 'refresh');
        }

        $system = $this->system->get($id);

        $data['system'] = $system;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "systems_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->system->delete($id);
        redirect('/admin/systems', 'refresh');
    }
    
    public function systems_list(){
        $data = $this->system->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['sys_name'] = $this->input->post('sys_name');
            $data['sys_title'] = $this->input->post('sys_title');
            $data['sys_addr'] = $this->input->post('sys_addr');
            $data['sys_phone'] = $this->input->post('sys_phone');
            $data['sys_email'] = $this->input->post('sys_email');
            $data['sys_lang'] = $this->input->post('sys_lang');            
            return $data;
    }
}
