<?php

class Payslips extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/payslip'));
        $this->load->model(array('admin/allowance'));
        $this->load->model(array('admin/deduction'));
    }

public function index() {
        $payslips = $this->payslip->get_all();

        $data['allowances']=$this->allowance->get_all();
        $data['deductions']=$this->deduction->get_all();
        
        $data['payslips'] = $payslips;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "payslips_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('emp_id')) {
            $data=$this->storeinputs();
            $this->payslip->insert($data);
            redirect('/admin/payslips', 'refresh');
        }
        $data['allowances']=$this->allowance->get_all();
        $data['deductions']=$this->deduction->get_all();
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "payslips_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('emp_id')) {
            $data=$this->storeinputs();
            $this->payslip->update($data, $id);
            redirect('/admin/payslips', 'refresh');
        }

        $payslip = $this->payslip->get($id);
        $data['allowances']=$this->allowance->getall();
        $data['deductions']=$this->deduction->getall();
        $data['payslip'] = $payslip;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "payslips_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->payslip->delete($id);
        redirect('/admin/payslips', 'refresh');
    }
    
    public function payslips_list(){
        $data = $this->payslip->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['emp_id'] = $this->input->post('emp_id');
            $data['pay_month'] = $this->input->post('pay_month');     
            $data['pay_year'] = $this->input->post('pay_year');     
            $data['salary'] = $this->input->post('salary');     
            $data['deduction_type_1'] = $this->input->post('deduction_type_1');     
            $data['deduction_amt_1'] = $this->input->post('deduction_amt_1');     
            $data['deduction_type_2'] = $this->input->post('deduction_type_2');     
            $data['deduction_amt_2'] = $this->input->post('deduction_amt_2');     
            $data['deduction_type_3'] = $this->input->post('deduction_type_3');     
            $data['deduction_amt_3'] = $this->input->post('deduction_amt_3');     
            $data['deduction_type_4'] = $this->input->post('deduction_type_4');     
            $data['deduction_amt_4'] = $this->input->post('deduction_amt_4');     
            $data['allowance_type_1'] = $this->input->post('allowance_type_1');     
            $data['allowance_amt_1'] = $this->input->post('allowance_amt_1');     
            $data['allowance_type_2'] = $this->input->post('allowance_type_2');     
            $data['allowance_amt_2'] = $this->input->post('allowance_amt_2');     
            $data['allowance_type_3'] = $this->input->post('allowance_type_3');     
            $data['allowance_amt_3'] = $this->input->post('allowance_amt_3');     
            $data['allowance_type_4'] = $this->input->post('allowance_type_4');     
            $data['allowance_amt_4'] = $this->input->post('allowance_amt_4'); 
            return $data;
    }
}
