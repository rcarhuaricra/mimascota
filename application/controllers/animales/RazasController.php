<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RazasController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code       
        $this->load->model('RazasModel');
    }

    public function NuevaRaza() {

        $data['ID_COLORMASCOTA'] = GUID();
        $data['COLOR'] = $this->input->post("Color");
        $data['COLORMASCOTA_ESTADO'] = "1";
        $data['USERREG'] = $_SESSION['id'];
        $data['FECREG'] = HOY;
        echo $this->RazasModel->InsertNewRazas_model($data);
    }

    public function RazasTable() {
        $response = $this->RazasModel->razasTable_model();
        $json = array(
            "data" => $response['data'],
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $response['Cantidadtotal'],
            "recordsFiltered" => $response['CantidadFiltro']
        );
        echo json_encode($json);
    }

    public function UpdateRazasEstado() {
        $id = $this->input->post("id");
        echo $this->RazasModel->UpdateRazas_model($id);
    }

}
