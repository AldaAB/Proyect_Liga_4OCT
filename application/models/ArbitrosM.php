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
} ?>