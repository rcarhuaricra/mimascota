<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ColorController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code       
        $this->load->model('ColorModel');
    }

    public function NuevoColor() {

        $data['ID_COLORMASCOTA'] = GUID();
        $data['COLOR'] = $this->input->post("Color");
        $data['COLORMASCOTA_ESTADO'] = "1";
        $data['USERREG'] = $_SESSION['id'];
        $data['FECREG'] = HOY;
        //echo json_encode($data);
        echo $this->ColorModel->InsertNewColor_model($data);
    }

    public function ColorTable() {
        $response = $this->ColorModel->colorTable_model();
        $json = array(
            "data" => $response['data'],
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $response['Cantidadtotal'],
            "recordsFiltered" => $response['CantidadFiltro']
        );
        echo json_encode($json);
    }

    public function UpdateColorEstado() {
        $id = $this->input->post("id");
        echo $this->ColorModel->UpdateColor_model($id);
    }

}
