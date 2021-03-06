<?php

class Brands extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/brand'));
    }

public function index() {
        $brands = $this->brand->get_all();

        $data['brands'] = $brands;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "brands_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('description')) {
            $data['description'] = $this->input->post('description');
            $this->brand->insert($data);

            redirect('/admin/brands', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "brands_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('description')) {
            $data['description'] = $this->input->post('description');
            $this->brand->update($data, $id);

            redirect('/admin/brands', 'refresh');
        }

        $brand = $this->brand->get($id);

        $data['brand'] = $brand;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "brands_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->brand->delete($id);

        redirect('/admin/brands', 'refresh');
    }
    
    public function brands_list(){
        $data = $this->brand->get_all();
        print_r($data);
    }    
}
