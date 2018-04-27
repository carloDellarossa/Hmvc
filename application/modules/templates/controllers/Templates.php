<?php


class Templates extends MX_Controller {

    function __contruct(){
        parent::__contruct();
    }
    
    public function templateAdmin($data){
        $this->load->view('admin/panel',$data);
    }

    public function templateTienda(){
        $this->load->view('tienda/template-top');
        $this->load->view('tienda/carrusel');
        $this->load->view('tienda/paginacion');
        $this->load->view('tienda/template-btm');

    }

    public function index(){
        $this->load->view('admin/panel');
    }

}