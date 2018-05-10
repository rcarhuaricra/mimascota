<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Recaptcha'); // Your own constructor code               
    }

    public function modalLogin() {

        echo $this->load->view('/modales/ModalLogin', '', TRUE);
    }

    public function modalRegister() {

        echo $this->load->view('/modales/ModalRegister', '', TRUE);
    }

    public function ModalRegisterMascota() {

        echo $this->load->view('/modales/ModalRegisterMascota', '', TRUE);
    }

    public function modalEspecie() {

        echo $this->load->view('/modales/ModalEspecie', '', TRUE);
    }

    public function modalRaza() {

        echo $this->load->view('/modales/ModalRaza', '', TRUE);
    }

    public function modalColor() {

        echo $this->load->view('/modales/ModalColor', '', TRUE);
    }

}
