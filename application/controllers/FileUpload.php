<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FileUpload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code       
        $this->load->model('ImagesModel');
    }

    public function index() {
        $nombre_fichero = carpetas();
        if (!file_exists($nombre_fichero)) {
            if (!mkdir($nombre_fichero, 777, true)) {
                $data["error"] = "Fallo al Crear Carpetas";
                echo json_encode($data);
            }
        }
        $output = [];

        $filesCount = count($_FILES['inputImage']['name']);
        for ($i = 0; $i < $filesCount; $i++) {
            $_FILES['inputIma']['name'] = $_FILES['inputImage']['name'][$i];
            $_FILES['inputIma']['type'] = $_FILES['inputImage']['type'][$i];
            $_FILES['inputIma']['tmp_name'] = $_FILES['inputImage']['tmp_name'][$i];
            $_FILES['inputIma']['error'] = $_FILES['inputImage']['error'][$i];
            $_FILES['inputIma']['size'] = $_FILES['inputImage']['size'][$i];
            $nombre = limpiarName($_FILES['inputIma']['name']);
            $config['upload_path'] = $nombre_fichero;
            $config['allowed_types'] = 'jpg|png|gif|pdf|doc|docx|xls|xlsx';
            $config['max_size'] = 10000;
            $config['file_name'] = $nombre;
            $this->load->library('upload', $config);
            //$this->upload->do_upload('inputImage');
            $this->upload->initialize($config);
            //$this->upload->do_upload('inputIma');
            if ($this->upload->do_upload('inputIma')) {
                $data = array("upload_data" => $this->upload->data());
                $insert['ID_IMAGEN'] = GUID();
                $insert['TITULO_IMG'] = $data['upload_data']['raw_name'];
                $insert['TYPE_IMG'] = $data['upload_data']['file_type'];
                $insert['URL_IMAGEN'] = substr($nombre_fichero . $data['upload_data']['file_name'], 1);
                $insert['DESCRIPTION'] = '';
                $insert['USERREG'] = $_SESSION['id'];
                $insert['FECREG'] = HOY;

                if ($this->ImagesModel->InsertNewImage($insert)) {
                    array_push($output, array(
                        'uploaded' => $this->upload->data()
                    ));
                }
            } else {
                $output = ['error'=>$this->upload->display_errors()];
                
                /*array_push($output, array(
                    //'uploaded' => 'failed'
                    'error' => $this->upload->display_errors()
                ));*/
            }
            /* array_push($output, array(
              'uploaded' => 'OK'
              )); */
        }
        echo json_encode($output);
    }

}
