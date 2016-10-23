<?php

class UserRepo implements DatabaseRepositoryInterface{
	protected $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function find($searchParam, $column){
		return $this->db->find($id, 'users', 'User', $column);
	}

	public function save($user){
		$this->db->save($user, 'users');
	}

	public function remove ($user){
		$this->db->remove($user, 'users');
	}

}

class AllUsersQuery implements AllQueryInterface{
	protected $db;
	
	public function __construct(Database $db){
		$this->db = $db;
	}

	public function fetch($fields){
		//return $this->db->select($fields)->from('users')->rows();
	}

}