<?php
class Home_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function cargarMenu($tipo){
        $this->db->where('estado',1);
        $this->db->where('id_tipo_opcion IN ('.$tipo.')');
        return $this->db->get('menu')->result_array();
    }
    
    public function cargarSubMenu($id_menu){
        $this->db->where('estado',1);
        $this->db->where('id_menu',$id_menu);
        return $this->db->get('sub_menu')->result_array();
    }

    public function cargarDescensoSubMenu($id_sub_menu){
        $this->db->where('estado',1);
        $this->db->where('id_sub_menu',$id_sub_menu);
        return $this->db->get('descenso_sub_menu')->result_array();
    }
}