<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code               
    }

    public function login() {
        if ($this->input->is_ajax_request()) {
            $this->load->model('Loging_Model');
            $data = $this->Loging_Model->llamarDatosSesion($this->input->post("Login_user"), md5($this->input->post("Login_pass")));
            $sesion = array(
                'id' => $data->ID_PERSONA,
                'user' => $data->USER,
                'nombre' => $data->NOMBRES,
                'apellidos' => $data->APELLIDO_PATERNO . ' ' . $data->APELLIDO_MATERNO,
                'email' => $data->EMAIL,
                'registrado' => $data->FECREG,
                'perfil' => $data->ID_PERFIL,
                'logged' => TRUE
            );
            $this->session->set_userdata($sesion);
            echo $_SESSION['logged'];
        } else {
            show_404();
        }
    }

    public function registrar() {
        $data['ID_PERSONA'] = GUID();
        $data['EMAIL'] = $this->input->post("Regis_email");
        $data['USER'] = $this->input->post("Regis_user");
        $data['NOMBRES'] = $this->input->post("Regis_name");
        $data['APELLIDO_PATERNO'] = $this->input->post("Regis_ape_pat");
        $data['APELLIDO_MATERNO'] = $this->input->post("Regis_ape_mat");
        $data['PASSWORD'] = md5($this->input->post("Regis_pass"));
        $data['FECREG'] = HOY;
        $data['ID_PERFIL'] = "4";
        $data['USERESTADO'] = "0";
        $data['NOTIFICACIONES'] = $this->input->post("Check_Notificaciones");
        $this->load->model('Registros_Model');
        $registro = $this->Registros_Model->Registrar_Usuarios($data);
        if ($registro == 1) {
            $this->load->library('email');
            $this->email->from('replyto@mimascotafavorita.grupocarhua.com', 'Registro Mi Mascota');
            $this->email->to($data['EMAIL']);
            $this->email->subject('Estimado '.$data['NOMBRES'].' Gracias por Registrarse');
            $this->email->message($this->load->view('pages/mensaje', $data, TRUE));
            $this->email->set_mailtype('html');
            if ($this->email->send()) {
                echo "exito";
            } else {
                echo "error";
            }
        } else {
            echo "error";
        }
        
        
    }

    protected function mailRegister() {
        
    }

    public function logout() {
        $this->session->sess_destroy();
        header("location:" . base_url());
    }

}
