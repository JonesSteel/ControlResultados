<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_resultados_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    function baseList() {
        $hasil = $this->db->get('indicadores_bd');
        return $hasil->result();
    }

    function baseSave() {

        $date = $this->input->post('fecha');

        $data = array(
            'fecha'                      => date('y-m-d', strtotime($date)),
            'total_proyectos'            => $this->input->post('total_proyectos'),
            'tiempo_invertido'           => $this->input->post('tiempo_invertido'),
            'mantenimiento_redes'        => $this->input->post('mantenimiento_redes'),
            'mantenimiento_hardware'     => $this->input->post('mantenimiento_hardware'),
            'mantenimiento_software'     => $this->input->post('mantenimiento_software'),
            'otros'                      => $this->input->post('otros')
        );

        $result = $this->db->insert('indicadores_bd', $data);
        return $result;
    }

    function baseUpdate() {

        $date = $this->input->post('fecha');

        $id_consecutivo             = $this->input->post('id_consecutivo');
        $fecha                      = date('y-m-d', strtotime($date));
        $total_proyectos            = $this->input->post('total_proyectos');
        $tiempo_invertido           = $this->input->post('tiempo_invertido');
        $mantenimiento_redes        = $this->input->post('mantenimiento_redes');
        $mantenimiento_hardware     = $this->input->post('mantenimiento_hardware');
        $mantenimiento_software     = $this->input->post('mantenimiento_software');
        $otros                      = $this->input->post('otros');

        $this->db->set('fecha', $fecha);
        $this->db->set('total_proyectos', $total_proyectos);
        $this->db->set('tiempo_invertido', $tiempo_invertido);
        $this->db->set('mantenimiento_redes', $mantenimiento_redes);
        $this->db->set('mantenimiento_hardware', $mantenimiento_hardware);
        $this->db->set('mantenimiento_software', $mantenimiento_software);
        $this->db->set('otros', $otros);

        $this->db->where('id_consecutivo', $id_consecutivo);
        $result = $this->db->update('indicadores_bd');
        return $result;
    }

    function baseDelete() {
        $id_consecutivo = $this->input->post('id_consecutivo');
        $this->db->where('id_consecutivo', $id_consecutivo);
        $result = $this->db->delete('indicadores_bd');
        return $result;
    }
}
