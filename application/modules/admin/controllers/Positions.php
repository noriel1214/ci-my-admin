<?php

class Positions extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/position'));
    }

public function index() {
        $positions = $this->position->get_all();

        $data['positions'] = $positions;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "positions_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('pos_name')) {
            $data=$this->storeinputs();
            $this->position->insert($data);
            redirect('/admin/positions', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "positions_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('pos_name')) {
            $data=$this->storeinputs();
            $this->position->update($data, $id);
            redirect('/admin/positions', 'refresh');
        }

        $position = $this->position->get($id);

        $data['position'] = $position;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "positions_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->position->delete($id);
        redirect('/admin/positions', 'refresh');
    }
    
    public function positions_list(){
        $data = $this->position->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['pos_name'] = $this->input->post('pos_name');
            $data['pos_desc'] = $this->input->post('pos_desc');    
            return $data;
    }
}
