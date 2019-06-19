<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BaseController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('base_resultados_model');
    }

    public function index() {
        $this->load->view('base_datos');
    }

    public function show() {
        $data = $this->base_resultados_model->baseList();
        echo json_encode($data);
    }

    public function save() {
        $data = $this->base_resultados_model->baseSave();
        echo json_encode($data);
    }

    public function update() {
        $data = $this->base_resultados_model->baseUpdate();
        echo json_encode($data);
    }

    public function delete() {
        $data = $this->base_resultados_model->baseDelete();
        echo json_encode($data);
    }
}
