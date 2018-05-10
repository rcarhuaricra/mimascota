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
class RazasModel extends CI_Model {

    var $order_column = array("RAZA", "ESPECIE", "TXT_PELIGRORAZA", "TEXTESTADO");
    var $table = "raza";

    public function razasTable_model() {
        $return["Cantidadtotal"] = $this->db->count_all_results($this->table);       
        $query="SELECT R.`ID_RAZA`,R.`RAZA`,E.`ESPECIE`,PR.`TXT_PELIGRORAZA`, ER.`TEXTESTADO` FROM `$this->table` R
                INNER JOIN `especie` E ON R.`ID_ESPECIE`=E.`ID_ESPECIE`
                INNER JOIN `peligro_raza` PR ON PR.`ID_PELIGRORAZA`=R.`ID_PELIGRORAZA`
                INNER JOIN `estados_registro` ER ON ER.`ID_ESTADO_REGISTRO`=R.`ID_ESTADO_REGISTRO` ";
        if ($_POST["search"]["value"] != "") {
            $busqueda = $_POST["search"]["value"];
            $query .= " WHERE R.`RAZA` LIKE '%$busqueda%' 
                    or  E.`ESPECIE` LIKE '%$busqueda%'
                    or  R.`ID_ESTADO_REGISTRO` LIKE '%$busqueda%'
                    or  PR.`TXT_PELIGRORAZA` LIKE '%$busqueda%'";
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
        $return["data"] = $data->result();
        return $return;
    }

    public function InsertNewRazas_model($data) {
        return $this->db->insert($this->table, $data);
    }

    public function UpdateRazas_model($id) {

        $data['USERMOD'] = $_SESSION['id'];
        $data['FECMOD'] = HOY;
        $query = $this->db->get_where($this->table, array('ID_RAZA' => $id));
        foreach ($query->result() as $row) {
            $estado = $row->ID_ESTADO_REGISTRO;
        }
        if ($estado == "1") {
            $data['ID_ESTADO_REGISTRO'] = "2";
        } else {
            $data['ID_ESTADO_REGISTRO'] = "1";
        }
        return $this->db->update($this->table, $data, array('ID_RAZA' => $id));
    }

}
