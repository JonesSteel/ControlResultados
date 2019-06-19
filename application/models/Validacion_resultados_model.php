<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validacion_resultados_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    function validacionList() {
        $hasil = $this->db->get('indicadores_validacion');
        return $hasil->result();
    }

    function validacionSave() {

        $date = $this->input->post('fecha');

        $data = array(
            'fecha'              => date('y-m-d', strtotime($date)),
            'carga'              => $this->input->post('carga'),
            'ruta'               => $this->input->post('ruta'),
            'particulares'       => $this->input->post('particulares'),
            'taxi'               => $this->input->post('taxi'),
            'carga_val'          => $this->input->post('carga_val'),
            'ruta_val'           => $this->input->post('ruta_val'),
            'particulares_val'   => $this->input->post('particulares_val'),
            'taxi_val'           => $this->input->post('taxi_val')
        );

        $result = $this->db->insert('indicadores_validacion', $data);
        return $result;
    }

    function validacionUpdate() {

        $date = $this->input->post('fecha');

        $id_consecutivo   = $this->input->post('id_consecutivo');
        $fecha            = date('y-m-d', strtotime($date));
        $carga            = $this->input->post('carga');
        $ruta             = $this->input->post('ruta');
        $particulares     = $this->input->post('particulares');
        $taxi             = $this->input->post('taxi');
        $carga_val        = $this->input->post('carga_val');
        $ruta_val         = $this->input->post('ruta_val');
        $particulares_val = $this->input->post('particulares_val');
        $taxi_val         = $this->input->post('taxi_val');

        $this->db->set('fecha', $fecha);
        $this->db->set('carga', $carga);
        $this->db->set('ruta', $ruta);
        $this->db->set('particulares', $particulares);
        $this->db->set('taxi', $taxi);
        $this->db->set('carga_val', $carga_val);
        $this->db->set('ruta_val', $ruta_val);
        $this->db->set('particulares-val', $particulares_val);
        $this->db->set('taxi_val', $taxi_val);

        $this->db->where('id_consecutivo', $id_consecutivo);
        $result = $this->db->update('indicadores_validacion');
        return $result;
    }

    function validacionDelete() {
        $id_consecutivo = $this->input->post('id_consecutivo');
        $this->db->where('id_consecutivo', $id_consecutivo);
        $result = $this->db->delete('indicadores_validacion');
        return $result;
    }

    // Sección dedicada al módulo de corrección de datos dentro de la DGRPT

    function moduloList() {
        $hasil = $this->db->get('indicadores_validacion_modulo');
        return $hasil->result();
    }

    function moduloSave() {

        $date = $this->input->post('fecha');

        $data = array(
            'fecha'                  => date('y-m-d', strtotime($date)),
            'solicitudes_recibidas'  => $this->input->post('solicitudes_recibidas'),
            'correccion_datos'       => $this->input->post('correccion_datos'),
            'tercera_edad'           => $this->input->post('tercera_edad'),
            'embarazadas'            => $this->input->post('embarazadas'),
            'discapacidad'           => $this->input->post('discapacidad')
        );

        $result = $this->db->insert('indicadores_validacion_modulo', $data);
        return $result;
    }

    function moduloUpdate() {

        $date = $this->input->post('fecha');

        $id_consecutivo         = $this->input->post('id_consecutivo');
        $fecha                  = date('y-m-d', strtotime($date));
        $solicitudes_recibidas  = $this->input->post('solicitudes_recibidas');
        $correccion_datos       = $this->input->post('correccion_datos');
        $tercera_edad           = $this->input->post('tercera_edad');
        $embarazadas            = $this->input->post('embarazadas');
        $discapacidad           = $this->input->post('discapacidad');

        $this->db->set('fecha', $fecha);
        $this->db->set('solicitudes_recibidas', $solicitudes_recibidas);
        $this->db->set('correccion_datos', $correccion_datos);
        $this->db->set('tercera_edad', $tercera_edad);
        $this->db->set('embarazadas', $embarazadas);
        $this->db->set('discapacidad', $discapacidad);

        $this->db->where('id_consecutivo', $id_consecutivo);
        $result = $this->db->update('indicadores_validacion_modulo');
        return $result;
    }

    function moduloDelete() {
        $id_consecutivo = $this->input->post('id_consecutivo');
        $this->db->where('id_consecutivo', $id_consecutivo);
        $result = $this->db->delete('indicadores_validacion_modulo');
        return $result;
    }
}
