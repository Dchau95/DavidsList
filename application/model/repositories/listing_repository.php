<?php

/*
 * Repository pattern
 * Class that acts as the interface between the app and the Listings table
 * Make calls with this class if you need to find rows using one column parameter
 * or need to delete or insert one row
 */
class ListingRepo implements DatabaseRepositoryInterface{
	protected $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function find($searchParam, $column){
		return $this->db->find($searchParam, 'listing', 'Listing', $column);
	}

	public function save($listing){
		$this->db->save($listing, 'listing');
	}

	public function remove($listing){
		$this->db->remove($listing, 'listing');
	}

}

class AllListingQuery implements AllQueryInterface{
	protected $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function fetch($fields){
		//return $this->db->select($fields)->from('listings')->rows();
	}
}