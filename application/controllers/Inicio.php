<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code      
        
    }

    public function index() {
        //$data["sesion"] = $this->session->userdata('logged');
        $this->load->view('/TemplateAdmin/header');

        $this->load->view('/TemplateAdmin/MenuPrincipal');
        $this->load->view('/TemplateAdmin/Slider');        
        $this->load->view('/pages/inicio');        
        $this->load->view('/modales/ModalRegisterUser');
        $this->load->view('/modales/ModalLogin');
        $this->load->view('/TemplateAdmin/footer');
    }
    public function Mascotas($mascota="") {
        if($this->session->userdata('logged')!=true){
            redirect('/');
        }        
        $this->load->view('/TemplateAdmin/header');
        $this->load->view('/TemplateAdmin/MenuPrincipal');
        if ($mascota == null) {
            $data = "que cosa pasa";
            $this->load->view('/pages/Mascotas', $data);
        } else {
             $data = "que cosa pasa";
            $this->load->view('/pages/MascotaIndividual', $data);
        }
        $this->load->view('/modales/ModalRegisterMascota');
        $this->load->view('/modales/ModalUpdateUser');
        $this->load->view('/TemplateAdmin/footer');
    }

}
