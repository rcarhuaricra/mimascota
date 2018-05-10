<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EspeciesController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code       
        $this->load->model('EspeciesModel');
    }

    public function color($all = null) {
        $data = $this->Especies_Model->colorMascota_model($all);
        echo json_encode($data);
    }

    public function EspecieTable() {
        $response = $this->EspeciesModel->especie_model();
        $json = array(
            "data" => $response['data'],
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $response['Cantidadtotal'],
            "recordsFiltered" => $response['CantidadFiltro']
        );
        echo json_encode($json);
    }
    public function EspecieEstado(){
        echo $this->input->post("id");
        
    }

    public function raza($all = null) {
        $data = $this->Especies_Model->raza_model($all);
        echo json_encode($data);
    }

}
