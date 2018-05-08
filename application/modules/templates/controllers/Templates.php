<?php


class Templates extends MX_Controller {

    function __contruct(){
        parent::__contruct();
    }
    
    public function index(){
        $this->templateTienda();
    }

    public function templateAdmin(){

        $this->load->view('admin/panel');
    }

    public function templateTienda(){

        $this->load->model('Categorias');
        $data['categorias'] = $this->Categorias->catArrayLocal();
        
        $this->load->view('tienda/template-top',$data);
        $this->load->view('tienda/carrusel');
        $this->load->view('tienda/listas/listaCarro');
        //$this->load->view('tienda/paginacion');
        $this->load->view('tienda/template-btm');

    }

    public function megaMenu (){
        $this->load->model('Categorias');
        $data['categorias'] = $this->Categorias->catArrayLocal();

        $this->load->view('tienda/b4megamenu',$data);
    }

    public function sideMenu (){
        $this->load->model('Categorias');
        $data['categorias'] = $this->Categorias->catArrayLocal();
        
        $this->load->view('tienda/sidemenu',$data);
    }
 

}