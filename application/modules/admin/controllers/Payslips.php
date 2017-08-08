<?php

class Payslips extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/payslip'));
        $this->load->model(array('admin/allowance'));
        $this->load->model(array('admin/deduction'));
        $this->load->model(array('admin/department'));
        $this->load->model(array('admin/employee'));
        $this->load->model(array('admin/month'));
    }

public function index($month, $year) {
        //$payslips = $this->payslip->get_all();
        
        $this->db->select('p.*, e.fname, e.lname, e.starting_salary, m.month_name');
        $this->db->from('payslips p, employees e, months m');
        $this->db->where('p.emp_id = e.id');
        $this->db->where('p.pay_month = m.id');
        $this->db->where('p.pay_month = '.$month);
        $this->db->where('p.pay_year = '.$year);
        
        $query = $this->db->get();        
        $payslips= $query->result_array();
                
        $data['allowances']=$this->allowance->get_all();
        $data['deductions']=$this->deduction->get_all();
        $data['departments']=$this->department->get_all();
        $data["months"] = $this->month->get_all();
        $data["pay_month"] = $month;
        $data["pay_year"] = $year;
        
        $data['payslips'] = $payslips;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "payslips_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('emp_id')) {
            $data=$this->storeinputs();
            $this->payslip->insert($data);
            redirect('/admin/payslips/index/'.$data['pay_month'].'/'.$data['pay_year'], 'refresh');
        }
        $this->push_payslip_data(0);
    }

    public function edit($id) {
        if ($this->input->post('emp_id')) {
            $data=$this->storeinputs();
            $this->payslip->update($data, $id);
            redirect('/admin/payslips/index/'.$data['pay_month'].'/'.$data['pay_year'], 'refresh');
        }

        //$payslip1 = $this->payslip->get($id);
        
        $this->db->select('p.*, e.starting_salary');
        $this->db->from('payslips p, employees e');
        $this->db->where('p.emp_id = e.id');
        $this->db->where('p.id = '.$id);
        
         $payslip= $this->db->get()->row();
   
        
        //return $this->db->get_where($this->table_name, array($this->primary_key => $id))->row();
        
        $data['allowances']=$this->allowance->get_all();
        $data['deductions']=$this->deduction->get_all();
        $data['departments']=$this->department->get_all();
        
        $query = $this->db->get_where('employees', array('dept_id' => $payslip->dept_id));
        $data['employees'] = $query->result_array();
        $data["months"] = $this->month->get_all();        
        $data['payslip'] = $payslip;
        $data['net_salary'] = number_format($payslip->starting_salary+$payslip->allowance_amt_1+$payslip->allowance_amt_2+$payslip->allowance_amt_3
                -$payslip->deduction_amt_1-$payslip->deduction_amt_2-$payslip->deduction_amt_3, 2);
        
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
    
    public function getempsbydept($dept_id){ 
        $this->push_payslip_data($dept_id);
    }
    
    private function push_payslip_data($dept_id){
        $query = $this->db->get_where("employees", array('dept_id' => $dept_id));
        $data['empsbydept'] = $query->result_array();
        
        $data['dept_id'] = $dept_id;
        $data['allowances']=$this->allowance->get_all();
        $data['deductions']=$this->deduction->get_all();
        $data['departments']=$this->department->get_all();
        $data["months"] = $this->month->get_all();
        
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "payslips_create";
        $this->load->view($this->_container, $data);
    }
    
    private function storeinputs(){
            $data['dept_id'] = $this->input->post('dept_id');
            $data['emp_id'] = $this->input->post('emp_id');
            $data['pay_month'] = $this->input->post('pay_month');     
            $data['pay_year'] = $this->input->post('pay_year');     
            $data['salary'] = $this->input->post('salary');     
            $data['deduction_type_1'] = $this->input->post('deduction_type_1')=== null ? 0:$this->input->post('deduction_type_1');          
            $data['deduction_amt_1'] = $this->input->post('deduction_amt_1') === null ? 0:$this->input->post('deduction_amt_1');     
            $data['deduction_type_2'] = $this->input->post('deduction_type_2')=== null ? 0:$this->input->post('deduction_type_2');     
            $data['deduction_amt_2'] = $this->input->post('deduction_amt_2')=== null ? 0:$this->input->post('deduction_amt_2'); 
            $data['deduction_type_3'] = $this->input->post('deduction_type_3')=== null ? 0:$this->input->post('deduction_type_3');
            $data['deduction_amt_3'] = $this->input->post('deduction_amt_3')=== null ? 0:$this->input->post('deduction_amt_3');      
            //$data['deduction_type_4'] = $this->input->post('deduction_type_4');     
            //$data['deduction_amt_4'] = $this->input->post('deduction_amt_4');     
            $data['allowance_type_1'] = $this->input->post('allowance_type_1')=== null ? 0:$this->input->post('allowance_type_1');
            $data['allowance_amt_1'] = number_format($this->input->post('allowance_amt_1')=== null ? 0:$this->input->post('allowance_amt_1'),2);
            $data['allowance_type_2'] = $this->input->post('allowance_type_2')=== null ? 0:$this->input->post('allowance_type_2');
            $data['allowance_amt_2'] = $this->input->post('allowance_amt_2')=== null ? 0:$this->input->post('allowance_amt_2');      
            $data['allowance_type_3'] = $this->input->post('allowance_type_3')=== null ? 0:$this->input->post('allowance_type_3');
            $data['allowance_amt_3'] = $this->input->post('allowance_amt_3')=== null ? 0:$this->input->post('allowance_amt_3');      
            //$data['allowance_type_4'] = $this->input->post('allowance_type_4');     
            //$data['allowance_amt_4'] = $this->input->post('allowance_amt_4'); 
            $data['payslip_status'] = $this->input->post('payslip_status');
            return $data;
    }
    
}
