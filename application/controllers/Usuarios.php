<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('adminusuario_model');
        //$this->load->library('session');
    }

    public function index() {
        $this->load->view('registro');
    }

    public function agregaUsuario() {
        $datosUsuario = $this->input->post();

        if (trim($datosUsuario['usuario']) == '' || trim($datosUsuario['password']) == '' || trim($datosUsuario['nombre']) == '' || trim($datosUsuario['primer_apellido']) == ''){
            echo "Datos Incompletos";
            exit();
        }

        $datosUsuarioAlta = array('usuario' => strtoupper($datosUsuario['usuario']),'password' => md5($datosUsuario['password']),'nombre' => strtoupper($datosUsuario['nombre']),'primer_apellido' => strtoupper($datosUsuario['primer_apellido']),'segundo_apellido' => strtoupper($datosUsuario['segundo_apellido']));

        $resGuardado = $this->adminusuario_model->insertaUsuario($datosUsuarioAlta);

        if ($resGuardado == true) {
            $this->load->view('registro', array('mensaje' => 'Se ha creado con éxito el usuario'.$datosUsuarioAlta['usuario']));
        } else {
            $this->load->view('registro', array('mensaje' => 'Ha ocurrido un error, no se ha podido crear el usuario'.$datosUsuarioAlta['usuario']));
        }
    }
}