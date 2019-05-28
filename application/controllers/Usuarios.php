<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('adminusuario_model');
        $this->load->library('session');
    }

    public function agregaUsuario() {
        $datosUsuario = $this->input->post();

        if (trim($datosUsuario['rfc']) == '' || trim($datosUsuario['password']) == '' || trim($datosUsuario['nombre']) == '' || trim($datosUsuario['primer_apellido']) == '' || trim($datosUsuario['segundo_apellido']) == '') {
           echo "Datos Incompletos";
           exit();
        } else {
            $datosUsuarioAlta = array('usuario' => strtoupper($datosUsuario['usuario']),'password' => md5($datosUsuario['password']),'nombre' => strtoupper($datosUsuario['nombre']),'primer_apellido' => strtoupper($datosUsuario['primer_apellido']),'segundo_apellido' => strtoupper($datosUsuario['segundo_apellido']),'rfc' => strtoupper($datosUsuario['rfc']));
            $resGuardado = $this->adminusuario_model->insertaUsuario($datosUsuarioAlta);
            if ($resGuardado == true){
                $this->load->view('registro', array('mensaje' => 'Se ha guardado el usuario con éxito!'.$datosUsuarioAlta['usuario']));
            } else {
                $this->load->view('registro', array('mensaje' => 'Ha ocurrido un error!'.$datosUsuarioAlta['usuario']));
            }
        }
    }
}