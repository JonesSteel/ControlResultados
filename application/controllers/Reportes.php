<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reportes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function indexReportes() {
        $this->load->view('reportes/reportes');
    }

    public function indexEstadisticas() {
        $this->load->view('reportes/estadisticas');
    }
}