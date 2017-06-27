<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Albums extends CI_Model {
	
	public function __construct()	{
  		$this->load->database(); 
	}

    function get_albums($id) {
    	//$this->db->cache_on();
    	if($id) {
    		$query = $this->db->query('SELECT * FROM albums WHERE id = ' . $id . 'ORDER BY id ASC');
    	} else {
    		$query = $this->db->query('SELECT * FROM albums ORDER BY id ASC');	
    	}
    	

		return $query->result();
    }
    
	function put_album($album) {
    	//$this->db->cache_on();
    	//$query = $this->db->query('INSERT INTO albums ');
    	print_r($album);
    	// batch is just for many elements as a batch! Must be arrays inside a big array
    	/*$arraytest = 
   array(
      'id' => '3',
    'artist' => 'Metamorfosi',
    'title' => 'Inferno',
    'label' => 'Vedette',
    'year' => '1974',
    'country' => 'Italy',
    'value' => '1500'
   );*/
    	//$this->db->insert_batch('albums', $arraytest);
    	$this->db->where('id', $album['id']);
		$this->db->update('albums', $album); 

		//return $query->result();
    }
    
	function post_album($album) {
    	//$this->db->cache_on();
    	//$query = $this->db->query('INSERT INTO albums ');
    	

		$this->db->insert('albums', $album);

		// get last insert ID!
		$insert_id = $this->db->insert_id();
		
		print_r($insert_id);

		//return $query->result();
    }
    
	//function delete_album($id) {
    function delete_album($artist) {
    	//$this->db->cache_on();
    	//$query = $this->db->query('INSERT INTO albums ');
    	
    	//print_r($id);
    	print_r($artist);

		//$this->db->where('id', $id);
		$this->db->where('artist', $artist);
		$this->db->delete('albums'); 

		//return $query->result();
    }
    
    function find_user_pass($user, $pass) {
    	$query = $this->db->query("SELECT * FROM users2 where username = '$user' and password = '$pass'");
    	
    	return $query->result();
    }
    
}