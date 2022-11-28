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

    public function insertArbitro(){
        $this->load->model('ArbitrosM');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('arbitros/insertArbitro');
            $this->load->view('headers/footer.php');
        }
        else {
            $this->ArbitrosM->insertArbitro();
            redirect(base_url('index.php/ArbitrosC/show'), 'refresh');
        }
    }

    public function updateArbitro($IdArbitro){
        $this->load->model('ArbitrosM');
        $data['arbitro'] = $this->ArbitrosM->getArbitro($IdArbitro);

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('arbitros/updateArbitro', $data);
            $this->load->view('headers/footer.php');
        }
        else {
            $this->ArbitrosM->updateArbitro($IdArbitro);
            redirect(base_url('index.php/ArbitrosC/show'), 'refresh');
        }
    }

    public function getArbitro($IdArbitro){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('headers/footer.php');
    }
}?>