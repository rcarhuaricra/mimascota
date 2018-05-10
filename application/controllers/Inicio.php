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
<<<<<<< HEAD
        $this->load->view('/TemplateAdmin/MenuPrincipal');
        $this->load->view('/TemplateAdmin/Slider');        
        $this->load->view('/pages/inicio');        
        $this->load->view('/modales/modal');
=======
        $this->load->view('/TemplateAdmin/menuizquierda');
        $this->load->view('/TemplateAdmin/cabecera');
        $this->load->view('/TemplateAdmin/footer');
    }

    public function menu2() {
        $data['pluging'] = array(
            'SweetAlert' => $this->load->view('/TemplateAdmin/Pluging/SweetAlert', '', TRUE),
            'DataTable' => $this->load->view('/TemplateAdmin/Pluging/DataTable', '', TRUE),
            'DatePicker' => $this->load->view('/TemplateAdmin/Pluging/DatePicker', '', TRUE)
        );
        $this->load->view('/TemplateAdmin/header', $data);
        $this->load->view('/TemplateAdmin/menuizquierda');
        $this->load->view('/TemplateAdmin/cabecera');
>>>>>>> 3e780301856fc55aefd80b2d88ca2f519b102493
        $this->load->view('/TemplateAdmin/footer');
    }

    public function Mascotas($mascota=null) {
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
        $this->load->view('/modales/modal');
        $this->load->view('/TemplateAdmin/footer');
    }

}
