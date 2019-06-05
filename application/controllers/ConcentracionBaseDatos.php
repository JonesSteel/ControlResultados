<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConcentracionBaseDatos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('control_resultados_model');
    }

    public function index() {
        $this->load->view('base_datos');
    }

    public function indexArchivo() {
        // Fetch data
        $data['nombre_cargo'] = $this->control_resultados_model->getEstructuras();
        $data['nombre_funcionario'] = $this->control_resultados_model->getNombres();
        // Pass data to view
        $this->load->view('archivo', $data);
    }

    public function indexRepuve() {
        $this->load->view('repuve');
    }

    public function indexRegistral() {
        $this->load->view('informacion_registral');
    }

    public function indexValidacion() {
        $this->load->view('validacion');
    }
}
