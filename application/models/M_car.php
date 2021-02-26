<?php class M_car extends CI_Model{ 	

	function armada(){ 
       return $this->db->query("SELECT * from car")->result();
    }
	
}
?>