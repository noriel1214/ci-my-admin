<?php

class Employees extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/employee'));
        $this->load->model(array('admin/department'));
    }

public function index() {
        $employees = $this->employee->get_all();

        $data['employees'] = $employees;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "employees_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('fname')) {
            $data = $this->storeinputs();
            $this->employee->insert($data);
            redirect('/admin/employees', 'refresh');
        }
        $this->push_create_data();
    }

    public function edit($id) {
        if ($this->input->post('fname')) {
            $data = $this->storeinputs();
            $this->employee->update($data, $id);
            redirect('/admin/employees', 'refresh');
        }

        $employee = $this->employee->get($id);

        //$this->employee->birthday= date_format(date_create($employee->birthday), "m/d/Y");

        
        $data['employee'] = $employee;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "employees_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->employee->delete($id);
        redirect('/admin/employees', 'refresh');
    }
    
    public function employees_list(){
        $data = $this->employee->get_all();
        print_r($data);
    }    
    
    public function empbydept($dept_id){
        //$data["empsbydept"] = $this->employee->where('dept_id', $dept_id)->get();
        $this->db->select('*'); 
        $this->db->from('employees');
        $this->db->where('dept_id', $dept_id);
        $q = $this->db->get();
        $result['empsbydept'] = $q->result();
        $result['status']="successful!";
        print json_encode($result);
    }
    public function getemployeesalary($emp_id){
        //$query = $this->employee->get($emp_id);
        //print json_encode($query);
        
        $output = $this->employee->get($emp_id)->starting_salary;
        $output = number_format($output, 2, ".", ",");
        print json_encode($output);

    }
    
    private function storeinputs(){
            $data['fname'] = $this->input->post('fname');
            $data['lname'] = $this->input->post('lname');
            $data['mname'] = $this->input->post('mname');
            $data['contact_name'] = $this->input->post('contact_name');
            $data['birthday'] = date("Y-m-d", strtotime($this->input->post('birthday')));
            $data['gender'] = $this->input->post('gender');
            $data['phone'] = $this->input->post('phone');
            $data['addrline1'] = $this->input->post('addrline1');
            $data['addrline2'] = $this->input->post('addrline2');
            $data['barrio'] = $this->input->post('barrio');
            $data['citytown'] = $this->input->post('citytown');
            $data['province'] = $this->input->post('province');
            $data['country'] = $this->input->post('country');
            $data['zip'] = $this->input->post('zip');
            $data['nationality'] = $this->input->post('nationality');
            $data['maritalstatus'] = $this->input->post('maritalstatus');
            $data['email'] = $this->input->post('email');
            $data['dept_id'] = $this->input->post('dept_id');
            $data['designation_id'] = $this->input->post('designation_id');
            $data['hire_date'] =date("Y-m-d", strtotime($this->input->post('hire_date')));
            $data['starting_salary'] = $this->input->post('starting_salary');
            $data['emp_status'] = $this->input->post('emp_status');
            $data['acct_name'] = $this->input->post('acct_name');
            $data['acct_no'] = $this->input->post('acct_no');
            $data['bank_name'] = $this->input->post('bank_name');
            $data['branch_name'] = $this->input->post('branch_name');             
            return $data;
    }
    
    private function push_create_data()
    {
        $data['departments'] = $this->department->get_all();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "employees_create";
        $this->load->view($this->_container, $data);
    }
}
