<?php

class Leaves extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/leave'));
    }

public function index() {
        $leaves = $this->leave->get_all();

        $data['leaves'] = $leaves;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "leaves_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('leave_start_dt')) {
            $data=$this->storeinputs();
            $this->leave->insert($data);
            redirect('/admin/leaves', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "leaves_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('leave_start_dt')) {
            $data=$this->storeinputs();
            $this->leave->update($data, $id);
            redirect('/admin/leaves', 'refresh');
        }

        $leave = $this->leave->get($id);

        $data['leave'] = $leave;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "leaves_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->leave->delete($id);
        redirect('/admin/leaves', 'refresh');
    }
    
    public function leaves_list(){
        $data = $this->leave->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['leave_start_dt'] = $this->input->post('leave_start_dt');
            $data['leave_end_dt'] = $this->input->post('leave_end_dt');     
            $data['leave_desc'] = $this->input->post('leave_desc');  
            return $data;
    }
}
