<?php

class ArbitrosM extends CI_Model
{
    function getArbitros(){
        $query = $this->db->get('Arbitros');
        return $query->result();
    }

    function getArbitro($IdArbitro){
        $this->db->where('IdArbitro', $IdArbitro);
        $query = $this->db->get('Arbitros');
        return $query->result();
    }

    function deleteArbitro($IdArbitro){
        $this->db->where('IdArbitro', $IdArbitro);
        $this->db->delete('Arbitros');
        return TRUE;
    }

    function insertArbitro(){
        $data = array(
            'Nombre' => $this->input->post('Nombre'),
            'ApellidoPaterno' => $this->input->post('ApellidoPaterno'),
            'ApellidoMaterno' => $this->input->post('ApellidoMaterno'),
            'Telefono' => $this->input->post('Telefono'),
            'FechaNacimiento' => $this->input->post('FechaNacimiento'),
            'Foto' => $this->input->post('Foto'),
        );

        $this->db->insert('Arbitros', $data);
    }

    function updateArbitro($IdArbitro){
        $data = array(
            'Nombre' => $this->input->post('Nombre'),
            'ApellidoPaterno' => $this->input->post('ApellidoPaterno'),
            'ApellidoMaterno' => $this->input->post('ApellidoMaterno'),
            'Telefono' => $this->input->post('Telefono'),
            'FechaNacimiento' => $this->input->post('FechaNacimiento'),
            'Foto' => $this->input->post('Foto'),
        );
        $this->db->where('IdArbitro', $IdArbitro);
        $this->db->update('Arbitros', $data);
    }
} ?>