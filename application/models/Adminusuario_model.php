<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminusuario_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function insertaUsuario($datosUsuario) {
        $this->db->trans_start();
        $this->db->insert('usuarios', $datosUsuario);
        $this->db->trsn_complete();

        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return true;
        }
    }
}