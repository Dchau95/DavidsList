<?php

class UserImageRepo implements DatabaseRepositoryInterface{
	protected $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function find($searchParam, $column){
		return $this->db->find($searchParam, 'userImage', 'UserImages', $column);
	}

	public function save($userImage){
		$this->db->save($userImage, 'userImage');
	}

	public function remove($userImage){
		$this->db->remove($userImage, 'userImage');

	}
}

class AllUserImagesQuery implements AllQueryInterface{
	protected $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function fetch($fields){
		//return $this->db->select($fields)->from('users')->rows();
	}
}