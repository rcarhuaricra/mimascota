<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validation_model
 *
 * @author RICV
 */
class ImagesModel extends CI_Model {
    var $table = "imagenes";
    public function InsertNewImage($insert) {
        return $this->db->insert($this->table, $insert);
    }
   

}
