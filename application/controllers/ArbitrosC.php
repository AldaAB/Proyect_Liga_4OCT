<?php
class ArbitrosC extends CI_Controller
{
    public function show(){
        $this->load->model('ArbitrosM');
        $data['arbitros'] = $this->ArbitrosM->getArbitros();
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('arbitros/listaArbitros.php', $data);
        $this->load->view('headers/footer.php');
    }

    public function getArbitro($IdArbitro){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('headers/footer.php');
    }
}?>