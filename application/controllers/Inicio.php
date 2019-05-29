<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('login_model');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login');
    }

    public function autentifica() {
        $datosLogin = $this->input->post();

        $this->usuario = strtoupper($datosLogin['inputUsuario']);
        $this->password = md5($datosLogin['inputPassword']);

        $datosUsuario = $this->login_model->autentifica($this->usuario, $this->password);
        if (is_array($datosUsuario) && count($datosUsuario) > 0) {
            $newData = array(
                'idUsuario' => $datosUsuario[0]['idusuario']
            );

            $this->session->set_userdata($newData);

            $this->load->view('prueba_vista');
        } else {
            $this->load->view('login', array('mensaje' => 'El usuario no existe'));
        }
    }

    public function logout() {
        //$this->unset_userdata('idusuario');
        $this->session->sess_destroy();
        redirect('login');
    }
}