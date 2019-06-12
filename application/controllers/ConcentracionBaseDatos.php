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
        $this->load->view('archivo');
    }

    function show() {
        $data = $this->control_resultados_model->archivoList();
        echo json_encode($data);
    }

    function save() {
        $data = $this->control_resultados_model->archivoSave();
        echo json_encode($data);
    }

    function update() {
        $data = $this->control_resultados_model->archivoUpdate();
        echo json_encode($data);
    }

    function delete() {
        $data = $this->control_resultados_model->archivoDelete();
        echo json_encode($data);
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
