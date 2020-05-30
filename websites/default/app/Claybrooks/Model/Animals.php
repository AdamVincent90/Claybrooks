<?php
/**
 * Created by PhpStorm.
 * User: juddu
 * Date: 02/04/2020
 * Time: 13:10
 */

class Animals
{
    public $con;
    public $load;
    public $table;

    public function __construct()
    {
        $this->con = new Connection();
        $this->load = $this->con->open();
        $this->table = new DatabaseTable($this->load, 'animal', 'animal_id');

    }

    public function addAnimals($record) {
        $this->table->save($record);
    }

    public function loadAnimals() {
        return $animals = $this->table->findAll();
    }

    public function loadSingleAnimal($arg = 'animal_id', $key1) {

        return $animals = $this->table->find($arg, $key1);
    }

    public function editAnimal($record) {
        $this->table->save($record);
    }

    public function deleteAnimal($id) {
        $this->table->delete($id);
    }
}