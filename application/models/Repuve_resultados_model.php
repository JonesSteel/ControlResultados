<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Repuve_resultados_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    function repuveList() {
        $hasil = $this->db->get('indicadores_repuve');
        return $hasil->result();
    }

    function repuveSave() {

        $date = $this->input->post('fecha');

        $data = array(
            'fecha'                  => date('y-m-d', strtotime($date)),
            'inscripcion_vehiculo'   => $this->input->post('inscripcion_vehiculo'),
            'actualizacion_vehiculo' => $this->input->post('actualizacion_vehiculo'),
            'seguimiento_moto'       => $this->input->post('seguimiento_moto'),
            'error_cvh'              => $this->input->post('error_cvh'),
            'reagendado'             => $this->input->post('reagendado'),
            'irregularidades_pgj'    => $this->input->post('irregularidades_pgj'),
            'peritajes_realizados'   => $this->input->post('peritajes_realizados'),
            'no presentado'          => $this->input->post('no_presentado'),
            'solicitud_peritaje'     => $this->input->post('solicitud_peritaje'),
            'citas_agendadas'        => $this->input->post('citas_agendadas'),
            'atencion_ciudadana'     => $this->input->post('atencion_ciudadana'),
            'llamadas_atendidas'     => $this->input->post('llamadas_atendidas')
        );

        $result = $this->db->insert('indicadores_repuve', $data);
        return $result;
    }

    function repuveUpdate() {

        $date = $this->input->post('fecha');

        $id_consecutivo          = $this->input->post('id_consecutivo');
        $fecha                   = date('y-m-d', strtotime($date));
        $inscripcion_vehiculo    = $this->input->post('inscripcion_vehiculo');
        $actualizacion_vehiculo  = $this->input->post('actualizacion_vehiculo');
        $seguimiento_moto        = $this->input->post('seguimiento_moto');
        $error_cvh               = $this->input->post('error_cvh');
        $reagendado              = $this->input->post('reagendado');
        $irregularidades_pgj     = $this->input->post('irregularidades_pgj');
        $peritajes_realizados    = $this->input->post('peritajes_realizados');
        $no_presentado           = $this->input->post('no_presentado');
        $solicitud_peritaje      = $this->input->post('solicitud_peritajes');
        $citas_agendadas         = $this->input->post('citas_agendadas');
        $atencion_ciudadana      = $this->input->post('atencion_ciudadana');
        $llamadas_atendidas      = $this->input->post('llamadas_atendidas');

        $this->db->set('fecha', $fecha);
        $this->db->set('inscripcion_vehiculo', $inscripcion_vehiculo);
        $this->db->set('actualizacion_vehiculo', $actualizacion_vehiculo);
        $this->db->set('seguimiento_moto', $seguimiento_moto);
        $this->db->set('error_cvh', $error_cvh);
        $this->db->set('reagendado', $reagendado);
        $this->db->set('irregularidades_pgj', $irregularidades_pgj);
        $this->db->set('peritajes_realizados', $peritajes_realizados);
        $this->db->set('no_presentado', $no_presentado);
        $this->db->set('solicitud_peritaje', $solicitud_peritaje);
        $this->db->set('citas_agendadas', $citas_agendadas);
        $this->db->set('atencion_ciudadana', $atencion_ciudadana);
        $this->db->set('llamadas_atendidas', $llamadas_atendidas);

        $this->db->where('id_consecutivo', $id_consecutivo);
        $result = $this->db->update('indicadores_repuve');
        return $result;
    }

    function repuveDelete() {
        $id_consecutivo = $this->input->post('id_consecutivo');
        $this->db->where('id_consecutivo', $id_consecutivo);
        $result = $this->db->delete('indicadores_repuve');
        return $result;
    }
}