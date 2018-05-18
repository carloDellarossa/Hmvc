<?php

class Webpay_model extends MX_Model 
{
	public function __construct() {
        parent::__construct();
         $this->db = $this->load->database('localhost',true);
    }

  
    public function RegistrarPago($data){
        $this->db->insert('pago_webpay', $data);
        return $this->db->insert_id();
    }

    public function ActualizarIDcompra($data,$id){
        if ($this->db->update('pago_webpay', $data, array('id_pago_webpay' => $id))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function DatosPago($id){
        $result_set = $this->db->query("select * from pago_webpay where id_pago_webpay='$id'");
        return $result_set->result_array();
    }

    public function VerficarPagoToken($token){
        $result_set = $this->db->query("select * from pago_webpay where token='$token'");
        return $result_set->result_array();
    }

}

?>