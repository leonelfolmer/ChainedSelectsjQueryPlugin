<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cs_model extends CI_Model 
{
    
    function __construct() {
        parent::__construct(); 
        $this->load->database();
    }
    
    function get_dropdown($name, $value) {
        $arr = array();
        switch($name) {
            case 'estado' :
                $query = $this->db->where('estado_id', $value)
                    ->get('cidades');
                
                if($query->num_rows() > 0)
                {
                    foreach($query->result() as $row)
                    {
                        $arr[] = array($row->id => $row->nome);
                    }
                }
				
                else {
                    $arr[] = array('0' => 'Sem Cidade');
                }

            break;
			
            case 'cidade' :
                $query = $this->db->where('cidade_id', $value)
                    ->get('bairros');
                
                if($query->num_rows() > 0) {
                    foreach($query->result() as $row) {
                        $arr[] = array($row->id => $row->nome);
                    }
                }
				
                else {
                    $arr[] = array('0' => 'Sem Bairro');
                }
				
            break;
			
            default :
                $arr[] = array(
                    array('1' => 'Data 1'),
                    array('2' => 'Data 2'),    
                    array('3' => 'Data 3')
                );
				
            break;
        }
		
        return $arr;
    }

}  