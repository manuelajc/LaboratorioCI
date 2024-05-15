<?php
class usersModel extends CI_model{

    public function __construct()
    {
        $this->load->database();
    }

    public function registro($Name, $LastName, $Telephone){
        return $this->db->insert("users", ["Name" => $Name, "LastName" => $LastName, "Telephone" => $Telephone]);
    }

    public function mostrar_usuarios() {
        return $this->db->get('users')->result();
    }

    public function eliminar_usuario($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');

        return $this->db->affected_rows() > 0;
    }
}
    

?>