<?php
/**
 * Created by PhpStorm.
 * User: juddu
 * Date: 02/04/2020
 * Time: 13:18
 */

class MedicalRecord
{
    public $con;
    public $load;
    public $table;

    public function __construct()
    {
        $this->con = new Connection();
        $this->load = $this->con->open();
        $this->table = new DatabaseTable($this->load, 'medical_record', 'medical_id');

    }

    public function addMedRecord($record) {
        $this->table->save($record);
    }

    public function loadMed($key) {
        return $meds = $this->table->find('animal_id', $key);
    }
}