<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ValidacionController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('validacion_resultados_model');
    }

    public function index() {
        $this->load->view('validacion');
    }

    public function show() {
        $data = $this->validacion_resultados_model->validacionList();
        echo json_encode($data);
    }

    public function save() {
        $data = $this->validacion_resultados_model->validacionSave();
        echo json_encode($data);
    }

    public function update() {
        $data = $this->validacion_resultados_model->validacionUpdate();
        echo json_encode($data);
    }

    public function delete() {
        $data = $this->validacion_resultados_model->validacionDelete();
        echo json_encode($data);
    }

    // Sección dedicada al módulo de corrección de datos dentro de la DGRPT

    public function indexAtencion() {
        $this->load->view('atencion_usuarios');
    }

    public function show_m() {
        $data = $this->validacion_resultados_model->moduloList();
        echo json_encode($data);
    }

    public function save_m() {
        $data = $this->validacion_resultados_model->moduloSave();
        echo json_encode($data);
    }

    public function update_() {
        $data = $this->validacion_resultados_model->moduloUpdate();
        echo json_encode($data);
    }

    public function delete_m() {
        $data = $this->validacion_resultados_model->moduloDelete();
        echo json_encode($data);
    }
}