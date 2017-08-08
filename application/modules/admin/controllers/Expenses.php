<?php

class Expenses extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/expense'));
    }

public function index() {
        $expenses = $this->expense->get_all();

        $data['expenses'] = $expenses;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "expenses_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('exp_title')) {
            $data = $this->storeinputs();
            $this->expense->insert($data);
            redirect('/admin/expenses', 'refresh');
        }
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "expenses_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('exp_title')) {
            $data = $this->storeinputs();
            $this->expense->update($data, $id);
            redirect('/admin/expenses', 'refresh');
        }

        $expense = $this->expense->get($id);
        
echo number_format($expense->exp_amt, 2);

        $data['expense'] = $expense;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "expenses_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->expense->delete($id);
        redirect('/admin/expenses', 'refresh');
    }
    
    public function expenses_list(){
        $data = $this->expense->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['exp_title'] = $this->input->post('exp_title');
            $data['exp_desc'] = $this->input->post('exp_desc');
            $data['exp_amt'] = $this->input->post('exp_amt');
            $data['exp_dt'] = date("Y-m-d", strtotime($this->input->post('exp_dt')));
            return $data;
    }
}
