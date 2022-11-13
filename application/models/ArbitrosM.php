<?php

class ArbitrosM extends CI_Model
{
    function getArbitros(){
        $query = $this->db->get('Arbitros');
        return $query->result();
    }
} ?>