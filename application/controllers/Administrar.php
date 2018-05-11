<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code    
        if ($this->session->userdata('logged') != true) {
            redirect('/');
        } else {
            if ($this->session->userdata('perfil') == "4") {
                redirect('/');
            }
        }
    }

    public function index() {
        echo $this->session->userdata('perfil');
        //$data["sesion"] = $this->session->userdata('logged');
        $this->load->view('/TemplateAdmin/header');
        $this->load->view('/TemplateAdmin/MenuPrincipal');
        $data['titulo'] = "Administrador";
        $data['MenuAdmin'] = $this->load->view('/pages/administrar/AdministrarMenu', '', TRUE);
        $this->load->view('/pages/administrar/inicio', $data);
        $this->load->view('/TemplateAdmin/footer');
    }

    public function especies() {        
        $data['pluging'] = array(
            'DataTable' => $this->load->view('/TemplateAdmin/Pluging/DataTable', '', TRUE),
        );
        $this->load->view('/TemplateAdmin/header',$data);
        $this->load->view('/TemplateAdmin/MenuPrincipal');
        $data['titulo'] = "especies";
        $data['MenuAdmin'] = $this->load->view('/pages/administrar/AdministrarMenu', '', TRUE);
        $this->load->view('/pages/administrar/animales/especies', $data);
        $this->load->view('/modales/modalEspecie');
        $this->load->view('/TemplateAdmin/footer');
    }

    public function razas() {
        $data['pluging'] = array(
            'DataTable' => $this->load->view('/TemplateAdmin/Pluging/DataTable', '', TRUE),
        );
        $this->load->view('/TemplateAdmin/header',$data);
        $this->load->view('/TemplateAdmin/MenuPrincipal');
        $data['titulo'] = "razas";
        $data['MenuAdmin'] = $this->load->view('/pages/administrar/AdministrarMenu', '', TRUE);
        $this->load->view('/pages/administrar/animales/razas', $data);
        $this->load->view('/modales/ModalRaza');
        $this->load->view('/TemplateAdmin/footer');
    }

    public function color() {
        //echo $this->session->userdata('perfil');
        $data['pluging'] = array(
            'DataTable' => $this->load->view('/TemplateAdmin/Pluging/DataTable', '', TRUE),
        );
        $this->load->view('/TemplateAdmin/header',$data);
        $this->load->view('/TemplateAdmin/MenuPrincipal');
        $data['titulo'] = "color";
        $data['MenuAdmin'] = $this->load->view('/pages/administrar/AdministrarMenu', '', TRUE);
        $this->load->view('/pages/administrar/animales/color', $data);
           $this->load->view('/modales/modal');
        $this->load->view('/TemplateAdmin/footer');
    }

    public function negocios() {
       // echo $this->session->userdata('perfil');
        //$data["sesion"] = $this->session->userdata('logged');
        $this->load->view('/TemplateAdmin/header');
        $this->load->view('/TemplateAdmin/MenuPrincipal');
        $data['titulo'] = "Negocios";
        $data['MenuAdmin'] = $this->load->view('/pages/administrar/AdministrarMenu', '', TRUE);
        $this->load->view('/pages/administrar/negocios/negocios', $data);
        $this->load->view('/TemplateAdmin/footer');
    }

}
