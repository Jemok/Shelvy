<?php namespace App\Interfaces\Search;

/**
 * AN ABSTRACTION OF THE SEARCH AND FILTERING FUNCTIONALITY FOR SKOOLSPACE APP
 * Interface SearchInterface
 * @package App\Interfaces\Search
 *
 *
 */

interface SearchInterface{

    /**
     * Abstracts the searching and filtering functionality
     * @param $key
     * @param string $query
     * @param string $index
     * @param string $type
     * @param string $modelField
     * @param string $key_one
     * @param string $key_two
     * @param string $model
     * @return mixed
     *
     */
    public function search($key = "", $query = "", $index = "", $type ="", $modelField="", $key_one ="", $key_two="", $model="");

/***
 * Abstracts the retrieval of all records
 * @param string $model
 * @param string $query
 * @param string $key
 * @param string $index
 * @param string $type
 * @return mixed
 */
    public function all($model="", $query = "", $key="", $index="", $type="");

    public function searchFile($query);
}