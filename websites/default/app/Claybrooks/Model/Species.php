<?php
/**
 * Created by PhpStorm.
 * User: juddu
 * Date: 02/04/2020
 * Time: 13:09
 */

class Species
{
    public $con;
    public $load;
    public $table;

    public function __construct()
    {
        $this->con = new Connection();
        $this->load = $this->con->open();
        $this->table = new DatabaseTable($this->load, 'species', 'species_id');

    }

    public function addSpecies($record) {
        $this->table->save($record);
    }

    public function loadSpecies() {
        return $species = $this->table->findAll();
    }

    public function loadSingle($key1) {
        return $single = $this->table->find('species_id', $key1);
    }

    public function editSpecies($record)
    {
        $this->table->save($record);
    }

    public function deleteSpecies($key)
    {
        $this->table->delete($key);
    }

}