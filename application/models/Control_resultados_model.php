<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Control_resultados_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    function archivoList() {
        $hasil = $this->db->get('indicadores_archivo');
        return $hasil->result();
    }

    function archivoSave() {
        $data = array(
            'solicitudes_expediente'     => $this->input->post('solicitudes_expediente'),
            'exp_cotejados_y_entregados' => $this->input->post('exp_cotejados_y_entregados'),
            'aceptadas'                  => $this->input->post('aceptadas'),
            'rechazadas'                 => $this->input->post('rechazadas'),
            'entrega_titulos_concesion'  => $this->input->post('entrega_titulos_concesion')
        );

        $result = $this->db->insert('indicadores_archivo', $data);
        return $result;
    }

    function archivoUpdate() {
        $id_consecutivo             = $this->input->post('id_consecutivo');
        $solicitudes_expediente     = $this->input->post('solicitudes_expediente');
        $exp_cotejados_y_entregados = $this->input->post('exp_cotejados_y_entregados');
        $aceptadas                  = $this->input->post('aceptadas');
        $rechazadas                 = $this->input->post('rechazadas');
        $entrega_titulos_concesion  = $this->input->post('entrega_titulos_concesion');

        $this->db->set('solicitudes_expediente', $solicitudes_expediente);
        $this->db->set('exp_cotejados_y_entregados', $exp_cotejados_y_entregados);
        $this->db->set('aceptadas', $aceptadas);
        $this->db->set('rechazadas', $rechazadas);
        $this->db->set('entrega_titulos_concesion', $entrega_titulos_concesion);

        $this->db->where('id_consecutivo', $id_consecutivo);
        $result = $this->db->update('indicadores_archivo');
        return $result;
    }

    function archivoDelete() {
        $id_consecutivo = $this->input->post('id_consecutivo');
        $this->db->where('id_consecutivo', $id_consecutivo);
        $result = $this->db->delete('indicadores_archivo');
        return $result;
    }
}
