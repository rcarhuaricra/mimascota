<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EspeciesController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code       
        $this->load->model('EspeciesModel');
    }

    public function NuevaEspecie() {

        $data['ID_ESPECIE'] = GUID();
        $data['ESPECIE'] = $this->input->post("Especie");
        $data['ID_ESTADO'] = "1";
        $data['USERREG'] = $_SESSION['id'];
        $data['FECREG'] = HOY;
        //echo json_encode($data);
        echo $this->EspeciesModel->InsertNewEspecie_model($data);
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

    public function UpdateEspecieEstado() {
        $id = $this->input->post("id");
        echo $this->EspeciesModel->UpdateEspecie_model($id);
    }

}
