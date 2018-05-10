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
class ColorModel extends CI_Model {

    var $order_column = array("COLOR", "COLORMASCOTA_ESTADO");
    var $table = "colormascota";

    public function colorTable_model() {
        $return["Cantidadtotal"] = $this->db->count_all_results($this->table);
        $query = "SELECT CM.`ID_COLORMASCOTA`, CM.`COLOR`, ES.`TEXTESTADO` FROM `$this->table` CM
                INNER JOIN `estados_registro` ES ON ES.`ID_ESTADO_REGISTRO`=CM.`COLORMASCOTA_ESTADO`";
        if ($_POST["search"]["value"] != "") {
            $busqueda = $_POST["search"]["value"];
            $query .= " WHERE CM.`COLOR` LIKE '%$busqueda%' or  ES.`TEXTESTADO` LIKE '%$busqueda%'";
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

    public function InsertNewColor_model($data) {
        return $this->db->insert($this->table, $data);
    }

    public function UpdateColor_model($id) {

        $data['USERMOD'] = $_SESSION['id'];
        $data['FECMOD'] = HOY;
        $query = $this->db->get_where('colormascota', array('ID_COLORMASCOTA' => $id));
        foreach ($query->result() as $row) {
            $estado = $row->COLORMASCOTA_ESTADO;
        }
        if ($estado == "1") {
            $data['COLORMASCOTA_ESTADO'] = "2";
        } else {
            $data['COLORMASCOTA_ESTADO'] = "1";
        }
        return $this->db->update($this->table, $data, array('ID_COLORMASCOTA' => $id));
    }

}
