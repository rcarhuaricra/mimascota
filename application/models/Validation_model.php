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
class Validation_model extends CI_Model {

    public function validar_User_Or_Email($user) {
        $query = "SELECT * FROM `users` U WHERE U.`USER`= '$user' OR U.`EMAIL`='$user'";
        $consulta = $this->db->query($query);
        return $consulta->num_rows();
    }

    public function validar_Password($user, $pass) {
        $query = "SELECT * FROM `users` U
                WHERE (U.`USER`= '$user' OR U.`EMAIL`='$user')
                AND U.`PASSWORD`='$pass'";
        $consulta = $this->db->query($query);
        return $consulta->num_rows();
    }

    public function validar_Email($email) {
        $query = "SELECT * FROM `users` U WHERE U.`EMAIL`='$email'";
        $consulta = $this->db->query($query);
        return $consulta->num_rows();
    }

    public function validar_User($user) {
        $query = "SELECT * FROM `users` U WHERE U.`USER`= '$user'";
        $consulta = $this->db->query($query);
        return $consulta->num_rows();
    }

    public function validar_Especie($input) {
         $query = "SELECT * FROM `especie` E WHERE E.`ESPECIE`='$input'";
        $consulta = $this->db->query($query);
        return $consulta->num_rows();
    }
    public function validar_color($input) {
         $query = "SELECT * FROM `colormascota` CM WHERE CM.`color`='$input'";
        $consulta = $this->db->query($query);
        return $consulta->num_rows();
    }
    public function validar_Documento($id) {
         $query = "SELECT NUMERO_DOCUMENTO FROM `users` WHERE `ID_PERSONA`='$id'";
        $consulta = $this->db->query($query);
        return $consulta->row();
    }

}
