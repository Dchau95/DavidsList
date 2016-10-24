<?php

/*
 * Interface for classes (repositories) that make database calls
 * such as retrieving using one search param, saving/inserting, and removing
 */
interface DatabaseRepositoryInterface{
	public function find($id, $column);
	public function save($object);
	public function remove($object);
}