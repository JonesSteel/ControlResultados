<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RepuveController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('repuve_resultados_model');
    }

    public function index() {
        $this->load->view('repuve');
    }

    public function show() {
        $data = $this->repuve_resultados_model->repuveList();
        echo json_encode($data);
    }

    public function save() {
        $data = $this->repuve_resultados_model->repuveSave();
        echo json_encode($data);
    }

    public function update() {
        $data = $this->repuve_resultados_model->repuveUpdate();
        echo json_encode($data);
    }

    public function delete() {
        $data = $this->repuve_resultados_model->repuveDelete();
        echo json_encode($data);
    }
}
