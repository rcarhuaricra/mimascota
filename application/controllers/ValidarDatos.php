<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ValidarDatos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code       
        $this->load->model('Validation_model');
    }

    //START VADAR LOS DATOS INGRESADOS EN EL LOGIN
    public function EmailUserLogin() {
        $user = $this->input->post("user");
        $data = $this->Validation_model->validar_User_Or_Email($user);
        if ($data > 0) {
            echo "true";
        } else {
            echo "false";
        }
    }

    public function PassLogin() {
        $user = $this->input->post("user");
        $pass = md5($this->input->post("pass"));
        $data = $this->Validation_model->validar_Password($user, $pass);
        if ($data > 0) {
            echo "true";
        } else {
            echo "false";
        }
    }

    //FIN VADAR LOS DATOS INGRESADOS EN EL LOGIN
    //START VADAR LOS DATOS INGRESADOS EN EL REGISTRO
    public function EmailRegister() {
        $email = $this->input->post("email");
        $data = $this->Validation_model->validar_User_Or_Email($email);
        if ($data > 0) {
            echo "false";
        } else {
            echo "true";
        }
    }

    public function UserRegister() {
        $user = $this->input->post("Regis_user");
        $data = $this->Validation_model->validar_User_Or_Email($user);
        if ($data > 0) {
            echo "false";
        } else {
            echo "true";
        }
    }

    public function especie() {
        $input = $this->input->post("Especie");
        $data = $this->Validation_model->validar_Especie($input);
        if ($data > 0) {
            echo "false";
        } else {
            echo "true";
        }
    }

    public function color() {
        $input = $this->input->post("Color");
        $data = $this->Validation_model->validar_color($input);
        if ($data > 0) {
            echo "false";
        } else {
            echo "true";
        }
    }

    public function Documentos() {
        $id = $this->session->userdata('id');
        $data = $this->Validation_model->validar_Documento($id);
        //echo $data->NUMERO_DOCUMENTO;
        if ($data->NUMERO_DOCUMENTO =="") {
            echo "false";
        } else {
            echo "true";
        }
    }

    //FIN VADAR LOS DATOS INGRESADOS EN EL LOGIN






    public function logout() {
        $this->session->sess_destroy();
        header("location:" . base_url());
    }

}
