<?php
function cargarDatosEmpresa(){
    $CI =& get_instance();
    return (array) $CI->db->get('datos_empresa')->row();
}