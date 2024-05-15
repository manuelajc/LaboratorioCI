<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("usersModel");
        $this->load->helper(array('form', 'url'));
    }


    public function index()
    {
        $info["titulo"] = "Registra tus datos";
        $this->load->view('users/index', $info);
    }

    public function registrar() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Name', 'Nombre', 'required');
        $this->form_validation->set_rules('LastName', 'Apellido', 'required');
        $this->form_validation->set_rules('Telephone', 'Teléfono', 'required|numeric');
        $this->form_validation->set_rules('Password', 'Contraseña', 'required|min_length[8]');
        
        if ($this->form_validation->run() == FALSE) {

            $info["titulo"] = "Registra tus datos";
            $this->load->view('users/index', $info);
        } else {
            $Name = $this->input->post("Name");
            $LastName = $this->input->post("LastName");
            $Telephone = $this->input->post("Telephone");
            $Password = $this->input->post("Password");
            
            $resultado = $this->usersModel->registro($Name, $LastName, $Telephone, $Password);
            
            if ($resultado) {
                $this->load->view('users/correcto');
            } else {
                $info["titulo"] = "Registra tus datos";
                $info["error"] = "Hubo un error al registrar los datos. Por favor, inténtalo de nuevo.";
                $this->load->view('users/index', $info);
            }
        }
    }

    public function eliminar_usuario($id) {
        $resultado = $this->usersModel->eliminar_usuario($id);
        
        if ($resultado) {
            redirect('users/mostrar_usuarios', 'refresh');
        } else {
            redirect('users/mostrar_usuarios', 'refresh');
        }
    }
    
    public function mostrar_usuarios() {
        $data['usuarios'] = $this->usersModel->mostrar_usuarios();
        $this->load->view('users/lista_usuarios', $data);

    }
    
    

   
}
