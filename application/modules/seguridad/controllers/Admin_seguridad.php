<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_seguridad extends MX_Controller {

    function __contruct(){
        parent::__contruct();
    }

    function _admin_loging(){
        $esAdmin = true;

        if($isAdmin != TRUE){
            redirect('Admin_seguridad/noAdmin');
        }
    }

    function noAdmin(){
        echo "No tiene privilegios de administrador para esta funcionalidad";
    }


}