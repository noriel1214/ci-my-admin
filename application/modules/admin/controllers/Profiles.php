<?php

class Profiles extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/profile'));
    }

public function index() {
        $profiles = $this->profile->get_all();

        $data['profiles'] = $profiles;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "profiles_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('prof_name')) {
            $data = $this->storeinputs();
            $this->profile->insert($data);
            redirect('/admin/profiles', 'refresh');
        }
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "profiles_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('prof_name')) {
            $data = $this->storeinputs();
            $this->profile->update($data, $id);
            redirect('/admin/profiles', 'refresh');
        }

        $profile = $this->profile->get($id);

        $data['profile'] = $profile;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "profiles_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id){
        $this->profile->delete($id);
        redirect('/admin/profiles', 'refresh');
    }
    
    public function profiles_list(){
        $data = $this->profile->get_all();
        print_r($data);
    }    
    private function storeinputs(){
            $data['prof_name'] = $this->input->post('prof_name');
            $data['prof_email'] = $this->input->post('prof_email');            
            return $data;
    }
}
