<?php

class Vacancies extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/vacancy'));
    }

public function index() {
        $vacancies = $this->vacancy->get_all();

        $data['vacancies'] = $vacancies;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "vacancies_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('vacancy_name')) {
            $this->storeinputs();
            $this->vacancy->insert($data);
            redirect('/admin/vacancies', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "vacancies_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('vacancy_name')) {
            $this->storeinputs();
            $this->vacancy->update($data, $id);
            redirect('/admin/vacancies', 'refresh');
        }

        $vacancy = $this->vacancy->get($id);

        $data['vacancy'] = $vacancy;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "vacancies_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->vacancy->delete($id);
        redirect('/admin/vacancies', 'refresh');
    }
    
    public function vacancies_list(){
        $data = $this->vacancy->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['vacancy_name'] = $this->input->post('vacancy_name');
            $data['vacancy_desc'] = $this->input->post('vacancy_desc');     
            $data['dept_id'] = $this->input->post('dept_id');     
            $data['pos_id'] = $this->input->post('pos_id');     
            $data['last_appl_dt'] = $this->input->post('last_appl_dt');     
    }
}
