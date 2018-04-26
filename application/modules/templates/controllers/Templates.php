<?php


class Templates extends MX_Controller {

    function __contruct(){
        parent::__contruct();
    }
    
    public function template_admin($data){
        $this->load->view('panel',$data);
    }

    public function index(){
        $this->load->view('admin/panel');
    }

}