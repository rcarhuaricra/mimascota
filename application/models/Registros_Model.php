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
class Registros_Model extends CI_Model {

    public function Registrar_Usuarios($data) {
        return $this->db->insert('users', $data);
    }   
}
