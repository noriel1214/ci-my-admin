<?php

class Attendances extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/attendance'));
    }

public function index() {
        $attendances = $this->attendance->get_all();

        $data['attendances'] = $attendances;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "attendances_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('attd_dt')) {
            $data=$this->storeinputs();
            $this->attendance->insert($data);
            redirect('/admin/attendances', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "attendances_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('attd_dt')) {
            $data=$this->storeinputs();
            $this->attendance->update($data, $id);
            redirect('/admin/attendances', 'refresh');
        }

        $attendance = $this->attendance->get($id);

        $data['attendance'] = $attendance;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "attendances_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->attendance->delete($id);
        redirect('/admin/attendances', 'refresh');
    }
    
    public function attendances_list(){
        $data = $this->attendance->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['attd_dt'] = $this->input->post('attd_dt');
            $data['emp_id'] = $this->input->post('emp_id');     
            $data['attd_status_id'] = $this->input->post('attd_status_id');     
            $data['absence_reason'] = $this->input->post('absence_reason');  
            return $data;
    }
}
