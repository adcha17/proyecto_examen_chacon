<?php 

/**
* Class Exp_lab_model
*/
class Exp_lab_model extends CI_Model
{
    
    private $tabla;

    public function __construct()
        {
            
            parent::__construct();

            $this->tabla = "exp_lab";
        }
    
    
    public function add($_post)
    {
        if (empty($_post))
            return false;
        
        return $this->db->insert($this->tabla,$_post);
    }
    //actualizar registros
    public function update($_post,$id)
    {
        if (empty($_post)) 
            return false;
        
        if (!is_numeric($id))
            return false;
        
       
        return $this->db->where("id",$id)->update($this->tabla,$_post);
    }
     public function delete($_post,$id)
    {
        if (empty($_post)) 
            return false;
        
        if (!is_numeric($id))
            return false;
        
       
        return $this->db->where("id",$id)->update($this->tabla,$_post);
    }
    //listado de registros
    public function get()
    {
        return $this->db->where("estado!=",99)->get($this->tabla)->result();    
    }
    //busqueda de un registro
    public function get_by_id($id)
    {
        if (!is_numeric($id)) 
            return false;
        
        return $this->db->where("id",$id)->get($this->tabla)->row();
    }
    
}

