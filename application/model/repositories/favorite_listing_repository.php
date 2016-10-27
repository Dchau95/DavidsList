<?php

/*
 * Repository pattern
 * Class that acts as the interface between the app and the Favorite Listing table
 * Make calls with this class if you need to find rows using one column parameter
 * or need to delete or insert one row
 */
class FavoriteListingRepo implements DatabaseRepositoryInterface {
	protected $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function find($searchParam, $column){
		return $this->db->find($searchParam, 'favoriteListing', 'FavoriteListing', $column);
	}

	public function save($favoriteListing){
		$this->db->save($favoriteListing, 'favoriteListing');
	}

	public function remove($favoriteListing){
		$this->db->remove($favoriteListing, 'favoriteListing');
	}
}

class AllFavoriteListingsQuery implements AllQueryInterface{
	protected $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function fetch($fields){
	}
}