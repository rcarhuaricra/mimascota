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
class EspeciesModel extends CI_Model {

    var $order_column = array("ESPECIE", "TEXTESTADO");
    var $table = "especie";

    public function especie_model() {
        $return["Cantidadtotal"] = $this->db->count_all_results($this->table);
        $query = "SELECT E.`ID_ESPECIE`, E.`ESPECIE`, E.`ID_ESTADO`, ES.`TEXTESTADO` FROM `$this->table` E
                 INNER JOIN `estados_registro` ES ON ES.`ID_ESTADO_REGISTRO`=E.`ID_ESTADO` ";
        if ($_POST["search"]["value"] != "") {
            $busqueda = $_POST["search"]["value"];
            $query .= " WHERE E.`ESPECIE` LIKE '%$busqueda%' or  ES.`TEXTESTADO` LIKE '%$busqueda%'";
        }
        if (isset($_POST["order"])) {
            $columna = $this->order_column[$_POST['order']['0']['column']];
            $direccion = $_POST['order']['0']['dir'];
            $query .= " ORDER BY $columna $direccion ";
        } else {
            $query .= " ORDER BY E.`ESPECIE` ASC ";
        }
        $filtro = $this->db->query($query);
        $return["CantidadFiltro"] = $filtro->num_rows();
        if ($_POST["length"] != -1) {
            $longitud = $_POST['length'];
            $inicio = $_POST['start'];
            $query .= " LIMIT $longitud OFFSET $inicio";
        }
        $data = $this->db->query($query);
        //echo $query;

        $return["data"] = $data->result();
        return $return;
    }

    public function InsertNewEspecie_model($data) {
        return $this->db->insert($this->table, $data);
    }

    public function UpdateEspecie_model($id) {

        $data['USERMOD'] = $_SESSION['id'];
        $data['FECMOD'] = HOY;
        $query = $this->db->get_where($this->table, array('ID_ESPECIE' => $id));
        foreach ($query->result() as $row) {
            $estado = $row->ID_ESTADO;
        }
        if ($estado == "1") {
            $data['ID_ESTADO'] = "2";
        } else {
            $data['ID_ESTADO'] = "1";
        }
        return $this->db->update($this->table, $data, array('ID_ESPECIE' => $id));
    }

    
}
