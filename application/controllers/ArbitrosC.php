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

    public function detalleArbitro($IdArbitro){
        $this->load->model('ArbitrosM');
        $data['arbitro'] = $this->ArbitrosM->getArbitro($IdArbitro);
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('arbitros/detalleArbitro.php', $data);
        $this->load->view('headers/footer.php');
    }

    public function borrarArbitro($IdArbitro){
        $this->load->model('ArbitrosM');
        if($this->ArbitrosM->deleteArbitro($IdArbitro)){
            redirect(base_url('index.php/ArbitrosC/show'), 'refresh');
        }
    }

    public function getArbitro($IdArbitro){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('headers/footer.php');
    }
}?>