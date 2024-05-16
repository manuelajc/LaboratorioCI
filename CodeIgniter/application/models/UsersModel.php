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

    public function obtener_usuario_por_id($id) {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }

    public function actualizar_usuario($id, $datos) {
        $this->db->where('id', $id);
        $this->db->update('users', $datos);
        return $this->db->affected_rows() > 0;
    }
}
    

?>