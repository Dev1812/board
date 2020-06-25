<?php
class welcome_model extends CI_Model {

	public function a() {
		
		
		$inser1t = array(
			'id' => 'sdfds' ,
			'title' =>  'tewt',
			'text' => 'sdfds' ,
			'ip' => 'sdfds' ,
			'time_created' => 'sdfds' ,
			'hash' => 'sdfds');
			$this->db->insert('words', $inser1t);
			var_dump( $this-db->insert_id());//Возвращает id последней добавленной записи
	}

}

?>