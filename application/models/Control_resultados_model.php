<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Control_resultados_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    function getEstructuras() {
       $result = $this->db->select('id_estructura, nombre_cargo')->get('cat_estructura')->result_array();

       $cargo = array();
       foreach ($result as $r) {
           $cargo[$r['id_estructura']] = $r['nombre_cargo'];
       }
       $cargo[''] = "Selecciona tu Cargo";
       return $cargo;
    }

    function getNombres() {
        $result = $this->db->select('id_estructura, nombre_funcionario')->get('cat_funcionarios')->result_array();

        $funcionario = array();
        foreach ($result as $r) {
            $funcionario[$r['id_estructura']] = $r['nombre_funcionario'];
        }
        $funcionario[''] = "Selecciona tu Nombre";
        return $funcionario;
    }
}
