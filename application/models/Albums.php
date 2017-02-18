<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Albums extends CI_Model {
	
	public function __construct()	{
  		$this->load->database(); 
	}

    function get_albums() {
    	//$this->db->cache_on();
    	$query = $this->db->query('SELECT * FROM albums ORDER BY id ASC');

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
    	print_r($album);

		$this->db->insert('albums', $album); 

		//return $query->result();
    }
    
	function delete_album($id) {
    	//$this->db->cache_on();
    	//$query = $this->db->query('INSERT INTO albums ');
    	
    	print_r($id);

		$this->db->where('id', $id);
		$this->db->delete('albums'); 

		//return $query->result();
    }
    
    function find_user_pass($user, $pass) {
    	$query = $this->db->query("SELECT * FROM users2 where username = '$user' and password = '$pass'");
    	
    	return $query->result();
    }
    
}