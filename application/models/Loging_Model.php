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
class Loging_Model extends CI_Model {

    public function llamarDatosSesion($user, $pass) {
        $query = "SELECT * FROM `users` U WHERE (U.`EMAIL`='$user' OR U.`USER`= '$user') AND U.`PASSWORD`='$pass'";
        $consulta = $this->db->query($query);
        return $consulta->row();
    }   
}
